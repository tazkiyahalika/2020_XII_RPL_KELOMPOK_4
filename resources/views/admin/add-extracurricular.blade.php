@extends('layouts.admin-master')
@section('content')

       
                <form enctype="multipart/form-data" action="/admin/extracurricular" method="POST">

                <div class="card-body">

                 
                    <div class="card-header"><h2>Tambah Ekstrakulikuler</h2></div>
                  
                    
                    {{ csrf_field() }} 
                   <div class="mb-3">
                    <div class="mb-3">
                        <label for="formFileDisabled" class="form-label">Logo Ekstrakulikuler</label>
                        <input name="logo_ekstrakulikuler" class="form-control" required="required" type="file" id="formFileDisabled">
                    </div>
                        <label for="exampleFormControlInput1" class="form-label">Nama Ekstrakulikuler</label>
                        <input name="esc_name" type="text" class="form-control" required="required"  id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                        <textarea name="esc_description" class="form-control" required="required"  id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                     <button type="submit" class="btn btn-primary">Submit</button> 

                     <div class="card-footer">
                  </div>
                  </form>

@endsection              

