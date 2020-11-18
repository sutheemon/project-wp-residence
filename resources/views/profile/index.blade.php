@extends('layouts.app')

@section('title')
    
    Manage Profile
    
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

              <form method="get" action="{{ route('profile.edit', $data->user_id)}}">

              <div class=".col-6 ">
                  <div class="mx-auto" style="width: 140px;">
                    <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                      <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                      

                    </div>

                  
                  </div>



                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Firstname</label>
                        <p> : {{ $data->F_name}} </p>

                      </div>

                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Lastname</label>
                        <p> : {{ $data->L_name}}</p>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputAddress">ID Card</label>
                      <p> : {{ $data->id_card}} </p>
                    </div>

                    <div class="form-group">
                      <label for="inputAddress2">Address</label>
                      <p> : {{ $data->address}} </p>
                    </div>
                    

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Tel.</label>
                            <p> : {{ $data->phone_number}} </p>
                          </div>

                          <div class="form-group col-md-6">
                            <label for="inputPassword4">E-mail</label>
                            <p> : {{ $data->email}} </p>
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

                    </div>
                  </form>
           </div>
        </div>
</div>
@endforeach



@endsection