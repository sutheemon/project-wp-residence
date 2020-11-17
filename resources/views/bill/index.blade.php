@extends('layouts.app')

@section('title')

Manage Bill

@endsection

@section('content')

<h1>Manage Bill</h1>

<div class="d-sm-flex align-items-center justify-content-end mb-4">
<form method="get" action="{{ url('bill/create') }}" >
    <button class="btn btn-primary" style="height: 45px; width: 150px;"><i class="fas fa-user-edit fa-sm text-white-50"></i> Add Profile</button>
</form>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Bill ID</th>
                        <th>Room</th>
                        <th>Build</th>
                        <th>Floor</th>
                        <th>Payment</th>
                        <th>Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bills as $data)
                    <tr>
                        <td>{{ $data->bill_id }}</td>
                        <td>{{ $data->room_id }}</td>
                        <td>{{ $data->room_build }}</td>
                        <td>{{ $data->room_floor }}</td>
                        <td>{{ $data->total_payment }}</td>
                        <td>{{ $data->name_bill_status }}</td>
                        <td class="text-center">
                            <a href="{{ route('bill.edit', $data->bill_id) }}" style='color:black'><i class='fa fa-edit'></i></a>&nbsp;
                            <a href="{{ route('bill.destroy', $data->bill_id) }}" onclick="return confirm('Are you sure?')"  style='color:black'><i class='fa fa-trash'></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection