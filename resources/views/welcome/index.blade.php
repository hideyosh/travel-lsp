@extends('app')
@section('content')
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
                         <p class="text-center">Data not define</p>
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
<!-- Paket Section-->
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
        <div class="row mx-5">
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
        </div>
        <div class="text-center mt-5">
        <a href="{{ route('welcome.pakettravel') }}" class="btn btn-outline-light py-2" style="width: 20rem">Lihat Selengkapnya</a>
    </div>
    </div>
</section>
<!-- Contact Section-->
<section class="page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Testimoni</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Testimoni Section -->
        <div class="row mx-5">
            <div class="col-md-4">
                <div class="card mx-3" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-center">Jim</h5>
                      <p class="card-text text-center" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe magni pariatur labore voluptatibus nulla dignissimos ipsa delectus? Inventore dicta doloremque explicabo, voluptate ullam sapiente sequi quidem architecto asperiores suscipit expedita?</p>
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="card mx-3" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-center">Budi</h5>
                      <p class="card-text text-center" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe magni pariatur labore voluptatibus nulla dignissimos ipsa delectus? Inventore dicta doloremque explicabo, voluptate ullam sapiente sequi quidem architecto asperiores suscipit expedita?</p>
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="card mx-3" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-center">Azmi</h5>
                      <p class="card-text text-center" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe magni pariatur labore voluptatibus nulla dignissimos ipsa delectus? Inventore dicta doloremque explicabo, voluptate ullam sapiente sequi quidem architecto asperiores suscipit expedita?</p>
                    </div>
                  </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="" class="btn btn-outline-dark py-2" style="width: 20rem">Lihat Selengkapnya</a>
        </div>
    </div>
</section>

@endsection
