@extends('layouts.admin-master')
@section('content')
<div class="card">
  <div class="card-header">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Extracurricular</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="../../dist/img/Voli/Logo Voli.jpg" alt="pramuka">
                </div>
               
                <h3 class="profile-username text-center">{{$extracurricular->esc_name}}</h3><br>

                <p class="text-muted text-center">SMKS Mahaputra Cerdas Utama</p>
                 <p class="text-muted text-center">{{$extracurricular->esc_description}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                 
                </ul>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
           
            <!-- /.card -->
          </div>
          <!-- /.col -->



            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  </div>  <!-- /.card-body -->
  </div>
  </div>

  @endsection