<?php

namespace App\Http\Controllers\Requests_Summaries;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Summary;
use App\Models\Notification;

class Requests_SummariesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Summaries = Summary::where('status',0)->with('grade','classroom','subject')->get();
        return view('pages.Requests_Summaries.summaries',compact('Summaries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            Summary::where('id',$id)->update(['status' => 1]);
            $Summary = Summary::findorfail($id);


            $Notification = new Notification();
            $Notification->title = 'الملخصات';
            $Notification->grade_id = $Summary->grade_id ;
            $Notification->classroom_id  = $Summary->classroom_id ;
            $Notification->rools  = 2 ;
            $Notification->Notes  = 'تمت إضافة ملخص جديد في قسم ' . $Summary->classroom->Name_Class . ' لمادة ' . $Summary->subject->name;
            $Notification->save();


            toastr()->success(trans('messages.accept'));
            return back();
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            Summary::where('id',$id)->update(['status' => 2]);

            $Summary = Summary::findorfail($id);
            $Notification = new Notification();
            $Notification->title = 'الملخصات';
            $Notification->grade_id = $Summary->grade_id ;
            $Notification->classroom_id  = $Summary->classroom_id ;
            $Notification->rools  = 2 ;
            $Notification->Notes  = 'تمت رفض الملخص في قسم ' . $Summary->classroom->Name_Class . ' لمادة ' . $Summary->subject->name;
            $Notification->save();

            toastr()->success(trans('messages.cancel'));
            return back();

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
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
