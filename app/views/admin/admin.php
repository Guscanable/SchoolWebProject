<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<div class="jumbotron bg-transparent" data-aos="fade-down" data-aos-duration="2000">
</div>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center  background-dark ">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="<?= BASEURL; ?>/dashboard">SMK PGRI 2 Gianyar</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#news">Berita</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Portofolio</a></li>
                    <li><a class="nav-link scrollto" href="#team">Tenaga Pendidik</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                    <li><a class="nav-link scrollto" href="<?= BASEURL; ?>/auth/logout">Logout</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">
        <!-- ======= Cta Section ======= -->
        <section id="news" class="cta">
            <div class="container">

                <div class="row" data-aos="zoom-out">
                    <div class="jumbotron bg-transparent" data-aos="fade-right" data-aos-duration="2000">
                        <h1 class="display-4 text-center text-white"></h1>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- Start Informations Dashboard -->
        <div class="container mt-5 mb-5">
            <div class="section-title" data-aos="zoom-out">
                <h2>Terbitkan Berita</h2>
                <p>SMAN 1 GIANYAR</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6" data-aos="fade-up-right" data-aos-duration="2000">
                    <div class="card mb-3" style="width: 100%;">
                        <div class="card-header text-center bg-primary text-white">
                            <i class="fas fa-upload"></i>&nbsp;Unggah Berita
                        </div>
                        <div class="card-body">
                            <form action="<?= BASEURL; ?>/dashboard/task" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="nama_tugas">Judul Berita</label>
                                    <input type="text" class="form-control" id="nama_tugas" name="nama_tugas">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="desk_tugas" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="deadline">Tanggal</label>
                                    <input type="date" class="form-control" id="deadline" name="deadline">
                                </div>
                                <div class="form-group">
                                    <label for="berkas">Pilih Gambar</label><br>
                                    <input type="file" name="berkas" />
                                </div>
                                <hr>
                                <input class="btn btn-success" type="submit" name="upload" value="Terbitkan Berita" />
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up-left" data-aos-duration="2000">
                    <div class="card mb-3" style="width: 100%;">
                        <div class="card-header text-center bg-warning text-white">
                            <i class="fas fa-tasks"></i>&nbsp;Daftar Tugas
                        </div>
                        <div class="card-body">
                            <?php foreach ($data[4] as $row) : ?>
                                <div class="card border-primary mb-3">
                                    <h5 class="card-header text-dark"><?= $row['nama_tugas'] ?></h5>
                                    <div class="card-body">
                                        <h6><i><?= $row['mapel'] ?></i></h6>
                                        <a class="badge badge badge-success p-2"><i class="fas fa-clock"></i>&nbsp;Deadline : <?= $row['deadline'] ?></a><br>
                                        <a href="<?= BASEURL; ?>/dashboard/detail_taskGuru?id=<?= $row['id_tugas'] ?>" class="badge badge badge-primary p-2 mt-1"><i class="fas fa-folder-open"></i>&nbsp;Buka Tugas</a>
                                        <hr>
                                        <a href="<?= BASEURL; ?>/dashboard/update_task?id=<?= $row['id_tugas'] ?>" class="badge badge badge-warning p-2 mt-1 mr-2"><i class="fas fa-fas fa-edit"></i>&nbsp;Edit Tugas</a>
                                        <a href="<?= BASEURL; ?>/dashboard/deleteTask?id=<?= $row['id_tugas'] ?>" class="badge badge badge-danger p-2 mt-1"><i class="fas fa-trash-alt"></i>&nbsp;Hapus Tugas</a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Informations Dashboard -->


        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Edit Portofolio</h2>
                    <p>SMAN 1 GIANYAR</p>
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
                            <h4>App 1</h4>
                            <p>App</p>
                            <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Edit Tenaga Pendidik</h2>
                    <p>SMAN 1 GIANYAR</p>
                </div>

                <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-12 col-md-18 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up">
                            <div class="member-img">
                                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="#"><i class="bi bi-envelope"></i></a>
                                    <a href=""><i class="bi bi-twitter"></i></a>
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

                    <div class="col-lg-12 col-md-18 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up">
                            <div class="member-img">
                                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="#"><i class="bi bi-envelope"></i></a>
                                    <a href=""><i class="bi bi-twitter"></i></a>
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

                    <div class="col-lg-12 col-md-18 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up">
                            <div class="member-img">
                                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="#"><i class="bi bi-envelope"></i></a>
                                    <a href=""><i class="bi bi-twitter"></i></a>
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

                    <div class="col-lg-12 col-md-18 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up">
                            <div class="member-img">
                                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="#"><i class="bi bi-envelope"></i></a>
                                    <a href=""><i class="bi bi-twitter"></i></a>
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
                    <div class="text-center"><button class="">Edit Tenaga Pendidik</button></div>
                </div>
            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Hubungi Kami</h2>
                    <p>SMAN 1 GIANYAR</p>
                </div>

                <div class="row mt-5">

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
                </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>SMAN 1 GIANYAR</h3>
            <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>Developer Teams</span></strong>. All Rights Reserved
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
    <script>
        AOS.init();
        var typed = new Typed('.display-4', {
            strings: ["Selamat Datang <br> <?= $_SESSION['auth']['name']; ?>", "Di Sistem Informasi<br>Online Pelajar"],
            typeSpeed: 150,
            loop: true,
            showCursor: false
        });
    </script>

</body>

</html>