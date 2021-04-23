@extends('layouts.coach-master')
@section('content')

               <!--  <div class="text-center">
                  <img class="" src="../../dist/img/logo4.jpg" alt="Mahaputra">
                </div>
 -->





                <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
		     <tr>
		      <td> <a href="{{ url('coach/info/create')}}" class="btn btn-primary btn-sm">Tambah Informasi</a></td>
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
                      @if($information->info_usr_id == Auth::user()->usr_id)
                      <div>
                        <a href='/coach/info/edit/{{$information->info_id}}' class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-edit"></i></a>
                        <a href="{{ url('coach/info/'.$information->info_id.'/delete' ) }}" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau Hapus ?');"> <i class="fa fa-trash"></i></a>
                    </div>
                    @endif
                    </div>
                    <!-- /.post -->
    
                    @endforeach
                  </div>
                  <!-- /.tab-pane -->
                 
                  <!-- /.tab-pane -->

                  

@endsection