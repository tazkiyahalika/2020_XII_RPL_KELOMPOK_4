    @extends('layouts.admin-master')
@section('content')

   
            @foreach($data as $schedule)
             <div class="card-body">
             <div class="card-header"><h2>Edit schedule</h2></div>
                <form enctype="multipart/form-data" action="{{ url('/admin/schedule/edit/'.$schedule->schedule_id) }}" method="POST">
                
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label>Nama EKstrakulikuler</label>
                  <!-- <input name="esc_id" type="text" class="form-control" placeholder="name"> -->
                  <select class="form-control" name="schedule_esc_id" placeholder="Extrakulikuler">
                   <option value="{{$schedule->schedule_esc_id}}">{{$schedule->esc_name}}</option>
                   @foreach($extracurricular as $extracurricular)
                      <option value='{{ $extracurricular->esc_id }}'>{{ $extracurricular->esc_name }}</option>
                    @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Hari</label>
                    <select name="schedule_day" class="form-control" placeholder="Hari">
                      <option value="{{$schedule->schedule_day}}">{{$schedule->schedule_day}}</option>
                      <option value="Senin">Senin</option>
                      <option value="Selasa">Selasa</option>
                      <option value="Rabu">Rabu</option>
                      <option value="Kamis">Kamis</option>
                      <option value="Jumat">Jum'at</option>
                      <option value="Sabtu">Sabtu</option>
                      <option value="Minggu">Minggu</option>
                    </select>
                    <!-- <input name="schedule_day" type="text" class="form-control" placeholder="Hari"> -->
                  </div>
                  <div class="form-group">
                    <label>Jam Mulai</label>
                    <input name="schedule_time_start"  value="{{$schedule->schedule_time_start}}" type="time" class="form-control" placeholder="Mulai">
                  </div>
                  <div class="form-group">
                    <label>Jam Selesai</label>
                    <input name="schedule_time_end"  value="{{$schedule->schedule_time_end}}" type="time" class="form-control" placeholder="Selesai">
      
                <!-- /.card-body -->
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edit" onclick="return confirm('Edit Jadwal?'); ">Submit</button>
                </div>
              </form>

@endforeach
@endsection              