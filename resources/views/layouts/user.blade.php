    <!doctype html>
    <html lang="en">

    <head>
        <title>Himaprosif</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700|Oswald:400,700" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
        <link rel="icon" href="{{asset('images/logo.png')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link href="{{asset('fontawesome/css/all.min.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('css/aos.css')}}">

        <!-- MAIN CSS -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>

    </head>

    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

        <div id="overlayer"></div>
        <div class="loader">
            {{-- <div class="spinner-border text-primary" role="status">
                <span class="sr-only text-dark">Loading...</span>
            </div> --}}
            <img src="{{asset('images/logo.png')}}" alt="Image" class="img-fluid">
        </div>

        <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <div class="top-bar">
            <div class="container">
            <div class="row">
                <div class="col-12">
                <a href="{{url('contact')}}" class=""><span class="mr-2  icon-envelope-open-o"></span> <span class="d-none d-md-inline-block">himaprosif.com</span></a>
                <span class="mx-md-2 d-inline-block"></span>
                <a href="https://wa.me/6283857317946" target="d-blank" class=""><span class="mr-2  icon-phone"></span> <span class="d-none d-md-inline-block">+6283857317946</span></a>


                <div class="float-right">

                    {{-- <a href="#" class=""><span class="mr-2  icon-line"></span> <span class="d-none d-md-inline-block">Line</span></a> --}}
                    <span class="mx-md-2 d-inline-block"></span>
                    <a href="https://www.youtube.com/channel/UC6gmtgTelEbnwXfIEoDh3QQ" class=""><span class="mr-2  icon-youtube"></span> <span class="d-none d-md-inline-block">Youtube</span></a>
                    <span class="mx-md-2 d-inline-block"></span>
                    <a href="https://instagram.com/himaprosifuinsa" class=""><span class="mr-2  icon-instagram"></span> <span class="d-none d-md-inline-block">Instagram</span></a>

                </div>

                </div>

            </div>

            </div>
        </div>

        <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

            <div class="container">
            <div class="row align-items-center position-relative">


                <div class="site-logo">
                    <a href="{{url('/')}}" class="navbar-brand">
                        <img src="{{asset('images/logo.png')}}" width="50" height="50">
                        <span class="text-primary">Himaprosif</span>
                    </a>
                {{-- <a href="index.html" class="text-black"><span class="text-primary">Sistem Informasi</a> --}}
                </div>

                <div class="col-12">
                <nav class="site-navigation text-right ml-auto " role="navigation">

                    <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                    <li><a href="{{url('/')}}" class="nav-link @yield('link-home')">Home</a></li>
                    <li><a href="{{url('berita-acara')}}" class="nav-link @yield('link-berita')">Berita & Acara</a></li>
                    <li class="has-children">
                        <a class="nav-link @yield('link-pendaftaran')">Pendaftaran</a>
                        <ul class="dropdown arrow-top">
                        <li><a href="{{url('register-mahasiswa-aktif')}}" class="nav-link">Mahasiswa SI aktif</a></li>
                        <li><a href="{{url('register-ifest')}}" style="color: grey" class="nav-link disabled text-secondary"><i class="fas fa-lock mr-2"></i> IT-festival</a></li>
                        <li><a href="{{url('register-proksi')}}" style="color: grey" class="nav-link disabled"><i class="fas fa-lock mr-2"></i> Panitia proksi</a></li>
                        </ul>
                    </li>
                    <li><a href="{{url('struktur-organisasi')}}" class="nav-link @yield('link-struktur')">Struktur Organisasi</a></li>
                    <li><a href="{{url('daftar-angkatan')}}" class="nav-link @yield('link-angkatan')">Daftar Angkatan</a></li>
                    {{-- <li><a href="{{url('materi')}}" class="nav-link @yield('link-materi')">Materi SI</a></li> --}}
                    <li><a href="{{url('galery')}}" class="nav-link @yield('link-galery')">Galery</a></li>
                    <li><a href="{{url('contact')}}" class="nav-link @yield('link-contact')">Contact us</a></li>
                    </ul>
                </nav>

                </div>

                <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

            </div>
            </div>

        </header>

        @yield('main')

        <footer class="site-footer">
            <div class="container">
            <div class="row">
                <div class="col-md-6">
                <div class="row">
                    <div class="col-md-7">
                    <h2 class="footer-heading mb-4">HIMAPROSIF</h2>
                    <p>Himpunan mahasiswa Sistem Informasi atau yang di singkat HIMAPROSIF UIN Sunan Ampel Surabaya merupakan sebuah organisasi mahasiswa internal dalam Kampus UINSA yang di tujukan untuk mengembangkan kreatifitas mahasiswa pada umumnya dan mahasiswa Sistem Informasi di UINSA pada khususnya</p>
                    </div>
                    <div class="col-md-4 ml-auto">
                    <h2 class="footer-heading mb-4">Features</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{url('/')}}" >Home</a></li>
                        <li><a href="{{url('berita-acara')}}">Berita & Acara</a></li>
                        <li><a href="{{url('struktur-organisasi')}}">Struktur Organisasi</a></li>
                        <li><a href="{{url('daftar-angkatan')}}">Daftar Angkatan</a></li>
                        {{-- <li><a href="{{url('materi')}}">Materi SI</a></li> --}}
                        <li><a href="{{url('galery')}}">Galery</a></li>
                        <li><a href="{{url('contact')}}">Contact us</a></li>
                    </ul>
                    </div>

                </div>
                </div>
                <div class="col-md-4 ml-auto">

                {{-- <div class="mb-5">
                    <h2 class="footer-heading mb-4">Subscribe to Newsletter</h2>
                    <form action="#" method="post" class="footer-suscribe-form">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                        <div class="input-group-append">
                        <button class="btn btn-primary text-white" type="button" id="button-addon2">Subscribe</button>
                        </div>
                    </div>
                </div> --}}


                <h2 class="footer-heading mb-4">Follow Us</h2>
                {{-- <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a> --}}
                <a href="https://instagram.com/himaprosifuinsa" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="https://www.youtube.com/channel/UC6gmtgTelEbnwXfIEoDh3QQ" class="pl-3 pr-3"><span class="icon-youtube"></span></a>
                </form>
                </div>
            </div>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                <div class="border-top pt-5">
                    <p class="copyright">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | HIMAPROSIF <i class="icon-heart text-danger" aria-hidden="true"></i>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                </div>
                </div>

            </div>
            </div>
        </footer>

        </div>

        <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/jquery.sticky.js')}}"></script>
        <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
        <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
        <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('js/aos.js')}}"></script>

        <script src="{{asset('js/main.js')}}"></script>


        </body>

    </html>
