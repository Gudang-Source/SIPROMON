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
											<center><h2><?=$row['judul'] ?></h2>Bab VI (Tugas, Tanggung Jawab dan Wewenang)</center>
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
												<a href="<?=base_url(); ?>RMP/lima/<?=$this->uri->segment(3)?>" type="button" class="btn btn-labeled btn-danger">
														<span class="btn-label"><i class="fa fa-fw fa-arrow-left"></i></span> Back
												</a>
												<a href="<?=base_url(); ?>RMP/tujuh/<?=$this->uri->segment(3)?>" type="button" class="btn btn-labeled btn-success">
														<span class="btn-label"><i class="fa fa-fw fa-arrow-right"></i></span> Bab VII
												</a>
											</div>
										</div>
									</div>
								</div>
								<?php echo form_open('RMP/enam/'.$this->uri->segment(3)); ?>
								<div class="row">
									<div class="col-md-3">
										<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
											<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#strukturorg" role="tab" aria-controls="latar" aria-selected="true">Kelola Tugas</a>
											<input type="hidden" name="id" value="<?=$row['id']; ?>">
										</div>
									</div>
									<div class="col-md-9">
										<div class="tab-content" id="v-pills-tabContent">
											<div class="tab-pane fade show active" id="strukturorg" role="tabpanel">
												<div class="card-title">
													<h3 class="text-center">Tugas, Tanggung Jawab dan Wewenang <a href="#" data-toggle="tooltip" data-placement="bottom"  title="Masukan jabatan sesuai struktur organisasi"><i class="fa fa-info-circle"></i></a></h3>
													<hr>
														<div class="text-right" style="margin-bottom: 15px;">
															<button type="button" class=" btn-sm btn-labeled btn-primary" data-toggle="modal" data-target="#previewfoto">
																	<span class="btn-label"><i class="fa fa-fw fa-eye"></i></span> Lihat Struktur
															</button>
															<button type="button" class=" btn-sm btn-labeled btn-success" data-toggle="modal" data-target="#tambahjabatan">
																	<span class="btn-label"><i class="fa fa-fw fa-plus"></i></span> Tambah Jabatan
															</button>
														</div>
													<table class="table table-striped table-bordered">
														<thead>
															<tr>
																<th>No.</th>
																<th>Jabatan SDM</th>
																<th>Aksi</th>
															</tr>
														</thead>
														<tbody>
															<?php if(isset($all)){$no=1;foreach($all as $row2){ ?>
															<tr>
																<td><?=$no++;?></td>
																<td><?=$row2['jabatan'];?></td>
																<td>
																	<a class="text-info" data-toggle="modal" data-target="#role<?=$row2['id']?>" title="Lihat Detail Jabatan"><span class="fa fa-fw fa-eye"></span></a> 
																	<a class="text-warning edit_modal" id="<?=$row2['id']; ?>" title="Edit Jabatan"><span class="fa fa-fw fa-pencil"></span></a> 
																	<a class="text-danger" href="<?=base_url(); ?>RMP/deleteRole/<?=$row2['id'];?>/<?=$this->uri->segment(3);?>" title="Hapus Jabatan"><span class="fa fa-fw fa-trash"></span></a>
																</td>
															</tr>
															<?php }}else{ ?>
															<tr>
																<td>Belum ada data</td>
																<td>Belum ada data</td>
																<td>Belum ada data</td>
															</tr>
															<?php } ?>
														</tbody>
													</table>
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
		<!-- Modal -->
		<?php if(isset($all)){$no=1;foreach($all as $role){ ?>
		<div class="modal fade" id="role<?=$role['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
								<div class="modal-header">
										<h5 class="modal-title" id="largeModalLabel">Detail Jabatan</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
										</button>
								</div>
								<div class="modal-body">
									<p><?php echo $no++.". ".$role['jabatan']; ?></p>
									<table class="table table-responsive">
										<tr>
											<td>Tugas</td>
											<td>:</td>
											<td><?=$role['tugas']; ?></td>
										</tr>
										<tr>
											<td>Tanggung Jawab</td>
											<td>:</td>
											<td><?=$role['tanggungjawab']; ?></td>
										</tr>
										<tr>
											<td>Wewenang</td>
											<td>:</td>
											<td><?=$role['wewenang']; ?></td>
										</tr>
									</table>	
								</div>
								<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
								</div>
						</div>
				</div>
		</div>		
		<?php }} ?>
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
		<div class="modal fade" id="tambahjabatan" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
								<div class="modal-header">
										<h5 class="modal-title" id="largeModalLabel">Tambah Jabatan</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
										</button>
								</div>
								<div class="modal-body">
								<?php echo form_open('RMP/addRole/'.$this->uri->segment(3)); ?>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class=" form-control-label">Nama Jabatan </label>
												<div class="input-group">
														<input type="text" name="jabatan" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Tugas</label>
												<div class="input-group">
														<textarea id="ta1" class="ckeditor" name="tugas"></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Tanggung Jawab</label>
												<div class="input-group">
														<textarea id="ta2" class="ckeditor" name="tanggungjawab"></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Wewenang</label>
												<div class="input-group">
														<textarea id="ta3" class="ckeditor" name="wewenang"></textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<input type="hidden" name="rmp_id" value="<?=$row['id']; ?>">
										<button type="submit" class="btn btn-primary"
											<i class="fa fa-fw fa-dot-circle-o"></i> Submit
								</div>
								<?php echo form_close(); ?>
						</div>
				</div>
		</div>