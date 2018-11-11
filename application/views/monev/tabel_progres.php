				
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
													<!-- <?= round($actMonths[$act['id']][($i-1)]['fisik'],2);?> -->
													<a href="#" class="text-success" data-toggle="modal" data-target="#updateLaporan" data-money="<?=$act['anggaran']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?=round(($act['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
													<a href="#" class="text-success" data-toggle="modal" data-target="#updateKendala" data-money="<?=$act['anggaran']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?=round(($act['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-exclamation"></i>
														</a>

												</td>

														<?php
													}else{
													
												?>
												<td class="text-center">
													<?php
														if($i < $this_month && ($actMonthsR[$act['id']][($i-1)]['fisik'] !=0 || $actMonthsR[$act['id']][($i-1)]['biaya'] != 0)){
													?>
													<a href="#" class="text-danger" data-toggle="modal" data-target="#addLaporan" data-money="<?=$moneysMonths[($i-1)]; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?= $actMonthsR[$act['id']][($i-1)]['fisik'];?>" data-kendala=1>
														<i class="fa fa-fw fa-exclamation"></i>
													</a>
													<?php
														}else if(($actMonthsR[$act['id']][($i-1)]['fisik'] !=0 || $actMonthsR[$act['id']][($i-1)]['biaya'] != 0)){
													?>
													<a href="#" class="text-danger" data-toggle="modal" data-target="#addLaporan" data-money="<?=$act['anggaran']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?=round(($act['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
														<?php
													}else{
														?>
														<a href="#" class="text-secondary" data-toggle="modal" data-target="#addLaporan" data-money="<?=$act['anggaran']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?=round(($act['anggaran']/$row['pagu'])*100,2); ?>">
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
													// echo "<td class='text-center'>".number_format($stageMonths[$stage['id']][$i]['biaya'],0,',','.');
													// $stageMonths[$stage['id']][$i]['fisik'],2);
													?>
												<td>
													<a href="#" class="text-success" data-toggle="modal" data-target="#updateKendala" data-money="<?=$stage['anggaran']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=$i; ?>" data-type="stage" data-fisik="<?=round(($stage['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-exclamation"></i>
														</a>
														<a href="#" class="text-success" data-toggle="modal" data-target="#updateLaporan" data-money="<?=$stage['anggaran']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=$i; ?>" data-type="stage" data-fisik="<?=round(($stage['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
													<?php
												}else{
													?>
												<td class="text-center">
													<a href="#" class="text-danger" data-toggle="modal" data-target="#addKendala" data-money="<?=$stage['anggaran']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=$i; ?>" data-type="stage" data-fisik="<?=round(($stage['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-exclamation"></i>
														</a>
													<a href="#" class="text-danger" data-toggle="modal" data-target="#addLaporan" data-money="<?=$stage['anggaran']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=$i; ?>" data-type="stage" data-fisik="<?=round(($stage['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
													<a href="#" class="text-secondary" data-toggle="modal" data-target="#addLaporan" data-money="<?=$stage['anggaran']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=$i; ?>" data-type="stage" data-fisik="<?=round(($stage['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
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
													<!-- <?= round($actMonths[$act['id']][($i-1)]['fisik'],2);?> -->
													<a href="#" class="text-success" data-toggle="modal" data-target="#updateLaporan" data-money="<?=$act['anggaran']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?=round(($act['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
													<a href="#" class="text-success" data-toggle="modal" data-target="#updateKendala" data-money="<?=$act['anggaran']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?=round(($act['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-exclamation"></i>
														</a>

												</td>

														<?php
													}else{
													
												?>
												<td class="text-center">
													<a href="#" class="text-danger" data-toggle="modal" data-target="#addKendala" data-money="<?=$act['anggaran']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?=round(($act['anggaran']/$row['pagu'])*100,2); ?>">
														<i class="fa fa-fw fa-exclamation"></i>
													</a>
													<a href="#" class="text-danger" data-toggle="modal" data-target="#addLaporan" data-money="<?=$act['anggaran']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?=round(($act['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
														<a href="#" class="text-secondary" data-toggle="modal" data-target="#addLaporan" data-money="<?=$act['anggaran']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?=round(($act['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
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
													// echo "<td class='text-center'>".number_format($stageMonths[$stage['id']][$i]['biaya'],0,',','.');
													// $stageMonths[$stage['id']][$i]['fisik'],2);
													?>
												<td>
													<a href="#" class="text-success" data-toggle="modal" data-target="#updateKendala" data-money="<?=$stage['anggaran']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=$i; ?>" data-type="stage" data-fisik="<?=round(($stage['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-exclamation"></i>
														</a>
														<a href="#" class="text-success" data-toggle="modal" data-target="#updateLaporan" data-money="<?=$stage['anggaran']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=$i; ?>" data-type="stage" data-fisik="<?=round(($stage['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
													<?php
												}else{
													?>
												<td class="text-center">
													<a href="#" class="text-danger" data-toggle="modal" data-target="#addKendala" data-money="<?=$stage['anggaran']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=$i; ?>" data-type="stage" data-fisik="<?=round(($stage['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-exclamation"></i>
														</a>
													<a href="#" class="text-danger" data-toggle="modal" data-target="#addLaporan" data-money="<?=$stage['anggaran']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=$i; ?>" data-type="stage" data-fisik="<?=round(($stage['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
													<a href="#" class="text-secondary" data-toggle="modal" data-target="#addLaporan" data-money="<?=$stage['anggaran']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=$i; ?>" data-type="stage" data-fisik="<?=round(($stage['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
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
													<!-- <?= round($actMonths[$act['id']][($i-1)]['fisik'],2);?> -->
													<a href="#" class="text-success" data-toggle="modal" data-target="#updateLaporan" data-money="<?=$act['anggaran']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?=round(($act['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
													<a href="#" class="text-success" data-toggle="modal" data-target="#updateKendala" data-money="<?=$act['anggaran']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?=round(($act['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-exclamation"></i>
														</a>

												</td>

														<?php
													}else{
													
												?>
												<td class="text-center">
													<a href="#" class="text-danger" data-toggle="modal" data-target="#addKendala" data-money="<?=$act['anggaran']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?=round(($act['anggaran']/$row['pagu'])*100,2); ?>">
														<i class="fa fa-fw fa-exclamation"></i>
													</a>
													<a href="#" class="text-danger" data-toggle="modal" data-target="#addLaporan" data-money="<?=$act['anggaran']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?=round(($act['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
														<a href="#" class="text-secondary" data-toggle="modal" data-target="#addLaporan" data-money="<?=$act['anggaran']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?=round(($act['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
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
													// echo "<td class='text-center'>".number_format($stageMonths[$stage['id']][$i]['biaya'],0,',','.');
													// $stageMonths[$stage['id']][$i]['fisik'],2);
													?>
												<td>
													<a href="#" class="text-success" data-toggle="modal" data-target="#updateKendala" data-money="<?=$stage['anggaran']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=$i; ?>" data-type="stage" data-fisik="<?=round(($stage['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-exclamation"></i>
														</a>
														<a href="#" class="text-success" data-toggle="modal" data-target="#updateLaporan" data-money="<?=$stage['anggaran']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=$i; ?>" data-type="stage" data-fisik="<?=round(($stage['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
													<?php
												}else{
													?>
												<td class="text-center">
													<a href="#" class="text-danger" data-toggle="modal" data-target="#addKendala" data-money="<?=$stage['anggaran']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=$i; ?>" data-type="stage" data-fisik="<?=round(($stage['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-exclamation"></i>
														</a>
													<a href="#" class="text-danger" data-toggle="modal" data-target="#addLaporan" data-money="<?=$stage['anggaran']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=$i; ?>" data-type="stage" data-fisik="<?=round(($stage['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
													<a href="#" class="text-secondary" data-toggle="modal" data-target="#addLaporan" data-money="<?=$stage['anggaran']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=$i; ?>" data-type="stage" data-fisik="<?=round(($stage['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
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
													<label class=" form-control-label">Presentase Fisik</label>
													<div class="input-group">
														<input name="fisik" type="number" step="any" class="form-control">
													</div>
													<small class="form-text text-muted">Skala kumulatif 0 - 100 untuk kegiatan <font id="subkegiatanA" style="bold"></font>, konversi persentase sesungguhnya yaitu:</small>
													<div class="input-group">
														<input name="fisik_real" type="number" step="any" class="form-control" required readonly>
													</div>
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
													<div class="input-group">
														<textarea class="form-control" name="kendala" value="-" rows=7 required>-</textarea>
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
														<input name="tingkat_kendala" type="radio" class="form-control" value=0 checked>tidak ada kendala</input>
														
													</div>
												</div>
											</div>
										</div>

								</div>
								<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<input type="hidden" name="user_id" value="<?=$this->session->userdata('id'); ?>">
										<input type="hidden" name="id_kegiatan" value="<?=$idk; ?>">
										<input type="hidden" name="id_rmp" value="<?=$row['id']; ?>">
										<input type="hidden" name="minggu" id="minggu" value="0">
										<input type="hidden" name="type" id="type" value="0">
										<input type="hidden" name="id_refer" id="id_refer" value="0">
										<input type="hidden" name="fisik_real" id="fisik_real" value="0">
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
												<h5>Bulan: <b><i id="bulanItemF" style="font-style: normal;"> </i></b></h5>
											</div>
											<div class="col-sm-4">
												<h5>Minggu ke-<i id="mingguItemF" style="font-style: normal;"> </i></b></h5>
											</div>
											<div class="col-md-12" style="margin-top: 20px;">
												<div class="form-group">
													<label class=" form-control-label">Presentase Fisik</label>
													<div class="input-group">
														<input name="fisikF" id="fisikF" type="number" class="form-control" placeholder="50">
													</div>
													<small class="form-text text-muted">Skala kumulatif 0 - 100</small>
												</div>
												<div class="form-group">
													<label class=" form-control-label">Keluaran</label>
													<div class="input-group">
														<input name="outputF" type="text" id="outputF" class="form-control">
													</div>
													<small class="form-text text-muted">Output merupakan luaran dari tahapan</small>
												</div>												
												<div class="form-group">
													<label class=" form-control-label">Deskripsi</label>
													<div class="input-group">
														<textarea class="form-control" name="deskripsiF" id="deskripsiF" rows=10></textarea>
													</div>
													<small class="form-text text-muted">Uraikan secara singkat luaran yang dihasilkan pada tahapan ini</small>
												</div>
											</div>
										</div>
								</div>
								<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<input type="hidden" name="user_id" value="<?=$this->session->userdata('id'); ?>">
										<input type="hidden" name="id_kegiatan" value="<?=$id_kegiatan; ?>">
										<input type="hidden" name="id_rmp" value="<?=$row['id']; ?>">
										<input type="hidden" name="mingguF" id="mingguF" value="0">
										<input type="hidden" name="typeF" id="typeF" value="0">
										<input type="hidden" name="id_referF" id="id_referF" value="0">
										
										<input type="hidden" name="id_mnv_fisik" id="id_mnv_fisik" value="0">
										<input type="hidden" name="fisik_realF" id="fisik_realF" value="0">
										<input type="hidden" name="update" value="0"/>
										<button type="submit" class="btn btn-primary"
											<i class="fa fa-fw fa-dot-circle-o"></i> Edit
										</button>
								</div>
								<?php echo form_close(); ?>
						</div>
				</div>

				</div>

				<div class="modal fade" id="updateKendala" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
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
												<h5>Bulan: <b><i id="bulanItemKk" style="font-style: normal;"> </i></b></h5>
											</div>
											<div class="col-sm-4">
												<h5>Minggu ke-<i id="mingguItemKk" style="font-style: normal;"> </i></b></h5>
											</div>
											<div class="col-md-12" style="margin-top: 20px;">
												<div class="form-group">
													<label class=" form-control-label">Presentase Fisik</label>
													<div class="input-group">
														<input name="fisikF" id="fisikKk" type="number" class="form-control" placeholder="50">
													</div>
													<small class="form-text text-muted">Skala kumulatif 0 - 100</small>
												</div>
												<div class="form-group">
													<label class=" form-control-label">Keluaran</label>
													<div class="input-group">
														<input name="outputF" type="text" id="outputKk" class="form-control">
													</div>
													<small class="form-text text-muted">Output merupakan luaran dari tahapan</small>
												</div>												
												<div class="form-group">
													<label class=" form-control-label">Deskripsi</label>
													<div class="input-group">
														<textarea class="form-control" name="deskripsiF" id="deskripsiKk" rows=10></textarea>
													</div>
													<small class="form-text text-muted">Uraikan secara singkat luaran yang dihasilkan pada tahapan ini</small>
												</div>
												<div class="form-group">
													<label class=" form-control-label">Kendala</label>
													<div class="input-group">
														<textarea class="form-control" name="kendalaF" id="kendalaKk" rows=7></textarea>
													</div>
													
												</div>
												<div class="form-group">
													<div class="input-group" style="font-size:8pt;">
														<input name="tingkat_kendalaF" id="tingkat_kendalaKk" type="radio" class="form-control" value=0 checked>tidak ada kendala</input>
														<input name="tingkat_kendalaF" id="tingkat_kendalaKk" type="radio" class="form-control" value=1>sangat rendah</input>
														<input name="tingkat_kendalaF" id="tingkat_kendalaKk" type="radio" class="form-control" value=2>rendah</input>
														<input name="tingkat_kendalaF" id="tingkat_kendalaKk" type="radio" class="form-control" value=3>sedang</input>
														<input name="tingkat_kendalaF" id="tingkat_kendalaKk" type="radio" class="form-control" value=4>tinggi</input>
														<input name="tingkat_kendalaF" id="tingkat_kendalaKk" type="radio" class="form-control" value=5>sangat tinggi</input>
													</div>
													<small class="form-text text-muted">Isi hanya jika terdapat kendala dalam satu pekan</small>
												</div>
											</div>
										</div>
								</div>
								<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<input type="hidden" name="user_id" value="<?=$this->session->userdata('id'); ?>">
										<input type="hidden" name="id_kegiatan" value="<?=$id_kegiatan; ?>">
										<input type="hidden" name="id_rmp" value="<?=$row['id']; ?>">
										<input type="hidden" name="minggu" id="mingguKk" value="0">
										<input type="hidden" name="typeF" id="typeKk" value="0">
										<input type="hidden" name="id_referF" id="id_referKk" value="0">
										
										<input type="hidden" name="id_mnv_fisik" id="id_mnv_fisikKk" value="0">
										<input type="hidden" name="fisik_realF" id="fisik_realKk" value="0">
										<input type="hidden" name="update" value="0"/>
										<button type="submit" class="btn btn-primary"
											<i class="fa fa-fw fa-dot-circle-o"></i> Edit
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