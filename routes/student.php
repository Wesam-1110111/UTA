<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Chat\Chat;
use App\Models\My_Subjects;
use App\Models\Subject;
use App\Models\viewers;
/*
|--------------------------------------------------------------------------
| student Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




// Route::get('/aa', 'SingupController@index')->name('ee');



//==============================Translate all pages============================
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth:student']
    ], function () {

    //==============================dashboard============================
    Route::get('student/dashboard/{Favorite?}/{id?}', function ($Favorite = null,$id = null) {
        

        $class_id = Auth()->user()->Classroom_id;


        if($id == null) {
            
            
                $viewers = viewers::where('student_id',Auth()->user()->id)->first();
                if($viewers == null) {
                    $store_viewers = new viewers();
                    $store_viewers->student_id = Auth()->user()->id;
                    $store_viewers->save();
                    
                }
            

            return view('pages.Students.dashboard',compact('Favorite','class_id'));
        }else{
            return view('pages.Students.dashboard',compact('id','class_id'));
        }

        

    })->name('dashboard.Students');



    Route::post('student/dashboard/{Favorite?}/{id?}', function (Request $request,$Favorite = null,$id = null) {
        
        $class_id = $request->Grade_id;

        if($id == null) {
            return view('pages.Students.dashboard',compact('Favorite','class_id'));
        }else{
            return view('pages.Students.dashboard',compact('id','class_id'));
        }

    })->name('dashboard.Students.filter');



    Route::get('ChangeFavorite/{id?}/{Favorite?}', function ($id,$Favorite) {
             


            if($Favorite == 1) {
                $subject = Subject::findorfail($id);

                $my_subject =  new My_Subjects();
                $my_subject->name = $subject->name;
                $my_subject->subject_id = $subject->id;
                $my_subject->grade_id = $subject->grade_id;
                $my_subject->classroom_id = $subject->classroom_id;
                $my_subject->teacher_id = $subject->teacher_id;
                $my_subject->student_id = Auth()->user()->id;
                $my_subject->save();
                App\Models\Subject::where('id',$id)->update(['Favorite' => 1]);

    
                toastr()->success(trans('messages.move'));
            }else{
                
                $my_subject = My_Subjects::where('subject_id',$id)->delete();

                toastr()->success(trans('messages.receve'));
            }
            return back();

            // My_Subjects
    })->name('Students.Favorite');
    

    Route::get('showchat/{id?}',  [Chat::class, 'render'])->name('showchat');
    Route::post('sendchat/{id}',  [Chat::class, 'store'])->name('sendchat');



    Route::group(['namespace' => 'Students\dashboard'], function () {
        Route::resource('student_exams', 'ExamsController');
        Route::resource('student_exams', 'ExamsController');
        Route::resource('profile-student', 'ProfileController');
        Route::resource('Courses', 'CoursesController');
        Route::get('LecturesStudents', 'LecturesController@index')->name('LecturesStudents');


        Route::get('Summarys', 'SummarysController@index')->name('Summarys');
        Route::get('Summaryscreate', 'SummarysController@create')->name('Summarys.create');
        Route::post('Summarysstore', 'SummarysController@store')->name('Summarys.store');
    });

});
