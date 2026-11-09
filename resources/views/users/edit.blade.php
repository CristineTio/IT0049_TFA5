@extends('layouts.app')

@section('content')
<div class="card p-4 shadow-sm col-md-6 mx-auto">
    <h3>Edit User</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" value="{{ old('username', $user->username) }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" name="full_name" class="form-control" value="{{ old('full_name', $user->full_name) }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Profile Picture (Max 2MB)</label>
            <input type="file" name="avatar" class="form-control">
            @if($user->avatar)
                <div class="mt-2">
                    <small class="text-muted">Current Avatar:</small><br>
                    <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar" width="80" height="80" class="rounded-circle border mt-1">
                </div>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update User</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection