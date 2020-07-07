<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><?= $judul ?></h1>
            <hr>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <?php echo form_open_multipart(); ?>
                        <?php
                        if ($foto) :
                        ?>
                            <div class="form-group">
                                <label for="foto">Upload foto</label>
                                <input type="file" class="form-control-file" id="foto" name="foto">
                                <small id="error" class="form-text text-danger"><?= $error ?></small>
                            </div>
                        <?php else : ?>
                            <img src="<?= base_url('assets/images/dosen/') . $dosen['foto'] ?>" alt="..." class="img-thumbnail mb-3" style="max-height: 200px;">
                            <a href="<?= base_url('admin/editdosen/') . $dosen['id_dosen'] ?>/1" class="btn btn-danger ml-3">Hapus Foto</a>
                        <?php endif; ?>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $dosen['nama'] ?>">
                            <small id="error" class="form-text text-danger"><?= form_error('nama') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $dosen['jabatan'] ?>"> <small id="error" class="form-text text-danger"><?= form_error('jabatan') ?></small>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>