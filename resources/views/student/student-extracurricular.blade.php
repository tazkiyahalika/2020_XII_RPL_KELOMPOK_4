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
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php $no=1; ?>
                  @foreach($list_eskul as $extracurricular)
                  <tbody>
                  <tr>
                    <th scope="row">{{ $no }}</th>
                    <td>{{$extracurricular ->esc_name}}</td>
                    <td>
                  
                  <form action="{{ url('student/extracurricular/'.$extracurricular->esc_id)}} " method="post">
                  <a href="{{ url('student/extracurricular/detail-extracurricular/'.$extracurricular->esc_id) }}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                   @if ($extracurricular->regis_usr_id != Auth()->user()->usr_id)
                          @csrf
                          <input type="hidden" name="id_esc" value="{{$extracurricular->esc_id}}">
                          <button type="submit" class="btn btn-success">Daftar</button>    
                 @endif
                 
                 </form>
                    </td>
                  </tr>
                  <?php $no++ ;?>
                  @include('sweetalert::alert')

                  </tbody>
                  @endforeach
                </table>
              </div>

             
            </div>
  @endsection