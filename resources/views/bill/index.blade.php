@extends('layouts.app')

@section('title')

Manage Bill

@endsection

@section('content')
<!-- Page Heading -->
<div class="row justify-content-between">
    <h1 class="h3 mb-2 text-gray-800 ml-3">Manage Bill</h1>
    <a href="{{ url('bill/create') }}" type="button" class="btn btn-primary mr-3"><i class="fas fa-plus-circle mt-0"></i> Create Bill</a>
</div>
<hr>
@php
$seq = 1;
@endphp

<!-- DataTales -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Bill</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>Bill ID</th>
                        <th>Room</th>
                        <th>Build</th>
                        <th>Floor</th>
                        <th>Payment</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bills as $data)
                    <tr>
                        <td>{{ $seq++ }}</td>
                        <td>{{date('d/m/Y', strtotime($data->created_at))}}</td>
                        <td>{{ $data->bill_id }}</td>
                        <td>{{ $data->room_id }}</td>
                        <td>{{ $data->room_build }}</td>
                        <td>{{ $data->room_floor }}</td>
                        <td>{{ $data->total_payment }}</td>
                        @if ($data->bill_status_id === 'BS001')
                        <td>
                            <span class="badge badge-danger">Unpaid bill</span>
                        </td>
                        @elseif ($data->bill_status_id === 'BS002')
                        <td>
                            <span class="badge badge-success">Paid</span>
                        </td>
                        @else
                        <td>
                            <span class="badge badge-warning">In the midst of verification</span>
                        </td>
                        @endif
                        <td>
                            <a href="{{ route('bill.edit', $data->bill_id) }}" type="button" class="btn btn-warning btn-rounded btn-sm my-0">
                                <i class="fa fa-check mt-0"></i> Check
                            </a>
                            <a href="{{ route('delete', $data->bill_id) }}" onclick="return confirm('Are you sure?')" type="button" class="btn btn-dark btn-rounded btn-sm my-0">
                            <i class='fa fa-trash mt-0'></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>Bill ID</th>
                        <th>Room</th>
                        <th>Build</th>
                        <th>Floor</th>
                        <th>Payment</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>


@endsection