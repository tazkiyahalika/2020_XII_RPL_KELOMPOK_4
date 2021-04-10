@extends('layouts.coach-master')
@section('content')
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Siswa Ekstrakulikuler Wajib</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                   
                    
                  </tr>
                  </thead>
                  <?php $no=1; ?>
                  @foreach($std as $student)
                  <tbody>
                  <tr>
                    <th scope="row">{{ $no }}</th>
                    <td>{{$student->usr_name}}</td>
                    <td>{{$student->std_gender}}</td>
                    <td>{{$student->std_class}}</td>
                    <td>{{$student->std_address}}</td>
                    
                 </tr>

                   <?php $no++ ;?>
                  </tbody>
                  @endforeach
                </table>
              </div>

             
            </div>
  @endsection