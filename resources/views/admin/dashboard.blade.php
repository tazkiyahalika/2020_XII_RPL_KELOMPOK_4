@extends('layouts.admin-master')
@section('content')
                <!-- <div class="text-center" style="max-width:100%; overflow-x:hidden;">
                  <img class="" src="../../dist/img/logo4.jpg" alt="Mahaputra">
                </div>
 --> 

       <div class="row">
         <div class="col-md-3 col-sm-6 col-xs-12">
            <!-- small box -->
            <div class="info-box">
            <span class="info-box-icon bg-primary"><i class="fa fa-user"></i></span>
              <div class="inner">
                <div class="info-box-content
                ">
                <h3>11</h3>

                <p>Total pembina</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
          </div>
            </div>
        </div>
          <!-- ./col -->
          <div class="col-md-3 col-sm-6 col-xs-12">
            <!-- small box -->
            <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-user"></i></span>
              <div class="inner">
                <div class="info-box-content
                ">
                <h3>12</h3>

                <p>Total Siswa</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
          </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
           <!--  -->
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
           
          </div>
          <!-- ./col -->
        </div>


  <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
		     <tr>
		      <td> <a href="{{ url('admin/info/create')}}" class="btn btn-primary btn-sm">Tambah Informasi</a></td>
		    </tr>

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
                      <div class="card-footer">
                            Di Posting Pada {{ $information->created_at }}
                        
                      </div>


                      <!-- /.row -->
                      <div>
                        

                      </div>
                    </div>
                    <!-- /.post -->
    
                    @endforeach
                  </div>
                  <!-- /.tab-pane -->
                 
                  <!-- /.tab-pane -->
@endsection