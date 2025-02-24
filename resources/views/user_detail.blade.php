@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <h2>User Detail</h2>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-5">
                <label class="form-control-plaintext text-light bg-primary"> {{ $user->user_name }}</label>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-5">
                <label class="form-control-plaintext text-light bg-primary">{{ $user->user_email }}</label>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Salary</label>
            <div class="col-sm-5">
                <label class="form-control-plaintext text-light bg-primary">{{ $user->salary }}</label>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Comment</label>
            <div class="col-sm-5">
                <label class="form-control-plaintext text-light bg-primary">{{ $user->comment }}</label>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
            <a class="col-sm-2 btn btn-success" href="{{ route('user#list') }}">Back</a>
        </div>
                            
    </div>
@endsection
