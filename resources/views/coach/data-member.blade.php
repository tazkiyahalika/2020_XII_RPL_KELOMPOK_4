@extends('layouts.coach-master')
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
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Email</th>
                    <th>action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Rismawati</td>
                    <td>X RPL 1</td>
                    <td>Landean</td>
                    <td>Perempuan</td>
                    <td>ima@gmail.com</td>
                    <td><a href="" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau hapus?');"> <i class="fa fa-trash"></i></a></td> 
                  </tr>

                  <tr>
                    <td>2</td>
                    <td>Elsa</td>
                    <td>XI RPL 1</td>
                    <td>Cembul</td>
                    <td>Perempuan</td>
                    <td>elsalsn@gmail.com</td>
                    <td><a href="" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau hapus?');"> <i class="fa fa-trash"></i></a></td> 
                  </tr>
                  </tbody>
                </table>
              </div>

             
            </div>
  @endsection