<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Model\Login;

class UserloginController extends Controller{

	use AuthenticatesUsers;

    protected $redirectTo = '/strategies_home';

	public function index() {
        return view('stu_login');
    }
	
	public function fn_login(Request $request) {

		$username = $request->username;
		$password = $request->password;

		$data = $request->all();
		$rules = ['username' => 'required', 'password' => 'required'];

		$validator = Validator::make($request->all(), [
			'username' => 'required',
			'password' => 'required'
		]);

		if($validator->fails()) {
			return redirect('studentlogin')
			->withErrors($validator)
			->withInput();
		}

		$student = Login::where('std_username', $request->username)
		->where('std_password', md5($request->password))
		->first();

		// dd($student);

		if($student) {
			Auth::guard('student')->login($student);
			return redirect('/strategies_home');
		} else {
			return back()->with('status', 'Username or password do not match');
		}
	}

	public static function std_logout(){
		Auth::guard('student')->logout();
		return redirect()->route('studentlogin');
	}

}

