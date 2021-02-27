<?php

namespace App\Http\Controllers;

use Hash;
use App\User;
use App\Coach;
use App\extracurricular;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;




class CoachController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
         }
    
    public function index()
    {
    	return view('coach.dashboard');
    }

    public function list()
    {

        $data ['eskul']= DB::table('coaches')
        ->join('extracurriculars','coaches.coc_esc_id','=','extracurriculars.esc_id')
        ->join('users','coaches.coc_usr_id','=','users.usr_id')
        // ->select('coaches.coc_esc_id','extracurriculars.esc_name','users.usr_name')

        ->get();
        $no = 1;
        return view('admin.list-pembina', $data);



        // $list_coach = \App\Coach::all();
        // return view('admin.list-pembina', ['list_coach' => $list_coach]);
    }
    public function create()
    {
        $extracurriculars = DB::table('extracurriculars')
        ->leftjoin('coaches','coaches.coc_esc_id','=','extracurriculars.esc_id')
        ->where('coc_esc_id','=',null)
        ->get();
        
        // $extracurriculars = extracurricular::all();

        return view('admin.add-pembina', compact('extracurriculars'));
    }

     public function addcoach(Request $request)
    {

       $user = new User();
       $user->usr_name = request('usr_name');
       $user->usr_email = request('usr_email');
       $user->usr_phone = request('usr_phone');
       $user->usr_password = Hash::make('coach123');
       $user->usr_verification_token = str_replace('/', '', Hash::make(Str::random(12)));
        $user->usr_is_active = true;
        $user->save();
        $user->assignRole('coach');



        $coach = new Coach();
        $coach->coc_usr_id = $user->usr_id;
        $coach->coc_esc_id = request('coc_esc_id');
        $coach->coc_birth = request('coc_birth');
        $coach->coc_gender = request('coc_gender');
        $coach->coc_study = request('coc_study');
        $coach->coc_job = request('coc_job');
        $coach->coc_address = request('coc_address');
        $coach->save();

        return redirect('admin/coach');
        
    }
    public function detail($coc_id)
    {

        $data ['data']= DB::table('coaches')
        ->join('extracurriculars','coaches.coc_esc_id','=','extracurriculars.esc_id')
        ->join('users','coaches.coc_usr_id','=','users.usr_id')
        ->select('usr_name','esc_name','coc_birth','coc_gender','coc_study','coc_job','coc_address')
        ->where('coc_id',$coc_id)

        ->first();
    
        return view('admin.detail-pembina',$data);
    }
    public function deleteCoach($coc_id)
    {
        $eskul = Coach::where('coc_id', $coc_id)->delete();
        return back();
    }
    public function listes()
    {
        $list_student = \App\Student::all();
        return view('coach.data-member', ['list_student' => $list_student]);
    }





    //  public function Coach()
    // {
    //     return view('admin.list-pembina');
    // }
    // public function addpembina()
    // {
    //     return view('admin.add-pembina');
    // }
    
    // public function detailCoach()
    // {
    //     return view('admin.detail-pembina'); 

    // }

 }