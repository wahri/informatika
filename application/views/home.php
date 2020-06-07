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
    <link href="<?= site_url('assets/') ?>css/output.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper-main">

        <?php $this->load->view('template/header'); ?>

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
                                    <a href="#" class="btn btn-lg btn-primary mb-3">tes</a>
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
            <div class="container py-4 mb-5" id="about-main">
                <!-- About Section -->
                <div class="about-main">
                    <div class="row justify-content-between">
                        <div class="col-lg-6">
                            <h3 id="judul"><?= $profil['judul'] ?></h3>
                            <hr class="mt-0 mb-4">
                            <?= $profil['paragraf'] ?>
                            <div class="row mt-1">
                                <div class="col-lg-12 justify-content-center">
                                    <a href="<?= site_url('home/about') ?>" class="btn btn-coklat btn-block">
                                        <h3>Visi dan Misi</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="row mt-3 mb-0">
                                <div class="col-lg-12">
                                    <a href="" class="btn btn-coklat btn-block">
                                        <h3>Kurikulum</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 ml-5">
                            <img class="img-fluid rounded mx-auto d-block" src="<?= site_url('assets/images/') . $profil['gambar'] ?>" alt="Teknik Informatika" />
                        </div>
                    </div>

                </div>
            </div>
        </section>



        <div class="services-bar mb-5">
            <div class="container">
                <h1 class="h5 py-4 text-header mb-5">Pojok Program Studi</h1>
                <!-- Services Section -->
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100">
                            <a href="#"></a>
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
                            <a href="#"></a>
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
                        <div class="card">
                            <a href="#"></a>
                            <img src="<?= site_url('assets/') ?>images/kuliah_umum.jpeg" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>

        <section id="akademik">
            <div class="container">
                <div class="akademik-title">
                    <h1 class="text-uppercase text-header text-center">Teknik Informatika</h1>
                    <hr class="my-3">
                    <p class="text-center">Bekal karier masa depan Anda dipelajari mulai saat ini Bersama Program Studi Teknik Informatika, Fakultas Ilmu Komputer, Universitas Muhammadiyah Riau. Anda akan menemukan pengalaman pembelajaran yang unik dengan memadukan nilai-nilai keislaman dan teknologi untuk mengembangkan potensi anda.</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="akademik-item">
                            <div class="icon">
                                <i class="fa fa fa-desktop"></i>
                            </div>
                            <div class="akademik-item-text">
                                <h3 class="mb-3">Profil</h3>
                                <p class="mb-4">
                                    Mempersiapkan Para Profesional Teknologi Informasi Sejak didirikan pada tahun 2008 di Pekanbaru, Prodi Teknik Informatika FASILKOM UMRI tetap menjaga komitmennya untuk terus belajar dan berkembang serta
                                </p>
                                <a href="#" class="btn btn-coklat">KENALI LEBIH DEKAT</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="akademik-item">
                            <div class="icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <div class="akademik-item-text">
                                <h3 class="mb-3">KURIKULUM</h3>
                                <p class="mb-4">
                                    Kurikulum Program Studi Teknik Informatika Universitas Muhammadiyah Riau disusun dengan fokus yang terletak pada teori, riset dan penerapan di bidang Teknik Informatika, bidang ilmu lainnya serta masyarakat dan
                                </p>
                                <a href="#" class="btn btn-coklat">KENALI LEBIH DEKAT</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="akademik-item">
                            <div class="icon">
                                <i class="fas fa-user-friends"></i>
                            </div>
                            <div class="akademik-item-text">
                                <h3 class="mb-3">PROFIL LULUSAN</h3>
                                <p class="mb-4">
                                    Program Studi Teknik Informatika Menetapkan peran yang dapat dilakukan oleh lulusan/Alumni nya baik dibidang keahlian atau bidang kerja tertentu. Penetapan profil lulusan yaitu menetapkan peran yang dapat dilakukan
                                </p>
                                <a href="#" class="btn btn-coklat">KENALI LEBIH DEKAT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="blog-slide py-5">
            <div class="container">
                <h2 class="text-header">Berita TIF</h2>
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div id="blog-slider" class="owl-carousel">
                            <div class="post-slide">
                                <a href="#" class="float-link"></a>
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
                                <a href="#" class="float-link"></a>
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
                                <a href="#" class="float-link"></a>
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
                                <a href="#" class="float-link"></a>
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
                                <a href="#" class="float-link"></a>
                                <div class="pic">
                                    <a href="#">
                                        <img src="<?= site_url('assets/') ?>images/img-1.jpg" alt="">
                                    </a>
                                    <ul class="post-category">
                                        <li><a href="#">Businesssssss</a></li>
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
                        <a href="" class="btn btn-lg btn-primary">Lihat lebih banyak</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="faq-main">
            <div class="container">
                <h2 class="mb-3">(FAQ) Pertanyaan Yang Sering Diajukan</h2>
                <div class="row">
                    <div class="col-md-5 d-flex align-items-center justify-content-center">
                        <img src="<?= base_url('assets/images/kreatif.png') ?>" alt="Teknik Informatika Universitas Muhammadiyah Riau" class="img-fluid">
                    </div>
                    <div class="col-md-7">
                        <div class="accordion pt-5" id="accordionExample">
                            <div class="card accordion-single">
                                <div class="card-header" id="1">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Apa sih Teknik Informatika itu?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Teknik informatika adalah disiplin ilmu yang berfokus pada pengembangan sistem berbasis komputer dengan segala kemampuan pemograman komputer, kecerdasan buatan serta Jaringan Komputer.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-single">
                                <div class="card-header" id="2">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Apa yang kita pelajari dalam Prodi Teknik Informatika?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Yang dapat kita pelajari pada Teknik Informatika, mahasiswa akan diarahkan untuk bisa menguasai ilmu dan keterampilan rekayasa informatika yang berlandaskan pada kemampuan untuk memahami, menganalisis, menilai, menerapkan, serta menciptakan piranti lunak (Software) dalam pengolahan dengan komputer.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-single">
                                <div class="card-header" id="3">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Apa sih yang membedakan jurusan Teknik Informatika dan sistem informasi ?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Perbedaan dari dua jurusan tersebut yaitu Teknik Informatika adalah ilmu yang memperdalam tentang ilmu pemograman bahasa Komputer seperti merekayasa sub sistem sedangkan sistem informasi yaitu lebih kepada perancangan, evaluasi dan penggunaan sebuah sistem , jadi sebuah sistem dirancang dan di evaluasi oleh Program Studi sistem informasi dan Program Studi informatika membuat pemograman sistem yang telah dirancang oleh Program Studi sistem informasi.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-single">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#c4" aria-expanded="false" aria-controls="collapseThree">
                                            Bagaimana prospek kerja setelah lulus dari jurusan Teknik Informatika?
                                        </button>
                                    </h5>
                                </div>
                                <div id="c4" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Ketika teman-teman lulus dari Jurusan Teknik Informatika teman-teman bisa bekerja di beberapa bidang yang penting pada sebuah perusahaan contoh seperti: Sebagai seorang programmer, system analisis, IT Konsultan,Software Engineer, Database Engineer, Software Developer, Web Designer,IT Executive, Network Administrator, Network Support Engineer.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-single">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#c5" aria-expanded="false" aria-controls="collapseThree">
                                            Komunitas apa saja sih yang ada di Teknik Informatika Universitas Muhammadiyah Riau?
                                        </button>
                                    </h5>
                                </div>
                                <div id="c5" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Ekstrakurikuler yang terdapat di Teknik Informatika cukup beragam dari pendidikan, olahraga bahkan kesenian,
                                        <ul>
                                            <li>
                                                Kelompok Studi Pemograman
                                            </li>
                                            <li>
                                                Student Software Developer
                                            </li>
                                            <li>
                                                Kelompok Studi Robotik
                                            </li>
                                            <li>
                                                Kelompok Paduan Suara
                                            </li>
                                            <li>
                                                Kelompok Studi Desain
                                            </li>
                                            <li>
                                                Kelompok Musik
                                            </li>
                                            <li>
                                                Sanggar tari
                                            </li>
                                            <li>
                                                Tim Futsal
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </>
                </div>
            </div>
        </div>

        <div class="customers-box pt-5">
            <div class="container">
                <!-- Our Customers -->
                <h2>Our Customers</h2>
                <div class="row">
                    <div class="col-lg-12">
                        <div id="customers-slider" class="owl-carousel">
                            <div class="mb-4">
                                <a href="#">
                                    <img class="img-fluid" src="<?= site_url('assets/') ?>images/logo_01.png" alt="" />
                                </a>
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
                            <h5 class="headin5_amrc col_white_amrc pt2">Hubungi Kami</h5>
                            <p class="mb-0">
                                Jl. KH. Ahmad Dahlan No.88, Kp. Melayu, Kec. Sukajadi, Kota Pekanbaru, Riau 28156
                            </p>
                            <p class="my-0">
                                <i class="fas fa-phone fa-rotate-90"></i> (0761) 35008
                            </p>
                            <p class="mb-0">
                                <i class="fas fa-envelope"></i> Informatika@umri.ac.id
                            </p>
                            <p>
                                <img src="<?= base_url('assets/images/ban-pt.png') ?>" alt="akreditasi" style="width: 80px;">
                                <img src="<?= base_url('assets/images/ban-pt-2.png') ?>" alt="akreditasi" style="width: 55px;">
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