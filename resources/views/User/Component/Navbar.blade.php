<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container">
        <a class="navbar-brand fw-normal" href="#"><img src="{{ asset('image/logo.jpeg') }}" width="40px" height="40px"
                alt=""> PUSBINDIKLAT GEMILANG </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('Home') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Profile') }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('AboutMe') }}">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Rules')}}">Tata Tertib</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Prestasi') }}"> Prestasi </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Register') }}"> Pendaftaran </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
