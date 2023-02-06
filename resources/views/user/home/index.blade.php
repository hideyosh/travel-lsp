@extends('user.home')
@section('content')
<!-- Carousel -->
<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
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

<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary">Data Statistic</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider mb-5">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">
            <!-- Portfolio Item 1-->
            <div class="col-md-4 col-lg-3 mb-5 mx-2">
                <div class="card" style="width: 18rem">
                    <div class="card-body">
                        <h5 class="text-center">Customers</h5>
                        <div class="icon d-flex" style="justify-content: center">
                            <span><i class="bi bi-person-circle fs-1"></i></span>
                        </div>
                         <p class="text-center fs-4">{{ $user }}</p>
                    </div>
                  </div>
            </div>
            <!-- Portfolio Item 2-->
            <div class="col-md-4 col-lg-3 mb-5 mx-3">
                <div class="card" style="width: 18rem">
                    <div class="card-body">
                        <h5 class="text-center">Countries</h5>
                        <div class="icon d-flex" style="justify-content: center">
                            <span><i class="bi bi-globe-americas fs-1"></i></span>
                        </div>
                         <p class="text-center">Data not define</p>
                    </div>
                  </div>
            </div>
            <!-- Portfolio Item 3-->
            <div class="col-md-4 col-lg-3 mb-5 mx-3">
                <div class="card" style="width: 18rem">
                    <div class="card-body">
                        <h5 class="text-center">Hotels</h5>
                        <div class="icon d-flex" style="justify-content: center">
                            <span><i class="bi bi-building fs-1"></i></span>
                        </div>
                         <p class="text-center">Data not define</p>
                    </div>
                  </div>
            </div>
            <!-- Portfolio Item 4-->
            <div class="col-md-4 col-lg-3 mb-5 mx-3">
                <div class="card" style="width: 18rem">
                    <div class="card-body">
                        <h5 class="text-center">Agents</h5>
                        <div class="icon d-flex" style="justify-content: center">
                            <span><i class="bi bi-people-fill fs-1"></i></span>
                        </div>
                         <p class="text-center">Data not define</p>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section-->
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">Paket Popular</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
        @foreach ($travel as $travel)
            <div class="col-md-4">
                <div class="card mx-3" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                            <h5 class="card-title text-primary">{{ $travel->title }}</h5>
                            <p class="card-text text-primary" >{{ $travel->about }}</p>
                            <a href="#" class="btn btn-primary px-5">Lihat</a>
                    </div>
                  </div>
            </div>
        @endforeach
        <div class="text-center mt-5">
            <a href="{{ route('pakettravel.index') }}" class="btn btn-outline-light py-2" style="width: 20rem">Lihat Selengkapnya</a>
        </div>
        </div>
    </div>
</section>
<!-- Contact Section-->
<section class="page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Us</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <h5 class="text-center">Anda Butuh Bantuan?</h5>
        <p class="text-center">Hubungi kami untuk bantuan atau informasi lebih lanjut melalui line telepon</p>
        <p class="text-center tw-bold">+62221 4222 32838</p>
    </div>
</section>
@endsection
