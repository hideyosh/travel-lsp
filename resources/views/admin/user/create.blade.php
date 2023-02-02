@extends('admin.home')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ $title }}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">
            <a href="{{ route('user.index') }}">User</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Create User</li>
      </ol>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('user.store') }}" method="POST" class="mx-2">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Masukan nama" value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="emai0l" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Masukan email" value="{{ old('email') }}">
                    </div>
                    <div class="mb-3">
                        <label for="telepon" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Masukan username" value="{{ old('username') }}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Masukan password">
                    </div>
                    <div class="mb-3">
                        <label for="confirmation_password" class="form-label">Confirmation Password</label>
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Masukan konfirmasi password">
                    </div>
                    <div class="mb-3">
                        <label>Role</label>
                        <select name="role" class="form-select" aria-label="Default select example">
                                {{-- <option value="admin">Admin</option> --}}
                                <option value="user">User</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-3 mb-2 w-100">Create</button>
                    </div>
               </form>
        </div>
    </div>
</div>
@endsection
