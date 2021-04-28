<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\SendMail;
use App\Mail\ForgotPassword;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use App\Coach;
use App\Student;
class AccountController extends Controller
{
    public function verifyToken($userID, $verifyToken)
    {

        $user = User::where('usr_id', $userID)->where('usr_verification_token', $verifyToken)->firstOrFail();
        if ($user) {
            $user->usr_email_verified_at = now();
            $user->save();

            return redirect('/dashboard')->with(['success' => 'Selamat akun anda berhasil diverifikasi']);;
        }
    }

    public function waitingVerification()
    {

        if (Auth::user()->usr_email_verified_at == null) {
            return view('auth/verify');
        } else {
            return redirect('/dashboard');
        }
    }

    public function resendVerification()
    {

        $user = Auth::user();
        Mail::to($user['usr_email'])->send(new SendMail($user));
        return redirect()->back()->with(['success' => 'Email verifikasi berhasil dikirim ulang']);
    }

    public function forgotPassword()
    {
        return view('auth.forgot-password');
    }

    public function sendEmailForgotPassword(Request $request)
    {
        $request->validate([
            'usr_email' => 'required|email'
        ]);

        $users = User::whereUsrEmail($request->usr_email)->first();
        if ($users == false) {
            return redirect()->back()->with(['error' => 'Email Tidak Terdaftar']);
        } elseif ($users->usr_email_verified_at == false) {
            return redirect()->back()->with(['error' => 'Akun Belum di Verifikasi']);
        }

        DB::table('password_resets')->insert([
            'pwr_email' => $request->usr_email,
            'pwr_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'pwr_created_at' => Carbon::now()
        ]);

        $tokenData = DB::table('password_resets')->where('pwr_email', $request->usr_email)->first();

        Mail::to($tokenData->pwr_email)->send(new forgotPassword($tokenData->pwr_token, $users));
        return redirect()->back()->with(['success' => 'Reset Password Kode di Kirim ke Email']);
    }

    public function verifyForgotToken($resetVerificationToken)
    {
        $resetPassword = DB::table('password_resets')->where('pwr_token', $resetVerificationToken)->first();
        return view('auth.reset-password', compact('resetPassword'));
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        $updatePassword = DB::table('password_resets')
            ->where(['pwr_email' => $request->pwr_email, 'pwr_token' => $request->pwr_token])
            ->first();

        if (!$updatePassword)
            dd("kesini");

        $user = User::where('usr_email', $request->pwr_email)
            ->update(['usr_password' => Hash::make($request->password)]);
        DB::table('password_resets')->where(['pwr_email' => $request->pwr_email])->delete();

        return redirect('/login')->with(['success' => 'Password Anda Berhasil di Updated']);
    }
    public function show($usr_id)
    {
        $user = User::find($usr_id);
        return back();
    }
    public function listprofilecoach()
    {
        if (Auth()->user()->hasRole('coach')) {
            $profile['profile'] = User::join('coaches','users.usr_id','=','coaches.coc_usr_id')
                                ->where('users.usr_id', Auth()->user()->usr_id)->first();     
        return view('profile', $profile);
        }else{
            $profile['profile'] = User::join('students','users.usr_id','=','students.std_usr_id')
                                ->where('users.usr_id', Auth()->user()->usr_id)->first();
                                return view('profile', $profile);
        }
       
    }
    public function editprofile()
    {
        if (Auth()->user()->hasRole('coach')) {
            $profile['profile'] = User::join('coaches','users.usr_id','=','coaches.coc_usr_id')
                                ->where('users.usr_id', Auth()->user()->usr_id)->first();     
        return view('update-profile', $profile);
        }else{
            $profile['profile'] = User::join('students','users.usr_id','=','students.std_usr_id')
                                ->where('users.usr_id', Auth()->user()->usr_id)->first();
                                return view('update-profile', $profile);
        }

    }
    public function updateprofile(Request $request)
    {
    if (Auth()->user()->hasRole('coach')) {
        $profile = User::where('usr_id', Auth()->user()->usr_id)->first();
        $profile->usr_name = $request->usr_name;
        $profile->usr_phone = $request->usr_phone;
        $profile->update();

        $profilecoach = Coach::where('coc_usr_id' ,$profile->usr_id)->first();
        $profilecoach->coc_place = $request->coc_place;
        $profilecoach->coc_birth = $request->coc_birth;
        $profilecoach->coc_gender = $request->coc_gender;
        $profilecoach->coc_study = $request->coc_study;
        $profilecoach->coc_job = $request->coc_job;
        $profilecoach->coc_address = $request->coc_address;
        $profilecoach->update();

           
        }else{
        $profile = User::where('usr_id', Auth()->user()->usr_id)->first();
        $profile->usr_name = $request->usr_name;
        $profile->usr_phone = $request->usr_phone;
        $profile->update();

        $profilestudent = Student::where('std_usr_id' ,$profile->usr_id)->first();
        $profilestudent->std_gender = $request->std_gender;
        $profilestudent->std_class = $request->std_class;
        $profilestudent->std_address = $request->std_address;
        
        $profilestudent->update();


        }
        return redirect('/account/profile');
    }
}
