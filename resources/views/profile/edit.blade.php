@extends('layouts.app')

@section('title')
    
    Edit Profile
    
@endsection

@section('content')


<div class="row">

    <div class="col-xl-12">

        <!-- Area Chart -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Manage Profile</h6>

                <div class="d-sm-flex align-items-center justify-content-end mb-4">
                <a href="{{route('profile.edit', $users[0]->user_id)}}" class="btn btn-primary" type="button" style="height: 45px; width: 150px;"  >
                  
                  <i class="fas fa-user-edit fa-sm text-white-50"></i> Edit Profile 
                  
                </a> 
            </div>


            </div>
            <div class="card-body">
            <form action="{{url('profile/'.$users[0]->user_id)}}" method="post" class="needs-validation" novalidate>
            {{ csrf_field() }}

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
                        <input id="text" required name="F_name" value="{{ $users[0]->F_name}}" type="text" class="form-control">

                      </div>

                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Lastname</label>
                        <input id="text" required name="L_name" value="{{ $users[0]->L_name}}" type="text" class="form-control">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputAddress">ID Card</label>
                      <input type="idcard"  required name="id_card" value="{{ $users[0]->id_card}}" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="inputAddress2">Address</label>
                      <input id="address"  required name="address" value="{{ $users[0]->address}}" type="text" class="form-control">
                    </div>
                    

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Tel.</label>
                            <input id="phonenumber" required name="phone_number" value="{{ $users[0]->phone_number}}" type="text" class="form-control">
                          </div>

                          <div class="form-group col-md-6">
                            <label for="inputPassword4">E-mail</label>
                            <input id="email"  required name="email" value="{{ $users[0]->email}}" type="text"  class="form-control">
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
                <a href="{{ URL::to('profile') }}" type="button" class="btn btn-secondary mr-2">Cancel</a>
                <button type="submit" onclick="confirm('comfirm to edit profile?')" class="btn btn-success"><i class="fa-floppy-o"></i>  Save</button>
            </div>
        </div>
</div>




@endsection