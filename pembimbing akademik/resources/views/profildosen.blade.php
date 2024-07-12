<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title') - STT Terpadu Nurul Fikri</title>
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
    <link href="{{ asset('landing/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">

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
                        <a href="{{ url('/tentang') }}" class="nav-item nav-link">Tentang</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Program Studi</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ url('/proditi') }}" class="dropdown-item">Teknik Informatika</a>
                                <a href="{{ url('/prodisi') }}" class="dropdown-item">Sistem Informasi</a>
                                <a href="{{ url('/prodibd') }}" class="dropdown-item">Bisnis Digital</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Profil</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ url('/visimisi') }}" class="dropdown-item ">Visi Misi</a>
                                <a href="{{ url('/team') }}" class="dropdown-item ">Team Members</a>
                                <a href="{{ url('/profildosen') }}" class="dropdown-item active">Profil Dosen</a>
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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Profile Dosen STT Terpadu Nurul Fikri</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Profil</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Profil Dosen</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Testimonial Start -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="section-title ff-secondary text-center text-primary fw-normal">Jelajahi Dosen Program Studi</h5>
                        <h1 class="mb-5">Teknik Informatika</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item rounded pt-3">
                                <div class="p-4">
                                    <img class="mb-3 img-fluid flex-shrink-0 rounded-box" src="{{ asset('landing/img/pak reza.jpg') }}" style="width: 250px; height: 270px;">
                                    <h5 class="text-start text-primary">Reza Primardiansyah, S.T, M.Kom</h5>
                                    <p>Posisi / Jabatan : Dosen</p>
                                    <p>NIDN : 427057704</p>
                                    <p>Program Studi : Teknik Informatika</p>
                                    <p>Bidang Keahlian : Teknik Informatika</p>
                                    <p>Penelitian : https://scholar.google.co.id/citations?user=96sOEM8AAAAJ&hl=en</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="service-item rounded pt-3">
                                <div class="p-4">
                                    <img class="mb-3 img-fluid flex-shrink-0 rounded-box" src="{{ asset('landing/img/Pak Tubagus.jpg') }}" style="width: 250px; height: 250px;">
                                    <h5 class="text-start text-primary">Tubagus Risky Dharmawan, S.T, M.Sc</h5>
                                    <p>Posisi / Jabatan : Dosen</p>
                                    <p>NIDN : 410089103</p>
                                    <p>Program Studi : Teknik Informatika</p>
                                    <p>Bidang Keahlian : Cloud & Infrastruktur Jaringan</p>
                                    <p>Penelitian : https://scholar.google.co.id/citations?user=pPhbLnAAAAAJ&hl=en</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="service-item rounded pt-3">
                                <div class="p-4">
                                    <img class="mb-3 img-fluid flex-shrink-0 rounded-box" src="{{ asset('landing/img/Pak-Rojul.jpg') }}" style="width: 250px; height: 250px;">
                                    <h5 class="text-start text-primary">Dr.Sirojul Munir, S.Si, M.Kom</h5>
                                    <p>Posisi / Jabatan : Dosen</p>
                                    <p>NIDN : 0414047101</p>
                                    <p>Program Studi : Teknik Informatika</p>
                                    <p>Bidang Keahlian : Software Engineering</p>
                                    <p>Jabatan Fungsional : Assisten Ahli</p>
                                    <p>Penelitian : https://scholar.google.co.id/citations?user=LpRsKx8AAAAJ&hl=en</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                            <h1 class="mb-5 mt-5">Sistem Informasi</h1>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item rounded pt-3">
                                <div class="p-4">
                                    <img class="mb-3 img-fluid flex-shrink-0 rounded-box" src="{{ asset('landing/img/bu-Misna.webp') }}" style="width: 250px; height: 270px;">
                                    <h5 class="text-start text-primary">Misna Asqia, S.Kom, M.Kom</h5>
                                    <p>Posisi / Jabatan : Dosen</p>
                                    <p>NIDN : 0407129002</p>
                                    <p>Program Studi : Sistem Informasi</p>
                                    <p>Bidang Keahlian : Sistem Informasi</p>
                                    <p>Jabatan Fungsional : Assisten Ahli</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="service-item rounded pt-3">
                                <div class="p-4">
                                    <img class="mb-3 img-fluid flex-shrink-0 rounded-box" src="{{ asset('landing/img/Pak-Rusmanto.webp') }}" style="width: 250px; height: 270px;">
                                    <h5 class="text-start text-primary">Drs. Rusmanto, M.M</h5>
                                    <p>Posisi / Jabatan : Dosen</p>
                                    <p>NIDN : 0423076303</p>
                                    <p>Program Studi : Sistem Informasi</p>
                                    <p>Bidang Keahlian : Sistem Informasi</p>
                                    <p>Jabatan Fungsional : Asisten Ahli</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="service-item rounded pt-3">
                                <div class="p-4">
                                    <img class="mb-3 img-fluid flex-shrink-0 rounded-box" src="{{ asset('landing/img/bu-Ami.webp') }}" style="width: 250px; height: 270px;">
                                    <h5 class="text-start text-primary">Dr. Amaliah Rahmah, S.T, M.T</h5>
                                    <p>Posisi / Jabatan : Dosen</p>
                                    <p>NIDN : 402018701</p>
                                    <p>Program Studi : Bisnis Digital</p>
                                    <p>Bidang Keahlian : Sistem Informasi</p>
                                    <p>Jabatan Fungsional : Assiten Ahli</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                            <h1 class="mb-5 mt-5">Bisnis Digital</h1>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item rounded pt-3">
                                <div class="p-4">
                                    <img class="mb-3 img-fluid flex-shrink-0 rounded-box" src="{{ asset('landing/img/pak-Mukhlison.webp') }}" style="width: 230px; height: 270px;">
                                    <h5 class="text-start text-primary">Tri Mukhlison Anugrah, S.E., M.M</h5>
                                    <p>Posisi / Jabatan : Dosen</p>
                                    <p>NIDN : 33304490</p>
                                    <p>Program Studi : TBisnis Digital</p>
                                    <p>Latar Belakang :Ilmu Ekonomi - UI - 2011</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="service-item rounded pt-3">
                                <div class="p-4">
                                    <img class="mb-3 img-fluid flex-shrink-0 rounded-box" src="{{ asset('landing/img/Pak-Panji.png') }}" style="width: 230px; height: 270px;">
                                    <h5 class="text-start text-primary">Krisna Panji, S.Kom, M.M</h5>
                                    <p>Posisi / Jabatan : Dosen</p>
                                    <p>NIDN : 52305630</p>
                                    <p>Program Studi :Bisnis Digital</p>
                                    <p>Latar Belakang : Teknik Informatika - STT Terpadu Nurul Fikri - 2016</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="service-item rounded pt-3">
                                <div class="p-4">
                                    <img class="mb-3 img-fluid flex-shrink-0 rounded-box" src="{{ asset('landing/img/bu-Betty.png') }}" style="width: 230px; height: 270px;">
                                    <h5 class="text-start text-primary">Betty Amalia, S.E, M.M</h5>
                                    <p>Posisi / Jabatan : Dosen</p>
                                    <p>NIDN : 921232330</p>
                                    <p>Program Studi : Bisnis Digital</p>
                                    <p>Latar Belakang : Manajemen - Institut Pertanian Bogor - 2008</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



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