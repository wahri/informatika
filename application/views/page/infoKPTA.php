<!DOCTYPE html>
<html lang="en">

<head>
    <title>DevBook - Bootstrap 4 Book/eBook Landing Page Template For Developers</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootstrap 4 Book/eBook Landing Page Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:700|Roboto:400,400i,700&display=swap" rel="stylesheet">

    <!-- FontAwesome JS-->
    <script defer src="<?= base_url('assets/infoKPTA/') ?>fontawesome/js/all.min.js"></script>

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="<?= base_url('assets/infoKPTA/') ?>css/theme.css">

</head>

<body>
    <header class="header">
        <div class="branding">
            <div class="container-fluid position-relative py-3">
                <!-- <div class="logo-wrapper">
	                <div class="site-logo"><a class="navbar-brand" href="index.html"><img class="logo-icon mr-2" src="assets/images/site-logo.svg" alt="logo" ><span class="logo-text">Informatika.umri.ac.id</span></a></div>
                </div><!--//docs-logo-wrapper-->

            </div>
            <!--//container-->
        </div>
        <!--//branding-->
    </header>
    <!--//header-->

    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 pt-5 mb-5 align-self-center">
                    <div class="promo pr-md-3 pr-lg-5">
                        <h1 class="headline mb-3">
                            Sistem Terpadu <br> Kerja Praktek &amp; Skripsi
                        </h1>
                        <!--//headline-->
                        <div class="subheadline mb-4">
                            Sistem ini diperuntukkan bagi setiap mahasiswa melakukan prosedur Pengajuan, Pendaftaran Seminar/sidang, serta mendapatkan informasi seputar Kerja Peraktek dan Skripsi dilingkungan Prodi Teknik Informatika.

                        </div>
                        <!--//subheading-->

                        <div class="cta-holder">
                            <a class="btn btn-primary mr-lg-2" href="https://sites.google.com/umri.ac.id/sipenol/kerja-praktek?authuser=0">KERJA PRAKTEK</a>
                            <a class="btn btn-secondary scrollto" href="https://sites.google.com/umri.ac.id/sipenol/skripsi?authuser=0">SKRIPSI</a>

                        </div>
                        <!--//cta-holder-->

                        <div class="hero-quotes mt-5">
                            <div id="quotes-carousel" class="quotes-carousel carousel slide carousel-fade mb-5" data-ride="carousel" data-interval="8000">
                                <ol class="carousel-indicators">
                                    <li data-target="#quotes-carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#quotes-carousel" data-slide-to="1"></li>
                                    <li data-target="#quotes-carousel" data-slide-to="2"></li>
                                </ol>

                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <blockquote class="quote p-4 theme-bg-light">
                                            "Kini urusan bimbingan, mendaftar, cek dosen pembimbing dan jadwal jadi lebih mudah dan cepat. Tanpa harus datang kekampus semua urusan Administrasi selesai dari rumah.
                                            Terimakasih Prodi Teknik Informatika - UMRI"
                                        </blockquote>
                                        <!--//item-->
                                        <div class="source media flex-column flex-md-row align-items-center">
                                            <img class="source-profile mr-md-3" src="<?= base_url('assets/infoKPTA/') ?>images/profiles/profile-1.png" alt="image">
                                            <div class="source-info media-body text-center text-md-left">
                                                <div class="source-name">James Doe</div>
                                                <div class="soure-title">Mahasiswa Teknik Informatika Angkatan 2016</div>
                                            </div>
                                        </div>
                                        <!--//source-->
                                    </div>
                                    <!--//carousel-item-->
                                    <div class="carousel-item">
                                        <blockquote class="quote p-4 theme-bg-light">
                                            "Pengembangan program studi khususnya pada domain pelayanan kepada mahasiswa harus terus ditingkatkan. Dukungan penggunaan Teknologi yang diterapkan tentunya sangat membantu para Mahasiswa dalam aktivitas akademiknya. Sukses dan maju terus Prodi Teknik Informatika"
                                        </blockquote>
                                        <!--//item-->
                                        <div class="source media flex-column flex-md-row align-items-center">
                                            <img class="source-profile mr-md-3" src="<?= base_url('assets/infoKPTA/') ?>images/profiles/profile-2.png" alt="image">
                                            <div class="source-info media-body text-center text-md-left">
                                                <div class="source-name">Harun Mukhtar, S.Kom.,M.Kom</div>
                                                <div class="soure-title">Dekan Fakultas Ilmu Komputer - UMRI</div>
                                            </div>
                                        </div>
                                        <!--//source-->
                                    </div>
                                    <!--//carousel-item-->
                                    <div class="carousel-item">
                                        <blockquote class="quote p-4 theme-bg-light">
                                            "Terimakasih Program studi Teknik Informatika, atas trobosan-trobosannya dilakkan dalam rangka pelayanan terhadap kami. Sekarang kami bisa lebih bersemangat dan mudah dalam menggapai Ke-Sarjanaan!!"
                                        </blockquote>
                                        <!--//item-->
                                        <div class="source media flex-column flex-md-row align-items-center">
                                            <img class="source-profile mr-md-3" src="<?= base_url('assets/infoKPTA/') ?>images/profiles/profile-3.png" alt="image">
                                            <div class="source-info media-body text-center text-md-left">
                                                <div class="source-name">Andy Doe</div>
                                                <div class="soure-title">Frontend Developer, Company Lorem</div>
                                            </div>
                                        </div>
                                        <!--//source-->
                                    </div>
                                    <!--//carousel-item-->
                                </div>
                                <!--//carousel-inner-->
                            </div>
                            <!--//quotes-carousel-->

                        </div>
                        <!--//hero-quotes-->
                    </div>
                    <!--//promo-->
                </div>
                <!--col-->
                <div class="col-12 col-md-5 mb-5 align-self-center">
                    <div class="book-cover-holder">
                        <img class="img-fluid book-cover" src="<?= base_url('assets/infoKPTA/') ?>images/kpcovid.png" alt="book cover">
                        <div class="book-badge d-inline-block shadow">
                            New<br>Release
                        </div>
                    </div>
                    <!--//book-cover-holder-->
                    <br>
                    <div class="text-center"><a class="theme-link scrollto" href="#">Baca Panduan KP Covid-19</a></div>
                </div>
                <!--col-->
            </div>
            <!--//row-->
        </div>
        <!--//container-->
    </section>
    <!--//hero-section-->

    <section id="benefits-section" class="benefits-section theme-bg-light-gradient py-5">
        <div class="container py-5">
            <h2 class="section-heading text-center mb-3">Unduh Panduan dan SOP </h2>
            <div class="section-intro single-col-max mx-auto text-center mb-5"> Silahkan me-Unduh panduan Kerja Praktek, Skripsi dan Dokumen lainnya sebagai referensi dalam pelaksanaan dan penulisan KP/SKRIPSI </div>
            <div class="row text-center">
                <div class="item col-12 col-md-6 col-lg-4">
                    <div class="item-inner p-3 p-lg-4">
                        <div class="item-header mb-3">
                            <div class="item-icon"><i class="fas fa-laptop-code"></i></div>
                            <h3 class="item-heading">Panduan Skripsi</h3>
                        </div>
                        <!--//item-heading-->
                        <div class="item-desc">
                            Panduan penulisan dan tata cara Kerja Praktek.
                        </div>
                        <!--//item-desc-->
                        <div class="text-center"><a class="btn btn-primary" href="#">Unduh</a></div>
                    </div>
                    <!--//item-inner-->
                </div>
                <!--//item-->
                <div class="item col-12 col-md-6 col-lg-4">
                    <div class="item-inner p-3 p-lg-4">
                        <div class="item-header mb-3">
                            <div class="item-icon"><i class="fab fa-js-square"></i></div>
                            <h3 class="item-heading">Panduan Kerja Praktek Covid-19</h3>
                        </div>
                        <!--//item-heading-->
                        <div class="item-desc">
                            Panduan penulisan dan tata cara Kerja Praktek.
                        </div>
                        <!--//item-desc-->
                        <div class="text-center"><a class="btn btn-primary" href="#">Unduh</a></div>
                    </div>
                    <!--//item-inner-->
                </div>
                <!--//item-->
                <div class="item col-12 col-md-6 col-lg-4">
                    <div class="item-inner p-3 p-lg-4">
                        <div class="item-header mb-3">
                            <div class="item-icon"><i class="fab fa-rocketchat"></i></div>
                            <h3 class="item-heading">SOP Seminar Proposal</h3>
                        </div>
                        <!--//item-heading-->
                        <div class="item-desc">
                            Standar Operasional Prosedur / tata cara Seminar Proposal daring.
                        </div>
                        <!--//item-desc-->
                        <div class="text-center"><a class="btn btn-primary" href="#">Unduh</a></div>
                    </div>
                    <!--//item-inner-->
                </div>
                <!--//item-->
                <div class="item col-12 col-md-6 col-lg-4">
                    <div class="item-inner p-3 p-lg-4">
                        <div class="item-header mb-3">
                            <div class="item-icon"><i class="fab fa-angular"></i></div>
                            <h3 class="item-heading">SOP Seminar Hasil</h3>
                        </div>
                        <!--//item-heading-->
                        <div class="item-desc">
                            Standar Operasional Prosedur / tata cara Seminar Hasil daring.
                        </div>
                        <!--//item-desc-->
                        <div class="text-center"><a class="btn btn-primary" href="#">Unduh</a></div>
                    </div>
                    <!--//item-inner-->
                </div>
                <!--//item-->
                <div class="item col-12 col-md-6 col-lg-4">
                    <div class="item-inner p-3 p-lg-4">
                        <div class="item-header mb-3">
                            <div class="item-icon"><i class="fas fa-code-branch"></i></div>
                            <h3 class="item-heading">SOP Seminar Komprehensif</h3>
                        </div>
                        <!--//item-heading-->
                        <div class="item-desc">
                            Standar Operasional Prosedur / tata cara Seminar Komprehensif
                        </div>
                        <!--//item-desc-->
                        <div class="text-center"><a class="btn btn-primary" href="#">Unduh</a></div>

                    </div>
                    <!--//item-inner-->
                </div>
                <!--//item-->
                <div class="item col-12 col-md-6 col-lg-4">
                    <div class="item-inner p-3 p-lg-4">
                        <div class="item-header mb-3">
                            <div class="item-icon"><i class="fas fa-hand-holding-usd"></i></div>
                            <h3 class="item-heading">SOP Kerja Praktek</h3>
                        </div>
                        <!--//item-heading-->

                        <div class="item-desc">
                            Standar Operasional Prosedur / tata cara Seminar Kerja Praktek secara daring
                        </div>
                        <!--//item-desc-->
                        <div class="text-center"><a class="btn btn-primary" href="#">Unduh</a></div>

                    </div>
                    <!--//item-inner-->
                </div>
                <!--//item-->
            </div>
            <!--//row-->
        </div>
        <!--//container-->
    </section>
    <!--//benefits-section-->



    <section id="author-section" class="author-section section theme-bg-primary py-5">
        <div class="container py-3">
            <div class="author-profile text-center mb-5">
                <img class="author-pic" src="<?= base_url('assets/infoKPTA/') ?>images/profiles/author-profile.png" alt="image">
            </div>
            <!--//author-profile-->
            <h2 class="section-heading text-center text-white mb-3">About The Author</h2>
            <div class="author-bio single-col-max mx-auto">
                <p>This book landing page template is made by product designer <a class="theme-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers. You can use this template to self-publish and promote your book/ebook. You can easily use platforms such as <a class="theme-link" href="https://gumroad.com/" target="_blank">Gumroad</a> to handle your book payment and delivery.</p>
                <p> This template is 100% FREE as long as you <strong>keep the footer attribution link</strong>. You do not have the rights to resell, sublicense or redistribute (even for free) the template on its own or as a separate attachment from any of your work. If you’d like to use this template without the footer attribution link, you can buy the <a class="theme-link" href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/devbook-free-bootstrap-4-book-ebook-landing-page-template-for-developers/" target="_blank"><strong>commercial license</strong></a>.</p>
                <div class="author-links text-center pt-4">
                    <h5 class="text-white mb-4">Follow Author</h5>
                    <ul class="social-list list-unstyled">
                        <li class="list-inline-item"><a href="https://twitter.com/3rdwave_themes"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://github.com/xriley"><i class="fab fa-github-alt"></i></a></li>
                        <li class="list-inline-item"><a href="https://medium.com/@3rdwave_themes"><i class="fab fa-medium-m"></i></a></li>

                        <li class="list-inline-item"><a href="https://themes.3rdwavemedia.com/"><i class="fas fa-globe-europe"></i></a></li>
                    </ul>
                    <!--//social-list-->
                </div>
                <!--//author-links-->

            </div>
            <!--//author-bio-->

        </div>
        <!--//container-->
    </section>
    <!--//author-section-->



    <footer class="footer">

        <div class="footer-bottom text-center py-5">

            <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Modificated Designed with <i class="@" style="color: #fb866a;"></i> by <a class="theme-link" href="#" target="_blank">TIFTECH</a> 2020</small>

        </div>

    </footer>

    <!-- Javascript -->
    <script src="<?= base_url('assets/infoKPTA/') ?>assets/plugins/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url('assets/infoKPTA/') ?>plugins/popper.min.js"></script>
    <script src="<?= base_url('assets/infoKPTA/') ?>plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/infoKPTA/') ?>plugins/jquery.scrollTo.min.js"></script>
    <script src="<?= base_url('assets/infoKPTA/') ?>plugins/back-to-top.js"></script>

    <script src="<?= base_url('assets/infoKPTA/') ?>js/main.js"></script>

</body>

</html>