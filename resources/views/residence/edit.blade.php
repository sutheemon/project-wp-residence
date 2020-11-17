@extends('layouts.app')

@section('title')
    
    Edit Residence
    
@endsection

@section('content')
    
    <div class="row justify-content-between">
        <h3 class="h3 text-gray-800 ml-3">Edit Room</h3>
    </div>
    <hr>
    <div class="container">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Residence</h6>
      </div>
      @php
          $select = $room[0]->room_status_id ;
          $roomType = $room[0]->room_type_id ;
      @endphp
      <div class="card-body">
        <form action="{{url('residence/'.$room[0]->room_id)}}" method="post" class="needs-validation" novalidate>
          {{ csrf_field() }}
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="room_status_id">Room Status</label>
                <select class="custom-select mr-sm-2" id="room_status_id" name="room_status_id" required>
                  <option>Choose...</option>
                  <option <?php if( $select === 'RS001'){echo "selected";}?> value="RS001">Available</option>
                  <option <?php if( $select === 'RS002'){echo "selected";}?> value="RS002">Not Available</option>
                </select>
              </div>

              <div class="form-group col-md-6">
                <label for="room_id">Room ID</label>
              <input type="text" class="form-control" required name="room_id" required value="{{$room[0]->room_id}}">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="room_floor">Room Floor</label>
                <input type="number" class="form-control" name="room_floor" required value="{{$room[0]->room_floor}}">
              </div>

              <div class="form-group col-md-6">
                <label for="room_build">Room Build</label>
                <input type="text" class="form-control" name="room_build" required value="{{$room[0]->room_build}}">
              </div>
            </div>
            <div class="form-group">
              <label for="user_id">user id</label>
              <input type="text" class="form-control" name="user_id" required value="{{$room[0]->user_id}}">
            </div>

           <div class="form-row">
              <div class="form-group col-md-12">
                <label for="room_type_id">Room Type</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" required name="room_type_id">
                  <option selected>Choose...</option>
                  <option <?php if( $roomType === 'RT001'){echo "selected";}?> value="RT001">Studio(25 sq.m) : Price 4750 Bath</option>
                </select>
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
            <button type="submit" onclick="confirm('Want to edit a room?')" class="btn btn-success"><i class="fa-floppy-o"></i>  Save</button>

          </form>
      </div>
    </div>
</div>
</div>
<script src="{{ asset('js/required.js') }}"></script>
    
@endsection