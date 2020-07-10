<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><?= $judul ?></h1>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <?php echo form_open_multipart(); ?>
                        <?php if ($ubahgambar) : ?>
                            <div class="row">
                                <div class="col-auto">
                                    <div class="form-group">
                                        <label for="gambar">Pilih gambar</label>
                                        <input type="file" class="form-control-file" id="gambar" name="gambar">
                                        <small id="error" class="form-text text-danger"><?= $error ?></small>
                                    </div>
                                </div>
                                <div class="col-auto d-flex align-items-center ml-auto">
                                    <a href="<?= base_url('admin/editslider/') . $slider['id_slider'] ?>" class="btn btn-secondary">Batal</a>
                                </div>
                            </div>

                        <?php else : ?>
                            <div class="row mb-3">
                                <div class="col-auto text-center">
                                    <img class="img-fluid rounded" src="<?= base_url('assets/images/slider/') . $slider['gambar'] ?>">
                                    <a href="<?= base_url('admin/editslider/') . $slider['id_slider'] . "/1" ?>" class="btn btn-danger mt-3">Ubah Gambar</a>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <!-- <label for="link">Pilihan Link</label> -->
                            <select id="link" class="form-control">
                                <option selected>Pilihan Link</option>
                                <option value="link">Link</option>
                                <option value="page">Page</option>
                            </select>
                        </div>
                        <div class="form-group" id="pilihan-link">
                            <input type="text" class="form-control" name="link" id="pilihanPage" placeholder="Masukkan link" value="<?= $slider['link'] ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>