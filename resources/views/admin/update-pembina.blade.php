@extends('layouts.admin-master')
@section('content')



<form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama </label>
                    <input type="name" class="form-control" placeholder="name extracurricular">
                  </div>
                  <div class="form-group">
                    <label>Ekstrakulikuler</label>
                    <input type="name" class="form-control" placeholder="name coach">
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input type="name" class="form-control" placeholder="name coach">
                  </div>
                   <div class="form-group">
                    <label>Alamat</label>
                    <input type="name" class="form-control" placeholder="name coach">
                  </div>
                   <div class="form-group">
                    <label>Email</label>
                    <input type="name" class="form-control" placeholder="name coach">
                  </div>
                  
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="{{ url('admin/coach')}}" button type="submit" class="btn btn-primary" >Submit</a>
                </div>
              </form>

@endsection  