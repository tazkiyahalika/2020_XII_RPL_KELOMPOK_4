@extends('layouts.admin-master')
@section('content')

   

                <form enctype="multipart/form-data" action="/admin/achievement/add-achievement" method="POST">
                <div class="card-body">

              
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label>Nama EKstrakulikuler</label>
                  <!-- <input name="esc_id" type="text" class="form-control" placeholder="name"> -->
                  <select class="form-control" name="ach_esc_id" required="required" placeholder="Extrakulikuler">
                   <option value="---pilih nama ekstrakulikuler---">---pilih nama ekstrakulikuler---</option>
                   @foreach($extracurricular as $extracurricular)
                      <option value='{{ $extracurricular->esc_id }}'>{{ $extracurricular->esc_name }}</option>
                    @endforeach
                    </select>
                  <div class="form-group">
                    <label>Kegiatan</label>
                    <input name="ach_event" type="text" required="required" class="form-control" placeholder="Kegiatan">
                  </div>
                  <div class="form-group">
                    <label>Waktu Pelaksanaan</label>
                    <input name="ach_date_event" type="date" required="required" class="form-control" placeholder="Waktu">
                  </div>
                  <div class="form-group">
                    <label>Prestasi</label>
                    <input name="ach_champion" type="text" required="required" class="form-control" placeholder="Prestasi">
      
                <!-- /.card-body -->
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Tambah" onclick="return confirm('Tambah Jadwal?'); ">Submit</button>
                </div>
              </form>

@endsection              

