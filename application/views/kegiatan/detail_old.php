				<div class="breadcrumbs">
						<div class="col-sm-4">
								<div class="page-header float-left">
										<div class="page-title">
												<h1>Kegiatan #<?=$row['id']; ?></h1>
										</div>
								</div>
						</div>
						<div class="col-sm-8">
								<div class="page-header float-right">
										<div class="page-title">
												<ol class="breadcrumb text-right">
														<li><a href="#">Kegiatan</a></li>
														<li class="active">Detail Kegiatan</li>
												</ol>
										</div>
								</div>
						</div>
				</div>

				<div class="content mt-3">
						<div class="animated fadeIn">
								<div class="row">
								<div class="col-md-12">

									<table class="table table-bordered table-striped"  style="background-color: white;">
										<tbody>
											<tr>
												<td class="left" class="left">ID Kegiatan</td>
												<td><?=$row['id']; ?></td>
											</tr>
											<tr>
												<td class="left">Judul Kegiatan</td>
												<td><?=$row['judul']; ?></td>
											</tr>
											<tr>
												<td class="left">Tahun Anggaran</td>
												<td><?=$row['tahun_anggaran']; ?></td>
											</tr>
<!-- 											<tr>
	<td class="left">Satuan Kerja</td>
	<td><?=$row['satker']; ?></td>
</tr> -->
											<tr>
												<td class="left">Konseptor</td>
												<td><?=$row['konseptor']; ?></td>
											</tr>
											<tr>
												<td class="left">Pemeriksa</td>
												<td><?=$row['pemeriksa']; ?></td>
											</tr>
											<tr>
												<td class="left">Pengesah</td>
												<td><?=$kapus['name']; ?></td>
											</tr>
											<tr class="<?php if($row['rmp_stats'] == 1) echo "table-success"; else echo "table-danger"; ?>">
												<td class="left">Penyusunan RMP</td>
												<td>
													<div class="muted">Penyusunan RMP <br> <!-- <i style="color:orange;">(Testing Phase)</i> -->
														<a href="<?=base_url();?>RMP/satu/<?=$row['id']; ?>" class="btn btn-labeled btn-danger btn-sm" >
																<span class="btn-label"><i class="fa fa-fw fa-pencil-square-o"></i></span> Edit RMP
														</a>
														<?php if($row['rmp_stats'] != 0){ ?>
														<a href="<?=base_url();?>RMP/status/<?=$row['id']; ?>" class="btn btn-labeled btn-info btn-sm" >
																<span class="btn-label"><i class="fa fa-fw fa-eye"></i></span> Lihat Status
														</a>
														<div class="btn-group">
														  <button type="button" class="btn btn-primary btn-labeled dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														    <span class="btn-label"><i class="fa fa-fw fa-download"></i></span> Unduh Dokumen
														  </button>
														  <div class="dropdown-menu">
																<a target="_blank" href="<?=base_url();?>Report/printRMP/<?=$row['id']; ?>" class="dropdown-item">
																	<i class="fa fa-fw fa-file-pdf-o"></i>Rencana Mutu Pelaksanaan
																</a>
																<a target="_blank" href="<?=base_url();?>Report/printAtt1/<?=$row['id']; ?>" class="dropdown-item">
																	<i class="fa fa-fw fa-file-pdf-o"></i>Rancangan Anggaran Biaya
																</a>
																<a target="_blank" href="<?=base_url();?>Report/printAtt2/<?=$row['id']; ?>" class="dropdown-item">
																	<i class="fa fa-fw fa-file-pdf-o"></i>Rancangan Kerja
																</a>
																<a href="#" class="dropdown-item text-danger">
																	<i class="fa fa-fw fa-file-pdf-o"></i>Rencana Fisik dan Keuangan
																</a>																																
																<a target="_blank" href="<?php if($row['att4'] != NULL){ echo base_url().'assets/attachment/'.$row['att4']; }else{ echo "#"; }?>" class="dropdown-item">
																	<i class="fa fa-fw fa-file-pdf-o"></i>Jadwal Personil
																</a>																																
																<a target="_blank" href="<?php if($row['att5'] != NULL) echo base_url().'assets/attachment/'.$row['att5']; else echo "#"; ?>" class="dropdown-item">
																	<i class="fa fa-fw fa-file-pdf-o"></i>Jadwal Prasarana dan Sarana
																</a>																																																																
														  </div>
														</div>

														<?php } ?>
													</div>
												</td>
											</tr>
											<tr class="">
												<td class="left"><a href="#" title="">Monitoring Pelaksanaan Kegiatan</a></td>
												<td>
														<a href="<?=base_url();?>Monev/realisasiAkun/<?=$row['id']; ?>" class="btn btn-labeled btn-info btn-sm" >
																<span class="btn-label"><i class="fa fa-angle-double-right fa-fw"></i></span> Realisasi Per Akun
														</a>&nbsp;&nbsp;&nbsp;
														<a href="<?=base_url();?>RMP/satu/<?=$row['id']; ?>" class="btn btn-labeled btn-primary btn-sm" >
																<span class="btn-label"><i class="fa fa-plus fa-fw"></i></span> Progress Realisasi
														</a>														
														<br>
													<table class="table table-sm">

														<thead>
															<tr align="center" style="background-color: #99ccff;">
																<th>Pagu</th>
																<th>Target Keuangan</th>
																<th>Realisasi Keuangan</th>
																<th>Target Fisik</th>
																<th>Realisasi Fisik</th>
															</tr>
														</thead>
														<tbody>
															<tr align="center">
																<td align="right"><?=number_format($row['pagu'],0,',','.'); ?></td>
																<td>100%</td>
																<td class="text-danger">0%</td>
																<td>100%</td>
																<td class="text-danger">0%</td>
															</tr>
														</tbody>
													</table>
												</td>
											</tr>	
										</tbody>
									</table>
									<br>
									<br>
									<br><br>
									<br>
								</div>
								</div>
						</div><!-- .animated -->
				</div><!-- .content -->


		</div><!-- /#right-panel -->

		<!-- Right Panel -->