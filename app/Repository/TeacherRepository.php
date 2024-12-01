<?php

namespace App\Repository;
use App\Models\Gender;
use App\Models\Grade;
use App\Models\Specialization;
use App\Models\Conversation;
use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;

class TeacherRepository implements TeacherRepositoryInterface{

  public function getAllTeachers(){
      return Teacher::where('status',1)->get();
  }

    public function Getspecialization(){
        return Grade::all();
    }

    public function GetGender(){
       return Gender::all();
    }

    public function StoreTeachers($request){

    try {
            $Teachers = new Teacher();
            $Teachers->email = $request->Email;
            $Teachers->password =  Hash::make($request->Password);
            $Teachers->Name = ['ar' => $request->Name_ar];
            $Teachers->Grade_id  = $request->Grade_id;
            $Teachers->Classroom_id  = $request->Classroom_id;
            $Teachers->Gender_id = $request->Gender_id;
            $Teachers->status = $request->status;
            $Teachers->save();
            toastr()->success(trans('messages.success'));
            return redirect()->route('Teachers.create');
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

    }


    public function editTeachers($id)
    {
        return  [ Teacher::findOrFail($id), Grade::all() , Gender::all()];
    }


    public function UpdateTeachers($request)
    {
        try {
            $Teachers = Teacher::findOrFail($request->id);
            $Teachers->email = $request->Email;
            $Teachers->password =  Hash::make($request->Password);
            $Teachers->Name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];
            $Teachers->Grade_id  = $request->Grade_id;
            $Teachers->Classroom_id  = $request->Classroom_id;
            $Teachers->Gender_id = $request->gender_id;
            $Teachers->save();
            toastr()->success(trans('messages.Update'));
            return redirect()->route('Teachers.index');
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }


    public function DeleteTeachers($request)
    {
        // Conversation::where('teacher_id',$request->id)->delete();

        Teacher::findOrFail($request->id)->delete();
        toastr()->error(trans('messages.Delete'));
        return redirect()->route('Teachers.index');
    }



}
