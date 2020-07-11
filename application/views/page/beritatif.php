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
                <h1 class="mt-4 pb-3"> <?= $judul ?></h1>
                <div class="breadcrumb-main">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">home</a>
                        </li>
                        <li class="breadcrumb-item active"> <?= $judul ?> </li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="portfolio-col">
            <div class="container">
                <div class="row">
                    <?php foreach ($berita as $b) : ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                            <div class="card h-100">
                                <a class="hover-box" href="<?= base_url('page/berita/') . $b['id_berita'] ?>">
                                    <div class="dot-full">
                                        <i class="fas fa-link"></i>
                                    </div>
                                    <img class="card-img-top" src="<?= base_url('assets/images/berita/') . $b['gambar'] ?>" alt="<?= $b['judul'] ?>" />
                                </a>
                                <div class="card-body">
                                    <h4><a href="<?= base_url('page/berita/') . $b['id_berita'] ?>"><?= $b['judul'] ?></a></h4>
                                    <p>Posted on <?= date("j F Y ", strtotime($b['datetime'])) ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="pagination_bar">
                    <!-- Pagination -->
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </div>

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