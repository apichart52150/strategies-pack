<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class DataViewController extends Controller
{
    public function strategies_home(){
        $std_id = auth('student')->user()->std_id;
        return view('student.strategies_home');
    }

    public function introduction(){
    	$std_id = auth('student')->user()->std_id;
        $users = DB::select('select * from video');
        return view('student.introduction',['users'=>$users]);
    }

    public function listening_user(){
    	$std_id = auth('student')->user()->std_id;
        $users = DB::select('select * from video');
        return view('student.listening_user',['users'=>$users]);
    }

    public function reading_user(){
        $std_id = auth('student')->user()->std_id;
        $users = DB::select('select * from video');
        return view('student.reading_user',['users'=>$users]);
    }

    public function writing_user(){
        $std_id = auth('student')->user()->std_id;
        $users = DB::select('select * from video');
        return view('student.writing_user',['users'=>$users]);
    }

    public function speaking_user(){
        $std_id = auth('student')->user()->std_id;
        $users = DB::select('select * from video');
        return view('student.speaking_user',['users'=>$users]);
    }


}
