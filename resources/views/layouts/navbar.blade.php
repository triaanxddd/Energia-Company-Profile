<nav class="navbar navbar-expand-lg">                
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <img src="{{ asset('logo') }}/energia-96x96.png" class="navbar-brand-image img-fluid" alt="Energia Transmedia">
            <span class="navbar-brand-text">
                Energia 
                <small style="color: yellow;">Transmedia</small>
            </span>
        </a>

        <!-- <div class="d-lg-none ms-auto me-3">
            <a class="btn custom-btn custom-border-btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Member Login</a>
        </div> -->

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-lg-auto">
                <li class="nav-item">
                    <a class="nav-link click-scroll {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link click-scroll {{ Request::is('about') ? 'active' : '' }}" href="{{ route('about') }}">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link click-scroll {{ Request::is('services*') ? 'active' : '' }}" href="{{ route('services') }}">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link click-scroll {{ Request::is('sertificates*') ? 'active' : '' }}" href="{{ route('sertificates') }}">Sertifikasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link click-scroll {{ Request::is('news*') ? 'active' : '' }}" href="{{ route('news') }}">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="/#section_5">Kontak Kami</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Lainnya</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ url('portfolio') }}">Gallery</a></li>

                        <li><a class="dropdown-item" href="{{ url('news') }}">News</a></li>

                        <li><a class="dropdown-item" href="{{ route('job-vacancy') }}">Lowongan</a></li>
                    </ul>
                </li>
            </ul>

            <div class="d-none d-lg-block ms-lg-3">
                <!-- <a class="btn custom-btn custom-border-btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Member Login</a> -->
                <a href="/login" class="btn custom-btn" style="border-radius:20px;">Login</a>
            </div>
        </div>
    </div>
</nav>