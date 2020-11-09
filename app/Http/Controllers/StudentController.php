<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Saving;
use App\HomeroomTeacher;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Student;

class StudentController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
      
    }
    
    public function index()
    {
    	return view('student.dashboard');
    }
  }