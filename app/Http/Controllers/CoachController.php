<?php

namespace App\Http\Controllers;

use Hash;
use App\User;
use App\Coach;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;



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
     public function addcoach(Request $request)
    {
        $data = Coach::whereCocEscId($request->input('coc_esc_id'))->first();
        if($data){
            return back()->withToastError('Gagal, Ekstrakulikuler sudah mempunyai pembina');
        }else{
            $user = new User();
            $user->usr_name = $request->usr_name;
            $user->usr_email = $request->usr_email;
            $user->usr_phone = 
            $user->usr_profile_picture =
            $rand_string = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0,6);
            $rand_int = substr(str_shuffle('0123456789'), 0, 4);
            $rand_password = $rand_string . $rand_int;
            $usr->usr_password = Hash::make($rand_password);  
            $user->usr_verification_id =
            $user->usr_email_verified_at = now();
            $user->usr_created_by = Auth()->user()->usr_id;
            $user->assignRole('coach');
            mail::to($user['usr_email'])->send(new aadcoach($user,$rand_password));
            




            if ($user->save()) {
            $create = new Coach();
            $create->coc_usr_id = $request->coc_usr_id;
            $create->coc_esc_id = $request->coc_esc_id;
            $create->coc_birth = $request->coc_birth;
            $create->coc_gender = $request->coc_gender;
            $create->coc_study = $request->coc_study;
            $create->coc_job = $request->coc_job;
            $create->coc_address = $request->coc_address;
            $create->save();

        return view('admin.add-pembina');
        }
        }
    }
    public function detail($coc_id)
    {
        $coach = Coach::where('coc_id',$coc_id)->first();
        // $data ['data']= DB::table('coaches')
        // ->join('extracurriculars','coaches.coc_esc_id','=','extracurriculars.esc_id')
        // ->join('users','coaches.coc_usr_id','=','users.usr_id')
        // ->select('coaches.coc_esc_id','extracurriculars.esc_name','users.usr_name')

        
        return view('admin.detail-pembina', compact('coach'));
    }
    public function deleteCoach($coc_id)
    {
        $eskul =Coach::where('coc_id', $coc_id)->delete();
        return back();
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