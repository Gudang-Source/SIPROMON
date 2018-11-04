				<div class="breadcrumbs">
						<div class="col-sm-4">
								<div class="page-header float-left">
										<div class="page-title">
												<h1>Jabatan</h1>
										</div>
								</div>
						</div>
						<div class="col-sm-8">
								<div class="page-header float-right">
										<div class="page-title">
												<ol class="breadcrumb text-right">
														<li><a href="#">Jabatan</a></li>
														<li class="active">Semua Jabatan Organisasi RMP</li>
												</ol>
										</div>
								</div>
						</div>
				</div>

				<div class="content mt-3">
						<div class="animated fadeIn">
								<div class="row">

								<div class="col-md-12">
										<?php if($this->session->flashdata('del') == 'ok'){ ?>
										<div class="col-sm-12">
											<div class="alert alert-success alert-dismissible fade show" role="alert">
												<span class="badge badge-pill badge-success">Berhasil</span> Data telah berhasil dihapus
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
										</div>
										<?php }else if($this->session->flashdata('edit') == 'ok'){ ?>
										<div class="col-sm-12">
											<div class="alert alert-success alert-dismissible fade show" role="alert">
												<span class="badge badge-pill badge-success">Berhasil</span> Data telah berhasil di edit
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
										</div>
										<?php } ?>
										<div class="card">
												<div class="card-header">
														<strong class="card-title">Semua Jabatan</strong>
												</div>
												<div class="card-body">													
													<div class="text-right" style="margin-bottom: 15px;">
														<button type="button" class="btn btn-labeled btn-success" data-toggle="modal" data-target="#formPejabat">
																<span class="btn-label"><i class="fa fa-fw fa-plus"></i></span> Tambah Jabatan
														</button>
													</div>
													<table class="table table table-striped table-bordered" id="dt">
														<thead>
															<tr>
																<th>No.</th>
																<th>Jabatan</th>
																<th>Kompetensi</th>
																<th>Tugas</th>
																<th>Tanggung Jawab</th>
																<th>Wewenang</th>
																<th>Aksi</th>
															</tr>
														</thead>
														<tbody>
															<?php if(isset($all)){$no=1;foreach($all as $row){ ?>
															<tr>
																<td><?=$no++;?></td>
																<td><?=$row['name'];?></td>
																<td><?=$row['kompetensi'];?></td>
																<td><?=$row['tugas'];?></td>
																<td><?=$row['tanggungjawab'];?></td>
																<td><?=$row['wewenang'];?></td>
																<td>
																	<a class="text-primary" href="<?=base_url(); ?>Admin/formPosition/<?=$row['id']; ?>" title="Edit" data-toggle="tooltip" data-placement="bottom"><span class="fa fa-fw fa-pencil"></span></a> 
																	<a href="javascript:void(0);" onclick="del(<?php echo $row['id'];?>,'Admin/delPosition');" class="text-danger" data-toggle="tooltip" data-placement="bottom" title="Hapus Pejabat"><span class="fa fa-fw fa-trash"></span></a>
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
		<div class="modal fade" id="formPejabat" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-md" role="document">
						<div class="modal-content">
								<div class="modal-header">
										<h5 class="modal-title" id="largeModalLabel">Tambah Pejabat</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
										</button>
								</div>
								<div class="modal-body">
										<?php echo form_open('Pejabat/addPejabat'); ?>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class=" form-control-label">NIP</label>
													<div class="input-group">
															<input name="nip" class="form-control" required="">
													</div>
												</div>												
												<div class="form-group">
													<label class=" form-control-label">Nama Lengkap dan Gelar</label>
													<div class="input-group">
															<input name="name" class="form-control" required="">
													</div>
												</div>
												<div class="form-group">
													<label class=" form-control-label">Username</label>
													<div class="input-group">
															<input name="username" class="form-control" required="">
													</div>
												</div>
												<div class="form-group">
													<label class=" form-control-label">Password</label>
													<div class="input-group">
															<input name="password" type="password" class="form-control" required="">
													</div>
												</div>
												<div class="form-group">
													<label class=" form-control-label">Jabatan <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pejabat sebelumnya akan otomatis tergantikan"><i class="fa fa-info-circle"></i></a></label>
													<div class="input-group">
															<select name="roles_id" class="form-control">
																<option disabled selected>--Pilih Jabatan--</option>
																<?php foreach($roles as $role){ ?>
																<option value="<?php echo $role['id']; ?>"><?php echo $role['position']; ?></option>
																<?php } ?>
															</select>
													</div>
												</div>												
											</div>
										</div>
								</div>
								<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-primary"
											<i class="fa fa-fw fa-dot-circle-o"></i> Add
										</button>
								</div>
								<?php echo form_close(); ?>
						</div>
				</div>
		</div>
		<!-- Right Panel -->