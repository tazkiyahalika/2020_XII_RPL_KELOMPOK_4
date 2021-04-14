<?php

namespace App\Http\Controllers;

use Hash;
use App\User;
use App\Coach;
use App\Extracurricular;
use App\ScheduleExtracurricular;
use App\InformationExtracurriculars;
use App\Achievement;
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
        $coach = Coach::where('coc_esc_id' ,$esc_id)->first();
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
        
        $extracurriculars = extracurricular::where('esc_id', $coach->coc_esc_id)->first();
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

        // $user = User::where('usr_id', $request->usr_id)->update([
        //         'usr_name' => $request->usr_name,
        //         'usr_email' => $request->usr_email,
        //         'usr_phone' => $request->usr_phone,
        //         'usr_password' => $request->usr_password,
                // 'usr_verification_token' => $request->usr_verification_token,
                // 'usr_is_active' => $request->usr_is_active
            //]);

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
        $extracurriculars = extracurricular::where('esc_id', $esc_id)
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
         // $list_eskul = \App\extracurricular::all();
        $regis = extracurricular::leftJoin('register_extracurricular','extracurriculars.esc_id','=','register_extracurricular.regis_esc_id')
        // ->join('users', 'register_extracurricular.regis_usr_id', '=', 'users.usr_id')
        // ->select('usr_id','esc_name')
        ->get();
        
        return view('student.student-extracurricular', ['list_eskul' => $regis]);
    }
     public function detailEkskulStudent($esc_id)
    {
        $extracurricular = extracurricular::where('esc_id', $esc_id)->first();
        return view('student.detail-extracurricular', compact('extracurricular'));
    }
    public function daftar(Request $request, $esc_id)
    {
        $count = RegisterExtracurricular::whereRegisUsrId(Auth::user()->usr_id)->count();
        $cek = RegisterExtracurricular::whereRegisUsrId(Auth::user()->usr_id)
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
        $create->regis_usr_id= Auth::user()->usr_id;
        $create->regis_status=1;
        $create->save();

        return redirect('student/extracurricular')->withSuccess('Pendaftaran Ekskul Berhasil');
        
    }
    public function listEkskul()
    {
        $data ['eskul']=RegisterExtracurricular::whereRegisUsrId(Auth::user()->usr_id)
        ->join('extracurriculars','register_extracurricular.Regis_esc_id','=','extracurriculars.esc_id')
        // ->join('coaches', 'register_extracurricular.regis_coc_id', '=', 'coaches.coc_id')
        ->get();
        return view('student.student-list-eskul',$data);

    }

    public function ScheduleList()
    {
         $data ['schedule']= DB::table('schedule_extracurricular')
        ->join('extracurriculars','schedule_extracurricular.schedule_esc_id','=','extracurriculars.esc_id')
        ->where('schedule_extracurricular.deleted_at', null)
        ->get();
        return view('admin.list-schedule', $data);
    }
    public function CreateSchedule()
    {
        // $data ['extracurricular']= extracurricular::all();
        $extracurriculars = DB::table('extracurriculars')
        ->leftjoin('schedule_extracurricular','schedule_extracurricular.schedule_esc_id','=','extracurriculars.esc_id')
        ->where('schedule_esc_id','=',null)
        ->get();
        
        
        return view('admin.add-schedule', compact('extracurriculars'));
    }
    public function addSchedule(Request $request)
    {
        $schedule = new ScheduleExtracurricular();
        $schedule->schedule_esc_id = $request->schedule_esc_id;
        $schedule->schedule_day= $request->schedule_day;
        $schedule->schedule_time_start = $request->schedule_time_start;
        $schedule->schedule_time_end = $request->schedule_time_end;
        $schedule->save();

        return redirect('/admin/schedule')->withSuccess('Berhasil Di Tambah');
    }
      public function EditSchedule($schedule_id)
    {
        $extracurricular=extracurricular::all();
        $data= DB::table('schedule_extracurricular')->where('schedule_id', $schedule_id)
        ->join('extracurriculars','schedule_extracurricular.schedule_esc_id','=','extracurriculars.esc_id')
        ->get();

        return view('admin.update-schedule', ['extracurricular' => $extracurricular, 'data' => $data]);

    }
    public function UpdateSchedule(Request $request, $schedule_id)
    {
        $schedule = ScheduleExtracurricular::where('schedule_id', $schedule_id)->first();
        $schedule->schedule_esc_id = $request->schedule_esc_id;
        $schedule->schedule_day= $request->schedule_day;
        $schedule->schedule_time_start = $request->schedule_time_start;
        $schedule->schedule_time_end = $request->schedule_time_end;
        $schedule->update();

        return redirect('/admin/schedule')->withSuccess('Berhasil Di Edit');
    }
    public function deleteSchedule($schedule_id)
    {

        $data= ScheduleExtracurricular::where('schedule_id', $schedule_id)
        ->join('extracurriculars','schedule_extracurricular.schedule_esc_id','=','extracurriculars.esc_id')
        ->delete();

        return back()->withToastError('berhasil di Hapus');
    }
    public function AchievementList()
    {
         $data ['achievement']= DB::table('achievement')
        ->join('extracurriculars','achievement.ach_esc_id','=','extracurriculars.esc_id')
        ->where('achievement.deleted_at', null)
        ->get();
        return view('admin.list-achievement', $data);
    }
    public function AchievementCreate()
    {
        $data ['extracurricular']= extracurricular::all();
        
        return view('admin.add-achievement', $data);
    }
    public function AchievementAdd(Request $request)
    {
        $ach = new Achievement();
        $ach->ach_esc_id = $request->ach_esc_id;
        $ach->ach_event= $request->ach_event;
        $ach->ach_date_event = $request->ach_date_event;
        $ach->ach_champion = $request->ach_champion;
        $ach->save();

        return redirect('/admin/achievement')->withSuccess('Berhasil Di Tambah');

    }

    public function EditAchievement($ach_id)
    {
        $extracurricular=extracurricular::all();
        $data= DB::table('achievement')->where('ach_id', $ach_id)
        ->join('extracurriculars','achievement.ach_esc_id','=','extracurriculars.esc_id')
        ->get();

        return view('admin.update-achievement', ['extracurricular' => $extracurricular, 'data' => $data]);
    }

    public function UpdateAchievement(Request $request, $ach_id)
    {
        $achievement = Achievement::where('ach_id', $ach_id)->first();
        $achievement->ach_esc_id = $request->ach_esc_id;
        $achievement->ach_event= $request->ach_event;
        $achievement->ach_date_event = $request->ach_date_event;
        $achievement->ach_champion = $request->ach_champion;
        $achievement->update();

        return redirect('/admin/achievement')->withSuccess('Berhasil Di Edit');
    }
    public function deleteAchievement($ach_id)
    {

        $achievement= Achievement::where('ach_id', $ach_id)
        ->join('extracurriculars','achievement.ach_esc_id','=','extracurriculars.esc_id')
        ->delete();

        return back()->withToastError('berhasil di Hapus');
    }

     public function index()
    {
       $data ['extracurricular']= DB::table('information_extracurriculars')
        ->join('extracurriculars','information_extracurriculars.info_esc_id','=','extracurriculars.esc_id')
        ->join('users','information_extracurriculars.info_usr_id','=','users.usr_id')

        ->get();
        return view('coach.dashboard', $data);
    }
    public function createinfo()
    {
    $data ['extracurricular']= DB::table('coaches')
        ->join('extracurriculars','coaches.coc_esc_id','=','extracurriculars.esc_id')
        ->join('users','coaches.coc_usr_id','=','users.usr_id')
        ->where('usr_id','=',Auth::user()->usr_id)

        ->first();
        // dd($data);
        return view('coach.add-info', $data);
    }
    public function addinfo(Request $request)
    {
        $info = new InformationExtracurriculars();
        $info->info_esc_id = $request->coc_esc_id;
        $info->info_usr_id=  $request->coc_usr_id;
        $info->information = $request->information;
        $info->info_date = $request->info_date;
       if ($request->hasFile('info_img')) {
            $files = $request->file('info_img');
            $path = public_path('image_info');
            $files_name = $files->getClientOriginalName();
            $files->move($path, $files_name);
            $info->info_img= $files_name;
        }
        $info->save();

        return redirect('/coach/dashboard');
    }
    public function EditInfo($info_id)
    {

        $extracurricular=extracurricular::all();
        $data ['extracurricular']= DB::table('information_extracurriculars')->where('info_id', $info_id)
        ->join('users','information_extracurriculars.info_usr_id','=','users.usr_id')
        ->join('extracurriculars','information_extracurriculars.info_esc_id','=','extracurriculars.esc_id')
        ->where('usr_id','=',Auth::user()->usr_id)

        ->get();
        
        return view('coach.update-info', ['extracurricular' => $extracurricular ,'data' => $data]);
    }
    public function UpdateInfo(Request $request, $info_id)
    {
        $info = InformationExtracurriculars::where('info_id', $info_id)->first();
        $info->info_esc_id = $request->info_esc_id;
        $info->info_usr_id=  $request->info_usr_id;
        $info->information = $request->information;
        $info->info_date = $request->info_date;
       if ($request->hasFile('info_img')) {
            $files = $request->file('info_img');
            $path = public_path('image_info');
            $files_name = $files->getClientOriginalName();
            $files->move($path, $files_name);
            $info->info_img= $files_name;
        }
        $info->update();

        return redirect('/coach/dashboard');
    }
    public function deleteInfo($info_id)
    {
        $data= InformationExtracurriculars::where('info_id', $info_id)
        ->join('extracurriculars','coaches.coc_esc_id','=','extracurriculars.esc_id')
        ->join('users','coaches.coc_usr_id','=','users.usr_id')
        ->where('usr_id','=',Auth::user()->usr_id)

        ->delete();

        return back();
    }
}
