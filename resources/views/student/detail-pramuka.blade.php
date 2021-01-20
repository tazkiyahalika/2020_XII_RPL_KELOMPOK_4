@extends('layouts.student-master')
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
                  <img class="profile-user-img img-fluid img-circle" src="../../dist/img/pramuka/logo.jpeg" alt="pramuka">
                </div>

                    <h3 class="profile-username text-center">Pramuka</h3>

                    <p class="text-muted text-center">SMKS Mahaputra Cerdas Utama</p>

                    <p class="text-muted text-center">Pramuka adalah salah satu ekstrakulikuler yang wajib di SMKS Mahaputra Cerdas Utama dan juga merupakan
                    salah satu ekskul pbb yang ada di mahaputra</p>

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
          <div class="col-md-9">
            <div class="card">
             
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../../dist/img/pramuka/Kak Eman.jpg" alt="user image">
                        <span class="username">
                          <a href="#">Eman Sulaeman</a>
                          
                       
                     <p class="text-muted text-center">Pembina Pramuka</p>
                        <ul class="list-group list-group-unbordered mb-3">
                          <li class="list-group-item">
                            <b>Tempat Tanggal Lahir</b> <a class="float-right">Lebak, 25 April 1970</a>
                          </li>
                          <li class="list-group-item">
                            <b>Jenis Kelamin</b> <a class="float-right">Laki-Laki</a>
                          </li>
                          <li class="list-group-item">
                            <b>Pendidikan</b> <a class="float-right">S1 Jurusan Olahraga(PJKR) STKIP Cimahi Pasundan Bandung</a>
                          </li>
                          <li class="list-group-item">
                            <b>Pekerjaan</b> <a class="float-right">TNI AU</a>
                          </li>
                          <li class="list-group-item">
                            <b>Alamat</b> <a class="float-right">Perumahan.Cincin permata indah Blok E Rt 05/Rw 11. Desa Cingcin Kec. Soreang Kab. Bandung No. 26</a>
                          </li>
                        </ul>

                        </div>
                        
                      </div>
                      
                    </div>
                  </div>
                 
                </div>
                
              </div>
             
            </div>
          </section>
          <!-- /.content -->


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
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Rismawati</td>
                    <td>Perempuan</td>
                    <td>XII RPL 2</td>
                    <td>Landean</td>
                  </tr>
                   <tr>
                    <td>2</td>
                    <td>Elsa Lusiani</td>
                    <td>Perempuan</td>
                    <td>XII RPL 2</td>
                    <td>Bojong</td>
                  </tr>
                   <tr>
                    <td>3</td>
                    <td>Alika Tazkiyah</td>
                    <td>Perempuan</td>
                    <td>XII RPL 2</td>
                    <td>Junti</td>
                  </tr>
                   <tr>
                    <td>4</td>
                    <td>Rizki Muhammad N</td>
                    <td>Laki-laki</td>
                    <td>XII RPL 2</td>
                    <td>Bojong</td>
                  </tr>
                   <tr>
                    <td>5</td>
                    <td>Asyiah Nurjanah</td>
                    <td>Perempuan</td>
                    <td>XII RPL 2</td>
                    <td>Cangkudu</td>
                  </tr>
                  </tbody>
                </table>
              </div>

             
            </div> <br>


                  <div class="row mb-3">
                    <div class="col-sm-6">
                      <img class="img-fluid" src="../../dist/img/pramuka/pramuka1.jpg" alt="Photo">
                    </div>
                    <div class="col-sm-6">
                       <div class="row">
                          <div class="col-sm-6">
                            <img class="img-fluid mb-3" src="../../dist/img/pramuka/pramuka2.jpg" alt="Photo">
 
                            </div>
                          </div>
                        </div>
                      </div>

 
 @endsection



