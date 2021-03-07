<?php

namespace App\Http\Controllers;


use App\Extracurricular;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
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
     public function listes()
    {
        $list_student = \App\Student::all();
        return view('coach.data-member', ['list_student' => $list_student]);
    }
    
     public function list()
    {
        $list_student = Student::all();
        $register = DB::table('register_extracurricular')
                    ->join('extracurriculars', 'register_extracurricular.regis_esc_id', '=', 'extracurriculars.esc_id')
                    ->join('coaches', 'register_extracurricular.regis_esc_id', '=', 'coaches.coc_esc_id')
                    ->get();

        return view('admin.list-siswa', ['list_student' => $list_student]);
    }

     public function deletestudent($std_id)
    {
        $student = Student::where('std_id', $std_id)->delete();
        return back()->withToastError('berhasil di Hapus');
    }
}