@extends('layouts.student-master')
@section('content')



<form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label>NIS<span style="color:red"> *</span></label>
                    <input type="name" class="form-control" placeholder="Masukan NIS">
                  </div>
                  <div class="form-group">
                    <label>Nama<span style="color:red"> *</span></label>
                    <input type="name" class="form-control" placeholder="Masukan Nama">
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin<span style="color:red"> *</span></label>
                    <input type="name" class="form-control" placeholder="Masukan Jenis Kelamin">
                  </div>
                  <div class="form-group">
                    <label>Kelas<span style="color:red"> *</span></label>
                    <input type="text" class="form-control" placeholder="Masukan Kelas">
                  </div>
                  <div class="form-group">
                    <label>Alamat<span style="color:red"> *</span></label>
                    <input type="text" class="form-control" placeholder="Masukan Alamat">
                  </div>
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="{{ url('student/extracurricular')}}" button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Berhasil Mendaftar');" >Submit</a>
                </div>
              </form>

@endsection              