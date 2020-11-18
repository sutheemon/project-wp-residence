@extends('layouts.app')

@section('title')

Payment Bill

@endsection

@section('content')

<h1>Payment Bill</h1>
<hr>
@if($bills->isEmpty())
<div class="card shadow mb-4">
    <div class="card-header text-center justify-content-center">
        <h6 class="m-0 font-weight-bold ">No Bill</h6>
    </div>
</div>
@endif
<div class="row">
    @foreach($bills as $data)
    <div class="col-xl-4 col-lg-4 text-center">
        <div class="card shadow mb-4">
            <!-- Card Header -->
            <div class="card-header py-3 d-flex flex-column align-items-center justify-content-center">
                <h6 class="m-0 font-weight-bold text-primary mb-3">BILL ID : {{ $data->bill_id}}</h6>
                <h6 class="m-0 font-weight-bold ">Date {{date('d/m/Y', strtotime($data->created_at))}}</h6>
            </div>

            <!-- Card Body -->
            <div class="card-body">
                {{-- <i style='color:#ec4d4d' class="fas fa-hand-holding-usd fa-5x"></i> --}}
                <img src="https://www.flaticon.com/svg/static/icons/svg/3062/3062544.svg" style="width: 100px" />
                <div class="mt-3 d-flex justify-content-between mx-5">
                    <span>Room Bill</span>
                    <span>{{ $data->price_room}}</span>
                </div>
                <div class="mt-3 d-flex justify-content-between mx-5">
                    <span>Water Bill</span>
                    <span>{{ $data->water_price}}</span>
                </div>
                <div class="mt-3 d-flex justify-content-between mx-5">
                    <span>Eliectric Bill</span>
                    <span>{{ $data->electric_price}}</span>
                </div>
                <div class="mt-3 d-flex justify-content-between mx-5">
                    <span>Total</span>
                    <span>{{ $data->total_payment}}</span>
                </div>
                <div class="mt-3 d-flex justify-content-between mx-5">
                    <span>Status Bill</span>
                    @if ($data->bill_status_id === 'BS001')
                    <h5><span class="badge badge-danger">Unpaid</span></h5>
                    @elseif ($data->bill_status_id === 'BS002')
                    <h5><span class="badge badge-success">Paid</span></h5>
                    @else
                    <h5><span class="badge badge-warning">Checking</span></h5>
                    @endif
                </div>
                <a href="{{  route('payment.edit', $data->bill_id) }}" class="btn btn-primary btn-block mt-5">View Bill</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
@endsection