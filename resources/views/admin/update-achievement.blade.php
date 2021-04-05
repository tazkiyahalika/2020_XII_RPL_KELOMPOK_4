  @extends('layouts.admin-master')
@section('content')

   
            @foreach($data as $achievement)
             <div class="card-body">
             <div class="card-header"><h2>Edit Prestasi</h2></div>
                <form enctype="multipart/form-data" action="{{ url('/admin/achievement/update/'.$achievement->ach_id) }}" method="POST">
                
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label>Nama EKstrakulikuler</label>
                  <!-- <input name="esc_id" type="text" class="form-control" placeholder="name"> -->
                  <select class="form-control" name="ach_esc_id" required="required" placeholder="Extrakulikuler">
                   <option value="{{$achievement->ach_esc_id}}">{{$achievement->esc_name}}</option>
                   @foreach($extracurricular as $extracurricular)
                      <option value='{{ $extracurricular->esc_id }}'>{{ $extracurricular->esc_name }}</option>
                    @endforeach
                    </select>
                  </div>
                   <div class="form-group">
                    <label>Kegiatan</label>
                    <input name="ach_event" type="text" required="required" value="{{$achievement->ach_event}}" class="form-control" placeholder="Kegiatan">
                  </div>
                  <div class="form-group">
                    <label>Waktu Pelaksanaan</label>
                    <input name="ach_date_event" type="date" required="required" value="{{$achievement->ach_date_event}}" class="form-control" placeholder="Waktu">
                  </div>
                  <div class="form-group">
                    <label>Prestasi</label>
                    <input name="ach_champion" type="text" required="required" value="{{$achievement->ach_champion}}" class="form-control" placeholder="Prestasi">
      
                <!-- /.card-body -->
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edit" onclick="return confirm('Edit Prestasi?'); ">Submit</button>
                </div>
              </form>

@endforeach
@endsection              