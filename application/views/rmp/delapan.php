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
											<center><h2><?=$row['judul'] ?></h2>Bab VII (Bagan Alir Pelaksanaan Kegiatan)</center>
										</div>
										<div>
											<div class="form-group col-md-2">
									      <select id="navigate" class="form-control" style="margin-left:-15px; background-color:#ffd700;">
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
												<a href="<?=base_url(); ?>RMP/tujuh/<?=$this->uri->segment(3)?>" type="button" class="btn btn-labeled btn-danger">
														<span class="btn-label"><i class="fa fa-fw fa-arrow-left"></i></span> Back
												</a>												
												<a href="<?=base_url(); ?>RMP/sembilan/<?=$this->uri->segment(3)?>" type="button" class="btn btn-labeled btn-success">
														<span class="btn-label"><i class="fa fa-fw fa-arrow-right"></i></span> Bab IX-XII
												</a>
											</div>
										</div>
									</div>
								</div>
								<?php echo form_open_multipart('RMP/delapan/'.$this->uri->segment(3)); ?>
								<div class="row">
									<div class="col-md-3">
										<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
											<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#kegiatan" role="tab" aria-controls="latar" aria-selected="true">Pelaksanaan Kegiatan</a>
											<a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#bagan" role="tab" aria-controls="latar" aria-selected="true">Bagan Alir Kegiatan</a>
											<input type="hidden" name="id" value="<?=$row['id']; ?>">
											<button type="submit" class="btn btn-success">
													<span class=""><i class="fa fa-fw fa-save"></i></span> Upload
											</button>
											<!-- <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#previewfoto">
													<span class=""><i class="fa fa-fw fa-eye"></i></span> Preview
											</button> -->
										</div>
									</div>
									<div class="col-md-9">
										<div class="tab-content" id="v-pills-tabContent">
											<div class="tab-pane fade show active" id="kegiatan" role="tabpanel">
												<div class="card-title">
													<h3 class="text-center">Kelola Kegiatan</h3>
													<hr>
														<div class="text-right" style="margin-bottom: 15px;">
<!-- 															<button type="button" class=" btn-sm btn-labeled btn-success" data-toggle="modal" data-target="#tambahAct">
		<span class="btn-label"><i class="fa fa-fw fa-plus"></i></span> Tambah Kegiatan
</button> -->
														</div>
													<table class="table table-striped table-bordered">
														<thead>
															<tr>
																<th>No.</th>
																<th>Kegiatan</th>
																<th>Aksi</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>1.</td>
																<td>Tahapan Persiapan
																	<span data-toggle="modal" data-target="#tambahsub" data-parent="A">
																	    <a href="#" class="text-success" data-toggle="tooltip" data-placement="bottom" title="Tambah Sub Kegiatan"><i class="fa fa-fw fa-plus"></i></a>
																	</span>
																</td>
																<td></td>
															</tr>
															<?php if(isset($allAct) != NULL){ $no=1;foreach($allAct as $act){if($act['parent'] == 'A'){ ?>
															<tr>
																<td>1.<?=$no++; ?></td>
																<td><?php echo str_repeat('&nbsp;', 8).$act['kegiatan'];?> 
																	<span data-toggle="modal" data-target="#tambahtahapan" data-parent="<?=$act['id']; ?>">
																	    <a href="#" class="text-info" data-toggle="tooltip" data-placement="bottom" title="Tambah Tahapan"><i class="fa fa-fw fa-plus"></i></a>
																	</span>
																</td>
																<td>
																	<a class="text-warning" href="<?=base_url(); ?>RMP/editAct/<?=$act['id'];?>/<?=$this->uri->segment(3);?>" title="Hapus Tahapan"><span class="fa fa-fw fa-pencil"></span></a>
																	<a class="text-danger" href="<?=base_url(); ?>RMP/deleteAct/<?=$act['id'];?>/<?=$this->uri->segment(3);?>" title="Hapus Tahapan"><span class="fa fa-fw fa-trash"></span></a>
																</td>
															</tr>
																<?php if(isset($allStages) != NULL){ $no3=1;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){ ?>
															<tr>
																<td>1.<?=($no-1).".".$no3++; ?></td>
																<td><?php echo str_repeat('&nbsp;', 16).$stage['kegiatan'];?> 
																</td>
																<td>
																	<a class="text-warning" href="<?=base_url(); ?>RMP/editStage/<?=$stage['id'];?>/<?=$this->uri->segment(3);?>" title="Hapus Tahapan"><span class="fa fa-fw fa-pencil"></span></a>
																	<a class="text-danger" href="<?=base_url(); ?>RMP/deleteStage/<?=$stage['id'];?>/<?=$this->uri->segment(3);?>" title="Hapus Tahapan"><span class="fa fa-fw fa-trash"></span></a>
																</td>
															</tr>
																<?php }}} ?>
															<?php }}} ?>
															<tr>
																<td>2.</td>
																<td>Tahapan Pelaksanaan
																	<span data-toggle="modal" data-target="#tambahsub" data-parent="B">
																	    <a href="#" class="text-success" data-toggle="tooltip" data-placement="bottom" title="Tambah Sub Kegiatan"><i class="fa fa-fw fa-plus"></i></a>
																	</span>
																</td>
																<td></td>
															</tr>
															<?php if(isset($allAct) != NULL){ $no=1; foreach($allAct as $act){if($act['parent'] == 'B'){ ?>
															<tr>
																<td>2.<?=$no++; ?></td>
																<td><?php echo str_repeat('&nbsp;', 8).$act['kegiatan'];?> 																	<span data-toggle="modal" data-target="#tambahtahapan" data-parent="<?=$act['id']; ?>">
																	    <a href="#" class="text-info" data-toggle="tooltip" data-placement="bottom" title="Tambah Tahapan"><i class="fa fa-fw fa-plus"></i></a>
																	</span>
																</td>
																<td>
																	<a class="text-warning" href="<?=base_url(); ?>RMP/editAct/<?=$act['id'];?>/<?=$this->uri->segment(3);?>" title="Hapus Tahapan"><span class="fa fa-fw fa-pencil"></span></a>
																	<a class="text-danger" href="<?=base_url(); ?>RMP/deleteAct/<?=$act['id'];?>/<?=$this->uri->segment(3);?>" title="Hapus Tahapan"><span class="fa fa-fw fa-trash"></span></a>
																</td>
															</tr>
																<?php if(isset($allStages) != NULL){ $no3=1;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){ ?>
															<tr>
																<td>2.<?=($no-1).".".$no3++; ?></td>
																<td><?php echo str_repeat('&nbsp;', 16).$stage['kegiatan'];?> 
																</td>
																<td>
																	<a class="text-warning" href="<?=base_url(); ?>RMP/editStage/<?=$stage['id'];?>/<?=$this->uri->segment(3);?>" title="Hapus Tahapan"><span class="fa fa-fw fa-pencil"></span></a>
																	<a class="text-danger" href="<?=base_url(); ?>RMP/deleteStage/<?=$stage['id'];?>/<?=$this->uri->segment(3);?>" title="Hapus Tahapan"><span class="fa fa-fw fa-trash"></span></a>
																</td>
															</tr>
																<?php }}} ?>															
															<?php }}} ?>															
															<tr>
																<td>3.</td>
																<td>Tahapan Pelaporan
																	<span data-toggle="modal" data-target="#tambahsub" data-parent="C">

																	    <a href="#" class="text-success" data-toggle="tooltip" data-placement="bottom" title="Tambah Sub Kegiatan"><i class="fa fa-fw fa-plus"></i></a> 
																	</span>
																</td>
																<td></td>
															</tr>
															<?php if(isset($allAct) != NULL){ $no=1; foreach($allAct as $act){if($act['parent'] == 'C'){ ?>
															<tr>
																<td>3.<?=$no++; ?></td>
																<td><?php echo str_repeat('&nbsp;', 8).$act['kegiatan'];?> 																	
																	<span data-toggle="modal" data-target="#tambahtahapan" data-parent="<?=$act['id']; ?>">
																	    <a href="#" class="text-info" data-toggle="tooltip" data-placement="bottom" title="Tambah Tahapan"><i class="fa fa-fw fa-plus"></i></a>
																	</span>
																</td>
																<td>
																	<a class="text-warning" href="<?=base_url(); ?>RMP/editAct/<?=$act['id'];?>/<?=$this->uri->segment(3);?>" title="Hapus Tahapan"><span class="fa fa-fw fa-pencil"></span></a>
																	<a class="text-danger" href="<?=base_url(); ?>RMP/deleteAct/<?=$act['id'];?>/<?=$this->uri->segment(3);?>" title="Hapus Tahapan"><span class="fa fa-fw fa-trash"></span></a>
																</td>
															</tr>
																<?php if(isset($allStages) != NULL){ $no3=1;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){ ?>
															<tr>
																<td>3.<?=($no-1).".".$no3++; ?></td>
																<td><?php echo str_repeat('&nbsp;', 16).$stage['kegiatan'];?> 
																</td>
																<td>
																	<a class="text-warning" href="<?=base_url(); ?>RMP/editStage/<?=$stage['id'];?>/<?=$this->uri->segment(3);?>" title="Hapus Tahapan"><span class="fa fa-fw fa-pencil"></span></a>
																	<a class="text-danger" href="<?=base_url(); ?>RMP/deleteStage/<?=$stage['id'];?>/<?=$this->uri->segment(3);?>" title="Hapus Tahapan"><span class="fa fa-fw fa-trash"></span></a>
																</td>
															</tr>
																<?php }}} ?>															
															<?php }}} ?>															
														</tbody>
													</table>
												</div>
											</div>
											<div class="tab-pane fade show" id="bagan" role="tabpanel">
												<div class="card-title">
													<h3 class="text-center">Unggah Bagan Alir</h3>
													<hr>
													<?php if($row['baganalir'] != NULL){ ?>
														<img src="<?=base_url(); ?>assets/uploads/baganalir/<?=$row['baganalir']?>" alt="" height="300" class="img">
													<?php } ?>															
													<div class="input-group">
														<div class="custom-file">
															<input type="file" name="baganalir">
														</div>
													</div>
												</div>
											</div>
										</div>
										<?php echo form_close(); ?>
									</div>

								</div>
						</div><!-- .animated -->
				</div><!-- .content -->
		</div><!-- /#right-panel -->
		<!-- Right Panel -->

		<!-- Modal -->
		<div class="modal fade" id="previewfoto" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
								<div class="modal-header">
										<h5 class="modal-title" id="largeModalLabel">Preview Foto</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
										</button>
								</div>
								<div class="modal-body">
										<img width="600" src="<?=base_url(); ?>assets/uploads/strukturorg/<?=$row['strukturorg']?>" alt="">
								</div>
								<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
								</div>
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
														<input type="text" name="kegiatan" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Deskripsi (Opsional)</label>
												<div class="input-group">
														<textarea name="deskripsi" class="ckeditor"></textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
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
				<div class="modal-dialog modal-md" role="document">
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
														<input type="text" name="kegiatan" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Deskripsi (Opsional)</label>
												<div class="input-group">
														<textarea name="deskripsi" class="ckeditor"></textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
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
