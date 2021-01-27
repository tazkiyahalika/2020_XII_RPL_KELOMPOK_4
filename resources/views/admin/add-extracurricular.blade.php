@extends('layouts.admin-master')
@section('content')

       
                <form role="form">
                <div class="card-body">
                 
                    <div class="card-header"><h2>Tambah Ekstrakulikuler</h2></div>
                  
                    
                     @csrf
                     <label>Nama Eskul</label>
                        <input type="text" name="esc_name" placeholder="nama ektrakulikuler"><br><br>
                        <label>Nama Pembina</label><br>
                        <input type="text" name="coc_name" placeholder="Nama Pembina"><br><br>
                        <label>Deskripsi</label><br>
                       <textarea></textarea><br><br>
                        <input type="submit" value="save">


                     <div class="card-footer">
                  </div>
                  </form>

@endsection              

