@extends('app')
@section('content')
<!-- Paket Travel Section-->
<div class="carousel-inner" style="height: 40rem;">
    <div class="carousel-item active">
      <img src="{{ asset('img-scenery/gambar2.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img-scenery/gambar3.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img-scenery/gambar4.jpg') }}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<section class="page-section bg-white text-white mb-0" id="about">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-primary">Paket Travel</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Paket Travel Section Content-->
        <div class="row mx-5">
            @foreach ($travel as $travels)
            <div class="col-md-4">
                <div class="card mx-3 my-3" style="width: 18rem;">
                    <img src="{{ asset('img-scenery/gambar2.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-primary">{{ $travels->title }}</h5>
                      <p class="card-text text-primary" >{{ $travels->about }}</p>
                      <a href="{{ route('pakettravel.show', $travels->id) }}" class="btn btn-primary">Lihat Detail Paket</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
    </div>
</section>
@endsection
