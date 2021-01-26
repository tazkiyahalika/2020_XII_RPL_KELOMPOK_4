@extends('layouts.admin-master')
@section('content')

       
                <form role="form">
                <div class="card-body">
                 
                    <div class="card-header"><h2>Tambah Ekstrakulikuler</h2></div>
                  
                    
                     @csrf

                     @include('admin.partials.form-control')

                     <div class="card-footer">
                     <a href="{{ url('admin/extracurricular')}}" button type="submit" class="btn btn-primary" data-toggle="tooltip" 
                     data-placement="top" title="Tambah" onclick="return confirm('Tambah Ekstrakulikuler?');">Submit</a>
                     </div>
                  </div>
                  </form>

@endsection              

