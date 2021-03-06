<?php

namespace App\Http\Controllers;

use App\Extracurricular;
use App\Coach;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;



class AdminController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $coach   = Coach::count();
        $student = Student::count();
        $eskul = extracurricular::count();

        return view('admin.dashboard',compact('coach','student','eskul'));
        // $data ['extracurricular']= DB::table('information_extracurriculars')
        // ->join('extracurriculars','information_extracurriculars.info_esc_id','=','extracurriculars.esc_id')
        // ->join('users','information_extracurriculars.info_usr_id','=','users.usr_id')
        // ->where('information_extracurriculars.deleted_at', null)
        // ->get();
        // return view('admin.dashboard',$data);
    }
    
   

   
   
    


    
    
 }