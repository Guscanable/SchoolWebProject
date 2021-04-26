<!DOCTYPE html>
<html lang="en">

<head>
    <title>SMK PGRI 2 Gianyar</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Icons -->
    <link href="<?= IMAGES; ?>/kemendikbud.png">

    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orelega+One&family=Roboto:wght@400&display=swap');
    </style>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/fef9209b86.js" crossorigin="anonymous"></script>

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- CSS File -->
    <link rel="stylesheet" href="<?= CSS ?>/style.css">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h3 class=" text-white">SMK PGRI 2 Gianyar</h3>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#about">Profil</a></li>
                    <li><a class="nav-link scrollto" href="#news">Pengumuman</a></li>
                    <li><a class="nav-link scrollto" href="#services">Fasilitas</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Portofolio</a></li>
                    <li><a class="nav-link scrollto" href="#team">Tenaga Pendidik</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
        <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

            <!-- Slide 1 -->
            <div class="carousel-item active background-image: url(assets/img/portfolio/portfolio-1.jpg)">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Selamat Datang <span>SMK PGRI 2 Gianyar</span></h2>
                    <p class="animate__animated animate__fadeInUp">Deskripsi singkat tentang sekolah, yang menggambarkan sekolah secara umum</p>
                    <a href="#news" class="btn-get-started animate__animated animate__fadeInUp scrollto">Selengkapnya</a>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Bagian 2</h2>
                    <p class="animate__animated animate__fadeInUp">Bagian ini dapat digunakan sebagai highlight tentang sekolah, bisa berupa deskripsi, berita, pengumuman dan lian-lain</p>
                    <a href="#news" class="btn-get-started animate__animated animate__fadeInUp scrollto">Selengkapnya</a>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Bagian 3</h2>
                    <p class="animate__animated animate__fadeInUp">Bagian ini dapat digunakan sebagai highlight tentang sekolah, bisa berupa deskripsi, berita, pengumuman dan lian-lain</p>
                    <a href="#news" class="btn-get-started animate__animated animate__fadeInUp scrollto">Selengkapnya</a>
                </div>
            </div>


            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
    </section><!-- End Hero -->


    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="features">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>SMK PGRI 2 Gianyar</h2>
                    <p>Profil</p>
                </div>

                <ul class="nav nav-tabs row d-flex">
                    <li class="nav-item col-3" data-aos="zoom-in">
                        <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                            <i class="ri-focus-3-line"></i>
                            <h4 class="d-none d-lg-block">Visi dan Misi</h4>
                        </a>
                    </li>
                    <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                            <i class="ri-quill-pen-fill"></i>
                            <h4 class="d-none d-lg-block">Sejarah Sekolah</h4>
                        </a>
                    </li>
                    <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                            <i class="ri-bookmark-3-line"></i>
                            <h4 class="d-none d-lg-block">Poin lainnya</h4>
                        </a>
                    </li>
                    <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="300">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
                            <i class="ri-bookmark-3-line"></i>
                            <h4 class="d-none d-lg-block">Poin lainnya</h4>
                        </a>
                    </li>
                </ul>

                <div class="tab-content" data-aos="fade-up">
                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                            <div class="col-lg-9 order-2 order-lg-1 mt-3 mt-lg-0">
                                <div class="card mb-3" style="max-width: 1080px;">
                                    <div class="col-md-12">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 order-1 order-lg-2 text-center">
                                <div class="card mb-3" style="max-width: 1080px;">
                                    <div class="col-md-12">
                                        <img src="assets/img/persegi-01.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-2">
                        <div class="row">
                            <div class="col-lg-9 order-2 order-lg-1 mt-3 mt-lg-0">
                                <div class="card mb-3" style="max-width: 1080px;">
                                    <div class="col-md-12">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 order-1 order-lg-2 text-center">
                                <div class="card mb-3" style="max-width: 1080px;">
                                    <div class="col-md-12">
                                        <img src="assets/img/persegi-01.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-3">
                        <div class="row">
                            <div class="col-lg-9 order-2 order-lg-1 mt-3 mt-lg-0">
                                <div class="card mb-3" style="max-width: 1080px;">
                                    <div class="col-md-12">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 order-1 order-lg-2 text-center">
                                <div class="card mb-3" style="max-width: 1080px;">
                                    <div class="col-md-12">
                                        <img src="assets/img/persegi-01.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-4">
                        <div class="row">
                            <div class="col-lg-9 order-2 order-lg-1 mt-3 mt-lg-0">
                                <div class="card mb-3" style="max-width: 1080px;">
                                    <div class="col-md-12">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 order-1 order-lg-2 text-center">
                                <div class="card mb-3" style="max-width: 1080px;">
                                    <div class="col-md-12">
                                        <img src="assets/img/persegi-01.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Features Section -->

        <!-- ======= Cta Section ======= -->
        <section id="news" class="cta">
            <div class="container">
                <div class="row" data-aos="zoom-out">
                    <div class="col-lg-9 text-center text-lg-start">
                        <div class="row row-cols-md-3">
                            <div class="col">
                                <div class="card text-white">
                                    <img src="assets/img/persegi-01.jpg" class="card-img" alt="...">
                                    <div class="card-img-overlay">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text">Last updated 3 mins ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-white">
                                    <img src="assets/img/persegi-01.jpg" class="card-img-top" alt="...">
                                    <div class="card-img-overlay">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text">Last updated 3 mins ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-white">
                                    <img src="assets/img/persegi-01.jpg" class="card-img-top" alt="...">
                                    <div class="card-img-overlay">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text">Last updated 3 mins ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="<?= BASEURL; ?>/dashboard/news"><i class="far fa-eye"></i>&nbsp;Tampilkan Semua</a>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>SMK PGRI 2 Gianyar</h2>
                    <p>Fasilitas</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box" data-aos="zoom-in-left">
                            <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
                            <h4 class="title"><a href="">Administrasi</a></h4>
                            <p class="description">Deksripsi singkat tentang fasilitas yang dimiliki oleh sekolah, atau bisa diisi dengan kelebihan fasilitas</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                        <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
                            <div class="icon"><i class="bi bi-book" style="color: #e9bf06;"></i></div>
                            <h4 class="title"><a href="">Perpustakaan</a></h4>
                            <p class="description">Deksripsi singkat tentang fasilitas yang dimiliki oleh sekolah, atau bisa diisi dengan kelebihan fasilitas</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
                        <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
                            <div class="icon"><i class="bi bi-card-checklist" style="color: #3fcdc7;"></i></div>
                            <h4 class="title"><a href="">Laboratorium</a></h4>
                            <p class="description">Deksripsi singkat tentang fasilitas yang dimiliki oleh sekolah, atau bisa diisi dengan kelebihan fasilitas</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5">
                        <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="300">
                            <div class="icon"><i class="ri-building-4-line" style="color:#41cf2e;"></i></div>
                            <h4 class="title"><a href="">Bangunan</a></h4>
                            <p class="description">Deksripsi singkat tentang fasilitas yang dimiliki oleh sekolah, atau bisa diisi dengan kelebihan fasilitas</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-5">
                        <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="400">
                            <div class="icon"><i class="bi bi-globe" style="color: #d6ff22;"></i></div>
                            <h4 class="title"><a href="">Lab. Komputer</a></h4>
                            <p class="description">Deksripsi singkat tentang fasilitas yang dimiliki oleh sekolah, atau bisa diisi dengan kelebihan fasilitas</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5">
                        <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="500">
                            <div class="icon"><i class="bi bi-clock" style="color: #4680ff;"></i></div>
                            <h4 class="title"><a href="">Pusat Olahraga</a></h4>
                            <p class="description">Deksripsi singkat tentang fasilitas yang dimiliki oleh sekolah, atau bisa diisi dengan kelebihan fasilitas</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>SMK PGRI 2 Gianyar</h2>
                    <p>Portofolio</p>
                </div>

                <ul id="portfolio-flters" class="d-flex justify-content-end" data-aos="fade-up">
                    <li data-filter="*" class="filter-active">Semua</li>
                    <li data-filter=".filter-app">Kegiatan</li>
                    <li data-filter=".filter-card">Prestasi</li>
                    <li data-filter=".filter-web">Lainnya</li>
                </ul>

                <div class="row portfolio-container" data-aos="fade-up">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>PPDB</h4>
                            <p>Penerimaan Siswa Baru SMK PGRI 2 Gianyar</p>
                            <a href="assets/img/portfolio/portfolio-1.jpg" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="assets/img/portfolio/portfolio-2.jpg" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>App</p>
                            <a href="assets/img/portfolio/portfolio-3.jpg" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Card 2</h4>
                            <p>Card</p>
                            <a href="assets/img/portfolio/portfolio-4.jpg" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Web 2</h4>
                            <p>Web</p>
                            <a href="assets/img/portfolio/portfolio-5.jpg" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>App</p>
                            <a href="assets/img/portfolio/portfolio-6.jpg" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Card 1</h4>
                            <p>Card</p>
                            <a href="assets/img/portfolio/portfolio-7.jpg" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Card 3</h4>
                            <p>Card</p>
                            <a href="assets/img/portfolio/portfolio-8.jpg" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="assets/img/portfolio/portfolio-9.jpg" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>SMK PGRI 2 Gianyar</h2>
                    <p>Tenaga Pendidik</p>
                </div>

                <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="col-lg-12 d-flex align-items-stretch">
                                <div class="member" data-aos="fade-up">
                                    <div class="member-img">
                                        <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                                        <div class="social">
                                            <a href="#"><i class="bi bi-envelope"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="member-info">
                                        <h4>Nama Pengajar</h4>
                                        <span>Jabatan Pengajar</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="col-lg-12 d-flex align-items-stretch">
                                <div class="member" data-aos="fade-up">
                                    <div class="member-img">
                                        <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                                        <div class="social">
                                            <a href="#"><i class="bi bi-envelope"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="member-info">
                                        <h4>Nama Pengajar</h4>
                                        <span>Jabatan Pengajar</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="col-lg-12 d-flex align-items-stretch">
                                <div class="member" data-aos="fade-up">
                                    <div class="member-img">
                                        <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                                        <div class="social">
                                            <a href="#"><i class="bi bi-envelope"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="member-info">
                                        <h4>Nama Pengajar</h4>
                                        <span>Jabatan Pengajar</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="col-lg-12 d-flex align-items-stretch">
                                <div class="member" data-aos="fade-up">
                                    <div class="member-img">
                                        <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                                        <div class="social">
                                            <a href="#"><i class="bi bi-envelope"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="member-info">
                                        <h4>Nama Pengajar</h4>
                                        <span>Jabatan Pengajar</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="<?= BASEURL ?>/dashboard/employe" class="btn justify-content-center"><i class=" far fa-eye"></i>&nbsp; Tampilkan Semua</a>
                </div>
            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>SMK PGRI 2 Gianyar</h2>
                    <p>Hubungi Kami</p>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Lokasi:</h4>
                                <p>Desa, Kecamatan, Gianyar, Bali</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Telepon:</h4>
                                <p>+62 0812 3456 7890</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>SMK PGRI 2 Gianyar</h3>
            <div class="copyright">
                &copy; Copyright <strong><span>SMK PGRI 2 Gianyar</span></strong>. All Rights Reserved
            </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>