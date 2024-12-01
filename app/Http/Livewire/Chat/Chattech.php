<?php

namespace App\Http\Livewire\Chat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\Conversation;
use App\Models\Teacher;
use App\Models\Message;
use App\Models\student;


class Chattech extends Component
{
    public function chat($id = null)
    {
        $sum = 0;
        if($id == null) {

            $students = Conversation::where('teacher_id', auth()->user()->id)->with('student','teacher')->get();
            $countmsgs = Message::wherein('conversation_id',(Conversation::where('teacher_id', auth()->user()->id)->with('student','teacher')->pluck('id')))->get();

            return view('livewire.chat.chattech',compact('students','id','countmsgs','sum'));

        }else {
            Message::where('teacher_id', auth()->user()->id)->where('student_id', $id)->update(['read' => 1]);
            $students = Conversation::where('teacher_id', auth()->user()->id)->with('student','teacher')->get();
            $chats = Message::where('teacher_id', auth()->user()->id)->where('student_id', $id)->get();
            // dd($chats);
            return view('livewire.chat.chattech',compact('students','id','chats'));
        }
    }

    public function store(Request $request,$id)
    {
        $Conversation = Conversation::where('student_id', $request->student_id)->where('teacher_id', auth()->user()->id)->first();
        $createdMesssage = Message::create([
            'conversation_id' => $Conversation->id,
            'student_id' => $request->student_id,
            'teacher_id' => auth()->user()->id,
            'body' => 'techer/' . $request->message,
        ]);
        return back();
    }
}
