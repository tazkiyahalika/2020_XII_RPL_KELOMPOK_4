@extends('layouts.student-master')
@section('content')
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Ekstrakulikuler Mahaputra</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Ekstrakulikuler</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Pramuka</td>
                    <td><a href="{{ url('student/extracurricular/detail-pramuka')}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                        <button type="submit" class="btn btn-success">daftar</button>
                        <button type="submit" class="btn btn-primary">anggota</button></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Volley ball</td>
                    <td><a href="{{ url('student/extracurricular/detail-voli')}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                        <button type="submit" class="btn btn-success">daftar</button>
                        <button type="submit" class="btn btn-primary">anggota</button></td>
                  </tr>
                  
                  </tbody>
                </table>
              </div>

             
            </div>
  @endsection