@extends('layouts.coach-master')
@section('content')
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Siswa Mahaputra</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <tr>
     			<td> <a href="{{ url('/account/profile/edit')}}" class="btn btn-primary btn-sm">Edit Profil</a></td>
               </tr>
                <table  class="table table-bordered table-striped">
                @if(Auth()->user()->hasRole('coach'))
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <td>:</td>
                    <td>{{$profile->usr_name}}</td>

                    <th>Email</th>
                    <td>:</td>
                    <td>{{$profile->usr_email}}</td>
                  </tr>
                  <tr>
                    <th>Tempat Lahir</th>
                    <td>:</td>
                    <td>{{$profile->coc_place}}</td>

                    <th>No Telepon</th>
                    <td>:</td>
                    <td>{{$profile->usr_phone}}</td>
                  </tr>
                  <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td>{{$profile->coc_birth}}</td>

                    <th>Jenis Kelamin</th>
                    <td>:</td>
                    <td>{{$profile->coc_gender}}</td>
                  </tr>
                  <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>{{$profile->coc_address}}</td>

                    <th></th>
                    <td></td>
                    <td></td>
                   </tr>

@extends('layouts.student-master')
@section('content')                   
                  @elseif(Auth()->user()->hasRole('student'))
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <td>:</td>
                    <td>{{$profile->usr_name}}</td>

                    <th>Email</th>
                    <td>:</td>
                    <td>{{$profile->usr_email}}</td>
                  </tr>
                  <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <td>{{$profile->std_class}}</td>

                    <th>Jenis Kelamin</th>
                    <td>:</td>
                    <td>{{$profile->std_gender}}</td>
                  </tr>
                  <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>{{$profile->std_address}}</td>

                    <th>No Telepon</th>
                    <td>:</td>
                    <td>{{$profile->usr_phone}}</td>
                  </tr>
         		@endif


                  </tbody>
                 
                </table>
              </div>

             
            </div>
  @endsection