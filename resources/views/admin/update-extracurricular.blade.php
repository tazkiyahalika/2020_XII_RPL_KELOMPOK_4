@extends('layouts.admin-master')
@section('content')



                @foreach($extracurriculars as $esc)
                  <div class="card-body">
                    <div class="card-header"><h2>Edit Ekstrakulikuler</h2></div>
                    <form enctype="multipart/form-data" action="{{ url('admin/extracurricular/update/'.$esc->esc_id) }}" method="post">
                    
                  @csrf 
                   <div class="mb-3">
                   <div class="mb-3">
                        <label for="formFileDisabled" class="form-label">Logo Ekstrakulikuler</label>
                        <input name="logo_ekstrakulikuler" value="{{$esc->esc_logo}}" class="form-control" type="file" id="formFileDisabled">
                    </div>
                        <label for="exampleFormControlInput1" class="form-label">Nama Ekstrakulikuler</label>
                        <input name="esc_name" required="required"  value="{{$esc->esc_name}}" type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                        <textarea name="esc_description" required="required"  class="form-control" id="exampleFormControlTextarea1" rows="3">{{$esc->esc_description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Visi Misi</label>
                        <textarea name="esc_vision_mission" required="required"  class="form-control" id="exampleFormControlTextarea1" rows="3">{{$esc->esc_vision_mission}}</textarea>
                    </div>


                    <div class="form-group">
                    <label>Nama</label>
                    <input name="usr_name" value="{{$esc->usr_name}}" type="text" required="required" class="form-control" placeholder="nama pembina">
                  </div>
                  <div class="form-group">
                    <label>email</label>
                    <input name="usr_email" value="{{$esc->usr_email}}" type="text" required="required" class="form-control" placeholder="email">
                  </div>
                  <div class="form-group">
                    <label>Telepon</label>
                    <input name="usr_phone" value="{{$esc->usr_phone}}" type="text" required="required" class="form-control" placeholder="Telepon">
                  </div>
                  <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input name="coc_place" value="{{$esc->coc_place}}" type="text" required="required"  class="form-control" placeholder="tempat lahir">
                  </div>
                  <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input name="coc_birth" value="{{$esc->coc_birth}}" type="date" required="required"  class="form-control" placeholder="tempat tanggal lahir">
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="coc_gender" value="{{$esc->coc_gender}}" required="required" class="form-control" placeholder="jenis kelamin">
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                       </select>
                  </div>
                  <div class="form-group">
                    <label>Pendidikan</label>
                    <input type="text" name="coc_study" value="{{$esc->coc_study}}" required="required" class="form-control" placeholder="pendidikan">
                  </div>
                  <div class="form-group">
                    <label>Pekerjaan</label>
                    <input type="text" name="coc_job" value="{{$esc->coc_job}}" required="required" class="form-control" placeholder="pekerjaan">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="coc_address" value="{{$esc->coc_address}}" required="required" class="form-control" placeholder="alamat">
                  </div>
                     <button type="submit" class="btn btn-primary">Submit</button> 

                     <div class="card-footer">
                  </div>
                  </form>

                  </div>
                  </form>
@endforeach

@endsection              

