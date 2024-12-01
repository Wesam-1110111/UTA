<?php


namespace App\Repository;


use App\Models\Grade;
use App\Models\Subject;
use App\Models\Teacher;

class SubjectRepository implements SubjectRepositoryInterface
{

    public function index()
    {
        $subjects = Subject::get();
        return view('pages.Subjects.index',compact('subjects'));
    }

    public function create()
    {
        $grades = Grade::get();
        $Subject = Subject::get();
        $teachers = Teacher::get();
        return view('pages.Subjects.create',compact('grades','teachers','Subject'));
    }


    public function store($request)
    {
        if(! Subject::where('sub_number',$request->sub_number)->exists()) {
            $Teacher = Teacher::findorfail($request->teacher_id);
            try {
                $subjects = new Subject(); 
                $subjects->name = ['ar' => $request->Name_ar];
                $subjects->grade_id = $Teacher->Grade_id;
                $subjects->classroom_id = $Teacher->Classroom_id;
                $subjects->teacher_id = $request->teacher_id;
                $subjects->sub_number = $request->sub_number;
                $subjects->save();
                toastr()->success(trans('messages.success'));
                return redirect()->route('subjects.index');
            }
            catch (\Exception $e) {
                return redirect()->back()->with(['error' => $e->getMessage()]);
            }
        }else{
            return redirect()->back()->with(['error' => 'عذرا رمز المادة موجود مسبقا']);
        }
    }


    public function edit($id){

        $subject =Subject::findorfail($id);
        $grades = Grade::get();
        $teachers = Teacher::get();
        return view('pages.Subjects.edit',compact('subject','grades','teachers'));

    }

    public function update($request)
    {
        
            $Teacher = Teacher::findorfail($request->teacher_id);
            try {
                $subjects =  Subject::findorfail($request->id);
                $subjects->name = ['ar' => $request->Name_ar];
                $subjects->grade_id = $Teacher->Grade_id;
                $subjects->classroom_id = $Teacher->Classroom_id;
                $subjects->teacher_id = $request->teacher_id;
                $subjects->sub_number = $request->sub_number;
    
                $subjects->save();
                toastr()->success(trans('messages.Update'));
                return redirect()->route('subjects.index');
            }
            catch (\Exception $e) {
                return redirect()->back()->with(['error' => $e->getMessage()]);

        }     
           

    }

    public function destroy($request)
    {
        try {
            Subject::destroy($request->id);
            toastr()->error(trans('messages.Delete'));
            return redirect()->back();
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
