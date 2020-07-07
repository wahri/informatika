<!-- Begin Page Content -->

<!-- /.container-fluid -->

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid mt-3">


            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"><?= $judul ?></h1>
            </div>

            <!-- Content Row -->
            <?= $this->session->flashdata('message'); ?>
            <div class="row">
                <div class="col-md-8">
                    <div class="card shadow mb-4 border-left-primary">
                        <!-- <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Basic Card Example</h6>
                </div> -->
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-md-12">
                                    <form method="POST" action="">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="hidden" class="form-control" name="id" value="<?= $admin['id'] ?>">
                                            <input type="text" class="form-control" name="username" value="<?= $admin['username'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Ubah Password</label>
                                            <input type="password" class="form-control" name="password1">
                                            <small class="form-text text-danger"><?= form_error('password1') ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Konfirmasi Password</label>
                                            <input type="password" class="form-control" name="password2">
                                            <small class="form-text text-danger"><?= form_error('password2') ?></small>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Ubah</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>