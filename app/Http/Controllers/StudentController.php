<?php

namespace App\Http\Controllers;


use App\Extracurricular;
use App\RegisterExtracurricular;
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
        $list_eskul = \App\extracurricular::all();
        return view('student.student-extracurricular', ['list_eskul' => $list_eskul]);
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

     public function detailEkskul($esc_id)
    {
        $extracurricular = extracurricular::where('esc_id', $esc_id)->first();
        return view('student.detail-extracurricular', compact('extracurricular'));
    }
    public function detailVoli()
    {
        return view('student.detail-voli');
    }
    public function daftar(Request $request)
    {
        $count = RegisterExtracurricular::whereStdUsrId(Auth::user()->usr_id)->count();
        $cek = RegisterExtracurricular::whereStdUsrId(Auth::user()->usr_id)
        ->whereEscId($request->input('id_esc'))
        ->first();
        if ($cek) {
            return ('String');
        }
        if ($count >1) {
            
            
            return back();
        }
        $create = new RegisterExtracurricular ();
        $create->esc_id= $request->input('id_esc');
        $create->std_usr_id= Auth::user()->usr_id;
        $create->save();
        return redirect('student/list_eskul')->withSuccess('Pendaftaran Ekskul Berhasil');

    }
    public function listEkskul()
    {
        $data ['eskul']=RegisterExtracurricular::whereStdUsrId(Auth::user()->usr_id)
        ->join('extracurriculars','register_extracurricular.esc_id','=','extracurriculars.esc_id')
        ->get();
        return view('student.student-list-eskul',$data);

    }
}