<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= base_url('assets/images/favicon.ico') ?>">
    <title><?= $judul ?> | Teknik Informatika UMRI</title> <!-- Bootstrap core CSS -->
    <link href="<?= site_url('assets/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fontawesome CSS -->
    <link href="<?= site_url('assets/') ?>css/all.css" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link href="<?= site_url('assets/') ?>css/owl.carousel.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?= site_url('assets/') ?>css/style.css" rel="stylesheet">
</head>

<body>
    <section id="visimisi">
        <div class="wrapper-main">

            <?php $this->load->view('template/header'); ?>

            <!-- full Title -->
            <div class="full-title">
                <div class="container mt-0">
                    <!-- Page Heading/Breadcrumbs -->
                    <h1 class="mt-4 pb-3"> <?= $judul ?></h1>
                    <div class="breadcrumb-main">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#"><?= $link ?></a>
                            </li>
                            <li class="breadcrumb-item active"> <?= $judul ?> </li>
                        </ol>
                    </div>
                </div>
            </div>

        </div>

        <div class="container">
            <!-- Team Members -->
            <div class="team-members-box">
                <!-- <h2>Our Team</h2> -->
                <div class="row">
                    <?php
                    foreach ($dosen as $d) :
                    ?>
                        <div class="col-lg-4 mb-4">
                            <div class="card text-center">
                                <div class="our-team">
                                    <img class="img-fluid" src="<?= base_url('assets/images/dosen/') . $d['foto'] ?>" alt="Dosen Teknik Informatika" />
                                    <div class="team-content">
                                        <h3 class="title"><?= $d['nama'] ?></h3>
                                        <span class="post"><?= $d['jabatan'] ?></span>
                                        <ul class="social">
                                            <li><a href="<?= $d['facebook'] ?>" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                            <li><a href="<?= $d['instagram'] ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="<?= $d['linkedin'] ?>" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- /.row -->
            </div>
        </div>

        <?php $this->load->view('template/footer'); ?>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= site_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= site_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= site_url('assets/') ?>js/jquery.appear.js"></script>
    <script src="<?= site_url('assets/') ?>js/owl.carousel.min.js"></script>
    <script src="<?= site_url('assets/') ?>js/script.js"></script>
</body>

</html>