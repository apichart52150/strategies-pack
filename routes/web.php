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

Route::get('/', function () {
    return view('welcome');
});



//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function () {
    return redirect('admin_page');
});

Route::get('/', function () {
    return redirect('studentlogin');
});




Auth::routes();
//Student pages
Route::get('/strategies_home','DataViewController@strategies_home')->name('strategies_home');
Route::get('success', function () { return view('success'); });

Route::get('/introduction','DataViewController@introduction')->name('introduction');
Route::get('/listening_user','DataViewController@listening_user')->name('listening_user');
Route::get('/reading_user','DataViewController@reading_user')->name('reading_user');
Route::get('/writing_user','DataViewController@writing_user')->name('writing_user');
Route::get('/speaking_user','DataViewController@speaking_user')->name('speaking_user');

//Admin pages
Route::post('/submit', 'AdminController@submit');
Route::get('/admin_page', 'AdminController@get_dashboard_v2')->name('admin_page');//golf
Route::post('/edit', 'AdminController@edit');
Route::get('/destroy/{id}', 'AdminController@destroy');

//form_student
Route::post('user_login_fc', 'UserloginController@checklogin')->name('user_login_fc');
Route::get('userlogout', 'UserloginController@userlogout')->name('userlogout');

//student login
//Route::get('register', 'UserloginController@index')->name('register');
Route::get('studentlogin', 'UserloginController@login')->name('studentlogin');
Route::get('std_logout','UserloginController@std_logout')->name('std_logout');
