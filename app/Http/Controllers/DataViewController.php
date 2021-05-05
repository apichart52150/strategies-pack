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
        return view('student.strategies_home');
    }

    public function introduction(){
        $users = DB::select('select * from video');
        return view('student.introduction',['users'=>$users]);
    }

    public function listening_user(){
        $users = DB::select('select * from video');
        return view('student.listening_user',['users'=>$users]);
    }

    public function reading_user(){
        $users = DB::select('select * from video');
        return view('student.reading_user',['users'=>$users]);
    }

    public function writing_user(){
        $users = DB::select('select * from video');
        return view('student.writing_user',['users'=>$users]);
    }

    public function speaking_user(){
        $users = DB::select('select * from video');
        return view('student.speaking_user',['users'=>$users]);
    }


}
