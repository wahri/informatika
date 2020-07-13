<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">

            <!-- Page Heading -->


            <?= $this->session->flashdata('message'); ?>

            <!-- DataTales Example -->
            <div class="row justify-content-between">
                <div class="col-md-9">
                    <div class="card shadow mb-4 mt-3">
                        <div class="card-header bg-dark">
                            <h1 class="h3 text-light"><?= $judul ?></h1>
                        </div>
                        <div class="card-body">
                            <a href="<?= base_url('admin/tambahberita') ?>" class="btn btn-primary mb-3"><i class="fa fa-plus-square"></i> Add News</a>
                            <div class="table-responsive">
                                <table class="table table-sm table-bordered" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th width="8%">No</th>
                                            <th width="59%">News Title</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $i = 1;
                                        foreach ($berita as $b) :
                                        ?>
                                            <tr>
                                                <td><?= $i ?></td>
                                                <td>
                                                    <?= $b['judul'] ?>
                                                </td>
                                                <td class="align-middle">
                                                    <a href="<?= base_url('admin/editberita/') . $b['id_berita'] ?>" class="btn btn-sm btn-warning">
                                                        <span class="text"><i class="fas fa-highlighter"></i> Edit</span>
                                                    </a>
                                                    <a href="<?= base_url('admin/kategoriberita/') . $b['id_berita'] ?>" class="btn btn-sm btn-info">
                                                        <span class="text"><i class="fas fa-plus"></i> Kategori</span>
                                                    </a>
                                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal" data-idpage="<?= $b['id_berita'] ?>" data-method="deleteberita"><i class="fa fa-trash"></i></button>


                                                </td>

                                            </tr>
                                        <?php $i++;
                                        endforeach; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow mb-4 mt-3">
                        <!-- <div class="card-header bg-primary">
                    <h1 class="h3 text-light"><?= $judul ?></h1>
                </div> -->
                        <div class="card-body">
                            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#kategori"><i class="fa fa-plus-square"></i> Add Category</a>
                            <div class="table-responsive">
                                <h6 class="h5">List Category</h6>
                                <table class="table table-bordered table-sm" id="dataTables">
                                    <thead>
                                        <tr>
                                            <th width="80%">Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        foreach ($kategori as $k) :
                                        ?>
                                            <tr>
                                                <td>
                                                    <?= $k['nama_kategori'] ?>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal" data-idpage="<?= $k['id_kategori'] ?>" data-method="deletekategoriberita"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>


    <!-- MODAL -->

    <div class="modal fade" id="kategori" tabindex="-1" role="dialog" aria-labelledby="kategori" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="kategori">Tambah Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('admin/tambahkategori'); ?>
                    <div class="form-group">
                        <label for="nama kategori">Nama Kategori</label>
                        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori">
                        <small id="error" class="form-text text-danger"><?= form_error('nama_kategori') ?></small>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin?</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> -->
                    <a id="hapus" href="" class="btn btn-danger ml-auto">Hapus</a>
                </div>
                <!-- <div class="modal-body">
                    <p>Apakah anda yakin?</p>
                </div> -->
                <!-- <div class="modal-footer">

                </div> -->
            </div>
        </div>
    </div>
