<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><?= $judul ?></h1>
            <hr>
            <?= $this->session->flashdata('message'); ?>
            <?= $error ? '<div class="alert alert-danger" role="alert">Gagal Mengupload Gambar</div>' : '' ?>

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#post">Tambah Poster</a>
            <div class="row">
                <div class="col-md-8">
                    <table class="table table-bordered mt-3">
                        <thead class="thead-dark">
                            <tr>
                                <th width="10%">No</th>
                                <th width="40%">Poster</th>
                                <th width="20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($poster as $ig) :
                            ?>
                                <tr>
                                    <td class="align-middle text-center"><?= $i ?></td>
                                    <td><img src="<?= base_url('assets/images/slider-ig/') . $ig['gambar'] ?>" class="img-thumbnail rounded"></td>
                                    <!-- <td class="align-bottom text-center">
                                        <a href="" class="btn btn-warning">Edit</a>
                                    </td> -->
                                    <td class="align-middle text-center">
                                        <a href="<?= base_url('admin/deleteposter/') . $ig['id_poster'] ?>" class="btn btn-danger">Delete</a>
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

    <div class="modal fade" id="post" tabindex="-1" role="dialog" aria-labelledby="postLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="postLabel">Tambah Post Instagram</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart(); ?>
                    <div class="form-group">
                        <label for="gambar">Pilih gambar</label>
                        <input type="file" class="form-control-file" id="gambar" name="gambar">
                        <small id="error" class="form-text text-danger"><?= $error ?></small>
                    </div>
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" class="form-control" id="link" name="link">
                        <small id="error" class="form-text text-danger"><?= form_error('link') ?></small>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <input type="submit" name="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>