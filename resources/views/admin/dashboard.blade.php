@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <p>Welcome to the Admin Dashboard! Here you can manage users and content.</p>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4>Manage Users</h4>
                </div>
                <div class="card-body">
                    <p>View, edit, and delete users.</p>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-primary">Go to User Management</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4>Manage Content</h4>
                </div>
                <div class="card-body">
                    <p>View, edit, and delete articles.</p>
                    <a href="{{ route('admin.content.index') }}" class="btn btn-primary">Go to Content Management</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
