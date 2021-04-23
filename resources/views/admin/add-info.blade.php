@extends('layouts.admin-master')
@section('content')

                
                <form enctype="multipart/form-data" action="/admin/info/add-info" method="POST">



                <div class="card-body">

                 
                    <div class="card-header"><h2>Tambah informasi</h2></div>
                  
                    
                    {{ csrf_field() }} 
                   
                 <!--  -->
                 
                      
                      <div class="mb-3">
                      <label>Nama Ekstrakulikuler</label>
                        <select name="info_esc_id" class="form-control" required="required" placeholder="Extrakulikuler">
                      <option value="---pilih nama ekstrakulikuler---">---pilih nama ekstrakulikuler---</option>
                      @foreach($extracurricular as $extracurricular)
                      <option value='{{ $extracurricular->esc_id }}'>{{ $extracurricular->esc_name }}</option>
                      @endforeach
                        </select>
                       <!--  <label for="exampleFormControlTextarea1" class="form-label">Nama Ekstrakulikuler</label>
                          <input class="form-control" name="esc_name" required="required" placeholder="Extrakulikuler"  >
                            -->
                    </div>
                    <div class="mb-3">
                     <label>Nama Pembina</label>
                        <select name="coc_usr_id" class="form-control" required="required" placeholder="Extrakulikuler">
                      <option value="---pilih nama pembina---">---pilih nama pembina---</option>
                      @foreach($extracurricular as $coaches)
                      <option value='{{ $coaches->usr_id }}'>{{ $coaches->usr_name }}</option>
                      @endforeach
                        </select>
                        <!-- <label for="exampleFormControlTextarea1" class="form-label">Nama Pembina</label>
                         <input class="form-control" name="coc_usr_id" required="required" placeholder="Extrakulikuler"  -->
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Information</label>
                        <textarea name="information" class="form-control" required="required" placeholder="Informasi" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Tanggal</label>
                        <input name="info_date" class="form-control" required="required" type="date" placeholder="Keterangan tanggal" id="exampleFormControlTextarea1" rows="3">
                    </div>
                      <div class="mb-3">
                        <label for="formFileDisabled" class="form-label">Tambah Gambar</label>
                        <input name="info_img" class="form-control" required="required" type="file" id="formFileDisabled">
                    </div>
                     
                  
                     <button type="submit" class="btn btn-primary">Upload</button> 

                     <div class="card-footer">
                  </div>
                  </form>

@endsection              

