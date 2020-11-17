@extends('layouts.student-master')
@section('content')



<form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="name" class="form-control" placeholder="name extracurricular">
                  </div>
                  <div class="form-group">
                    <label>Kelas</label>
                    <input type="name" class="form-control" placeholder="name coach">
                  </div>
                  <div class="form-group">
                    <label>Nama Ektrakulikuler</label>
                    <input type="name" class="form-control" placeholder="Nama EKstrakulikuler">
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input type="text" class="form-control" placeholder="Jenis Kelamin">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" placeholder="Alamat">
                  </div>
                 <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" class="form-control" placeholder="Keterangan">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

@endsection              