<?php

namespace App\Http\Controllers;

use App\Extracurricular;
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
    	return view('admin.dashboard');
    }
   
   
    


    
    
 }