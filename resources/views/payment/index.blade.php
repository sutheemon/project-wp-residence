@extends('layouts.app')

@section('title')
    
    Payment Bill
    
@endsection

@section('content')
    
    <h1>Payment Bill</h1>
<hr>
@foreach($bills as $data)
<div class="card shadow mb-4">
    <div class="card-body">
    <form method="get" action="{{  route('payment.edit', $data->bill_id) }}" >
        {{ $data->bill_id}}
    <button class="btn btn-primary">Add Profile</button>
    </form>
    </div>
</div>
@endforeach
    
@endsection