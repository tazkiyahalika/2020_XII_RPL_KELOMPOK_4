@extends('layouts.student-master')
@section('content')



<form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label>NIS</label>
                    <input type="name" class="form-control" placeholder="Masukan NIS">
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="name" class="form-control" placeholder="Masukan Nama">
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input type="name" class="form-control" placeholder="Masukan Jenis Kelamin">
                  </div>
                  <div class="form-group">
                    <label>Kelas</label>
                    <input type="text" class="form-control" placeholder="Masukan Kelas">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" placeholder="Masukan Alamat">
                  </div>
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="{{ url('student/extracurricular')}}" button type="submit" class="btn btn-primary" >Submit</a>
                </div>
              </form>

@endsection              