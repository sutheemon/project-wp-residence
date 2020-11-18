@extends('layouts.app')

@section('title')
    
    Edit Profile
    
@endsection

@section('content')

@foreach ($users as $data)

<div class="row">

    <div class="col-xl-12">

        <!-- Area Chart -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Manage Profile</h6>

                <div class="d-sm-flex align-items-center justify-content-end mb-4">
                <a href="{{route('profile.edit', $data->user_id)}}" class="btn btn-primary" type="button" style="height: 45px; width: 150px;"  >
                  
                  <i class="fas fa-user-edit fa-sm text-white-50"></i> Edit Profile 
                  
                </a> 
            </div>


            </div>
            <div class="card-body">
              <form>
              
              <div class=".col-6 ">
                  <div class="mx-auto" style="width: 140px;">
                    <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                      <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                    </div>

                    <button class="btn btn-primary" type="button">
                    <i class="fas fa-camera"></i>
                        <span>Change Photo</span>
                      </button>
                  </div>



                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Firstname</label>
                        <input id=" fistname " value="{{ $data->F_name}}" type="text" class="form-control">

                      </div>

                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Lastname</label>
                        <input id="myText" value="{{ $data->L_name}}" type="text" class="form-control">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputAddress">ID Card</label>
                      <input type="text"  value="{{ $data->id_card}}" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="inputAddress2">Address</label>
                      <input id="myText"  value="{{ $data->address}}" type="text" class="form-control">
                    </div>
                    

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Tel.</label>
                            <input id="myText"  value="{{ $data->phone_number}}" type="text" class="form-control">
                          </div>

                          <div class="form-group col-md-6">
                            <label for="inputPassword4">E-mail</label>
                            <input id="myText"  value="{{ $data->email}}" type="text"  class="form-control">
                          </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Username</label>
                            <input id="myText" value="{{ $user_login->username}}" class="form-control" Disabled>
                          </div>
                          
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input id="myText"  value="{{ $user_login->password}}"  type="password" class="form-control" Disabled>
                          </div>
                    </div>
                   
                  </form>
                <hr>
                <button class="btn" style="height: 45px; width: 100px; background-color: rgb(62, 212, 74); color: #ffff">Save</button>
            </div>
        </div>
</div>
@endforeach



@endsection