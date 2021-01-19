@extends('layouts.admin-master')
@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">List Pembina</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <tr>
      <td> <a href="{{ url('admin/extracurricular/add-coach')}}" class="btn btn-primary btn-sm">Tambah Pembina</a></td>
    </tr>
    <br>
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Ekstrakulikuler</th>
          <th>Jenis Kelamin</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Eman Sulaeman</td>
          <td>Pramuka</td>
          <td>Laki-laki</td>
          <td>eman@gmail.com</td>
          <td class="text-center">
                <a href="{{ url('admin/coach/detail-pembina-pramuka')}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                <a href="{{ url('admin/coach/update')}}" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-edit"></i></a>
                <a href="" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau hapus gussss?');"> <i class="fa fa-trash"></i></a>
            </td>


          </tr>
          <tr>
            <td>Annisa Komalasari</td>
            <td>Voli</td>
            <td>Perempuan</td>
            <td>annisakomalasari@gmail.com</td>
            <td class="text-center">
                <a href="{{ url('admin/coach/detail-pembina-voli')}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                <a href="{{ url('admin/coach/update')}}" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-edit"></i></a>
                <a href="" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau hapus gussss?');"> <i class="fa fa-trash"></i></a>
            </td>
          </tr>
          <tr>
            <td>Dede Suryana</td>
            <td>Rekayasa perangkat Lunak</td>
            <td>Laki-Laki</td>
            <td>dedesuryana@gmail.com</td>
            <td class="text-center">
                <a href="{{ url('admin/coach/detail-pembina-voli')}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                <a href="{{ url('admin/coach/update')}}" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-edit"></i></a>
                <a href="" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau hapus gussss?');"> <i class="fa fa-trash"></i></a>
            </td>
          </tr>
          <tr>
            <td>Yusuf Maulana</td>
            <td>Multimedia</td>
            <td>Laki-laki</td>
            <td>yusfmaulanai@gmail.com</td>
            <td class="text-center">
                <a href="{{ url('admin/coach/detail-pembina-voli')}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                <a href="{{ url('admin/coach/update')}}" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-edit"></i></a>
                <a href="" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau hapus gussss?');"> <i class="fa fa-trash"></i></a>
            </td>
          </tr>
          <tr>
            <td>cucun</td>
            <td>Paduan Suara</td>
            <td>Laki-laki</td>
            <td>cucun@gmail.com</td>
            <td class="text-center">
                <a href="{{ url('admin/coach/detail-pembina-voli')}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                <a href="{{ url('admin/coach/update')}}" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-edit"></i></a>
                <a href="" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau hapus gussss?');"> <i class="fa fa-trash"></i></a>
            </td>
          </tr>
          <tr>
            <td>Yadi Hambali</td>
            <td>Nampon Kiwari</td>
            <td>Laki-laki</td>
            <td>yadihmbli@gmail.com</td>
            <td class="text-center">
                <a href="{{ url('admin/coach/detail-pembina-voli')}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                <a href="{{ url('admin/coach/update')}}" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-edit"></i></a>
                <a href="" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau hapus gussss?');"> <i class="fa fa-trash"></i></a>
            </td>
          </tr>
          <tr>
            <td>Hasmi</td>
            <td>Basket</td>
            <td>Laki-laki</td>
            <td>hasmi@gmail.com</td>
            <td class="text-center">
                <a href="{{ url('admin/coach/detail-pembina-voli')}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                <a href="{{ url('admin/coach/update')}}" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-edit"></i></a>
                <a href="" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau hapus gussss?');"> <i class="fa fa-trash"></i></a>
            </td>
          </tr>
          <tr>
            <td>Hilman</td>
            <td>Panahan</td>
            <td>Laki-laki</td>
            <td>hilman@gmail.com</td>
            <td class="text-center">
                <a href="{{ url('admin/coach/detail-pembina-voli')}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                <a href="{{ url('admin/coach/update')}}" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-edit"></i></a>
                <a href="" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau hapus gussss?');"> <i class="fa fa-trash"></i></a>
            </td>
          </tr>
          <tr>
            <td>Aang</td>
            <td>Rohis</td>
            <td>Laki-laki</td>
            <td>aang@gmail.com</td>
            <td class="text-center">
                <a href="{{ url('admin/coach/detail-pembina-voli')}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                <a href="{{ url('admin/coach/update')}}" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-edit"></i></a>
                <a href="" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau hapus gussss?');"> <i class="fa fa-trash"></i></a>
            </td>
          </tr>

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  @endsection