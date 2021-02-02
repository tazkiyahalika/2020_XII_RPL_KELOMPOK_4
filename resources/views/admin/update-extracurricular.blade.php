@extends('layouts.admin-master')
@section('content')



                @foreach($extracurricular as $esc)
                  <div class="card-body">
                    <div class="card-header"><h2>Edit Ekstrakulikuler</h2></div>
                    <form action="admin/extracurricular/{esc_id}/update" method="POST">
                    
                   @csrf
                   <div class="mb-3">
                    <div class="mb-3">
                        <label for="formFileDisabled" class="form-label">Logo Ekstrakulikuler</label>
                        <input name="logo_ekstrakulikuler" value="{{$esc->logo_extrakulikuler}}" class="form-control" type="file" id="formFileDisabled">
                    </div>
                        <label for="exampleFormControlInput1" class="form-label">Nama Ekstrakulikuler</label>
                        <input name="esc_name" value="{{$esc->esc_name}}" type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                        <textarea name="esc_description" value="{{$esc->esc_description}}" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                     <button type="submit" class="btn btn-primary">Submit</button> 

                     <div class="card-footer">
                  </div>
                  </form>
@endforeach
@endsection              

