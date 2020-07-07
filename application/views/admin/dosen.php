<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><?= $judul ?></h1>
            <hr>
            <a href="<?= base_url('admin/tambahdosen') ?>" class="btn btn-primary mb-3">Tambah Dosen</a>
            <div class="container">
                <div class="row">
                    <?php
                    foreach ($dosen as $d) :
                    ?>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="<?= base_url('assets/images/dosen/') . $d['foto'] ?>" class="card-img-top" alt="Dosen TIF" style="background-color:#1f1f1f;object-fit:contain;max-height:200px">
                                <div class="card-body text-center">
                                    <h5 class="card-title"><?= $d['nama'] ?></h5>
                                    <p class="card-text"><?= $d['jabatan'] ?></p>
                                    <a href="<?= base_url('admin/editdosen/') . $d['id_dosen'] ?>" class="btn btn-warning">Edit</a>
                                    <a href="<?= base_url('admin/deletedosen/') . $d['id_dosen'] ?>" class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main>