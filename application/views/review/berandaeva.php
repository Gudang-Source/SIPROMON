		<div class="breadcrumbs">
			<div class="col-sm-4">
				<div class="page-header float-left">
					<div class="page-title">
						<h1>Halaman Utama Evaluator</h1>
					</div>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="page-header float-right">
					<div class="page-title">
						<ol class="breadcrumb text-right">
							<li class="active">Halaman Utama</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<div class="content mt-3">
			<div class="row">
					<div class="col-sm-12 mb-4">
							<div class="card-group">
									<div class="card col-lg-2 col-md-4 no-padding bg-flat-color-1">
											<div class="card-body">
													<div class="h1 text-muted text-right mb-4">
															<i class="fa fa-pencil text-light"></i>
													</div>

													<div class="h4 mb-0 text-light">
															<span class="count"><?=count($kegiatans); ?></span>
													</div>
													<small class="text-uppercase font-weight-bold text-light">Belum di Evaluasi</small>
													<div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
											</div>
									</div>
								</div>

					</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?php foreach($kegiatans as $kegiatan){ ?>
					<div class="card">
						<div class="card-header text-center bg-green">
						  <a href="<?=base_url(); ?>Eselon/statusRMP/<?=$kegiatan['id']; ?>"><strong class="card-title"><?=$kegiatan['judul'] ?></strong></a><small><span class="badge badge-warning float-right mt-1">Edited</span></small>
						</div>
						<div class="card-body">
						  <table class="table table-sm">
						  	<tr>
						  		<td>Konseptor</td>
						  		<td>:</td>
						  		<td><?=$kegiatan['konseptor']; ?></td>
						  	</tr>
						  	<tr>
						  		<td>Satuan Kerja</td>
						  		<td>:</td>
						  		<td><?=$kegiatan['satuankerja']; ?></td>
						  	</tr>
						  	<tr>
						  		<td>Output</td>
						  		<td>:</td>
						  		<td><?=$kegiatan['output']; ?></td>
						  	</tr>
						  	<tr>
						  		<td>Pagu</td>
						  		<td>:</td>
						  		<td>Rp. <?=number_format($kegiatan['pagu'],0,',','.'); ?></td>
						  	</tr>						  	
						  </table>	
							<div class="btn-group">
							  <button type="button" class="btn btn-primary btn-labeled dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    <span class="btn-label"><i class="fa fa-fw fa-download"></i></span> Unduh Dokumen
							  </button>
							  <div class="dropdown-menu">
									<a target="_blank" href="<?=base_url();?>Report/printRMP/<?=$kegiatan['rmpId']; ?>" class="dropdown-item">
										<i class="fa fa-fw fa-file-pdf-o"></i>Rencana Mutu Pelaksanaan
									</a>
									<a target="_blank" href="<?=base_url();?>Report/printAtt1/<?=$kegiatan['rmpId']; ?>" class="dropdown-item">
										<i class="fa fa-fw fa-file-pdf-o"></i>Rancangan Anggaran Biaya
									</a>
									<a target="_blank" href="<?=base_url();?>Report/printAtt2/<?=$kegiatan['rmpId']; ?>" class="dropdown-item">
										<i class="fa fa-fw fa-file-pdf-o"></i>Rancangan Kerja
									</a>
									<a target="_blank" href="<?=base_url();?>Report/lampiran3/<?=$kegiatan['rmpId']; ?>" class="dropdown-item">
										<i class="fa fa-fw fa-file-pdf-o"></i>Rencana Fisik dan Keuangan (Lampiran 3)
									</a>																																

							  </div>
							</div>
							<a href="<?=base_url();?>Review/form/<?=$kegiatan['rmpId']; ?>	" class="btn btn-labeled btn-warning btn-sm" >
									<span class="btn-label"><i class="fa fa-fw fa-check-square-o"></i></span> Review
							</a>							  							
						</div>
					</div>
					<?php } ?>
			</div>
		</div> <!-- .content -->
	</div><!-- /#right-panel -->

	<!-- Right Panel -->
