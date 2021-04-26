<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orelega+One&family=Roboto:wght@400&display=swap');
    </style>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/fef9209b86.js" crossorigin="anonymous"></script>

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Admin CSS -->
    <link rel="stylesheet" href="<?= CSS ?>/news.css">

    <title>Pengumuman</title>

</head>

<body>
    <nav class="navbar">
        <div class="container">
            <div class="navbar-brand"><i class="fas fa-bullhorn"></i></i>&nbsp;
                Pengumuman
            </div>
        </div>
    </nav>

    <div class="container info-wrapper rounded mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item">Pengumuman</li>
                <li class="breadcrumb-item active" aria-current="page"><a href="<?= $_SERVER['REQUEST_URI']; ?>">Dashboard</a></li>
            </ol>
        </nav>
    </div>

    <!-- Start Pengumuman -->
    <div class="container mb-5">
        <div class="row mb-5" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <?php foreach ($data as $row) : ?>
                            <div class="card border-dark mb-3">
                                <h5 class="card-header text-dark"><?= $row['judul'] ?></h5>
                                <div class="card-body">
                                    <h6><i><?= $row['penulis'] ?></i></h6>
                                    <p class="card-text"><?= $row['deskripsi']; ?></p>
                                    <a href="<?= BASEURL; ?>/dashboard/deletePengumuman/<?= $row['id_berita']; ?>" class="badge badge badge-danger p-2 mt-3"><i class="fas fa-trash-alt"></i>&nbsp; Delete Pengumuman</a>
                                </div>
                                <div class="card-footer text-muted">
                                    <?= $row['tanggal']; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Pengumuman -->

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
</body>

</html>