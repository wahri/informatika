<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <?= $this->session->flashdata('message'); ?>

            <!-- DataTales Example -->
            <div class="row justify-content-between">
                <div class="col-12">
                    <div class="card shadow mb-4 mt-3">
                        <div class="card-header bg-dark">
                            <h1 class="h3 text-light"><?= $judul ?></h1>
                        </div>
                        <div class="card-body">
                            <a href="<?= base_url('admin/tambahpage') ?>" class="btn btn-primary mb-3"> Tambah Halaman</a>
                            <div class="table-responsive">
                                <table class="table table-sm table-bordered" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th width="8%">No</th>
                                            <th width="80%">Judul Berita</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $i = 1;
                                        foreach ($page as $p) :
                                        ?>
                                            <tr>
                                                <td><?= $i ?></td>
                                                <td>
                                                    <?= $p['judul'] ?>
                                                </td>
                                                <td class="align-middle">
                                                    <a href="<?= base_url('admin/editpage/') . $p['id_page'] ?>" class="btn btn-sm btn-warning">
                                                        <span class="text">Edit</span>
                                                    </a>
                                                    <!-- <a href="<?= base_url('admin/deletepage/') . $p['id_page'] ?>" class="btn btn-sm btn-danger">
                                                        <span class="text">Delete</span>
                                                    </a> -->
                                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal" data-idpage="<?= $p['id_page'] ?>" data-method="deletepage">Delete</button>
                                                </td>

                                            </tr>
                                        <?php $i++;
                                        endforeach; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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
