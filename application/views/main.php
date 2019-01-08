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
			<div class="col-lg-4 col-md-6">
          <div class="card">
              <div class="card-body">
                  <div class="stat-widget-one">
                      <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                      <div class="stat-content dib">
                          <div class="stat-text">Kegiatan</div>
                          <div class="stat-digit"><?=$numkegiatan; ?></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
			<div class="col-lg-4 col-md-6">
          <div class="card">
              <div class="card-body">
                  <div class="stat-widget-one">
                      <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                      <div class="stat-content dib">
                          <div class="stat-text">Nama Ketua</div>
                          <div class="stat-digit"><?=$_SESSION['fullname']; ?></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
			<div class="col-lg-4 col-md-6">
          <div class="card">
              <div class="card-body">
                  <div class="stat-widget-one">
                      <div class="stat-icon dib"><i class="ti-home text-info border-info"></i></div>
                      <div class="stat-content dib">
                          <div class="stat-text">Satuan Kerja</div>
                          <div class="stat-digit" style="font-size: 18px;"><?=$user['name']; ?></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header text-center bg-success">
							<b>Kegiatan Berlangsung</b>
						</div>
						<div class="card-body">
							<?php foreach($kegiatans as $kegiatan){ ?>
							<h5 class="card-title"><?=$kegiatan['judul']; ?></h5>
							<!-- <p><?=print_r($kegiatan); ?></p> -->
							<p class="text-muted">Jenis : <?=$kegiatan['jenis']; ?><br>
							Pagu  : Rp. <?=number_format($kegiatan['pagu'],0,',','.'); ?><br>
							Status Kegiatan : <?php if($kegiatan['rmp_stats'] == 0) echo "Pembuatan RMP"; else echo "Draf RMP Selesai"; ?></p>
							<a href="<?=base_url(); ?>Kegiatan/show/<?=$kegiatan['id']; ?>" class="btn btn-outline-primary"><i class="fa fa-info-circle"></i> Detail</a>
							<hr>
							<?php } ?>
						</div>
					</div>
			</div>
		</div> <!-- .content -->
	</div><!-- /#right-panel -->

	<!-- Right Panel -->
