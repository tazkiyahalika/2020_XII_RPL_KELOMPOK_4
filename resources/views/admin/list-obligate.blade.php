@extends('layouts.admin-master')
@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Ekstrakulikuler Wajib</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <tr>
      <td> <a href="{{ url('admin/extracurricular_obligate/create')}}" class="btn btn-primary btn-sm">Tambah Ekstrakulikuler Wajib</a></td>
      <td> <a href="{{ url('admin/student/obligate')}}" class="btn btn-warning btn-sm">Data Anggota Ekstrakulikuler Wajib</a></td>
    </tr>
    <br>
    <table id="example1" class="table table-bordered table-striped">
      <thead class="table-primary">
        <tr>
          <th>No</th>
          <th>Ekstrakulikuler</th>
          <th>Action</th>
        </tr>
      </thead>
       <?php $no=1; ?>
       @foreach($eskul_wajib as $extracurricular)
      <tbody>
      <tr>
        <th scope="row">{{ $no }}</th>
        <td>{{$extracurricular->esc_name}}</td>
        <td>
            <a href="{{ url('admin/extracurricular_obligate/edit/'.$extracurricular->obligate_id) }}" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-edit"></i></a>
            <a href="{{ url('admin/extracurricular_obligate/'.$extracurricular->obligate_id.'/delete' )}}" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau Hapus ?');"> <i class="fa fa-trash"></i></a>
        </td>

      </tr>

      <?php $no++ ;?>
      @include('sweetalert::alert')
    
        </tbody>
          @endforeach
    
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  @endsection

