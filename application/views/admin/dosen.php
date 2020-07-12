<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><?= $judul ?></h1>
            <hr>
            <a href="<?= base_url('admin/tambahdosen') ?>" class="btn btn-primary mb-3"><i class="fa fa-user-plus"></i> Add Lecturer</a>
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
                                    <a href="<?= base_url('admin/editdosen/') . $d['id_dosen'] ?>" class="btn btn-warning"><i class="fas fa-highlighter"></i> Edit</a>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-idpage="<?= $d['id_dosen'] ?>" data-method="deletedosen"><i class="fa fa-user-times"></i></button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin?</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> -->
                    <a id="hapus" href="" class="btn btn-danger ml-auto">Hapus</a>
                </div>
                <!-- <div class="modal-body">
                    <p>Apakah anda yakin?</p>
                </div> -->
                <!-- <div class="modal-footer">

                </div> -->
            </div>
        </div>
    </div>
