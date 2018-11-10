				<div class="breadcrumbs">
						<div class="col-sm-6">
								<div class="page-header ">
										<div class="page-title">
												<h1>Penyusunan RMP</h1>
										</div>
								</div>
						</div>
						<div class="col-sm-6">
								<div class="page-header float-right">
										<div class="page-title">
												<ol class="breadcrumb text-right">
														<li><a href="#">Kegiatan</a></li>
														<li class="active">Penyusunan RMP</li>
												</ol>
										</div>
								</div>
						</div>
				</div>

				<div class="content mt-3">
						<div class="animated fadeIn">
								<div class="row">
									<div class="col-md-12">
										<div>
											<center><h2><?=$row['judul'] ?></h2>Bab II (<?php if($row['jenis'] == 'Litbang') echo "Kajian Literatur"; else echo "Acuan Normatif"; ?>)</center>
										</div>
										<div>
											<div class="form-group col-md-2">
									      <select id="navigate" class="form-control" style="margin-left:-15px; background-color:#ffd700;">
									        <option disabled><b>-Navigasi-</b></option>
									        <option value="satu" <?php if($this->uri->segment(2) == "satu") echo "selected"; ?> >Bab I</option>
									        <option value="dua" <?php if($this->uri->segment(2) == "dua") echo "selected"; ?>>Bab II</option>
									        <option value="tiga" <?php if($this->uri->segment(2) == "tiga") echo "selected"; ?>>Bab III</option>
									        <option value="empat" <?php if($this->uri->segment(2) == "empat") echo "selected"; ?>>Bab IV</option>
									        <option value="limabelas" <?php if($this->uri->segment(2) == "limabelas") echo "selected"; ?>>Daftar Pustaka</option>
									        <option value="att1" <?php if($this->uri->segment(2) == "att1") echo "selected"; ?>>Lampiran 1</option>
									        <option value="att2" <?php if($this->uri->segment(2) == "att2") echo "selected"; ?>>Lampiran 2</option>
									        <option value="att3" <?php if($this->uri->segment(2) == "att3") echo "selected"; ?>>Lampiran 3</option>
									      </select>
									    </div>											
											<div class="pull-right" style="margin-bottom: 15px;">
												<a href="<?=base_url(); ?>RMP/satu/<?=$this->uri->segment(3)?>" type="button" class="btn btn-labeled btn-danger">
														<span class="btn-label"><i class="fa fa-fw fa-arrow-left"></i></span> Back
												</a>												
												<a href="<?=base_url(); ?>RMP/tiga/<?=$this->uri->segment(3)?>" type="button" class="btn btn-labeled btn-success">
														<span class="btn-label"><i class="fa fa-fw fa-arrow-right"></i></span> Bab 3
												</a>
											</div>
										</div>
									</div>
								</div>
								<?php echo form_open('RMP/dua/'.$this->uri->segment(3)); ?>
								<div class="row">
									<div class="col-md-3">
										<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
											<?php if($row['jenis'] == "Litbang"){ ?>
											<a class="nav-link <?php if($row['jenis'] == "Litbang"){ echo "active"; }?>" id="v-pills-home-tab" data-toggle="pill" href="#tinjauan" role="tab" aria-controls="latar" aria-selected="true">Tinjauan Pustaka</a>
											<?php } ?>
											<a class="nav-link <?php if($row['jenis'] == "Non-Litbang"){ echo "active"; }?>" id="v-pills-profile-tab" data-toggle="pill" href="#acuanteknis" role="tab" aria-controls="masalah" aria-selected="false">Acuan Teknis</a>
											<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#acuanadministrasi" role="tab" aria-controls="masalah" aria-selected="false">Acuan Administrasi</a>
											<input type="hidden" name="id" value="<?=$row['id']; ?>">
											<button type="submit" class="btn btn-success">
													<span class=""><i class="fa fa-fw fa-save"></i></span> Simpan Draf
											</button>
											<!-- button type="submit" class="btn btn-outline-dark">
													<span class=""><i class="fa fa-fw fa-eye"></i></span> Preview
											</button> -->
										</div>
									</div>
									<div class="col-md-9">
										<div class="tab-content" id="v-pills-tabContent">
											<div class="tab-pane fade show <?php if($row['jenis'] == "Litbang"){ echo "active"; }?>" id="tinjauan" role="tabpanel">
												<div class="card-title">
													<h3 class="text-center">Tinjauan Kegiatan</h3>
													<hr>
													<textarea class="ckeditor" name="tinjauan" ><?=$row['tinjauan'];?></textarea>
												</div>
											</div>
											<div class="tab-pane fade show <?php if($row['jenis'] == "Non-Litbang"){ echo "active"; }?>" id="acuanteknis" role="tabpanel">
												<div class="card-title">
													<h3 class="text-center">Acuan Teknis</h3>
													<hr>
													<textarea class="ckeditor" name="acuanteknis" ><?=$row['acuanteknis'];?></textarea>
												</div>
											</div>											
											<div class="tab-pane fade" id="acuanadministrasi" role="tabpanel">
												<div class="card-title">
													<h3 class="text-center">Acuan Administrasi</h3>
													<hr>
													<textarea class="ckeditor" name="acuanadministrasi" ><?=$row['acuanadministrasi'];?></textarea>
												</div>
											</div>
											<!-- <div class="tab-pane fade" id="v-pills-settings" role="tabpanel">EWEWEWEW</div> -->
										</div>
										<?php echo form_close(); ?>
									</div>

								</div>
						</div><!-- .animated -->
				</div><!-- .content -->


		</div><!-- /#right-panel -->

		<!-- Right Panel -->