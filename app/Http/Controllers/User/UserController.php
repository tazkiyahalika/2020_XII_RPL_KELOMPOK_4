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
        return redirect('student/dashboard');
       }elseif ($user->hasRole('coach')) {
        return redirect('coach/dashboard');
       }elseif ($user->hasRole('admin')) {
        return redirect('admin/dashboard');
       }else {
        abort(404);
       }
    }
}
