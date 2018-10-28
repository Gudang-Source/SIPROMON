		<div class="breadcrumbs">
			<div class="col-sm-4">
				<div class="page-header float-left">
					<div class="page-title">
						<h1>Halaman Utama</h1>
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
									<div class="card col-lg-2 col-md-6 no-padding bg-flat-color-1">
											<div class="card-body">
													<div class="h1 text-muted text-right mb-4">
															<i class="fa fa-th-list text-light"></i>
													</div>

													<div class="h4 mb-0 text-light">
															<span class="count"><?php echo $numkegiatan; ?></span>
													</div>
													<small class="text-uppercase font-weight-bold text-light">Kegiatan</small>
													<div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
											</div>
									</div>
									
							</div>

					</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header text-center">
						  Kegiatan Berlangsung
						</div>
						<div class="card-body">
							<?php foreach($kegiatans as $kegiatan){ ?>
						  <h5 class="card-title"><?=$kegiatan['judul']; ?></h5>
						  <p class="text-muted">Status Kegiatan : <?php if($kegiatan['rmp_stats'] == 0) echo "Pembuatan RMP"; else echo "Draf RMP Selesai"; ?></p>
						  <a href="<?=base_url(); ?>Kegiatan/show/<?=$kegiatan['id']; ?>" class="btn btn-outline-primary"><i class="fa fa-info-circle"></i> Detail</a>
						  <hr>
							<?php } ?>
						</div>
						<div class="card-footer text-muted text-center">
						  Last Edited : 2 Hari Lalu
						</div>
					</div>
			</div>
		</div> <!-- .content -->
	</div><!-- /#right-panel -->

	<!-- Right Panel -->
