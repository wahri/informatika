<div id="layoutSidenav_content">
    <script src="https://cdn.tiny.cloud/1/hced6f6vmasah3yog1ylndino1zrc9s47noc19wr4uszc8e4/tinymce/5/tinymce.min.js" referrerpolicy="origin">
    </script>
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><?= $judul ?></h1>
            <hr>
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>
            <?= $this->session->flashdata('message'); ?>
        </div>
        <div class="container">
            <form action="" method="POST">
            <input type="hidden" name="id_profil" value="<?= $profil['id_profil'] ?>">
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-lg">Judul</span>
                        </div>
                        <input type="text" class="form-control" name="judul" value="<?= $profil['judul'] ?>">
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="paragraf">
                                    <?= $profil['paragraf'] ?>
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <button class="btn btn-primary" type="submit">Edit Profil</button>
                        </form>
                        </div>
                    </div>
                </div>
                <?php if ($profil['gambar'] != null) : ?>
                    <div class="col-md-3 text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?= site_url('assets/images/') . $profil['gambar'] ?>" class="img-fluid">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <a href="<?= site_url('admin/hapusgambarprofil') ?>" class="btn btn-danger">Ganti Gambar</a>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <?php echo form_open_multipart('admin/uploadgambarprofil'); ?>
                    <div class="row">
                        <div class="col-md-7 justify-content-center">
                            <div class="form-inline mt-3 border py-4 px-4">
                                <div class="form-group mb-2">
                                    <label for="exampleFormControlFile1">Upload gambar</label>
                                    <input type="file" class="form-control-file" id="gambar" name="gambar">
                                </div>
                                <button class="btn btn-primary" type="submit">Upload gambar</button>
                            </div>
                            </form>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </main>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: [
                'link',
                'lists',
                'powerpaste',
                'autolink',
                'tinymcespellchecker'
            ],
            toolbar: [
                'undo redo | bold italic underline | fontselect fontsizeselect',
                'forecolor backcolor | alignleft aligncenter alignright alignfull | numlist bullist outdent indent'
            ],
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
        });
    </script>