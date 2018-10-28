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
										<center><h2>Jadwal Personil, Sarana dan Prasarana</h2><?=$row['judul']; ?><br>Tahun Anggaran <?=$row['tahun_anggaran']; ?></center>
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
										<div class="text-right" style="margin-bottom: 15px;">
											<a href="<?=base_url(); ?>RMP/att3/<?=$this->uri->segment(3)?>" type="button" class="btn btn-labeled btn-danger">
													<span class="btn-label"><i class="fa fa-fw fa-arrow-left"></i></span> Back
											</a>
											<?php if($row['jenis'] == "Teknologi dan Terapan Terpadu"){ ?>
											<a href="<?=base_url(); ?>RMP/att6/<?=$this->uri->segment(3)?>" type="button" class="btn btn-labeled btn-success">
													<span class="btn-label"><i class="fa fa-fw fa-arrow-right"></i></span> Lampiran 6 (Rencana dan Metode)
											</a>												
											<?php }else{ ?>
											<a href="<?=base_url(); ?>RMP/end/<?=$this->uri->segment(3)?>" type="button" class="btn btn-labeled btn-success">
													<span class="btn-label"><i class="fa fa-fw fa-arrow-right"></i></span> End
											</a>
											<?php } ?>
										</div>

									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="card">
										<div class="card-header" style="font-family:'Source Sans Pro'; ">
											<i class="fa fa-fw fa-file-excel-o"></i> Daftar Lampiran
										</div>
										<table class="table table-sm table-hover" style="margin-bottom: 0px;">
											<tbody>
												<tr>
													<th>Lampiran 4</th>
													<?php if($row['att4'] == NULL){ ?>
													<td><i class="text-danger">(belum diunggah)</i></td>
													<?php }else{ ?>
													<td><a href="<?=base_url(); ?>assets/attachment/<?=$row['att4']; ?>"><i class="fa fa-fw fa-download"></i> Download</a></td>
													<?php } ?>
												</tr>
												<tr>
													<th>Lampiran 5</th>
													<?php if($row['att5'] == NULL){ ?>
													<td><i class="text-danger">(belum diunggah)</i></td>
													<?php }else{ ?>
													<td><a href="<?=base_url(); ?>assets/attachment/<?=$row['att4']; ?>"><i class="fa fa-fw fa-download"></i> Download</a></td>
													<?php } ?>												</tr>
											</tbody>
										</table>
								</div>
							</div>
							<div class="col-md-6">
									<?= form_open_multipart('RMP/uploadAtt/'.$this->uri->segment(3)); ?>
									<div class="card">
										<div class="card-header" style="font-family:'Source Sans Pro'; ">
											<i class="fa fa-fw fa-upload"></i> Unggah Lampiran <a href="#" data-toggle="tooltip" data-placement="bottom"  title="Unggah Lampiran dalam Bentuk PDF"><i class="fa fa-info-circle"></i></a>
										</div>
										<div class="card-body">
											<div class="form-group">
												<label class="control-label">Lampiran Jadwal Personil (<a href="<?=base_url(); ?>assets/attachment/templates/JadwalPersonilAttachment4<?php if($row['jenis'] == "Teknologi dan Terapan Terpadu") echo "v2"; ?>.xlsx" target="_blank"><i class="fa fa-fw fa-download"></i>Template Excel</a> )</label>
												<div class="custom-file">
												  <input type="file" class="form-control" name="att4">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label">Lampiran Jadwal Sarana dan Prasarana (<a href="<?=base_url(); ?>assets/attachment/templates/JadwalSarprasAttachment5.xlsx" target="_blank"><i class="fa fa-fw fa-download"></i>Template Excel</a> )</label>
												<div class="custom-file">
												  <input type="file" class="form-control" name="att5">
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