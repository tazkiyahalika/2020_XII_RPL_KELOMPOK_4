@extends('layouts.student-master')
@section('content')
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Ekstrakulikuler Mahaputra</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
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
                 
                  </tbody>
                  @endforeach
                </table>
              </div>

             
            </div>
             <div class="card">
              <div class="card-header">
                <h3 class="card-title">Ekstrakulikuler Wajib</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Ekstrakulikuler</th>
                  </tr>
                  </thead>
                  <?php $no=1; ?>
                 
                  <tbody>
                  <tr>
                    <th>1</th>
                    <td>Pramuka</td>
                  </tr>
                  
                  <tr>
                    <th>2</th>
                    <td>Nampon</td>
                   
                    
                  </tr>
                  <?php $no++ ;?>
                 
                  </tbody>
                 
                </table>
              </div>

             
            </div>
  @endsection