@extends('layouts.admin-master')
@section('content')



<form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Ekstrakulikuler</label>
                    <input type="name" class="form-control" placeholder="name extracurricular">
                  </div>
                  <div class="form-group">
                    <label>Nama Pembina</label>
                    <input type="name" class="form-control" placeholder="name coach">
                  </div>
                  <div class="form-group">
                    <label>Jumlah Anggota </label>
                    <input type="name" class="form-control" placeholder="name coach">
                  </div>
                  
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="{{ url('admin/extracurricular')}}" button type="submit" class="btn btn-primary" >Submit</a>
                </div>
              </form>

@endsection              

