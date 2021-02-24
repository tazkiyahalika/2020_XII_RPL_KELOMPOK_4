@extends('layouts.admin-master')
@section('content')



                <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="name" class="form-control" placeholder="nama pembina">
                  </div>
                  <div class="form-group">
                    <label>Extrakulikuler</label>
                    <input type="name" class="form-control" placeholder="nama ekstrakulikuler">
                  </div>
                  <div class="form-group">
                    <label>Tempat Tanggal Lahir</label>
                    <input type="name" class="form-control" placeholder="tempat tanggal lahir<">
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input type="name" class="form-control" placeholder="jenis kelamin">
                  </div>
                  <div class="form-group">
                    <label>Pendidikan</label>
                    <input type="name" class="form-control" placeholder="pendidikan">
                  </div>
                  <div class="form-group">
                    <label>Pekerjaan</label>
                    <input type="name" class="form-control" placeholder="pekerjaan">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="name" class="form-control" placeholder="alamat">
                  </div>
                  
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="{{ url('admin/coach/add-coach')}}" button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Tambah" onclick="return confirm('Tambah Pembina?'); ">Submit</a>
                </div>
              </form>

@endsection              

