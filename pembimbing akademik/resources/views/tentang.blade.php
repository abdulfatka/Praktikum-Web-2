<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>STT Terpadu Nurul Fikri</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('landing/img/logokampus.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('landing/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('landing/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('landing/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('landing/img/logokampus.png') }}"></i>STT Terpadu Nurul Fikri</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="{{ url('/') }}" class="nav-item nav-link ">Beranda</a>
                        <a href="{{ url('/tentang') }}" class="nav-item nav-link active">Tentang</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Program Studi</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ url('/proditi') }}" class="dropdown-item">Teknik Informatika</a>
                                <a href="{{ url('/prodisi') }}" class="dropdown-item">Sistem Informasi</a>
                                <a href="{{ url('/prodibd') }}" class="dropdown-item">Bisnis Digital</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ url('/visimisi') }}" class="dropdown-item">Visi Misi</a>
                                <a href="{{ url('/team') }}" class="dropdown-item">Team Members</a>
                                <a href="{{ url('/profildosen') }}" class="dropdown-item">Profil Dosen</a>
                            </div>
                        </div>

                    </div>
                    @if (Route::has('login'))
                    @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-primary rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Dashboard
                    </a>
                    @else
                    <a href="{{ route('login') }}" class="me-3 btn btn-primary rounded-md py-2 px-3 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Masuk
                    </a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-primary rounded-md py-2 px-3 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Daftar
                    </a>
                    @endif
                    @endauth
                    @endif
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Profil STT Terpadu Nurul Fikri</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Tentang</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="{{ asset('landing/img/tentang1.png') }}">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="{{ asset('landing/img/tentang2.png') }}" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="{{ asset('landing/img/tentang3.png') }}">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="{{ asset('landing/img/tentang4.png') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Tentang kami</h5>
                        <h1 class="mb-4">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('landing/img/logokampus.png') }}" style="width: 65px; height: 45px;">
                            Sejarah Perjalanan Berdirinya Sekolah Tinggi Teknologi Terpadu Nurul Fikri
                        </h1>
                        <p class="mb-4">Sekolah Tinggi Teknologi Terpadu Nurul Fikri (populer disebut STT-NF) merupakan perguruan tinggi yang memadukan keilmuan praktis di bidang teknologi informasi dengan pengembangan kepribadian islami, kompeten dan berkarakter. Pada tahun 2012, STT-NF resmi berdiri berdasarkan SK Menteri Pendidikan dan Kebudayaan Nomor 269/E/O/2012.</p>
                        <p class="mb-4">Pada September 2016, STT-NF meluluskan 37 orang mahasiswa/i Angkatan pertama Tahun 2012. Pada Februari 2018, STT-NF meluluskan 52 orang mahasiswa/i Angkatan kedua Tahun 2013 & 2014. Dan Pada September 2019, STT-NF meluluskan 59 orang mahasiswa/i Angkatan ketiga Tahun 2014 & 2015. Alhamdulillah, seluruh alumni (100 persen) terserap oleh pasar kerja. Sebagian mahasiswa STT-NF ada yang sukses dalam dunia akademik, sambil bekerja sesuai dengan keahliannya, atau membangun start up (bisnis pemula) sesuai minat dan potensinya di dunia IT.</p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Years of</p>
                                        <h6 class="text-uppercase mb-0">Experience</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">100</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Popular</p>
                                        <h6 class="text-uppercase mb-0">Master</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="mb-4">Sejak awal berdirinya, STT-NF telah membina keilmuan praktis di bidang teknologi informasi serta mengembangkan kepribadian islami yang kompeten dan berkarakter.</p>
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <a class="btn btn-primary py-3 px-5" href="">Read More</a>
                            </div>
                            <div class="col-sm-6">
                                <a class="btn btn-dark py-3 px-5" href="">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Layanan</h4>
                        <a class="btn btn-link" href="">Tentang</a>
                        <a class="btn btn-link" href="">Kontak</a>
                        <a class="btn btn-link" href="">Reservasi</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Hotline</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Kampus A : Jl. Situ Indah 116, Tugu, Cimanggis, Depok, Jawa Barat.</p>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Kampus B: Jl. Raya Lenteng Agung No.20-21, RT.4/RW.1, Srengseng Sawah, Kec. Jagakarsa, Jakarta Selatan.</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>021-786.3191</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@nurulfikri.ac.id</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Hari Buka</h4>
                        <h5 class="text-light fw-normal">Senin - Jumat</h5>
                        <p>06.00 - 22.00 WIB</p>
                        <h5 class="text-light fw-normal">Sabtu</h5>
                        <p>06.00 - 18.00 WIB</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Masuk dan Verifikasi</h4>
                        <p>Nikmati kemudahan sistem autentikasi tunggal untuk mengakses semua layanan dengan satu akun.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Masuk</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">STT Terpadu Nurul Fikri</a>, All Right Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a class="border-bottom" href="https://htmlcodex.com">Team 2</a><br><br>
                            Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">Us</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Beranda</a>
                                <a href="">Profil</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('landing/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('landing/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('landing/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('landing/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('landing/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('landing/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('landing/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('landing/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('landing/js/main.js') }}"></script>
</body>

</html>
