@extends('layout.master')

@section('title')
 
    HOME
    
@endsection

@section('content')
{{-- <img src="residence.jpg" class="img-fluid" alt="Responsive image">     --}}
{{-- <div class="container"> --}}
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">ADDRESS</h4>
        </div>
        <div class="card-body">
            <i class='fas fa-map-marked-alt' style='font-size:48px;color:#ffc107'></i><br>
          <p>1/685 </p>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">SOCIAL</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>20 users included</li>
            <li>10 GB of storage</li>
            <li>Priority email support</li>
            <li>Help center access</li>
          </ul>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">CONTACT</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>30 users included</li>
            <li>15 GB of storage</li>
            <li>Phone and email support</li>
            <li>Help center access</li>
          </ul>
        </div>
      </div>
    {{-- </div> --}}
    
@endsection