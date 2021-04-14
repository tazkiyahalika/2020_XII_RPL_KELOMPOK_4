<?php

namespace App\Http\Controllers;

use App\Coach;
use App\RegisterExtracurricular;
use App\Extracurricular;
use App\ScheduleExtracurricular;
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
        // $list_student = \App\Student::all();
        $coach = Coach::where('coc_usr_id', Auth()->user()->usr_id)->first();

        $register = DB::table('register_extracurricular')
                    ->join('extracurriculars', 'register_extracurricular.regis_esc_id', '=', 'extracurriculars.esc_id')
                    ->join('coaches', 'register_extracurricular.regis_esc_id', '=', 'coaches.coc_esc_id')
                    ->join('users', 'register_extracurricular.regis_usr_id', '=', 'users.usr_id')
                    ->join('students', 'users.usr_id', '=', 'students.std_usr_id')
                    ->where('regis_esc_id', $coach->coc_esc_id)
                    ->where('register_extracurricular.deleted_at', null)
                    ->get();
                    
        return view('coach.data-member', ['list_student' => $register]);
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

     public function deletestudent($regis_id)
    {
        $registerstudent = RegisterExtracurricular::where('regis_id', $regis_id)->delete();
        

        return back()->withToastError('berhasil di Hapus');
    }

    public function ScheduleEskulStudent()
    {
        $extracurricular=extracurricular::all();
        $schedule['schedule']= DB::table('schedule_extracurricular')
        ->join('extracurriculars','schedule_extracurricular.schedule_esc_id','=','extracurriculars.esc_id')
        ->get();
         return view('student.student-schedule', $schedule );
    }
    public function StudentObligate()
    {
        $std['std'] = DB::table('students')
        ->join('users', 'students.std_usr_id', '=', 'users.usr_id')
        ->get();

        return view('admin.student-obligate', $std);
    }

    
}