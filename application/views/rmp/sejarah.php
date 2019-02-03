				<div class="breadcrumbs">
						<div class="col-sm-6">
								<div class="page-header ">
										<div class="page-title">
												<h1>Sejarah Dokumen</h1>
										</div>
								</div>
						</div>
						<div class="col-sm-6">
								<div class="page-header float-right">
										<div class="page-title">
												<ol class="breadcrumb text-right">
														<li><a href="#">RMP</a></li>
														<li class="active">Sejarah Dokumen</li>
												</ol>
										</div>
								</div>
						</div>
				</div>

				<div class="content mt-3" >
						<div class="animated fadeIn">
								<div class="row">
									<div class="col-md-12">
										<div>
											<center><h2><?=$row['judul'] ?></h2>Halaman Judul</center>
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
											<div class="pull-right" style="margin-bottom: 15px;">
												<a href="<?=base_url(); ?>RMP/satu/<?=$this->uri->segment(3)?>"  class="btn btn-labeled btn-success">
														 Bab 1 <span class="btn-label btn-label-right"><i class="fa fa-fw fa-arrow-right"></i></span>
												</a>
											</div>
										</div>
									</div>
								</div>
								<?php echo form_open('RMP/processJudul/'.$this->uri->segment(3)); ?>
								<div class="row" style="background-color: white;">
									<div class="col-md-8 offset-md-2">
											<h5 style="font-weight: bold;" align="center">SEJARAH DOKUMEN</h5>
											<table class="table table-bordered" width="100%" >

												<thead>
													<tr>
														<td>TANGGAL</td>
														<td colspan=3>CATATAN PERUBAHAN</td>
														<td>KETERANGAN</td>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><?=Date('d M Y') ?></td>
														<td colspan=3>Rencana Mutu Pelaksanaan <?=$row['judul']; ?> ini diterbitkan perdana</td>
														<td>Pelaksanaan untuk Tahun Anggaran 2019</td>
													</tr>
													<tr height="100px">
														<td>&nbsp;</td>
														<td colspan=3> </td>
														<td>&nbsp;</td>
													</tr>

													<tr>
														<td>Tanggal</td>
														<td>Semula</td>
														<td>Menjadi</td>
														<td>Paraf</td>
														<td>Keterangan</td>
													</tr>
													<tr height="300px">
														<td>&nbsp;</td>
														<td>&nbsp;</td>
														<td>&nbsp;</td>
														<td>&nbsp;</td>
														<td>&nbsp;</td>
													</tr>
												</tbody>
											</table>
												<b>Keterangan :</b>
												<ol type="a" style="padding-left:15px;">
													<li>Catatan revisi dapat ditulis tangan dengan disertai paraf Kepala Balai/Bidang/ Bagian;</li>
													<li>Lembar revisi disisipkan di belakang halaman yang direvisi.</li>
													<li>Jika perubahan mengakibatkan penambahan halaman, penomoran halaman tambahan disisipkan menggunakan notasi abjad (contoh :5a,5b,dst).</li>
													<li>Perubahan (revisi) RMP yang sudah disetujui akan dibubuhkan cap oleh Sub Bidang Program.</li>
												</ol>
											<button type="submit" class="btn btn-success form-control">
													<span class=""><i class="fa fa-fw fa-save"></i></span> Simpan Draf
											</button>
										</div>
								</div>
								<?=form_close(); ?>
						</div><!-- .animated -->
				</div><!-- .content -->


		</div><!-- /#right-panel -->

		<!-- Right Panel -->