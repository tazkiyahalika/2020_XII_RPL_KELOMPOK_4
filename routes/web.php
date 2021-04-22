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
     return view('auth.login');
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
Route::get('/account/profile','Auth\AccountController@listprofilecoach');
Route::get('/account/profile/edit','Auth\AccountController@editprofile');
Route::post('/account/profile/edit','Auth\AccountController@updateprofile');
//Route untuk register student, coach 

Route::get('/register-student', 'Auth\RegisterController@registerStudent');
Route::get('/register-coach', 'Auth\RegisterController@registerCoach');
Route::get('/register-admin', 'Auth\RegisterController@registerAdmin');
Route::get('/dashboard','User\UserController@index')->name('dashboard.users')->middleware('auth');
Route::get('/choose-register', 'Auth\RegisterController@choseRegister');
//Route Untuk Admin, Student, coach, jika register dan login maka akan ke halaman ini 
Route::group(['middleware'=> ['auth','verified']], function(){
	Route::get('dashboard', 'User\UserController@index')->name('dashboard.users');
});

Route::group(['middleware' => ['role:admin']], function () {
	Route::get('/admin/dashboard','AdminController@index')->name('dashboard.admin');
	Route::get('admin/info/create','ExtracurricularController@createinfoadmin');
	// Route::post('admin/info/add-info', 'ExtracurricularController@addinfoadmin');
	// Route::get('admin/info/edit/{info_id}', 'ExtracurricularController@EditInfo');
	// Route::post('admin/info/update/{info_id}', 'ExtracurricularController@UpdateInfo');
	// Route::get('admin/info/{info_id}/delete', 'ExtracurricularController@deleteInfo');

	Route::get('admin/extracurricular', 'ExtracurricularController@list');
	Route::get('admin/coach', 'AdminController@coach');
	Route::post('admin/extracurricular', 'ExtracurricularController@addEkskul');
	Route::get('admin/extracurricular/create', 'ExtracurricularController@create');
	Route::get('admin/extracurricular/add-coach', 'AdminController@addpembina');

	Route::get('admin/extracurricular/edit/{esc_id}', 'ExtracurricularController@editEkskul');
	Route::post('admin/extracurricular/update/{esc_id}', 'ExtracurricularController@updateEkskul');
	Route::get('admin/extracurricular/{esc_id}/delete', 'ExtracurricularController@deleteEkskul');
	Route::get('Account/profile/{usr_id}','AccountController@show');
	Route::get('admin/extracurricular/detail-extracurricular/{esc_id}', 'ExtracurricularController@detailEkskul');


	Route::get('admin/coach', 'CoachController@list');
	Route::get('admin/coach/detail-pembina/{coc_id}', 'CoachController@detail');
	Route::get('admin/extracurricular/{coc_id}/delete', 'CoachController@deleteCoach');
	Route::get('admin/coach/add-coach', 'CoachController@create');
	Route::post('admin/coach/create','CoachController@addcoach');

	Route::get('admin/student','StudentController@list');
	Route::get('admin/schedule','ExtracurricularController@ScheduleList');
	Route::get('admin/schedule/create', 'ExtracurricularController@CreateSchedule');
	Route::post('admin/schedule/add-schedule', 'ExtracurricularController@addSchedule');
	Route::post('admin/schedule/edit/{schedule_id}', 'ExtracurricularController@updateSchedule');
	Route::get('admin/schedule/update/{schedule_id}', 'ExtracurricularController@EditSchedule');
	Route::get('admin/schedule/{schedule_id}/delete', 'ExtracurricularController@deleteSchedule');

	Route::get('admin/achievement', 'ExtracurricularController@AchievementList');
	Route::get('admin/achievement/create', 'ExtracurricularController@AchievementCreate');
	Route::post('admin/achievement/add-achievement', 'ExtracurricularController@AchievementAdd');

	Route::get('admin/achievement/edit/{ach_id}', 'ExtracurricularController@EditAchievement');
	Route::post('admin/achievement/update/{ach_id}', 'ExtracurricularController@UpdateAchievement');
	Route::get('admin/achievement/{ach_id}/delete', 'ExtracurricularController@deleteAchievement');

	Route::get('admin/student/obligate', 'StudentController@StudentObligate');

	Route::get('admin/extracurricular_obligate', 'ExtracurricularController@ListEskulWajib');
	Route::get('admin/extracurricular_obligate/create', 'ExtracurricularController@CreateEskulWajib');
	Route::post('admin/extracurricular_obligate/add-obligate', 'ExtracurricularController@AddEskulWajib');
	Route::get('admin/extracurricular_obligate/edit/{obligate_id}','ExtracurricularController@EditEskulWajib');
	Route::post('admin/extracurricular_obligate/update/{obligate_id}','ExtracurricularController@UpdateEskulWajib');
	Route::get('admin/extracurricular_obligate/{obligate_id}/delete', 'ExtracurricularController@DeleteEskulWajib');

});


Route::group(['middleware' => ['role:student']], function () {
	Route::get('/student/dashboard','StudentController@index')->name('dashboard.student');
	Route::get('student/extracurricular', 'ExtracurricularController@listEkskulStudent'); 
	Route::get('student/extracurricular/detail-extracurricular/{esc_id}', 'ExtracurricularController@detailEkskulStudent');
	Route::post('student/extracurricular/{esc_id}','ExtracurricularController@daftar');
	Route::get('student/extracurricular/list','ExtracurricularController@listEkskul');
	Route::get('student/schedule','StudentController@ScheduleEskulStudent');
	Route::get('student/extracurricular_obligate','ExtracurricularController@EskulWajibSiswa');
	Route::get('student/achievement', 'StudentController@ListAchievement'); 



});

Route::group(['middleware' => ['role:coach']], function () {
	Route::get('/coach/dashboard','ExtracurricularController@index')->name('dashboard.coach');
	Route::get('coach/student','StudentController@listes'); //ini baru menampilkan data di table semua bukan pertable//
	Route::get('coach/student/{regis_id}/delete', 'StudentController@deletestudent');

	Route::get('coach/info/create','ExtracurricularController@createinfo');
	Route::post('coach/info/add-info', 'ExtracurricularController@addinfo');
	Route::get('coach/info/edit/{info_id}', 'ExtracurricularController@EditInfo');
	Route::post('coach/info/update/{info_id}', 'ExtracurricularController@UpdateInfo');
	Route::get('coach/info/{info_id}/delete', 'ExtracurricularController@deleteInfo');
	Route::get('coach/schedule','CoachController@ScheduleEskulCoach');
	

});


