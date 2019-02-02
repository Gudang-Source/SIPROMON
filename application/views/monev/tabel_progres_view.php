
				<div class="breadcrumbs">
						<div class="col-sm-4">
								<div class="page-header float-left">
										<div class="page-title">
												<h1>Tabel Realisasi Kegiatan<br><?=$row['judul']; ?></h1>
												
										</div>
								</div>
						</div>
						<div class="col-sm-4">
							<table>
								<tr>
									<th>|</th>
									<th colspan=13 class='text-center'>Kendala yang terjadi dalam satu bulan</th>
									<th>|</th>
								</tr>
								<tr>
									<td>|</td>
									<td class='text-center' bgcolor="#ffffff">Tidak Ada kendala</td>
									<td>|</td>
									<td class='text-center' bgcolor='#8cffef'>Sangat Rendah</td>
									<td>|</td>
									<td class='text-center' bgcolor='#00ffbf'>Rendah</td>
									<td>|</td>
									<td class='text-center' bgcolor='#fff200'>Sedang</td>
									<td>|</td>
									<td class='text-center' bgcolor='#ff7700'>Tinggi</td>
									<td>|</td>
									<td class='text-center' bgcolor='#ff0000'>Sangat Tinggi</td>
									<td>|</td>
									<td class='text-center' bgcolor='#8c9199'>Tidak Laporan</td>
									<td>|</td>

													
								</tr>
							</table>
						</div>
						<div class="col-sm-4">
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
											<td>
												
												<?=number_format($moneysTotalK,0,',','.'); ?>

												<input type="hidden" id="pagu" value="<?= $row['pagu']; ?>"/></td>
											<td class="text-center">
											
											<?= round($moneysTotalP,2);?>
											</td>
											<td></td>
											<?php for($bulan=0;$bulan<12;$bulan++){ ?>
												<?php if($moneysMonths[$bulan] == 'x' && $moneysMonthsR[$bulan] != 0){ 
											echo '<td class="text-center" style="background-color:#8c9199;">';
													?>
												
												
												<?php }else if($moneysMonths[$bulan] 
													!= 'x'){
											echo '<td class="text-center">';
														if($moneysMonths[$bulan] < (9/10)*$moneysMonthsR[$bulan]){
														?>
														
														<a href="#" data-toggle="modal" data-target="#viewKendala" data-kendala="<?= $moneysMonthsKend[$bulan];?>" >
															<i class="fa fa-fw fa-eye"></i>
														</a>
														<font color ="red"><?= number_format($moneysMonths[$bulan],0,',','.'); ?></font>
														<?php
															}else{
														?>
														<font><?= number_format($moneysMonths[$bulan],0,',','.'); ?></font>
														<?php } ?>
													
													<?php }else{ ?>
											<td class="text-center">

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
														if($actMonths[$act['id']][($i-1)]['tingkat_kendala'] > 0){ 
															?>
															
															<?php
															if($actMonths[$act['id']][($i-1)]['tingkat_kendala'] == 1){
																?>
														<td class='text-center' bgcolor='#8cffef'>
															
																<?php
															}else if($actMonths[$act['id']][($i-1)]['tingkat_kendala'] == 2){
																?>
														<td class='text-center' bgcolor='#00ffbf'>
																<?php
															}else if($actMonths[$act['id']][($i-1)]['tingkat_kendala'] == 3){
																?>
														<td class='text-center' bgcolor='#fff200'>
																<i class="fa fa-fw fa-eye"></i>
																<?php
															}else if($actMonths[$act['id']][($i-1)]['tingkat_kendala'] == 4){
																?>
														<td class='text-center' bgcolor='#ff7700'>
																<?php
															}else if($actMonths[$act['id']][($i-1)]['tingkat_kendala'] == 5){
																?>
														<td class='text-center' bgcolor='#ff0000'>
																<?php
															}
														?>
														<a href="#" data-toggle="modal" data-target="#viewKendala" data-kendala="<?= $actMonths[$act['id']][($i-1)]['kendala'];?>" >
															<i class="fa fa-fw fa-eye"></i>
														</a>
													<?php }else{ ?>
														<td class='text-center'>
													
													<?php }

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

												</td>

														<?php
													}else{
													
														if(($i+1) < $this_month && ($actMonthsR[$act['id']][($i-1)]['fisik'] !=0 || $actMonthsR[$act['id']][($i-1)]['biaya'] != 0)){
													?>
												<td class='text-center' bgcolor='#8c9199'>
													<?php
														}else if(($actMonthsR[$act['id']][($i-1)]['fisik'] !=0 || $actMonthsR[$act['id']][($i-1)]['biaya'] != 0)){
													?>
												<td class="text-center" bgcolor='#dbdbdb'>
														<?php
													}else{
														?>
												<td class="text-center">
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
													if($stageMonths[$stage['id']][($i)]['tingkat_kendala'] > 0){ 
															if($stageMonths[$stage['id']][($i)]['tingkat_kendala'] == 1){
																?>
														<td class='text-center' bgcolor='#8cffef'>
																<?php
															}else if($stageMonths[$stage['id']][($i)]['tingkat_kendala'] == 2){
																?>
														<td class='text-center' bgcolor='#00ffbf'>
																<?php
															}else if($stageMonths[$stage['id']][($i)]['tingkat_kendala'] == 3){
																?>
														<td class='text-center' bgcolor='#fff200'>
																<?php
															}else if($stageMonths[$stage['id']][($i)]['tingkat_kendala'] == 4){
																?>
														<td class='text-center' bgcolor='#ff7700'>
																<?php
															}else if($stageMonths[$stage['id']][($i)]['tingkat_kendala'] == 5){
																?>
														<td class='text-center' bgcolor='#ff0000'>
																<?php
															}
														?>
														<a href="#" data-toggle="modal" data-target="#viewKendala" data-kendala="<?= $stageMonths[$stage['id']][($i)]['kendala'];?>" >
															<i class="fa fa-fw fa-eye"></i>
														</a>

													<?php }else{ ?>
														<td class='text-center'>
													
													<?php }

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

													</td>
												
													<?php
												}else{
													if(($i+2) < $this_month && ($stageMonthsR[$stage['id']][($i)]['fisik'] !=0 || $stageMonthsR[$stage['id']][($i)]['biaya'] != 0)){
													?>
												<td class='text-center' bgcolor='#8c9199'>
													<?php
														}else if(($stageMonthsR[$stage['id']][($i)]['fisik'] !=0 || $stageMonthsR[$stage['id']][($i)]['biaya'] != 0)){
													?>
												<td class="text-center" bgcolor='#dbdbdb'>
														<?php
													}else{
														?>
												<td class="text-center">
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
														if($actMonths[$act['id']][($i-1)]['tingkat_kendala'] > 0){ 
															if($actMonths[$act['id']][($i-1)]['tingkat_kendala'] == 1){
																?>
														<td class='text-center' bgcolor='#8cffef'>
																<?php
															}else if($actMonths[$act['id']][($i-1)]['tingkat_kendala'] == 2){
																?>
														<td class='text-center' bgcolor='#00ffbf'>
																<?php
															}else if($actMonths[$act['id']][($i-1)]['tingkat_kendala'] == 3){
																?>
														<td class='text-center' bgcolor='#fff200'>
																<?php
															}else if($actMonths[$act['id']][($i-1)]['tingkat_kendala'] == 4){
																?>
														<td class='text-center' bgcolor='#ff7700'>
																<?php
															}else if($actMonths[$act['id']][($i-1)]['tingkat_kendala'] == 5){
																?>
														<td class='text-center' bgcolor='#ff0000'>
																<?php
															}
														?>

														<a href="#" data-toggle="modal" data-target="#viewKendala" data-kendala="<?= $actMonths[$act['id']][($i-1)]['kendala'];?>" >
															<i class="fa fa-fw fa-eye"></i>
														</a>
													<?php }else{ ?>
														<td class='text-center'>
													
													<?php }

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

												</td>

														<?php
													}else{
													
														if(($i+1) < $this_month && ($actMonthsR[$act['id']][($i-1)]['fisik'] !=0 || $actMonthsR[$act['id']][($i-1)]['biaya'] != 0)){
													?>
												<td class='text-center' bgcolor='#8c9199'>
													<?php
														}else if(($actMonthsR[$act['id']][($i-1)]['fisik'] !=0 || $actMonthsR[$act['id']][($i-1)]['biaya'] != 0)){
													?>
												<td class="text-center" bgcolor='#dbdbdb'>
														<?php
													}else{
														?>
												<td class="text-center">
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
													if($stageMonths[$stage['id']][($i)]['tingkat_kendala'] > 0){ 
															if($stageMonths[$stage['id']][($i)]['tingkat_kendala'] == 1){
																?>
														<td class='text-center' bgcolor='#8cffef'>
																<?php
															}else if($stageMonths[$stage['id']][($i)]['tingkat_kendala'] == 2){
																?>
														<td class='text-center' bgcolor='#00ffbf'>
																<?php
															}else if($stageMonths[$stage['id']][($i)]['tingkat_kendala'] == 3){
																?>
														<td class='text-center' bgcolor='#fff200'>
																<?php
															}else if($stageMonths[$stage['id']][($i)]['tingkat_kendala'] == 4){
																?>
														<td class='text-center' bgcolor='#ff7700'>
																<?php
															}else if($stageMonths[$stage['id']][($i)]['tingkat_kendala'] == 5){
																?>
														<td class='text-center' bgcolor='#ff0000'>
																<?php
															}
														?>
														<a href="#" data-toggle="modal" data-target="#viewKendala" data-kendala="<?= $stageMonths[$stage['id']][($i)]['kendala'];?>" >
															<i class="fa fa-fw fa-eye"></i>
														</a>
													<?php }else{ ?>
														<td class='text-center'>
													
													<?php }

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

													</td>
												
													<?php
												}else{
													if(($i+2) < $this_month && ($stageMonthsR[$stage['id']][($i)]['fisik'] !=0 || $stageMonthsR[$stage['id']][($i)]['biaya'] != 0)){
													?>
												<td class='text-center' bgcolor='#8c9199'>
													<?php
														}else if(($stageMonthsR[$stage['id']][($i)]['fisik'] !=0 || $stageMonthsR[$stage['id']][($i)]['biaya'] != 0)){
													?>
												<td class="text-center" bgcolor='#dbdbdb'>
														<?php
													}else{
														?>
												<td class="text-center">
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
														if($actMonths[$act['id']][($i-1)]['tingkat_kendala'] > 0){ 
															if($actMonths[$act['id']][($i-1)]['tingkat_kendala'] == 1){
																?>
														<td class='text-center' bgcolor='#8cffef'>
																<?php
															}else if($actMonths[$act['id']][($i-1)]['tingkat_kendala'] == 2){
																?>
														<td class='text-center' bgcolor='#00ffbf'>
																<?php
															}else if($actMonths[$act['id']][($i-1)]['tingkat_kendala'] == 3){
																?>
														<td class='text-center' bgcolor='#fff200'>
																<?php
															}else if($actMonths[$act['id']][($i-1)]['tingkat_kendala'] == 4){
																?>
														<td class='text-center' bgcolor='#ff7700'>
																<?php
															}else if($actMonths[$act['id']][($i-1)]['tingkat_kendala'] == 5){
																?>
														<td class='text-center' bgcolor='#ff0000'>
																<?php
															}
														?>
														<a href="#" data-toggle="modal" data-target="#viewKendala" data-kendala="<?= $actMonths[$act['id']][($i-1)]['kendala'];?>" >
															<i class="fa fa-fw fa-eye"></i>
														</a>
													<?php }else{ ?>
														<td class='text-center'>
													
													<?php }

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

												</td>

														<?php
													}else{
													
														if(($i+1) < $this_month && ($actMonthsR[$act['id']][($i-1)]['fisik'] !=0 || $actMonthsR[$act['id']][($i-1)]['biaya'] != 0)){
													?>
												<td class='text-center' bgcolor='#8c9199'>
													<?php
														}else if(($actMonthsR[$act['id']][($i-1)]['fisik'] !=0 || $actMonthsR[$act['id']][($i-1)]['biaya'] != 0)){
													?>
												<td class="text-center" bgcolor='#dbdbdb'>
														<?php
													}else{
														?>
												<td class="text-center">
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
													if($stageMonths[$stage['id']][($i)]['tingkat_kendala'] > 0){ 
															if($stageMonths[$stage['id']][($i)]['tingkat_kendala'] == 1){
																?>
														<td class='text-center' bgcolor='#8cffef'>
																<?php
															}else if($stageMonths[$stage['id']][($i)]['tingkat_kendala'] == 2){
																?>
														<td class='text-center' bgcolor='#00ffbf'>
																<?php
															}else if($stageMonths[$stage['id']][($i)]['tingkat_kendala'] == 3){
																?>
														<td class='text-center' bgcolor='#fff200'>
																<?php
															}else if($stageMonths[$stage['id']][($i)]['tingkat_kendala'] == 4){
																?>
														<td class='text-center' bgcolor='#ff7700'>
																<?php
															}else if($stageMonths[$stage['id']][($i)]['tingkat_kendala'] == 5){
																?>
														<td class='text-center' bgcolor='#ff0000'>
																<?php
															}
														?>
														<a href="#" data-toggle="modal" data-target="#viewKendala" data-kendala="<?= $stageMonths[$stage['id']][($i)]['kendala'];?>" >
															<i class="fa fa-fw fa-eye"></i>
														</a>
													<?php }else{ ?>
														<td class='text-center'>
													
													<?php }

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

													</td>
												
													<?php
												}else{
													if(($i+2) < $this_month && ($stageMonthsR[$stage['id']][($i)]['fisik'] !=0 || $stageMonthsR[$stage['id']][($i)]['biaya'] != 0)){
													?>
												<td class='text-center' bgcolor='#8c9199'>
													<?php
														}else if(($stageMonthsR[$stage['id']][($i)]['fisik'] !=0 || $stageMonthsR[$stage['id']][($i)]['biaya'] != 0)){
													?>
												<td class="text-center" bgcolor='#dbdbdb'>
														<?php
													}else{
														?>
												<td class="text-center">
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


		<!-- Right Panel -->
		<div class="modal fade" id="viewKendala" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
						<div class="modal-header">
								<h5 class="modal-title text-center" id="largeModalLabel">Rincian Kendala</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
								</button>
						</div>
						<div class="modal-body">
								<div class="form-group">
									<div class="input-group">
								    	
									    <textarea class="form-control" name="kendala" id="kendalaView" value="-" rows=7 readonly>-</textarea>
									    
								    <!-- Hidden Here -->
	    
								  </div>											
								</div>
						</div>
				</div>
			</div>

		</div>

<?php
	// $url = 'http://emonitoring.pu.go.id/pusair/';
	// // $url = 'data_2018121212.csv';
	// $separator = ';';
	// $csvData = file_get_contents($url);
	
	// $rangekeg = count($csvData);
	// // print_r($csvData);
	// echo ($rangekeg);

	// $lines = explode("\n", $csvData);
	// $array = [];
	// $header = null;
	// print_r($lines);
	// foreach ($lines as $line) {
	// 	if ($header === null) {
	// 		$header = str_getcsv($line,$separator);
	// 		continue;
	// 	}
		
		
	// 	$array[] = array_combine(array_intersect_key($header, str_getcsv($line,$separator)), array_intersect_key(str_getcsv($line,$separator),$header));
	// 	// print_r(array_intersect_key($header, str_getcsv($line,$separator)));
	// }



	// // $lines = explode(PHP_EOL, $csvData);
	// // $array = array();
	// // foreach ($lines as $line) {
	// //     $array[] = str_getcsv($line);
	// // }
	// echo "<pre>";
	// print_r($array);
	// echo "</pre>";
	
	if(!isset($_SESSION['url_api'])){
		/*API CSV*/
		
		$url = 'http://emonitoring.pu.go.id/pusair/';
		// // $url = 'data_2018121212.csv';
		// $separator = ';';
		// $csvData = file_get_contents($url);
		// $temp = fopen("http://emonitoring.pu.go.id/pusair/", 'r');
		// print_r($csvData);
		file_put_contents("application/views/monev/temp_api.php", fopen("http://emonitoring.pu.go.id/pusair/", 'r'));

		include "temp_api.php";
	}
?>
