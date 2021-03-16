<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\Model\Logincustom;
use App\Carbon;
use App\Model\Classroom;
use Auth;

class UserloginController extends Controller{

  public static function login(){

    if(session('std_id')){
      return view('student.strategies_home');
    }else{
      return view('stu_login');
    }

  }
 
  public function checklogin(Request $request){
      

    if($request != ''){
      $data = Logincustom::check_login($request->all());

      //  /dd($data);
      // dd($data);
     
      $login = $data['response'];

      switch($login){

        case"User not found":
        session()->flash('message','User or Password not found');
        return redirect()->to('studentlogin');

        case"Login success":

        Session::put('status_login','user_success_date');
        Session::put('std_id',$data['std_id']);
        Session::put('name',$data['std_name']);
        Session::put('nccode',$data['nccode']);
        Session::put('class_id',$data['class_id']);
        Session::put('std_nickname',$data['std_nickname']);
        Session::put('std_point',$data['std_point']);
        Session::put('std_bonus',$data['std_bonus']);

        return redirect()->to('strategies_home');
        break;

        case"user_end_date":
          Session::put('status_login','user_end_date');
          Session::put('std_id',$data['std_id']);
          Session::put('name',$data['std_name']);
          Session::put('nccode',$data['nccode']);
          Session::put('class_id',$data['class_id']);
          Session::put('std_nickname',$data['std_nickname']);
          Session::put('std_point',$data['std_point']);
          Session::put('std_bonus',$data['std_bonus']);

      
        return redirect()->to('strategies_home');
        break;

        default:
        echo "H_Error(LogincutomController)";

      }

    }else{

      session()->flash('message','กรุณากรอกข้อมูลให้ถูกต้อง');
      return redirect()->to('/');

    }

  }


  public static function userlogout(){
    auth()->logout();
    Session::flush();

    return redirect()->route('login');

  }

  public static function std_logout(){
    Session::flush();

   return redirect()->route('studentlogin');
  }

}

