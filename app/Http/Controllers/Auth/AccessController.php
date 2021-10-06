<?php

namespace App\Http\Controllers\Auth;

use App\Ipack;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AccessController extends Controller
{
    use AuthenticatesUsers;

    public function store($token, $id) {

        $user = Ipack::where('id', $id)
        ->first();

        if(env('API_TOKEN') != $token || !$user) {
            abort(401, 'Unauthorized.');
        } 

        if($user) {
            Auth::guard('ipack')->login($user);
            return redirect('/strategies_home');
        }
    }
}
