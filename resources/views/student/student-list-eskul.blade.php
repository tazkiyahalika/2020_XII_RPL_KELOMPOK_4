@extends('layouts.student-master')
@section('content')
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Ekstrakulikuler Mahaputra</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <tr>
              <td> <a href="{{ url('student/extracurricular_obligate')}}" class="btn btn-primary btn-sm">Ekstrakulikuler Wajib</a></td>
              </tr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead class="table-primary">
                  <tr>
                    <th>No</th>
                    <th>Ekstrakulikuler</th>
                  </tr>
                  </thead>
                  <?php $no=1; ?>
                  @foreach($eskul as $key => $data)
                  <tbody>
                  <tr>
                    <th scope="row">{{ $key+1 }}</th>
                   
                    <td>{{$data->esc_name}}</td>
                    
                  </tr>
                  <?php $no++ ;?>
                  @include('sweetalert::alert')
                 
                  </tbody>
                  @endforeach
                </table>
              </div>
             



         
  @endsection