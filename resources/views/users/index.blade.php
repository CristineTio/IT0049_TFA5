@extends('layouts.app')

@section('content')
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>User Accounts</h2>
    <a href="{{ route('users.create') }}" class="btn btn-primary">Add User</a>
</div>
<div class="card shadow-sm">
    <table class="table table-striped align-middle mb-0">
        <thead class="table-dark">
            <tr>
                <th>Avatar</th>
                <th>ID</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>
                    @if($user->avatar)
                        <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar" width="45" height="45" class="rounded-circle object-fit-cover">
                    @else
                        <img src="https://ui-avatars.com/api/?name={{ urlencode($user->full_name) }}&background=6c757d&color=fff" alt="Placeholder" width="45" height="45" class="rounded-circle">
                    @endif
                </td>
                <td>{{ $user->id }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->full_name }}</td>
                <td>
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection