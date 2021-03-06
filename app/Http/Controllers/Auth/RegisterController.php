<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Support\Str;
use App\Student;
use App\Coach;
use App\extracurricular;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    public function registerStudent()
    {
        return view('auth.register-student');
    }

    public function registerCoach()
    {
        $esc=extracurricular::all();
        return view('auth.register-coach',compact(['esc']));
    }

    public function registerAdmin()
    {
        return view('auth.register-admin');
    }

    public function choseRegister()
    {
        return view('auth.choose_register');
    }
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'usr_name' => ['required', 'string', 'max:255'],
            'usr_email' => ['required', 'string', 'max:255', 'unique:users,usr_email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'usr_phone' => ['required', 'min:11', 'max:14'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // dd($data);

        $user = User::create([
            'usr_name' => $data['usr_name'],
            'usr_email' => $data['usr_email'],
            'usr_phone' => $data['usr_phone'],
            'usr_password' => Hash::make($data['password']),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        if ($data['role'] == 1) {
            $user->assignRole('student');
            $user->created_by = $user->usr_id;
            $student= new Student();
            $student->std_usr_id=$user->usr_id;
            // $student->std_name=$data['usr_name'];
            $student->std_gender=$data['std_gender'];
            $student->std_class=$data['std_class'];
            $student->std_address=$data['std_address'];
            $student->save();
            // dd($user->usr_id);


        } elseif ($data['role'] == 2) {
            $user->assignRole('coach');
            $user->created_by = $user->usr_id;
            $coach=new Coach();
            $coach->coc_usr_id=$user->usr_id;
            $coach->coc_esc_id=$data['coc_esc_id'];
            $coach->coc_birth=$data['coc_place'].','.$data['coc_birth'];
            $coach->coc_gender=$data['coc_gender'];
            $coach->coc_study=$data['coc_study'];
            $coach->coc_job=$data['coc_job'];
            $coach->coc_address=$data['coc_address'];
            $coach->save(); 

 
        } elseif ($data['role'] == 3) {
            $user->assignRole('admin');
            $user->created_by = $user->usr_id;
        }


        Mail::to($data['usr_email'])->send(new SendMail($user));
        return $user;
    }
}
