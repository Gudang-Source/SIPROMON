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
												<a href="<?=base_url(); ?>RMP/rekap/<?=$this->uri->segment(3)?>"  class="btn btn-labeled btn-success">
														 Rekap <span class="btn-label btn-label-right"><i class="fa fa-fw fa-arrow-right"></i></span>
												</a>
											</div>
										</div>
									</div>
								</div>
								<?php echo form_open('RMP/satu/'.$this->uri->segment(3)); ?>
								<div class="row" style="background-color: white;">
									<div class="col-md-8 offset-md-2">
										<table class="table table-bordered"  style="background-color: white;">
											<tbody>
												<tr>
													<td colspan="3"><img src="<?=base_url()?>assets/images/rmp/cover.jpg" alt=""></td>
												</tr>
											</tbody>
										</table>
										<style>
											h3{
												font-size:16pt;
											}
											h4{
												font-size: 14pt;
											}
											h5{
												font-size:14pt;
											}
										</style>
										<div style="text-align: center;">
											<h3 style="font-weight: bold;">RENCANA MUTU PELAKSANAAN</h3>
											<h3 style="font-weight: bold;"><?=strtoupper($row['judul']);  ?></h3>
											<!-- <h3>....</h3> -->
											<h4 style="font-weight: bold;">TAHUN ANGGARAN <?=$row['tahun_anggaran'] ?></h4>
											<h4 style="font-weight: bold;">SATUAN KERJA <?=strtoupper($row['satuankerja']); ?></h4>
											<h5 style="font-size:11pt;" >No.Dok. : <?=$row['nodokumen'] ?>;  <?=Date('d M Y'); ?> Rev. 00</h5><br>
											<h5 style="font-weight: bold;">PENGESAHAN</h5><br><br>
										</div>
										<table class="table table-bordered table-striped"  style="background-color: white;">
											<tbody>
											<tr>
												<td></td>
												<td class="text-center"><b>Nama dan Jabatan</b></td>
												<td class="text-center"><b>Tanda Tangan</b></td>
											</tr>
											<tr>
												<td><b>Konseptor</b></td>
												<td><?=$row['konseptor']; ?><br>Ketua Tim Kegiatan</td>
												<td class="text-center">
												</td>
											</tr>										
											<tr>
												<td><b>Diperiksa Oleh</b></td>
												<td><?=$row['pemeriksa']; ?><br>Kepala <?=$row['satuankerja'] ?></td>
												<td class="text-center" >

												</td>
											</tr>										
											<tr>
												<td><b>Disahkan Oleh</b></td>
												<td><?=$row['pengesah']; ?><br>Kepala Pusat Litbang SDA</td>
												<td class="text-center" >
												</td>
											</tr>
											</tbody>
										</table>
										<table class="table table-bordered table-sm">
											<col width="33%">
											<tbody>
											<tr height="50px">
												<td style="font-weight: bold;">Status Dokumen</td>
												<td> </td>
												<td> </td>
											</tr>
											<tr height="50px">
												<td style="font-weight: bold;">Tanggal Distribusi</td>
												<td> </td>
												<td> </td>
											</tr>											
											</tbody>
										</table>									
										<h5 class="pull-left" style="font-weight: bold;">Distribusi Ke</h5>
										<table class="table table-bordered table-sm">
											<col width="5%">											
											<col width="45%">											
											<col width="5%">											
											<col width="45%">											
											<tbody>
											<tr>
												<td align="center">No. Urut</td>
												<td align="center">Nama Jabatan</td>
												<td align="center">No. Urut</td>
												<td align="center">Nama Jabatan</td>
											</tr>
											<tr>
												<td align="center">1</td>
												<td>Kepala Pusat Litbang SDA</td>
												<td align="center">7</td>
												<td></td>
											</tr>
											<tr>
												<td align="center">2</td>
												<td>Kepala Bidang Program dan Evaluasi</td>
												<td align="center">8</td>
												<td></td>
											</tr>
											<tr>
												<td align="center">3</td>
												<td>Kepala <?=$row['satuankerja'] ?></td>
												<td align="center">9</td>
												<td></td>
											</tr>											
											<tr>
												<td align="center">4</td>
												<td>PPK <?=$row['satuankerja'] ?></td>
												<td align="center">10</td>
												<td></td>
											</tr>
											<tr>
												<td align="center">5</td>
												<td>Deputi Pengendali Dokumen</td>
												<td align="center">11</td>
												<td></td>
											</tr>
											<tr>
												<td align="center">6</td>
												<td>Sekretariat SMM (Dokumen Asli)</td>
												<td align="center">12</td>
												<td></td>
											</tr>											
											</tbody>
										</table>			
										<br>
										<br>
									</div>
								</div>
						</div><!-- .animated -->
				</div><!-- .content -->


		</div><!-- /#right-panel -->

		<!-- Right Panel -->