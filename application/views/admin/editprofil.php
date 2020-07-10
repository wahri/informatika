<div id="layoutSidenav_content">
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script> -->
    <script src="<?= base_url('assets/ckeditor/ckeditor.js') ?>"></script>

    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><?= $judul ?></h1>
            <hr>
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>
            <?= $this->session->flashdata('message'); ?>
        </div>
        <div class="container">
            <form action="" method="POST">
                <input type="hidden" name="id_profil" value="<?= $profil['id_profil'] ?>">
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group input-group-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-lg">Judul</span>
                            </div>
                            <input type="text" class="form-control" name="judul" value="<?= $profil['judul'] ?>">
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="paragraf" id="editor">
                                        <?= $profil['paragraf'] ?>
                                     </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary" type="submit">Edit Profil</button>
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
        CKEDITOR.replace('paragraf');
    </script>