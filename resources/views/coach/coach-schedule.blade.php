@extends('layouts.coach-master')
@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Jadwal Ekstrakulikuler</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <br>
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Ekstrakulikuler</th>
          <th>Hari</th>
          <th>Jam Mulai</th>
          <th>Jam Selesai</th>
         
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
      </tr>

      <?php $no++ ;?>
    
        </tbody>
          @endforeach
    
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  @endsection