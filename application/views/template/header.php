<!-- Top Bar -->
<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="social-media">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <!-- <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li> -->
                        <li><a href="https://www.instagram.com/informatika_umri/" target="_blank"><i class="fab fa-instagram"></i></a></li>
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
            <img src="<?= site_url('assets/images/') ?>logo.png" alt="logo" height="50px">
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
                <li class="nav-item">
                    <a class="nav-link" href="https://sites.google.com/umri.ac.id/sipenol/home" target="_blank">Info KP/TA</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
