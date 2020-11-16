@extends('layouts.app')

@section('title')
    
    Manage Residence
    
@endsection

@section('content')
    
    <div class="row justify-content-between">
        <h3 class="h3 text-gray-800 ml-3">Create Room</h3>
    </div>
    <hr>

    <div class="container">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Room</h6>
      </div>
      <div class="card-body">
        <form action="{{url('residence')}}" method="post" class="needs-validation" novalidate>
          {{ csrf_field() }}

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="room_status_id">Room Status</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" required name="room_status_id">
                  <option value="RS001">Available</option>
                  <option value="RS002">Not Available</option>
                </select>
                <div class="invalid-feedback">
                  Please choose a Room Status.
                </div>
              </div>

              <div class="form-group col-md-6">
                <label for="room_id">Room ID</label>
                <input type="text" class="form-control" required name="room_id">
                <div class="invalid-feedback">
                  Please choose a Room ID.
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="room_floor">Room Floor</label>
                <input type="number" class="form-control" required name="room_floor">
                <div class="invalid-feedback">
                  Please choose a Room Floor.
                </div>
              </div>

              <div class="form-group col-md-6">
                <label for="room_build">Room Build</label>
                <input type="text" class="form-control" required name="room_build">
                <div class="invalid-feedback">
                  Please choose a Room Build.
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="user_id">User id</label>
              <input type="text" class="form-control" name="user_id">
            </div>

           <div class="form-row">
              <div class="form-group col-md-12">
                <label for="room_type_id">Room Type</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" required name="room_type_id">
                  <option value="RT001">Studio(25 sq.m) : Price 4750 Bath</option>
                </select>
                <div class="invalid-feedback">
                  Please choose a Room Type.
                </div>
              </div>
            </div>
              @if($errors->any())
                <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
                </div>
              @endif
            <hr>
            <a href="{{ URL::to('residence') }}" type="button" class="btn btn-secondary mr-2">Cancel</a>
            <button type="submit" onclick="confirm('Want to create a room?')" class="btn btn-success"><i class="fa-floppy-o"></i>  Save</button>
          </form>
      </div>
    </div>
</div>

</div>
<script src="{{ asset('js/required.js') }}"></script>
@endsection