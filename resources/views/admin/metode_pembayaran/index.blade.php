@extends('admin.dashboard')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ $title }}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active" aria-current="page">Pembayaran</li>
    </ol>
    <a href="{{ route('metodepembayaran.create') }}" class="btn btn-outline-primary mb-4" style="width: 15rem">Create Metode Pembayaran</a>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th>Nama metode pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pembayarans as $pembayaran)
                        <tr>
                            <td>
                                <p>{{ $pembayaran->nama_metode }}</p>
                            </td>
                            <td class="text-end">
                                <a href="{{ route('metodepembayaran.show', $pembayaran->id) }}" class="btn btn-success">
                                    <i class="bi bi-eye-fill"></i>
                                </a>
                                <a href="{{ route('metodepembayaran.edit', $pembayaran->id) }}" class="btn btn-warning">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                                <form action="{{ route('metodepembayaran.destroy', $pembayaran->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button href="{{ route('logout') }}"  onclick="return confirm('Apakah anda akan menghapus {{ $pembayaran->title }}?')" class="btn btn-danger">
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
