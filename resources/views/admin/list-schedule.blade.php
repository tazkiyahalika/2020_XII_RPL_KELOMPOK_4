@extends('layouts.admin-master')
@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Jadwal Ekstrakulikuler</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <tr>
      <td> <a href="{{ url('admin/schedule/create')}}" class="btn btn-primary btn-sm">Tambah Jadwal Ekstrakulikuler</a></td>
    </tr>
    <br>
    <table id="example1" class="table table-bordered table-striped">
      <thead class="table-info">
        <tr>
          <th>No</th>
          <th>Ekstrakulikuler</th>
          <th>Hari</th>
          <th>Jam Mulai</th>
          <th>Jam Selesai</th>
          <th>Action</th>
        </tr>
      </thead>
       <?php $no=1; ?>
       @foreach($schedule as $extracurricular)
      <tbody>
      <tr>
        <th scope="row">{{ $no }}</th>
        <td>{{$extracurricular->esc_name}}</td>
        <td>{{$extracurricular->schedule_day}}</td>
        <td>{{$extracurricular->schedule_time_start}}</td>
        <td>{{$extracurricular->schedule_time_end}}</td>
        <td>
            <a href="{{ url('admin/schedule/update/'.$extracurricular->schedule_id) }}" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-edit"></i></a>
            <a href="{{ url('admin/schedule/'.$extracurricular->schedule_id.'/delete' ) }}" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau Hapus ?');"> <i class="fa fa-trash"></i></a>
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