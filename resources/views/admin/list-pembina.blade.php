@extends('layouts.admin-master')
@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">List Pembina</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <tr>
      <td> <a href="{{ url('admin/coach/add-coach')}}" class="btn btn-primary btn-sm">Tambah Pembina</a></td>
    </tr>
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
      @foreach($eskul as $data)
      <tbody>
        <tr>
          <th scope="row">{{ $no }}</th>
          <td>{{$data ->usr_name}}</td>
          <td>{{$data ->esc_name}}</td>
          <td class="">
                <a href="{{ url('admin/coach/detail-pembina/'.$data->coc_id)}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
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