<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link mt-3" href="<?= site_url('admin') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <!-- <a class="nav-link" href="<?= site_url('page') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                        Halaman Home
                    </a> -->


                    <!-- <a class="nav-link" href="<?= site_url('admin/tambahuser') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
                        Tambah User
                    </a> -->



                    <!-- <a class="nav-link" href="<?= site_url('admin/default') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Blank
                    </a> -->
                    <div class="sb-sidenav-menu-heading">WEB INFORMATIKA</div>

                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#home" aria-expanded="false" aria-controls="home">
                        <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                        Home
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="home" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?= site_url('admin/slider') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Slider Banner
                            </a>
                            <a class="nav-link" href="<?= site_url('admin/editprofil') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Profil Prodi
                            </a>
                            <a class="nav-link" href="<?= site_url('admin/instagram') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Instagram Post
                            </a>
                            <a class="nav-link" href="<?= site_url('admin/pojokprodi') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Pojok Prodi
                            </a>
                            <a class="nav-link" href="<?= site_url('admin/organisasi') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Unit Kemahasiswaan
                            </a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <div class="sb-nav-link-icon"><i class="fas fa-bars"></i></div>
                      Create   Menu
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="navbar" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?= site_url('admin/menu') ?>">
                                Add Menu
                            </a>
                            <a class="nav-link" href="<?= site_url('admin/submenu') ?>">
                                Add Submenu
                            </a>
                        </nav>
                    </div>
                    <a class="nav-link" href="<?= site_url('admin/dosen') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-user-tie"></i></div>
                        Create Lecturer
                    </a>
                    <a class="nav-link" href="<?= site_url('admin/berita') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                      Create News
                    </a>
                    <a class="nav-link" href="<?= site_url('admin/page') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></div>
                        Create Page
                    </a>

                    <div class="sb-sidenav-menu-heading">SISTER KP DAN SRIPSI</div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#kptabar" aria-expanded="false" aria-controls="navbar">
                        <div class="sb-nav-link-icon"><i class="fas fa-cat"></i></div>
                      KPTA
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="kptabar" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?= site_url('admin/datakpta') ?>">
                                Data Image
                            </a>
                            <a class="nav-link" href="<?= site_url('admin/unduhkpta') ?>">
                                Data Unduh
                            </a>
                            <a class="nav-link" href="#">
                                Testimony
                            </a>
                        </nav>
                    </div>

                    <div class="sb-sidenav-menu-heading">PENGATURAN</div>

                    <a class="nav-link" href="#">
                        <div class="sb-nav-link-icon"><i class="fas fa-sliders-h"></i></div>
                        User Account
                    </a>

                    <a class="nav-link" href="<?= site_url('admin/pengaturanakun') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-sliders-h"></i></div>
                        Change Password
                    </a>
                    <a class="nav-link" href="<?= site_url('auth/logout') ?>">
                        <div class="sb-nav-link-icon"><i class="fa fa-power-off"></i></div>
                        Sign Out
                    </a>



                    <!-- <a class="nav-link" href="tables.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Tables
                    </a> -->
                    <!-- <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Layouts
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="layout-static.html">
                                Static Navigation
                            </a>
                            <a class="nav-link" href="layout-sidenav-light.html">
                                Light Sidenav
                            </a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Pages
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">Authentication
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div></a>
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="login.html">Login</a><a class="nav-link" href="register.html">Register</a><a class="nav-link" href="password.html">Forgot Password</a></nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">Error
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div></a>
                            <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="401.html">401
                                        Page</a><a class="nav-link" href="404.html">404 Page</a><a class="nav-link" href="500.html">500 Page</a></nav>
                            </div>
                        </nav>
                    </div> -->

                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                <?= $admin['username'] ?>
            </div>
        </nav>
    </div>
