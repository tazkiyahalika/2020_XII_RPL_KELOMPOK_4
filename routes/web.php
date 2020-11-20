<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/logout' ,function() {
	Auth::logout();
	return redirect('login');
});

// Route::get('/dashboard', function () {
// 	return view('coba');
//    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cek_role', 'AuthController@roles');

Route::get('/account/{userId}/{userVerificationToken}/activate', 'Auth\AccountController@verifyToken');
Route::get('/account/waiting-verification', 'Auth\AccountController@waitingVerification');
Route::post('/account/resend-verification', 'Auth\AccountController@resendVerification');

Route::get('/account/forgot-password', 'Auth\AccountController@forgotPassword')->name('forgot.password');
Route::post('/account/forgot-password', 'Auth\AccountController@sendEmailForgotPassword')->name('forgot.password');
Route::get('/account/{resetVerificationToken}/forgot-password', 'Auth\AccountController@verifyForgotToken');
Route::post('/account/reset-password', 'Auth\AccountController@updatePassword')->name('password-reset');

//Route untuk register teacher dan staff

Route::get('/register-student', 'Auth\RegisterController@registerStudent');
Route::get('/register-coach', 'Auth\RegisterController@registerCoach');
Route::get('/register-staff', 'Auth\RegisterController@registerStaff');

//Route Untuk Admin, Student, Teacher, Staff TU, jika register dan login maka akan ke halaman ini 
Route::group(['middleware' => ['role:admin']], function () {
	Route::get('/admin/dashboard','AdminController@index')->name('dashboard.admin');
	Route::get('admin/extracurricular', 'AdminController@list');
	Route::get('admin/coach', 'AdminController@coach');
	Route::post('admin/extracurricular', 'AdminController@addEkskul');
	Route::get('admin/extracurricular/create', 'AdminController@create');
	Route::get('admin/extracurricular/add-coach', 'AdminController@addpembina');
	Route::post('admin/coach', 'AdminController@addcoach');
	Route::get('admin/coach/detail-pembina-pramuka', 'AdminController@detailPembinaPramuka');
	Route::get('admin/coach/detail-pembina-voli', 'AdminController@detailPembinaVoli');
	Route::get('admin/extracurricular/update', 'AdminController@updateEkskul');
	Route::get('admin/extracurricular/detail', 'AdminController@detailEkskulPramuka');
	Route::get('admin/coach/update', 'AdminController@updatePembina');
	Route::get('admin/extracurricular/detail-extracurricular-voli', 'AdminController@detailEkskulVoli');

});


Route::group(['middleware' => ['role:student']], function () {
	Route::get('/student/dashboard','StudentController@index')->name('dashboard.student');
	Route::get('student/extracurricular', 'StudentController@StudentEkskul');
	Route::post('student/extracurricular', 'StudentController@saveEkskul');
	Route::get('student/extracurricular/create', 'StudentController@createEkskul');
	Route::get('student/extracurricular/detail-pramuka', 'StudentController@detailPramuka');
	Route::get('student/extracurricular/detail-voli', 'StudentController@detailVoli');


});

Route::group(['middleware' => ['role:coach']], function () {
	Route::get('/coach/dashboard','CoachController@index')->name('dashboard.coach');
	Route::get('coach/student','CoachController@ListStudent');
});

