				
				<div class="breadcrumbs">
						<div class="col-sm-4">
								<div class="page-header float-left">
										<div class="page-title">
												<h1>Tabel Realisasi Kegiatan<br><?=$row['judul']; ?></h1>
										</div>
								</div>
						</div>
						<div class="col-sm-8">
								<div class="page-header float-right">
										<div class="page-title">
												<ol class="breadcrumb text-right">
														<li><a href="#">Monitoring dan Evaluasi</a></li>
														<li class="active">Tabel Laporan</li>
												</ol>
										</div>
								</div>
						</div>
				</div>

				<div class="content mt-3" style="background-color: white;">
							<div class="table-responsive">
								<table class="table table-sm table-bordered table-hover" style="background-color: white; border-color: white; font-size:13px;">	
									<thead class="text-center font-weight-bold" >	
										<tr class="" style="background-color: #607d8b;border-color: #607d8b;color:#fff; font-weight: 400; " >
											<td colspan="4" rowspan="2" style="vertical-align: middle;">
												Uraian Kegiatan
											</td>
											<td rowspan="2">Jumlah Biaya<br>[Rp.]</td>
											<td rowspan="2">Bobot Keuangan<br>[%]</td>
											<td rowspan="2">Bobot Fisik<br>[%]</td>
											<td colspan="1">Jan</td>
											<td colspan="1">Feb</td>
											<td colspan="1">Mar</td>
											<td colspan="1">Apr</td>
											<td colspan="1">Mei</td>
											<td colspan="1">Jun</td>
											<td colspan="1">Jul</td>
											<td colspan="1">Agt</td>
											<td colspan="1">Sep</td>
											<td colspan="1">Okt</td>
											<td colspan="1">Nov</td>
											<td colspan="1">Des</td>
										</tr>
										<tr class="" style="background-color: #90a4ae;border-color: #90a4ae;color:#fff; font-weight: 400;">
											<?php for($bulan=0;$bulan<12;$bulan++){ 
												?>
											<td><?= $bulan+1; ?></td>
												

											<?php } ?>
										</tr>
									</thead>			
									<tbody>
										<tr>
											<td colspan="4">Keuangan <?=$row['judul']; ?></td>
											<td><?=number_format($moneysTotalK,0,',','.'); ?> <input type="hidden" id="pagu" value="<?= $row['pagu']; ?>"/></td>
											<td class="text-center"><?= round($moneysTotalP,2);?></td>
											<td></td>
											<?php for($bulan=0;$bulan<12;$bulan++){ ?>
											<td class="text-center">
												<?php if($moneysMonths[$bulan] == 'x'){ 
													
													?>
												
												<a href="#" class="text-warning" data-toggle="modal" data-target="#addKeuangan" data-money='<?= $moneysMonthsR[$bulan]; ?>' data-idk="<?= $idk;?>" data-month="<?= $bulan; ?>">
														<i class="fa fa-fw fa-edit"></i>
													</a>
												<?php }else{
														if($moneysMonths[$bulan] < (9/10)*$moneysMonthsR[$bulan]){
														?>
														<font color ="red"><?= number_format($moneysMonths[$bulan],0,',','.'); ?></font>
														<?php
															}else{
														?>
														<font><?= number_format($moneysMonths[$bulan],0,',','.'); ?></font>
														<?php } ?>
													<a href="#" class="text-success" data-toggle="modal" data-target="#updateKeuangan" data-money2="<?= $moneysMonths[$bulan];?>" data-money='<?= $moneysMonthsR[$bulan]; ?>' data-kendala="<?= $moneysMonthsKend[$bulan]; ?>" data-id="<?= $moneysMonthsId[$bulan]; ?>" data-idk="<?= $idk;?>" data-month="<?= $bulan; ?>">
														<i class="fa fa-fw fa-edit"></i>
													</a>
													<?php } ?>
											</td>
											<?php } ?>
										</tr>
										
										<tr>
											<td width="7px"><b>1.</b></td>
											<td colspan="3"><b>PERSIAPAN</b></td>
											<td><?=number_format($total[0],0,',','.');?></td>
											<td class="text-center"><?=round($totalP[0],2); ?></td>
											<td class="text-center"><?=round($totalF[0],2); ?></td>
											<?php for($i=0;$i<12;$i++){ ?>
												<td></td>
											<?php } ?>
																				
										</tr>
										<?php if(isset($allAct) != NULL){ 
											$no=1; 
											foreach($allAct as $act){
												if($act['parent'] == 'A'){
													 ?>
										<tr <?php if($actTotal[$act['id']]['hchild']!=0)echo 'class="text-muted"' ?>>
											<td width="7px"></td>
											<td width="7px">1.<?=$no++; ?></td>
											<td nowrap="" colspan="2"><?php echo $act['kegiatan'];?>
											</td>
											<td class="">
												<?=number_format($actTotal[$act['id']]['biaya'],0,',','.'); ?>
											</td>
											<td class="text-center">
												<?=round($actTotal[$act['id']]['biayaP'],2);?>
											</td>
											<td class="text-center">
												<?=round($actTotal[$act['id']]['fisik'],2); ?>
											</td>

											<?php 

											for($i=1;$i<=12;$i++){
												if($actTotal[$act['id']]['hchild']==0){
													if(isset($actMonths[$act['id']][($i-1)]['fisik'])){
														// $actMonths[$act['id']][($i-1)]['biaya']
														?>
														
												<td class='text-center'>
													<?php
														if($actMonths[$act['id']][($i-1)]['biaya'] < (9/10)*$actMonthsR[$act['id']][($i-1)]['biaya']){
															echo "<font color='red'>";
														}else{
															echo "<font>";
														}
													?>
													<?= number_format($actMonths[$act['id']][($i-1)]['biaya'],0,',','.');?>
													</font>
													<b>(</b>
													<?php
														if($actMonths[$act['id']][($i-1)]['fisik'] < (9/10)*$actMonthsR[$act['id']][($i-1)]['fisik']){
															echo "<font color='red'>";
														}else{
															echo "<font>";
														}
													?>
													<?= round($actMonths[$act['id']][($i-1)]['fisik'],2);?>
													</font>
													<b>)</b>
													<?php if($actMonths[$act['id']][($i-1)]['tingkat_kendala'] > 0){ ?>
													<a href="#" class="text-success" data-toggle="modal" data-target="#updateLaporan" data-moneyAc="<?=$moneysMonths[$i-1];?>" data-money="<?=$actMonthsR[$act['id']][($i-1)]['biaya']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?= $actMonthsR[$act['id']][($i-1)]['fisik'];?>" data-kendala="1" data-sub="1.<?=($no-1); ?>" data-t-biaya="<?= $actMonths[$act['id']][($i-1)]['biaya'];?>" data-t-biayaP="<?= $actMonths[$act['id']][($i-1)]['biayaP'];?>" data-t-fisik="<?= $actMonths[$act['id']][($i-1)]['fisik_P'];?>" data-t-fisik_real="<?= $actMonths[$act['id']][($i-1)]['fisik'];?>" data-t-output="<?= $actMonths[$act['id']][($i-1)]['output'];?>" data-t-deskripsi="<?= $actMonths[$act['id']][($i-1)]['deskripsi'];?>" data-t-kendala="<?= $actMonths[$act['id']][($i-1)]['kendala'];?>" data-t-tingkat_kendala="<?= $actMonths[$act['id']][($i-1)]['tingkat_kendala'];?>" data-t-id="<?= $actMonths[$act['id']][($i-1)]['id_mnv_fisik'];?>">
															<i class="fa fa-fw fa-exclamation"></i>
														</a>
													<?php }else{ ?>
													<a href="#" class="text-success" data-toggle="modal" data-target="#updateLaporan" data-moneyAc="<?=$moneysMonths[$i-1];?>" data-money="<?=$actMonthsR[$act['id']][($i-1)]['biaya']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?= $actMonthsR[$act['id']][($i-1)]['fisik'];?>" data-kendala="0" data-sub="1.<?=($no-1); ?>" data-t-biaya="<?= $actMonths[$act['id']][($i-1)]['biaya'];?>" data-t-biayaP="<?= $actMonths[$act['id']][($i-1)]['biayaP'];?>" data-t-fisik="<?= $actMonths[$act['id']][($i-1)]['fisik_P'];?>" data-t-fisik_real="<?= $actMonths[$act['id']][($i-1)]['fisik'];?>" data-t-output="<?= $actMonths[$act['id']][($i-1)]['output'];?>" data-t-deskripsi="<?= $actMonths[$act['id']][($i-1)]['deskripsi'];?>" data-t-kendala="<?= $actMonths[$act['id']][($i-1)]['kendala'];?>" data-t-tingkat_kendala="<?= $actMonths[$act['id']][($i-1)]['tingkat_kendala'];?>" data-t-id="<?= $actMonths[$act['id']][($i-1)]['id_mnv_fisik'];?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
													<?php } ?>

												</td>

														<?php
													}else{
													
												?>
												<td class="text-center">
													<?php
														if(($i+1) < $this_month && ($actMonthsR[$act['id']][($i-1)]['fisik'] !=0 || $actMonthsR[$act['id']][($i-1)]['biaya'] != 0)){
													?>
													<a href="#" class="text-danger" data-toggle="modal" data-target="#addLaporan" data-moneyAc="<?=$moneysMonths[$i-1];?>" data-money="<?=$actMonthsR[$act['id']][($i-1)]['biaya']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?= $actMonthsR[$act['id']][($i-1)]['fisik'];?>" data-kendala="1" data-sub="1.<?=($no-1); ?>">
														<i class="fa fa-fw fa-exclamation"></i>
													</a>
													<?php
														}else if(($actMonthsR[$act['id']][($i-1)]['fisik'] !=0 || $actMonthsR[$act['id']][($i-1)]['biaya'] != 0)){
													?>
													<a href="#" class="text-danger" data-toggle="modal" data-target="#addLaporan" data-moneyAc="<?=$moneysMonths[$i-1];?>" data-money="<?=$actMonthsR[$act['id']][($i-1)]['biaya']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?= $actMonthsR[$act['id']][($i-1)]['fisik'];?>" data-kendala="0" data-sub="1.<?=($no-1); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
														<?php
													}else{
														?>
														<a href="#" class="text-secondary" data-toggle="modal" data-target="#addLaporan" data-moneyAc="<?=$moneysMonths[$i-1];?>" data-money="<?=$actMonthsR[$act['id']][($i-1)]['biaya']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?= $actMonthsR[$act['id']][($i-1)]['fisik'];?>" data-kendala="0" data-sub="1.<?=($no-1); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
														<?php
													}
														?>
												</td>
											<?php 
													}
												}else{
													echo "<td></td>";
												}
											} 
												?>
																				
										</tr>
											<?php if(isset($allStages) != NULL){ $no3=1;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){ ?>
										<tr>
											<td width="7px"></td>
											<td width="7px"></td>
											<td width="7px">1.<?=($no-1).".".$no3++; ?></td>
											<td nowrap=""><?php echo $stage['kegiatan'];?> 
											</td>
											<td><?=round($stageTotal[$stage['id']]['biaya'],2); ?></td>
											<td class="text-center"><?=round($stageTotal[$stage['id']]['biayaP'],2); ?></td>
											<td class="text-center"><?=round($stageTotal[$stage['id']]['fisik'],2); ?></td>
											<?php 
											for($i=0;$i<12;$i++){ 
												if(isset($stageMonths[$stage['id']][$i]['fisik'])){
													
													?>

													<td class='text-center'>
														<?php
															if($stageMonths[$stage['id']][($i)]['biaya'] < (9/10)*$stageMonthsR[$stage['id']][($i)]['biaya']){
																echo "<font color='red'>";
															}else{
																echo "<font>";
															}
														?>
														<?= number_format($stageMonths[$stage['id']][($i)]['biaya'],0,',','.');?>
														</font>
														<b>(</b>
														<?php
															if($stageMonths[$stage['id']][($i)]['fisik'] < (9/10)*$stageMonthsR[$stage['id']][($i)]['fisik']){
																echo "<font color='red'>";
															}else{
																echo "<font>";
															}
														?>
														<?= round($stageMonths[$stage['id']][($i)]['fisik'],2);?>
														</font>
														<b>)</b>
														<?php if($stageMonths[$stage['id']][($i)]['tingkat_kendala'] > 0){ ?>
														<a href="#" class="text-success" data-toggle="modal" data-target="#updateLaporan" data-moneyAc="<?=$moneysMonths[$i];?>" data-money="<?=$stageMonthsR[$stage['id']][($i)]['biaya']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=($i+1); ?>" data-type="stage" data-fisik="<?= $stageMonthsR[$stage['id']][($i)]['fisik'];?>" data-kendala="0" data-sub="1.<?=($no-1); ?>.<?=($no3-1); ?>" data-t-biaya="<?= $stageMonths[$stage['id']][($i)]['biaya'];?>" data-t-biayaP="<?= $stageMonths[$stage['id']][($i)]['biayaP'];?>" data-t-fisik="<?= $stageMonths[$stage['id']][($i)]['fisik_P'];?>" data-t-fisik_real="<?= $stageMonths[$stage['id']][($i)]['fisik'];?>" data-t-output="<?= $stageMonths[$stage['id']][($i)]['output'];?>" data-t-deskripsi="<?= $stageMonths[$stage['id']][($i)]['deskripsi'];?>" data-t-kendala="<?= $stageMonths[$stage['id']][($i)]['kendala'];?>" data-t-tingkat_kendala="<?= $stageMonths[$stage['id']][($i)]['tingkat_kendala'];?>" data-t-id="<?= $stageMonths[$stage['id']][($i)]['id_mnv_fisik'];?>">
																<i class="fa fa-fw fa-exclamation"></i>
															</a>
														<?php }else{ ?>
														<a href="#" class="text-success" data-toggle="modal" data-target="#updateLaporan" data-moneyAc="<?=$moneysMonths[$i];?>" data-money="<?=$stageMonthsR[$stage['id']][($i)]['biaya']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=($i+1); ?>" data-type="stage" data-fisik="<?= $stageMonthsR[$stage['id']][($i)]['fisik'];?>" data-kendala="0" data-sub="1.<?=($no-1); ?>.<?=($no3-1); ?>" data-t-biaya="<?= $stageMonths[$stage['id']][($i)]['biaya'];?>" data-t-biayaP="<?= $stageMonths[$stage['id']][($i)]['biayaP'];?>" data-t-fisik="<?= $stageMonths[$stage['id']][($i)]['fisik_P'];?>" data-t-fisik_real="<?= $stageMonths[$stage['id']][($i)]['fisik'];?>" data-t-output="<?= $stageMonths[$stage['id']][($i)]['output'];?>" data-t-deskripsi="<?= $stageMonths[$stage['id']][($i)]['deskripsi'];?>" data-t-kendala="<?= $stageMonths[$stage['id']][($i)]['kendala'];?>" data-t-tingkat_kendala="<?= $stageMonths[$stage['id']][($i)]['tingkat_kendala'];?>" data-t-id="<?= $stageMonths[$stage['id']][($i)]['id_mnv_fisik'];?>">
																<i class="fa fa-fw fa-edit"></i>
															</a>
														<?php } ?>

													</td>
												
													<?php
												}else{
													?>
													<td class="text-center">
														<?php
															if(($i+2) < $this_month && ($stageMonthsR[$stage['id']][($i)]['fisik'] !=0 || $stageMonthsR[$stage['id']][($i)]['biaya'] != 0)){
														?>
														<a href="#" class="text-danger" data-toggle="modal" data-target="#addLaporan" data-moneyAc="<?=$moneysMonths[$i];?>" data-money="<?=$stageMonthsR[$stage['id']][($i)]['biaya']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=($i+1); ?>" data-type="stage" data-fisik="<?= $stageMonthsR[$stage['id']][($i)]['fisik'];?>" data-kendala="1" data-sub="1.<?=($no-1); ?>.<?=($no3-1); ?>">
															<i class="fa fa-fw fa-exclamation"></i>
														</a>
														<?php
															}else if(($stageMonthsR[$stage['id']][($i)]['fisik'] !=0 || $stageMonthsR[$stage['id']][($i)]['biaya'] != 0)){
														?>
														<a href="#" class="text-danger" data-toggle="modal" data-target="#addLaporan" data-moneyAc="<?=$moneysMonths[$i];?>" data-money="<?=$stageMonthsR[$stage['id']][($i)]['biaya']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=($i+1); ?>" data-type="stage" data-fisik="<?= $stageMonthsR[$stage['id']][($i)]['fisik'];?>" data-kendala="1" data-sub="1.<?=($no-1); ?>.<?=($no3-1); ?>">
																<i class="fa fa-fw fa-edit"></i>
															</a>
															<?php
														}else{
															?>
															<a href="#" class="text-secondary" data-toggle="modal" data-target="#addLaporan" data-moneyAc="<?=$moneysMonths[$i];?>" data-money="<?=$stageMonthsR[$stage['id']][($i)]['biaya']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=($i+1); ?>" data-type="stage" data-fisik="<?= $stageMonthsR[$stage['id']][($i)]['fisik'];?>" data-kendala="1" data-sub="1.<?=($no-1); ?>.<?=($no3-1); ?>">
																<i class="fa fa-fw fa-edit"></i>
															</a>
															<?php
														}
															?>
													</td>
												
													<?php
												}
											}
											?>
																				
										</tr>
											<?php }}} ?>
										<?php }}} ?>
										<tr>
											<td width="7px"><b>2.</b></td>
											<td colspan="3"><b>PELAKSANAAN</b>
											</td>
											<td><?=number_format($total[1],0,',','.');?></td>
											<td class="text-center"><?=round($totalP[1],2); ?></td>
											<td class="text-center"><?=round($totalF[1],2); ?></td>											
											<?php for($i=0;$i<12;$i++){ ?>
												<td></td>
											<?php } ?>
																				
										</tr>
										<?php if(isset($allAct) != NULL){ $no=1; foreach($allAct as $act){if($act['parent'] == 'B'){
											?>
										<tr <?php if($actTotal[$act['id']]['hchild']!=0)echo 'class="text-muted"' ?>>
											<td width="7px"></td>
											<td width="7px">2.<?=$no++; ?></td>
											<td nowrap="" colspan="2"><?php echo $act['kegiatan'];?>
											</td>
											<td class=""><?=number_format($actTotal[$act['id']]['biaya'],0,',','.'); ?></td>
											<td class="text-center"><?=round($actTotal[$act['id']]['biayaP'],2);?></td>
											<td class="text-center"><?=round($actTotal[$act['id']]['fisik'],2); ?></td>

												<?php 

											for($i=1;$i<=12;$i++){
												if($actTotal[$act['id']]['hchild']==0){
													if(isset($actMonths[$act['id']][($i-1)]['fisik'])){
														// $actMonths[$act['id']][($i-1)]['biaya']
														?>
														
												<td class='text-center'>
													<?php
														if($actMonths[$act['id']][($i-1)]['biaya'] < (9/10)*$actMonthsR[$act['id']][($i-1)]['biaya']){
															echo "<font color='red'>";
														}else{
															echo "<font>";
														}
													?>
													<?= number_format($actMonths[$act['id']][($i-1)]['biaya'],0,',','.');?>
													</font>
													<b>(</b>
													<?php
														if($actMonths[$act['id']][($i-1)]['fisik'] < (9/10)*$actMonthsR[$act['id']][($i-1)]['fisik']){
															echo "<font color='red'>";
														}else{
															echo "<font>";
														}
													?>
													<?= round($actMonths[$act['id']][($i-1)]['fisik'],2);?>
													</font>
													<b>)</b>
													<?php if($actMonths[$act['id']][($i-1)]['tingkat_kendala'] > 0){ ?>
													<a href="#" class="text-success" data-toggle="modal" data-target="#updateLaporan" data-moneyAc="<?=$moneysMonths[$i-1];?>" data-money="<?=$actMonthsR[$act['id']][($i-1)]['biaya']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?= $actMonthsR[$act['id']][($i-1)]['fisik'];?>" data-kendala="1" data-sub="2.<?=($no-1); ?>" data-t-biaya="<?= $actMonths[$act['id']][($i-1)]['biaya'];?>" data-t-biayaP="<?= $actMonths[$act['id']][($i-1)]['biayaP'];?>" data-t-fisik="<?= $actMonths[$act['id']][($i-1)]['fisik_P'];?>" data-t-fisik_real="<?= $actMonths[$act['id']][($i-1)]['fisik'];?>" data-t-output="<?= $actMonths[$act['id']][($i-1)]['output'];?>" data-t-deskripsi="<?= $actMonths[$act['id']][($i-1)]['deskripsi'];?>" data-t-kendala="<?= $actMonths[$act['id']][($i-1)]['kendala'];?>" data-t-tingkat_kendala="<?= $actMonths[$act['id']][($i-1)]['tingkat_kendala'];?>" data-t-id="<?= $actMonths[$act['id']][($i-1)]['id_mnv_fisik'];?>">
															<i class="fa fa-fw fa-exclamation"></i>
														</a>
													<?php }else{ ?>
													<a href="#" class="text-success" data-toggle="modal" data-target="#updateLaporan" data-moneyAc="<?=$moneysMonths[$i-1];?>" data-money="<?=$actMonthsR[$act['id']][($i-1)]['biaya']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?= $actMonthsR[$act['id']][($i-1)]['fisik'];?>" data-kendala="0" data-sub="2.<?=($no-1); ?>" data-t-biaya="<?= $actMonths[$act['id']][($i-1)]['biaya'];?>" data-t-biayaP="<?= $actMonths[$act['id']][($i-1)]['biayaP'];?>" data-t-fisik="<?= $actMonths[$act['id']][($i-1)]['fisik_P'];?>" data-t-fisik_real="<?= $actMonths[$act['id']][($i-1)]['fisik'];?>" data-t-output="<?= $actMonths[$act['id']][($i-1)]['output'];?>" data-t-deskripsi="<?= $actMonths[$act['id']][($i-1)]['deskripsi'];?>" data-t-kendala="<?= $actMonths[$act['id']][($i-1)]['kendala'];?>" data-t-tingkat_kendala="<?= $actMonths[$act['id']][($i-1)]['tingkat_kendala'];?>" data-t-id="<?= $actMonths[$act['id']][($i-1)]['id_mnv_fisik'];?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
													<?php } ?>

												</td>

														<?php
													}else{
													
												?>
												<td class="text-center">
													<?php
														if(($i+1) < $this_month && ($actMonthsR[$act['id']][($i-1)]['fisik'] !=0 || $actMonthsR[$act['id']][($i-1)]['biaya'] != 0)){
													?>
													<a href="#" class="text-danger" data-toggle="modal" data-target="#addLaporan" data-moneyAc="<?=$moneysMonths[$i-1];?>" data-money="<?=$actMonthsR[$act['id']][($i-1)]['biaya']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?= $actMonthsR[$act['id']][($i-1)]['fisik'];?>" data-kendala="1" data-sub="2.<?=($no-1); ?>">
														<i class="fa fa-fw fa-exclamation"></i>
													</a>
													<?php
														}else if(($actMonthsR[$act['id']][($i-1)]['fisik'] !=0 || $actMonthsR[$act['id']][($i-1)]['biaya'] != 0)){
													?>
													<a href="#" class="text-danger" data-toggle="modal" data-target="#addLaporan" data-moneyAc="<?=$moneysMonths[$i-1];?>" data-money="<?=$actMonthsR[$act['id']][($i-1)]['biaya']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?= $actMonthsR[$act['id']][($i-1)]['fisik'];?>" data-kendala="0" data-sub="2.<?=($no-1); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
														<?php
													}else{
														?>
														<a href="#" class="text-secondary" data-toggle="modal" data-target="#addLaporan" data-moneyAc="<?=$moneysMonths[$i-1];?>" data-money="<?=$actMonthsR[$act['id']][($i-1)]['biaya']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?= $actMonthsR[$act['id']][($i-1)]['fisik'];?>" data-kendala="0" data-sub="2.<?=($no-1); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
														<?php
													}
														?>
												</td>
											<?php 
													}
												}else{
													echo "<td></td>";
												}
											} 
												?>
																				
										</tr>
											<?php if(isset($allStages) != NULL){ $no3=1;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){ ?>
										<tr>
											<td width="7px"></td>
											<td width="7px"></td>
											<td width="7px">2.<?=($no-1).".".$no3++; ?></td>
											<td nowrap=""><?php echo $stage['kegiatan'];?> 
											</td>
											<td><?=round($stageTotal[$stage['id']]['biaya'],2); ?></td>
											<td class="text-center"><?=round($stageTotal[$stage['id']]['biayaP'],2); ?></td>
											<td class="text-center"><?=round($stageTotal[$stage['id']]['fisik'],2); ?></td>
												<?php 
											for($i=0;$i<12;$i++){ 
												if(isset($stageMonths[$stage['id']][$i]['fisik'])){
													
													?>

													<td class='text-center'>
														<?php
															if($stageMonths[$stage['id']][($i)]['biaya'] < (9/10)*$stageMonthsR[$stage['id']][($i)]['biaya']){
																echo "<font color='red'>";
															}else{
																echo "<font>";
															}
														?>
														<?= number_format($stageMonths[$stage['id']][($i)]['biaya'],0,',','.');?>
														</font>
														<b>(</b>
														<?php
															if($stageMonths[$stage['id']][($i)]['fisik'] < (9/10)*$stageMonthsR[$stage['id']][($i)]['fisik']){
																echo "<font color='red'>";
															}else{
																echo "<font>";
															}
														?>
														<?= round($stageMonths[$stage['id']][($i)]['fisik'],2);?>
														</font>
														<b>)</b>
														<?php if($stageMonths[$stage['id']][($i)]['tingkat_kendala'] > 0){ ?>
														<a href="#" class="text-success" data-toggle="modal" data-target="#updateLaporan" data-moneyAc="<?=$moneysMonths[$i];?>" data-money="<?=$stageMonthsR[$stage['id']][($i)]['biaya']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=($i+1); ?>" data-type="stage" data-fisik="<?= $stageMonthsR[$stage['id']][($i)]['fisik'];?>" data-kendala="0" data-sub="2.<?=($no-1); ?>.<?=($no3-1); ?>" data-t-biaya="<?= $stageMonths[$stage['id']][($i)]['biaya'];?>" data-t-biayaP="<?= $stageMonths[$stage['id']][($i)]['biayaP'];?>" data-t-fisik="<?= $stageMonths[$stage['id']][($i)]['fisik_P'];?>" data-t-fisik_real="<?= $stageMonths[$stage['id']][($i)]['fisik'];?>" data-t-output="<?= $stageMonths[$stage['id']][($i)]['output'];?>" data-t-deskripsi="<?= $stageMonths[$stage['id']][($i)]['deskripsi'];?>" data-t-kendala="<?= $stageMonths[$stage['id']][($i)]['kendala'];?>" data-t-tingkat_kendala="<?= $stageMonths[$stage['id']][($i)]['tingkat_kendala'];?>" data-t-id="<?= $stageMonths[$stage['id']][($i)]['id_mnv_fisik'];?>">
																<i class="fa fa-fw fa-exclamation"></i>
															</a>
														<?php }else{ ?>
														<a href="#" class="text-success" data-toggle="modal" data-target="#updateLaporan" data-moneyAc="<?=$moneysMonths[$i];?>" data-money="<?=$stageMonthsR[$stage['id']][($i)]['biaya']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=($i+1); ?>" data-type="stage" data-fisik="<?= $stageMonthsR[$stage['id']][($i)]['fisik'];?>" data-kendala="0" data-sub="2.<?=($no-1); ?>.<?=($no3-1); ?>" data-t-biaya="<?= $stageMonths[$stage['id']][($i)]['biaya'];?>" data-t-biayaP="<?= $stageMonths[$stage['id']][($i)]['biayaP'];?>" data-t-fisik="<?= $stageMonths[$stage['id']][($i)]['fisik_P'];?>" data-t-fisik_real="<?= $stageMonths[$stage['id']][($i)]['fisik'];?>" data-t-output="<?= $stageMonths[$stage['id']][($i)]['output'];?>" data-t-deskripsi="<?= $stageMonths[$stage['id']][($i)]['deskripsi'];?>" data-t-kendala="<?= $stageMonths[$stage['id']][($i)]['kendala'];?>" data-t-tingkat_kendala="<?= $stageMonths[$stage['id']][($i)]['tingkat_kendala'];?>" data-t-id="<?= $stageMonths[$stage['id']][($i)]['id_mnv_fisik'];?>">
																<i class="fa fa-fw fa-edit"></i>
															</a>
														<?php } ?>

													</td>
												
													<?php
												}else{
													?>
													<td class="text-center">
														<?php
															if(($i+2) < $this_month && ($stageMonthsR[$stage['id']][($i)]['fisik'] !=0 || $stageMonthsR[$stage['id']][($i)]['biaya'] != 0)){
														?>
														<a href="#" class="text-danger" data-toggle="modal" data-target="#addLaporan" data-moneyAc="<?=$moneysMonths[$i];?>" data-money="<?=$stageMonthsR[$stage['id']][($i)]['biaya']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=($i+1); ?>" data-type="stage" data-fisik="<?= $stageMonthsR[$stage['id']][($i)]['fisik'];?>" data-kendala="1" data-sub="2.<?=($no-1); ?>.<?=($no3-1); ?>">
															<i class="fa fa-fw fa-exclamation"></i>
														</a>
														<?php
															}else if(($stageMonthsR[$stage['id']][($i)]['fisik'] !=0 || $stageMonthsR[$stage['id']][($i)]['biaya'] != 0)){
														?>
														<a href="#" class="text-danger" data-toggle="modal" data-target="#addLaporan" data-moneyAc="<?=$moneysMonths[$i];?>" data-money="<?=$stageMonthsR[$stage['id']][($i)]['biaya']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=($i+1); ?>" data-type="stage" data-fisik="<?= $stageMonthsR[$stage['id']][($i)]['fisik'];?>" data-kendala="1" data-sub="2.<?=($no-1); ?>.<?=($no3-1); ?>">
																<i class="fa fa-fw fa-edit"></i>
															</a>
															<?php
														}else{
															?>
															<a href="#" class="text-secondary" data-toggle="modal" data-target="#addLaporan" data-moneyAc="<?=$moneysMonths[$i];?>" data-money="<?=$stageMonthsR[$stage['id']][($i)]['biaya']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=($i+1); ?>" data-type="stage" data-fisik="<?= $stageMonthsR[$stage['id']][($i)]['fisik'];?>" data-kendala="1" data-sub="2.<?=($no-1); ?>.<?=($no3-1); ?>">
																<i class="fa fa-fw fa-edit"></i>
															</a>
															<?php
														}
															?>
													</td>
												
													<?php
												}
											}
											?>
																				
										</tr>
											<?php }}} ?>															
										<?php }}} ?>															
										<tr>
											<td width="7px"><b>3.</b></td>
											<td colspan="3"><b>PELAPORAN</b>
											</td>
											<td><?=number_format($total[2],0,',','.');?></td>
											<td class="text-center"><?=round($totalP[2],2); ?></td>
											<td class="text-center"><?=round($totalF[2],2); ?></td>
											<?php for($i=0;$i<12;$i++){ ?>
												<td></td>
											<?php } ?>
																				
										</tr>
										<?php if(isset($allAct) != NULL){ $no=1; foreach($allAct as $act){if($act['parent'] == 'C'){?>
										<tr <?php if($actTotal[$act['id']]['hchild']!=0)echo 'class="text-muted"' ?>>
											<td width="7px"></td>
											<td width="7px">3.<?=$no++; ?></td>
											<td nowrap="" colspan="2"><?php echo $act['kegiatan'];?>
											</td>
											<td class=""><?=number_format($actTotal[$act['id']]['biaya'],0,',','.'); ?></td>
											<td class="text-center"><?=round($actTotal[$act['id']]['biayaP'],2);?></td>
											<td class="text-center"><?=round($actTotal[$act['id']]['fisik'],2); ?></td>

												<?php 

											for($i=1;$i<=12;$i++){
												if($actTotal[$act['id']]['hchild']==0){
													if(isset($actMonths[$act['id']][($i-1)]['fisik'])){
														// $actMonths[$act['id']][($i-1)]['biaya']
														?>
														
												<td class='text-center'>
													<?php
														if($actMonths[$act['id']][($i-1)]['biaya'] < (9/10)*$actMonthsR[$act['id']][($i-1)]['biaya']){
															echo "<font color='red'>";
														}else{
															echo "<font>";
														}
													?>
													<?= number_format($actMonths[$act['id']][($i-1)]['biaya'],0,',','.');?>
													</font>
													<b>(</b>
													<?php
														if($actMonths[$act['id']][($i-1)]['fisik'] < (9/10)*$actMonthsR[$act['id']][($i-1)]['fisik']){
															echo "<font color='red'>";
														}else{
															echo "<font>";
														}
													?>
													<?= round($actMonths[$act['id']][($i-1)]['fisik'],2);?>
													</font>
													<b>)</b>
													<?php if($actMonths[$act['id']][($i-1)]['tingkat_kendala'] > 0){ ?>
													<a href="#" class="text-success" data-toggle="modal" data-target="#updateLaporan" data-moneyAc="<?=$moneysMonths[$i-1];?>" data-money="<?=$actMonthsR[$act['id']][($i-1)]['biaya']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?= $actMonthsR[$act['id']][($i-1)]['fisik'];?>" data-kendala="1" data-sub="3.<?=($no-1); ?>" data-t-biaya="<?= $actMonths[$act['id']][($i-1)]['biaya'];?>" data-t-biayaP="<?= $actMonths[$act['id']][($i-1)]['biayaP'];?>" data-t-fisik="<?= $actMonths[$act['id']][($i-1)]['fisik_P'];?>" data-t-fisik_real="<?= $actMonths[$act['id']][($i-1)]['fisik'];?>" data-t-output="<?= $actMonths[$act['id']][($i-1)]['output'];?>" data-t-deskripsi="<?= $actMonths[$act['id']][($i-1)]['deskripsi'];?>" data-t-kendala="<?= $actMonths[$act['id']][($i-1)]['kendala'];?>" data-t-tingkat_kendala="<?= $actMonths[$act['id']][($i-1)]['tingkat_kendala'];?>" data-t-id="<?= $actMonths[$act['id']][($i-1)]['id_mnv_fisik'];?>">
															<i class="fa fa-fw fa-exclamation"></i>
														</a>
													<?php }else{ ?>
													<a href="#" class="text-success" data-toggle="modal" data-target="#updateLaporan" data-moneyAc="<?=$moneysMonths[$i-1];?>" data-money="<?=$actMonthsR[$act['id']][($i-1)]['biaya']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?= $actMonthsR[$act['id']][($i-1)]['fisik'];?>" data-kendala="0" data-sub="3.<?=($no-1); ?>" data-t-biaya="<?= $actMonths[$act['id']][($i-1)]['biaya'];?>" data-t-biayaP="<?= $actMonths[$act['id']][($i-1)]['biayaP'];?>" data-t-fisik="<?= $actMonths[$act['id']][($i-1)]['fisik_P'];?>" data-t-fisik_real="<?= $actMonths[$act['id']][($i-1)]['fisik'];?>" data-t-output="<?= $actMonths[$act['id']][($i-1)]['output'];?>" data-t-deskripsi="<?= $actMonths[$act['id']][($i-1)]['deskripsi'];?>" data-t-kendala="<?= $actMonths[$act['id']][($i-1)]['kendala'];?>" data-t-tingkat_kendala="<?= $actMonths[$act['id']][($i-1)]['tingkat_kendala'];?>" data-t-id="<?= $actMonths[$act['id']][($i-1)]['id_mnv_fisik'];?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
													<?php } ?>

												</td>

														<?php
													}else{
													
												?>
												<td class="text-center">
													<?php
														if(($i+1) < $this_month && ($actMonthsR[$act['id']][($i-1)]['fisik'] !=0 || $actMonthsR[$act['id']][($i-1)]['biaya'] != 0)){
													?>
													<a href="#" class="text-danger" data-toggle="modal" data-target="#addLaporan" data-moneyAc="<?=$moneysMonths[$i-1];?>" data-money="<?=$actMonthsR[$act['id']][($i-1)]['biaya']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?= $actMonthsR[$act['id']][($i-1)]['fisik'];?>" data-kendala="1" data-sub="3.<?=($no-1); ?>">
														<i class="fa fa-fw fa-exclamation"></i>
													</a>
													<?php
														}else if(($actMonthsR[$act['id']][($i-1)]['fisik'] !=0 || $actMonthsR[$act['id']][($i-1)]['biaya'] != 0)){
													?>
													<a href="#" class="text-danger" data-toggle="modal" data-target="#addLaporan" data-moneyAc="<?=$moneysMonths[$i-1];?>" data-money="<?=$actMonthsR[$act['id']][($i-1)]['biaya']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?= $actMonthsR[$act['id']][($i-1)]['fisik'];?>" data-kendala="0" data-sub="3.<?=($no-1); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
														<?php
													}else{
														?>
														<a href="#" class="text-secondary" data-toggle="modal" data-target="#addLaporan" data-moneyAc="<?=$moneysMonths[$i-1];?>" data-money="<?=$actMonthsR[$act['id']][($i-1)]['biaya']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?= $actMonthsR[$act['id']][($i-1)]['fisik'];?>" data-kendala="0" data-sub="3.<?=($no-1); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
														<?php
													}
														?>
												</td>
											<?php 
													}
												}else{
													echo "<td></td>";
												}
											} 
												?>
																				
										</tr>
											<?php if(isset($allStages) != NULL){ $no3=1;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){ ?>
										<tr>
											<td width="7px"></td>
											<td width="7px"></td>
											<td width="7px">3.<?=($no-1).".".$no3++; ?></td>
											<td nowrap=""><?php echo $stage['kegiatan'];?> 
											</td>
											<td><?=round($stageTotal[$stage['id']]['biaya'],2); ?></td>
											<td class="text-center"><?=round($stageTotal[$stage['id']]['biayaP'],2); ?></td>
											<td class="text-center"><?=round($stageTotal[$stage['id']]['fisik'],2); ?></td>
												<?php 
											for($i=0;$i<12;$i++){ 
												if(isset($stageMonths[$stage['id']][$i]['fisik'])){
													
													?>

													<td class='text-center'>
														<?php
															if($stageMonths[$stage['id']][($i)]['biaya'] < (9/10)*$stageMonthsR[$stage['id']][($i)]['biaya']){
																echo "<font color='red'>";
															}else{
																echo "<font>";
															}
														?>
														<?= number_format($stageMonths[$stage['id']][($i)]['biaya'],0,',','.');?>
														</font>
														<b>(</b>
														<?php
															if($stageMonths[$stage['id']][($i)]['fisik'] < (9/10)*$stageMonthsR[$stage['id']][($i)]['fisik']){
																echo "<font color='red'>";
															}else{
																echo "<font>";
															}
														?>
														<?= round($stageMonths[$stage['id']][($i)]['fisik'],2);?>
														</font>
														<b>)</b>
														<?php if($stageMonths[$stage['id']][($i)]['tingkat_kendala'] > 0){ ?>
														<a href="#" class="text-success" data-toggle="modal" data-target="#updateLaporan" data-moneyAc="<?=$moneysMonths[$i];?>" data-money="<?=$stageMonthsR[$stage['id']][($i)]['biaya']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=($i+1); ?>" data-type="stage" data-fisik="<?= $stageMonthsR[$stage['id']][($i)]['fisik'];?>" data-kendala="0" data-sub="3.<?=($no-1); ?>.<?=($no3-1); ?>" data-t-biaya="<?= $stageMonths[$stage['id']][($i)]['biaya'];?>" data-t-biayaP="<?= $stageMonths[$stage['id']][($i)]['biayaP'];?>" data-t-fisik="<?= $stageMonths[$stage['id']][($i)]['fisik_P'];?>" data-t-fisik_real="<?= $stageMonths[$stage['id']][($i)]['fisik'];?>" data-t-output="<?= $stageMonths[$stage['id']][($i)]['output'];?>" data-t-deskripsi="<?= $stageMonths[$stage['id']][($i)]['deskripsi'];?>" data-t-kendala="<?= $stageMonths[$stage['id']][($i)]['kendala'];?>" data-t-tingkat_kendala="<?= $stageMonths[$stage['id']][($i)]['tingkat_kendala'];?>" data-t-id="<?= $stageMonths[$stage['id']][($i)]['id_mnv_fisik'];?>">
																<i class="fa fa-fw fa-exclamation"></i>
															</a>
														<?php }else{ ?>
														<a href="#" class="text-success" data-toggle="modal" data-target="#updateLaporan" data-moneyAc="<?=$moneysMonths[$i];?>" data-money="<?=$stageMonthsR[$stage['id']][($i)]['biaya']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=($i+1); ?>" data-type="stage" data-fisik="<?= $stageMonthsR[$stage['id']][($i)]['fisik'];?>" data-kendala="0" data-sub="3.<?=($no-1); ?>.<?=($no3-1); ?>" data-t-biaya="<?= $stageMonths[$stage['id']][($i)]['biaya'];?>" data-t-biayaP="<?= $stageMonths[$stage['id']][($i)]['biayaP'];?>" data-t-fisik="<?= $stageMonths[$stage['id']][($i)]['fisik_P'];?>" data-t-fisik_real="<?= $stageMonths[$stage['id']][($i)]['fisik'];?>" data-t-output="<?= $stageMonths[$stage['id']][($i)]['output'];?>" data-t-deskripsi="<?= $stageMonths[$stage['id']][($i)]['deskripsi'];?>" data-t-kendala="<?= $stageMonths[$stage['id']][($i)]['kendala'];?>" data-t-tingkat_kendala="<?= $stageMonths[$stage['id']][($i)]['tingkat_kendala'];?>" data-t-id="<?= $stageMonths[$stage['id']][($i)]['id_mnv_fisik'];?>">
																<i class="fa fa-fw fa-edit"></i>
															</a>
														<?php } ?>

													</td>
												
													<?php
												}else{
													?>
													<td class="text-center">
														<?php
															if(($i+2) < $this_month && ($stageMonthsR[$stage['id']][($i)]['fisik'] !=0 || $stageMonthsR[$stage['id']][($i)]['biaya'] != 0)){
														?>
														<a href="#" class="text-danger" data-toggle="modal" data-target="#addLaporan" data-moneyAc="<?=$moneysMonths[$i];?>" data-money="<?=$stageMonthsR[$stage['id']][($i)]['biaya']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=($i+1); ?>" data-type="stage" data-fisik="<?= $stageMonthsR[$stage['id']][($i)]['fisik'];?>" data-kendala="1" data-sub="3.<?=($no-1); ?>.<?=($no3-1); ?>">
															<i class="fa fa-fw fa-exclamation"></i>
														</a>
														<?php
															}else if(($stageMonthsR[$stage['id']][($i)]['fisik'] !=0 || $stageMonthsR[$stage['id']][($i)]['biaya'] != 0)){
														?>
														<a href="#" class="text-danger" data-toggle="modal" data-target="#addLaporan" data-moneyAc="<?=$moneysMonths[$i];?>" data-money="<?=$stageMonthsR[$stage['id']][($i)]['biaya']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=($i+1); ?>" data-type="stage" data-fisik="<?= $stageMonthsR[$stage['id']][($i)]['fisik'];?>" data-kendala="1" data-sub="3.<?=($no-1); ?>.<?=($no3-1); ?>">
																<i class="fa fa-fw fa-edit"></i>
															</a>
															<?php
														}else{
															?>
															<a href="#" class="text-secondary" data-toggle="modal" data-target="#addLaporan" data-moneyAc="<?=$moneysMonths[$i];?>" data-money="<?=$stageMonthsR[$stage['id']][($i)]['biaya']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=($i+1); ?>" data-type="stage" data-fisik="<?= $stageMonthsR[$stage['id']][($i)]['fisik'];?>" data-kendala="1" data-sub="3.<?=($no-1); ?>.<?=($no3-1); ?>">
																<i class="fa fa-fw fa-edit"></i>
															</a>
															<?php
														}
															?>
													</td>
												
													<?php
												}
											}
											?>
													
																				
										</tr>
											<?php }}} ?>															
										<?php }}} ?>												
										<tr>
											<td colspan="4">Belum Terpenuhi</td>
											<td><font color="red" class='text-center'><?=number_format($sisa,0,',','.'); ?></font>
												<input type="hidden" id="sisaPagu" value="<?= $sisa; ?>" />
												<input type="hidden" id="sisaFisik" value="<?= $sisaFisik; ?>" />
												<input type="hidden" id="sisaMoneysP" value="<?= $sisaMoneysP; ?>" />
											</td>
											<td class="text-center"><font color="red"><?= round($sisaMoneysP,2);?></font></td>
											<td class="text-center"><font color="red"><?= round($sisaFisik,2);?> </font></td>
											<?php for($bulan=0;$bulan<12;$bulan++){ ?>
											<td></td>
											<?php } ?>
										</tr>
										<tr style="background-color: #d67c00;border-color: #ffb74d;color:#fff; font-weight: 400;">
											<td colspan="4" >Jumlah Rencana Keuangan</td>
											<td class='text-center'><?=number_format($moneysKumulatif,0,',','.'); ?></td>
											<td class='text-center'><?= round($moneysP,2); ?></td>
											<td class='text-center'><?= round($fisikP,2); ?></td>
											<?php for($i=0;$i<12;$i++){ 
												if($moneysMonths[($i)] == 0){
													echo "<td colspan='1' class='text-center'></td>";
												}else{
													echo "<td colspan='1' class='text-center'>".number_format($moneysMonths[$i],0,',','.')."</td>";
													
												}
											 } ?>	
										</tr>	
										<tr style="background-color: #ffb74d;border-color: #ffb74d;color:#fff; font-weight: 400;">
											<td colspan="7">Jumlah Kumulatif Rencana Keuangan</td>
											<?php for($i=0;$i<12;$i++){ 
												if($moneysMonthsKumulatif[($i)] == 0){
													echo "<td colspan='1' class='text-center'></td>";
												}else{
													echo "<td colspan='1' class='text-center'>".number_format($moneysMonthsKumulatif[$i],0,',','.')."</td>";
													
												}
											 } ?>											
										</tr>
										<tr style="background-color: #a1887f;border-color: #a1887f;color:#fff; font-weight: 400;">
											<td colspan="7">Persentase Rencana Keuangan</td>
											<?php for($i=0;$i<12;$i++){ 
												if($moneysMonthsP[($i)] == 0){
													echo "<td colspan='1' class='text-center'></td>";
												}else{
													echo "<td colspan='1' class='text-center'>".round($moneysMonthsP[$i],2)."</td>";
													
												}
											 } ?>										
										</tr>
										<tr style="background-color: #90a4ae;border-color: #90a4ae;color:#fff; font-weight: 400;">
											<td colspan="7">Persentase Kumulatif Rencana Keuangan</td>
											<?php for($i=0;$i<12;$i++){ 
												if($moneysMonthsKumulatifP[($i)] == 0){
													echo "<td colspan='1' class='text-center'></td>";
												}else{
													echo "<td colspan='1' class='text-center'>".round($moneysMonthsKumulatifP[$i],2)."</td>";
													
												}
											 } ?>											
										</tr>
										<tr style="background-color: #999;border-color: #999;color:#fff; font-weight: 400;">
											<td colspan="7">Persentase Rencana Fisik</td>
											<?php for($i=0;$i<12;$i++){ 
												if($fisikMonths[($i)] == 0){
													echo "<td colspan='1' class='text-center'></td>";
												}else{
													echo "<td colspan='1' class='text-center'>".round($fisikMonths[$i],2)."</td>";
													
												}
											 } ?>											
										</tr>
										<tr style="background-color: #999;border-color: #232323;color:#fff; font-weight: 400;">
											<td colspan="7">Persentase Kumulatif Rencana Fisik</td>
											<?php for($i=0;$i<12;$i++){ 
												if($fisikMonthsKumulatif[($i)] == 0){
													echo "<td colspan='1' class='text-center'></td>";
												}else{
													echo "<td colspan='1' class='text-center'>".round($fisikMonthsKumulatif[$i],2)."</td>";
													
												}
											 } ?>											
										</tr>
									</tbody>	
								</table>
							</div>
						</div><!-- .animated -->
				</div><!-- .content -->


		</div><!-- /#right-panel -->


				<div class="modal fade" id="addLaporan" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-md" role="document">
						<div class="modal-content">
								<div class="modal-header">
										<h5 class="modal-title text-center" id="largeModalLabel">Rincian Perkembangan</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
										</button>
								</div>
								<div class="modal-body">
										<?php echo form_open('Monev/submit_fisik'); ?>
										<div class="row">
											<div class="col-sm-8">
												<h5>Bulan: <b><i id="bulanItem" style="font-style: normal;"> </i></b></h5>
											</div>
											<div class="col-md-12" style="margin-top: 20px;">
												<div class="form-group">
													<label class=" form-control-label">Biaya yang dikeluarkan</label>
													<div class="input-group">
														<input name="biaya" id="biayaA" type="number" min="0" step="any" onchange="setBiayaPA()" class="form-control" required>
														<input name="biayaP" id="biayaPA" type="hidden" min="0" step="any" class="form-control" required>
														<button type="button" class="btn btn-info" onclick="setMaxBiayaA()">Set Sesuai Perencanaan</button>
													</div>
													<small class="form-text text-muted">Target perencanaan: <font id="target_biaya" style="bold"></font></small>
												</div>
												<div class="form-group">
													<label class=" form-control-label">Presentase Fisik</label>
													<div class="input-group">
														<input name="fisik" id="fisikA" type="number" step="any" onchange="checkRealF()" class="form-control">
													</div>
													<small class="form-text text-muted">Skala kumulatif 0 - 100 untuk kegiatan <font id="subkegiatanA" style="bold"></font>, konversi persentase sesungguhnya yaitu:</small>
													<div class="input-group">
														<input name="fisik_real" id="fisik_realA" type="number" step="any" class="form-control" required readonly>
														<button type="button" class="btn btn-info" onclick="setMaxFisikA()">Set Sesuai Perencanaan</button>
													</div>
													<small class="form-text text-muted">Target perencanaan: <font id="target_fisik" style="bold"></font></small>
												</div>
												<div class="form-group">
													<label class=" form-control-label">Keluaran</label>
													<div class="input-group">
														<input name="output" type="text" class="form-control">
													</div>
													<small class="form-text text-muted">Output merupakan luaran dari tahapan</small>
												</div>												
												<div class="form-group">
													<label class=" form-control-label">Deskripsi</label>
													<div class="input-group">
														<textarea class="form-control" name="deskripsi" rows=10></textarea>
													</div>
													<small class="form-text text-muted">Uraikan secara singkat luaran yang dihasilkan pada tahapan ini</small>
												</div>
												<div class="form-group" id="kendalaL" style="display:block">
													<label class=" form-control-label">Kendala</label>
													<small class="form-text text-muted">Uraikan secara singkat kendala yang terjadi, form ini muncul jika masa pengisian terlambat, atau (biaya pengeluaran atau fisik) lebih kecil dari 90% nilai perencanaan</small>
													<div class="input-group">
														<textarea class="form-control" name="kendala" id="kendalaText" value="-" rows=7 required>-</textarea>
													</div>
													<div class="input-group">
														<input name="tingkat_kendala" required type="radio" class="form-control" value=1 >sangat rendah</input>
														<input name="tingkat_kendala" type="radio" class="form-control" value=2>rendah</input>
														<input name="tingkat_kendala" type="radio" class="form-control" value=3>sedang</input>
														<input name="tingkat_kendala" type="radio" class="form-control" value=4>tinggi</input>
														<input name="tingkat_kendala" type="radio" class="form-control" value=5>sangat tinggi</input>
													</div>
												</div>
												<div class="form-group" style="display:none">
													<div class="input-group" style="font-size:8pt;">
														<input name="tingkat_kendala" id="kendalaZero" type="radio" class="form-control" value=0 checked>tidak ada kendala</input>
														
													</div>
												</div>
											</div>
										</div>

								</div>
								<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<input type="hidden" name="user_id" value="<?=$this->session->userdata('id'); ?>">
										<input type="hidden" name="id_kegiatan" id="id_kegiatan" value="<?=$idk; ?>">
										<input type="hidden" name="id_rmp" value="<?=$row['id']; ?>">
										<input type="hidden" name="month" id="month" value="">
										<input type="hidden" name="kendala_id" id="kendala_id" value="0">
										<input type="hidden" name="type" id="type" value="0">
										<input type="hidden" name="id_refer" id="id_refer" value="0">
										<input type="hidden" name="fisik_acuan" id="fisik_acuan" value="0">
										<input type="hidden" name="biaya_acuan" id="biaya_acuan" value="0">
										<input type="hidden" name="submit" value="0"/>
										<button type="submit" class="btn btn-primary"
											<i class="fa fa-fw fa-dot-circle-o"></i> Submit
										</button>
								</div>
								<?php echo form_close(); ?>
						</div>
				</div>

				</div>

				
				<div class="modal fade" id="updateLaporan" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-md" role="document">
						<div class="modal-content">
								<div class="modal-header">
										<h5 class="modal-title text-center" id="largeModalLabel">Rincian Perkembangan</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
										</button>
								</div>
								<div class="modal-body">
										<?php echo form_open('Monev/submit_fisik'); ?>
										<div class="row">
											<div class="col-sm-8">
												<h5>Bulan: <b><i id="bulanItemU" style="font-style: normal;"> </i></b></h5>
											</div>
											<div class="col-md-12" style="margin-top: 20px;">
												<div class="form-group">
													<label class=" form-control-label">Biaya yang dikeluarkan</label>
													<div class="input-group">
														<input name="biaya" id="biayaU" type="number" min="0" step="any" onchange="setBiayaPU()" class="form-control" required>
														<input name="biayaP" id="biayaPU" type="hidden" min="0" step="any" class="form-control" required>
														<button type="button" class="btn btn-info" onclick="setMaxBiayaU()">Set Sesuai Perencanaan</button>
													</div>
													<small class="form-text text-muted">Target perencanaan: <font id="target_biayaU" style="bold"></font></small>
												</div>
												<div class="form-group">
													<label class=" form-control-label">Presentase Fisik</label>
													<div class="input-group">
														<input name="fisik" id="fisikU" type="number" step="any" onchange="checkRealFU()" class="form-control">
													</div>
													<small class="form-text text-muted">Skala kumulatif 0 - 100 untuk kegiatan <font id="subkegiatanU" style="bold"></font>, konversi persentase sesungguhnya yaitu:</small>
													<div class="input-group">
														<input name="fisik_real" id="fisik_realU" type="number" step="any" class="form-control" required readonly>
														<button type="button" class="btn btn-info" onclick="setMaxFisikU()">Set Sesuai Perencanaan</button>
													</div>
													<small class="form-text text-muted">Target perencanaan: <font id="target_fisikU" style="bold"></font></small>
												</div>
												<div class="form-group">
													<label class=" form-control-label">Keluaran</label>
													<div class="input-group">
														<input name="output" id="outputU" type="text" class="form-control">
													</div>
													<small class="form-text text-muted">Output merupakan luaran dari tahapan</small>
												</div>												
												<div class="form-group">
													<label class=" form-control-label">Deskripsi</label>
													<div class="input-group">
														<textarea class="form-control" name="deskripsi" id="deskripsiU" rows=10></textarea>
													</div>
													<small class="form-text text-muted">Uraikan secara singkat luaran yang dihasilkan pada tahapan ini</small>
												</div>
												<div class="form-group" id="kendalaU" style="display:block">
													<label class=" form-control-label">Kendala</label>
													<small class="form-text text-muted">Uraikan secara singkat kendala yang terjadi, form ini muncul jika masa pengisian terlambat, atau (biaya pengeluaran atau fisik) lebih kecil dari 90% nilai perencanaan</small>
													<div class="input-group">
														<textarea class="form-control" name="kendala" id="kendalaTextU" value="-" rows=7 required>-</textarea>
													</div>
													<div class="input-group">
														<input name="tingkat_kendala" required type="radio" class="form-control" value=1 >sangat rendah</input>
														<input name="tingkat_kendala" type="radio" class="form-control" value=2>rendah</input>
														<input name="tingkat_kendala" type="radio" class="form-control" value=3>sedang</input>
														<input name="tingkat_kendala" type="radio" class="form-control" value=4>tinggi</input>
														<input name="tingkat_kendala" type="radio" class="form-control" value=5>sangat tinggi</input>
													</div>
												</div>
												<div class="form-group" style="display:none">
													<div class="input-group" style="font-size:8pt;">
														<input name="tingkat_kendala" id="kendalaZeroU" type="radio" class="form-control" value=0 checked>tidak ada kendala</input>
														
													</div>
												</div>
											</div>
										</div>

								</div>
								<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<input type="hidden" name="user_id" value="<?=$this->session->userdata('id'); ?>">
										<input type="hidden" name="id_kegiatan" id="id_kegiatanU" value="<?=$idk; ?>">
										<input type="hidden" name="id_rmp" value="<?=$row['id']; ?>">
										<input type="hidden" name="month" id="monthU" value="">
										<input type="hidden" name="kendala_id" id="kendala_idU" value="0">
										<input type="hidden" name="type" id="typeU" value="0">
										<input type="hidden" name="id_refer" id="id_referU" value="0">
										<input type="hidden" name="fisik_acuan" id="fisik_acuanU" value="0">
										<input type="hidden" name="biaya_acuan" id="biaya_acuanU" value="0">
										<input type="hidden" name="id_mnv_fisik" id="id_mnv_fisik" value="0"/>
										<input type="hidden" name="update" value="0"/>
										<button type="submit" class="btn btn-primary"
											<i class="fa fa-fw fa-dot-circle-o"></i> Update
										</button>
								</div>
								<?php echo form_close(); ?>
						</div>
				</div>

				</div>

				<div class="modal fade" id="addKeuangan" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
								<div class="modal-header">
										<h5 class="modal-title text-center" id="largeModalLabel">Rincian Perkembangan</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
										</button>
								</div>
								<div class="modal-body">
										<?php echo form_open('Monev/submit_keuangan'); ?>
										<div class="row">
											<div class="col-sm-8">
												<h5>Bulan: <b><i id="bulanItemAK" style="font-style: normal;"> </i></b></h5>
											</div>
											
											<br>
												
										</div>
										<div class="form-group">
											<label class=" form-control-label">Anggaran Realisasi</label>
											<div class="input-group">
										    	<div class="input-group-prepend">
										      		<div class="input-group-text"><i class="fa fa-money fa-fw"></i></div>
											    </div>
											    <input type="number" min=0 class="form-control" name="jml_uang" id="jml_uangAK" onchange="checkTK()"  required>
											    <button type="button" class="btn btn-info" onclick="setMaxRencana()">Set Max Sesuai Rencana</button>
										    <!-- Hidden Here -->
			    
										  </div>											
										  <small class="form-text text-muted">Total Rencana Anggaran: Rp.<i id="paguMonth" style="font-style: normal;color:green;"> </i> </small>
										</div>
										<div class="form-group" id="kendalaAK" style="display: none;">
											<label class=" form-control-label">Kendala</label>
											<div class="input-group">
										    	
											    <textarea class="form-control" name="kendala" id="kendalaAKF" value="-" rows=7 required>-</textarea>
											    
										    <!-- Hidden Here -->
			    
										  </div>											
										  <small class="form-text text-muted" color="red">Kendala harus terisi, karena nilai realisasi kurang dari 90% nilai perencanaan </small>
										</div>
								</div>
								<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<input type="hidden" name="user_id" value="<?=$this->session->userdata('id'); ?>">
										<input type="hidden" name="id_kegiatan" value="<?=$idk; ?>">
										<input type="hidden" name="month" id="monthAK" value="">
										<input type="hidden" name="pagu" value="<?= $row['pagu']; ?>">
										<input type="hidden" id="max_rencanaAK" value="">
										<input type="hidden" name="submit" value="0"/>
										<button type="submit" class="btn btn-primary">
											<i class="fa fa-fw fa-dot-circle-o"></i> Submit
										</button>
								</div>
								<?php echo form_close(); ?>
						</div>
				</div>

				</div>

				<div class="modal fade" id="updateKeuangan" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
								<div class="modal-header">
										<h5 class="modal-title text-center" id="largeModalLabel">Rincian Perkembangan</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
										</button>
								</div>
								<div class="modal-body">
										<?php echo form_open('Monev/submit_keuangan'); ?>
										<div class="row">
											<div class="col-sm-8">
												<h5>Bulan: <b><i id="bulanItemUK" style="font-style: normal;"> </i></b></h5>
											</div>
											
											<br>
												
										</div>
										<div class="form-group">
											<label class=" form-control-label">Anggaran Realisasi</label>
											<div class="input-group">
										    	<div class="input-group-prepend">
										      		<div class="input-group-text"><i class="fa fa-money fa-fw"></i></div>
											    </div>
											    <input type="number" min=0 class="form-control" name="jml_uang" id="jml_uangUK" onchange="checkUTK()"  required>
											    <button type="button" class="btn btn-info" onclick="setMaxRencanaU()">Set Max Sesuai Rencana</button>
										    <!-- Hidden Here -->
			    
										  </div>											
										  <small class="form-text text-muted">Total Rencana Anggaran: Rp.<i id="paguMonthUK" style="font-style: normal;color:green;"> </i> </small>
										</div>
										<div class="form-group" id="kendalaUK" style="display: none;">
											<label class=" form-control-label">Kendala</label>
											<div class="input-group">
										    	
											    <textarea class="form-control" name="kendala" id="kendalaUKF" value="-" rows=7 required>-</textarea>
											    
										    <!-- Hidden Here -->
			    
										  </div>											
										  <small class="form-text text-muted" color="red">Kendala harus terisi, karena nilai realisasi kurang dari 90% nilai perencanaan </small>
										</div>
								</div>
								<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<input type="hidden" name="user_id" value="<?=$this->session->userdata('id'); ?>">
										<input type="hidden" name="id_kegiatan" value="<?=$idk; ?>">
										<input type="hidden" name="month" id="monthUK" value="">
										<input type="hidden" name="pagu" value="<?= $row['pagu']; ?>">
										<input type="hidden" id="max_rencanaUK" value="">
										<input type="hidden" name="id_mnv_keuangan" id="id_mnv_keuanganUK" value="">
										<input type="hidden" name="update" value="0"/>
										<button type="submit" class="btn btn-primary">
											<i class="fa fa-fw fa-dot-circle-o"></i> Update
										</button>
								</div>
								<?php echo form_close(); ?>
						</div>
				</div>

				</div>
		</div><!-- /#right-panel -->