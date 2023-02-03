@extends('admin.dashboard')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ $title }}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">
            <a href="{{ route('travelpackages.index') }}">Travel</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Edit Paket Travel</li>
      </ol>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('travelpackages.update', $travel->id) }}" method="POST" class="mx-2">
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
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $travel->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="about" class="form-label">About</label>
                        <input type="text" class="form-control" name="about" value="{{ $travel->about }}">
                    </div>
                    <div class="mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control" name="location" value="{{ $travel->location }}">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" name="price" value="{{ $travel->price }}">
                    </div>
                    <div class="mb-3">
                        <label for="departure_date" class="form-label">Departure Date</label>
                        <input type="date" class="form-control" name="departure_date" value="{{ $travel->departure_date }}">
                    </div>
                    <div class="mb-3">
                        <label for="duration" class="form-label">Duration</label>
                        <input type="text" class="form-control" name="duration" value="{{ $travel->duration }}">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-3 mb-2 w-100">Create</button>
                    </div>
               </form>
        </div>
    </div>
</div>
@endsection
