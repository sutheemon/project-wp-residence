@extends('layouts.app')

@section('title')
    
    Manage Residence
    
@endsection

@section('content')
    
    <div class="row justify-content-between">
        <h3 class="h3 text-gray-800 ml-3">Create Tenant</h3>
    </div>
    <hr>
    <div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Data Tenant</h6>
        </div>
        <div class="card-body">
            <form action="{{url('tenant')}}" method="post" class="needs-validation" novalidate>
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="room_id">Room ID</label>
                        <input type="text" class="form-control" readonly required name="room_id" value="{{ $roomId }}">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="user_id">User id</label>
                        <input type="text" class="form-control" required name="user_id">
                      </div>
          
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="F_name">Firstname</label>
                    <input type="text" class="form-control" required name="F_name">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="L_name">Lastname</label>
                    <input type="text" class="form-control" required name="L_name">
                  </div>
                </div>

                <div class="form-group">
                  <label for="id_card">ID Card</label>
                  <input type="number" class="form-control" pattern="[0-9]{13}" required name="id_card">
                </div>

                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" required name="address">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="phone_number">Tel.</label>
                        <input type="number" class="form-control" pattern="[0][0-9]{9}" required name="phone_number">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" required name="email">
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
                <a href="{{ URL::to('residence') }}" type="button" class="btn btn-secondary mr-1">Cancel</a>
                <button type="submit" onclick="confirm('Want to create a tenant?')" class="btn btn-success mr-3"><i class="fa-floppy-o"></i>  Save</button>
              </form>
        </div>
      </div>
</div>

<script src="{{ asset('js/required.js') }}"></script>
@endsection