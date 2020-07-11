<!-- <script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script> -->
<!-- <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script> -->
<script src="<?= base_url('assets/ckeditor/ckeditor.js') ?>"></script>


<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid mt-5">
            <?php echo form_open_multipart(); ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="Judul Berita">Judul</span>
                        </div>
                        <input type="text" class="form-control" name="judul">
                    </div>
                    <small id="error" class="form-text text-danger"><?= form_error('judul') ?></small>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <textarea name="isi" id="editor">
                </textarea>
                    <small id="error" class="form-text text-danger"><?= form_error('isi') ?></small>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-auto border">
                    <div class="form-group">
                        <label for="gambar berita">Upload gambar</label>
                        <input type="file" class="form-control-file" name="gambar">
                        <small id="error" class="form-text text-danger"><?= $error ?></small>
                    </div>
                </div>
                <div class="col-md-3 ml-3">
                    <div class="form-group">
                        <label for="link">Kategori</label>
                        <select id="link" class="form-control">
                            <option selected>Pilih kategori...</option>
                            <option value="link">Link</option>
                            <option value="page">Page</option>
                        </select>
                    </div>
                </div>
                <div class="col text-right">
                    <button class="btn btn-primary mt-3 btn-lg" type="submit">Upload Page</button>
                </div>
            </div>
            </form>
        </div>
    </main>




    <!-- <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script> -->

    <script>
        CKEDITOR.replace('isi');
    </script>