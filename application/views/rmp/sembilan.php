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
											<center><h2><?=$row['judul'] ?></h2>Bab IX - XII</center>
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
												<a href="<?=base_url(); ?>RMP/delapan/<?=$this->uri->segment(3)?>" type="button" class="btn btn-labeled btn-danger">
														<span class="btn-label"><i class="fa fa-fw fa-arrow-left"></i></span> Back
												</a>												
												<a href="<?=base_url(); ?>RMP/tigabelas/<?=$this->uri->segment(3)?>" type="button" class="btn btn-labeled btn-success">
														<span class="btn-label"><i class="fa fa-fw fa-arrow-right"></i></span> Bab XIII
												</a>
											</div>
										</div>
									</div>
								</div>
								<?php echo form_open('RMP/sembilan/'.$this->uri->segment(3)); ?>
								<div class="row">
									<div class="col-md-3">
										<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
											<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#cek" role="tab" aria-controls="latar" aria-selected="true">Preview 9 - 12</a>
											<input type="hidden" name="id" value="<?=$row['id']; ?>">
											<!-- <button type="submit" class="btn btn-success">
																								<span class=""><i class="fa fa-fw fa-save"></i></span> Simpan Draf
																						</button> -->
											<button type="submit" class="btn btn-outline-dark">
													<span class=""><i class="fa fa-fw fa-eye"></i></span> Preview
											</button>
										</div>
									</div>
									<div class="col-md-9">
										<div class="tab-content" id="v-pills-tabContent">
											<div class="tab-pane fade show active" id="cek" role="tabpanel">
												<div class="card-title">
													<h3 class="text-center">Bab 9 - 12 <a href="#" data-toggle="tooltip" data-placement="bottom"  title="Ketiga bab ini tidak perlu penambahan sesuai panduan"><i class="fa fa-info-circle"></i></a></h3> 
													<hr>
													<textarea class="ckeditor" name="cek" >
<p><strong>JADWAL</strong><strong>&nbsp;PELAKSANAAN KEGIATAN&nbsp;</strong></p>

<p>Jadwal pelaksanaan kegiatan secara rinci sesuai tahapan kegiatan, disajikan pada Lampiran 2 Kerangka dan Rencana Kerja Kegiatan. Berdasarkan tabel kerangka dan rencana kerja kegiatan disusun Kurva S rencana keuangan dan pelaksanaan fisik kegiatan yang disajikan pada Lampiran 3.</p>

<p><strong>JADWAL</strong><strong>&nbsp;PERSONIL</strong></p>

<p>Jadwal personil dan target kegiatan disajikan pada Lampiran 4.</p>

<p><strong>&nbsp;</strong><strong>JADWAL</strong><strong>&nbsp;PENGGUNAAN PRASARANA&nbsp;</strong><strong>DAN</strong><strong>&nbsp;</strong><strong>SARANA&nbsp;</strong></p>

<p>Jadwal penggunaan prasarana dan sarana kegiatan, disajikan pada Lampiran 5.</p>

<p><strong>RENCANA</strong><strong>&nbsp;DAN METOD</strong><strong>E</strong><strong>&nbsp;VERI</strong><strong>FIKASI, VALIDASI, MONITORING, EVALUASI, INSPEKSI DAN PENGUJIAN DAN KRITERIA PENERIMAANNYA</strong></p>

<p>Rencana dan metode verifikasi, validasi, monitoring, evaluasi, inspeksi dan pengujian dan kriteria penerimaan kegiatan, dapat dilihat pada Lampiran 6.</p>
												</textarea>
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