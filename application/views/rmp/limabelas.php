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
											<center><h2><?=$row['judul'] ?></h2>Daftar Pustaka</center>
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
												<a href="<?=base_url(); ?>RMP/empat/<?=$this->uri->segment(3)?>" type="button" class="btn btn-labeled btn-danger">
														<span class="btn-label"><i class="fa fa-fw fa-arrow-left"></i></span> Back
												</a>																
												<a href="<?=base_url(); ?>RMP/att1/<?=$this->uri->segment(3)?>" type="button" class="btn btn-labeled btn-success">
														<span class="btn-label"><i class="fa fa-fw fa-arrow-right"></i></span> Lampiran 1 (RAB)
												</a>
											</div>
										</div>
									</div>
								</div>
								<?php echo form_open('RMP/sembilan/'.$this->uri->segment(3)); ?>
								<div class="row">
									<div class="col-md-3">
										<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
											<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#cek" role="tab" aria-controls="latar" aria-selected="true">Kelola Daftar Pustaka</a>
											<input type="hidden" name="id" value="<?=$row['id']; ?>">
											<!-- <button type="submit" class="btn btn-success">
																								<span class=""><i class="fa fa-fw fa-save"></i></span> Simpan Draf
																						</button> -->

										</div>
									</div>
									<div class="col-md-9">
										<div class="tab-content" id="v-pills-tabContent">
											<div class="tab-pane fade show active" id="cek" role="tabpanel">

												<div class="card-title">
													<h3 class="text-center">Daftar Pustaka <a href="#" data-toggle="tooltip" data-placement="bottom"  title="Daftar Pustaka akan otomatis dibangkitkan sesuai panduan"><i class="fa fa-info-circle"></i></a></h3>
													<hr>
														<div class="text-right" style="margin-bottom: 15px;">
															<button type="button" class=" btn-sm btn-labeled btn-success" data-toggle="modal" data-target="#tambahrec">
																	<span class="btn-label"><i class="fa fa-fw fa-plus"></i></span> Tambah Daftar Pustaka
															</button>
														</div>
													<table class="table table-striped table-bordered">
														<thead>
															<tr>
																<th>No.</th>
																<th>Author</th>
																<th>Tahun Terbit</th>
																<th>Judul</th>
																<th>Penerbit</th>
																<th>Kota</th>
																<th>Aksi</th>
															</tr>
														</thead>
														<tbody>
															<?php if(isset($bibs)){$no=1;foreach($bibs as $bib){ ?>
															<tr>
																<td><?=$no++;?></td>
																<td><?=$bib['bib_author'];?></td>
																<td><?=$bib['bib_year'];?></td>
																<td><?=$bib['bib_title'];?></td>
																<td><?=$bib['bib_publisher'];?></td>
																<td><?=$bib['bib_city'];?></td>
																<td>
																	<a class="text-danger" href="<?=base_url(); ?>RMP/deleteBib/<?=$bib['id'];?>/<?=$this->uri->segment(3);?>" title="Hapus Jabatan"><span class="fa fa-fw fa-trash"></span></a>
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
			<div class="modal fade" id="tambahrec" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-md" role="document">
						<div class="modal-content">
								<div class="modal-header">
										<h5 class="modal-title" id="largeModalLabel">Tambah Daftar Pustaka</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
										</button>
								</div>
								<div class="modal-body">
								<?php echo form_open('RMP/addBib/'.$this->uri->segment(3)); ?>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class=" form-control-label">Author</label>
												<div class="input-group">
														<input type="text" name="bib_author" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Tahun Terbit</label>
												<div class="input-group">
														<input type="text" name="bib_year" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Judul</label>
												<div class="input-group">
														<input type="text" name="bib_title" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Penerbit</label>
												<div class="input-group">
														<input type="text" name="bib_publisher" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Kota</label>
												<div class="input-group">
														<input type="text" name="bib_city" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<input type="hidden" name="rmp_id" value="<?=$row['id'];?>">
										<button type="submit" class="btn btn-primary"
											<i class="fa fa-fw fa-dot-circle-o"></i> Submit
								</div>
								<?php echo form_close(); ?>
						</div>
				</div>
		</div>