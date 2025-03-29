<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="index.html" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="assets/img/logos/Mask group.png" alt="Logo">
            {{-- <h1 class="sitename">Arsha</h1> --}}
        </a>

        @guest
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active">Beranda</a></li>
                <li><a href="#services">Cara Pemesanan</a></li>
                <li><a href="#pricing">Jadwal Perjalanan</a></li>
                <li><a href="{{ route('login') }}" class="btn btnprimary px-3 py-2 rounded-pill">Login</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        @endguest
        @auth
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
                    <a href="{{ url('/riwayatpemesanan') }}"
                        class="{{ Request::is('riwayat pemesanan') ? 'active' : '' }}">
                        Riwayat Pemesanan
                    </a>
                </li>
                <li>
                    <a href="{{ url('/berita') }}" class="{{ Request::is('berita') ? 'active' : '' }}">
                        Berita
                    </a>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    
        <a class="btn-getstarted d-flex align-items-center gap-2" href="{{ url('/profil') }}">
            <img src="{{ Auth::user()->img ? asset('storage/' . Auth::user()->img) : asset('/assets/img/default-profile.jpg') }}"
                alt="User Profile" class="user-photo">
            <span>{{ Auth::user()->name }}</span>
        </a> 
        @endauth
    </div>
</header>
