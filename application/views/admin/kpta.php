<div id="layoutSidenav_content">
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
				<div class="col-12 col-lg-6">
													<div class="card">
															<div class="card-body">
																	<h4 class="card-title">Form Unduh Panduan dan SOP</h4>
																	<div class="basic-form">
																			<form action="#">
																					<div class="form-group">
																					<input type="text" class="form-control input-rounded" placeholder="Title">
																			</div>
																			<div class="form-group">
																			<input type="text" class="form-control input-rounded" placeholder="Sub Title">
																	</div>
																					<div class="input-group mb-3">
																							<div class="input-group-prepend"><span class="input-group-text">link</span>
																							</div>
																							<input type="text" class="form-control">
																					</div>

																							<label class="mr-sm-1">Pilih lokasi</label>
																							<select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
																									<option selected="selected">Choose...</option>
																									<option value="1">One</option>
																									<option value="2">Two</option>
																									<option value="3">Three</option>
																									<option value="4">Four</option>
																									<option value="5">Five</option>
																									<option value="6">Six</option>
																							</select>

																					<div class="form-group mt-3">
																						<button class="btn btn-success waves-effect waves-light" type="submit">Submit
																																		</button>
																					</div>


																			</form>
																	</div>
															</div>
													</div>
											</div>
				<div class="col-12 col-lg-6">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">Uploud Gambar "New Release"</h4>
							<form class="m-t-20">
								<div data-repeater-item class="row mb-3">
									<div class="col-md-10">
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="customFile">
												<label class="custom-file-label" for="customFile">Choose file</label>
											</div>
										</div>
										<div class="col-md-2">
											<button data-repeater-delete="" class="btn btn-danger waves-effect waves-light" type="button">
												<i class="fa fa-minus-square"></i>
											</button>
										</div>
									</div>
									<div class="form-group">
										<button class="btn btn-success waves-effect waves-light" type="submit">Submit
                                            </button>
									</div>
								</form>
							</div>
						</div>
					</div>


				</div>
			</div>
		</main>
