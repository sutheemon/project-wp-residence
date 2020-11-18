@extends('layouts.app')

@section('title')

Payment Bill

@endsection

@section('content')

<h1>Payment Bill</h1>
<hr>
<div class="row">
    <!-- Detail Bill -->
    <div class="card shadow mb-4 col-md-8">
        <div class="card-body">
            <form method="get" action="#">
                {{ $data[0]->bill_id}}
                @if($data[0]->bill_status_id === 'BS003')
                <!-- <a href="{{ $data[0]->pic }}">View Image</a><br> -->
                <img src="{{  $data[0]->pic }}" alt="bill" width="300">
                @else
                <a>No Image</a>
                @endif
            </form>
        </div>
    </div>

    <!-- Upload Image Slip -->
    <div class="card shadow mb-4 col-md-4">
        <div class="card-body">

            <div class="row justify-content-center">
                <form class="m-2" method="post" action="{{ route('payment.update', $data[0]->bill_id) }}" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PATCH') }}
                    <input type="hidden" class="form-control" id="name" name="name" value="{{ $data[0]->bill_id}}">
                    <div class="form-group">
                        <label for="image">Choose Image</label>
                        <input id="image" type="file" name="image">
                    </div>
                    <button type="submit" class="btn btn-dark d-block w-75 mx-auto">Upload</button>
                </form>
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

@endsection