<?php

namespace App\Http\Controllers\Students\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Traits\AttachFilesTrait;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Student;
use App\Models\Summary;


class SummarysController extends Controller
{
    use AttachFilesTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Students    = Student::findorfail(Auth::user()->id);
        $Summarys    = Summary::where('grade_id',$Students->Grade_id)->where('classroom_id',$Students->Classroom_id)->where('section_id',$Students->section_id)->with('grade','classroom','section','subject')->get();
        return view('pages.Students.dashboard.Summaries.index',compact('Summarys'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $Students    = Student::findorfail(Auth::user()->id);
        $Subjects    = Subject::where('grade_id',$Students->Grade_id)->where('classroom_id',$Students->Classroom_id)->get();
        return view('pages.Students.dashboard.Summaries.create',compact('Subjects'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            
            $Students    = Student::findorfail(Auth::user()->id);
            // dd($Students->gender_id);

            $books = new Summary();
            $books->student_name = $Students->name;
            $books->title =     $request->title;
            $books->file_name =  $request->file('file_name')->getClientOriginalName();
            $books->grade_id = Auth()->user()->Grade_id;
            $books->classroom_id = Auth()->user()->Classroom_id;
            $books->subject_id = $request->id ;
            $books->save();
            $this->uploadFile($request,'file_name','pdf');

            toastr()->success(trans('messages.wite'));
            return back();
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
