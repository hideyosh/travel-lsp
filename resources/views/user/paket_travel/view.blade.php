@extends('user.home')
@section('content')
<header class="masthead bg-primary text-white text-center">
    <img src="" alt="">
</header>
<!-- Content Section -->
<section class="page-section bg-white text-white mb-0" id="about">
    <div class="container">
        <h3 class="text-uppercase text-primary">{{ $travel->title }}</h3>
        <p class="text-dark">{{ $travel->about }}</p>
        <p class="text-dark">Rp {{ $travel->price }}</p>
        <p class="text-dark">{{ $travel->location }}</p>
        <p class="text-dark fw-bold">{{ $travel->departure_date }}</p>
        <p class="text-dark fw-bold">{{ $travel->duration }}</p>
        <div class="d-flex">
            <a href="/travelpaket" class="btn btn-primary">Back</a>
            <a href="" class="btn btn-primary ms-3">Book Now!!</a>
        </div>
    </div>

</section>
@endsection
