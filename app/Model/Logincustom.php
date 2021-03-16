<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;
use Illuminate\Support\Facades\DB;

class Logincustom extends Model
{

   public static function check_login($request){
   
    $username = $request['txtname'];
    $password = $request['password'];
    $url = "https://www.newcambridgethailand.com/laravellab/V1/userlogin?user=".$username."&pass=".$password;

    // create curl resource 
        $ch = curl_init(); 

        // set url 
        curl_setopt($ch, CURLOPT_URL,$url); 

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
        $output = curl_exec($ch); 
             
        // close curl resource to free up system resources 
        curl_close($ch);
        //print_r(json_decode($output));die;
        return(json_decode($output,true));      
  }  

}
