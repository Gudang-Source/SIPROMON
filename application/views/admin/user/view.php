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
																<th>No Telepon</th>
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
																<td><?=$row['hp'];?></td>
																<td><?=$row['satker'];?></td>
																<td><?=$row['roles'];?></td>
																<td>
																	<a class="text-primary" href="#" title="Edit" data-toggle="modal" data-target="#formUpdateK" data-id="<?= $row['id'];?>" data-fullname="<?= $row['fullname'];?>" data-username="<?= $row['username'];?>" data-email="<?= $row['email'];?>" data-hp="<?= $row['hp'];?>" data-satker_id="<?= $row['satker_id'];?>" data-roles_id="<?= $row['roles_id'];?>"><span class="fa fa-fw fa-pencil"></span></a>
																	<a class="text-warning" href="#" title="Ubah Password" data-toggle="modal" data-target="#formUpdateKP" data-id="<?= $row['id'];?>" data-username="<?= $row['username'];?>" data-email="<?= $row['email'];?>"><span class="fa fa-fw fa-key"></span></a> 
																	<a href="javascript:void(0);" onclick="del(<?php echo $row['id'];?>,'Admin/delKetua/');" class="text-danger" title="Hapus Ketua"><span class="fa fa-fw fa-trash"></span></a>
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
		<div class="modal fade" id="formUpdateK" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-md" role="document">
						<div class="modal-content">
								<div class="modal-header">
										<h5 class="modal-title" id="largeModalLabel">Edit Ketua</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
										</button>
								</div>
								<div class="modal-body">
										<?php echo form_open('Admin/updateKetua'); ?>
										<div class="row">
											<div class="col-md-12">
												<input name="id" id="idU" type="hidden" class="form-control" >
												<div class="form-group">
													<label class=" form-control-label">Fullname</label>
													<div class="input-group">
															<input name="fullname" class="form-control" required="">
													</div>
												</div>												
												<div class="form-group">
													<label class=" form-control-label">Username</label>
													<div class="input-group">
															<input name="username" class="form-control" >
													</div>
												</div>
												<div class="form-group">
													<label class=" form-control-label">Email</label>
													<div class="input-group">
															<input name="email" type="email" class="form-control" >
													</div>
												</div>
												<div class="form-group">
													<label class=" form-control-label">No Telepon</label>
													<div class="input-group">
															<input name="hp"  class="form-control" >
													</div>
												</div>
												<div class="form-group">
													<label class=" form-control-label">Satuan Kerja</label>
													<div class="input-group">
															<select name="satker_id" id="satker_id" class="form-control" required>
																	<option disabled selected>--Pilih Satuan Kerja--</option>
													      	<?php foreach($satkers as $satker){ ?>
													      	<option value="<?=$satker['id']; ?>"><?=$satker['name']; ?></option>
													      	<?php } ?>
													      </select>
													</div>
												</div>		
												<div class="form-group">
													<label class=" form-control-label">Atasan Langsung</label>
													<div class="input-group">
															<select name="roles_id" id="roles_id" class="form-control" required>
																	<option disabled selected>--Pilih Atasan Langsung--</option>
													      	<?php foreach($roles as $role){ ?>
													      	<option value="<?=$role['id']; ?>" ><?=$role['position']; ?>( <?=$role['name']; ?> )</option>
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
											<i class="fa fa-fw fa-dot-circle-o"></i> Edit
										</button>
								</div>
								<?php echo form_close(); ?>
						</div>
				</div>
		</div>

		<div class="modal fade" id="formUpdateKP" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-md" role="document">
						<div class="modal-content">
								<div class="modal-header">
										<h5 class="modal-title" id="largeModalLabel">Edit Username/Email/Password</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
										</button>
								</div>
								<div class="modal-body">
										<?php echo form_open('Admin/updateKetua'); ?>
										<div class="row">
											<div class="col-md-12">
												<input name="id" id="idU" type="hidden" class="form-control" >
																							
												<div class="form-group">
													<label class=" form-control-label">Username</label>
													<div class="input-group">
															<input name="username" class="form-control" >
													</div>
												</div>
												<div class="form-group">
													<label class=" form-control-label">Email</label>
													<div class="input-group">
															<input name="email" type="email" class="form-control" >
													</div>
												</div>
												<div class="form-group">
													<label class=" form-control-label">Password</label>
													<div class="input-group">
															<input name="password" type="password" required class="form-control" >
													</div>
												</div>							
											</div>
										</div>
								</div>
								<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-primary"
											<i class="fa fa-fw fa-dot-circle-o"></i> Edit
										</button>
								</div>
								<?php echo form_close(); ?>
						</div>
				</div>
		</div>