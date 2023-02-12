@extends('admin.dashboard')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ $title }}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">
            <a href="{{ route('metodepembayaran.index') }}">Metode Pembayaran</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Create Metode Pembayaran</li>
      </ol>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('metodepembayaran.store') }}" method="POST" class="mx-2">
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
                        <label for="title" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama_metode"  placeholder="Masukan nama metode pembayaran" autofocus>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-3 mb-2 w-100">Create</button>
                    </div>
               </form>
        </div>
    </div>
</div>
@endsection
