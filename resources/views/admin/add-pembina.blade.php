@extends('layouts.admin-master')
@section('content')



                <form enctype="multipart/form-data" action="/admin/coach/create" method="POST">
                <div class="card-body">

                  {{ csrf_field() }}
                  <div class="form-group">
                    <label>Nama</label>
                    <input name="usr_name" type="text" class="form-control" placeholder="nama pembina">
                  </div>
                  <div class="form-group">
                    <label>email</label>
                    <input name="usr_email" type="text" class="form-control" placeholder="email">
                  </div>
                  <div class="form-group">
                    <label>Telepon</label>
                    <input name="usr_phone" type="text" class="form-control" placeholder="Telepon">
                  </div>
                  <div class="form-group">
                    <label>Extrakulikuler</label>
                   <select class="form-control" name="coc_esc_id" placeholder="Extrakulikuler">
                   
                   @foreach($extracurriculars as $extracurricular)
                      <option value='{{ $extracurricular->esc_id }}'>{{ $extracurricular->esc_name }}</option>
                    @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Tempat Tanggal Lahir</label>
                    <input type="date" name="coc_birth" class="form-control" placeholder="tempat tanggal lahir">
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="coc_gender" class="form-control" placeholder="jenis kelamin">
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                       </select>
                  </div>
                  <div class="form-group">
                    <label>Pendidikan</label>
                    <input type="text" name="coc_study" class="form-control" placeholder="pendidikan">
                  </div>
                  <div class="form-group">
                    <label>Pekerjaan</label>
                    <input type="text" name="coc_job" class="form-control" placeholder="pekerjaan">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="coc_address" class="form-control" placeholder="alamat">
                  </div>
                  
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Tambah" onclick="return confirm('Tambah Pembina?'); ">Submit</button>
                </div>
              </form>

@endsection              

