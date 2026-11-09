@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Customer Accounts</h2>
</div>
<div class="card shadow-sm">
    <table class="table table-striped mb-0">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
<tr>
    <td>{{ $customer->id }}</td>
    <td>{{ $customer->full_name }}</td>
    <td>{{ $customer->email }}</td>
    <td>{{ $customer->phone }}</td>
</tr>
@endforeach
        </tbody>
    </table>
</div>
@endsection