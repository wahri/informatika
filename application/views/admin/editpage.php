<!-- <script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script> -->
<script src="<?= base_url('assets/ckeditor/ckeditor.js') ?>"></script>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid mt-3">
            <?php echo form_open_multipart(); ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="Judul Berita">Judul</span>
                        </div>
                        <input type="text" class="form-control" name="judul" value="<?= $page['judul'] ?>">
                    </div>
                    <small id="error" class="form-text text-danger"><?= form_error('judul') ?></small>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <textarea name="isi" id="editor">
                        <?= $page['isi'] ?>
                </textarea>
                    <small id="error" class="form-text text-danger"><?= form_error('isi') ?></small>
                </div>
            </div>
            <div class="row mt-5 justify-content-between">
                <div class="col-md-5 border">
                    <?php
                    if (!$ubahgambar && $page['gambar'] != null) :
                    ?>
                        <div class="row justify-content-center">
                            <img class="img-thumbnail rounded" src="<?= base_url('assets/images/page/') . $page['gambar'] ?>">
                            <a href="<?= base_url('admin/editpage/') . $page['id_page'] . "/1" ?>" class="btn btn-danger mt-3">Ubah Gambar</a>
                        </div>
                    <?php else : ?>
                        <div class="row">
                            <div class="col-auto">
                                <div class="form-group">
                                    <label for="gambar berita">Upload gambar</label>
                                    <input type="file" class="form-control-file" name="gambar">
                                    <!-- <input type="hidden" name="cek" value="1"> -->
                                    <small id="error" class="form-text text-danger"><?= $error ?></small>
                                </div>
                            </div>
                            <div class="col-auto d-flex align-items-center ml-auto">
                                <a href="<?= base_url('admin/editpage/') . $page['id_page'] ?>" class="btn btn-secondary">Batal</a>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-3 text-right">
                    <button class="btn btn-primary mt-3 btn-lg" type="submit">Upload Page</button>
                </div>
            </div>
            </form>
        </div>
    </main>


    <script>
        CKEDITOR.replace('isi');
    </script>

    <!-- <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script> -->