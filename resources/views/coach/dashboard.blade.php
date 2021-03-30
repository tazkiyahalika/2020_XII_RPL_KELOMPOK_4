@extends('layouts.coach-master')
@section('content')

                <div class="text-center">
                  <img class="" src="../../dist/img/logo4.jpg" alt="Mahaputra">
                </div>






                <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
		     <tr>
		      <td> <a href="{{ url('coach/info/create')}}" class="btn btn-primary btn-sm">Tambah Informasi</a></td>
		    </tr>

                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                  
                    <!-- Post -->
                    @foreach($info as $information)
                    <div class="post">
                        <span class="username">
                          <a href="#">{{$information->usr_name}}</a>
                        </span>
                        <span class="description">{{$information->info-date}}</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        {{$information->information}}
                      </p>


                      <div class="row mb-3">
                        <div class="col-sm-6">
                          <img class="img-fluid" src="{{$information->info_img}}" alt="Photo">
                        </div>
                        <!-- /.col -->
                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

     
                    </div>
                    <!-- /.post -->

                    @endforeach
                  </div>
                  <!-- /.tab-pane -->
                 
                  <!-- /.tab-pane -->

                  

@endsection