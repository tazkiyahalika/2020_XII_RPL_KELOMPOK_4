@extends('layouts.coach-master')
@section('content')

       
                <form enctype="multipart/form-data" action="/coach/info/add-info" method="POST">

                <div class="card-body">

                 
                    <div class="card-header"><h2>Tambah informasi</h2></div>
                  
                    
                    {{ csrf_field() }} 
                   
                 <!--  -->
                   <div class="mb-3">
                  
                      <select class="form-control" name="info_esc_id" placeholder="Extrakulikuler">
                         <option value="---pilih nama ekstrakulikuler---">---pilih nama ekstrakulikuler---</option>
                         @foreach($extracurricular as $extracurricular)
                            <option value='{{ $extracurricular->esc_id }}'>{{ $extracurricular->esc_name }}</option>
                          @endforeach
                    </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Nama Pemibna</label>
                        <input name="info_usr_name" type="text" class="form-control" required="required" placeholder="nama pembina" id="exampleFormControlTextarea1" rows="3">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Information</label>
                        <textarea name="information" class="form-control" required="required" placeholder="Informasi" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Tanggal</label>
                        <input name="info_date" type="date" class="form-control" required="required" placeholder="Keterangan tanggal" id="exampleFormControlTextarea1" rows="3">
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
