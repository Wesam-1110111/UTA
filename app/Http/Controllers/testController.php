<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Gender;
use App\Models\Grade;
use App\Models\Subject;
use App\Models\Nationalitie;
use App\Models\Section;
use App\Models\Student;
use App\Models\Type_Blood;
use App\Models\Religion;
use App\Models\specialization;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class testController extends Controller
{
    public function viewdashboard()
    {
        DB::table('students')->delete();
        $students = new Student();
        $students->name = ['ar' => 'احمد ابراهيم', 'en' => 'Ahmed Ibrahim'];
        $students->email = 'Ahmed_Ibrahim@yahoo.com';
        $students->password = Hash::make('12345678');
        $students->gender_id = 1;
        $students->nationalitie_id = Nationalitie::all()->unique()->random()->id;
        $students->blood_id =Type_Blood::all()->unique()->random()->id;
        $students->Date_Birth = date('1995-01-01');
        $students->Grade_id = Grade::all()->unique()->random()->id;
        $students->Classroom_id =Classroom::all()->unique()->random()->id;
        $students->section_id = Section::all()->unique()->random()->id;
        // $students->parent_id = My_Parent::all()->unique()->random()->id;
        $students->academic_year ='2021';
        $students->save();
    }

    public function viewdashboard2()
    {

       DB::table('users')->insert([
           'name' => 'admin',
           'email' => 'admin@gmail.com',
           'password' => Hash::make('admin@gmail.com'),
        ]);





        // DB::table('religions')->delete();

        // $religions = [

        //     [
        //         'en'=> 'Muslim',
        //         'ar'=> 'مسلم'
        //     ],
        //     [
        //         'en'=> 'Other',
        //         'ar'=> 'غيرذلك'
        //     ],

        // ];

        // foreach ($religions as $R) {
        //     Religion::create(['Name' => $R]);
        // }



        // DB::table('type__bloods')->delete();

        // $bgs = ['O-', 'O+', 'A+', 'A-', 'B+', 'B-', 'AB+', 'AB-'];

        // foreach($bgs as  $bg){
        //     Type_Blood::create(['Name' => $bg]);
        // }



        // DB::table('classrooms')->delete();
        // $classrooms = [
        //     ['en'=> 'First grade', 'ar'=> 'الصف الاول'],
        //     ['en'=> 'Second grade', 'ar'=> 'الصف الثاني'],
        //     ['en'=> 'Third grade', 'ar'=> 'الصف الثالث'],
        // ];

        // foreach ($classrooms as $classroom) {
        //     Classroom::create([
        //     'Name_Class' => $classroom,
        //     'Grade_id' => Grade::all()->unique()->random()->id
        //     ]);
        // }


        DB::table('genders')->delete();

        $genders = [
            ['en'=> 'ذكر', 'ar'=> 'ذكر'],
            ['en'=> 'انثي', 'ar'=> 'انثي'],

        ];
        foreach ($genders as $ge) {
            Gender::create(['Name' => $ge]);
        }


        // DB::table('grades')->delete();
        // $grades = [
        //     ['en'=> 'Primary stage', 'ar'=> 'المرحلة الابتدائية'],
        //     ['en'=> 'middle School', 'ar'=> 'المرحلة الاعدادية'],
        //     ['en'=> 'High school', 'ar'=> 'كلية تقنية المعلومات'],
        // ];

        // foreach ($grades as $grade) {
        //     Grade::create(['Name' => $grade]);
        // }



        
        //     DB::table('specializations')->delete();
        //     $specializations = [
        //         ['en'=> 'Arabic', 'ar'=> 'عربي'],
        //         ['en'=> 'Sciences', 'ar'=> 'علوم'],
        //         ['en'=> 'Computer', 'ar'=> 'حاسب الي'],
        //         ['en'=> 'English', 'ar'=> 'انجليزي'],
        //     ];
        //     foreach ($specializations as $S) {
        //         Specialization::create(['Name' => $S]);
            
        // }


        // DB::table('classrooms')->delete();
        // $classrooms = [
        //     ['en'=> 'First grade', 'ar'=> 'الصف الاول'],
        //     ['en'=> 'Second grade', 'ar'=> 'الصف الثاني'],
        //     ['en'=> 'Third grade', 'ar'=> 'الصف الثالث'],
        // ];

        // foreach ($classrooms as $classroom) {
        //     Classroom::create([
        //     'Name_Class' => $classroom,
        //     'Grade_id' => Grade::all()->unique()->random()->id
        //     ]);
        // }

        // DB::table('specializations')->delete();
        // $specializations = [
        //     ['en'=> 'Arabic', 'ar'=> 'عربي'],
        //     ['en'=> 'Sciences', 'ar'=> 'علوم'],
        //     ['en'=> 'Computer', 'ar'=> 'حاسب الي'],
        //     ['en'=> 'English', 'ar'=> 'انجليزي'],
        // ];
        // foreach ($specializations as $S) {
        //     Specialization::create(['Name' => $S]);
        // }

        

        // DB::table('nationalities')->delete();

        // $nationals = [

        //     [
        //         'en'=> 'libyan',
        //         'ar'=> 'ليبي'
        //     ],
        //     [

        //         'en'=> 'anthour',
        //         'ar'=> 'غير ذلك'
        //     ],
           
        // ];

        // foreach ($nationals as $n) {
        //     Nationalitie::create(['Name' => $n]);
        // }





    }

    
}
