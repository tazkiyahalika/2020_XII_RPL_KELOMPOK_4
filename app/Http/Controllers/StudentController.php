<?php

namespace App\Http\Controllers;


use App\Extracurricular;
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
    
     public function list()
    {
        $list_student = \App\Student::all();
        return view('admin.list-siswa', ['list_student' => $list_student]);
    }
}