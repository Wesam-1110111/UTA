<?php

namespace App\Repository;

use App\Http\Traits\AttachFilesTrait;
use App\Models\Grade;
use App\Models\Subject;
use App\Models\Library;
use App\Models\Teacher;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class TechLibraryRepository implements TechLibraryRepositoryInterface
{

    use AttachFilesTrait;

    public function index()
    {
        $books = Library::where('teacher_id',Auth::user()->id)->get();
        return view('pages.Teachers.dashboard.library.index',compact('books'));
    }

    public function create()
    {
        $grades = Grade::all();
        $Subjects = Subject::all();

        return view('pages.Teachers.dashboard.library.create',compact('grades','Subjects'));
    }

    public function store($request)
    {   
        $Teacher = Teacher::findorfail(Auth()->user()->id);
        $Subject = Subject::where('teacher_id',Auth()->user()->id)->first();

        try {
            // طريقة الادخال عندكم معقده شوفي هني خير
            
            $books = new Library();
            $books->title = $request->title;
            $books->file_name =  $request->file('file_name')->getClientOriginalName();
            $books->Grade_id = $Teacher->Grade_id;
            $books->classroom_id = $Teacher->Classroom_id;
            $books->subject_id = $Subject->id ;
            $books->teacher_id = Auth::user()->id;
            $books->save();

            $this->uploadFile($request,'file_name','pdf');
            // $this->uploadFile($request,$request->file('file_name')->getClientOriginalName(),'pdf');

            $Notification = new Notification();
            $Notification->title = 'المقررات الدراسية';
            $Notification->grade_id = $Teacher->Grade_id  ; 
            $Notification->classroom_id  = $Teacher->Classroom_id  ;
            $Notification->rools  = 2 ;
            $Notification->Notes  = 'تمت إضافة مقرر دراسي جديد في قسم ' . $Teacher->classroom->Name_Class . ' لمادة ' . $Subject->name;
            $Notification->save();

            toastr()->success(trans('messages.success'));
            return redirect()->route('Techlibrary.create');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $grades = Grade::all();
        $Subjects = Subject::all();
        $book = library::findorFail($id);
        return view('pages.Teachers.dashboard.library.edit',compact('book','grades','Subjects'));
    }

    public function update($request)
    {
        $Teacher = Teacher::findorfail(Auth()->user()->id);
        $Subject = Subject::where('teacher_id',Auth()->user()->id)->first();

        try {

            $book = library::findorFail($request->id);
            $book->title = $request->title;

            if($request->hasfile('file_name')){

                $this->deleteFile($book->file_name);

                $this->uploadFile($request,'file_name','pdf');

                $file_name_new = $request->file('file_name')->getClientOriginalName();
                $book->file_name = $book->file_name !== $file_name_new ? $file_name_new : $book->file_name;
            }

            $book->Grade_id = $Teacher->Grade_id;
            $book->classroom_id = $Teacher->Classroom_id;
            $book->subject_id = $Subject->id ;
            $book->save();
            toastr()->success(trans('messages.Update'));
            return redirect()->route('Techlibrary.index');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function destroy($request)
    {
        $this->deleteFile($request->file_name);
        library::destroy($request->id);
        toastr()->error(trans('messages.Delete'));
        return redirect()->route('Techlibrary.index');
    }

    public function download($filename)
    {
        return response()->download(public_path('attachments/library/'.$filename));
    }
}
