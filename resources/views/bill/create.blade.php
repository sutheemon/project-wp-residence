@extends('layouts.app')

@section('title')

Manage Bill

@endsection

@section('content')

<h1>Add Bill</h1>

<div class="card shadow mb-4">

    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Bill Detail</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ url('bill') }}">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="bill_id">No.bill</label>
                    <input id="bill_id" type="text" class="form-control" name="bill_id" value="{{ old('bill_id') }}" placeholder="DDMMYY_R000">
                </div>

                <!-- <div class="form-group col-md-6">
                    <label for="date">Date</label>
                    <input id="date" type="date" class="form-control" name="date" value="{{ old('date') }}">
                </div> -->
            </div>

            <div class="form-group">
                <label for="room_id">Room ID</label>
                <input type="text" class="form-control" name="room_id" value="{{ old('room_id') }}">
            </div>

            <div class="form-row ">
                <div class="form-group col-md-6">
                    <label for="unit_water">Unit Water</label>
                    <input id="unit_water" type="number" class="form-control" name="unit_water" value="{{ old('unit_water') }}">
                </div>
 
                <div class="form-group col-md-6">
                    <label for="unit_electric">Unit Electric</label>
                    <input id="unit_electric" type="number" class="form-control" name="unit_electric" value="{{ old('unit_electric') }}">
                </div>
            </div>
            <hr>
            <!-- <div class="form-group">
                <label for="total_payment">Total Payment</label>
                <input disabled id="total_payment" type="number" class="form-control" name="total_payment" value="{{ old('total_payment') }}">
            </div> -->
        <button class="btn" style="height: 45px; width: 100px; background-color: rgb(62, 212, 74); color: #ffff">Save</button>
        </form>
    </div>
</div>

@endsection