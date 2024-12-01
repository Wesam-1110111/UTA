<?php

namespace App\Http\Livewire\Chat;

use Livewire\Component;
use App\Models\student;
use App\Models\subject;
use App\Models\Teacher;
use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Chat extends Component
{
    public function render($id = null)
    {   
    $sum = 0;
        if($id == null) {

        $students = student::with('grade')->findorfail(Auth::user()->id);
        // $ids = DB::table('teacher_section')->where('section_id', auth()->user()->section_id)->pluck('teacher_id');
        // $get_teacher = Teacher::whereIn('id',$ids)->get();
        $get_teacher = Conversation::where('student_id',auth()->user()->id)->with('teacher')->orderBy('id', 'DESC')->get();
        $countmsgs = Message::wherein('conversation_id',(Conversation::where('student_id', auth()->user()->id)->with('student','teacher')->pluck('id')))->get();

        return view('livewire.chat.chat',compact('get_teacher','countmsgs','id','sum'));
        }else {

            
            $students = student::with('grade')->findorfail(Auth::user()->id);
            // $ids = DB::table('teacher_section')->where('section_id', auth()->user()->section_id)->pluck('teacher_id');
            // $get_teacher = Teacher::whereIn('id',$ids)->get();
            $get_teacher = Conversation::where('student_id',auth()->user()->id)->with('teacher')->orderBy('id', 'DESC')->get();
            $chats = Message::where('teacher_id', $id)->where('student_id', auth()->user()->id)->get();

            // $chats = Teacher::wherein('id',subject::where('grade_id',$students->Grade_id)->pluck('teacher_id'))->get();
            return view('livewire.chat.chat',compact('get_teacher','id','chats'));
        }
        
    }

    public function store(Request $request,$id)    
    {
        $checkedConversation = Conversation::where('student_id', auth()->user()->id)->where('teacher_id', $id)->get();

        if (count($checkedConversation) == 0) {
            $createdConversation = Conversation::create([
                'teacher_id' => $request->teacher_id,
                'student_id' => Auth::user()->id,
                'last_time_message' => now(),
            ]);
            $createdMesssage = Message::create([
                'conversation_id' => $createdConversation->id,
                'student_id' => auth()->user()->id,
                'teacher_id' => $request->teacher_id,
                'body' => 'student/' .$request->message,
            ]);
            $createdConversation->last_time_message = $createdMesssage->created_at;
            $createdConversation->save();
            return back();
        } else {
        $checkedConversation = Conversation::where('student_id', auth()->user()->id)->where('teacher_id', $id)->first();

            $createdMesssage = Message::create([
                'conversation_id' => $checkedConversation->id,
                'student_id' => auth()->user()->id,
                'teacher_id' => $request->teacher_id,
                'body' => 'student/' .$request->message,
            ]);
            toastr()->success(trans('messages.successmsg'));
            return back();
        }
    }


}
