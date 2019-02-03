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
											<center><h2><?=$row['judul'] ?></h2>Bab III (Rencana Kegiatan)</center>
										</div>
										<div>
											<div class="form-group col-md-2">
									      <select id="navigate" class="form-control" style="margin-left:-15px; background-color:#ffd700;">
									        <option disabled><b>-Navigasi-</b></option>
									        <option value="judul" <?php if($this->uri->segment(2) == "judul") echo "selected"; ?> >Judul</option>
									        <option value="rekap" <?php if($this->uri->segment(2) == "rekap") echo "selected"; ?> >Rekap</option>
									        <option value="sejarah" <?php if($this->uri->segment(2) == "sejarah") echo "selected"; ?> >Sejarah</option>
									        <option value="satu" <?php if($this->uri->segment(2) == "satu") echo "selected"; ?> >Bab I</option>
									        <option value="dua" <?php if($this->uri->segment(2) == "dua") echo "selected"; ?>>Bab II</option>
									        <option value="tiga" <?php if($this->uri->segment(2) == "tiga") echo "selected"; ?>>Bab III</option>
									        <option value="empat" <?php if($this->uri->segment(2) == "empat") echo "selected"; ?>>Bab IV</option>
									        <?php if($row['jenis'] == "Litbang"){ ?>
									        <option value="limabelas" <?php if($this->uri->segment(2) == "limabelas") echo "selected"; ?>>Daftar Pustaka</option>
									        <?php } ?>
									        <option value="att1" <?php if($this->uri->segment(2) == "att1") echo "selected"; ?>>Lampiran 1</option>
									        <option value="att2" <?php if($this->uri->segment(2) == "att2") echo "selected"; ?>>Lampiran 2</option>
									        <option value="att3" <?php if($this->uri->segment(2) == "att3") echo "selected"; ?>>Lampiran 3</option>
									      </select>
									    </div>											
											<div class="pull-right" style="margin-bottom: 15px;">
												<a href="<?=base_url(); ?>RMP/dua/<?=$this->uri->segment(3)?>" type="button" class="btn btn-labeled btn-danger">
														<span class="btn-label"><i class="fa fa-fw fa-arrow-left"></i></span> Back
												</a>												
												<a href="<?=base_url(); ?>RMP/empat/<?=$this->uri->segment(3)?>" type="button" class="btn btn-labeled btn-success">
														<span class="btn-label"><i class="fa fa-fw fa-arrow-right"></i></span> Bab IV
												</a>
											</div>
										</div>
									</div>
								</div>
								<?php echo form_open_multipart('RMP/tiga/'.$this->uri->segment(3)); ?>
								<div class="row">
									<div class="col-md-3">
										<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
											<a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#peta" role="tab" aria-controls="latar" aria-selected="true">Pemetaan Risiko dan Mitigasi</a>
											<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#an" role="tab" aria-controls="latar" aria-selected="true">Analis Risiko/Peluang dan Mitigasi</a>
											<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#kegiatan" role="tab" aria-controls="masalah" aria-selected="false">Tahapan Kegiatan</a>
											<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#baganalir" role="tab" aria-controls="masalah" aria-selected="false">Bagan Alir Pelaksanaan Kegiatan</a>
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
											<div class="tab-pane fade  show active" id="peta" role="tabpanel">
												<div class="card-title">
													<h3 class="text-center">Pemetaan Risiko dan Mitigasi</h3>
													<hr>
														<div class="text-right" style="margin-bottom: 15px;">
														</div>
														<p>Pemetaan Risiko dan Mitigasi menggunakan metode SWOT (Strengths, Weaknesses, Opportunities, Threats) dengan diisi masing-masing minimal 5 butir untuk setiap indikator seperti pada tabel 2. 
														Masing-masing butir dinilai bobotnya menggunakan metode USG (Urgency, Seriousness, Growth).
														Metode ini digunakan sebagai alat untuk menyusun urutan prioritas isu yang harus diselesaikan. Caranya dengan menentukan tingkat urgensi, keseriusan, dan perkembangan isu dengan menentukan skala nilai     1 – 5. Isu yang memiliki total skor tertinggi merupakan isu prioritas. 
														</p>															
													<table class="table table-sm table-bordered">
														<col width="20px" align="center">
														<col width="auto" align="center">
														<col width="50px" align="center">
														<col width="50px" align="center">
														<col width="50px" align="center">
														<col width="100px" align="center">
														<col width="100px" align="center">
														<thead>
															<tr align="middle">
																<th>No.</th>
																<th>Faktor Internal</th>
																<th>U</th>
																<th>S</th>
																<th>G</th>
																<th>JML</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td style="font-weight: bold;">I</td>
																<td style="font-weight: bold;" colspan="5">STRENGTHS/KEKUATAN
																	<span data-toggle="modal" data-target="#tambahswot" data-parent="1">
																	    <a href="#" class="text-info" data-toggle="tooltip" data-placement="bottom" title="Tambah Analisis SWOT"><i class="fa fa-fw fa-plus"></i></a>
																	</span>
																</td>
															</tr>
															<?php $no=1;foreach($swots as $swot){
																if($swot['swot_parent'] == 1){
															?>
															<tr>
																<td align="center">S<?=$no++ ?></td>
																<td><?=$swot['swot_factor'] ?><a class="text-danger text-right" href="<?=base_url(); ?>RMP/deleteSwot/<?=$swot['swot_id'];?>/<?=$this->uri->segment(3);?>" title="Hapus Tahapan"><span class="fa fa-fw fa-trash"></span></a></td>
																<td><?=$swot['swot_u'] ?></td>
																<td><?=$swot['swot_s'] ?></td>
																<td><?=$swot['swot_g'] ?></td>
																<td><?=$swot['swot_u']+$swot['swot_s']+$swot['swot_g']; ?></td>
															</tr>
															<?php 
																}
															} 
															 ?>
															<tr>
																<td style="font-weight: bold;">II</td>
																<td style="font-weight: bold;" colspan="5">WEAKNESS/KELEMAHAN
																	<span data-toggle="modal" data-target="#tambahswot" data-parent="2">
																	    <a href="#" class="text-info" data-toggle="tooltip" data-placement="bottom" title="Tambah Analisis SWOT"><i class="fa fa-fw fa-plus"></i></a>
																	</span>
																</td>
															</tr>
															<?php $no=1;foreach($swots as $swot){
																if($swot['swot_parent'] == 2){
															?>
															<tr>
																<td align="center">W<?=$no++ ?></td>
																<td><?=$swot['swot_factor'] ?><a class="text-danger text-right" href="<?=base_url(); ?>RMP/deleteSwot/<?=$swot['swot_id'];?>/<?=$this->uri->segment(3);?>" title="Hapus Tahapan"><span class="fa fa-fw fa-trash"></span></a></td>
																<td><?=$swot['swot_u'] ?></td>
																<td><?=$swot['swot_s'] ?></td>
																<td><?=$swot['swot_g'] ?></td>
																<td><?=$swot['swot_u']+$swot['swot_s']+$swot['swot_g']; ?></td>
															</tr>
															<?php 
																}
															} 
															 ?>															
															<tr>
																<td style="font-weight: bold;">III</td>
																<td style="font-weight: bold;" colspan="5">OPPORTUNITIES/PELUANG
																	<span data-toggle="modal" data-target="#tambahswot" data-parent="3">
																	    <a href="#" class="text-info" data-toggle="tooltip" data-placement="bottom" title="Tambah Analisis SWOT"><i class="fa fa-fw fa-plus"></i></a>
																	</span>
																</td>
															</tr>
															<?php $no=1;foreach($swots as $swot){
																if($swot['swot_parent'] == 3){
															?>
															<tr>
																<td align="center">U<?=$no++ ?></td>
																<td><?=$swot['swot_factor'] ?><a class="text-danger text-right" href="<?=base_url(); ?>RMP/deleteSwot/<?=$swot['swot_id'];?>/<?=$this->uri->segment(3);?>" title="Hapus Tahapan"><span class="fa fa-fw fa-trash"></span></a></td>
																<td><?=$swot['swot_u'] ?></td>
																<td><?=$swot['swot_s'] ?></td>
																<td><?=$swot['swot_g'] ?></td>
																<td><?=$swot['swot_u']+$swot['swot_s']+$swot['swot_g']; ?></td>
															</tr>
															<?php 
																}
															} 
															 ?>															
															<tr>
																<td style="font-weight: bold;">IV</td>
																<td style="font-weight: bold;" colspan="5">THREATS/ANCAMAN
																	<span data-toggle="modal" data-target="#tambahswot" data-parent="4">
																	    <a href="#" class="text-info" data-toggle="tooltip" data-placement="bottom" title="Tambah Analisis SWOT"><i class="fa fa-fw fa-plus"></i></a>
																	</span>
																</td>
															</tr>																																													
															<?php $no=1;foreach($swots as $swot){
																if($swot['swot_parent'] == 4){
															?>
															<tr>
																<td align="center">T<?=$no++ ?></td>
																<td><?=$swot['swot_factor'] ?><a class="text-danger text-right" href="<?=base_url(); ?>RMP/deleteSwot/<?=$swot['swot_id'];?>/<?=$this->uri->segment(3);?>" title="Hapus Tahapan"><span class="fa fa-fw fa-trash"></span></a></td>
																<td><?=$swot['swot_u'] ?></td>
																<td><?=$swot['swot_s'] ?></td>
																<td><?=$swot['swot_g'] ?></td>
																<td><?=$swot['swot_u']+$swot['swot_s']+$swot['swot_g']; ?></td>
															</tr>
															<?php 
																}
															} 
															 ?>															
														</tbody>
													</table>
												</div>
											</div>											
											<div class="tab-pane fade" id="an" role="tabpanel">
												<div class="card-title">
													<h3 class="text-center">Analisis Risiko dan Mitigasi <a href="#" data-toggle="tooltip" data-placement="bottom"  title="Isu diambil secara otomatis dari SWOT Tertinggi"><i class="fa fa-info-circle"></i></a> </h3> 

													<hr>
														<div class="text-right" style="margin-bottom: 15px;">
															<button type="button" class=" btn-sm btn-labeled btn-success" data-toggle="modal" data-target="#tambahanalisis">
																	<span class="btn-label"><i class="fa fa-fw fa-plus"></i></span> Tambah Analisis
															</button>
														</div>		
														<p>
														Dari setiap isu, di analisis risiko/peluang serta tindakan mitigasi pengendalian risikonya. Tindakan mitigasi
														pengendalian risiko diisi dengan antisipasi dari risiko/peluang yang akan muncul. Kolom Rencana
														Pemantauan mengacu ke kriteria penerimaan dan Acuan Pemeriksaan pada lampiran 2.															
														</p>														
													<table class="table table-sm table-bordered">
														<thead>
															<tr align="middle">
																<th>No.</th>
																<th>Isu</th>
																<th>Risiko/Peluang</th>
																<th>Tindakan Mitigasi Pengendalian Risiko</th>
																<th>Rencana Pemantauan</th>
																<th>Aksi</th>
															</tr>
														</thead>
														<tbody>
															<?php $no=1;foreach($anals as $anal){

															?>
															<tr>
																<td align="center"><?=$no++; ?></td>
																<td><?=$anal['anal_isu'] ?></td>
																<td><?=$anal['anal_risiko'] ?></td>
																<td><?=$anal['anal_tindakan'] ?></td>
																<td><?=$anal['anal_rencana'] ?></td>
																<td><a class="text-danger text-right" href="<?=base_url(); ?>RMP/deleteAnalisis/<?=$anal['anal_id'];?>/<?=$this->uri->segment(3);?>" title="Hapus Analisis"><span class="fa fa-fw fa-trash"></span></a></td>
															</tr>
															<?php 
															} 
															 ?>
														</tbody>
													</table>
												</div>
											</div>											
											<div class="tab-pane fade" id="kegiatan" role="tabpanel">
												<div class="card-title">
													<h3 class="text-center">Penyusunan Tahapan Kegiatan</h3>
													<hr>
														<div class="text-right" style="margin-bottom: 15px;">
														</div>
													<table class="table table-striped table-bordered">
														<col width="7px">
														<col width="7px">
														<col width="7px">
														<thead>
															<tr align="middle">
																<th>No.</th>
																<th colspan="3">Kegiatan</th>
																<th>Aksi</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>1.</td>
																<td colspan="3">Tahapan Persiapan
																	<span data-toggle="modal" data-target="#tambahsub" data-parent="A">
																	    <a href="#" class="text-success" data-toggle="tooltip" data-placement="bottom" title="Tambah Sub Kegiatan"><i class="fa fa-fw fa-plus"></i></a>
																	</span>
																</td>
																<td></td>
															</tr>
															<?php if(isset($allAct) != NULL){ $no=1;foreach($allAct as $act){if($act['parent'] == 'A'){ ?>
															<tr>
																<td></td>
																<td>1.<?=$no++; ?></td>
																<td colspan="2"><?php echo $act['kegiatan'];?> 
																	<span data-toggle="modal" data-target="#tambahtahapan" data-parent="<?=$act['id']; ?>">
																	    <a href="#" class="text-info" data-toggle="tooltip" data-placement="bottom" title="Tambah Tahapan"><i class="fa fa-fw fa-plus"></i></a>
																	</span>
																</td>
																<td>
																	<a href="#" class="text-warning" data-toggle="modal" data-target="#tambahsub" data-name="<?=$act['kegiatan']; ?>" data-desc="<?=$act['deskripsi']; ?>" data-id="<?=$act['id'];?>" data-parent="A"><span class="fa fa-fw fa-pencil"></span></a>
																	<a class="text-danger" href="<?=base_url(); ?>RMP/deleteAct/<?=$act['id'];?>/<?=$this->uri->segment(3);?>" title="Hapus Tahapan"><span class="fa fa-fw fa-trash"></span></a>
																</td>
															</tr>
																<?php if(isset($allStages) != NULL){ $no3=1;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){ ?>
															<tr>
																<td></td>
																<td></td>
																<td>1.<?=($no-1).".".$no3++; ?></td>
																<td><?php echo $stage['kegiatan'];?> 
																</td>
																<td>
																	<a href="#" class="text-warning" data-toggle="modal" data-target="#tambahtahapan" data-name="<?=$stage['kegiatan']; ?>" data-desc="<?=$stage['deskripsi']; ?>" data-id="<?=$stage['id'];?>" data-parent="<?=$act['id']; ?>" ><span class="fa fa-fw fa-pencil"></span></a>
																	<a class="text-danger" href="<?=base_url(); ?>RMP/deleteStages/<?=$stage['id'];?>/<?=$this->uri->segment(3);?>" title="Hapus Tahapan"><span class="fa fa-fw fa-trash"></span></a>
																</td>
															</tr>
																<?php }}} ?>
															<?php }}} ?>
															<tr>
																<td>2.</td>
																<td colspan="3">Tahapan Pelaksanaan
																	<span data-toggle="modal" data-target="#tambahsub" data-parent="B">
																	    <a href="#" class="text-success" data-toggle="tooltip" data-placement="bottom" title="Tambah Sub Kegiatan"><i class="fa fa-fw fa-plus"></i></a>
																	</span>
																</td>
																<td></td>
															</tr>
															<?php if(isset($allAct) != NULL){ $no=1; foreach($allAct as $act){if($act['parent'] == 'B'){ ?>
															<tr>
																<td></td>
																<td>2.<?=$no++; ?></td>
																<td colspan="2"><?php echo $act['kegiatan'];?> 																	<span data-toggle="modal" data-target="#tambahtahapan" data-parent="<?=$act['id']; ?>">
																	    <a href="#" class="text-info" data-toggle="tooltip" data-placement="bottom" title="Tambah Tahapan"><i class="fa fa-fw fa-plus"></i></a>
																	</span>
																</td>
																<td>
																	<a href="#" class="text-warning" data-toggle="modal" data-target="#tambahsub" data-name="<?=$act['kegiatan']; ?>" data-desc="<?=$act['deskripsi']; ?>" data-id="<?=$act['id'];?>" data-parent="B"><span class="fa fa-fw fa-pencil"></span></a>
																	<a class="text-danger" href="<?=base_url(); ?>RMP/deleteAct/<?=$act['id'];?>/<?=$this->uri->segment(3);?>" title="Hapus Tahapan"><span class="fa fa-fw fa-trash"></span></a>
																</td>
															</tr>
																<?php if(isset($allStages) != NULL){ $no3=1;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){ ?>
															<tr>
																<td></td>
																<td></td>																
																<td>2.<?=($no-1).".".$no3++; ?></td>
																<td><?php echo $stage['kegiatan'];?> 
																</td>
																<td>
																	<a href="#" class="text-warning" data-toggle="modal" data-target="#tambahtahapan" data-name="<?=$stage['kegiatan']; ?>" data-desc="<?=$stage['deskripsi']; ?>" data-id="<?=$stage['id'];?>" data-parent="<?=$act['id']; ?>" ><span class="fa fa-fw fa-pencil"></span></a>
																	<a class="text-danger" href="<?=base_url(); ?>RMP/deleteStages/<?=$stage['id'];?>/<?=$this->uri->segment(3);?>" title="Hapus Tahapan"><span class="fa fa-fw fa-trash"></span></a>
																</td>
															</tr>
																<?php }}} ?>															
															<?php }}} ?>															
															<tr>
																<td>3.</td>
																<td colspan="3">Tahapan Pelaporan
																	<span data-toggle="modal" data-target="#tambahsub" data-parent="C">

																	    <a href="#" class="text-success" data-toggle="tooltip" data-placement="bottom" title="Tambah Sub Kegiatan"><i class="fa fa-fw fa-plus"></i></a> 
																	</span>
																</td>
																<td></td>
															</tr>
															<?php if(isset($allAct) != NULL){ $no=1; foreach($allAct as $act){if($act['parent'] == 'C'){ ?>
															<tr>
																<td></td>
																<td>3.<?=$no++; ?></td>
																<td colspan="2"><?php echo $act['kegiatan'];?> 																	
																	<span data-toggle="modal" data-target="#tambahtahapan" data-parent="<?=$act['id']; ?>">
																	    <a href="#" class="text-info" data-toggle="tooltip" data-placement="bottom" title="Tambah Tahapan"><i class="fa fa-fw fa-plus"></i></a>
																	</span>
																</td>
																<td>
																	<a href="#" class="text-warning" data-toggle="modal" data-target="#tambahsub" data-name="<?=$act['kegiatan']; ?>" data-desc="<?=$act['deskripsi']; ?>" data-id="<?=$act['id'];?>" data-parent="C"><span class="fa fa-fw fa-pencil"></span></a>
																	<a class="text-danger" href="<?=base_url(); ?>RMP/deleteAct/<?=$act['id'];?>/<?=$this->uri->segment(3);?>" title="Hapus Tahapan"><span class="fa fa-fw fa-trash"></span></a>
																</td>
															</tr>
																<?php if(isset($allStages) != NULL){ $no3=1;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){ ?>
															<tr>
																<td></td>
																<td></td>																
																<td>3.<?=($no-1).".".$no3++; ?></td>
																<td><?php echo $stage['kegiatan'];?> 
																</td>
																<td>
																	<a href="#" class="text-warning" data-toggle="modal" data-target="#tambahtahapan" data-name="<?=$stage['kegiatan']; ?>" data-desc="<?=$stage['deskripsi']; ?>" data-id="<?=$stage['id'];?>" data-parent="<?=$act['id']; ?>" ><span class="fa fa-fw fa-pencil"></span></a>
																	<a class="text-danger" href="<?=base_url(); ?>RMP/deleteStages/<?=$stage['id'];?>/<?=$this->uri->segment(3);?>" title="Hapus Tahapan"><span class="fa fa-fw fa-trash"></span></a>
																</td>
															</tr>
																<?php }}} ?>															
															<?php }}} ?>															
														</tbody>
													</table>
												</div>
											</div>
											<div class="tab-pane fade show" id="baganalir" role="tabpanel">
												<div class="card-title">
													<h3 class="text-center">Unggah Bagan Alir</h3>
													<hr>
													<?php if($row['baganalir'] != NULL){ ?>
														<img src="<?=base_url(); ?>assets/uploads/baganalir/<?=$row['baganalir']?>" alt="" height="500px" class="img">
													<?php } ?>															
													<div class="input-group">
														<div class="custom-file">
															<input type="file" name="baganalir">
														</div>
													</div>
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
			<div class="modal fade" id="tambahswot" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
							<div class="modal-header">
									<h5 class="modal-title" id="largeModalLabel">Tambah Pemetaan SWOT</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
									</button>
							</div>
							<div class="modal-body">
							<?php echo form_open('RMP/addSWOT/'.$this->uri->segment(3)); ?>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class=" form-control-label">Nama Faktor</label>
											<div class="input-group">
													<input type="text" name="swot_factor" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class=" form-control-label">Urgensi</label>
											<div class="input-group">
													<input type="number" min=1 max=5 name="swot_u" class="form-control" placeholder="Range 1 - 5">
											</div>
										</div>
										<div class="form-group">
											<label class=" form-control-label">Seriousness</label>
											<div class="input-group">
													<input type="number" min=1 max=5 name="swot_s" class="form-control" placeholder="Range 1 - 5">
											</div>
										</div>
										<div class="form-group">
											<label class=" form-control-label">Growth</label>
											<div class="input-group">
													<input type="number" min=1 max=5 name="swot_g" class="form-control" placeholder="Range 1 - 5">
											</div>
										</div>																				
										<input type="hidden" name="swot_id">
										<input type="hidden" name="swot_parent">
									</div>
								</div>
							</div>
							<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
									<input type="hidden" name="rmp_id" value="<?=$row['id'];?>">
									<button type="submit" class="btn btn-primary"
										<i class="fa fa-fw fa-dot-circle-o"></i> Submit
									</button>
							</div>
							<?php echo form_close(); ?>
					</div>
				</div>
			</div>

			<div class="modal fade" id="tambahanalisis" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
							<div class="modal-header">
									<h5 class="modal-title" id="largeModalLabel">Analisis Risik/Mitigasi dan Peluang o</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
									</button>
							</div>
							<div class="modal-body">
							<?php echo form_open('RMP/addAnalisis/'.$this->uri->segment(3)); ?>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class=" form-control-label">Isu</label>
											<div class="input-group">
													<select name="anal_isu" class="form-control">
														<?php foreach($isus as $isu){ foreach($isu as $x){ ?>
														<option value="<?=$x; ?>"><?=$x; ?></option>
														<?php }} ?>
													</select>
													<!-- <input type="text" name="anal_isu" class="form-control"> -->
											</div>
										</div>
										<div class="form-group">
											<label class=" form-control-label">Risiko/Peluang</label>
											<div class="input-group">
													<textarea name="anal_risiko" class="form-control" rows=4></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class=" form-control-label">Tindakan Pengendalian Resiko</label>
											<div class="input-group">
													<textarea name="anal_tindakan" class="form-control" rows=4></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class=" form-control-label">Rencana Pemantauan</label>
											<div class="input-group">
													<textarea name="anal_rencana" class="form-control" rows=4></textarea>
											</div>
										</div>																				
										<input type="hidden" name="anal_id">
									</div>
								</div>
							</div>
							<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
									<input type="hidden" name="rmp_id" value="<?=$row['id'];?>">
									<button type="submit" class="btn btn-primary"
										<i class="fa fa-fw fa-dot-circle-o"></i> Submit
									</button>
							</div>
							<?php echo form_close(); ?>
					</div>
				</div>
			</div>			

		<div class="modal fade" id="tambahsub" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
								<div class="modal-header">
										<h5 class="modal-title" id="largeModalLabel">Tambah Sub Kegiatan</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
										</button>
								</div>
								<div class="modal-body">
								<?php echo form_open('RMP/addAct/'.$this->uri->segment(3)); ?>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class=" form-control-label">Nama Tahapan</label>
												<div class="input-group">
														<input id="keg1" type="text" name="kegiatan" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
								<input type="hidden" name="act_id">
								<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<input type="hidden" name="rmp_id" value="<?=$row['id']; ?>">
										<input type="hidden" name="parent" value="">
										<button type="submit" class="btn btn-primary"
											<i class="fa fa-fw fa-dot-circle-o"></i> Submit
								</div>
								<?php echo form_close(); ?>
						</div>
				</div>
		</div>
		<div class="modal fade" id="tambahtahapan" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
								<div class="modal-header">
										<h5 class="modal-title" id="largeModalLabel">Tambah Tahapan</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
										</button>
								</div>
								<div class="modal-body">
								<?php echo form_open('RMP/addStages/'.$this->uri->segment(3)); ?>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class=" form-control-label">Nama Tahapan</label>
												<div class="input-group">
														<input id="keg2" type="text" name="kegiatan" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
								<input type="hidden" name="stages_id">
								<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<input type="hidden" name="act_id" value="">
										<button type="submit" class="btn btn-primary"
											<i class="fa fa-fw fa-dot-circle-o"></i> Submit
								</div>
								<?php echo form_close(); ?>
						</div>
				</div>
		</div>
		<!-- Right Panel -->