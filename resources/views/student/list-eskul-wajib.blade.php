@extends('layouts.student-master')
@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Ekstrakulikuler Wajib</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
  
    <br>
    <table id="example1" class="table table-bordered table-striped">
      <thead class="table-danger">
        <tr>
          <th>No</th>
          <th>Ekstrakulikuler</th>
      
        </tr>
      </thead>
       <?php $no=1; ?>
       @foreach($eskul_wajib as $extracurricular)
      <tbody>
      <tr>
        <th scope="row">{{ $no }}</th>
        <td>{{$extracurricular->esc_name}}</td>
        

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

