@extends('app')
@section('content')
<!-- Paket Travel Section-->
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
                <div class="card mx-3" style="width: 18rem;">
                    <img src="{{ asset('img-scenery/gambar2.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-primary">{{ $travels->title }}</h5>
                      <p class="card-text text-primary" >{{ $travels->about }}</p>
                      <a href="#" class="btn btn-primary">Lihat Detail Paket</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
    </div>
</section>
@endsection
