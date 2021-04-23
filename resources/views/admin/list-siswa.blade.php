@extends('layouts.admin-master')
@section('content')
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Siswa Mahaputra</h3>
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
                  @foreach($list_student as $std)
                  <tbody>
                  <tr>
                    <th scope="row">{{ $no }}</th>
                    <td>{{$std->std_name}}</td>
                    <td>{{$std->std_gender}}</td>
                    <td>{{$std->std_class}}</td>
                    <td>{{$std->std_address}}</td>
                 </tr>

                   <?php $no++ ;?>
                   @include('sweetalert::alert')
                  </tbody>
                  @endforeach
                </table>
              </div>

             
            </div>
  @endsection