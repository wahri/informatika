<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><?= $judul ?></h1>
            <hr>
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    Gagal Menambahkan Menu!
                </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#menu">Tambah Menu</a>
            <div class="row">
                <div class="col-md-8">
                    <table class="table table-bordered mt-3">
                        <thead class="thead-dark">
                            <tr>
                                <th width="10%">Urutan</th>
                                <th>Nama Menu</th>
                                <th>Link</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($menu as $s) :
                            ?>
                                <tr>
                                    <td class="align-middle text-center"><?= $s['urutan'] ?></td>
                                    <td><?= $s['menu'] ?></td>
                                    <td><?= $s['link'] ?></td>
                                    <td class="align-middle text-center">
                                        <!-- <a href="" class="btn btn-warning">Edit</a> -->
                                        <!-- <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editmenu" data-id="<?= $s['id_menu'] ?>" data-urutan="<?= $s['urutan'] ?>" data-nama="<?= $s['menu'] ?>" data-link="<?= $s['link'] ?>">Edit</button> -->
                                        <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editmenu" data-id="<?= $s['id_menu'] ?>" data-urutan="<?= $s['urutan'] ?>" data-nama="<?= $s['menu'] ?>" data-link="<?= $s['link'] ?>">Edit</button>
                                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal" data-idpage="<?= $s['id_menu'] ?>" data-method="deletemenu">Delete</button>
                                    </td>
                                </tr>

                            <?php $i++;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main>

    <!-- MODAL -->

    <div class="modal fade" id="menu" tabindex="-1" role="dialog" aria-labelledby="menuLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="menuLabel">Tambah Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="urutan">Urutan</label>
                            <input type="text" class="form-control" id="urutan" name="urutan">
                            <small id="error" class="form-text text-danger"><?= form_error('urutan') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="menu">Nama Menu</label>
                            <input type="text" class="form-control" id="menu" name="menu">
                            <small id="error" class="form-text text-danger"><?= form_error('menu') ?></small>
                        </div>
                        <!-- <div class="form-group">
                            <label for="link">Link</label>
                            <input type="text" class="form-control" id="link" name="link">
                            <small id="error" class="form-text text-danger"><?= form_error('link') ?></small>
                        </div> -->
                        <div class="form-group">
                            <!-- <label for="link">Pilihan Link</label> -->
                            <select id="link" class="form-control">
                                <option selected>Pilihan Link</option>
                                <option value="link">Link</option>
                                <option value="page">Page</option>
                            </select>
                        </div>
                        <div class="form-group" id="pilihan-link">
                        </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editmenu" tabindex="-1" role="dialog" aria-labelledby="editmenuLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editmenuLabel">Edit Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('admin/editmenu') ?>" method="POST">
                        <input type="hidden" name="id_menu">
                        <div class="form-group">
                            <label for="urutan">Urutan</label>
                            <input type="text" class="form-control" id="urutan" name="urutan">
                            <small id="error" class="form-text text-danger"><?= form_error('urutan') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="menu">Nama Menu</label>
                            <input type="text" class="form-control" id="menu" name="menu">
                            <small id="error" class="form-text text-danger"><?= form_error('menu') ?></small>
                        </div>
                        <!-- <div class="form-group">
                            <label for="link">Link</label>
                            <input type="text" class="form-control" id="link" name="link">
                            <small id="error" class="form-text text-danger"><?= form_error('link') ?></small>
                        </div> -->
                        <div class="form-group">
                            <label for="link">Link</label>
                            <select id="link-edit" class="form-control">
                                <option selected>Pilihan Link</option>
                                <option value="link">Link</option>
                                <option value="page">Page</option>
                            </select>
                        </div>
                        <div class="form-group" id="pilihan-link-edit">
                            <input type="text" class="form-control" name="link" id="pilihanPage" placeholder="Masukkan link">
                        </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

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