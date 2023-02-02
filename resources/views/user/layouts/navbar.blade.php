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
                    <li class="nav-item dropdown mx-0 mx-lg-1">
                        <a class="nav-link dropdown-toggle py-3 px-0 px-lg-3" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user fa-fw"></i>
                            @if(Auth::check())
                                <span class="d-none d-xl-inline-block text-white ms-1">{{Auth::user()->name}}</span>
                            @endif
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                            <li>
                                <form class="dropdown-item" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger "> Logout </button>
                                </form>
                            </li>
                        </ul>
                    </li>
            </ul>
        </div>
    </div>
</nav>