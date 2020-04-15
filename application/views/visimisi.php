<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Zonebiz - Business Consulting Bootstrap4 Responsive Template </title>
    <!-- Bootstrap core CSS -->
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
                                <li><i class="fas fa-phone fa-rotate-90"></i> +01 899 286 777</li>
                                <li><i class="fas fa-map-marker-alt"></i> 8/99 , North khailkoir, NY</li>
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

        <!-- full Title -->
        <div class="full-title">
            <div class="container mt-0">
                <!-- Page Heading/Breadcrumbs -->
                <h1 class="mt-4 pb-3"> About Us</h1>
                <div class="breadcrumb-main">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active"> About Us </li>
                    </ol>
                </div>
            </div>
        </div>

        <section id="tentang">
            <div class="container mt-0">
                <!-- About Content -->
                <div class="about-main">
                    <div class="row">
                        <div class="col-lg-6">
                            <img class="img-fluid rounded mb-4" src="<?= site_url('assets/') ?>images/about-img.jpg" alt="" />
                        </div>
                        <div class="col-lg-6">
                            <h2>About Modern Business</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum!</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row mb-4">
                        <div class="col-lg-6">
                            <div class="left-ab">
                                <h3>Our Mission</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum!</p>
                                <ul>
                                    <li>Sed at tellus eu quam posuere mattis.</li>
                                    <li>Phasellus quis erat et enim laoreet posuere ac porttitor ipsum.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Sed at tellus eu quam posuere mattis.</li>
                                    <li>Phasellus quis erat et enim laoreet posuere ac porttitor ipsum.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-ab">
                                <img class="img-fluid rounded mb-4" src="<?= site_url('assets/') ?>images/mission-img.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="right-ab">
                                <img class="img-fluid rounded mb-4" src="<?= site_url('assets/') ?>images/vision-img.jpg" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="left-ab">
                                <h3>Our Vision</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum!</p>
                                <ul>
                                    <li>Sed at tellus eu quam posuere mattis.</li>
                                    <li>Phasellus quis erat et enim laoreet posuere ac porttitor ipsum.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Sed at tellus eu quam posuere mattis.</li>
                                    <li>Phasellus quis erat et enim laoreet posuere ac porttitor ipsum.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="container">
            <!-- Team Members -->
            <div class="team-members-box">
                <h2>Our Team</h2>
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100 text-center">
                            <div class="our-team">
                                <img class="img-fluid" src="<?= site_url('assets/') ?>images/team_01.jpg" alt="" />
                                <div class="team-content">
                                    <h3 class="title">Nazmul Hossen</h3>
                                    <span class="post">web developer</span>
                                    <ul class="social">
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100 text-center">
                            <div class="our-team">
                                <img class="img-fluid" src="<?= site_url('assets/') ?>images/team_02.jpg" alt="" />
                                <div class="team-content">
                                    <h3 class="title">Mahedi amin</h3>
                                    <span class="post">web developer</span>
                                    <ul class="social">
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100 text-center">
                            <div class="our-team">
                                <img class="img-fluid" src="<?= site_url('assets/') ?>images/team_01.jpg" alt="" />
                                <div class="team-content">
                                    <h3 class="title">Kawser Alam</h3>
                                    <span class="post">web developer</span>
                                    <ul class="social">
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>

        <div class="customers-box">
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
                    <div class="col-md-8">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-lg btn-secondary btn-block" href="#"> Contact Us </a>
                    </div>
                </div>
            </div>
        </div>

        <!--footer starts from here-->
        <footer class="footer">
            <div class="container bottom_border">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col">
                        <h5 class="headin5_amrc col_white_amrc pt2">About Us</h5>
                        <!--headin5_amrc-->
                        <p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        <ul class="footer-social">
                            <li><a class="facebook hb-xs-margin" href="#"><span class="hb hb-xs spin hb-facebook"><i class="fab fa-facebook-f"></i></span></a></li>
                            <li><a class="twitter hb-xs-margin" href="#"><span class="hb hb-xs spin hb-twitter"><i class="fab fa-twitter"></i></span></a></li>
                            <li><a class="instagram hb-xs-margin" href="#"><span class="hb hb-xs spin hb-instagram"><i class="fab fa-instagram"></i></span></a></li>
                            <li><a class="googleplus hb-xs-margin" href="#"><span class="hb hb-xs spin hb-google-plus"><i class="fab fa-google-plus-g"></i></span></a></li>
                            <li><a class="dribbble hb-xs-margin" href="#"><span class="hb hb-xs spin hb-dribbble"><i class="fab fa-dribbble"></i></span></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                        <!--headin5_amrc-->
                        <ul class="footer_ul_amrc">
                            <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Default Version</a></li>
                            <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Boxed Version</a></li>
                            <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Our Team </a></li>
                            <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>About Us</a></li>
                            <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Our Services</a></li>
                            <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Get In Touch</a></li>
                        </ul>
                        <!--footer_ul_amrc ends here-->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col">
                        <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
                        <!--headin5_amrc ends here-->
                        <ul class="footer_ul2_amrc">
                            <li>
                                <a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
                                <p>Lorem Ipsum is simply dummy...<a href="#">https://www.lipsum.com/</a></p>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
                                <p>Lorem Ipsum is simply dummy...<a href="#">https://www.lipsum.com/</a></p>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
                                <p>Lorem Ipsum is simply dummy...<a href="#">https://www.lipsum.com/</a></p>
                            </li>
                        </ul>
                        <!--footer_ul2_amrc ends here-->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 ">
                        <div class="news-box">
                            <h5 class="headin5_amrc col_white_amrc pt2">Newsletter</h5>
                            <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
                            <form action="#">
                                <div class="input-group">
                                    <input class="form-control" placeholder="Search for..." type="text">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary" type="button">Go!</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <p class="copyright text-center">All Rights Reserved. &copy; 2018 <a href="#">Zonebiz</a> Design By :
                    <a href="https://html.design/">html design</a>
                </p>
            </div>
        </footer>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="<?= site_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= site_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= site_url('assets/') ?>js/jquery.appear.js"></script>
    <script src="<?= site_url('assets/') ?>js/owl.carousel.min.js"></script>
    <script src="<?= site_url('assets/') ?>js/script.js"></script>
</body>

</html>