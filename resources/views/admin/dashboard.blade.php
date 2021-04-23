@extends('layouts.admin-master')
@section('content')
                <!-- <div class="text-center" style="max-width:100%; overflow-x:hidden;">
                  <img class="" src="../../dist/img/logo4.jpg" alt="Mahaputra">
                </div>
 -->
    <section class="content"><br>
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $coach }}</h3>

                <p>Total Pembina</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $student }}</h3>

                <p>Total Siswa</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $eskul }}</h3>

                <p>Total Ekstrakulikuler</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>

            </div>
          </div>
          <!-- ./col -->
          
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->

    
    </section>

  
                  <!-- /.tab-pane -->
                 
                  <!-- /.tab-pane -->
@endsection