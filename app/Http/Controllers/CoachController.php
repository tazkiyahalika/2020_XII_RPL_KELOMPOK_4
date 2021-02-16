<?php

namespace App\Http\Controllers;

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
     public function Coach()
    {
        return view('admin.list-pembina');
    }
    public function addpembina()
    {
        return view('admin.add-pembina');
    }
    public function addcoach()
    {
        return redirect('admin/coach');
    }
    public function detailCoach()
    {
        return view('admin.detail-pembina'); 

    }

 }