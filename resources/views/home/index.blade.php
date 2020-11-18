@extends('layouts.app')

@section('title')
 
    HOME
    
@endsection

@section('content')
<div>
  <img src="images/homeRes.png" width="100%" class="mb-3">
    
      <div class="row">

        <div class="col-xl-4 col-lg-4 text-center">
          <div class="card shadow mb-4">
            <!-- Card Header -->
            <div class="card-header py-3 d-flex flex-column align-items-center justify-content-center">
              <h6 class="m-0 font-weight-bold text-primary">ADDRESS</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
              <i style='color:#df5a4e' class='fas fa-map-marked-alt fa-3x'></i>
              <br><br>
              <h6 class="mb-4" style="color: #3d3d3d">17/4 Village ChalongKrung Road,<br> Ladkrabang Sub-district, Ladkrabang District, <br> Bangkok, 10520</h6>
            </div> 
          </div>
      </div>
    
        <div class="col-xl-4 col-lg-4 text-center">
          <div class="card shadow mb-4">
            <!-- Card Header -->
            <div class="card-header py-3 d-flex flex-column align-items-center justify-content-center">
              <h6 class="m-0 font-weight-bold text-primary">SOCIAL</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
              <ul class="list-unstyled mt-3 mb-4">
                <li>
                  <i style='color:#4e75df' class="fab fa-facebook-square fa-2x"></i>
                  <span class="ml-2" style="font-size: 150%; color: #3d3d3d">Residence facebook</span>
                </li>
                <br>
                <li>
                  <i style='color:#36b9cc' class="fab fa-twitter fa-2x"></i>
                  <span class="ml-2" style="font-size: 150%; color: #3d3d3d">Residence Twitter</span>
                </li>
              </ul>
            </div>
          </div>
      </div>
          
        <div class="col-xl-4 col-lg-4 text-center">
            <div class="card shadow mb-4">
              <!-- Card Header -->
              <div class="card-header py-3 d-flex flex-column align-items-center justify-content-center">
                <h6 class="m-0 font-weight-bold text-primary">CONTACT</h6>
              </div>
              <!-- Card Body -->
              <div class="card-body">
                <ul class="list-unstyled mt-3 mb-4">
                  <li>
                    <i style='color:#1cc88a' class="fas fa-phone fa-2x"></i>
                    <span class="ml-2" style="font-size: 150%; color: #3d3d3d"> 099-123-4567</span>
                  </li>
                  <br>
                  <li>
                    <i style='color:#f6c23e' class="far fa-envelope fa-2x"></i>
                    <span class="ml-2" style="font-size: 150%; color: #3d3d3d">residence@gmail.com</span>
                  </li>
                </ul>
              </div>
            </div>
        </div>
    
    </div>
    </div>
    
@endsection