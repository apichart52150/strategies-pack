<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Ipack extends Authenticatable
{
    use Notifiable;

    protected $connection = 'ipack';
    protected $guard = 'ipack';
    protected $table = 'student';
    protected $primaryKey = "std_id";
    protected $rememberTokenName = false;

}

