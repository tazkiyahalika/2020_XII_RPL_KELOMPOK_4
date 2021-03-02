@extends('layouts.admin-master')
@section('content')

       
                <form enctype="multipart/form-data" action="/admin/extracurricular" method="POST">

                <div class="card-body">

                 
                    <div class="card-header"><h2>Tambah Ekstrakulikuler</h2></div>
                  
                    
                    {{ csrf_field() }} 
                   
                 <!--  -->
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
                     <div class="form-group">
                    <label>Nama</label>
                    <input name="usr_name" type="text" class="form-control" placeholder="nama pembina">
                  </div>
                  <div class="form-group">
                    <label>email</label>
                    <input name="usr_email" type="text" class="form-control" placeholder="email">
                  </div>
                  <div class="form-group">
                    <label>Telepon</label>
                    <input name="usr_phone" type="text" class="form-control" placeholder="Telepon">
                  </div>
                  <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" name="coc_place" class="form-control" placeholder="tempat lahir">
                  </div>
                  <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="coc_birth" class="form-control" placeholder="tanggal lahir">
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="coc_gender" class="form-control" placeholder="jenis kelamin">
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                       </select>
                  </div>
                  <div class="form-group">
                    <label>Pendidikan</label>
                    <input type="text" name="coc_study" class="form-control" placeholder="pendidikan">
                  </div>
                  <div class="form-group">
                    <label>Pekerjaan</label>
                    <input type="text" name="coc_job" class="form-control" placeholder="pekerjaan">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="coc_address" class="form-control" placeholder="alamat">
                  </div>
                     <button type="submit" class="btn btn-primary">Submit</button> 

                     <div class="card-footer">
                  </div>
                  </form>

@endsection              

