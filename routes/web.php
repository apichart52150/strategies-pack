<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('access/{token}/{id}', 'Auth\AccessController@store');
Route::get('/', function() {
    if(Auth::guard('student')->check()) {
        return redirect('strategies_home');
    }else {
        return redirect('studentlogin');
    }
});

Route::get('studentlogin', 'UserloginController@index')->name('studentlogin');
Route::post('fn_login', 'UserloginController@fn_login')->name('fn_login');
Route::get('std_logout','UserloginController@std_logout')->name('std_logout');

Route::group(['middleware' => 'auth:student,ipack'], function() {
    //student login
    Route::get('strategies_home','DataViewController@strategies_home')->name('strategies_home');
    Route::get('introduction','DataViewController@introduction')->name('introduction');
    Route::get('listening_user','DataViewController@listening_user')->name('listening_user');
    Route::get('reading_user','DataViewController@reading_user')->name('reading_user');
    Route::get('writing_user','DataViewController@writing_user')->name('writing_user');
    Route::get('speaking_user','DataViewController@speaking_user')->name('speaking_user');
});



//Admin pages
Auth::routes();
Route::get('admin', function() {
    if(Auth::guard('web')->check()) {
        return redirect('admin_page');
    }else {
        return redirect('login');
    }
});

Route::get('admin_page', 'AdminController@index')->name('admin_page');

Route::middleware(['auth:web'])->group(function () {

    Route::post('/submit', 'AdminController@submit');
    Route::post('/edit', 'AdminController@edit');
    Route::get('/destroy/{id}', 'AdminController@destroy');
    Route::get('success', function () { return view('success'); });
});


