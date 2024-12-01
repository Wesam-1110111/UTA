<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Translatable\HasTranslations;

class Teacher extends  Authenticatable
{
    use HasTranslations;
    public $translatable = ['Name'];
    protected $guarded=[];



    // علاقة بين المعلمين والانواع لجلب جنس المعلم
    public function genders()
    {
        return $this->belongsTo('App\Models\Gender', 'Gender_id');
    }

// علاقة المعلمين مع الاقسام
    public function Sections()
    {
        return $this->belongsToMany('App\Models\Section','teacher_section');
    }

    public function conversations()
    {
        return $this->hasMany(Conversation::class);
    }

    public function massages ()
    {
        return $this->hasMany(Message::class);
    }

        // علاقة بين الطلاب والمراحل الدراسية لجلب اسم المرحلة في جدول الطلاب

        public function grade()
        {
            return $this->belongsTo('App\Models\Grade', 'Grade_id');
        }
    
    
        // علاقة بين الطلاب الصفوف الدراسية لجلب اسم الصف في جدول الطلاب
    
        public function classroom()
        {
            return $this->belongsTo('App\Models\Classroom', 'Classroom_id');
        }

}
