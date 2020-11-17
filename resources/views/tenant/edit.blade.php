@extends('layouts.app')

@section('title')
    
    Edit Residence
    
@endsection

@section('content')
    
<div class="row justify-content-between">
    <h3 class="h3 text-gray-800 ml-3">Edit Tenant</h3>
</div>
<hr>
<div class="container">
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Tenant</h6>
    </div>
    <div class="card-body">
        <form action="{{url('tenant/'.$user[0]->user_id)}}" method="post" class="needs-validation" novalidate>
            {{ csrf_field() }}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="room_id">Room ID</label>
                    <input type="text" class="form-control" readonly required name="room_id" value="{{ $roomId }}">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="user_id">User id</label>
                    <input type="text" class="form-control" readonly required name="user_id" value="{{$user[0]->user_id}}">
                  </div>
      
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="F_name">Firstname</label>
                <input type="text" class="form-control" readonly required name="F_name" value="{{$user[0]->F_name}}">
              </div>

              <div class="form-group col-md-6">
                <label for="L_name">Lastname</label>
                <input type="text" class="form-control" readonly required name="L_name" value="{{$user[0]->L_name}}">
              </div>
            </div>

            <div class="form-group">
              <label for="id_card">ID Card</label>
              <input type="number" class="form-control" readonly pattern="[0-9]{13}" required name="id_card" value="{{$user[0]->id_card}}">
            </div>

            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" required name="address" value="{{$user[0]->address}}">
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="phone_number">Tel.</label>
                    <input type="text" class="form-control" required name="phone_number" value="{{$user[0]->phone_number}}">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" required name="email" value="{{$user[0]->email}}">
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
            <button type="submit" onclick="confirm('Want to edit a tenant?')" class="btn btn-success"><i class="fa-floppy-o"></i>  Save</button>
          </form>
          <form method="post" class="delete" action="{{url('tenant/'. $roomId .'/'.$user[0]->user_id)}}">
            {{csrf_field()}}
            <button type="submit" onclick="confirm('Want to delete a tenant?')" class="btn btn-danger">Delete</button>
          </form>
    </div>
  </div>
</div>

<script src="{{ asset('js/required.js') }}"></script>
    
@endsection