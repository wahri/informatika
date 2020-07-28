<div id="layoutSidenav_content">
   <!-- CSS Tabel -->
   <style>
      .demo th {
         border: 1px dotted #C0C0C0;
         padding: 5px;
         background: #F0F0F0;
      }

      .demo td {
         border: 1px dotted #C0C0C0;
         padding: 5px;
      }
   </style>
   <!-- CSS Tabel End -->
   <main>
      <div class="container-fluid">
         <!-- DataTales Example -->
         <div class="row justify-content-between">
            <div class="col-12">
               <div class="card shadow mb-4 mt-3">
                  <div class="card-header bg-dark">
                     <h1 class="h3 text-light">
                        <?= $judul ?>
                     </h1>
                     <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">We're ready when you are.</li>
                     </ol>
                  </div>
               </div>
            </div>

            <!--data image Start-->
            <div class="col-12 col-lg-4">
               <div class="card">
                  <div class="card-body">
                     <h4 class="card-title">Data Image</h4>
                     <?= form_open_multipart('admin/inputDataImageKPTA'); ?>
                     <div data-repeater-item class="row mb-3">
                        <div class="col-md-10">
                        <input type="hidden" name="id" value="<?= $editgambar['id_gambar'] ?>">
                           <div class="form-group">
                              <input type="text" name="title" id="title" class="form-control" required="true" placeholder="Title" value="<?= $editgambar['title'] ?>">
                           </div>
                           <div class="custom-file">
                              <input type="file" class="custom-file-input" name="gambar" id="gambar">
                              <label class="custom-file-label" for="customFile">Choose file</label>
                           </div>
                           <div class="thumbnail mt-3">
                              <img id="preview" src="<?= base_url('assets/images/kpta/') ?><?= $editgambar != null ? $editgambar['gambar'] : "preview-icon.png" ?>" alt="preview" style="height: 200px; width:200px; object-fit:contain;">
                              <!-- <input id="image_fitur" type="hidden" name="image_fitur" value=""> -->
                              <!-- <input id="id_fitur" type="hidden" name="id_fitur" value=""> -->
                           </div>
                           <div class="form-group mt-3">
                              <textarea name="description" cols="40" rows="3" id="description" type="textarea" class="form-control" required="true" placeholder="Description"><?= $editgambar['description'] ?></textarea>
                           </div>
                           <label class="mr-sm-1">Select Location Shown</label>
                           <select class="custom-select mr-sm-2" name="location">
                              <option selected="selected">Choose...</option>
                              <option value="new_release" <?= $editgambar['location'] == 'new_release' ? 'selected' : '' ?>>Image "New Release"</option>
                              <option value="panduan" <?= $editgambar['location'] == 'panduan' ? 'selected' : '' ?>>Image "Panduan"</option>
                              <option value="foto" <?= $editgambar['location'] == 'foto' ? 'selected' : '' ?>>Image "Foto Profil"</option>
                           </select>
                        </div>
                     </div>
                     <div class="form-group">
                        <a href="<?= base_url('admin/datakpta') ?>" data-repeater-delete="" class="btn btn-danger waves-effect waves-light" type="button">
                           <i class="fa fa-minus-square"></i> Cancel
                        </a>
                        <button class="btn btn-success waves-effect waves-light" type="submit">Submit
                        </button>
                     </div>
                     </form>
                  </div>
               </div>
            </div>
            <!--data image end-->
            <!--tabel image start-->
            <div class="col-12 col-lg-8">
               <div class="card">
                  <div class="card-body">
                     <h4 class="card-title">Table Data Uploud Image</h4>
                     <div class="basic-form">
                        <table class="demo">
                           <caption></caption>
                           <thead>
                              <tr>
                                 <th>#</th>
                                 <th>Title</th>
                                 <th>Image</th>
                                 <th>Description</th>
                                 <th>Lct</th>
                                 <th width="20%">Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                              $no = 1;
                              foreach ($gambar as $g) :
                              ?>
                                 <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $g['title'] ?></td>
                                    <td><img src="<?= base_url('assets/images/kpta/') . $g['gambar'] ?>" width="30%"></td>
                                    <td><?= $g['description'] ?></td>
                                    <td><?= $g['location'] ?></td>
                                    <td>
                                       <a href="<?= base_url('admin/datakpta/') . $g['id_gambar'] ?>" class="btn btn-warning"><i class="fas fa-highlighter"></i> Edit</a>
                                       <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-idpage="<?= $g['id_gambar'] ?>" data-method="deleteslider"><i class="fa fa-trash"></i></button>
                                    </td>
                                 </tr>
                              <?php $no++;
                              endforeach; ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            <!--tabel image end-->
         </div>
      </div>
   </main>