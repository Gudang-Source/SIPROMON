				<div class="breadcrumbs">
						<div class="col-sm-4">
								<div class="page-header float-left">
										<div class="page-title">
												<h1>Pejabat</h1>
										</div>
								</div>
						</div>
						<div class="col-sm-8">
								<div class="page-header float-right">
										<div class="page-title">
												<ol class="breadcrumb text-right">
														<li><a href="#">Pejabat</a></li>
														<li class="active">Semua Pejabat</li>
												</ol>
										</div>
								</div>
						</div>
				</div>

				<div class="content mt-3">
					<div class="col-sm-12 mb-4">
						<?php echo form_open('Pejabat/form'); ?>
							<div class="form-group row">
						    <label for="inputEmail3" class="col-sm-3 col-form-label">NIP</label>
								<div class="input-group col-6">
							    <input type="text" class="form-control" name="nip" value="<?=$row['nip']; ?>">
							  </div>
						  </div>
							<div class="form-group row">
						    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Lengkap dan Gelar</label>
						    <div class="input-group col-6">
							    <input type="text" class="form-control" type="text" name="name" value="<?=$row['name']; ?>">
							  </div>
						  </div>
							<div class="form-group row">
						    <label for="inputEmail3" class="col-sm-3 col-form-label">Username</label>
						    <div class="input-group col-6">
							    <input type="text" class="form-control" type="text" name="username" value="<?=$row['username']; ?>">
							  </div>
						  </div>						  
							<div class="form-group row">
						    <label for="inputEmail3" class="col-sm-3 col-form-label">Password Baru <a href="#" data-toggle="tooltip" title="Ganti Password"><i class="fa fa-info-circle"></i></a></label>
						    <div class="col-6">
						      <input type="password" class="form-control">
						    </div>
						  </div>
							<div class="form-group row">
								<div class="offset-sm-3 col-sm-9">
									<input type="hidden" name="id" value="<?=$row['id']; ?>">
									<button type="submit" class="btn btn-labeled btn-primary"><span class="btn-label"><i class="fa fa-fw fa-save"></i></span> Simpan</button>
								</div>
							</div>
						</form>
					</div>
				</div><!-- .content -->
		</div><!-- /#right-panel -->
		<!-- Right Panel -->