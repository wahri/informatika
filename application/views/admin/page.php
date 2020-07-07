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
                            <a href="<?= base_url('admin/tambahpage') ?>" class="btn btn-primary mb-3">Tambah Page</a>
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
                                                    <a href="<?= base_url('admin/deletepage/') . $p['id_page'] ?>" class="btn btn-sm btn-danger">
                                                        <span class="text">Delete</span>
                                                    </a>

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