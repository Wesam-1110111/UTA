<?php


namespace App\Repository;


use App\Models\Fee;
use App\Models\Grade;
use App\Models\Lectures;
use App\Models\Subject;
use App\Models\Notification;
use App\Models\Teacher;
use App\Models\teacher_section;
use Illuminate\Support\Facades\Auth;
use App\Http\Traits\AttachFilesTrait;
// use App\Http\Requests\StoreStudentsRequest;

class LectureRepository implements LectureRepositoryInterface
{

        use AttachFilesTrait;

    public function index(){

        $Lectures = Lectures::where('classroom_id',Auth()->user()->Classroom_id )->get();
        return view('pages.Teachers.dashboard.lecture.index',compact('Lectures'));

    }

    public function create(){


        
        $subjects = Subject::where('teacher_id',Auth::user()->id)->with('grade','classroom','teacher')->get();
        $test = Subject::where('teacher_id',Auth::user()->id)->with('grade','classroom','teacher')->first();

        $grades = Grade::where('id',$test->grade_id)->get();

        
       
        return view('pages.Teachers.dashboard.lecture.create',compact('subjects','grades'));
    }

    public function edit($id){
        $subjects = Subject::where('teacher_id',Auth::user()->id)->with('grade','classroom','teacher')->get();

        $Lecture = Lectures::findorfail($id);
        return view('pages.Teachers.dashboard.lecture.edit',compact('Lecture','subjects'));

    }


    public function store($request)
    {

        try {
            $Teacher = Teacher::findorfail(Auth()->user()->id);
            $Subject = Subject::where('teacher_id',Auth()->user()->id)->first();

            $Lecture = new Lectures();
            $Lecture->title            = $request->title;
            $Lecture->file_name        = $request->file('file_name')->getClientOriginalName();
            $Lecture->tyep_lecture     = $request->lecture_type;
            $Lecture->grade_id         = $Teacher->Grade_id;
            $Lecture->classroom_id     = $Teacher->Classroom_id;
            $Lecture->teacher_id       = $Teacher->id;
            $Lecture->subject_id       = $request->Subject_id;
            $Lecture->save();

            $Notification = new Notification();
            $Notification->title = 'المحاضرات';
            $Notification->grade_id = $Teacher->Grade_id  ; 
            $Notification->classroom_id  = $Teacher->Classroom_id  ;
            $Notification->rools  = 2 ;
            $Notification->Notes  = 'تمت إضافة محاضرة جديدة في قسم ' . $Teacher->classroom->Name_Class . ' لمادة ' . $Subject->name;
            $Notification->save();

            $this->uploadFile($request,'file_name','Lecture');
            toastr()->success(trans('messages.success'));
            return redirect()->route('Lectures.index');

        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update($request)
    {
        try {

            $Lecture     = Lectures::findorFail($request->id);
            $get_subject = Subject::where('teacher_id',Auth::user()->id)->with('grade','classroom','teacher')->first();

            if($request->hasfile('file_name')){
                $this->deleteFile($Lecture->file_name);

                $this->uploadFile($request,'file_name','Lecture');

                $file_name_new = $request->file('file_name')->getClientOriginalName();
                $Lecture->file_name = $Lecture->file_name !== $file_name_new ? $file_name_new : $Lecture->file_name;
            }
            $Lecture->title            = $request->title;
            $Lecture->tyep_lecture     = $request->tyep_lecture;
            $Lecture->grade_id         = $get_subject->grade->id;
            $Lecture->classroom_id     = $get_subject->classroom->id;
            $Lecture->teacher_id       = $get_subject->teacher->id;
            $Lecture->subject_id       = $request->Subject_id;
            $Lecture->save();

            toastr()->success(trans('messages.success'));
            return redirect()->route('Lectures.index');
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy($request)
    {
        try {
            Lectures::destroy($request->id);
            toastr()->error(trans('messages.Delete'));
            return redirect()->back();
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
