@extends('layouts.coach-master')
@section('content')
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
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Rismawati</td>
                    <td>Perempuan</td>
                    <td>XII RPL 2</td>
                    <td>Landean</td>
                    <td><a href="" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau hapus?');"> <i class="fa fa-trash"></i></a></td> 
                 <!--  </tr> -->

                   <tr>
                    <td>2</td>
                    <td>Elsa Lusiani</td>
                    <td>Perempuan</td>
                    <td>XII RPL 2</td>
                    <td>Bojong</td>
                    <td><a href="" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau hapus?');"> <i class="fa fa-trash"></i></a></td> 
                  <!-- </tr>
                   <tr>
                    <td>3</td>
                    <td>Alika Tazkiyah</td>
                    <td>Perempuan</td>
                    <td>XII RPL 2</td>
                    <td>Junti</td>
                    <td><a href="" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau hapus?');"> <i class="fa fa-trash"></i></a></td> 
                  </tr>
                   <tr>
                    <td>4</td>
                    <td>Rizki Muhammad N</td>
                    <td>Laki-laki</td>
                    <td>XII RPL 2</td>
                    <td>Bojong</td>
                    <td><a href="" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau hapus?');"> <i class="fa fa-trash"></i></a></td> 
                  </tr>
                   <tr>
                    <td>5</td>
                    <td>Asyiah Nurjanah</td>
                    <td>Perempuan</td>
                    <td>XII RPL 2</td>
                    <td>Cangkudu</td>
                    <td><a href="" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau hapus?');"> <i class="fa fa-trash"></i></a></td> 
                  </tr> -->
                  </tbody>
                </table>
              </div>

             
            </div>
  @endsection