<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= $judul ?> | Teknik Informatika UMRI</title>
    <!-- Bootstrap core CSS -->
    <link href="<?= site_url('assets/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fontawesome CSS -->
    <link href="<?= site_url('assets/') ?>css/all.css" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link href="<?= site_url('assets/') ?>css/owl.carousel.min.css" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link href="<?= site_url('assets/') ?>css/jquery.fancybox.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?= site_url('assets/') ?>css/style.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper-main">
        <!-- Top Bar -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="social-media">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-details">
                            <ul>
                                <li><i class="fas fa-phone fa-rotate-90"></i> (0761) 35008</li>
                                <li><i class="fas fa-map-marker-alt"></i> Pekanbaru, Riau</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-light top-nav">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="<?= site_url('assets/') ?>images/logo.png" alt="logo" />
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fas fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <?php
                        $this->db->from('menu');
                        $this->db->order_by('urutan', 'asc');
                        $menu = $this->db->get()->result_array();
                        foreach ($menu as $m) :
                            $submenu = $this->db->get_where('submenu', ['id_menu' => $m['id_menu']])->result_array();
                            if ($submenu) :
                        ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link <?= ($link == $m['menu']) ? "active" : "" ?>" href="<?= $m['link'] ?>" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $m['menu'] ?><i class="fas fa-sort-down"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                                        <?php foreach ($submenu as $sm) : ?>
                                            <a class="dropdown-item" href="<?= site_url() . $sm['link'] ?>"><?= $sm['submenu'] ?></a>
                                        <?php endforeach; ?>
                                    </div>
                                </li>
                            <?php else : ?>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($link == $m['menu']) ? "active" : "" ?>" href="<?= site_url() . $m['link'] ?>"><?= $m['menu'] ?></a>
                                </li>
                        <?php
                            endif;
                        endforeach;
                        ?>
                    </ul>
                </div>
            </div>
        </nav>

        <?php
        $slider = $this->db->get('slider')->result_array();
        if ($slider > 0) :
        ?>
            <header class="slider-main">
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php

                        $j = 0;
                        foreach ($slider as $s) :
                        ?>
                            <li data-target="#carouselExampleIndicators" data-slide-to="<?= $j; ?>" class="
                        <?=
                                ($j == 0) ? "active" : ""
                        ?>">
                            </li>
                        <?php
                            $j++;
                        endforeach;
                        ?>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <!-- Slider -->
                        <?php
                        $i = 1;
                        foreach ($slider as $s) :
                        ?>
                            <div class="carousel-item <?= ($i == 1) ? "active" : "" ?>" style="background-image: url('<?= site_url('assets/images/slider/') . $s['gambar'] ?>')">
                                <div class="carousel-caption d-none d-md-block" id="coklat">
                                    <h3><?= $s['judul'] ?></h3>
                                    <p><?= $s['subjudul'] ?></p>
                                </div>
                            </div>
                        <?php $i++;
                        endforeach; ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </header>
        <?php endif; ?>

        <?php
        $profil = $this->db->get('profil')->row_array();
        ?>
        <!-- Page Content -->
        <section id="tentang">
            <div class="container py-4" id="about-main">
                <!-- About Section -->
                <div class="about-main">
                    <div class="row justify-content-between">
                        <div class="col-lg-6">
                            <h3 id="judul"><?= $profil['judul'] ?></h3>
                            <hr class="mt-0 mb-4">
                            <?= $profil['paragraf'] ?>
                        </div>
                        <div class="col-lg-5 ml-5">
                            <img class="img-fluid rounded mx-auto d-block" src="<?= site_url('assets/images/') . $profil['gambar'] ?>" alt="Teknik Informatika" />
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-5 justify-content-center">
                            <a href="<?= site_url('home/about') ?>" class="btn btn-coklat btn-block">
                                <h3>Visi dan Misi</h3>
                            </a>
                        </div>
                    </div>
                    <div class="row mt-3 mb-0">
                        <div class="col-lg-5">
                            <a href="" class="btn btn-coklat btn-block">
                                <h3>Kurikulum</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="blog-slide py-5">
            <div class="container">
                <h2>Berita TIF</h2>
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div id="blog-slider" class="owl-carousel">
                            <div class="post-slide">
                                <div class="pic">
                                    <a href="#">
                                        <img src="<?= site_url('assets/') ?>images/img-1.jpg" alt="">
                                    </a>
                                    <ul class="post-category">
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Financ</a></li>
                                    </ul>
                                </div>
                                <div class="post-header mb-0 text-center">
                                    <ul class="post-bar mt-3 mb-0">
                                        <li>Posted on : <i class="fa fa-calendar"></i>02 June 2018</li>
                                    </ul>
                                    <h4 class="title">
                                        <a href="#">Latest blog Post</a>
                                    </h4>

                                </div>
                                <p class="post-description text-center">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida nulla eu
                                    massa efficitur, eu hendrerit ipsum efficitur. Morbi vitae velit ac.
                                </p>
                            </div>
                            <div class="post-slide">
                                <div class="pic">
                                    <a href="#">
                                        <img src="<?= site_url('assets/') ?>images/img-1.jpg" alt="">
                                    </a>
                                    <ul class="post-category">
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Financ</a></li>
                                    </ul>
                                </div>
                                <div class="post-header mb-0 text-center">
                                    <ul class="post-bar mt-3 mb-0">
                                        <li>Posted on : <i class="fa fa-calendar"></i>02 June 2018</li>
                                    </ul>
                                    <h4 class="title">
                                        <a href="#">Latest blog Post</a>
                                    </h4>

                                </div>
                                <p class="post-description text-center">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida nulla eu
                                    massa efficitur, eu hendrerit ipsum efficitur. Morbi vitae velit ac.
                                </p>
                            </div>
                            <div class="post-slide">
                                <div class="pic">
                                    <a href="#">
                                        <img src="<?= site_url('assets/') ?>images/img-1.jpg" alt="">
                                    </a>
                                    <ul class="post-category">
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Financ</a></li>
                                    </ul>
                                </div>
                                <div class="post-header mb-0 text-center">
                                    <ul class="post-bar mt-3 mb-0">
                                        <li>Posted on : <i class="fa fa-calendar"></i>02 June 2018</li>
                                    </ul>
                                    <h4 class="title">
                                        <a href="#">Latest blog Post</a>
                                    </h4>

                                </div>
                                <p class="post-description text-center">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida nulla eu
                                    massa efficitur, eu hendrerit ipsum efficitur. Morbi vitae velit ac.
                                </p>
                            </div>
                            <div class="post-slide">
                                <div class="pic">
                                    <a href="#">
                                        <img src="<?= site_url('assets/') ?>images/img-1.jpg" alt="">
                                    </a>
                                    <ul class="post-category">
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Financ</a></li>
                                    </ul>
                                </div>
                                <div class="post-header mb-0 text-center">
                                    <ul class="post-bar mt-3 mb-0">
                                        <li>Posted on : <i class="fa fa-calendar"></i>02 June 2018</li>
                                    </ul>
                                    <h4 class="title">
                                        <a href="#">Latest blog Post</a>
                                    </h4>

                                </div>
                                <p class="post-description text-center">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida nulla eu
                                    massa efficitur, eu hendrerit ipsum efficitur. Morbi vitae velit ac.
                                </p>
                            </div>
                            <div class="post-slide">
                                <div class="pic">
                                    <a href="#">
                                        <img src="<?= site_url('assets/') ?>images/img-1.jpg" alt="">
                                    </a>
                                    <ul class="post-category">
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Financ</a></li>
                                    </ul>
                                </div>
                                <div class="post-header mb-0 text-center">
                                    <ul class="post-bar mt-3 mb-0">
                                        <li>Posted on : <i class="fa fa-calendar"></i>02 June 2018</li>
                                    </ul>
                                    <h4 class="title">
                                        <a href="#">Latest blog Post</a>
                                    </h4>

                                </div>
                                <p class="post-description text-center">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida nulla eu
                                    massa efficitur, eu hendrerit ipsum efficitur. Morbi vitae velit ac.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-12 text-center">
                        <a href="" class="btn btn-primary">Lihat lebih banyak</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="services-bar">
            <div class="container">
                <h1 class="py-4">Teknik Informatika</h1>
                <!-- Services Section -->
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100">
                            <div class="card-img">
                                <img class="img-fluid" src="<?= site_url('assets/') ?>images/services-img-01.jpg" alt="" />
                            </div>
                            <div class="card-body">
                                <h4 class="card-header"> Analytics </h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente
                                    esse necessitatibus neque.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100">
                            <div class="card-img">
                                <img class="img-fluid" src="<?= site_url('assets/') ?>images/services-img-02.jpg" alt="" />
                            </div>
                            <div class="card-body">
                                <h4 class="card-header"> Applications </h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente
                                    esse necessitatibus neque.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100">
                            <div class="card-img">
                                <img class="img-fluid" src="<?= site_url('assets/') ?>images/services-img-03.jpg" alt="" />
                            </div>
                            <div class="card-body">
                                <h4 class="card-header"> Business Process </h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente
                                    esse necessitatibus neque.</p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 mb-4">
                        <div class="card h-100">
                            <div class="card-img">
                                <img class="img-fluid" src="<?= site_url('assets/') ?>images/services-img-04.jpg" alt="" />
                            </div>
                            <div class="card-body">
                                <h4 class="card-header"> Consulting </h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente
                                    esse necessitatibus neque.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100">
                            <div class="card-img">
                                <img class="img-fluid" src="<?= site_url('assets/') ?>images/services-img-05.jpg" alt="" />
                            </div>
                            <div class="card-body">
                                <h4 class="card-header"> Infrastructure </h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente
                                    esse necessitatibus neque.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100">
                            <div class="card-img">
                                <img class="img-fluid" src="<?= site_url('assets/') ?>images/services-img-06.jpg" alt="" />
                            </div>
                            <div class="card-body">
                                <h4 class="card-header"> Product Engineering </h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente
                                    esse necessitatibus neque.</p>
                            </div>
                        </div>
                    </div> -->
                </div>
                <!-- /.row -->
            </div>
        </div>

        <!-- Portfolio Section -->
        <!-- <section id="portfolio">
            <div class="container py-5">
                <div class="portfolio-main">
                    <h2>Our Portfolio</h2>
                    <div class="col-lg-12">
                        <div class="project-menu text-center">
                            <button class="btn btn-primary active" data-filter="*">All</button>
                            <button data-filter=".business" class="btn btn-primary">Business</button>
                            <button data-filter=".travel" class="btn btn-primary">Travel</button>
                            <button data-filter=".financial" class="btn btn-primary">Financial</button>
                            <button data-filter=".academic" class="btn btn-primary">Academic</button>
                        </div>
                    </div>
                    <div id="projects" class="projects-main row">
                        <div class="col-lg-4 col-sm-6 pro-item portfolio-item financial">
                            <div class="card h-100">
                                <div class="card-img">
                                    <a href="<?= site_url('assets/') ?>images/portfolio-img-01.jpg" data-fancybox="images">
                                        <img class="card-img-top" src="<?= site_url('assets/') ?>images/portfolio-img-01.jpg" alt="" />
                                        <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">Financial Sustainability</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 pro-item portfolio-item business academic">
                            <div class="card h-100">
                                <div class="card-img">
                                    <a href="<?= site_url('assets/') ?>images/portfolio-img-02.jpg" data-fancybox="images">
                                        <img class="card-img-top" src="<?= site_url('assets/') ?>images/portfolio-img-02.jpg" alt="" />
                                        <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">Financial Sustainability</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 pro-item portfolio-item travel">
                            <div class="card h-100">
                                <div class="card-img">
                                    <a href="<?= site_url('assets/') ?>images/portfolio-img-03.jpg" data-fancybox="images">
                                        <img class="card-img-top" src="<?= site_url('assets/') ?>images/portfolio-img-03.jpg" alt="" />
                                        <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">Financial Sustainability</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 pro-item portfolio-item business">
                            <div class="card h-100">
                                <div class="card-img">
                                    <a href="<?= site_url('assets/') ?>images/portfolio-img-04.jpg" data-fancybox="images">
                                        <img class="card-img-top" src="<?= site_url('assets/') ?>images/portfolio-img-04.jpg" alt="" />
                                        <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">Financial Sustainability</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 pro-item portfolio-item travel">
                            <div class="card h-100">
                                <div class="card-img">
                                    <a href="<?= site_url('assets/') ?>images/portfolio-img-05.jpg" data-fancybox="images">
                                        <img class="card-img-top" src="<?= site_url('assets/') ?>images/portfolio-img-05.jpg" alt="" />
                                        <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">Financial Sustainability</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 pro-item portfolio-item financial academic">
                            <div class="card h-100">
                                <div class="card-img">
                                    <a href="<?= site_url('assets/') ?>images/portfolio-img-01.jpg" data-fancybox="images">
                                        <img class="card-img-top" src="<?= site_url('assets/') ?>images/portfolio-img-01.jpg" alt="" />
                                        <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">Financial Sustainability</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->



        <div class="customers-box pt-5">
            <div class="container">
                <!-- Our Customers -->
                <h2>Our Customers</h2>
                <div class="row">
                    <div class="col-lg-12">
                        <div id="customers-slider" class="owl-carousel">
                            <div class="mb-4">
                                <img class="img-fluid" src="<?= site_url('assets/') ?>images/logo_01.png" alt="" />
                            </div>
                            <div class="mb-4">
                                <img class="img-fluid" src="<?= site_url('assets/') ?>images/logo_02.png" alt="" />
                            </div>
                            <div class="mb-4">
                                <img class="img-fluid" src="<?= site_url('assets/') ?>images/logo_03.png" alt="" />
                            </div>
                            <div class="mb-4">
                                <img class="img-fluid" src="<?= site_url('assets/') ?>images/logo_04.png" alt="" />
                            </div>
                            <div class="mb-4">
                                <img class="img-fluid" src="<?= site_url('assets/') ?>images/logo_05.png" alt="" />
                            </div>
                            <div class="mb-4">
                                <img class="img-fluid" src="<?= site_url('assets/') ?>images/logo_06.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>

        <!-- Contact Us -->
        <div class="touch-line">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p id="judulpmb">PENERIMAAN MAHASISWA BARU TEKNIK INFORMATIKA</p>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-md-3">
                        <a class="btn btn-lg btn-secondary btn-block" id="tombolpmb" href="#"><i class="far fa-paper-plane"></i> Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.container -->
        <!--footer starts from here-->
        <footer class="footer">
            <div class="container bottom_border">
                <div class="row">

                    <div class="col-lg-4 col-md-6 col-sm-6 ">
                        <div class="news-box">
                            <h5 class="headin5_amrc col_white_amrc pt2">Hubngi Kami</h5>
                            <p class="mb-0">
                                Jl. KH. Ahmad Dahlan No.88, Kp. Melayu, Kec. Sukajadi, Kota Pekanbaru, Riau 28156
                            </p>
                            <p class="my-0">
                                <i class="fas fa-phone fa-rotate-90"></i> (0761) 35008
                            </p>
                            <p>
                                <i class="fas fa-envelope"></i> Informatika@umri.ac.id
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 pl-5">
                        <h5 class="headin5_amrc col_white_amrc pt2">Pranala</h5>
                        <!--headin5_amrc-->
                        <ul class="footer_ul_amrc">
                            <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>umri.ac.id</a></li>
                            <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Daftar UMRI</a></li>
                            <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Perpustakaan</a></li>
                            <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Fakultas</a></li>
                            <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Celscitech</a></li>
                            <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>E-Journal</a></li>
                            <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Repositori TA</a></li>
                        </ul>
                        <!--footer_ul_amrc ends here-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <h5 class="headin5_amrc col_white_amrc pt2">Ikuti Kami Di</h5>
                        <!--headin5_amrc-->
                        <!-- <p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s</p> -->
                        <ul class="footer-social">
                            <li><a class="facebook hb-xs-margin" href="#"><span class="hb hb-xs spin hb-facebook"><i class="fab fa-facebook-f"></i></span></a></li>
                            <li><a class="twitter hb-xs-margin" href="#"><span class="hb hb-xs spin hb-twitter"><i class="fab fa-twitter"></i></span></a></li>
                            <li><a class="instagram hb-xs-margin" href="#"><span class="hb hb-xs spin hb-instagram"><i class="fab fa-instagram"></i></span></a></li>
                            <li><a class="googleplus hb-xs-margin" href="#"><span class="hb hb-xs spin hb-google-plus"><i class="fab fa-google-plus-g"></i></span></a></li>
                            <li><a class="dribbble hb-xs-margin" href="#"><span class="hb hb-xs spin hb-dribbble"><i class="fab fa-dribbble"></i></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <p class="copyright text-center">
                    Copyright &copy; TIFTECH UMRI <?= date('Y') ?>
                </p>
            </div>
        </footer>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= site_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= site_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= site_url('assets/') ?>js/imagesloaded.pkgd.min.js"></script>
    <script src="<?= site_url('assets/') ?>js/isotope.pkgd.min.js"></script>
    <script src="<?= site_url('assets/') ?>js/filter.js"></script>
    <script src="<?= site_url('assets/') ?>js/jquery.appear.js"></script>
    <script src="<?= site_url('assets/') ?>js/owl.carousel.min.js"></script>
    <script src="<?= site_url('assets/') ?>js/jquery.fancybox.min.js"></script>
    <script src="<?= site_url('assets/') ?>js/script.js"></script>
</body>

</html>