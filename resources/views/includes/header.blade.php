    <!-- Scripts -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ URL('/') }}">
        <img src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            Smart Clinic
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="{{ URL('/') }}">Home</a>
                <a class="nav-item nav-link" href="{{ URL('/dokter/') }}">Cari Dokter</a>
                <a class="nav-item nav-link" href="#">Tentang Kami</a>
                <a class="nav-item nav-link" href="#">Kontak</a>
            </div>
        </div>
    </div>
</nav>