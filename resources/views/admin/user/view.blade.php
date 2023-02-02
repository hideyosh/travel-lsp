@extends('admin.home')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ $title }}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">
            <a href="{{ route('user.index') }}">User</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Detail User</li>
    </ol>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <tr>
                    <td>Name</td>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>{{ $user->username }}</td>
                </tr>
                <tr>
                    <td>Role</td>
                    <td>{{ $user->role }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $user->email }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
