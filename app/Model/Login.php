<?php


namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Login extends Authenticatable
{
    use Notifiable;

    protected $guard = 'student';
    protected $table = 'student';
    protected $primaryKey = "std_id";
    protected $rememberTokenName = false;

}

