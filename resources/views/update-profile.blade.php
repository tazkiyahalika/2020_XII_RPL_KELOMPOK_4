@extends('layouts.coach-master')
@section('content')



                
                  <div class="card-body">
                    <div class="card-header"><h2>Edit Profile</h2></div>
                    <form enctype="multipart/form-data" action="" method="post">
                    
                  @csrf 
                   @if(Auth()->user()->hasRole('coach'))

                    <div class="form-group">
                    <label>Nama</label>
                    <input name="usr_name" value="{{$profile->usr_name}}" type="text" required="required" class="form-control" placeholder="nama pembina">
                  </div>
                  <div class="form-group">
                    <label>email</label>
                    <input name="usr_email" disabled="" value="{{$profile->usr_email}}" type="text" required="required" class="form-control" placeholder="email">
                  </div>
                  <div class="form-group">
                    <label>Tempat lahir</label>
                    <input name="coc_place" value="{{$profile->coc_place}}" type="text" required="required" class="form-control" placeholder="Telepon">
                  </div>
                  <div class="form-group">
                    <label>No Telepon</label>
                    <input name="usr_phone" value="{{$profile->usr_phone}}" type="text" required="required"  class="form-control" placeholder="tempat lahir">
                  </div>
                  <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input name="coc_birth" value="{{$profile->coc_birth}}" type="date" required="required"  class="form-control" placeholder="tempat tanggal lahir">
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="coc_gender" value="{{$profile->coc_gender}}" required="required" class="form-control" placeholder="jenis kelamin">
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                       </select>
                  </div>
                  <div class="form-group">
                    <label>Pendidikan</label>
                    <input name="coc_study" value="{{$profile->coc_study}}" type="text" required="required"  class="form-control" placeholder="tempat tanggal lahir">
                  </div>
                  <div class="form-group">
                    <label>Pekerjaan</label>
                    <input name="coc_job" value="{{$profile->coc_job}}" type="text" required="required"  class="form-control" placeholder="tempat tanggal lahir">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input name="coc_address" value="{{$profile->coc_address}}" type="text" required="required"  class="form-control" placeholder="tempat tanggal lahir">
                  </div>

@extends('layouts.student-master')
@section('content')
                  @elseif(Auth()->user()->hasRole('student'))

                    <div class="form-group">
                    <label>Nama</label>
                    <input name="usr_name" value="{{$profile->usr_name}}" type="text" required="required" class="form-control" placeholder="nama pembina">
                  </div>
                  <div class="form-group">
                    <label>email</label>
                    <input name="usr_email" disabled="" value="{{$profile->usr_email}}" type="text" required="required" class="form-control" placeholder="email">
                  </div>
                  <div class="form-group">
                    <label>Kelas</label>
                    <input name="std_class" value="{{$profile->std_class}}" type="text" required="required" class="form-control" placeholder="nama pembina">
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="std_gender" value="{{$profile->std_gender}}" required="required" class="form-control" placeholder="jenis kelamin">
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                       </select>
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input name="std_address" value="{{$profile->std_address}}" type="text" required="required"  class="form-control" placeholder="tempat lahir">
                  </div>
                  <div class="form-group">
                    <label>No Telepon</label>
                    <input name="usr_phone" value="{{$profile->usr_phone}}" type="text" required="required"  class="form-control" placeholder="tempat tanggal lahir">
                  </div>
                  
              
                  @endif
                     <button type="submit" class="btn btn-primary">Submit</button> 

                     <div class="card-footer">
                  </div>
                  </form>

                  </div>
                  </form>


@endsection              

