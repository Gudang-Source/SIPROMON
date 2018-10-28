		<div class="breadcrumbs">
			<div class="col-sm-4">
				<div class="page-header float-left">
					<div class="page-title">
						<h1>Halaman Utama Pejabat</h1>
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
															<i class="fa fa-th-list text-light"></i>
													</div>

													<div class="h4 mb-0 text-light">
															<span class="count"><?php echo $numkegiatan; ?></span>
													</div>
													<small class="text-uppercase font-weight-bold text-light">Total Kegiatan</small>
													<div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
											</div>
									</div>
									<div class="card col-lg-2 col-md-4 no-padding bg-flat-color-3">
											<div class="card-body">
													<div class="h1 text-muted text-right mb-4">
															<i class="fa fa-exclamation-circle text-light"></i>
													</div>

													<div class="h4 mb-0 text-light">
															<span class="count"><?php echo $numkegiatan; ?></span>
													</div>
													<small class="text-uppercase font-weight-bold text-light">Perlu Disahkan</small>
													<div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
											</div>
									</div>							
									<div class="card col-lg-2 col-md-4 no-padding bg-flat-color-4">
											<div class="card-body">
													<div class="h1 text-muted text-right mb-4">
															<i class="fa fa-money text-light"></i>
													</div>

													<div class="h4 mb-0 text-light">
															<span class="count"><?php echo $totalpagu; ?></span>
													</div>
													<small class="text-uppercase font-weight-bold text-light">Total Pagu</small>
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
						  <a href="<?=base_url(); ?>RMP/status/<?=$kegiatan['id']; ?>"><strong class="card-title"><?=$kegiatan['judul'] ?></strong></a><small><span class="badge badge-warning float-right mt-1">Edited</span></small>
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
						  </table>	
						  <div class="row">
						  	<div class="col-md-3 col-lg-3">
                      <div class="card">
                          <div class="p-0 clearfix">
                              <i class="fa fa-money bg-primary p-4 font-2xl mr-3 float-left text-light"></i>
                              <div class="h5 text-primary mb-0 pt-3">Rp. <?= $kegiatan['pagu']; ?></div>
                              <div class="text-muted text-uppercase font-weight-bold font-xs small">Total Pagu</div>
                          </div>
                      </div>
                 </div>
						  	<div class="col-md-3 col-lg-3">
                      <div class="card">
                          <div class="p-0 clearfix">
                              <i class="fa fa-pie-chart bg-success p-4 font-2xl mr-3 float-left text-light"></i>
                              <div class="h5 text-success mb-0 pt-3">0%</div>
                              <div class="text-muted text-uppercase font-weight-bold font-xs small">Realisasi</div>
                          </div>
                      </div>
                 </div>
						  	<div class="col-md-3 col-lg-3">
                      <div class="card">
                          <div class="p-0 clearfix">
                              <i class="fa fa-cogs bg-warning p-4 font-2xl mr-3 float-left text-light"></i>
                              <div class="h5 text-warning mb-0 pt-3">X Bulan</div>
                              <div class="text-muted text-uppercase font-weight-bold font-xs small">Durasi</div>
                          </div>
                      </div>
                 </div>
						  	<div class="col-md-3 col-lg-3">
                      <div class="card">
                          <div class="p-0 clearfix">
                              <i class="fa fa-cogs bg-danger p-4 font-2xl mr-3 float-left text-light"></i>
                              <div class="h5 text-danger mb-0 pt-3">0%</div>
                              <div class="text-muted text-uppercase font-weight-bold font-xs small">Progress</div>
                          </div>
                      </div>
                 </div>                                                   
						  </div>
						</div>
					</div>
					<?php } ?>
			</div>
		</div> <!-- .content -->
	</div><!-- /#right-panel -->

	<!-- Right Panel -->
