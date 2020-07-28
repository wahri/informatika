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
    <div class="wrapper-main">

        <?php $this->load->view('template/header'); ?>

        <!-- full Title -->
        <div class="full-title">
            <div class="container mt-0">
                <!-- Page Heading/Breadcrumbs -->
                <h1 class="mt-4 pb-3"> <?= $berita['judul'] ?></h1>
                <div class="breadcrumb-main">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Berita TIF</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="blog-main">
            <div class="container">
                <div class="row">
                    <!-- Post Content Column -->
                    <div class="col-lg-12">
                        <!-- Preview Image -->
                        <img class="img-fluid rounded" src="<?= base_url('assets/images/berita/') . $berita['gambar'] ?>" alt="<?= $berita['judul'] ?>" />
                        <hr>
                        <!-- Date/Time -->
                        <p>Posted on <?= date("j F Y ", strtotime($berita['datetime'])) ?></p>
                        <hr>
                        <!-- Post Content -->
                        <?= $berita['isi'] ?>
                        <hr>

                    </div>


                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>

        <?php $this->load->view('template/footer'); ?>

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= site_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= site_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= site_url('assets/') ?>js/jquery.appear.js"></script>
    <script src="<?= site_url('assets/') ?>js/owl.carousel.min.js"></script>
    <script src="<?= site_url('assets/') ?>js/script.js"></script>
</body>

</html>
