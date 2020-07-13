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
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#submenu"><i class="fa fa-plus-square"></i> Add Submenu</a>
            <div class="row">
                <div class="col-md-8">
                    <table class="table table-bordered mt-3">
                        <thead class="thead-dark">
                            <tr>
                                <th width="10%">No</th>
                                <th>Nama Menu</th>
                                <th>Nama Submenu</th>
                                <th class="text-center">Action</th>
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
                                    <td class="align-middle text-center">
                                        <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editsubmenu" data-id="<?= $s['id_submenu'] ?>" data-menu="<?= $s['id_menu'] ?>" data-submenu="<?= $s['submenu'] ?>" data-link="<?= $s['link'] ?>">Edit</button>
                                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal" data-idpage="<?= $s['id_submenu'] ?>" data-method="deletesubmenu">Delete</button>
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

    <div class="modal fade" id="editsubmenu" tabindex="-1" role="dialog" aria-labelledby="editmenuLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editmenuLabel">Edit Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('admin/editsubmenu') ?>" method="POST">
                        <input type="hidden" name="id_submenu">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="menu">Menu</label>
                                </div>
                                <select class="custom-select" name="id_menu">
                                    <option>Pilih menu...</option>
                                    <?php foreach ($menu as $m) : ?>
                                        <option value="<?= $m['id_menu'] ?>"><?= $m['menu'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="submenu">Nama Submenu</label>
                            <input type="text" class="form-control" name="submenu">
                            <small id="error" class="form-text text-danger"><?= form_error('submenu') ?></small>
                        </div>
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
                    <button type="submit" class="btn btn-primary">Edit</button>
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
