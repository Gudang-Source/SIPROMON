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
									        <option value="satu" <?php if($this->uri->segment(2) == "satu") echo "selected"; ?> >Bab I</option>
									        <option value="dua" <?php if($this->uri->segment(2) == "dua") echo "selected"; ?>>Bab II</option>
									        <option value="tiga" <?php if($this->uri->segment(2) == "tiga") echo "selected"; ?>>Bab III</option>
									        <option value="empat" <?php if($this->uri->segment(2) == "empat") echo "selected"; ?>>Bab IV</option>
									        <option value="limabelas" <?php if($this->uri->segment(2) == "limabelas") echo "selected"; ?>>Daftar Pustaka</option>
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
											<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#lingkup" role="tab" aria-controls="latar" aria-selected="true">Lingkup Kegiatan</a>
											<?php if($row['jenis'] == "Litbang"){ ?>
											<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#formulasi" role="tab" aria-controls="masalah" aria-selected="false">Formulasi Kegiatan</a>
											<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#kerangka" role="tab" aria-controls="masalah" aria-selected="false">Kerangka Pemikiran</a>
										  <?php } ?>
											<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#kegiatan" role="tab" aria-controls="masalah" aria-selected="false">Bagan Alir Pelaksanaan Kegiatan (1)</a>
											<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#baganalir" role="tab" aria-controls="masalah" aria-selected="false">Bagan Alir Pelaksanaan Kegiatan (2)</a>
											<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#dokumen" role="tab" aria-controls="masalah" aria-selected="false">Dokumentasi Sistem Manejemen Mutu</a>
											<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#rekaman" role="tab" aria-controls="masalah" aria-selected="false">Daftar Induk Rekaman</a>
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
											<div class="tab-pane fade show active" id="lingkup" role="tabpanel">
												<div class="card-title">
													<h3 class="text-center">Sasaran Keluaran (Output)</h3>
													<hr>
													<textarea class="ckeditor" name="lingkup" ><?=$row['lingkup'];?></textarea>
												</div>
											</div>
											<div class="tab-pane fade" id="formulasi" role="tabpanel">
												<div class="card-title">
													<h3 class="text-center">Sasaran Mutu</h3>
													<hr>
													<textarea class="ckeditor" name="formulasi" ><?=$row['formulasi'];?></textarea>
												</div>
											</div>
											<div class="tab-pane fade" id="kerangka" role="tabpanel">
												<div class="card-title">
													<h3 class="text-center">Kerangka Pemikiran</h3>
													<hr>
													<textarea class="ckeditor" name="kerangka" ><?=$row['kerangka'];?></textarea>
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

											<div class="tab-pane fade show" id="baganalir" role="tabpanel">
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
											<div class="tab-pane fade show" id="dokumen" role="tabpanel">
												<div class="card-title">
													<h3 class="text-center">Daftar Dokumen <a href="#" data-toggle="tooltip" data-placement="bottom"  title="Daftar dokumen SMM merujuk pada Formulir Daftar Induk Dokumen SIMPADU terbaru"><i class="fa fa-info-circle"></i></a></h3>
													<hr>
														<div class="text-right" style="margin-bottom: 15px;">
															<button type="button" class=" btn-sm btn-labeled btn-success" data-toggle="modal" data-target="#tambahdoc">
																	<span class="btn-label"><i class="fa fa-fw fa-plus"></i></span> Tambah Dokumen
															</button>
														</div>
													<table class="table table-striped table-bordered">
														<col width="7px">
														<thead>
															<tr>
																<th>No.</th>
																<th>Nama Dokumen</th>
																<th>Nomor Dokumen</th>
																<th>Aksi</th>
															</tr>
														</thead>
														<tbody>
															<?php if(isset($documents)){$no=1;foreach($documents as $document){ ?>
															<tr>
																<td><?=$no++;?></td>
																<td><?=$document['document_name'];?></td>
																<td><?=$document['document_num'];?></td>
																<td>
																	<a href="#" class="text-warning" data-toggle="modal" data-target="#tambahdoc" data-name="<?=$document['document_name']; ?>" data-num="<?=$document['document_num']; ?>" data-id="<?=$document['id'];?>"><span class="fa fa-fw fa-pencil"></span></a>
																	<a class="text-danger" href="<?=base_url(); ?>RMP/deleteDocument/<?=$document['id'];?>/<?=$this->uri->segment(3);?>" title="Hapus Jabatan"><span class="fa fa-fw fa-trash"></span></a>
																</td>
															</tr>
															<?php }}else{ ?>
															<tr>
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
											<div class="tab-pane fade show" id="rekaman" role="tabpanel">

												<div class="card-title">
													<h3 class="text-center">Daftar Rekaman <a href="#" data-toggle="tooltip" data-placement="bottom"  title="Masa Simpan Rekaman mengacu ke Permen PU No. 39/PRT/M/2007 Pedoman Jadwal Retensi Arsip (JRA) Kementerian Pekerjaan Umum."><i class="fa fa-info-circle"></i></a></h3>
													<hr>
														<div class="text-right" style="margin-bottom: 15px;">
															<button type="button" class=" btn-sm btn-labeled btn-success" data-toggle="modal" data-target="#tambahrec">
																	<span class="btn-label"><i class="fa fa-fw fa-plus"></i></span> Tambah Rekaman
															</button>
														</div>
													<table class="table table-striped table-bordered">
														<col width="7px">
														<thead>
															<tr>
																<th>No.</th>
																<th>Nama Rekaman / Bukti Kerja</th>
																<th>Lokasi dan Penanggung jawab Penyimpanan Rekaman</th>
																<th>Masa Simpan</th>
																<th>Aksi</th>
															</tr>
														</thead>
														<tbody>
															<?php if(isset($records)){$no=1;foreach($records as $record){ ?>
															<tr>
																<td><?=$no++;?></td>
																<td><?=$record['record_name'];?></td>
																<td><?=$record['location'];?></td>
																<td><?=$record['period'];?></td>
																<td>
																	<a href="#" class="text-warning" data-toggle="modal" data-target="#tambahrec" data-name="<?=$record['record_name']; ?>" data-loc="<?=$record['location']; ?>" data-period="<?=$record['period']?>" data-id="<?=$record['id'];?>"><span class="fa fa-fw fa-pencil"></span></a>
																	<a class="text-danger" href="<?=base_url(); ?>RMP/deleteRecord/<?=$record['id'];?>/<?=$this->uri->segment(3);?>" title="Hapus Jabatan"><span class="fa fa-fw fa-trash"></span></a>
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
											<!-- <div class="tab-pane fade" id="v-pills-settings" role="tabpanel">EWEWEWEW</div> -->

										</div>
										<?php echo form_close(); ?>
									</div>

								</div>
						</div><!-- .animated -->
				</div><!-- .content -->
		</div><!-- /#right-panel -->
			<div class="modal fade" id="tambahdoc" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
							<div class="modal-header">
									<h5 class="modal-title" id="largeModalLabel">Tambah Dokumen SMM</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
									</button>
							</div>
							<div class="modal-body">
							<?php echo form_open('RMP/addDocument/'.$this->uri->segment(3)); ?>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class=" form-control-label">Nama Dokumen</label>
											<div class="input-group">
													<input type="text" name="document_name" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class=" form-control-label">Nomor Dokumen</label>
											<div class="input-group">
													<input type="text" name="document_num" class="form-control" placeholder="PP/PUSAIR/.../...">
											</div>
										</div>
										<input type="hidden" name="document_id">
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
			<div class="modal fade" id="tambahrec" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-md" role="document">
						<div class="modal-content">
								<div class="modal-header">
										<h5 class="modal-title" id="largeModalLabel">Tambah Rekaman</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
										</button>
								</div>
								<div class="modal-body">
								<?php echo form_open('RMP/addRecord/'.$this->uri->segment(3)); ?>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class=" form-control-label">Nama Rekaman / Bukti Kerja</label>
												<div class="input-group">
														<input type="text" name="record_name" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Lokasi & Penanggung Jawab</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Lemari No </span>
                          </div>
                          <input type="text" name="lemari" class="form-control" placeholder="">
                        </div>
												<div class="input-group">
														<input type="text" name="pj" class="form-control" placeholder="Penanggung Jawab">
												</div>												
											</div>
											<div class="form-group">
												<label class=" form-control-label">Masa Simpan</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Aktif : </span>
                          </div>
                          <input type="number" name="aktif" class="form-control" placeholder="" value="1">
                          <div class="input-group-append">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tahun</span>
                          </div>                          
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Inaktif : </span>
                          </div>
                          <input type="number" name="inaktif" class="form-control" placeholder="" value="3">
                          <div class="input-group-append">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tahun</span>
                          </div>                          
                        </div>                        
    										<input type="hidden" name="record_id">
											</div>											
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
											<div class="form-group">
												<label class=" form-control-label">Deskripsi (Opsional)</label>
												<div class="input-group">
														<textarea id="desc1" name="deskripsi" class="ckeditor" ></textarea>
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
											<div class="form-group">
												<label class=" form-control-label">Deskripsi (Opsional)</label>
												<div class="input-group">
														<textarea id="desc2" name="deskripsi" class="ckeditor"></textarea>
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