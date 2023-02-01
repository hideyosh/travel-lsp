<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Travel Sir</title>
        <!-- Icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('template/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Travel sir</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('welcome') }}">Home</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#">Paket Travel</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#">Promo</a>
                        </li>
                        <li class="nav-item dropdown py-2">
                            <a class="nav-link dropdown-toggle align-items-center rounded" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Service
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Passport</a></li>
                              <li><a class="dropdown-item" href="#">VISA</a></li>
                            </ul>
                          </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('login') }}">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    {{-- <img src="..." class="d-block w-100" alt="..."> --}}
                  </div>
                  <div class="carousel-item">
                    {{-- <img src="..." class="d-block w-100" alt="..."> --}}
                  </div>
                  <div class="carousel-item">
                    {{-- <img src="..." class="d-block w-100" alt="..."> --}}
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </header>
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
                <div class="row mx-5">
                    <div class="col-md-4">
                        <div class="card mx-3" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title text-primary">Maldives</h5>
                              <p class="card-text text-primary" >Ayo liburan ke pantai Maldives!!!</p>
                              <a href="#" class="btn btn-primary">Lihat</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mx-3" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title text-primary">Greenland</h5>
                              <p class="card-text text-primary" >Ayo liburan ke pantai Greenland!!!</p>
                              <a href="#" class="btn btn-primary">Lihat</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mx-3" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title text-primary">Iceland</h5>
                              <p class="card-text text-primary" >Ayo liburan ke pantai Iceland!!!</p>
                              <a href="#" class="btn btn-primary">Lihat</a>
                            </div>
                          </div>
                    </div>
                </div>
                <div>
                    <a href="" class="btn btn-outline-light" style="color" >asdq</a>
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
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            2218 John Daniel Drive
                            <br />
                            Clark, MO 65243
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">About Freelancer</h4>
                        <p class="lead mb-0">
                            Freelance is a free to use, MIT licensed Bootstrap theme created by
                            <a href="http://startbootstrap.com">Start Bootstrap</a>
                            .
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Your Website 2022</small></div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('template/js/scripts.js') }}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
