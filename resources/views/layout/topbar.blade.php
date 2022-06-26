<link rel="stylesheet" href="{{ asset('assets-user/css/notification.css') }}">

<div data-aos="fade-down" data-aos-duration="500">
    <div class="top-bar top-bar-type1">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12 d-flex align-items-center">
                    <div class="d-inline-block">
                        <a href="#" title="Datetime" class="d-inline-block text-white px-2">
                            <i class="fa-solid fa-clock d-inline-block mx-2"></i>
                            <span id="realtimeCounter"></span>
                        </a>
                        <script src="{{ asset('assets-user/js/realtimeCounter.js') }}"></script>
                    </div>
                    <div class="d-inline-block">
                        <a href="#" title="Phone" class="d-inline-block text-white px-2">
                            <i class="fa-solid fa-phone d-inline-block mx-2"></i>
                            0361829949
                        </a>
                    </div>
                    <div class="d-inline-block">
                        <a href="#" title="Email" class="d-inline-block text-white px-2">
                            <i class="fa-solid fa-envelope d-inline-block mx-2"></i>
                            info@polresbadung.id
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-12 d-flex justify-content-md-end justify-content-center">
                </div>
            </div>
        </div>
    </div>

    {{-- Navbar --}}
    <header id="header" class="header header-type1 bg-header-s1 bg-color" data-aos="fade-down"
        data-aos-duration="500">
        <div class="container">
            <div class="flex-header d-flex">
                <div id="logo" class="logo d-flex align-items-center justify-content-start">
                    <a href="/" title="Logo">
                        <img src="{{ asset('assets-user/img/logo-main.png') }}" data-width="150" data-height="38"
                            alt="images" data-retina="{{ asset('assets-user/img/logo-main.png') }}">
                    </a>
                </div>
                <div class="content-menu d-flex align-items-center justify-content-end">
                    <div class="nav-wrap">
                        <div class="btn-menu"><span></span></div>
                        <nav id="mainnav" class="mainnav">
                            <ul class="menu">
                                <li>
                                    <a href="/">Beranda</a>
                                </li>
                                <li>
                                    <a href="#">Profil</a>
                                    <ul class="sub-menu">
                                        <li><a href="/visimisi">Visi & Misi</a></li>
                                        <li><a href="/sejarah">Sejarah</a></li>
                                        <li><a href="/tentangpolri">Tentang Polri</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="/kontak">Kontak</a>
                                </li>
                                <li class="position-relative">
                                    <button id="notification-button" class="btn btn-lg btn-light">
                                        <i class="fa-solid fa-bell"></i>
                                    </button>

                                    <div id="notification-box" class="d-none position-absolute mt-4"
                                        style="left: -300px;">
                                        <div class="card">
                                            <div class="card-body" style="width: 450px; padding:0">
                                                <a href="#" class="d-block notification">Notifikasi 1</a>
                                                <a href="#" class="d-block notification">Notifikasi 2</a>
                                                <a href="#"
                                                    class="d-block notification notification-readed">Notifikasi 3</a>
                                                <hr>
                                                <center>
                                                    <a href="#" class="d-inline-block mb-3">Tampilkan semua
                                                        notifikasi</a>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    {{-- <div class="flat-appointment btn-linear hv-linear-gradient">
                        <a href="/daftar" class="font-style linear-color border-corner">Daftar</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </header>
</div>
