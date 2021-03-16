<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;



class Classroom extends Model
{
    public static function classdetail_by_id($classroom_id=''){
 

     $data = DB::table('class')
        ->select('class.nccode','class.startdate','class.lastdate','class.th_name','course.coursename','class.id','class.set_exam','set_exam.name')
        ->leftjoin('course', 'class.courseid', '=', 'course.courseid')
        ->leftjoin('set_exam', 'set_exam.id', '=', 'class.set_exam')
        ->where('class.id','=',$classroom_id)
        ->orderBy('class.created_at', 'DESC')
        ->get();

 
    return($data); 
     }

      public static function get_classroom_and_student($classroom_id='')
    {
        $data = DB::table('student')
        ->select('student.std_id','student.std_name','student.std_nickname','score.score_rec_course','score.score_speaking','score.score_expectband','score.set_exam','class.id as classroom_id','set_exam.name')
        ->leftjoin('class_student','student.std_id','=','class_student.std_id')
        ->leftjoin('score','student.std_id','=','score.std_id')
        ->leftjoin('class', 'class.nccode', '=', 'class_student.nccode')
         ->leftjoin('set_exam', 'set_exam.id', '=', 'class.set_exam')
        ->where('class.id',$classroom_id)
        ->get();


         
       return($data);

    }

    

         public static function get_classroom_v2()
    {
        $data = DB::table('class')
        ->select('class.nccode','class.startdate','class.lastdate','class.th_name','course.coursename','class.id','class.class_pass','class.set_exam','set_exam.name') 
        ->leftjoin('course', 'class.courseid', '=', 'course.courseid')
        ->leftjoin('set_exam', 'set_exam.id', '=', 'class.set_exam')
        ->orderBy('class.created_at', 'DESC')
        ->get();
       return($data);

    }

    public static function get_teacher()
    {

        $teacher_name = DB::table('users')
        ->where('status','=','teacher')
        ->get();

        return ($teacher_name);

    }



}
