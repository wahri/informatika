<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid mt-5">


            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"><?= $judul ?></h1>
            </div>

            <!-- Content Row -->
            <?= $this->session->flashdata('message'); ?>
            <div class="row">
                <div class="col-md-8">
                    <div class="card shadow mb-4 border-left-primary">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Kategori Berita</h6>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('admin/tambahkategoriberita') ?>" method="POST">
                                <input type="hidden" value="<?= $id_berita ?>" name="id_berita">
                                <?php
                                foreach ($kategori as $k) :
                                    $check = $this->db->get_where('rel_kategori_berita', ['id_berita' => $id_berita, 'id_kategori' => $k['id_kategori']])->row_array();
                                ?>

                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="kategori[]" value="<?= $k['id_kategori'] ?>" id="<?= 'kategori' . $k['id_kategori'] ?>" <?= ($check) ? 'checked' : '' ?>>
                                        <label class="custom-control-label" for="<?= 'kategori' . $k['id_kategori'] ?>"><?= $k['nama_kategori'] ?></label>
                                    </div>
                                <?php endforeach; ?>

                                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>