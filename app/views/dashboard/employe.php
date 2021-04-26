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
    <link rel="stylesheet" href="<?= CSS ?>/employe.css">

    <title>Tenaga Pendidik</title>

</head>

<body>
    <nav class="navbar">
        <div class="container">
            <div class="navbar-brand"><i class="fas fa-user-tie"></i></i>&nbsp;
                Tenaga Pendidik
            </div>
        </div>
    </nav>

    <div class="container info-wrapper rounded mb-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item">Tenaga Pendidik</li>
                <li class="breadcrumb-item active" aria-current="page"><a href="<?= $_SERVER['REQUEST_URI']; ?>">Dashboard</a></li>
            </ol>
        </nav>
    </div>

    <div class="container info-wrapper rounded">
        <h3 class="ml-1">Kepala Sekolah</h3>
        <div class="row row-cols-1 ml-1">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="assets/img/team/team-1.jpg" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">I Kadek Agus Chandra Pradika, S.Pd., M.Pd.</h5>
                            <p class="card-text">Kepala Sekolah</p>
                            <div>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Email</th>
                                            <td>aguschandra@email.com</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">No.Telepon</th>
                                            <td>0821 3456 7890</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="ml-1">Staff</h3>
        <div class="row row-cols-1 ml-1 row-cols-md-2 g-4">
            <div class="card mb-3 mr-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="assets/img/team/team-1.jpg" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="assets/img/team/team-1.jpg" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>




    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
</body>

</html>