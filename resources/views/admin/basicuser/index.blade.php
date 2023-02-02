@extends('admin.home')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ $title }}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active" aria-current="page">User</li>
    </ol>
    <a href="{{ route('user.create') }}" class="btn btn-outline-primary mb-4" style="width: 15rem">Create User</a>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th>Name</th>
                    <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>
                                <p>{{ $user->name }}</p>
                            </td>
                            <td>
                                <p>{{ $user->email }}</p>
                            </td>
                            <td class="text-end">
                                <a href="{{ route('user.show', $user->id) }}" class="btn btn-success">
                                    <i class="bi bi-eye-fill"></i>
                                </a>
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                                <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button href="{{ route('logout') }}"  onclick="return confirm('Apakah anda akan menghapus data ini?')" class="btn btn-danger">
                                        <i class="bi bi-trash-fill"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
