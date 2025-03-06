
<div class="container-fluid container-xl position-relative d-flex align-items-center">
    <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
        <img src="{{ asset('assets/img/logos/Mask group.png') }}" alt="Logo">
    </a>

    <nav id="navmenu" class="navmenu">
        <ul>
            <li>
                <a href="{{ url('/home') }}" class="{{ Request::is('/home') ? 'active' : '' }}">
                    Beranda
                </a>
            </li>
            <li>
                <a href="{{ url('/pemesanan') }}" class="{{ Request::is('pemesanan') ? 'active' : '' }}">
                    Pemesanan
                </a>
            </li>
            <li>
                <a href="{{ url('/riwayat pemesanan') }}" class="{{ Request::is('riwayat pemesanan') ? 'active' : '' }}">
                    Riwayat Pemesanan
                </a>
            </li>
            <li>
                <a href="{{ url('/profil') }}" class="{{ Request::is('profil') ? 'active' : '' }}">
                    Profile
                </a>
            </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>
</div>