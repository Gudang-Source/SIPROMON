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
										<center><h2>Rencana Anggaran Biaya</h2><?=$row['judul']; ?><br>Tahun Anggaran <?=$row['tahun_anggaran']; ?></center>
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
										<div class="text-right" style="margin-bottom: 15px;">
											<?php if($row['jenis'] == "Litbang"){ ?>
												<a href="<?=base_url(); ?>RMP/limabelas/<?=$this->uri->segment(3)?>" type="button" class="btn btn-labeled btn-danger">
														<span class="btn-label"><i class="fa fa-fw fa-arrow-left"></i></span> Back
												</a>		
											<?php }else{ ?>
												<a href="<?=base_url(); ?>RMP/empat/<?=$this->uri->segment(3)?>" type="button" class="btn btn-labeled btn-danger">
														<span class="btn-label"><i class="fa fa-fw fa-arrow-left"></i></span> Back
												</a>		
											<?php } ?>												
												<a href="<?=base_url(); ?>RMP/att2/<?=$this->uri->segment(3)?>" type="button" class="btn btn-labeled btn-success">
														<span class="btn-label"><i class="fa fa-fw fa-arrow-right"></i></span> Lampiran 2 (Raker)
												</a>												
										</div>

									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="card">
										<div class="card-header">
											<i class="fa fa-fw fa-file-excel-o"></i> Detail Lampiran & Dokumen
										</div>
										<?=form_open('RMP/fulfillAtt1/'.$this->uri->segment(3)) ?>
										<table class="table table-sm table-hover" style="margin-bottom: 0px;">
											<tbody>
												<tr>
													<th>Rencana Anggaran Biaya</th>
													<?php if($row['rabdocument'] == NULL){ ?>
													<td><i class="text-danger">(belum diunggah)</i></td>
													<?php }else{ ?>
													<td><a href="<?=base_url(); ?>assets/attachment/<?=$row['rabdocument'] ?>"><i class="fa fa-fw fa-download"></i> Download</a></td>
													<?php } ?>
												</tr>
												<tr>
													<th>Total Biaya Keluaran (RAB)</th>
													<td>
														<div class="input-group">
																
											        <div class="input-group-prepend">
											          <div class="input-group-text">Rp.</div>
											        </div>
											        <input type="number" name="pagu" value="<?=$row['pagu'] ?>" placeholder="Pagu Anggaran" class="form-control <?php if(isset($row['pagu'])){ ?>is-valid <?php }else{ ?> is-invalid  <?php } ?>">
															<?php if(!isset($row['pagu'])){ ?>
												        <div class="invalid-feedback">
												          Harus diisi!
												        </div>
    										      <?php } ?>
														</div>
													</td>
												</tr>
												<tr>
													<th>Output Kegiatan</th>
													<td>
														<div class="input-group">
											        <input type="text" name="output" value="<?=$row['output'] ?>" placeholder="Output Kegiatan" class="form-control <?php if(isset($row['output'])){ ?>is-valid <?php }else{ ?> is-invalid  <?php } ?>">
															<?php if(!isset($row['output'])){ ?>
												        <div class="invalid-feedback">
												          Harus diisi!
												        </div>
    										      <?php } ?>
														</div>
													</td>
												</tr>												
												<tr>
													<th>Satuan Output</th>
													<td>
														<div class="input-group">
											        <input type="text" name="volume" value="<?=$row['volume'] ?>" placeholder="Satuan Output (Kegiatan)" class="form-control <?php if(isset($row['volume'])){ ?>is-valid <?php }else{ ?> is-invalid  <?php } ?>">
															<?php if(!isset($row['volume'])){ ?>
												        <div class="invalid-feedback">
												          Harus diisi!
												        </div>
    										      <?php } ?>
														</div>
													</td>
												</tr>																								
											</tbody>
										</table>
											<button type="submit" class="btn btn-success form-control">
													<span class=""><i class="fa fa-fw fa-save"></i></span> Simpan RAB
											</button>
											<?=form_close(); ?>
								</div>
							</div>
							<div class="col-md-6">
									<?= form_open_multipart('RMP/uploadRAB/'.$this->uri->segment(3)); ?>
									<div class="card">
										<div class="card-header">
											<i class="fa fa-fw fa-upload"></i> Unggah Rencana Anggaran Biaya (RAB) <a href="#" data-toggle="tooltip" data-placement="bottom"  title="Unggah Lampiran dalam Bentuk Excel"><i class="fa fa-info-circle"></i></a>
										</div>
										<div class="card-body">
											<div class="form-group">
												<label class="control-label">Lampiran RAB </label>
												<div class="custom-file">
												  <input type="file" class="form-control" name="att4">
												</div>
											</div>
											<div class="form-group">
												<div class="pull-right">
												  <button type="submit" class="btn btn-labeled btn-primary">
													<span class="btn-label"><i class="fa fa-fw fa-upload"></i></span> Upload
 													</button>
												</div>
											</div>
										</div>
								</div>
								<?=form_close(); ?>
							</div>
						</div><!-- .animated -->
				</div><!-- .content -->

		<div class="modal fade" id="lengkapi" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-sm" role="document">
						<div class="modal-content">
								<div class="modal-header">
										<h5 class="modal-title" id="largeModalLabel">Lengkapi RAB</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
										</button>
								</div>
								<div class="modal-body">
								<?php echo form_open('RMP/fulfillAtt1/'.$this->uri->segment(3)); ?>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class=" form-control-label">Keluaran (output)</label>
												<div class="input-group">
														<input type="text" name="output" class="form-control" placeholder="">
												</div>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Volume</label>
												<div class="input-group">
														<input type="text" name="volume" class="form-control" placeholder="">
												</div>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Satuan Ukur</label>
												<div class="input-group">
														<input type="text" name="unitof" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Judul</label>
												<div class="input-group">
														<input type="text" name="rabtitle" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-primary"
											<i class="fa fa-fw fa-dot-circle-o"></i> Submit
								</div>
								<?php echo form_close(); ?>
						</div>
				</div>
		</div>				