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
											<tr class="<?php if($row['rmp_stats'] >= 1) echo "table-success"; else echo "table-danger"; ?>">
												<td class="left">Penyusunan RMP</td>
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
																<a target="_blank" href="<?=base_url();?>assets/attachment/<?=$row['rabdocument']; ?>" class="dropdown-item">
																	<i class="fa fa-fw fa-file-pdf-o"></i>Rancangan Anggaran Biaya
																</a>
																<a target="_blank" href="<?=base_url();?>Report/printAtt2/<?=$row['id']; ?>" class="dropdown-item">
																	<i class="fa fa-fw fa-file-pdf-o"></i>Rancangan Kerja
																</a>
																<a target="_blank" href="<?=base_url();?>Report/lampiran3/<?=$row['id']; ?>" class="dropdown-item">
																	<i class="fa fa-fw fa-file-pdf-o"></i>Rencana Fisik dan Keuangan (Lampiran 3)
																</a>																																

														  </div>
														</div>

														<?php } ?>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								
									<a href="<?=base_url();?>Monev/tabel_progres/<?=$row['id']; ?>" class="btn btn-labeled btn-primary btn-sm" >
											<span class="btn-label"><i class="fa fa-plus fa-fw"></i></span> Progress Realisasi
									</a>														
									<br>
								<table class="table table-sm table-bordered" style="background-color: white" >
									<thead>
										<tr align="center" style="background-color: #99ccff;">
											<th>No</th>
											<th>Kegiatan</th>
											<th>Pagu</th>
											<th>Target Keuangan s.d. Akhir Bulan ini</th>
											<th>Realisasi Keuangan</th>
											<th>Target Fisik s.d. Akhir Bulan ini</th>
											<th>Realisasi Fisik</th>
										</tr>
									</thead>
									<tbody>
										<tr align="center">
											<td>1</td>
											<td><a href="<?=base_url();?>Monev/view_progres/<?=$row['id']; ?>"><?=$row['judul']; ?></a></td>
											<td align="right"><?=number_format($row['pagu'],0,',','.'); ?></td>
											<td><?=round($row['t_keuangan'],3); ?>%</td>
											<td class="text-danger"><?=round($moneysMonthsKumulatifP[11],3); ?>%</td>
											<td><?=round($row['t_fisik'],3); ?>%</td>
											<td class="text-danger"><?=round($row['r_fisik'],3); ?>%</td>
										</tr>
									</tbody>
								</table>
									<br>
								<div id="chartProgres">
								</div>
									<br>
									<br><br>
									<br>
								</div>
								</div>
						</div><!-- .animated -->


				</div><!-- .content -->


		</div><!-- /#right-panel -->

		<!-- Right Panel -->


<script src="<?=base_url();?>assets/js/highcharts/highcharts.js"></script>  
<style type="text/css">
	#chartProgres {
	  height: 400px;
	  margin: 0 auto
	}
</style>

<script type="text/javascript">

  t_keuangan = [];
  t_fisik = [];

  t_keuangan_api = [];
  t_fisik_api = [];

  r_keuangan = [];
  r_fisik = [];

  r_k_api = [];
  r_f_api = [];

  id_array = [];

  <?php
  	$array = [];

  	for($i = (-1); $i < 12; $i++){
  		if($i == -1){
  			?>
		t_keuangan.push(<?= 0?>);
  		r_keuangan.push(<?= 0?>);
  		t_fisik.push(<?= 0?>);
  		r_fisik.push(<?= 0?>);
  		r_k_api.push(<?= 0?>);
  		r_f_api.push(<?= 0?>);	
  			<?php
  		}else{
  			?>
  			t_keuangan_api.push(<?= round($moneysMonthsKumulatifPEmon['b'.($i+1)],2);?>);
  			t_fisik_api.push(<?= round($fisikMonthsKumulatifEmon['b'.($i+1)],2);?>);
  			
  			r_k_api.push(<?= 0?>);
	  		r_f_api.push(<?= 0?>);	
  			
	  		t_keuangan.push(<?= round($moneysMonthsKumulatifPR[$i],2);?>);
	  		r_keuangan.push(<?= round($moneysMonthsKumulatifP[$i],2);?>);
	  		t_fisik.push(<?= round($fisikMonthsKumulatifR[$i],2);?>);
	  		r_fisik.push(<?= round($fisikMonthsKumulatif[$i],2);?>);
	  		<?php
  		}
  	}
  ?>

  // alert(t_keuangan);

	Highcharts.chart('chartProgres', {

  title: {
    text: 'Grafik Fisik dan Keuangan'
  },

  xAxis: {
    categories: ['','Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
  },

  yAxis: {
    title: {
      text: 'Persentase'
    }
  },
  legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
  },


  series: [{
    name: 'Target Keuangan',
    data: t_keuangan
  }, {
    name: 'Target Fisik',
    data: t_fisik
  }, {
    name: 'Realisasi Keuangan',
    data: r_keuangan
  }, {
    name: 'Realisasi Fisik',
    data: r_fisik
  }, {
    name: 'Target Keuangan (E-mon)',
    data: t_keuangan_api
  }, {
    name: 'Target Fisik (E-mon)',
    data: t_fisik_api
  }, {
    name: 'Realisasi Keuangan (E-mon)',
    data: r_k_api
  }, {
    name: 'Realisasi Fisik (E-mon)',
    data: r_f_api
  }],

  responsive: {
    rules: [{
      condition: {
        maxWidth: 500
      },
      chartOptions: {
        legend: {
          layout: 'horizontal',
          align: 'center',
          verticalAlign: 'bottom'
        }
      }
    }]
  }

});
</script>