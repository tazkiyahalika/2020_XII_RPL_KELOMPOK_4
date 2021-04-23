@extends('layouts.admin-master')
@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Prestasi</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
     <tr>
      <td> <a href="{{ url('admin/achievement/create')}}" class="btn btn-primary btn-sm">Tambah Prestasi</a></td>
    </tr>
    <br>
    <table id="example1" class="table table-bordered table-striped">
      <thead class="table-success">
        <tr>
          <th>No</th>
          <th>Nama Ekstrakulikuler</th>
          <th>Kegiatan</th>
          <th>Waktu Pelaksanaan</th>
          <th>Prestasi</th>
          <th>Action</th>
        </tr>
      </thead>
       <?php $no=1; ?>
       @foreach($achievement as $extracurricular)
      <tbody>
      <tr>
        <th scope="row">{{ $no }}</th>
        <td>{{$extracurricular->esc_name}}</td>
        <td>{{$extracurricular->ach_event}}</td>
        <td>{{$extracurricular->ach_date_event}}</td>
        <td>{{$extracurricular->ach_champion}}</td>
        <td>
            <a href="{{ url('admin/achievement/edit/'.$extracurricular->ach_id) }}" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-edit"></i></a>
            <a href="{{ url('admin/achievement/'.$extracurricular->ach_id.'/delete' ) }}" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau Hapus ?');"> <i class="fa fa-trash"></i></a>
        </td>

      </tr>

      <?php $no++ ;?>

      @include('sweetalert::alert')
    
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