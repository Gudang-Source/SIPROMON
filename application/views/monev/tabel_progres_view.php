
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
									<th colspan=13 class='text-center'>Kendala yang terjadi dalam satu pekan</th>
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
				<?php
					$ddate = date("Y-m-d");
					$date = new DateTime($ddate);
					$week = $date->format("W");
				?>
				<div class="content mt-3" style="background-color: white;">
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
											<td colspan="4">Jan</td>
											<td colspan="4">Feb</td>
											<td colspan="4">Mar</td>
											<td colspan="4">Apr</td>
											<td colspan="4">Mei</td>
											<td colspan="4">Jun</td>
											<td colspan="4">Jul</td>
											<td colspan="4">Agt</td>
											<td colspan="4">Sep</td>
											<td colspan="4">Okt</td>
											<td colspan="4">Nov</td>
											<td colspan="4">Des</td>
										</tr>
										<tr class="" style="background-color: #90a4ae;border-color: #90a4ae;color:#fff; font-weight: 400;">
											<?php for($bulan=0;$bulan<12;$bulan++){ 
												if($bulan == 0){
													$iMingguan=1;
													?>
											<td>1</td>
											<td>2</td>													
											<td>3</td>													
											<td>4</td>													
													<?php
												}else{
													?>
											<td><?= $iMingguan*4+1; ?></td>
											<td><?= $iMingguan*4+2; ?></td>
											<td><?= $iMingguan*4+3; ?></td>
											<td><?= $iMingguan*4+4; ?></td>
													<?php
													$iMingguan++;
												}
												?>

											<?php } ?>
										</tr>
									</thead>			
									<tbody>
										<tr>
											<td colspan="2"><?=$row['judul']; ?></td>
											<td><?=number_format($row['pagu'],0,',','.'); ?></td>
											<?php for($bulan=(-1);$bulan<=48;$bulan++){
												if($bulan > 0){
													if($moneysWeeks[($bulan-1)] == 0){
														echo "<td class='text-center'></td>";
													}else{
														echo "<td class='text-center'>".number_format($moneysWeeks[($bulan-1)],0,',','.')."</td>";
														
													}
												}else{
												?>

											 <td></td>
												<?php
												}
											 ?>
											<?php } ?>
										</tr>
										<tr>
											<td>1.</td>
											<td>PERSIAPAN</td>
											<td><?=number_format($total[0],0,',','.');?></td>
											<td class="text-center"><?=round(($total[0]/$row['pagu'])*100,2); ?></td>
											<td class="text-center"><?=round(($total[0]/$row['pagu'])*100,2); ?></td>
											<?php for($i=0;$i<48;$i++){ ?>
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

											<?php if(($act['waktu'] == ""))$act['waktu']="0-0";
													$mg=explode("-",$act['waktu']);
													$bln=$mg[0];
													$end=$mg[1];
													for($i=1;$i<=48;$i++){

														if($i>=$bln && $i <=$end && $actWeeks[$act['id']][$i-1] == 0){
															echo "<td class='text-center' bgcolor='#8c9199'>?</td>";

														}else if($actWeeks[$act['id']][$i-1] == 0){
															echo "<td class='text-center'></td>";
														
														}else{
															if($actWeeks[$act['id']][$i-1]['tingkat_kendala'] == 1){
																echo "<td class='text-center' bgcolor='#8cffef'>";

															}else if($actWeeks[$act['id']][$i-1]['tingkat_kendala'] == 2){
																echo "<td class='text-center' bgcolor='#00ffbf'>";

															}else if($actWeeks[$act['id']][$i-1]['tingkat_kendala'] == 3){
																echo "<td class='text-center' bgcolor='#fff200'>";

															}else if($actWeeks[$act['id']][$i-1]['tingkat_kendala'] == 4){
																echo "<td class='text-center' bgcolor='#ff7700'>";

															}else if($actWeeks[$act['id']][$i-1]['tingkat_kendala'] == 5){
																echo "<td class='text-center' bgcolor='#ff0000'>";

															}else{
																echo "<td class='text-center'>";
															}
															// print_r($actWeeks[$act['id']][$i-1]);
															echo $actWeeks[$act['id']][$i-1]['persentase']."</td>";
														}
												 } ?>
																				
										</tr>
											<?php if(isset($allStages) != NULL){ $no3=1;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){ ?>
										<tr>
											<td>1.<?=($no-1).".".$no3++; ?></td>
											<td nowrap=""><?php echo $stage['kegiatan'];?> 
											</td>
											<td class="text-center"><?=round(($stage['anggaran']/$row['pagu'])*100,2); ?></td>
											<td class="text-center"><?=round(($stage['anggaran']/$row['pagu'])*100,2); ?></td>
											<?php if(($stage['waktu'] == ""))$stage['waktu']="0-0";
											$mg=explode("-",$stage['waktu']);
											$bln=$mg[0];
											$end=$mg[1];
											for($i=1;$i<=48;$i++){ 
												if($i>=$bln && $i <=$end && $stageWeeks[$stage['id']][$i-1] == 0){
													echo "<td class='text-center' bgcolor='#8c9199'>?</td>";

												}else if($stageWeeks[$stage['id']][$i-1] == 0){
													echo "<td class='text-center'></td>";
												}else{
													if($stageWeeks[$stage['id']][$i-1]['tingkat_kendala'] == 1){
														echo "<td class='text-center' bgcolor='#8cffef'>";

													}else if($stageWeeks[$stage['id']][$i-1]['tingkat_kendala'] == 2){
														echo "<td class='text-center' bgcolor='#00ffbf'>";

													}else if($stageWeeks[$stage['id']][$i-1]['tingkat_kendala'] == 3){
														echo "<td class='text-center' bgcolor='#fff200'>";

													}else if($stageWeeks[$stage['id']][$i-1]['tingkat_kendala'] == 4){
														echo "<td class='text-center' bgcolor='#ff7700'>";

													}else if($stageWeeks[$stage['id']][$i-1]['tingkat_kendala'] == 5){
														echo "<td class='text-center' bgcolor='#ff0000'>";

													}else{
														echo "<td class='text-center'>";
													}
													echo $stageWeeks[$stage['id']][$i-1]['persentase']."</td>";
												}
											}
											?>
																				
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
											<?php for($i=0;$i<48;$i++){ ?>
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

											<?php if(($act['waktu'] == ""))$act['waktu']="0-0";
													$mg=explode("-",$act['waktu']);
													$bln=$mg[0];
													$end=$mg[1];
													for($i=1;$i<=48;$i++){

														if($i>=$bln && $i <=$end && $actWeeks[$act['id']][$i-1] == 0){
															echo "<td class='text-center' bgcolor='#8c9199'>?</td>";

														}else if($actWeeks[$act['id']][$i-1] == 0){
															echo "<td class='text-center'></td>";
														
														}else{
															if($actWeeks[$act['id']][$i-1]['tingkat_kendala'] == 1){
																echo "<td class='text-center' bgcolor='#8cffef'>";

															}else if($actWeeks[$act['id']][$i-1]['tingkat_kendala'] == 2){
																echo "<td class='text-center' bgcolor='#00ffbf'>";

															}else if($actWeeks[$act['id']][$i-1]['tingkat_kendala'] == 3){
																echo "<td class='text-center' bgcolor='#fff200'>";

															}else if($actWeeks[$act['id']][$i-1]['tingkat_kendala'] == 4){
																echo "<td class='text-center' bgcolor='#ff7700'>";

															}else if($actWeeks[$act['id']][$i-1]['tingkat_kendala'] == 5){
																echo "<td class='text-center' bgcolor='#ff0000'>";

															}else{
																echo "<td class='text-center'>";
															}
															echo $actWeeks[$act['id']][$i-1]['persentase']."</td>";
														}
												 } ?>
																				
										</tr>
											<?php if(isset($allStages) != NULL){ $no3=1;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){ ?>
										<tr>
											<td>2.<?=($no-1).".".$no3++; ?></td>
											<td nowrap=""><?php echo $stage['kegiatan'];?> 
											</td>
											<td><?=number_format($stage['anggaran'],0,',','.'); ?></td>
											<td class="text-center"><?=round(($stage['anggaran']/$row['pagu'])*100,2); ?></td>
											<td class="text-center"><?=round(($stage['anggaran']/$row['pagu'])*100,2); ?></td>
											<?php if(($stage['waktu'] == ""))$stage['waktu']="0-0";
											$mg=explode("-",$stage['waktu']);
											$bln=$mg[0];
											$end=$mg[1];
											for($i=1;$i<=48;$i++){ 
												if($i>=$bln && $i <=$end && $stageWeeks[$stage['id']][$i-1] == 0){
													echo "<td class='text-center' bgcolor='#8c9199'>?</td>";

												}else if($stageWeeks[$stage['id']][$i-1] == 0){
													echo "<td class='text-center'></td>";
												}else{
													if($stageWeeks[$stage['id']][$i-1]['tingkat_kendala'] == 1){
														echo "<td class='text-center' bgcolor='#8cffef'>";

													}else if($stageWeeks[$stage['id']][$i-1]['tingkat_kendala'] == 2){
														echo "<td class='text-center' bgcolor='#00ffbf'>";

													}else if($stageWeeks[$stage['id']][$i-1]['tingkat_kendala'] == 3){
														echo "<td class='text-center' bgcolor='#fff200'>";

													}else if($stageWeeks[$stage['id']][$i-1]['tingkat_kendala'] == 4){
														echo "<td class='text-center' bgcolor='#ff7700'>";

													}else if($stageWeeks[$stage['id']][$i-1]['tingkat_kendala'] == 5){
														echo "<td class='text-center' bgcolor='#ff0000'>";

													}else{
														echo "<td class='text-center'>";
													}
													echo $stageWeeks[$stage['id']][$i-1]['persentase']."</td>";
												}
											}
											?>
																				
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
											<?php for($i=0;$i<48;$i++){ ?>
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

											<?php if(($act['waktu'] == ""))$act['waktu']="0-0";
													$mg=explode("-",$act['waktu']);
													$bln=$mg[0];
													$end=$mg[1];
													for($i=1;$i<=48;$i++){

														if($i>=$bln && $i <=$end && $actWeeks[$act['id']][$i-1] == 0){
															echo "<td class='text-center' bgcolor='#8c9199'>?</td>";

														}else if($actWeeks[$act['id']][$i-1] == 0){
															echo "<td class='text-center'></td>";
														
														}else{
															if($actWeeks[$act['id']][$i-1]['tingkat_kendala'] == 1){
																echo "<td class='text-center' bgcolor='#8cffef'>";

															}else if($actWeeks[$act['id']][$i-1]['tingkat_kendala'] == 2){
																echo "<td class='text-center' bgcolor='#00ffbf'>";

															}else if($actWeeks[$act['id']][$i-1]['tingkat_kendala'] == 3){
																echo "<td class='text-center' bgcolor='#fff200'>";

															}else if($actWeeks[$act['id']][$i-1]['tingkat_kendala'] == 4){
																echo "<td class='text-center' bgcolor='#ff7700'>";

															}else if($actWeeks[$act['id']][$i-1]['tingkat_kendala'] == 5){
																echo "<td class='text-center' bgcolor='#ff0000'>";

															}else{
																echo "<td class='text-center'>";
															}
															echo $actWeeks[$act['id']][$i-1]['persentase']."</td>";
														}
												 } ?>
																				
										</tr>
											<?php if(isset($allStages) != NULL){ $no3=1;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){ ?>
										<tr>
											<td>3.<?=($no-1).".".$no3++; ?></td>
											<td nowrap=""><?php echo $stage['kegiatan'];?> 
											</td>
											<td><?=number_format($stage['anggaran'],0,',','.'); ?></td>
											<td class="text-center"><?=round(($stage['anggaran']/$row['pagu'])*100,2); ?></td>
											<td class="text-center"><?=round(($stage['anggaran']/$row['pagu'])*100,2); ?></td>
											<?php if(($stage['waktu'] == ""))$stage['waktu']="0-0";
											$mg=explode("-",$stage['waktu']);
											$bln=$mg[0];
											$end=$mg[1];
											for($i=1;$i<=48;$i++){ 
												if($i>=$bln && $i <=$end && $stageWeeks[$stage['id']][$i-1] == 0){
													echo "<td class='text-center' bgcolor='#8c9199'>?</td>";

												}else if($stageWeeks[$stage['id']][$i-1] == 0){
													echo "<td class='text-center'></td>";
												}else{
													if($stageWeeks[$stage['id']][$i-1]['tingkat_kendala'] == 1){
														echo "<td class='text-center' bgcolor='#8cffef'>";

													}else if($stageWeeks[$stage['id']][$i-1]['tingkat_kendala'] == 2){
														echo "<td class='text-center' bgcolor='#00ffbf'>";

													}else if($stageWeeks[$stage['id']][$i-1]['tingkat_kendala'] == 3){
														echo "<td class='text-center' bgcolor='#fff200'>";

													}else if($stageWeeks[$stage['id']][$i-1]['tingkat_kendala'] == 4){
														echo "<td class='text-center' bgcolor='#ff7700'>";

													}else if($stageWeeks[$stage['id']][$i-1]['tingkat_kendala'] == 5){
														echo "<td class='text-center' bgcolor='#ff0000'>";

													}else{
														echo "<td class='text-center'>";
													}
													echo $stageWeeks[$stage['id']][$i-1]['persentase']."</td>";
												}
											}
											?>
																				
										</tr>
											<?php }}} ?>															
										<?php }}} ?>															
										<tr style="background-color: #ffb74d;border-color: #ffb74d;color:#fff; font-weight: 400;">
											<td colspan="5">Jumlah Realisasi Fisik Mingguan</td>
											<?php for($i=0;$i<48;$i++){ 
												if($fisikWeeks[($i)] == 0){
													echo "<td class='text-center'></td>";
												}else{
													echo "<td class='text-center'>".$fisikWeeks[$i]."</td>";
													
												}
											 } ?>											
										</tr>
										
										<tr style="background-color: #90a4ae;border-color: #90a4ae;color:#fff; font-weight: 400;">
											<td colspan="5">Persentase Realisasi Fisik Kumulatif</td>
											<?php for($i=0;$i<48;$i++){ 
												if($fisikWeeksKumulatif[($i)] == 0){
													echo "<td class='text-center'></td>";
												}else{
													echo "<td class='text-center'>".$fisikWeeksKumulatif[$i]."</td>";
													
												}
											 } ?>											
										</tr>
										<tr style="background-color: #a1887f;border-color: #a1887f;color:#fff; font-weight: 400;">
											<td colspan="5">Jumlah Realisasi Keuangan Kumulatif</td>
											<?php for($i=0;$i<48;$i++){ 
												if($moneysWeeksKumulatif[($i)] == 0){
													echo "<td class='text-center'></td>";
												}else{
													echo "<td class='text-center'>".number_format($moneysWeeksKumulatif[$i],0,',','.')."</td>";
													
												}
											 } ?>											
										</tr>
										<tr style="background-color: #999;border-color: #999;color:#fff; font-weight: 400;">
											<td colspan="5">Persentase Realisasi Keuangan Kumulatif</td>
											<?php for($i=0;$i<48;$i++){ 
												if($moneysWeeksKumulatifP[($i)] == 0){
													echo "<td class='text-center'></td>";
												}else{
													echo "<td class='text-center'>".$moneysWeeksKumulatifP[$i]."</td>";
													
												}
											 } ?>											
										</tr>
										
									</tbody>	
								</table>
							</div>
				</div><!-- .content -->
			
		</div><!-- /#right-panel -->


		<!-- Right Panel -->
