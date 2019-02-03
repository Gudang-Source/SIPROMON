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
											<tr>
												<td class="left">Status</td>
												<td>
													<div class="muted">Penyusunan RMP <br> <!-- <i style="color:orange;">(Testing Phase)</i> -->

														<a href="<?=base_url();?>RMP/judul/<?=$row['id']; ?>" class="btn btn-labeled btn-danger btn-sm" >
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
																	<i class="fa fa-fw fa-file-pdf-o"></i>Rancangan Kerja Kegiatan
																</a>
																<a href="#" class="dropdown-item text-danger">
																	<i class="fa fa-fw fa-file-pdf-o"></i>Rencana Pelaksanaan Fisik dan Keuangan
																</a>																																
														  </div>
														</div>

														<?php } ?>
													</div>
													<br/>
													<!-- <div class="progress mb-2">
															<div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">0%</div>
													</div> -->
													<div class="muted">Monitoring dan Evaluasi <br><!-- <i style="color:red;">(Under Development)</i> -->
														<a href="<?=base_url();?>Monev/grafik/<?=$row['id']; ?>" class="btn btn-labeled btn-success btn-sm" >
																<span class="btn-label"><i class="fa fa-fw fa-line-chart"></i></span> Grafik Realisasi Keuangan
														</a>														
														<a href="<?=base_url();?>Monev/tabel_progres/<?=$row['id']; ?>" class="btn btn-labeled btn-info btn-sm" >
																<span class="btn-label"><i class="fa fa-fw fa-table"></i></span> Tabel Kemajuan Kegiatan
														</a>

														<a href="<?=base_url();?>Monev/view_progres/<?=$row['id']; ?>" class="btn btn-labeled btn-info btn-sm" >
																<span class="btn-label"><i class="fa fa-fw fa-table"></i></span> Tabel Kemajuan Kegiatan (View)
														</a>																								
													</div>
													<br/>
													<!-- <div class="progress mb-2">
															<div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
													</div> -->
													<!-- <div class="muted">Laporan <i style="color:red;">(Under Development)</i></div> -->
													<!-- <div class="progress mb-2">
															<div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">	</div>
													</div> -->
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