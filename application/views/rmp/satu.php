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
											<center><h2><?=$row['judul'] ?></h2>Bab I (Pendahuluan)</center>
										</div>
										<div>
											<div class="form-group col-md-2">
									      <select id="navigate" class="form-control" style="margin-left:-15px; background-color:#ffd700;">
									        <option selected disabled><b>-Navigasi-</b></option>
									        <option value="satu">Bab I</option>
									        <option value="dua">Bab II</option>
									        <option value="tiga">Bab III</option>
									        <option value="empat">Bab IV</option>
									        <option value="limabelas">Daftar Pustaka</option>
									        <option value="att1">Lampiran 1</option>
									        <option value="att2">Lampiran 2</option>
									        <option value="att3">Lampiran 3</option>
									      </select>
									    </div>											
											<div class="pull-right" style="margin-bottom: 15px;">
												<a href="<?=base_url(); ?>RMP/dua/<?=$this->uri->segment(3)?>"  class="btn btn-labeled btn-success">
														 Bab 2 <span class="btn-label btn-label-right"><i class="fa fa-fw fa-arrow-right"></i></span>
												</a>
<!-- 												<select name="test" class="form-control">
													<option value="1">1</option>
													<option value="1">1</option>
													<option value="1">1</option>
													<option value="1">1</option>
													<option value="1">1</option>
												</select> -->
											</div>
										</div>
									</div>
								</div>
								<?php echo form_open('RMP/satu/'.$this->uri->segment(3)); ?>
								<div class="row">
									<div class="col-md-3">
										<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
											<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#latar" role="tab" aria-controls="latar" aria-selected="true">Latar Belakang</a>
											<?php if($row['jenis'] == "Litbang"){ ?>
											<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#masalah" role="tab" aria-controls="masalah" aria-selected="false">Identifikasi Masalah</a>
											<?php } ?>
											<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#tujuan" role="tab" aria-controls="tujuan" aria-selected="false">Tujuan Kegiatan</a>
											<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#sasarankeluaran" role="tab" aria-controls="sasarankeluaran" aria-selected="false">Sasaran Keluaran (Output)</a>
											<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#sasaranmutu" role="tab" aria-controls="sasaranmutu" aria-selected="false">Sasaran Mutu</a>
											<?php if($row['jenis'] == "Litbang"){ ?>
											<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#manfaat" role="tab" aria-controls="v-pills-settings" aria-selected="false">Penerima Manfaat</a>
											<?php } ?>
											<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#lokasi" role="tab" aria-controls="lokasi" aria-selected="false">Lokasi Kegiatan</a>
											<input type="hidden" name="id" value="<?=$row['id']; ?>">
											<button type="submit" class="btn btn-success">
													<span class=""><i class="fa fa-fw fa-save"></i></span> Simpan Draf
											</button>
											<!-- <button type="submit" class="btn btn-outline-dark">
													<span class=""><i class="fa fa-fw fa-eye"></i></span> Preview
											</button> -->
										</div>
									</div>
									<div class="col-md-9">
										<div class="tab-content" id="v-pills-tabContent">
											<div class="tab-pane fade show active" id="latar" role="tabpanel">
												<div class="card-title">
													<h3 class="text-center">Latar Belakang</h3>
													<hr>
													<!-- The toolbar will be rendered in this container. -->
													<textarea id="latar" class="ckeditor" name="latar" ><?=$row['latar'];?>
														
													</textarea>
												</div>
											</div>
											<div class="tab-pane fade" id="masalah" role="tabpanel">
												<div class="card-title">
													<h3 class="text-center">Identifikasi Masalah</h3>
													<hr>
													<textarea class="ckeditor" name="masalah" ><?=$row['masalah'];?></textarea>
												</div>
											</div>

											<div class="tab-pane fade" id="tujuan" role="tabpanel">
												<div class="card-title">
													<h3 class="text-center">Tujuan Kegiatan</h3>
													<hr>
													<textarea id="tujuan" class="ckeditor" name="tujuan" ><?=$row['tujuan'];?></textarea>
												</div>
											</div>
											<div class="tab-pane fade" id="sasarankeluaran" role="tabpanel">
												<div class="card-title">
													<h3 class="text-center">Sasaran Keluaran (Output)</h3>
													<hr>
													<textarea class="ckeditor" name="sasarankeluaran" ><?=$row['sasarankeluaran'];?></textarea>
												</div>
											</div>
											<div class="tab-pane fade" id="sasaranmutu" role="tabpanel">
												<div class="card-title">
													<h3 class="text-center">Sasaran Mutu</h3>
													<hr>
													<textarea class="ckeditor" name="sasaranmutu" ><?=$row['sasaranmutu'];?></textarea>
												</div>
											</div>
											<div class="tab-pane fade" id="lokasi" role="tabpanel">
												<div class="card-title">
													<h3 class="text-center">Lokasi Kegiatan</h3>
													<hr>
													<textarea class="ckeditor" name="lokasi" ><?=$row['lokasi'];?></textarea>
												</div>
											</div>											
											<div class="tab-pane fade" id="manfaat" role="tabpanel">
												<div class="card-title">
													<h3 class="text-center">Penerima Manfaat</h3>
													<hr>
													<textarea class="ckeditor" name="manfaat" ><?=$row['manfaat'];?></textarea>
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