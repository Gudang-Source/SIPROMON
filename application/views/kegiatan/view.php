				<div class="breadcrumbs">
						<div class="col-sm-4">
								<div class="page-header float-left">
										<div class="page-title">
												<h1>Kegiatan</h1>
										</div>
								</div>
						</div>
						<div class="col-sm-8">
								<div class="page-header float-right">
										<div class="page-title">
												<ol class="breadcrumb text-right">
														<li><a href="#">Kegiatan</a></li>
														<li class="active">Semua Kegiatan</li>
												</ol>
										</div>
								</div>
						</div>
				</div>

				<div class="content mt-3">
						<div class="animated fadeIn">
								<div class="row">

								<div class="col-md-12">
										<div class="card">
												<div class="card-header">
														<strong class="card-title">Semua Kegiatan</strong>
												</div>
												<div class="card-body">
													<div class="text-right" style="margin-bottom: 15px;">
														<button type="button" class="btn btn-labeled btn-success" data-toggle="modal" data-target="#addKegiatan">
																<span class="btn-label"><i class="fa fa-fw fa-plus"></i></span> Tambah Kegiatan
														</button>
													</div>
													<table class="table table-striped table-bordered">
														<thead>
															<tr>
																<th>No.</th>
																<th>Judul</th>
																<th>Jenis RMP</th>
																<th>Aksi</th>
															</tr>
														</thead>
														<tbody>
															<?php if(isset($all)){$no=1;foreach($all as $row){ ?>
															<tr>
																<td><?=$no++;?></td>
																<td><?=$row['judul'];?></td>
																<td><?=$row['jenis'];?></td>

																<td>
																	<a href="<?=base_url();?>Kegiatan/show/<?=$row['id']; ?>" type="submit" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Lihat Detail">
																		<i class="fa fa-fw fa-arrow-circle-right"></i> Proses
																	</a>
																	<a href="#" onclick="del(<?=$row['id'] ;?>,'Kegiatan/delKegiatan/')" type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Hapus Kegiatan">
																		<i class="fa fa-fw fa-trash"></i> Hapus
																	</a>
																</td>
															</tr>
															<?php }}else{ ?>
															<tr>
																<td>Belum ada data</td>
																<td>Belum ada data</td>
																<td>Belum ada data</td>
																<td>Belum ada data</td>
																<td>Belum ada data</td>
															</tr>
															<?php } ?>
														</tbody>
													</table>
												</div>
										</div>
								</div>


								</div>
						</div><!-- .animated -->
				</div><!-- .content -->
		</div><!-- /#right-panel -->
		<div class="modal fade" id="addKegiatan" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-md" role="document">
						<div class="modal-content">
								<div class="modal-header">
										<h5 class="modal-title" id="largeModalLabel">Tambah Kegiatan</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
										</button>
								</div>
								<div class="modal-body">
										<?php echo form_open('Kegiatan/create'); ?>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class=" form-control-label">Judul Kegiatan</label>
													<div class="input-group">
															<input name="judul" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label class=" form-control-label">Jenis Rencana Mutu</label>
													<div class="input-group">
																	<select class="form-control" name="jenis">
																		<option disabled selected>--Pilih Jenis RMP--</option>
																		<option value="Litbang">Litbang</option>
																		<option value="Non-Litbang">Non-Litbang</option>
																</select>
													</div>
												</div>
												<div class="form-group">
													<label class=" form-control-label">Tahun Anggaran</label>
													<div class="input-group">
															<input name="tahun_anggaran" type="number" min="2000" class="form-control">
													</div>
												</div>
											</div>
										</div>
								</div>
								<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<input type="hidden" name="user_id" value="<?=$this->session->userdata('id'); ?>">
										<button type="submit" class="btn btn-primary"
											<i class="fa fa-fw fa-dot-circle-o"></i> Submit
										</button>
								</div>
								<?php echo form_close(); ?>
						</div>
				</div>
		</div>
		<!-- Right Panel -->