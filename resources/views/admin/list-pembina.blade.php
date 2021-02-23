@extends('layouts.admin-master')
@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">List Pembina</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <tr>
      <!-- <td> <a href="{{ url('admin/extracurricular/add-coach')}}" class="btn btn-primary btn-sm">Tambah Pembina</a></td> --> </tr>
    <br>
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Ekstrakulikuler</th>
          <th>Action</th>
        </tr>
      </thead>
      <?php $no=1; ?>
      @foreach($list_coach as $key => $coach)
      <tbody>
        <tr>
          <td scope="row">{{ $key+1 }}</td>
          <td>{{$coach ->coc_usr_id}}</td>
          <td>{{$coach ->coc_esc_id}}</td>
          <td class="">
                <a href="{{ url('admin/coach/detail-pembina')}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                <a href="{{ url('admin/coach/update')}}" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-edit"></i></a>
                <a href="" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau hapus gussss?');"> <i class="fa fa-trash"></i></a>
            </td>

          <?php $no++ ;?>
        </tbody>
        @endforeach
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  @endsection




<!--  <th>Tempat Tanggal Lahir</th>
          <th>Pekerjaan</th>
          <th>Alamat Email</th> -->


  <!-- <td>Laki-laki</td>
          <td>eman@gmail.com</td>
          <td>eman@gmail.com</td> -->