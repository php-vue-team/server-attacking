@extends('layouts.app')

@section('content')
    <div class="container mt-3">
      <div class="imgcontainer">
        <img src="http://127.0.0.1:8000/img_avatar2.png" alt="Avatar" class="avatar">
        <h2> Order completed! </h2>
      </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-5">
                <label class="form-control-plaintext text-light bg-primary">{{ $order->user_name }}</label>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-5">
                <label class="form-control-plaintext text-light bg-primary">{{ $order->user_email }}</label>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-5">
                <label class="form-control-plaintext text-light bg-primary">{{ $order->user_address }}</label>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-5">
                <label class="form-control-plaintext text-light bg-primary">{{ $order->user_phone }}</label>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
            <a class="col-sm-2 btn btn-success" href="{{ route('order#showOrderForm') }}">Back</a>
        </div>
                            
    </div>
@endsection
