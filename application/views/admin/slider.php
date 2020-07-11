<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><?= $judul ?></h1>
            <hr>
            <?= $this->session->flashdata('message'); ?>

            <a href="<?= site_url('admin/tambahslider') ?>" class="btn btn-primary mt-3">Tambah Slider</a>

            <div class="row">
                <div class="col-md-8">
                    <table class="table mt-3">
                        <thead class="thead-dark">
                            <tr>
                                <th width="10%">No</th>
                                <th>Image</th>
                                <th width="20%">Action</th>
                                <th width="15%">Active</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($slider as $s) :
                            ?>
                                <tr>
                                    <td rowspan="2" class="align-middle text-center"><?= $i ?></td>
                                    <td rowspan="2"><img src="<?= base_url('assets/images/slider/') . $s['gambar'] ?>" width="100%"></td>
                                    <td class="align-middle text-center">
                                        <a href="<?= base_url('admin/editslider/').$s['id_slider'] ?>" class="btn btn-warning">Edit</a>
                                    </td>
                                    <td rowspan="2" class="align-middle text-center">
                                        <div id="switchonoff">
                                            <label class="switch">
                                                <input class="switch_active" type="checkbox" data-sliderid="<?= $s['id_slider'] ?>" data-isactive="<?= $s['is_active'] ?>" <?= $s['is_active'] == 1 ? "checked" : "" ?>>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle text-center">
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-idpage="<?= $s['id_slider'] ?>" data-method="deleteslider">Delete</button>
                                    </td>
                                </tr>

                            <?php $i++;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main>

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
