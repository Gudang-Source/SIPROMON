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
											<center><h2><?=$row['judul'] ?></h2>Bab II (Informasi Kegiatan)</center>
										</div>
										<div>
											<div class="form-group col-md-2">
									      <select id="navigate" class="form-control" style="margin-left:-15px;  background-color:#ffd700;">
									        <option selected disabled><b>-Navigasi-</b></option>
									        <option value="satu">Bab I</option>
									        <option value="dua">Bab II</option>
									        <option value="tiga">Bab III</option>
									        <option value="empat">Bab IV</option>
									        <option value="lima">Bab V</option>
									        <option value="enam">Bab VI</option>
									        <option value="tujuh">Bab VII</option>
									        <option value="delapan">Bab VIII</option>
									        <option value="sembilan">Bab IX-XII</option>
									        <option value="tigabelas">Bab XIII</option>
									        <option value="empatbelas">Bab XIV</option>
									        <?php if($row['jenis']=="Teknologi dan Terapan Terpadu" || $row['jenis'] == "Pilot Project"){  ?>
									        <option value="limabelas">Bab XV</option>
									        <?php } ?>
									        <option value="att1">Lampiran 1</option>
									        <option value="att2">Lampiran 2</option>
									        <option value="att3">Lampiran 3</option>
									        <option value="att4">Lampiran 4-5</option>
									        <?php if($row['jenis']=="Teknologi dan Terapan Terpadu"){  ?>
									        <option value="att6">Lampiran 6</option>
									        <?php } ?>									        
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
											<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#juduldansumber" role="tab" aria-controls="latar" aria-selected="true">Judul Kegiatan dan Sumber Penganggaran</a>
											<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#lingkup" role="tab" aria-controls="masalah" aria-selected="false">Lingkup Kegiatan</a>
											<?php if($row['jenis'] != "Layanan Internal"){ ?>
											<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#metode" role="tab" aria-controls="masalah" aria-selected="false">Metode Pelaksanaan</a>
											<?php } ?>
											<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#lokasi" role="tab" aria-controls="batasan" aria-selected="false">Lokasi Kegiatan</a>
											<input type="hidden" name="id" value="<?=$row['id']; ?>">
											<button type="submit" class="btn btn-success">
													<span class=""><i class="fa fa-fw fa-save"></i></span> Simpan Draf
											</button>
											<<!-- button type="submit" class="btn btn-outline-dark">
													<span class=""><i class="fa fa-fw fa-eye"></i></span> Preview
											</button> -->
										</div>
									</div>
									<div class="col-md-9">
										<div class="tab-content" id="v-pills-tabContent">
											<div class="tab-pane fade show active" id="juduldansumber" role="tabpanel">
												<div class="card-title">
													<h3 class="text-center">Judul Kegiatan dan Sumber Penganggaran</h3>
													<hr>
													<textarea class="ckeditor" name="juduldansumber" ><?=$row['juduldansumber'];?></textarea>
												</div>
											</div>
											<div class="tab-pane fade" id="lingkup" role="tabpanel">
												<div class="card-title">
													<h3 class="text-center">Lingkup Kegiatan</h3>
													<hr>
													<textarea class="ckeditor" name="lingkup" ><?=$row['lingkup'];?></textarea>
												</div>
											</div>											
											<div class="tab-pane fade" id="metode" role="tabpanel">
												<div class="card-title">
													<h3 class="text-center">Metode Pelaksanaan</h3>
													<hr>
													<textarea class="ckeditor" name="metode" ><?=$row['metode'];?></textarea>
												</div>
											</div>
											<div class="tab-pane fade" id="lokasi" role="tabpanel">
												<div class="card-title">
													<h3 class="text-center">Lokasi Kegiatan</h3>
													<hr>
													<textarea class="ckeditor" name="lokasi" ><?=$row['lokasi'];?></textarea>
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