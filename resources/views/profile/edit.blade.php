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
                <h6 class="m-0 font-weight-bold text-primary">Edit Profile</h6>
            </div>

            <div class="card-body">
                <form action="{{route('profile.update', $users[0]->user_id)}}" method="post" class="needs-validation" novalidate enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PATCH') }}

                    <div class="row align-items-center">
                        <div class="col"></div>
                        <div class="col">
                            
                            @if($users[0]->pic === null)
                            <div class="mx-auto" style="width: 140px;">
              <div class="d-flex justify-content-center align-items-center rounded " style="height: 140px; background-color: rgb(233, 236, 239);">
              
                            <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">No Image</span>
              </div>
                            </div>
                            @else
                            <img src="{{ $users[0]->pic }}" height="140">
                            @endif
                        </div>
                        <div class="col"></div>

                        <input type="hidden" class="form-control" id="name" name="user_id" value="{{ $users[0]->user_id }}">
                    </div>
                    <div class="row align-items-center">
                        <div class="col"></div>
                        <div class="col">
                            <input id="image" type="file" name="image">
                        </div>
                        <div class="col"></div>
                    </div>

                    <hr>

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
                        <input type="idcard" required name="id_card" value="{{ $users[0]->id_card}}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="inputAddress2">Address</label>
                        <input id="address" required name="address" value="{{ $users[0]->address}}" type="text" class="form-control">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Tel.</label>
                            <input id="phonenumber" required name="phone_number" value="{{ $users[0]->phone_number}}" type="text" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputPassword4">E-mail</label>
                            <input id="email" required name="email" value="{{ $users[0]->email}}" type="text" class="form-control">
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Username</label>
                            <input id="myText" value="{{ $user_login->username}}" class="form-control" Disabled>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input id="myText" value="{{ $user_login->password}}" type="password" class="form-control" Disabled>
                        </div>



                        <hr>
                        <div class="mx-auto">
                            <a href="{{ url('profile') }}" type="button" class="btn btn-secondary mr-2">Cancel</a>
                            <button type="submit" onclick="confirm('comfirm to edit profile?')" class="btn btn-success"><i class="fa-floppy-o"></i> Save </button>
                        </div>

                    </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/required.js') }}"></script>


    @endsection