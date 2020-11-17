@extends('layouts.app')

@section('title')

Manage Bill

@endsection

@section('content')
<div class="row justify-content-between">
    <h3 class="h3 text-gray-800 ml-3">Edit Bill</h3>
</div>
<hr>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-md-6 align-middle ">
                <h6 class="m-0 font-weight-bold text-primary">Bill Detail : {{$data[0]->bill_id}}</h6>
            </div>

            @if ($data[0]->bill_status_id === 'BS001')
            <div class="col-md-6 text-lg-right">
                <span class="badge badge-danger">Unpaid bill</span>
            </div>
            @elseif ($data[0]->bill_status_id === 'BS002')
            <div class="col-md-6 text-lg-right">
                <span class="badge badge-success">Paid</span>
            </div>
            @else
            <div class="col-md-6 text-lg-right">
                <span class="badge badge-warning">In the midst of verification</span>
            </div>
            @endif
        </div>
    </div>
    <form method="POST" action="{{ route('bill.update', $data[0]->bill_id) }}">
        <div class="card-body text-dark">
            @csrf
            {{ method_field('PATCH') }}

            <div class="row">
                <div class="col-md-4">
                    <b>Date : </b><a>{{$data[0]->created_at}}</a>
                </div>
                <div class="col-md-4">
                    <b>Total Payment : </b><a>{{$data[0]->total_payment}}</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <b>Room : </b><a>{{$data[0]->room_id}}</a>
                </div>
                <div class="col-md-4">
                    <b>Build : </b><a>{{$data[0]->room_build}}</a>
                </div>
                <div class="col-md-4">
                    <b>Floor : </b><a>{{$data[0]->room_floor}}</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <b>Room Payment : </b><a>{{$data[0]->price_room}}</a>
                </div>
                <div class="col-md-4">
                    <b>Water Payment : </b><a>{{$data[0]->water_price}}</a>
                </div>
                <div class="col-md-4">
                    <b>Electric Payment : </b><a>{{$data[0]->electric_price}}</a>
                </div>
            </div>

        </div>
        <hr>
        <div class="card-body text-center">
            @if($data[0]->bill_status_id !== 'BS001')
            <!-- <a href="{{ $data[0]->pic }}">View Image</a><br> -->
            <img src="{{  $data[0]->pic }}" alt="bill" width="300">
            @else
            <a>No Image</a>
            @endif
        </div>

        <div class="card-footer">

            <div>
                @if($data[0]->bill_status_id === 'BS003')
                <button class="btn" style=" background-color: rgb(62, 212, 74); color: #ffff">Confirm Payment</button>
                @else
                <button class="btn" style=" background-color: rgb(62, 212, 74); color: #ffff" disabled>Confirm Payment</button>
                @endif
            </div>
    </form>
</div>

@endsection