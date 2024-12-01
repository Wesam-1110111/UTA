<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'teacher_id',
        'conversation_id',
        'read',
        'type',
        'body',
    ];

    public function Massage()
    {
        return $this->belongsTo(Conversation::class,'conversation_id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class,'student_id');
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class,'teacher_id');
    }


}
