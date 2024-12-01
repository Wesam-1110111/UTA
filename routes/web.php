<?php


use Illuminate\Support\Facades\Route;
use App\Models\Classroom;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/download/{file}', 'DownloadsController@download');
Route::get('/downloadvid/{file}', 'DownloadsController@downloadvid');

//Auth::routes();
Route::get('loginuser', [App\Http\Controllers\HomeController::class, 'signup'])->name('rigesterr');
Route::Post('/insert', [App\Http\Controllers\HomeController::class, 'insert'])->name('insertuser');

Route::get('signuptech', [App\Http\Controllers\HomeController::class, 'signup_tech'])->name('rigestertech');
Route::get('/classesss/{id}', function ($id) {
        
    return Classroom::where("Grade_id", $id)->pluck("Name_Class", "id");

})->name('dashboard.Students');

Route::Post('/ins', [App\Http\Controllers\HomeController::class, 'insertttech'])->name('ins');

Route::get('/', 'HomeController@index')->name('selection');
Route::get('/selectionn', 'HomeController@selectionn')->name('selectionn');

Route::get('/test',  'testController@viewdashboard')->name('test');
Route::get('/test2',  'testController@viewdashboard2')->name('test2');

Route::group(['namespace' => 'Auth'], function () {

    Route::get('/login/{type}', 'LoginController@loginForm')->middleware('guest')->name('login.show');
    Route::post('/login', 'LoginController@login')->name('login');
    Route::get('/logout/{type}', 'LoginController@logout')->name('logout');


});



//==============================Translate all pages============================
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth']
    ], function () {

    //==============================dashboard============================
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

    //==============================Grades============================
    Route::group(['namespace' => 'Grades'], function () {
        Route::resource('Grades', 'GradeController');
    });

        //==============================Profile============================
        Route::group(['namespace' => 'Profile'], function () {
            Route::resource('Profile', 'ProfileController');
        });

        //============================== Requests summaries ============================
        Route::group(['namespace' => 'Requests_Summaries'], function () {
            Route::resource('Summaries', 'Requests_SummariesController');
        });

                //============================== Requests Teachers ============================
                Route::group(['namespace' => 'Requests_Teachers'], function () {
                    Route::resource('R_Teachers', 'Requests_TeachersController');
                });

    //==============================Classrooms============================
    Route::group(['namespace' => 'Classrooms'], function () {
        Route::resource('Classrooms', 'ClassroomController');
        Route::post('delete_all', 'ClassroomController@delete_all')->name('delete_all');

        Route::post('Filter_Classes', 'ClassroomController@Filter_Classes')->name('Filter_Classes');

    });

        //==============================Teachers============================
        Route::group(['namespace' => 'Teachers'], function () {
            Route::resource('Teachers', 'TeacherController');
        });


    //==============================Sections============================

    // Route::group(['namespace' => 'Sections'], function () {

    //     Route::resource('Sections', 'SectionController');

    //     Route::get('/classes/{id}', 'SectionController@getclasses');

    // });

    //==============================parents============================

    // Route::view('add_parent', 'livewire.show_Form')->name('add_parent');




    //==============================Classrooms============================
    Route::group(['namespace' => 'Notifications'], function () {
        Route::resource('Notifications', 'NotificationController');
        // Route::post('delete_all', 'ClassroomController@delete_all')->name('delete_all');

        // Route::post('Filter_Classes', 'ClassroomController@Filter_Classes')->name('Filter_Classes');

    });




    //==============================Students============================
    Route::group(['namespace' => 'Students'], function () {
        Route::resource('Students', 'StudentController');
        // Route::resource('online_classes', 'OnlineClasseController');
        Route::get('indirect_admin', 'OnlineClasseController@indirectCreate')->name('indirect.create.admin');
        Route::post('indirect_admin', 'OnlineClasseController@storeIndirect')->name('indirect.store.admin');
        // Route::resource('Graduated', 'GraduatedController');
        // Route::resource('Promotion', 'PromotionController');
        // Route::resource('Fees_Invoices', 'FeesInvoicesController');
        // Route::resource('Fees', 'FeesController');
        // Route::resource('receipt_students', 'ReceiptStudentsController');
        // Route::resource('ProcessingFee', 'ProcessingFeeController');
        // Route::resource('Payment_students', 'PaymentController');
        // Route::resource('Attendance', 'AttendanceController');
        Route::get('download_file/{filename}', 'LibraryController@downloadAttachment')->name('downloadAttachment');
        Route::resource('library', 'LibraryController');
        Route::post('Upload_attachment', 'StudentController@Upload_attachment')->name('Upload_attachment');
        Route::get('Download_attachment/{studentsname}/{filename}', 'StudentController@Download_attachment')->name('Download_attachment');
        Route::post('Delete_attachment', 'StudentController@Delete_attachment')->name('Delete_attachment');
        
    });

    //==============================subjects============================
    Route::group(['namespace' => 'Subjects'], function () {
        Route::resource('subjects', 'SubjectController');
    });

    //==============================Quizzes============================
    // Route::group(['namespace' => 'Quizzes'], function () {
    //     Route::resource('Quizzes', 'QuizzController');
    // });

    //==============================questions============================
    // Route::group(['namespace' => 'questions'], function () {
    //     Route::resource('questions', 'QuestionController');
    // });

    //==============================Setting============================
    Route::resource('settings', 'SettingController');

    //==============================Admin Lectures============================
    Route::group(['namespace' => 'Lecture'], function () {

        Route::resource('ALectures', 'LectureController');
        Route::get('/sub/{id}', 'LectureController@getsubjects');



    });

});
