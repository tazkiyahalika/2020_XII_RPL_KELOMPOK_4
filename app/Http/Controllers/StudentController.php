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

    public function StudentEkskul()
    {
    	return view('student.student-extracurricular');
    }
    public function createEkskul()
    {
    	return view('student.create-extracurricular');
    }
    public function saveEkskul()
    {
        return redirect('student/extracurricular');
    }
     public function detailPramuka()
    {
        return view('student.detail-pramuka');
    }
    public function detailVoli()
    {
        return view('student.detail-voli');
    }
}