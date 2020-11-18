@extends('layouts.app')

@section('title')

Manage Bill

@endsection

@section('content')
<div class="row justify-content-between">
    <h3 class="h3 text-gray-800 ml-3">Edit Status Bill</h3>
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
                <span class="badge badge-warning">Checking</span>
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


            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <colgroup>
                        <col width="60%">
                        <col width="15%">
                        <col width="15%">
                        <col width="10%">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>Payment list</th>
                            <th>Payment of unit</th>
                            <th>Unit used</th>
                            <th>THB</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>Water bill</td>
                            <td>{{ $unit[1]->value_unit }}</td>
                            <td>{{ $data[0]->unit_water_after-$data[0]->unit_water_before }}</td>
                            <td>{{ $data[0]->water_price }}</td>
                        </tr>
                        <tr>
                            <td>Electric bill</td>
                            <td>{{ $unit[0]->value_unit }}</td>
                            <td>{{ $data[0]->unit_electric_after-$data[0]->unit_electric_before }}</td>
                            <td>{{ $data[0]->electric_price }}</td>
                        </tr>
                        <tr>
                            <td>Room {{ $data[0]->name_room }}</td>
                            <td></td>
                            <td></td>
                            <td>{{ $data[0]->price_room }}</td>
                        </tr>
                        <tr>
                            <td><b>Total</b></td>
                            <td></td>
                            <td></td>
                            <td><b>{{ $data[0]->total_payment }}</b></td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
        <hr>
        <div class="card-body text-center">
            @if($data[0]->bill_status_id !== 'BS001')
            <!-- <a href="{{ $data[0]->pic }}">View Image</a><br> -->
            <img src="{{  $data[0]->pic }}" alt="bill" width="300">
            @else
            <a>No bill payment slip</a>
            @endif
        </div>

        <div class="card-footer">
            <a href="{{ url('bill') }}" type="button" class="btn btn-secondary mr-2">Cancel</a>

            @if($data[0]->bill_status_id === 'BS003')
            <button class="btn" style=" background-color: rgb(62, 212, 74); color: #ffff">Confirm Payment</button>
            @endif

            @if($data[0]->bill_status_id === 'BS001' || $data[0]->bill_status_id === 'BS002')
            <a href="{{ route('delete', $data[0]->bill_id) }}" onclick="return confirm('Are you sure?')" type="button" class="btn btn-danger mr-2">
            Delete
            </a>
            @endif

    </form>
</div>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
@endsection