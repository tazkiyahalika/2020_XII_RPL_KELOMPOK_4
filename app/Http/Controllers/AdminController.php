<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


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
    public function list()
    {
    	return view('admin.extracurricular');
    }
    public function Coach()
    {
    	return view('admin.list-pembina');
    }
    public function create()
    {
        return view('admin.add-extracurricular');
    }
 }