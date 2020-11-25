<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
         $this->middleware(['auth']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $user = Auth()->user();

       if ($user->hasRole('student')) {
        return redirect('register-student');
       }elseif ($user->hasRole('coach')) {
        return redirect('register-coach');
       }elseif ($user->hasRole('admin')) {
        return redirect('register-admin');
       }elseif  {
        return view('dashboard');
       }else {
        abort(404);
       }
    }
}
