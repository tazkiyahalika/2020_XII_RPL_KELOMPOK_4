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
        $list_eskul = \App\extracurricular::all();
    	return view('admin.extracurricular', ['list_eskul' => $list_eskul]);
    }
    public function Coach()
    {
    	return view('admin.list-pembina');
    }
    public function create()
    {
        return view ('admin.add-extracurricular');
    }
    public function save(Request $request)
    {
        $create = new Eskul();
        $create->coc_name = $request->input('nama pembina');
        $create->save();
        echo $create->esc_id;
    }

    public function addpembina()
    {
        return view('admin.add-pembina');
    }

     public function addEkskul()
    {
        return redirect('admin/extracurricular');
    }
    public function addcoach()
    {
        return redirect('admin/coach');
    }
    public function updateEkskul()
    {
        return view('admin.update-extracurricular');
    }
    public function detailEkskulPramuka()
    {
        return view('admin.detail-extracurricular-pramuka');
    }

    public function detailEkskulVoli()
    {
        return view('admin.detail-extracurricular-voli');
    }

     public function detailPembinaPramuka()
    {
        return view('admin.detail-pembina-pramuka');
    }
     public function detailPembinaVoli()
    {
        return view('admin.detail-pembina-voli');
    }
     public function updatePembina()
    {
        return view('admin.update-pembina');
    }
    
 }