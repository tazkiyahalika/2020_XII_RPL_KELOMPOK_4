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
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  @foreach($list_eskul as $extracurricular)
                  <tbody>
                  <tr>
                    <td>{{$extracurricular ->esc_id}}</td>
                    <td>{{$extracurricular ->esc_name}}</td>
                    <td><a href="{{ url('admin/extracurricular/detail-extracurricular-pramuka')}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                        <a href="{{ url('admin/coach/update')}}" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-edit"></i></a>
                        <a href="" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau hapus gussss?');"> <i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  </tbody>
                  @endforeach
                </table>
              </div>

             
            </div>
  @endsection