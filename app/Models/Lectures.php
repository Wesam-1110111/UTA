<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Lectures extends Model
{

    use HasFactory;

    public function grade()
    {
        return $this->belongsTo('App\Models\Grade', 'grade_id');
    }
    public function classroom()
    {
        return $this->belongsTo('App\Models\Classroom', 'classroom_id');
    }
    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher', 'teacher_id');
    }
    public function subject()
    {
        return $this->belongsTo('App\Models\Subject', 'subject_id');
    }
}
