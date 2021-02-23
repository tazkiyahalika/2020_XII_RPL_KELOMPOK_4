@extends('layouts.admin-master')
@section('content')
<div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="../../dist/img/pramuka/Kak Eman.jpg" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$coach->coc_usr_id}}</h3>

                <p class="text-muted text-center">{{$coach->coc_esc_id}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Tempat Tanggal Lahir</b> <a class="float-right">{{$coach->coc_birth}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Jenis Kelamin</b> <a class="float-right">{{$coach->coc_gender}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Pendidikan</b> <a class="float-right">{{$coach->coc_study}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Pekerjaan</b> <a class="float-right">{{$coach->coc_job}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Alamat</b> <a class="float-right">{{$coach->coc_address}}</a>
                  </li>
                </ul>

              
              </div>
              <!-- /.card-body -->
            </div>
 @endsection