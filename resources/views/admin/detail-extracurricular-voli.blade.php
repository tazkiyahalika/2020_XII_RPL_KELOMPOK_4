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

                <h3 class="profile-username text-center">Voli</h3><br>

                <p class="text-muted text-center">SMKS Mahaputra Cerdas Utama</p>
                 <p class="text-muted text-center">Voli adalah salah satu ekstrakulikuler yang wajib di SMKS Mahaputra Cerdas Utama dan juga merupakan 
                        ekskul olahraga yang sangat diminati
                      </p>

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


          <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="../../dist/img/Voli/Bu annisa.jpg" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Annisa Komalasari, S.Pd</h3>

                <p class="text-muted text-center">Pembina Volyball</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Tempat Tanggal Lahir</b> <a class="float-right">1996</a>
                  </li>
                  <li class="list-group-item">
                    <b>Jenis Kelamin</b> <a class="float-right">Perempuan</a>
                  </li>
                  <li class="list-group-item">
                    <b>Pendidikan</b> <a class="float-right">Universitas Pendidikan Indonesia(UPI)</a>
                  </li>
                  <li class="list-group-item">
                    <b>Pekerjaan</b> <a class="float-right">Guru Honorer</a>
                  </li>
                  <li class="list-group-item">
                    <b>Alamat</b> <a class="float-right">Kampung Ciborerang No. 155 Rt 03/ Rw 20 Desa.Sangkanhurip Kec.Katapang Kab.Bandung</a>
                  </li>
                </ul>

              </div>
              </div>
              <!-- /.card-body -->
            </div>



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




                  
                      <!-- /.user-block -->
                      <div class="row mb-2">
                        <div class="col-sm-4">
                          <img class="img-fluid" src="../../dist/img/Voli/Kegiatan2.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <div class="row">
                            <div class="col-sm-8">
                              <img class="img-fluid" src="../../dist/img/Voli/Kegiatan3.jpg" alt="Photo">
                            </div>
                            <!-- /.col -->
                           
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                 
                  <!-- /.tab-pane -->

                 
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
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