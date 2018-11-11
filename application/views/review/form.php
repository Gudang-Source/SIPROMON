				<div class="breadcrumbs">
						<div class="col-sm-4">
								<div class="page-header float-left">
										<div class="page-title">
												<h1>Evaluasi RMP <br><?=$row['judul']; ?></h1>
										</div>
								</div>
						</div>
						<div class="col-sm-8">
								<div class="page-header float-right">
										<div class="page-title">
												<ol class="breadcrumb text-right">
														<li><a href="#">Evaluator</a></li>
														<li class="active">Review</li>
												</ol>
										</div>
								</div>
						</div>
				</div>

				<div class="content mt-3" style="background-color: white;">
						<div class="animated fadeIn">
								<div class="row">
									<div class="col-md-10 offset-md-1">
									<table class="table table-bordered"  style="background-color: white;">
										<tbody>
											<tr>
												<td rowspan="2" align="center"><img src="<?=base_url()?>assets/images/rmp/logoreview.png" width="70%"></td>
												<td style="font-weight: bold; font-size:20px;" align="center">KEMENTERIAN  PEKERJAAN UMUM DAN PERUMAHAN RAKYAT, <br>
														BADAN PENELITIAN DAN PENGEMBANGAN,<br>
														PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR<br>
														Jl. Ir. H. Juanda No. 193 Bandung 40135, Telp : (022) 2501083, 2504053, 2501554, 2500507 <br>
														Fax : (022) 2500163, Email : smm.pusair@gmail.com<br>
												</td>
											</tr>
											<tr>
												<td style="font-weight: bold; font-size:20px;" align="center">FORMULIR <br>
												MATRIK HASIL <i style="color:red; font-style: normal;">EVALUASI</i> DAN KLARIFIKASI LAPORAN AWAL, INTERIM, <i style="color:red; font-style: normal;">KONSEP LAPORAN AKHIR</i> DAN LAPORAN AKHIR 
												</td>
											</tr>
										</tbody>
									</table>
									<div style="text-align: center;">
										<h4>Kegiatan Tahun <?=$row['tahun_anggaran'] ?></h4>
									</div>									
									<table class="table table-sm">
										<tbody>
											<tr>
												<td>Judul Kegiatan</td>
												<td>:</td>
												<td><?=$row['judul']; ?></td>
											</tr>
											<tr>
												<td>Kelompok Output</td>
												<td>:</td>
												<td><?=$row['jenis']; ?></td>
											</tr>
											<tr>
												<td>Bagian/Bidang/Balai</td>
												<td>:</td>
												<td><?=$row['satuankerja']; ?></td>
											</tr>
										</tbody>
									</table>	
									<br>
									<table class="table table-sm table-bordered">
										<col width="10px;">
										<thead style="background-color: skyblue;">
											<tr>
												<th rowspan="2" colspan="2" style="text-align: center; vertical-align: middle;">BAB SUB BAB</th>
												<th rowspan="2" style="text-align: center; vertical-align: middle;">KOMENTAR TIM EVALUATOR</th>
												<th rowspan="2" style="text-align: center; vertical-align: middle;">SIFAT <br> (W/S)</th>
												<th rowspan="2" style="text-align: center; vertical-align: middle;">KETERANGAN</th>
												<th colspan="2" style="text-align: center; vertical-align: middle;">KESESUAIAN <br>KLARIFIKASI</th>
												<th rowspan="2" style="text-align: center; vertical-align: middle;">CATATAN <br>KLARIFIKASI</th>
											</tr>
											<tr>
												<th style="text-align: center; vertical-align: middle;">SESUAI</th>
												<th style="text-align: center; vertical-align: middle;">TIDAK SESUAI</th>
											</tr>
										</thead>
										<tbody>	
											<tr style="font-size:10px; background-color: #7ad27a; text-align: 	center;">
												<td colspan="2">(1)</td>
												<td>(2)</td>
												<td>(3)</td>
												<td>(4)</td>
												<td>(5)</td>
												<td>(6)</td>
												<td>(7)</td>
											</tr>	
											<tr>
												<td colspan="2" style="font-weight:bold;">Halaman Judul <a href="#" title="Evaluate" class="pull-right" data-toggle="modal" data-target="#formReview" data-bab="1"><i class="fa fa-fw fa-pencil"></i></a></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td> 
												<td></td>
											</tr>	
											<tr>
												<td colspan="2" style="font-weight:bold;" >Halaman Distribusi</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>												
											<tr>
												<td colspan="2" style="font-weight:bold;">Sejarah Dokumen</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>	
											<tr>
												<td colspan="2" style="font-weight:bold;">Daftar Isi</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>	
											<tr>
												<td colspan="2" style="font-weight:bold;">BAB 1 PENDAHULUAN</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>	
											<tr>
												<td>1.1</td>
												<td>Latar belakang</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>	
											<tr>
												<td>1.2</td>
												<td>Identifikasi Masalah</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>	
											<tr>
												<td>1.3</td>
												<td>Tujuan Kegiatan</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td>1.4</td>
												<td>Sasaran Keluaran (Output)</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>											
											<tr>
												<td>1.5</td>
												<td>Sasaran Mutu</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>											
											<tr>
												<td>1.6</td>
												<td>Penerima Manfaat</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>																																	
											<tr>
												<td>1.7</td>
												<td>Lokasi Kegiatan</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td colspan="2" style="font-weight:bold;">BAB 2 KAJIAN LITERATUR</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>	
											<tr>
												<td>2.1</td>
												<td>Tinjauan Pustaka</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>	
											<tr>
												<td>2.2</td>
												<td>Acuan Teknis</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>	
											<tr>
												<td>2.3</td>
												<td>Acuan Administrasi</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td colspan="2" style="font-weight:bold;">BAB 3 RENCANA KEGIATAN</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>	
											<tr>
												<td>3.1</td>
												<td>Lingkup Kegiatan</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>	
											<tr>
												<td>3.2</td>
												<td>Formulasi Kegiatan</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>	
											<tr>
												<td>3.3</td>
												<td>Kerangka Pemikiran</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td>3.4</td>
												<td>Bagan Alir Pelaksanaan Kegiatan</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>											
											<tr>
												<td>3.5</td>
												<td>Dokumentasi Sistem Manajemen Mutu</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>											
											<tr>
												<td colspan="2" style="font-weight:bold;">BAB 4 KEBUTUHAN SUMBER DAYA</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>	
											<tr>
												<td>4.1</td>
												<td>Struktur Organisasi</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>	
											<tr>
												<td>4.2</td>
												<td>Sumber Daya Manusia</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>	
											<tr>
												<td>4.3</td>
												<td>Sumber Daya Keuangan</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td>4.4</td>
												<td>Lingkungan</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>											
											<tr>
												<td colspan="2" style="font-weight:bold;">DAFTAR PUSTAKA</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>											
											<tr>
												<td colspan="2" style="font-weight:bold;">LAMPIRAN 1</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>																																	
											<tr>
												<td colspan="2" style="font-weight:bold;">LAMPIRAN 2</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>											
											<tr>
												<td colspan="2" style="font-weight:bold;">LAMPIRAN 3</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>																						
										</tbody>
									</table>
									<table class="table table-bordered table-sm">
										<col width="70%">
										<col width="30%">
										<tbody>
											<tr>
												<td><b>KESIMPULAN TIM EVALUATOR</b></td>
												<td><b>TIM EVALUATOR PUSAT</b></td>
											</tr>
											<tr height="60px;">
												<td></td>
												<td></td>
											</tr>											
										</tbody>
									</table>
								</div>
							</div>
						</div><!-- .animated -->
				</div><!-- .content -->
		</div><!-- /#right-panel -->
		<!-- Right Panel -->
		<div class="modal fade" id="formReview" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
								<div class="modal-header">
										<h5 class="modal-title" id="largeModalLabel">Tambah Evaluasi Sub Bab RMP</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
										</button>
								</div>
								<div class="modal-body">
								<?php echo form_open('Review/addReviewDetail/'.$this->uri->segment(3)); ?>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class=" form-control-label">Komentar</label>
												<div class="input-group">
														<textarea name="komentar" class="form-control" rows="5"></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Sifat (W/S)</label>
												<div class="input-group">
													<div class="form-check">
                            <div class="radio">
                              <label for="radio1" class="form-check-label ">
                                <input type="radio" name="sifat" value="1" class="form-check-input">Wajib Diperbaiki / Revisi
                              </label>
                            </div>
                            <div class="radio">
                              <label for="radio2" class="form-check-label ">
                                <input type="radio" name="sifat" value="2" class="form-check-input">Saran / Masukkan
                              </label>
                            </div>
                          </div>												
                        </div>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Keterangan</label>
												<div class="input-group">
														<input type="text" name="keterangan" class="form-control" placeholder="">
												</div>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Kesesuaian Klarifikasi</label>
												<div class="input-group">
													<div class="form-check">
                            <div class="radio">
                              <label for="radio1" class="form-check-label ">
                                <input type="radio" name="kesesuaian" value="1" class="form-check-input">Sesuai
                              </label>
                            </div>
                            <div class="radio">
                              <label for="radio2" class="form-check-label ">
                                <input type="radio" name="kesesuaian" value="2" class="form-check-input">Tidak Sesuai
                              </label>
                            </div>
                          </div>												
												</div>
											</div>																						
											<div class="form-group">
												<label class=" form-control-label">Catatan Klarifikasi</label>
												<div class="input-group">
														<input type="text" name="catatan" class="form-control" placeholder="">
												</div>
											</div>											
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<input type="hidden" name="bab" value="">
									<input type="hidden" name="id" value="">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-primary">
											<i class="fa fa-fw fa-dot-circle-o"></i> Submit
								</div>
								<?php echo form_close(); ?>
						</div>
				</div>
		</div>						