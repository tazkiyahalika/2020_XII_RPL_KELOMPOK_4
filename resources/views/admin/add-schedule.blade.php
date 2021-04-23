@extends('layouts.admin-master')
@section('content')

   

                <form enctype="multipart/form-data" action="/admin/schedule/add-schedule" method="POST">
                <div class="card-body">

              
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label>Nama EKstrakulikuler</label>
                  <!-- <input name="esc_id" type="text" class="form-control" placeholder="name"> -->
                  <select class="form-control" name="schedule_esc_id" required placeholder="Extrakulikuler">
                   <option value="">---pilih nama ekstrakulikuler---</option>
                   @foreach($extracurriculars as $extracurricular)
                      <option value='{{ $extracurricular->esc_id }}'>{{ $extracurricular->esc_name }}</option>
                    @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Hari</label>
                    <select name="schedule_day" required class="form-control" placeholder="Hari">
                      <option value="">---pilih hari---</option>
                      <option value="Senin">Senin</option>
                      <option value="Selasa">Selasa</option>
                      <option value="Selasa">Rabu</option>
                      <option value="Selasa">Kamis</option>
                      <option value="Selasa">Jum'at</option>
                      <option value="Selasa">Sabtu</option>
                      <option value="Selasa">Minggu</option>
                    </select>
                    <!-- <input name="schedule_day" type="text" class="form-control" placeholder="Hari"> -->
                  </div>
                  <div class="form-group">
                    <label>Jam Mulai</label>
                    <input name="schedule_time_start" type="time" required="required" class="form-control" placeholder="Mulai">
                  </div>
                  <div class="form-group">
                    <label>Jam Selesai</label>
                    <input name="schedule_time_end" type="time" required="required" class="form-control" placeholder="Selesai">
      
                <!-- /.card-body -->
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Tambah" onclick="return confirm('Tambah Jadwal?'); ">Submit</button>
                </div>
                 @include('sweetalert::alert')
              </form>

@endsection              

