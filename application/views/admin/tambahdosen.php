<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><?= $judul ?></h1>
            <hr>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <?php echo form_open_multipart(); ?>

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                            <small id="error" class="form-text text-danger"><?= form_error('nama') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan"> <small id="error" class="form-text text-danger"><?= form_error('jabatan') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="foto">Upload foto</label>
                            <input type="file" class="form-control-file" id="foto" name="foto">
                            <small id="error" class="form-text text-danger"><?= $error ?></small>
                        </div>
                        <div class="form-group">
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">
                                        <i class="fab fa-facebook"></i>
                                    </span>
                                </div>
                                <input type="text" name="facebook" class="form-control" placeholder="URL Facebook" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">
                                        <i class="fab fa-instagram"></i>
                                    </span>
                                </div>
                                <input type="text" name="instagram" class="form-control" placeholder="URL Instagram" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">
                                        <i class="fab fa-linkedin"></i>
                                    </span>
                                </div>
                                <input type="text" name="linkedin" class="form-control" placeholder="URL Linkedin" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <button type="" class="btn btn-secondary">Cancel</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-user-plus"></i> Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
