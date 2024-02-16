@extends('layouts.app')

@section('content')
  <div class="container mt-3">
    <form action="{{ route('order#complete') }}" method="POST" role="form">
      <div class="imgcontainer">
        <img src="img_avatar2.png" alt="Avatar" class="avatar">
        <h2> Byer's information </h2>
      </div>
      @csrf
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name" placeholder="Name">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="email" placeholder="Email">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="address" placeholder="Address">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Phone</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="phone" placeholder="Phone">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Purchase</button>
        </div>
      </div>
    </form>
</div>
@endsection
