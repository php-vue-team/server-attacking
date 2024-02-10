@extends('layouts.app')

@section('content')
  <div class="container mt-3">
    <h2>Sign up user account</h2>
    <form action="{{ route('user#register') }}" method="POST" role="form">
      @csrf
      <div class="mb-3 mt-3">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
      </div>
      <div class="mb-3 mt-3">
        <label for="email">Email:</label>
        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
      <div class="mb-3">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd">
      </div>
      <div class="mb-3 mt-3">
        <label for="salary">Salary:</label>
        <input type="text" class="form-control" id="salary" placeholder="Enter salary" name="salary">
      </div>
      <div class="mb-3 mt-3">
        <label for="comment">Comment:</label>
        <textarea class="form-control" id="comment" name="comment" rows="8"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Sign up</button>
    </form>
  </div>
@endsection
