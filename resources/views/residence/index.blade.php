@extends('layouts.app')

@section('title')
    
    Manage Residence
    
@endsection

@section('content')
    
    <!-- Page Heading -->
    <div class="row justify-content-between">
        <h1 class="h3 mb-2 text-gray-800 ml-3">Manage Residence</h1>
        <a href="{{ URL::to('residence/create') }}" type="button" class="btn btn-primary mr-3"><i class="fas fa-plus-circle mt-0"></i>  Create Residence</a>
    </div>
    <hr>
    @php
        $seq = 1;
    @endphp
    <!-- DataTales -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Residence</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>#</th>
                <th>Room ID</th>
                <th>Room Build</th>
                <th>Room Floor</th>
                <th>Status</th>
                <th>Tenant</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
             @foreach($rooms as $item) 
             @if ($item->room_id != 'A000')
              <tr>
                <td>{{ $seq++ }}</td>
                <td>{{ $item->room_id }}</td>
                <td>{{ $item->room_build }}</td>
                <td>{{ $item->room_floor }}</td>
            @if ($item->room_status_id === 'RS001')
                <td>
                    <span class="badge badge-secondary">Is available</span>
                </td>
            @else
            <td>
                <span class="badge badge-danger">not available</span>
            </td>
            @endif
            @if ($item->user_id === null)
                <td>-</td>
            @else
                <td>{{ $item->F_name }} {{ $item->L_name }}</td>
            @endif
            <td>
              <a href="{{ URL::to('residence/'. $item->room_id. '/edit') }}" type="button" class="btn btn-warning btn-rounded btn-sm my-0"> 
                <i class="fas fa-pencil-alt mt-0"></i> Edit
              </a>
            @if ($item->room_status_id === 'RS001')
              <a href="{{ URL::to('tenant/'. $item->room_id .'/create') }}" type="button" class="btn btn-info btn-rounded btn-sm my-0"> 
                <i class="fas fa-plus-circle mt-0"></i> Tenant
              </a>
            @else
              <a href="{{ URL::to('tenant/'. $item->room_id .'/edit') }}" type="button" class="btn btn-primary btn-rounded btn-sm my-0"> 
                <i class="fas fa-pencil-alt mt-0"></i> Edit Tenant
              </a>
            @endif
            </td>
            </tr>
            @endif
            @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>#</th>
                <th>Room ID</th>
                <th>Room Build</th>
                <th>Room Floor</th>
                <th>Status</th>
                <th>Tenant</th>
                <th>Action</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>

</div>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    
@endsection