@extends('layouts.app')

@section('title')

Payment Bill

@endsection

@section('content')

<div class="row justify-content-between">
    <h3 class="h3 text-gray-800 ml-3">Edit Bill</h3>
    <div>
        <a href="{{ URL::to('payment') }}" type="button" class="btn btn-dark mr-3">Back</a>
    </div>
</div>
<hr>
<div class="row">
    <!-- Upload Image Slip -->
    <div class="col-xl-4 col-lg-4 text-center">
        <div class="card shadow mb-4">
            <div class="card-body">

                <div class="row justify-content-center">
                    <form class="m-2" method="post" action="{{ route('payment.update', $data[0]->bill_id) }}" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PATCH') }}

                        <!-- show image -->
                        @if($data[0]->bill_status_id === 'BS003')
                        <!-- <a href="{{ $data[0]->pic }}">View Image</a><br> -->
                        <img src="{{  $data[0]->pic }}" alt="bill" width="360">
                        @else
                        <a>No Bill Payment Slip</a>
                        <label for="image">Choose Bill Payment Slip</label>
                        @endif
                    @php
                        $status = $data[0]->bill_status_id ;
                    @endphp
                        <input type="hidden" class="form-control" id="name" name="name" value="{{ $data[0]->bill_id}}">
                        <div class="form-group mt-3">
                            <input <?php if( $status === 'BS002'){echo "disabled";}?>  id="image" type="file" name="image" style="border-style: solid; border-width: 2px; border-color: rgb(165, 165, 165); border-radius: 5px;">
                        </div>
                        <button type="submit" class="btn btn-dark d-block w-75 mx-auto">Upload</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Detail Bill -->
    <div class="col-xl-8 col-lg-8">
        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Bill Detail : {{$data[0]->bill_id}}</h6>

            </div>

            <div class="card-body text-dark">

                <div class="row">
                    <div class="col-md-4">
                        <b>Date : </b><a>{{$data[0]->created_at}}</a>
                    </div>
                </div>

                <div class="row d-flex justify-content-between mx-0">
                    <div class="">
                        <b>Room : </b><a>{{$data[0]->room_id}}</a>
                    </div>
                    <div class="">
                        <b>Build : </b><a>{{$data[0]->room_build}}</a>
                    </div>
                    <div class="">
                        <b>Floor : </b><a>{{$data[0]->room_floor}}</a>
                    </div>
                </div>

            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Payment list</th>
                                <th>Unit</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>room: {{ $data[0]->name_room }}</td>
                                <td>1</td>
                                <td>{{ $data[0]->price_room }}</td>
                            </tr>
                            <tr>
                                <td>Water bill</td>
                                <td>{{ $data[0]->unit_water_after-$data[0]->unit_water_before }}</td>
                                <td>{{ $data[0]->water_price }}</td>
                            </tr>
                            <tr>
                                <td>Electric bill</td>
                                <td>{{ $data[0]->unit_electric_after-$data[0]->unit_electric_before }}</td>
                                <td>{{ $data[0]->electric_price }}</td>
                            </tr>

                            <tr>
                                <td><b>Total</b></td>
                                <td></td>
                                <td><b>{{ $data[0]->total_payment }}</b></td>
                            </tr>

                        </tbody>
                    </table>

                    <a>Status of payment : </a>
                    @if ($data[0]->bill_status_id === 'BS001')
                    <span class="badge badge-danger">Unpaid bill</span>
                    @elseif ($data[0]->bill_status_id === 'BS002')
                    <span class="badge badge-success">Paid</span>
                    @else
                    <span class="badge badge-warning">Checking</span>
                    @endif
                </div>
            </div>
        </div>
    </div>

</div>

</div>
@if(Session::has('alert'))

<script type="text/javascript">
    alert("Please upload files");
</script>

@endif
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
@endsection