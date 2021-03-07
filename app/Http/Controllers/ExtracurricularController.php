<?php

namespace App\Http\Controllers;

use Hash;
use App\User;
use App\Coach;
use App\Extracurricular;
use Illuminate\Support\Facades\DB;
use App\RegisterExtracurricular;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;


class ExtracurricularController extends Controller
{
     public function list()
    {
        $list_eskul = \App\extracurricular::all();
    	return view('admin.extracurricular', ['list_eskul' => $list_eskul]);
    }
    public function create()
    {
         $extracurriculars = DB::table('extracurriculars');
        return view('admin.add-extracurricular', compact('extracurriculars'));
    }
    public function addEkskul(Request $request)
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

        $coach = new Coach();
        $coach->coc_usr_id = $user->usr_id;
        $coach->coc_esc_id= $extracurricular->esc_id;
        $coach->coc_place = request('coc_place');
        $coach->coc_birth = request('coc_birth');
        $coach->coc_gender = request('coc_gender');
        $coach->coc_study = request('coc_study');
        $coach->coc_job = request('coc_job');
        $coach->coc_address = request('coc_address');
        $coach->save();

        

        return redirect('admin/extracurricular')->withSuccess('Berhasil Di Tambahkan');
    }
    public function editEkskul($esc_id)
    {
        $extracurriculars = DB::table('extracurriculars')->where('esc_id', $esc_id)
        ->join('coaches','coaches.coc_esc_id','=','extracurriculars.esc_id')
        ->join('users','users.usr_id','=','coaches.coc_usr_id')
        ->select('esc_id','esc_logo','esc_name','esc_description','usr_name','usr_email','usr_phone','coc_place',
            'coc_birth','coc_gender','coc_study','coc_job','coc_address')
        
        ->get();
        return view('admin.update-extracurricular', ['extracurriculars' => $extracurriculars]);
    }

    
    public function updateEkskul(Request $request, $esc_id)
    {
        // $user = User::where('usr_id', $request->usr_id)->update([
        //         'usr_name' => $request->usr_name,
        //         'usr_email' => $request->usr_email,
        //         'usr_phone' => $request->usr_phone,
        //         'usr_password' => $request->usr_password,
                // 'usr_verification_token' => $request->usr_verification_token,
                // 'usr_is_active' => $request->usr_is_active
            //]);
        $extracurriculars = extracurricular::where('esc_id', $esc_id)->first();
        //dd($extracurriculars);
        $extracurriculars->esc_name = $request->esc_name;
        $extracurriculars->esc_description = $request->esc_description;
        $extracurriculars->update();

            
        //kondisi jika file request nya ada isinya update kolom
        if ($request->hasFile('logo_ekstrakulikuler')) {
            $files = $request->file('logo_ekstrakulikuler');
            $path = public_path('logo_eskul');
            $files_name = $files->getClientOriginalName();
            $files->move($path, $files_name);

            extracurricular::where('esc_id', $request->esc_id)->update ([
                'esc_logo' => $files_name
            ]);

        $coach = Coach::where('coc_esc_id', $extracurriculars->esc_id)->first();
        $coach->coc_place = $request->coc_place;
        $coach->coc_birth = $request->coc_birth;
        $coach->coc_gender = $request->coc_gender;
        $coach->coc_study = $request->coc_study;
        $coach->coc_job = $request->coc_job;
        $coach->coc_address = $request->coc_address;
        $coach->update();

        $user = User::where('usr_id', $coach->coc_usr_id)->first();
        $user->usr_name = $request->usr_name;
        $user->usr_email = $request->usr_email;
        $user->usr_phone = $request->usr_phone;
        // $user->usr_password = Hash::make($request->usr_password);
        // $user->usr_verification_token = $request->usr_verification_token;
        // $user->usr_is_active = $request->usr_is_active;
        $user->update();

        //$extracurriculars = extracurricular::where('esc_id', $request->esc_id)->update([
        //         'esc_name' => $request->esc_name,
        //         'esc_description' => $request->esc_description
       
        // ]);

        // $coach = Coach::where('coc_usr_id', $request->coc_usr_id)->update([
        //         'coc_place' => $request->coc_place,
        //         'coc_birth' => $request->coc_birth,
        //         'coc_gender' => $request->coc_gender,
        //         'coc_study' => $request->coc_study,
        //         'coc_job' => $request->coc_job,
        //         'coc_address' => $request->coc_address
        // ]);
        
        } 

        return redirect('/admin/extracurricular')->withSuccess('Berhasil Di Edit');
    
    }
    public function deleteEkskul($esc_id)
    {
        $extracurriculars = DB::table('extracurriculars')->where('esc_id', $esc_id)
        ->join('coaches','coaches.coc_esc_id','=','extracurriculars.esc_id')
        ->join('users','users.usr_id','=','coaches.coc_usr_id')
        ->select('esc_id','esc_logo','esc_name','esc_description','usr_name','usr_email','usr_phone','coc_place',
            'coc_birth','coc_gender','coc_study','coc_job','coc_address')
        
        ->delete();
        return back()->withToastError('berhasil di Hapus');
    }
    public function detailEkskul($esc_id)
    {
        $extracurricular = extracurricular::where('esc_id', $esc_id)->first();
        return view('admin.detail-extracurricular', compact('extracurricular'));
    }
    public function listEkskulStudent()
    {
        $list_eskul = \App\extracurricular::all();
        // $cek ['eskul']=RegisterExtracurricular::whereRegisStdUsrId(Auth::user()->usr_id)
        // ->join('extracurriculars','register_extracurricular.regis_esc_id','=','extracurriculars.esc_id')
        // ->get();
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
        $create->regis_status=1;
        $create->save();

        return redirect('student/extracurricular')->withSuccess('Pendaftaran Ekskul Berhasil');
        
    }
    public function listEkskul()
    {
        $data ['eskul']=RegisterExtracurricular::whereRegisStdUsrId(Auth::user()->usr_id)
        ->join('extracurriculars','register_extracurricular.Regis_esc_id','=','extracurriculars.esc_id')
        // ->join('coaches', 'register_extracurricular.regis_coc_id', '=', 'coaches.coc_id')
        ->get();
        return view('student.student-list-eskul',$data);

    }

}
