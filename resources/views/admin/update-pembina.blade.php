@extends('layouts.admin-master')
@section('content')



<form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama<span style="color:red"> *</span></label>
                    <input type="name" class="form-control" placeholder="nama pembina">
                  </div>
                  <div class="form-group">
                    <label>Ekstrakulikuler<span style="color:red"> *</span></label>
                    <input type="name" class="form-control" placeholder="nama ekstrakulikuler ">
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin<span style="color:red"> *</span></label>
                    <input type="name" class="form-control" placeholder="jenis kelamin">
                  </div>
                   <div class="form-group">
                    <label>Alamat<span style="color:red"> *</span></label>
                    <input type="name" class="form-control" placeholder="alamat">
                  </div>
                   <div class="form-group">
                    <label>Email<span style="color:red"> *</span></label>
                    <input type="name" class="form-control" placeholder="email">
                  </div>
                  <div class="form-group">
                    <label>Foto Pembina<span style="color:red"> *</span></label>
                    <input type="name" class="form-control" placeholder="foto pembina">
                  </div>
                  
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="{{ url('admin/coach')}}" button type="submit" class="btn btn-primary button type="submit" class="btn btn-primary data-toggle="tooltip" data-placement="top" title="Submit" onclick="return confirm('Apakah data sudah benar?');" >Submit</a>
                </div>
              </form>

@endsection  