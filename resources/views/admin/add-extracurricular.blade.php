@extends('layouts.admin-master')
@section('content')



<form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Ekstrakulikuler<span style="color:red"> *</span></label>
                   <br> <input type="name" class="form-control" placeholder="name extracurricular" required> <br>
                  </div>
                  <div class="form-group">
                    <label>Nama Pembina<span style="color:red"> *</span></label>
                    <input type="name" class="form-control" placeholder="name coach">
                  </div>
                  <div class="form-group">
                    <label>Jumlah Anggota<span style="color:red"> *</span></label>
                    <input type="name" class="form-control" placeholder="name coach">
                  </div>
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="{{ url('admin/extracurricular')}}" button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Tambah" onclick="return confirm('Tambah Ekstrakulikuler?');">Submit</a>
                </div>
              </form>

@endsection              

