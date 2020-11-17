@extends('layouts.app')

@section('title')

Manage Bill

@endsection

@section('content')

<div class="row justify-content-between">
        <h3 class="h3 text-gray-800 ml-3">Create Bill</h3>
    </div>
    <hr>
<div class="card shadow mb-4">

    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Bill</h6>
    </div>

    <div class="card-body">
        <form method="POST" action="{{ url('bill') }}"  class="needs-validation" novalidate>
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="bill_id">No.bill</label>
                    <input id="bill_id" type="text" class="form-control" name="bill_id" value="{{ old('bill_id') }}" placeholder="Format: DDMMYY_R000" required>
                    <div class="invalid-feedback">
                  Please input No.bill.
                </div>
                </div>

                <!-- <div class="form-group col-md-6">
                    <label for="date">Date</label>
                    <input id="date" type="date" class="form-control" name="date" value="{{ old('date') }}">
                </div> -->
            </div>

            <div class="form-group">
                <label for="room_id">Room ID</label>
                <input type="text" class="form-control" name="room_id" value="{{ old('room_id') }}" required>
                <div class="invalid-feedback">
                  Please input Room ID.
                </div>
            </div>

            <div class="form-row ">
                <div class="form-group col-md-6">
                    <label for="unit_water">Unit Water</label>
                    <input id="unit_water" type="number" class="form-control" name="unit_water" value="{{ old('unit_water') }}" required>
                    <div class="invalid-feedback">
                  Please input Unit Water.
                </div>
                </div>
 
                <div class="form-group col-md-6">
                    <label for="unit_electric">Unit Electric</label>
                    <input id="unit_electric" type="number" class="form-control" name="unit_electric" value="{{ old('unit_electric') }}" required>
                    <div class="invalid-feedback">
                  Please input Unit Electric.
                </div>
                </div>
            </div>
            @if($errors->any())
                <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
                </div>
              @endif
            <hr>
            <hr>
            <a href="{{ url('bill') }}" type="button" class="btn btn-secondary mr-2">Cancel</a>
        <button  type="submit" onclick="confirm('Want to create a bill?')"  class="btn btn-success"><i class="fa-floppy-o">Save</button>
        </form>
    </div>
</div>
<script src="{{ asset('js/required.js') }}"></script>
@endsection