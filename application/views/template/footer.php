<div class="customers-box pt-5">
    <div class="container">
        <!-- Our Customers -->
        <h2>Unit Kemahasiswaan</h2>
        <div class="row">
            <div class="col-lg-12">
                <div id="customers-slider" class="owl-carousel">
                    <?php
                    $logo = $this->db->get('organisasi')->result_array();
                    foreach ($logo as $l) :
                    ?>
                        <div class="mb-4">
                            <img class="img-fluid" src="<?= site_url('assets/images/organisasi/') . $l['gambar'] ?>" alt="<?= $l['nama'] ?>" />
                        </div>
                    <?php endforeach; ?>
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
                <a class="btn btn-lg btn-secondary btn-block" id="tombolpmb" href="http://daftar.umri.ac.id/"><i class="far fa-paper-plane"></i> Daftar Sekarang</a>
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
                    <p class="mb-3">
                        <i class="fas fa-envelope"></i> Informatika@umri.ac.id
                    </p>
                    <p class="mt-0"><img src="<?= base_url('assets/images/ban-pt.png') ?>" width="100px"> <img src="<?= base_url('assets/images/ban-pt-2.png') ?>" width="80px"></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 pl-5">
                <h5 class="headin5_amrc col_white_amrc pt2">Pranala</h5>
                <!--headin5_amrc-->
                <ul class="footer_ul_amrc">
                    <li><a href="http://umri.ac.id/" target="_blank"><i class="fas fa-long-arrow-alt-right"></i>umri.ac.id</a></li>
                    <li><a href="http://daftar.umri.ac.id/" target="_blank"><i class="fas fa-long-arrow-alt-right"></i>Daftar UMRI</a></li>
                    <li><a href="http://celscitech.umri.ac.id/" target="_blank"><i class="fas fa-long-arrow-alt-right"></i>Celscitech</a></li>
                    <li><a href="http://ejurnal.umri.ac.id/index.php/coscitech" target="_blank"><i class="fas fa-long-arrow-alt-right"></i>Jurnal CoSciTech</a></li>
                    <li><a href="http://repo.umri.ac.id/" target="_blank"><i class="fas fa-long-arrow-alt-right"></i>Repositori TA</a></li>
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
                    <li><a class="twitter hb-xs-margin" href="#"><span class="hb hb-xs spin hb-twitter"><i class="fab fa-youtube"></i></span></a></li>
                    <li><a class="instagram hb-xs-margin" href="https://www.instagram.com/informatika_umri/"><span class="hb hb-xs spin hb-instagram"><i class="fab fa-instagram"></i></span></a></li>
                    <!-- <li><a class="googleplus hb-xs-margin" href="#"><span class="hb hb-xs spin hb-google-plus"><i class="fab fa-google-plus-g"></i></span></a></li>
                    <li><a class="dribbble hb-xs-margin" href="#"><span class="hb hb-xs spin hb-dribbble"><i class="fab fa-dribbble"></i></span></a></li> -->
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