@extends('layouts.app')

@section('title')

Manage Profile

@endsection

@section('content')
@foreach ($users as $data)
<!-- Page Heading -->
<div class="row justify-content-between">
  <h1 class="h3 mb-2 text-gray-800 ml-3">Manage Profile</h1>
  <a href="{{ route('profile.edit', $data->user_id)}}" type="button" class="btn btn-primary mr-3"><i class="fas fa-pencil-alt mt-0"></i> &nbsp; Edit Profile</a>
</div>
<hr>

<div class="row">
  <div class="col-xl-12">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
      </div>
      <div class="card-body">

        <form method="get" action="{{ route('profile.edit', $data->user_id)}}">

          <div class=".col-6 ">
            <div class="mx-auto" style="width: 140px;">
              <div class="d-flex justify-content-center align-items-center rounded " style="height: 140px; background-color: rgb(233, 236, 239);">
                @if($users[0]->pic === null)
                <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">No Image</span>
                @else
                <img src="{{ $users[0]->pic }}" height="140">
                @endif
              </div>
            </div>
            <hr>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4"><b>Firstname : </b>
                  {{ $data->F_name}} &nbsp; {{ $data->L_name}}
              </div>

              <div class="form-group col-md-6">
                <label for="inputAddress"><b>ID Card : </b></label>
                {{ $data->id_card}}
              </div>
            </div>

            <div class="form-group">
              <label for="inputAddress2"><b>Address : </b></label>
              {{ $data->address}}
            </div>


            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4"><b>Tel. </b></label>
                {{ $data->phone_number}}
              </div>

              <div class="form-group col-md-6">
                <label for="inputPassword4"><b>E-mail : </b></label>
                {{ $data->email}}
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
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
  @endforeach



  @endsection