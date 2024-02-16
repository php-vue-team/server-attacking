@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <h2>User List</h2>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Insert date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->user_name }}</td>
                        <td>{{ $user->user_email }}</td>
                        <td>{{ $user->user_password }}</td>
                        <td>{{ $user->salary }}</td>
                        <td>{{ $user->comment }}</td>
                        <td> 
                            @php 
                                echo $user->comment;
                            @endphp
                        </td>
                        <!-- <td>{{ $user->insert_date }}</td> -->
                        <td>
                            <a class="btn btn-success" href="{{ route('user#detail', ['id' => $user->user_id ]) }}">Detail</a>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
