@extends('layouts.app')

@section('title')
 
    HOME
    
@endsection

@section('content')
<div>
  <img src="images/homeRes.jpg" width="100%" class="mb-3">
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">ADDRESS</h4>
        </div>
        <div class="card-body">
            <i class='fas fa-map-marked-alt' style='font-size:48px;color:#df5a4e'></i>
            <br><br>
            <h5 style="color: #3d3d3d">17/4 Village ChalongKrung Road,<br> Ladkrabang Sub-district, Ladkrabang District, <br> Bangkok, 10520</h5>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">SOCIAL</h4>
        </div>
        <div class="card-body">
          <ul class="list-unstyled mt-3 mb-4">
            <li>
              <i style='color:#4e75df' class="fab fa-facebook-square fa-3x"></i>
              <span class="ml-2" style="font-size: 180%; color: #3d3d3d">Residence facebook</span>
            </li>
            <br>
            <li>
              <i style='color:#36b9cc' class="fab fa-twitter fa-3x"></i>
              <span class="ml-2" style="font-size: 180%; color: #3d3d3d">Residence Twitter</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">CONTACT</h4>
        </div>
        <div class="card-body">
          <ul class="list-unstyled mt-3 mb-4">
            <li>
              <i style='color:#1cc88a' class="fas fa-phone fa-3x"></i>
              <span class="ml-2" style="font-size: 180%; color: #3d3d3d"> 099-123-4567</span>
            </li>
            <br>
            <li>
              <i style='color:#f6c23e' class="far fa-envelope fa-3x"></i>
              <span class="ml-2" style="font-size: 180%; color: #3d3d3d">residence@gmail.com</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    
@endsection