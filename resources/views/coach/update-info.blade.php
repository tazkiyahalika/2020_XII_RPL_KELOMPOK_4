@extends('layouts.coach-master')
@section('content')


                @foreach($extracurricular as $extracurricular)                
                <form enctype="multipart/form-data" action="{{ url('/coach/info/update/'.$extracurricular->info_id) }}" method="POST">



                <div class="card-body">

                 
                    <div class="card-header"><h2>Edit informasi</h2></div>
                  
                    
                    {{ csrf_field() }} 
                   
                 <!--  -->
                 
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Nama Ekstrakulikuler</label>
                         <input class="form-control"  name="info_esc_id" required="required" placeholder="Extrakulikuler" readonly 
                            value='{{ $extracurricular->info_esc_id }}' hidden>
                          <input class="form-control" name="esc_name" required="required" placeholder="Extrakulikuler" readonly 
                            value='{{ $extracurricular->esc_name }}' >
                           
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Nama Pembina</label>
                         <input class="form-control" name="info_usr_id" required="required" placeholder="Extrakulikuler" readonly 
                            value='{{ $extracurricular->usr_id }}' hidden >
                          <input class="form-control" name="usr_name" required="required" placeholder="Extrakulikuler" readonly 
                            value='{{ $extracurricular->usr_name }}' >
                    </div>
                     <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Informasi</label>
                        <input name="information" type="text" class="form-control" value="{{$extracurricular->information}}" required="required" placeholder="informasi" id="exampleFormControlTextarea1" rows="3">
                    </div>
                   
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Tanggal</label>
                        <input name="info_date" type="date" class="form-control" value="{{$extracurricular->info_date}}" required="required" placeholder="Keterangan tanggal" id="exampleFormControlTextarea1" rows="3">
                    </div>
                    <div class="mb-3">
                        <label for="formFileDisabled" class="form-label">Edit Gambar</label>
                        <input name="info_img" value="{{$extracurricular->info_img}}" class="form-control" type="file" id="formFileDisabled">
                    </div>
                     
                     
                     
                  
                     <button type="submit" class="btn btn-primary">Upload</button> 

                     <div class="card-footer">
                  </div>
                  </form>

@endforeach
@endsection              

