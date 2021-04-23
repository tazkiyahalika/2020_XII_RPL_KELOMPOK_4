@extends('layouts.student-master')
@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Prestasi Ekstrakulikuler Mahaputra</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <br>
    <table id="example1" class="table table-bordered table-striped">
      <thead class="table-primary">
        <tr>
          <th>No</th>
          <th>Ekstrakulikuler</th>
          <th>Event</th>
          <th>Waktu Event</th>
          <th>Juara</th>
         
        </tr>
      </thead>
       <?php $no=1; ?>
       @foreach($achievement as $ach)
      <tbody>
      <tr>
        <th scope="row">{{ $no }}</th>
        <td>{{$ach->esc_name}}</td>
        <td>{{$ach->ach_event}}</td>
        <td>{{$ach->ach_date_event}}</td>
        <td>{{$ach->ach_champion}}</td>
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