<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">

            <!-- Page Heading -->


            <?= $this->session->flashdata('message'); ?>

            <!-- DataTales Example -->
            <div class="row justify-content-between">
                <div class="col-md-12">
                    <div class="card shadow mb-4 mt-3">
                        <div class="card-header bg-dark">
                            <h1 class="h3 text-light"><?= $judul ?></h1>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    <?= form_open_multipart(); ?>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="<?= $title['value'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="<?= $desc['value'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Logo Website</label>
                                        <div class="col-sm-10">
                                            <input type="file" id="gambar" class="form-control-file" name="logo">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <img id="preview" class="img-fluid" src="<?= base_url('assets/images/') . $logo['value'] ?>" alt="preview" style="height: 200px; object-fit:contain;">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Copyright</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="<?= $copyright['value'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Company</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="<?= $company['value'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="<?= $address['value'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Contact</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" value="<?= $contact['value'] ?>">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>