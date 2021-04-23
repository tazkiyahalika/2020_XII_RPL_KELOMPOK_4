@extends('layouts.admin-master')
@section('content')

   

                <form enctype="multipart/form-data" action="/admin/extracurricular_obligate/add-obligate" method="POST">
                <div class="card-body">

                  <div class="card-header"><h2>Tambah Ekstrakulikuler Wajib</h2></div>
              
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label>Nama EKstrakulikuler</label>
                  <!-- <input name="esc_id" type="text" class="form-control" placeholder="name"> -->
                  <select class="form-control" name="obligate_esc_id" required placeholder="Extrakulikuler">
                   <option value="">---pilih nama ekstrakulikuler---</option>
                   @foreach($extracurricular as $extracurricular)
                      <option value='{{ $extracurricular->esc_id }}'>{{ $extracurricular->esc_name }}</option>
                    @endforeach
                    </select>
      
                <!-- /.card-body -->
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Tambah" onclick="return confirm('Tambah Ekstrakulikuler Wajib?'); ">Submit</button>
                </div>
              </form>

@endsection              

