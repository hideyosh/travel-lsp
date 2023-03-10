<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="mt-3">
                    <a class="nav-link {{ Route::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                </div>
                <a class="nav-link collapsed
                {{ Route::is('user.index', 'user.create' ,'user.edit' ,'user.show') ? 'active' : '' }}"
                href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon "><i class="fas fa-columns"></i></div>
                        Users
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="layout-static.html">Admin</a>
                        <a class="nav-link " href="{{ route('user.index') }}">User</a>
                    </nav>
                </div>
                <div>
                    <a class="nav-link
                    {{ Route::is('travelpackages.index', 'travelpackages.create' ,'travelpackages.edit' ,'travelpackages.show') ? 'active' : '' }}"
                    href="{{ route('travelpackages.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Paket Travel
                    </a>
                </div>
                <div>
                    <a class="nav-link
                    {{ Route::is('metodepembayaran.index', 'metodepembayaran.create' ,'metodepembayaran.edit' ,'metodepembayaran.show') ? 'active' : '' }}"
                    href="{{ route('metodepembayaran.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Metode Pembayaran
                    </a>
                </div>
                <div>
                    <a class="nav-link
                    {{ Route::is('transaksi.index', 'transaksi.create' ,'transaksi.edit' ,'transaksi.show') ? 'active' : '' }}"
                    href="{{ route('transaksi.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Transaksi
                    </a>
                </div>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>
