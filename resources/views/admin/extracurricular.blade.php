@extends('layouts.admin-master')
@section('content')
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Ekstrakulikuler Mahaputra</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table">
                  <thead class="table-warning">
                  <tr>
                    <th>No</th>
                    <th>Ekstrakulikuler</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php $no=1; ?>
                  @foreach($list_eskul as $extracurricular)
                  <tbody>
                  <tr>
                    <th scope="row">{{ $no }}</th>
                    <!-- <td>{{$extracurricular ->esc_id}}</td> -->
                    <td>{{$extracurricular ->esc_name}}</td>
                    <td>

                        <a href="{{ url('admin/extracurricular/detail-extracurricular/'.$extracurricular->esc_id) }}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                        <a href='/admin/extracurricular/edit/{{$extracurricular->esc_id}}' class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-edit"></i></a>
                        <a href="{{ url('admin/extracurricular/'.$extracurricular->esc_id.'/delete' ) }}" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau Hapus ?');"> <i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php $no++ ;?>
                  @include('sweetalert::alert')
                  </tbody>
                  @endforeach
                </table>
              </div>

             
            </div>
  @endsection