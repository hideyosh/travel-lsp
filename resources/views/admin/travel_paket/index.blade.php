@extends('admin.dashboard')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ $title }}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active" aria-current="page">Travel</li>
    </ol>
    <a href="{{ route('travelpackages.create') }}" class="btn btn-outline-primary mb-4" style="width: 15rem">Create Travel Packages</a>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th>Title</th>
                    <th>Location</th>
                    <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($travels as $travel)
                        <tr>
                            <td>
                                <p>{{ $travel->title }}</p>
                            </td>
                            <td>
                                <p>{{ $travel->location }}</p>
                            </td>
                            <td>
                                <p>{{ $travel->price }}</p>
                            </td>
                            <td class="text-end">
                                <a href="{{ route('travelpackages.show', $travel->id) }}" class="btn btn-success">
                                    <i class="bi bi-eye-fill"></i>
                                </a>
                                <a href="{{ route('travelpackages.edit', $travel->id) }}" class="btn btn-warning">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                                <form action="{{ route('travelpackages.destroy', $travel->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button href="{{ route('logout') }}"  onclick="return confirm('Apakah anda akan menghapus {{ $travel->title }}?')" class="btn btn-danger">
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
