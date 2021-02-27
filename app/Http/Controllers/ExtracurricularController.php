<?php

namespace App\Http\Controllers;

use App\Extracurricular;
use App\RegisterExtracurricular;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;


class ExtracurricularController extends Controller
{
     public function list()
    {
        $list_eskul = \App\extracurricular::all();
    	return view('admin.extracurricular', ['list_eskul' => $list_eskul]);
    }
    public function create()
    {
        return view('admin.add-extracurricular');
    }
    public function addEkskul(Request $request)
    {
        $extracurricular = new extracurricular();
        $extracurricular->esc_name = request('esc_name');
        $extracurricular->esc_description = request('esc_description');
        if ($request->hasFile('logo_ekstrakulikuler')) {
            $files = $request->file('logo_ekstrakulikuler');
            $path = public_path('logo_eskul');
            $files_name = $files->getClientOriginalName();
            $files->move($path, $files_name);
            $extracurricular->esc_logo= $files_name;
        }
        $extracurricular->save();

        return redirect('admin/extracurricular');
    }
    public function editEkskul($esc_id)
    {
        $extracurricular = extracurricular::where('esc_id', $esc_id)->get();
        return view('admin.update-extracurricular', ['extracurriculars' => $extracurricular]);
    }

    
    public function updateEkskul(Request $request, $esc_id)
    {
        extracurricular::where('esc_id', $request->esc_id)->update([
                'esc_name' => $request->esc_name,
                'esc_description' => $request->esc_description

            ]);
        //kondisi jika file request nya ada isinya update kolom
        if ($request->hasFile('logo_ekstrakulikuler')) {
            $files = $request->file('logo_ekstrakulikuler');
            $path = public_path('logo_eskul');
            $files_name = $files->getClientOriginalName();
            $files->move($path, $files_name);

            extracurricular::where('esc_id', $request->esc_id)->update ([
                'esc_logo' => $files_name
            ]);
        } 
        return redirect('/admin/extracurricular');
    
    }
    public function deleteEkskul($esc_id)
    {
        $eskul = extracurricular::where('esc_id', $esc_id)->delete();
        return back();
    }
    public function detailEkskul($esc_id)
    {
        $extracurricular = extracurricular::where('esc_id', $esc_id)->first();
        return view('admin.detail-extracurricular', compact('extracurricular'));
    }
    public function listEkskulStudent()
    {
        $list_eskul = \App\extracurricular::all();
        return view('student.student-extracurricular', ['list_eskul' => $list_eskul]);
    }
     public function detailEkskulStudent($esc_id)
    {
        $extracurricular = extracurricular::where('esc_id', $esc_id)->first();
        return view('student.detail-extracurricular', compact('extracurricular'));
    }
    public function daftar(Request $request, $esc_id)
    {
        $count = RegisterExtracurricular::whereRegisStdUsrId(Auth::user()->usr_id)->count();
        $cek = RegisterExtracurricular::whereRegisStdUsrId(Auth::user()->usr_id)
        ->whereRegisEscId($request->input('id_esc'))
        ->first();
        if ($cek) {
            return redirect('student/extracurricular')->withToastError('Anda Sudah Memasuki Ekstrakulikuler Ini');
        }
        if ($count >1) {
            return back()->withToastError('Anda Sudah Memasuki 2 Ekstrakulikuler');
        }
        $create = new RegisterExtracurricular ();
        $create->regis_esc_id= $request->input('id_esc');
        $create->regis_std_usr_id= Auth::user()->usr_id;
        $create->save();
        return redirect('student/extracurricular')->withSuccess('Pendaftaran Ekskul Berhasil');
        
    }
    public function listEkskul()
    {
        $data ['eskul']=RegisterExtracurricular::whereRegisStdUsrId(Auth::user()->usr_id)
        ->join('extracurriculars','register_extracurricular.Regis_esc_id','=','extracurriculars.esc_id')
        ->get();
        return view('student.student-list-eskul',$data);

    }

}
