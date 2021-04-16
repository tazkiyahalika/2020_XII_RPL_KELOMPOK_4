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
                        <input name="esc_name" type="text" class="form-control" required="required" placeholder="nama Ekstrakulikuler" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                        <textarea name="esc_description" class="form-control" required="required" placeholder="deskripsi atau keterangan ekskul" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Visi Misi</label>
                        <textarea name="esc_vision_mission" class="form-control" required="required" placeholder="visi dan misi" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                     <div class="form-group">
                    <label>Nama</label>
                    <input name="usr_name" type="text" class="form-control" required="required" placeholder="nama pembina">
                  </div>
                  <div class="form-group">
                    <label>email</label>
                    <input name="usr_email" type="text" class="form-control" required="required" placeholder="email">
                  </div>
                  <div class="form-group">
                    <label>Telepon</label>
                    <input name="usr_phone" type="text" class="form-control" required="required" placeholder="Telepon">
                  </div>
                  <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" name="coc_place" class="form-control" required="required" placeholder="tempat lahir">
                  </div>
                  <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="coc_birth" class="form-control" required="required" placeholder="tanggal lahir">
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="coc_gender" class="form-control" required="required" placeholder="jenis kelamin">
                      <option value="">---pilihlah---</option>
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                       </select>
                  </div>
                  <div class="form-group">
                    <label>Pendidikan</label>
                    <select name="coc_study" class="form-control" required="required" placeholder="Pendidikan">
                      <option value="">---pilihlah---</option>
                      <option value="sd">SD</option>
                      <option value="smp">SMP</option>
                      <option value="sma/smk">SMA/SMK</option>
                      <option value="d1">D1</option>
                      <option value="d2">D2</option>
                      <option value="d3">D3</option>
                      <option value="s1">S1</option>
                      <option value="s2">S2</option>
                      <option value="s3">S3</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label>Pekerjaan</label>
                    <input type="text" name="coc_job" class="form-control" required="required" placeholder="pekerjaan">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="coc_address" class="form-control" required="required" placeholder="alamat">
                  </div>
                     <button type="submit" class="btn btn-primary">Submit</button> 

                     <div class="card-footer">
                  </div>
                  </form>

@endsection              

