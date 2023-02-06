@extends('admin.dashboard')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ $title }}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">
            <a href="{{ route('travelpackages.index') }}">Travel Package</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Detail Travel Package</li>
    </ol>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <tr>
                    <td>Title</td>
                    <td>{{ $travel->title }}</td>
                </tr>
                <tr>
                    <td>Location</td>
                    <td>{{ $travel->location }}</td>
                </tr>
                <tr>
                    <td>About</td>
                    <td>{{ $travel->about }}</td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td>{{ $travel->price }}</td>
                </tr>
                <tr>
                    <td>Depature date</td>
                    <td>{{ $travel->departure_date  }}</td>
                </tr>
                <tr>
                    <td>Duration</td>
                    <td>{{ $travel->duration  }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
