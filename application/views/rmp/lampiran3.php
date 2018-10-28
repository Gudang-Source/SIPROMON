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

				<div class="content mt-3">
						<div class="animated fadeIn">
							<div class="row">
								<div class="col-md-12">
									<div>
										<center><h2>Rencana Pelaksanaan Fisik dan Keuangan</h2><?=$row['judul']; ?><br>Tahun Anggaran <?=$row['tahun_anggaran']; ?></center>
									</div>
									<div>
									<div class="form-group col-md-1">
								      <select id="navigate" class="form-control" style="margin-left:-15px; background-color:#ffd700;">
								        <option selected disabled><b>-Navigasi-</b></option>
								        <option value="satu">Bab I</option>
								        <option value="dua">Bab II</option>
								        <option value="tiga">Bab III</option>
								        <option value="empat">Bab IV</option>
								        <option value="lima">Bab V</option>
								        <option value="enam">Bab VI</option>
								        <option value="tujuh">Bab VII</option>
								        <option value="delapan">Bab VIII</option>
								        <option value="sembilan">Bab IX-XII</option>
								        <option value="tigabelas">Bab XIII</option>
								        <option value="empatbelas">Bab XIV</option>
								        <?php if($row['jenis']=="Teknologi dan Terapan Terpadu" || $row['jenis'] == "Pilot Project"){  ?>
								        <option value="limabelas">Bab XV</option>
								        <?php } ?>
								        <option value="att1">Lampiran 1</option>
								        <option value="att2">Lampiran 2</option>
								        <option value="att3">Lampiran 3</option>
								        <option value="att4">Lampiran 4-5</option>
								        <?php if($row['jenis']=="Teknologi dan Terapan Terpadu"){  ?>
								        <option value="att6">Lampiran 6</option>
								        <?php } ?>									        
								      </select>
								    </div>																																										
										<div style="margin-bottom: 15px;">
											<a href="<?=base_url(); ?>RMP/att2/<?=$this->uri->segment(3)?>" type="button" class="btn btn-labeled btn-danger">
													<span class="btn-label"><i class="fa fa-fw fa-arrow-left"></i></span> Back
											</a>												
											<a href="<?=base_url(); ?>RMP/att4/<?=$this->uri->segment(3)?>" type="button" class="btn btn-labeled btn-success">
													<span class="btn-label"><i class="fa fa-fw fa-arrow-right"></i></span> Lampiran 4 & 5
											</a>												
										</div>

									</div>
								</div>
							</div>
							<div class="table-responsive">
								<table class="table table-sm table-bordered table-hover" style="background-color: white; border-color: white; font-size:13px;">	
									<thead class="text-center font-weight-bold" >	
										<tr class="" style="background-color: #607d8b;border-color: #607d8b;color:#fff; font-weight: 400; " >
											<td colspan="2" rowspan="2" style="vertical-align: middle;">
												Uraian Kegiatan
											</td>
											<td rowspan="2">Jumlah Biaya<br>[Rp.]</td>
											<td rowspan="2">Bobot Keuangan<br>[%]</td>
											<td rowspan="2">Bobot Fisik<br>[%]</td>
											<td colspan="2">Jan</td>
											<td colspan="2">Feb</td>
											<td colspan="2">Mar</td>
											<td colspan="2">Apr</td>
											<td colspan="2">Mei</td>
											<td colspan="2">Jun</td>
											<td colspan="2">Jul</td>
											<td colspan="2">Agt</td>
											<td colspan="2">Sep</td>
											<td colspan="2">Okt</td>
											<td colspan="2">Nov</td>
											<td colspan="2">Des</td>
										</tr>
										<tr class="" style="background-color: #90a4ae;border-color: #90a4ae;color:#fff; font-weight: 400;">
											<?php for($bulan=0;$bulan<12;$bulan++){ ?>
											<td>Keuangan<br>[Rp.]</td>
											<td>Fisik<br>[%]</td>
											<?php } ?>
										</tr>
									</thead>			
									<tbody>
										<tr>
											<td colspan="2"><?=$row['judul']; ?></td>
											<td><?=number_format($row['pagu'],0,',','.'); ?></td>
											<?php for($bulan=0;$bulan<13;$bulan++){ ?>
											<td></td>
											<td></td>
											<?php } ?>
										</tr>
										<tr>
											<td>1.</td>
											<td>PERSIAPAN</td>
											<td><?=number_format($total[0],0,',','.');?></td>
											<td class="text-center"><?=round(($total[0]/$row['pagu'])*100,2); ?></td>
											<td class="text-center"><?=round(($total[0]/$row['pagu'])*100,2); ?></td>
											<?php for($i=0;$i<24;$i++){ ?>
												<td></td>
											<?php } ?>
																				
										</tr>
										<?php if(isset($allAct) != NULL){ $no=1; foreach($allAct as $act){if($act['parent'] == 'A'){$ada=0;$bk=0;$bf=0;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){$ada+=$stage['anggaran'];$bk=+round(($stage['anggaran']/$row['pagu'])*100,2);$bf=$bk;}} ?>
										<tr <?php if($ada!=0)echo 'class="text-muted"' ?>>
											<td>1.<?=$no++; ?></td>
											<td nowrap=""><?php echo $act['kegiatan'];?>
											</td>
											<?php if($ada!=0){ ?>
											<td class=""><?=number_format($ada,0,',','.'); ?></td>
											<td class="text-center"><?=$bk;?></td>
											<td class="text-center"><?=$bf; ?></td>
											<?php }else{ ?>
											<td class=""><?=number_format($act['anggaran'],0,',','.'); ?></td>
											<td class="text-center"><?=round(($act['anggaran']/$row['pagu'])*100,2); ?></td>
											<td class="text-center"><?=round(($act['anggaran']/$row['pagu'])*100,2); ?></td>
											<?php } ?>

											<?php if(($act['waktu'] == ""))$act['waktu']="0-0";$mg=explode("-",$act['waktu']);  $bln=(int)($mg[0]/4); if($mg[0]%4==1)$bln+=1; $end=(int)($mg[1]/4); if($mg[1]%4==1)$end+=1;$stats=0;for($i=1;$i<=12;$i++){ 
												if($i==$bln || $stats == 1){$stats=1;?>
												<td class="text-center">
													<a href="#" class="text-danger" data-toggle="modal" data-target="#tambahrencanakeu" data-money="<?=$act['anggaran']; ?>" data-act="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-fisik="<?=round(($act['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
												<td></td>
											<?php if($i==$end) $stats=0;}else{ ?>
												<td></td>
												<td></td>
											<?php } ?>
											<?php } ?>
																				
										</tr>
											<?php if(isset($allStages) != NULL){ $no3=1;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){ ?>
										<tr>
											<td>1.<?=($no-1).".".$no3++; ?></td>
											<td nowrap=""><?php echo $stage['kegiatan'];?> 
											</td>
											<td class="text-center"><?=round(($stage['anggaran']/$row['pagu'])*100,2); ?></td>
											<td class="text-center"><?=round(($stage['anggaran']/$row['pagu'])*100,2); ?></td>
											<?php if(($stage['waktu'] == ""))$stage['waktu']="0-0";$mg=explode("-",$stage['waktu']); $bln=(int)($mg[0]/4); if($mg[0]%4==1)$bln+=1; $end=(int)($mg[1]/4); if($mg[1]%4==1)$end+=1;$stats=0;for($i=1;$i<=12;$i++){ 
												if($i==$bln || $stats == 1){$stats=1;?>
												<td class="text-center">
													<a href="#" class="text-danger" data-toggle="modal" data-target="#tambahrencanakeustage" data-money="<?=$stage['anggaran']; ?>" data-act="<?=$stage['id']; ?>" data-month="<?=$i; ?>" data-fisik="<?=round(($stage['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
												<td></td>
											<?php if($i==$end) $stats=0;}else{ ?>
												<td></td>
												<td></td>
											<?php } ?>
											<?php } ?>
																				
										</tr>
											<?php }}} ?>
										<?php }}} ?>
										<tr>
											<td>2.</td>
											<td>PELAKSANAAN
											</td>
											<td><?=number_format($total[1],0,',','.');?></td>
											<td class="text-center"><?=round(($total[1]/$row['pagu'])*100,2); ?></td>
											<td class="text-center"><?=round(($total[1]/$row['pagu'])*100,2); ?></td>											
											<?php for($i=0;$i<24;$i++){ ?>
												<td></td>
											<?php } ?>
																				
										</tr>
										<?php if(isset($allAct) != NULL){ $no=1; foreach($allAct as $act){if($act['parent'] == 'B'){$ada=0;$bk=0;$bf=0;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){$ada+=$stage['anggaran'];$bk=+round(($stage['anggaran']/$row['pagu'])*100,2);$bf=$bk;}} ?>
										<tr <?php if($ada!=0)echo 'class="text-muted"' ?>>
											<td>2.<?=$no++; ?></td>
											<td nowrap=""><?php echo $act['kegiatan'];?>
											</td>
											<?php if($ada!=0){ ?>
											<td class=""><?=number_format($ada,0,',','.'); ?></td>
											<td class="text-center"><?=$bk;?></td>
											<td class="text-center"><?=$bf; ?></td>
											<?php }else{ ?>
											<td class=""><?=number_format($act['anggaran'],0,',','.'); ?></td>
											<td class="text-center"><?=round(($act['anggaran']/$row['pagu'])*100,2); ?></td>
											<td class="text-center"><?=round(($act['anggaran']/$row['pagu'])*100,2); ?></td>
											<?php } ?>

											<?php if(($act['waktu'] == ""))$act['waktu']="0-0";$mg=explode("-",$act['waktu']);  $bln=(int)($mg[0]/4); if($mg[0]%4==1)$bln+=1; $end=(int)($mg[1]/4); if($mg[1]%4==1)$end+=1;$stats=0;for($i=1;$i<=12;$i++){ 
												if($i==$bln || $stats == 1){$stats=1;?>
												<td class="text-center">
													<a href="#" class="text-danger" data-toggle="modal" data-target="#tambahrencanakeu" data-money="<?=$act['anggaran']; ?>" data-fisik="<?=round(($act['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
												<td></td>
											<?php if($i==$end) $stats=0;}else{ ?>
												<td></td>
												<td></td>
											<?php } ?>
											<?php } ?>
																				
										</tr>
											<?php if(isset($allStages) != NULL){ $no3=1;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){ ?>
										<tr>
											<td>2.<?=($no-1).".".$no3++; ?></td>
											<td nowrap=""><?php echo $stage['kegiatan'];?> 
											</td>
											<td><?=number_format($stage['anggaran'],0,',','.'); ?></td>
											<td class="text-center"><?=round(($stage['anggaran']/$row['pagu'])*100,2); ?></td>
											<td class="text-center"><?=round(($stage['anggaran']/$row['pagu'])*100,2); ?></td>
											<?php if(($stage['waktu'] == ""))$stage['waktu']="0-0";$mg=explode("-",$stage['waktu']); $bln=(int)($mg[0]/4); if($mg[0]%4==1)$bln+=1; $end=(int)($mg[1]/4); if($mg[1]%4==1)$end+=1;$stats=0;for($i=1;$i<=12;$i++){ 
												if($i==$bln || $stats == 1){$stats=1;?>
												<td class="text-center">
													<a href="#" class="text-danger" data-toggle="modal" data-target="#tambahrencanakeustage" data-money="<?=$stage['anggaran']; ?>" data-act="<?=$stage['id']; ?>" data-month="<?=$i; ?>" data-fisik="<?=round(($stage['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
												<td></td>
											<?php if($i==$end) $stats=0;}else{ ?>
												<td></td>
												<td></td>
											<?php } ?>
											<?php } ?>
																				
										</tr>
											<?php }}} ?>															
										<?php }}} ?>															
										<tr>
											<td>3.</td>
											<td>PELAPORAN
											</td>
											<td><?=number_format($total[2],0,',','.');?></td>
											<td class="text-center"><?=round(($total[2]/$row['pagu'])*100,2); ?></td>
											<td class="text-center"><?=round(($total[2]/$row['pagu'])*100,2); ?></td>
											<?php for($i=0;$i<24;$i++){ ?>
												<td></td>
											<?php } ?>
																				
										</tr>
										<?php if(isset($allAct) != NULL){ $no=1; foreach($allAct as $act){if($act['parent'] == 'C'){$ada=0;$bk=0;$bf=0;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){$ada+=$stage['anggaran'];$bk=+round(($stage['anggaran']/$row['pagu'])*100,2);$bf=$bk;}} ?>
										<tr <?php if($ada!=0)echo 'class="text-muted"' ?>>
											<td>3.<?=$no++; ?></td>
											<td nowrap=""><?php echo $act['kegiatan'];?>
											</td>
											<?php if($ada!=0){ ?>
											<td class=""><?=number_format($ada,0,',','.'); ?></td>
											<td class="text-center"><?=$bk;?></td>
											<td class="text-center"><?=$bf; ?></td>
											<?php }else{ ?>
											<td class=""><?=number_format($act['anggaran'],0,',','.'); ?></td>
											<td class="text-center"><?=round(($act['anggaran']/$row['pagu'])*100,2); ?></td>
											<td class="text-center"><?=round(($act['anggaran']/$row['pagu'])*100,2); ?></td>
											<?php } ?>

											<?php if(($act['waktu'] == ""))$act['waktu']="0-0";$mg=explode("-",$act['waktu']);  $bln=(int)($mg[0]/4); if($mg[0]%4==1)$bln+=1; $end=(int)($mg[1]/4); if($mg[1]%4==1)$end+=1;$stats=0;for($i=1;$i<=12;$i++){ 
												if($i==$bln || $stats == 1){$stats=1;?>
												<td class="text-center">
													<a href="#" class="text-danger" data-toggle="modal" data-target="#tambahrencanakeu" data-money="<?=$act['anggaran']; ?>" data-fisik="<?=round(($act['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
												<td></td>
											<?php if($i==$end) $stats=0;}else{ ?>
												<td></td>
												<td></td>
											<?php } ?>
											<?php } ?>
																				
										</tr>
											<?php if(isset($allStages) != NULL){ $no3=1;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){ ?>
										<tr>
											<td>3.<?=($no-1).".".$no3++; ?></td>
											<td nowrap=""><?php echo $stage['kegiatan'];?> 
											</td>
											<td><?=number_format($stage['anggaran'],0,',','.'); ?></td>
											<td class="text-center"><?=round(($stage['anggaran']/$row['pagu'])*100,2); ?></td>
											<td class="text-center"><?=round(($stage['anggaran']/$row['pagu'])*100,2); ?></td>
											<?php if(($stage['waktu'] == ""))$stage['waktu']="0-0";$mg=explode("-",$stage['waktu']); $bln=(int)($mg[0]/4); if($mg[0]%4==1)$bln+=1; $end=(int)($mg[1]/4); if($mg[1]%4==1)$end+=1;$stats=0;for($i=1;$i<=12;$i++){ 
												if($i==$bln || $stats == 1){$stats=1;?>
												<td class="text-center">
													<a href="#" class="text-danger" data-toggle="modal" data-target="#tambahrencanakeustage" data-money="<?=$stage['anggaran']; ?>" data-act="<?=$stage['id']; ?>" data-month="<?=$i; ?>" data-fisik="<?=round(($stage['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
												<td></td>
											<?php if($i==$end) $stats=0;}else{ ?>
												<td></td>
												<td></td>
											<?php } ?>
											<?php } ?>
																				
										</tr>
											<?php }}} ?>															
										<?php }}} ?>															
										<tr style="background-color: #ffb74d;border-color: #ffb74d;color:#fff; font-weight: 400;">
											<td colspan="5">Jumlah Rencana bulanan</td>
											<?php for($i=0;$i<24;$i++){ ?>
												<td></td>
											<?php } ?>											
										</tr>
										<tr style="background-color: #a1887f;border-color: #a1887f;color:#fff; font-weight: 400;">
											<td colspan="5">Jumlah Rencana Kumulatif</td>
											<?php for($i=0;$i<24;$i++){ ?>
												<td></td>
											<?php } ?>											
										</tr>
										<tr style="background-color: #90a4ae;border-color: #90a4ae;color:#fff; font-weight: 400;">
											<td colspan="5">Presentase Rencana Bulan</td>
											<?php for($i=0;$i<24;$i++){ ?>
												<td></td>
											<?php } ?>											
										</tr>
										<tr style="background-color: #999;border-color: #999;color:#fff; font-weight: 400;">
											<td colspan="5">Presentase Kumulatif Rencana</td>
											<?php for($i=0;$i<24;$i++){ ?>
												<td></td>
											<?php } ?>											
										</tr>
									</tbody>	
								</table>
							</div>
						</div><!-- .animated -->
				</div><!-- .content -->


		</div><!-- /#right-panel -->
		<div class="modal fade" id="tambahrencanakeu" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-md" role="document">
						<div class="modal-content">
								<div class="modal-header">
										<h5 class="modal-title" id="largeModalLabel">Breakdown Rincian Anggaran</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
										</button>
								</div>
								<div class="modal-body">
								<?php echo form_open('RMP/addBobotAct/'.$this->uri->segment(3)); ?>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<table class="table table-sm table-bordered">
													<thead>
														<tr>
															<td>No</td>
															<td>Akun</td>
															<td>Biaya</td>
															<td>Fisik</td>
														</tr>
													</thead>
													<tbody id="realact">
														
													</tbody>
		
												</table>
											</div>											
											<div class="form-group">
												<label class=" form-control-label">Pilih Akun</label>
												<select id="akunatt3" name="sdk_id" class="form-control">
													<option disabled selected>--Pilih Akun--</option>
													<?php foreach($moneys as $money){ ?>
													<option value="<?=$money['id']; ?>"><?=$money['akun'].'. '.$money['jenis']; ?></option>
													<?php } ?>
												</select>
												<!-- <small class="form-text text-muted">Sisa Pagu Akun: <i id="paguakun" style="font-style: normal;color:red;">Rp. </i> </small> -->
											</div>
											<div class="form-group">
												<label class=" form-control-label">Anggaran Biaya</label>
												<div class="input-group">
											    <div class="input-group-prepend">
											      <div class="input-group-text"><i class="fa fa-money fa-fw"></i></div>
											    </div>
											    <input type="number" min=0 class="form-control" name="biaya" >
											    <!-- Hidden Here -->
											    <input type="hidden" name="act_id" id="actkeu" value="">
											    <input type="hidden" name="month" id="monthkeu" value="">
											  </div>											
											  <small class="form-text text-muted">Total Anggaran Tahapan: Rp.<i id="paguanggaran" style="font-style: normal;color:green;"> </i> </small>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Bobot Fisik</label>
												<div class="input-group">
											    <div class="input-group-prepend">
											      <div class="input-group-text"><i class="fa fa-money fa-fw"></i></div>
											    </div>
											    <input type="text" min=0 class="form-control" name="fisik" >
											  </div>											
											  <small class="form-text text-muted">Total Bobot Fisik: <i id="fisikkeu" style="font-style: normal;color:green;"> </i> </small>
											</div>											
										</div>
									</div>
								</div>
								<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-primary"
											<i class="fa fa-fw fa-dot-circle-o"></i> Submit
								</div>
								<?php echo form_close(); ?>
						</div>
				</div>
		</div>		
		<div class="modal fade" id="tambahrencanakeustage" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-md" role="document">
						<div class="modal-content">
								<div class="modal-header">
										<h5 class="modal-title" id="largeModalLabel">Breakdown Rincian Anggaran Tahapan</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
										</button>
								</div>
								<div class="modal-body">
								<?php echo form_open('RMP/addBobotStage/'.$this->uri->segment(3)); ?>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<table id="realstage" class="table table-sm table-bordered">
													<thead>
														<tr>
															<td>No</td>
															<td>Akun</td>
															<td>Biaya</td>
															<td>Fisik</td>
														</tr>
													</thead>
		
												</table>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Pilih Akun</label>
												<select id="akunatt3" name="sdk_id" class="form-control">
													<option disabled selected>--Pilih Akun--</option>
													<?php foreach($moneys as $money){ ?>
													<option value="<?=$money['id']; ?>"><?=$money['akun'].'. '.$money['jenis']; ?></option>
													<?php } ?>
												</select>
												<!-- <small class="form-text text-muted">Sisa Pagu Akun: <i id="paguakun" style="font-style: normal;color:red;">Rp. </i> </small> -->
											</div>
											<div class="form-group">
												<label class=" form-control-label">Anggaran Biaya</label>
												<div class="input-group">
											    <div class="input-group-prepend">
											      <div class="input-group-text"><i class="fa fa-money fa-fw"></i></div>
											    </div>
											    <input type="number" min=0 class="form-control" name="biaya" >
											    <!-- Hidden Here -->
											    <input type="hidden" name="stage_id" id="actkeustage" value="">
											    <input type="hidden" name="month" id="monthkeustage" value="">											    
											  </div>											
											  <small class="form-text text-muted">Total Anggaran Tahapan: Rp.<i id="paguanggaranstage" style="font-style: normal;color:green;"> </i> </small>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Bobot Fisik</label>
												<div class="input-group">
											    <div class="input-group-prepend">
											      <div class="input-group-text"><i class="fa fa-money fa-fw"></i></div>
											    </div>
											    <input type="text" min=0 class="form-control" name="fisikstage" >
											  </div>											
											  <small class="form-text text-muted">Total Bobot Fisik: <i id="fisik" style="font-style: normal;color:green;"> </i> </small>
											</div>																						
										</div>
									</div>
								</div>
								<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-primary"
											<i class="fa fa-fw fa-dot-circle-o"></i> Submit
								</div>
								<?php echo form_close(); ?>
						</div>
				</div>
		</div>				