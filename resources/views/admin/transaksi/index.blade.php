@extends('admin.dashboard')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Transaksi Table</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active" aria-current="page">Transaksi</li>
    </ol>
    <a href="{{ route('transaksi.create') }}" class="btn btn-outline-primary mb-4" style="width: 15rem">Create Transaksi</a>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th>Name</th>
                    <th>Travel Packages</th>
                    <th>Waktu Pemesanan</th>
                    <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksi as $transaksi)
                        <tr>
                            <td>
                                <p>{{ $transaksi->user->name }}</p>
                            </td>
                            <td>
                                <p>{{ $transaksi->travel_packages->title }}</p>
                            </td>
                            <td>
                                <p>{{ $transaksi->created_at }}</p>
                            </td>
                            <td>
                                <p>{{ $transaksi->status }}</p>
                            </td>
                            <td class="text-end">
                                <a href="{{ route('transaksi.show', $transaksi->id) }}" class="btn btn-success">
                                    <i class="bi bi-eye-fill"></i>
                                </a>
                                <a href="{{ route('transaksi.edit', $transaksi->id) }}" class="btn btn-warning">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                                <form action="{{ route('transaksi.destroy', $transaksi->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button href="{{ route('logout') }}"  onclick="return confirm('Apakah anda akan menghapus {{ $transaksi->title }}?')" class="btn btn-danger">
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
