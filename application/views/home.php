<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url('assets/images/favicon.ico') ?>">
    <title><?= $judul ?> | Teknik Informatika UMRI</title>
    <meta name="description" content="Web Profil Universitas Muhammadiyah Riau">
    <meta name="author" content="TIFTECH UMRI">
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
        $slider = $this->db->get_where('slider', ['is_active' => 1])->result_array();
        if ($slider > 0) :
        ?>
            <header class="slider-main">
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                    <!-- <ol class="carousel-indicators">
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
                    </ol> -->
                    <div class="carousel-inner" role="listbox">
                        <!-- Slider -->
                        <?php
                        $i = 1;
                        foreach ($slider as $s) :
                        ?>
                            <div class="carousel-item <?= ($i == 1) ? "active" : "" ?>" style="background-image: url('<?= site_url('assets/images/slider/') . $s['gambar'] ?>')">
                                <a href="<?= $s['link']; ?>" class="link-slider"></a>
                                <div class="carousel-caption d-none d-md-block" id="coklat">
                                    <!-- <h3><?= $s['judul'] ?></h3>
                                    <p><?= $s['subjudul'] ?></p>
                                    <a href="#" class="btn btn-lg btn-primary mb-3">Daftar Sekarang!</a> -->
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

        <div class="daftar">
            <div class="container pt-4 mb-5">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p id="judulpmb">PENERIMAAN MAHASISWA BARU TEKNIK INFORMATIKA</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <a class="btn btn-lg btn-coklat btn-block" id="tombolpmb" href="http://daftar.umri.ac.id/"><i class="far fa-paper-plane"></i> Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page Content -->
        <section id="tentang">
            <div class="container py-4 mb-5" id="about-main">
                <!-- About Section -->
                <div class="about-main">
                    <div class="row justify-content-between">
                        <div class="col-lg-6">
                            <h2 id="judul"><?= $profil['judul'] ?></h2>
                            <!-- <hr class="mt-0 mb-4"> -->
                            <?= $profil['paragraf'] ?>
                        </div>
                        <div class="col-lg-5 ml-5 d-flex justify-content-center align-items-center">
                            <div class="ig-slide">
                                <a href="https://www.instagram.com/informatika_umri/" target="_blank" class="link-ig"></a>
                                <?php foreach ($instagram as $ig) : ?>
                                    <img class="img-fluid ig-slide-item" src="<?= base_url('assets/images/slider-ig/') . $ig['gambar'] ?>" alt="Teknik Informatika Instagram Post">
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="prodi">
            <div class="services-bar pb-5">
                <div class="container">
                    <h1 class="h5 py-4 text-header mb-5">Pojok Program Studii</h1>
                    <!-- Services Section -->
                    <div class="row">
                        <?php $page1 = $this->db->get_where('page', ['id_page' => $prodi['page-1']])->row_array(); ?>
                        <div class="col-lg-4 mb-4">
                            <div class="card h-100">
                                <a href="<?= base_url('page/detail/') . $prodi['page-1'] ?>"></a>
                                <div class="card-img">
                                    <img class="img-fluid" src="<?= site_url('assets/images/page/') . $page1['gambar'] ?>" alt="<?= $page1['judul'] ?>" />
                                </div>
                                <div class="card-body">
                                    <h4 class="card-header"><?= $page1['judul'] ?></h4>
                                    <p class="card-text"><?= substr($page1['isi'], 0, 100) . '...' ?></p>
                                </div>
                            </div>
                        </div>
                        <?php $page2 = $this->db->get_where('page', ['id_page' => $prodi['page-2']])->row_array(); ?>
                        <div class="col-lg-4 mb-4">
                            <div class="card h-100">
                                <a href="<?= base_url('page/detail/') . $prodi['page-2'] ?>"></a>
                                <div class="card-img">
                                    <img class="img-fluid" src="<?= site_url('assets/images/page/') . $page2['gambar'] ?>" alt="<?= $page2['judul'] ?>" />
                                </div>
                                <div class="card-body">
                                    <h4 class="card-header"><?= $page2['judul'] ?></h4>
                                    <p class="card-text"><?= substr($page2['isi'], 0, 100) . '...' ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="card">
                                <a href="#"></a>
                                <img src="<?= base_url('assets/images/poster/') . $prodi['poster'] ?>" class="card-img-top" alt="Poster Event Teknik Informatika Muhammadiyah Riau">
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </section>

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
                                <h3 class="mb-3"><?= $page[0]['judul'] ?></h3>
                                <p class="mb-4">
                                    <?= substr($page[0]['isi'], 59, 190) . '...' ?>
                                </p>
                                <a href="<?= base_url('page/detail/1') ?>" class="btn btn-coklat">KENALI LEBIH DEKAT</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="akademik-item">
                            <div class="icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <div class="akademik-item-text">
                                <h3 class="mb-3"><?= $page[1]['judul'] ?></h3>
                                <p class="mb-4">
                                    <?= substr($page[1]['isi'], 0, 190) . '...' ?>
                                </p>
                                <a href="<?= base_url('page/detail/2') ?>" class="btn btn-coklat">KENALI LEBIH DEKAT</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="akademik-item">
                            <div class="icon">
                                <i class="fas fa-user-friends"></i>
                            </div>
                            <div class="akademik-item-text">
                                <h3 class="mb-3"><?= $page[2]['judul'] ?></h3>
                                <p class="mb-4">
                                    <?= substr($page[2]['isi'], 0, 190) . '...' ?>
                                </p>
                                <a href="<?= base_url('page/detail/3') ?>" class="btn btn-coklat">KENALI LEBIH DEKAT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="blog-slide py-5">
            <div class="container">
                <h2 class="text-header">Berita Pilihan</h2>
                <p class="text-center">Tetap terhubung dengan berita dan informasi terbaru tentang berbagai aktivitas di prodi Teknik Informatika</p>
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div id="blog-slider" class="owl-carousel">
                            <?php foreach ($berita as $b) : ?>
                                <div class="post-slide">
                                    <a href="<?= base_url('page/berita/') . $b['id_berita'] ?>" class="float-link"></a>
                                    <div class="pic">
                                        <a href="#">
                                            <img src="<?= site_url('assets/images/berita/') . $b['gambar'] ?>" alt="">
                                        </a>
                                        <ul class="post-category">
                                            <?php
                                            $rel_kategori = $this->db->get_where('rel_kategori_berita', ['id_berita' => $b['id_berita']])->result_array();
                                            foreach ($rel_kategori as $k) :
                                                $kategori = $this->db->get_where('kategori', ['id_kategori' => $k['id_kategori']])->row_array();
                                            ?>
                                                <li><a href="#"><?= $kategori['nama_kategori'] ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    <div class="post-header mb-0 text-center">
                                        <ul class="post-bar mt-3 mb-0">
                                            <li>Posted on : <i class="fa fa-calendar"></i><?= date("j F Y ", strtotime($b['datetime'])) ?></li>
                                        </ul>
                                        <h4 class="title mb-3">
                                            <a href="#"><?= $b['judul'] ?></a>
                                        </h4>

                                    </div>
                                    <div class="post-description text-center">
                                        <?= substr($b['isi'], 0, 100) . '...' ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12 text-center">
                        <a href="<?= base_url('page/beritatif') ?>" class="btn btn-lg btn-primary">Lihat lebih banyak</a>
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
        </div>

        <?php $this->load->view('template/footer'); ?>
    </div>

    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("ig-slide-item");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
    </script>
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
