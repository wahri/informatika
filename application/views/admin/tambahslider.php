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
                            <!-- <label for="link">Pilihan Link</label> -->
                            <select id="link" class="form-control">
                            <option selected>Pilihan Link</option>
                                <option value="link">Link</option>
                                <option value="page">Page</option>
                            </select>
                        </div>
                        <div class="form-group" id="pilihan-link">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>