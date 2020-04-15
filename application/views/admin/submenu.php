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
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#submenu">Tambah Submenu</a>
            <div class="row">
                <div class="col-md-8">
                    <table class="table mt-3">
                        <thead class="thead-dark">
                            <tr>
                                <th width="10%">No</th>
                                <th>Nama Menu</th>
                                <th>Nama Submenu</th>
                                <th>Link</th>
                                <th width="30%" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($submenu as $s) :
                                $nama_menu = $this->db->get_where('menu', ['id_menu' => $s['id_menu']])->row_array();
                            ?>
                                <tr>
                                    <td class="align-middle text-center"><?= $i ?></td>
                                    <td><?= $nama_menu['menu'] ?></td>
                                    <td><?= $s['submenu'] ?></td>
                                    <td><?= $s['link'] ?></td>
                                    <td class="align-middle text-center">
                                        <a href="" class="btn btn-warning">Edit</a>
                                        <a href="" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>

                            <?php
                                $i++;
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main>

    <!-- MODAL -->

    <div class="modal fade" id="submenu" tabindex="-1" role="dialog" aria-labelledby="submenuLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="submenuLabel">Tambah submenu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="menu">Menu</label>
                                </div>
                                <select class="custom-select" id="menu" name="id_menu">
                                    <option selected>Pilih menu...</option>
                                    <?php foreach ($menu as $m) : ?>
                                        <option value="<?= $m['id_menu'] ?>"><?= $m['menu'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="submenu">Nama Submenu</label>
                            <input type="text" class="form-control" id="submenu" name="submenu">
                            <small id="error" class="form-text text-danger"><?= form_error('submenu') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="link">Link</label>
                            <input type="text" class="form-control" id="link" name="link">
                            <small id="error" class="form-text text-danger"><?= form_error('link') ?></small>
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