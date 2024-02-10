@extends('layouts.app')

@section('content')
  <div class="container mt-3">
    <h2>Login user</h2>
    <form action="{{ route('user#login') }}" method="POST" role="form">
      @csrf
      <div class="mb-3 mt-3">
        <label for="email">Email:</label>
        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
      <div class="mb-3">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
  </div>
@endsection
