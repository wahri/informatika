<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><?= $judul ?></h1>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                    <?php echo form_open_multipart(); ?>
                            <div class="form-group">
                                <label for="gambar">Pilih gambar</label>
                                <input type="file" class="form-control-file" id="gambar" name="gambar">
                                <small id="error" class="form-text text-danger"><?= $error ?></small>
                            </div>
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul">
                                <small id="error" class="form-text text-danger"><?= form_error('judul') ?></small>
                                
                            </div>
                            <div class="form-group">
                                <label for="subjudul">Subjudul</label>
                                <textarea class="form-control" id="subjudul" rows="2" name="subjudul"></textarea>
                                <small id="error" class="form-text text-danger"><?= form_error('subjudul') ?></small>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>