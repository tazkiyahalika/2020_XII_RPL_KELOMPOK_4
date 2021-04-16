
  @extends('layouts.admin-master')
@section('content')

   
            @foreach($data as $obligate)
             <div class="card-body">
             <div class="card-header"><h2>Edit Ekstrakulikuler wajib</h2></div>
                <form enctype="multipart/form-data" action="{{ url('/admin/extracurricular_obligate/update/'.$obligate->obligate_id) }}" method="POST">
                
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label>Nama EKstrakulikuler</label>
                  <!-- <input name="esc_id" type="text" class="form-control" placeholder="name"> -->
                  <select class="form-control" name="obligate_esc_id" required="required" placeholder="Extrakulikuler">
                   <option value="{{$obligate->obligate_esc_id}}">{{$obligate->esc_name}}</option>
                   @foreach($extracurricular as $extracurricular)
                      <option value='{{ $extracurricular->esc_id }}'>{{ $extracurricular->esc_name }}</option>
                    @endforeach
                    </select>
                  </div>
                  
      
                <!-- /.card-body -->
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edit" onclick="return confirm('Edit Ekstrakulikuler wajib?'); ">Submit</button>
                </div>
              </form>

@endforeach
@endsection              