@extends('layouts.admin-master')
@section('content')

 <!-- <div class="text-center">
                  <img class="" src="../../dist/img/logo4.jpg" alt="Mahaputra">
                </div> --><br>


                <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
       

                </ul>
              </div><!-- /.card-header -->
              
                    <!-- Post -->
                    @foreach($extracurricular as $information)
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                  
                    <div class="post">
                        <span class="username">
                          <a href="#">{{$information->usr_name}}</a><br>
                        </span>
                        <span class="username">
                          <a href="#">{{$information->esc_name}}</a><br>
                        </span>
                       

                      </div>

                      <!-- /.user-block -->
                      <p>
                        {{$information->information}}
                      </p>
                      <div class="description">Pada Tanggal:  {{$information->info_date}}</div><br>


                      <div class="row mb-3">
                        <div class="col-sm-6">
                        <center>
                          <img class="" align="middle" style="width="500px"; height="200px" src="{{ url('image_info/'.$information->info_img) }}" alt="Photo">
                          </center>
                        </div>

                        <!-- /.col -->
                       
                          </div>
                          <!-- /.row -->

                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- <div class="card-footer">
                            Di Posting Pada {{ $information->created_at }}
                        
                      </div> -->


                      <!-- /.row -->

                    </div><br><br>
                    <!-- /.post -->
    @include('sweetalert::alert')
                    @endforeach
                  </div>
                  <!-- /.tab-pane -->
                 
                  <!-- /.tab-pane -->




@endsection