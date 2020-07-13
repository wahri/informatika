<div id="layoutSidenav_content">
<!-- CSS Tabel -->
<style>

   .demo th {
   border:1px dotted #C0C0C0;
   padding:5px;
   background:#F0F0F0;
   }
   .demo td {
   border:1px dotted #C0C0C0;
   padding:5px;
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
                  <form class="m-t-20">
                     <div data-repeater-item class="row mb-3">
                        <div class="col-md-10">
                           <div class="form-group">
                              <input type="text" name="nama" value="" id="nama" class="form-control" required="true" placeholder="Title">
                           </div>
                           <div class="custom-file">
                              <input type="file" class="custom-file-input" id="customFile">
                              <label class="custom-file-label" for="customFile">Choose file</label>
                           </div>
                           <div class="thumbnail mt-3">
                              <img id="imageDetailFieture" src="http://localhost/celscitech-3/upload/images/noimage.png" alt="">
                              <input id="image_fitur" type="hidden" name="image_fitur" value="">
                              <input id="id_fitur" type="hidden" name="id_fitur" value="">
                           </div>
                           <div class="form-group mt-3">
                              <textarea name="keterangan" cols="40" rows="3" id="keterangan" type="textarea" class="form-control" required="true" value="" placeholder="Description"></textarea>
                           </div>
                           <label class="mr-sm-1">Select Location Shown</label>
                           <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                              <option selected="selected">Choose...</option>
                              <option value="1">Image "New Release"</option>
                              <option value="2">Image "Panduan"</option>
                           </select>
                        </div>
                     </div>
                     <div class="form-group">
                        <button data-repeater-delete="" class="btn btn-danger waves-effect waves-light" type="button">
                        <i class="fa fa-minus-square"></i> Cancel
                        </button>
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
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                           </tr>
                           <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                           </tr>
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
