@extends('layouts.admin-master')
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
                    <th>Pembina</th>
                    <th>Jumlah Anggota</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Pramuka</td>
                    <td>Eman Sulaeman</td>
                    <td>20 Orang</td>
                    <td class="text-center">
                    <a href="{{ url('admin/extracurricular/detail')}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                    <a href="{{ url('admin/extracurricular/update')}}" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-edit"></i></a>
                    <a href="" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau hapus gussss?');"> <i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Annisa Komalasari</td>
                    <td>Volley ball</td>
                    <td>20 Orang</td>
                    <td class="text-center">
                    <a href="{{ url('admin/extracurricular/detail-extracurricular-voli') }}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                    <a href="{{ url('admin/extracurricular/update')}}" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-edit"></i></a>
                    <a href="" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau hapus gussss?');"> <i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>

             
            </div>
  @endsection