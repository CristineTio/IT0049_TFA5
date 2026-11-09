@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>User Accounts</h2>
</div>
<div class="card shadow-sm">
    <table class="table table-striped mb-0">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Full Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
<tr>
    <td>{{ $user->id }}</td>
    <td>{{ $user->username }}</td>
    <td>{{ $user->full_name }}</td>
</tr>
@endforeach
        </tbody>
    </table>
</div>
@endsection