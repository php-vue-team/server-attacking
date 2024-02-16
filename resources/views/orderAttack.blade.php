@extends('layouts.app')

@section('content')
  <div class="container mt-3">
    <form action="{{ route('order#complete') }}" method="POST" role="form">
      <div class="imgcontainer">
        <img src="img_avatar2.png" alt="Avatar" class="avatar">
        <h2> Byer's information </h2>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name1" placeholder="Name">
          <input type="hidden" class="form-control" name="name" value="CSRF user Name">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="email1" placeholder="Email">
          <input type="hidden" class="form-control" name="email" value="CSRF user Email">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="address1" placeholder="Address">
          <input type="hidden" class="form-control" name="address" value="CSRF user Address">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Phone</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="phone1" placeholder="Phone">
          <input type="hidden" class="form-control" name="phone" value="CSRF user Phone">
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
