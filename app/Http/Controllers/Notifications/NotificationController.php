<?php

namespace App\Http\Controllers\Notifications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\Grade;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
   * @return Response
     */
    public function index()
    {
        $Notifications = Notification::all();
        $my_classes = Grade::all();
        return view('pages.Notifications.Notifications',compact('Notifications','my_classes'));
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
        

        try {
            $Notification = new Notification();
            $Notification->title = $request->title;
            $Notification->rools = $request->rools;
            $Notification->grade_id = $request->Grade_id;
            $Notification->classroom_id = $request->Classroom_id;
            // $Notification->section_id = $request->section_id;
            $Notification->Notes = $request->Notes;
            $Notification->save();
  
  
  
            toastr()->success(trans('messages.success'));
            return redirect()->route('Notifications.index');
        }
  
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
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
        try {
            $Notification = Notification::findorfail($request->id);
            $Notification->title = $request->title;
            $Notification->rools = $request->rools;
            $Notification->grade_id = $request->Grade_id;
            $Notification->classroom_id = $request->Classroom_id;
            // $Notification->section_id = $request->section_id;
            $Notification->Notes = $request->Notes;
            $Notification->save();
  
  
  
            toastr()->success(trans('messages.success'));
            return redirect()->route('Notifications.index');
        }
  
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
      

            $Notifications = Notification::findOrFail($request->id)->delete();
            toastr()->error(trans('messages.Delete'));
            return redirect()->route('Notifications.index');

    }
}
