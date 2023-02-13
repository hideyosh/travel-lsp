@extends('admin.dashboard')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Transaksi Table</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active" aria-current="page">Transaksi</li>
    </ol>
    <div class="d-flex">
        <a href="{{ route('transaksi.create') }}" class="btn btn-outline-primary mb-4" style="width: 15rem">Create Transaksi</a>
        <a href="#" class="btn btn-outline-danger mb-4 ms-4 px-4">Create Transaksi</a>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th>Name</th>
                    <th>Travel Packages</th>
                    <th>Waktu Pemesanan</th>
                    <th>Status</th>
                    <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pdf as $row)
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
                            <td>
                                <p>{{ $transaksi->total }}</p>
                            </td>
                            <td>
                                <p>{{ $transaksi->visa }}</p>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
