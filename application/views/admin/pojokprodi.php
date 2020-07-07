<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><?= $judul ?></h1>
            <hr>
            <?php
            $page = $this->db->get('page')->result_array();
            ?>
            <div class="row mb-3">
                <div class="col-md-4">
                    <form action="<?= base_url('admin/editpojokprodi/page-1/') . $prodi['id_pojok_prodi'] ?>" method="POST">
                        <div class="form-row align-items-center">
                            <div class="col-9">
                                <label class="sr-only" for="page">Page 1</label>
                                <select class="custom-select" name="page" id="page">
                                    <?php foreach ($page as $p) : ?>
                                        <option value="<?= $p['id_page'] ?>" <?= $p['id_page'] == $prodi['page-1'] ? 'selected' : '' ?>><?= $p['judul'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="col-3 text-right">
                                <button type="submit" class="btn btn-primary">Ubah</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <form action="<?= base_url('admin/editpojokprodi/page-2/') . $prodi['id_pojok_prodi'] ?>" method="POST">
                        <div class="form-row align-items-center">
                            <div class="col-9">
                                <label class="sr-only" for="page">Page 1</label>
                                <select class="custom-select" name="page" id="page">
                                    <?php foreach ($page as $p) : ?>
                                        <option value="<?= $p['id_page'] ?>" <?= $p['id_page'] == $prodi['page-2'] ? 'selected' : '' ?>><?= $p['judul'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="col-3 text-right">
                                <button type="submit" class="btn btn-primary">Ubah</button>
                            </div>
                        </div>
                    </form>
                </div>
                <?php if (!$poster) : ?>
                    <div class="col-md-4 text-center">
                        <a href="<?= base_url('admin/pojokprodi/1') ?>" class="btn btn-danger">Ubah Poster</a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <?php $page1 = $this->db->get_where('page', ['id_page' => $prodi['page-1']])->row_array(); ?>
                    <div class="card">
                        <img src="<?= base_url('assets/images/page/') . $page1['gambar'] ?>" class="card-img-top h-75" alt="<?= $page1['judul'] ?>">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?= $page1['judul'] ?></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <?php $page2 = $this->db->get_where('page', ['id_page' => $prodi['page-2']])->row_array(); ?>
                    <div class="card">
                        <img src="<?= base_url('assets/images/page/') . $page2['gambar'] ?>" class="card-img-top h-75" alt="<?= $page2['judul'] ?>">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?= $page2['judul'] ?></h5>
                        </div>
                    </div>
                </div>

                <?php if ($poster) : ?>
                    <div class="col-md-4 justify-content-center">
                        <?php echo form_open_multipart('admin/editpojokprodi/poster/' . $prodi['id_pojok_prodi']); ?>
                        <div class="form-inline mt-3 border pl-4 pt-2">
                            <div class="form-group mb-2">
                                <label for="poster">Upload poster</label>
                                <input type="file" class="form-control-file" id="gambar" name="gambar">
                            </div>
                            <button class="btn btn-primary mb-3" type="submit">Upload poster</button>
                        </div>
                        </form>
                    </div>
                <?php else : ?>
                    <div class="col-md-4">
                        <?php $poster = $this->db->get_where('poster', ['id_poster' => $prodi['page-2']])->row_array(); ?>
                        <div class="text-center">
                            <img src="<?= base_url('assets/images/poster/') . $prodi['poster'] ?>" class="img-thumbnail rounded">
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </main>