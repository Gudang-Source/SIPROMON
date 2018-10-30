				<div class="breadcrumbs">
						<div class="col-sm-4">
								<div class="page-header float-left">
										<div class="page-title">
												<h1>User</h1>
										</div>
								</div>
						</div>
						<div class="col-sm-8">
								<div class="page-header float-right">
										<div class="page-title">
												<ol class="breadcrumb text-right">
														<li><a href="#">User</a></li>
														<li class="active">Semua User</li>
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
														<strong class="card-title">Semua User</strong>
												</div>
												<div class="card-body">													
													<div class="text-right" style="margin-bottom: 15px;">
														<!-- <button type="button" class="btn btn-labeled btn-success" data-toggle="modal" data-target="#largeModal">
																<span class="btn-label"><i class="fa fa-fw fa-plus"></i></span> Tambah User
														</button> -->
													</div>
													<table class="table table table-striped table-bordered">
														<thead>
															<tr>
																<th>No.</th>
																<th>Nama Lengkap</th>
																<th>Username</th>
																<th>Alamat Email</th>
																<th>Satker</th>
																<th>Roles</th>
																<th>Aksi</th>
															</tr>
														</thead>
														<tbody>
															<?php if(isset($all)){$no=1;foreach($all as $row){ ?>
															<tr>
																<td><?=$no++;?></td>
																<td><?=$row['fullname'];?></td>
																<td><?=$row['username'];?></td>
																<td><a href="mailto:<?=$row['email'];?>" title=""><?=$row['email'];?></a></td>
																<td><?=$row['satker'];?></td>
																<td><?=$row['roles'];?></td>
																<td>
																	<!-- <a class="text-info" href="#" title="Lihat Detail User" data-toggle="tooltip"><span class="fa fa-fw fa-eye"></span></a> 
																	<a class="text-primary" href="#" title="Perbarui User" data-toggle="tooltip"><span class="fa fa-fw fa-pencil"></span></a> 
																	<a class="text-danger" href="#" title="Hapus User" data-toggle="tooltip" data-confirm="Apa Anda yakin untuk menghapus User: giar? SEMUA data Uji Profisiensi yang menggunakan User ini AKAN DIHAPUS PERMANEN!!" data-method="post"><span class="fa fa-fw fa-trash"></span></a> -->
																</td>
															</tr>
															<?php }}else{ ?>
															<tr>
																<td>Belum ada data</td>
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
		<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
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
																		<option value="Teknologi dan Terapan Terpadu">Teknologi dan Terapan Terpadu</option>
																		<option value="Rekomtek">Rekomtek</option>
																		<option value="Pilot Project">Pilot Project</option>
																		<option value="Layanan Teknis">Layanan Teknis</option>
																		<option value="Layanan Internal">Layanan Internal</option>
																</select>
													</div>
												</div>
												<div class="form-group">
													<label class=" form-control-label">Tahun Anggaran</label>
													<div class="input-group">
															<input name="tahun_anggaran" type="number" min="2000" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label class=" form-control-label">Satuan Kerja</label>
													<div class="input-group">
															<input name="satker" type="text" class="form-control">
													</div>
												</div>												
												<div class="form-group">
													<label class=" form-control-label">Konseptor</label>
													<div class="input-group">
															<input name="konseptor" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label class=" form-control-label">Pengesah</label>
													<div class="input-group">
															<input name="pengesah" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label class=" form-control-label">Pemeriksa</label>
													<div class="input-group">
															<input name="pemeriksa" class="form-control">
													</div>
												</div>
											</div>
										</div>
								</div>
								<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-primary"
											<i class="fa fa-fw fa-dot-circle-o"></i> Submit
										</button>
								</div>
								<?php echo form_close(); ?>
						</div>
				</div>
		</div>
		<!-- Right Panel -->