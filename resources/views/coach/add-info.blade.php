@extends('layouts.coach-master')
@section('content')

                
                <form enctype="multipart/form-data" action="/coach/info/add-info" method="POST">



                <div class="card-body">

                 
                    <div class="card-header"><h2>Tambah informasi</h2></div>
                  
                    
                    {{ csrf_field() }} 
                   
                 <!--  -->
                 
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Nama Ekstrakulikuler</label>
                         <input class="form-control" name="coc_esc_id" required="required" placeholder="Extrakulikuler" readonly 
                            value='{{ $extracurricular->esc_id }}' hidden>
                          <input class="form-control" name="esc_name" required="required" placeholder="Extrakulikuler" readonly 
                            value='{{ $extracurricular->esc_name }}' >
                           
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Nama Pembina</label>
                         <input class="form-control" name="coc_usr_id" required="required" placeholder="Extrakulikuler" readonly 
                            value='{{ $extracurricular->usr_id }}' hidden >
                          <input class="form-control" name="usr_name" required="required" placeholder="Extrakulikuler" readonly 
                            value='{{ $extracurricular->usr_name }}' >
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Informasi</label>
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

