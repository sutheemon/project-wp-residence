@extends('layouts.app')

@section('title')

Manage Bill

@endsection

@section('content')
<!-- {{$data}} -->
<h1>Edit Status Bill</h1>

<div class="card shadow mb-4">
    <form method="POST" action="{{ route('bill.update', $data[0]->bill_id) }}">
        @csrf
        {{ method_field('PATCH') }}
        <div class="card-header py-3" style="color: black;">
            <div class="row" style="font-size:120%;">
                <div class="col-md-6 m-0 font-weight-bold">
                    Bill Detail : {{$data[0]->bill_id}}
                </div>
                @if($data[0]->bill_status_id === 'BS001')
                <div class="col-md-6 text-lg-right" style="color: red;">
                    @elseif($data[0]->bill_status_id === 'BS002')
                    <div class="col-md-6 text-lg-right" style="color: green;">
                        @else
                        <div class="col-md-6 text-lg-right" style="color:yellow">
                            @endif
                            {{$data[0]->name_bill_status}}

                        </div>
                    </div>

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
            </div>
        </div>

        <div class="card-body text-center">
            @if($data[0]->bill_status_id === 'BS003')
            <a href="{{ $data[0]->pic }}">View Image</a><br>
            <img src="{{  $data[0]->pic }}" alt="bill" width="300">
            @else
            <a>No Image</a>
            @endif
        </div>

        <div class="card-footer">

            <div>
                @if($data[0]->bill_status_id === 'BS001')
                <button class="btn" style=" background-color: rgb(62, 212, 74); color: #ffff">Confirm Payment</button>
                @else
                <button class="btn" style=" background-color: rgb(62, 212, 74); color: #ffff" disabled>Confirm Payment</button>
                @endif
            </div>
    </form>
</div>

@endsection