@extends('layouts.admin-master')
@section('content')



<form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Ekstrakulikuler<span style="color:red"> *</span></label>
                    <input type="name" class="form-control" placeholder="nama ekstrakulikuler">
                  </div>
                  <div class="form-group">
                    <label>Nama Pembina<span style="color:red"> *</span></label>
                    <input type="name" class="form-control" placeholder="nama pembina">
                  </div>
                  <div class="form-group">
                    <label>Gambar Ekstrakulikuler<span style="color:red"> *</span></label>
                    <input type="name" class="form-control" placeholder="gambar ekstrakulikuler">
                  </div>
                  
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="{{ url('admin/extracurricular')}}" button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="submit" onclick="return confirm('Apakah data sudah benar?');" >Submit</a>
                </div>
              </form>

@endsection              

