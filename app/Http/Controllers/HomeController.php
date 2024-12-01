<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{


    public function index()
    {
        // return view('auth.selection');
        return view('index');
    }

    public function selectionn()
    {
        return view('auth.selection');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
    public function signup()
    {
        return view('pages.Students.signup');
    }




    public function insert(Request $request)
    {
        $check_email = Student::where('email',$request->email)->count();

        if($check_email == 0) {
            $check = Student::where('r_number',$request->r_number)->first();

            if($check == null) {
                return back()->with('error','رقم القيد لايتطابق مع سجلاتنا');
            }else{

                    try {
                        Student::where('r_number',$request->r_number)->update([
                            'email' => $request->email,
                            'password' => Hash::make($request->password),
                        ]);

                        return redirect('/selectionn')->with('sucss','تم التسجيل بنجاح');
                    }
                    catch (Exception $e) {
                        return redirect()->back()->with(['error' => $e->getMessage()]);
                    }


            }
            // return view('pages.Students.signup');
        }else {
            return back()->with('error','هاذا الحساب موجود');

        }


    }

    public function signup_tech()
    {
        return view('pages.Teachers.sinup_tech');
    }



    public function insertttech(Request $request)
    {
        $check_email = Teacher::where('email',$request->email)->count();

        if($check_email == 0) {

            try {
                $Teachers = new Teacher();
                $Teachers->email = $request->email;
                $Teachers->password =  Hash::make($request->password);
                $Teachers->Name = ['ar' => $request->Name_ar];
                $Teachers->Grade_id  = $request->Grade_id;
                $Teachers->Classroom_id  = $request->Class_id;
                $Teachers->Gender_id = $request->Gender_id;
                // $Teachers->Joining_Date = '2024-08-07';
                // $Teachers->Address = 'oijdsiopf';
                $Teachers->status = $request->status;
                $Teachers->save();
                toastr()->success(trans('messages.registered'));
                return redirect()->route('rigestertech');
            }
            catch (Exception $e) {
                return redirect()->back()->with(['error' => $e->getMessage()]);
            }

        }else {
            return back()->with('error','هاذا الحساب موجود');

        }


    }




    public function getDownload($filename){
        //PDF file is stored under project/public/download/info.pdf
        $file="./attachments/pdf" . '/' . $filename;
        return Response::download($file);
}
}
