@extends('user.home')
@section('content')
<header class="masthead bg-primary text-white text-center">
    <img src="" alt="">
</header>
<div class="col-6 mx-auto">
    <div class="card p-3 m-5">
        <div class="card-body">
            <form method="POST" action="{{ route('transaksiuser.store') }}">
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
                  <label for="exampleInputEmail1" class="form-label">Travel packages</label>
                  <p class="border rounded p-2">{{ $travel->title }}</p>
                  <input type="text" name="travel_packages_id" class="form-control" value="{{ $travel->id }}" hidden>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Price</label>
                    <p class="border p-2 rounded">{{ $travel->price }}</p>
                    <input type="text" class="form-control" name="total" value="{{ $travel->price }}" hidden>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Visa</label>
                    <input type="text" class="form-control" name="visa" placeholder="Silahkan masukkan visa anda" autofocus>
                  </div>
                <div class="mb-3">
                    <label class="form-label">Pilih metode pembayaran</label>
                        <select name="pembayrans_id" class="form-select" aria-label="Default select example">
                                <option value="#">Silahkan pilih</option>
                               @foreach ($pembayaran as $pembayaran)
                               <option value="{{ $pembayaran->id }}">{{ $pembayaran->nama_metode }}</option>
                               @endforeach
                        </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>

@endsection
