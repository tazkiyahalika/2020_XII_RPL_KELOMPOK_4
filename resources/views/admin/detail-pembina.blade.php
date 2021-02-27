@extends('layouts.admin-master')
@section('content')

 
            <div class="card card-primary card-outline">

             <div class="card-body box-profile">
                
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Nama </b> <a class="float-right">{{$data->usr_name}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Ekstrakulikuler</b> <a class="float-right">{{$data->esc_name}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Tempat Tanggal Lahir</b> <a class="float-right">{{$data->coc_birth}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Jenis Kelamin</b> <a class="float-right">{{$data->coc_gender}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Pendidikan</b> <a class="float-right">{{$data->coc_study}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Pekerjaan</b> <a class="float-right">{{$data->coc_job}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Alamat</b> <a class="float-right">{{$data->coc_address}}</a>
                  </li>
                </ul>
            
             </div>
            </div>

 @endsection