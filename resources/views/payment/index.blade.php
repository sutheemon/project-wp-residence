@extends('layouts.app')

@section('title')
    
    Payment Bill
    
@endsection

@section('content')
    
<div class="row">

    <div class="col-xl-4 col-lg-4 text-center">
      <div class="card shadow mb-4">
        <!-- Card Header -->
        <div class="card-header py-3 d-flex flex-column align-items-center justify-content-center">
          <h6 class="m-0 font-weight-bold text-primary mb-3">BILL ID : B1234569874 </h6>
          <h6 class="m-0 font-weight-bold ">Date 12 / 01 / 2020</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            {{-- <i style='color:#ec4d4d' class="fas fa-hand-holding-usd fa-5x"></i> --}}
            <img src="https://www.flaticon.com/svg/static/icons/svg/3062/3062544.svg" style="width: 100px" />
            <div class="mt-3 d-flex justify-content-between mx-5">
                <span>Room Bill</span>
                <span>50 Bath</span>
            </div>
            <div class="mt-3 d-flex justify-content-between mx-5">
                <span>Water Bill</span>
                <span>50 Bath</span>
            </div>
            <div class="mt-3 d-flex justify-content-between mx-5">
                <span>Eliectric Bill</span>
                <span>1500 Bath</span>
            </div>
            <div class="mt-3 d-flex justify-content-between mx-5">
                <span>Status Bill</span>
            <h4><span class="badge badge-success">Paid</span></h5>
            </div>
            <a href="#" class="btn btn-dark btn-block mt-5">View Bill</a>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-lg-4 text-center">
        <div class="card shadow mb-4">
          <!-- Card Header -->
          <div class="card-header py-3 d-flex flex-column align-items-center justify-content-center">
            <h6 class="m-0 font-weight-bold text-primary mb-3">BILL ID : B1234569874 </h6>
            <h6 class="m-0 font-weight-bold ">Date 12 / 01 / 2020</h6>
          </div>
          <!-- Card Body -->
          <div class="card-body">
              {{-- <i style='color:#ec4d4d' class="fas fa-hand-holding-usd fa-5x"></i> --}}
              <img src="https://www.flaticon.com/svg/static/icons/svg/3062/3062544.svg" style="width: 100px" />
              <div class="mt-3 d-flex justify-content-between mx-5">
                  <span>Room Bill</span>
                  <span>50 Bath</span>
              </div>
              <div class="mt-3 d-flex justify-content-between mx-5">
                  <span>Water Bill</span>
                  <span>50 Bath</span>
              </div>
              <div class="mt-3 d-flex justify-content-between mx-5">
                  <span>Eliectric Bill</span>
                  <span>1500 Bath</span>
              </div>
              <div class="mt-3 d-flex justify-content-between mx-5">
                  <span>Status Bill</span>
              <h4><span class="badge badge-warning">Checking</span></h5>
              </div>
              <a href="#" class="btn btn-dark btn-block mt-5">View Bill</a>
          </div>
        </div>
      </div>
      
    <div class="col-xl-4 col-lg-4 text-center">
        <div class="card shadow mb-4">
          <!-- Card Header -->
          <div class="card-header py-3 d-flex flex-column align-items-center justify-content-center">
            <h6 class="m-0 font-weight-bold text-primary mb-3">BILL ID : B1234569874 </h6>
            <h6 class="m-0 font-weight-bold ">Date 12 / 01 / 2020</h6>
          </div>
          <!-- Card Body -->
          <div class="card-body">
              {{-- <i style='color:#ec4d4d' class="fas fa-hand-holding-usd fa-5x"></i> --}}
              <img src="https://www.flaticon.com/svg/static/icons/svg/3062/3062544.svg" style="width: 100px" />
              <div class="mt-3 d-flex justify-content-between mx-5">
                  <span>Room Bill</span>
                  <span>50 Bath</span>
              </div>
              <div class="mt-3 d-flex justify-content-between mx-5">
                  <span>Water Bill</span>
                  <span>50 Bath</span>
              </div>
              <div class="mt-3 d-flex justify-content-between mx-5">
                  <span>Eliectric Bill</span>
                  <span>1500 Bath</span>
              </div>
              <div class="mt-3 d-flex justify-content-between mx-5">
                  <span>Status Bill</span>
              <h4><span class="badge badge-danger">Unpaid</span></h5>
              </div>
              <a href="#" class="btn btn-primary btn-block mt-5">Pay Bill</a>
          </div>
        </div>
      </div>

</div>

    
@endsection