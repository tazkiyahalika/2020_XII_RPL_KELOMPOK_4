<?php

namespace App\Http\Controllers;

use App\Coach;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


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
        ->select('coaches.coc_esc_id','extracurriculars.esc_name','users.usr_name')

        ->get();
        return view('admin.list-pembina',$data);



        // $list_coach = \App\Coach::all();
        // return view('admin.list-pembina', ['list_coach' => $list_coach]);
    }
    public function detail($coc_id)
    {
        $coach = Coach::where('coc_id', $coc_id)->first();
        return view('admin.detail-pembina', compact('coach'));
    }





    //  public function Coach()
    // {
    //     return view('admin.list-pembina');
    // }
    // public function addpembina()
    // {
    //     return view('admin.add-pembina');
    // }
    // public function addcoach()
    // {
    //     return redirect('admin/coach');
    // }
    // public function detailCoach()
    // {
    //     return view('admin.detail-pembina'); 

    // }

 }