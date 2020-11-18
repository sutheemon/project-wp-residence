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
    
<div class="card-body">
        <form method="POST" action="{{ route('bill.updateBill', $data[0]->bill_id) }}" class="needs-validation" novalidate>
            
            @csrf
            {{ method_field('PATCH') }}
            <div class="form-group">
                <label for="bill_id">No.bill</label>
                <input id="bill_id" type="text" class="form-control" name="bill_id" value="{{$data[0]->bill_id}}"  required disabled>
            </div>

            <div class="form-group">
                <label for="room_id">Room ID</label>
                <input type="text" class="form-control" name="room_id" value="{{$data[0]->room_id}}" required>

            </div>

            <div class="form-row ">
                <div class="form-group col-md-6">
                    <label for="unit_water">Unit Water</label>
                    <input id="unit_water" type="number" class="form-control" name="unit_water_after" value="{{$data[0]->unit_water_after}}" required>
         
                </div>

                <div class="form-group col-md-6">
                    <label for="unit_electric">Unit Electric</label>
                    <input id="unit_electric" type="number" class="form-control" name="unit_electric_after" value="{{$data[0]->unit_electric_after}}" required>
         
                </div>
            </div>
            <hr>
            <hr>
            <a href="{{ url('bill') }}" type="button" class="btn btn-secondary mr-2">Cancel</a>
            <button type="submit" onclick="confirm('Want to edit a bill?')" class="btn btn-success"><i class="fa-floppy-o">Save</button>
        </form>
    </div>
</div>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('js/required.js') }}"></script>
@endsection