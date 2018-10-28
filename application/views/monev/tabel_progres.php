
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
													?>

											<td class="text-center">
												<a href="#" class="text-warning" data-toggle="modal" data-target="#addKeuangan" data-money='<?php print json_encode($moneys); ?>' data-act="<?=0; ?>" data-month="<?= $bulan; ?>" data-fisik="<?= 0; ?>">
														<i class="fa fa-fw fa-edit"></i>
													</a>
											</td>
													<?php
													}else{
														?>
											<td class="text-center">
												<a href="#" class="text-success" data-toggle="modal" data-target="#updateKeuangan" data-money='<?php print json_encode($moneys); ?>' data-act="<?=0; ?>" data-month="<?= $bulan; ?>" data-fisik="<?= 0; ?>">
														<i class="fa fa-fw fa-edit"></i>
													</a>
											</td>			
														<?php
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

														if($actWeeks[$act['id']][$i-1] == 0){

															if($i>=$bln && $i <=$end){
																	?>
												<td class="text-center">
													<a href="#" class="text-danger" data-toggle="modal" data-target="#addLaporan" data-money="<?=$act['anggaran']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?=round(($act['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
													<?php }else if($ada==0){ ?>
												<td class="text-center">
													<a href="#" class="text-secondary" data-toggle="modal" data-target="#addLaporan" data-money="<?=$act['anggaran']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?=round(($act['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
												<?php 
															}else{
													?>
													<td></td>
												<?php 		} 
														}else{
															?>
												<td class="text-center">
													<a href="#" class="text-success" data-toggle="modal" data-target="#updateLaporan" data-money="<?=$act['anggaran']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?=round(($act['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
															<?php
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
												if($stageWeeks[$stage['id']][$i-1] == 0){
													if($i>=$bln && $i <= $end){
														?>
												<td class="text-center">
													<a href="#" class="text-danger" data-toggle="modal" data-target="#addLaporan" data-money="<?=$stage['anggaran']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=$i; ?>" data-type="stage" data-fisik="<?=round(($stage['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
												<?php }else{ ?>
												<td class="text-center">
													<a href="#" class="text-secondary" data-toggle="modal" data-target="#addLaporan" data-money="<?=$stage['anggaran']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=$i; ?>" data-type="stage" data-fisik="<?=round(($stage['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
												<?php 
													}
												}else{
												?>
												<td class="text-center">
													<a href="#" class="text-success" data-toggle="modal" data-target="#updateLaporan" data-money="<?=$stage['anggaran']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=$i; ?>" data-type="stage" data-fisik="<?=round(($stage['anggaran']/$row['pagu'])*100,2); ?>">
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

														if($actWeeks[$act['id']][$i-1] == 0){

															if($i>=$bln && $i <=$end){
																	?>
												<td class="text-center">
													<a href="#" class="text-danger" data-toggle="modal" data-target="#addLaporan" data-money="<?=$act['anggaran']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?=round(($act['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
													<?php }else if($ada==0){ ?>
												<td class="text-center">
													<a href="#" class="text-secondary" data-toggle="modal" data-target="#addLaporan" data-money="<?=$act['anggaran']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?=round(($act['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
												<?php 
															}else{
													?>
													<td></td>
												<?php 		} 
														}else{
															?>
												<td class="text-center">
													<a href="#" class="text-success" data-toggle="modal" data-target="#updateLaporan" data-money="<?=$act['anggaran']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?=round(($act['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
															<?php
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
												if($stageWeeks[$stage['id']][$i-1] == 0){
													if($i>=$bln && $i <= $end){
														?>
												<td class="text-center">
													<a href="#" class="text-danger" data-toggle="modal" data-target="#addLaporan" data-money="<?=$stage['anggaran']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=$i; ?>" data-type="stage" data-fisik="<?=round(($stage['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
												<?php }else{ ?>
												<td class="text-center">
													<a href="#" class="text-secondary" data-toggle="modal" data-target="#addLaporan" data-money="<?=$stage['anggaran']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=$i; ?>" data-type="stage" data-fisik="<?=round(($stage['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
												<?php 
													}
												}else{
												?>
												<td class="text-center">
													<a href="#" class="text-success" data-toggle="modal" data-target="#updateLaporan" data-money="<?=$stage['anggaran']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=$i; ?>" data-type="stage" data-fisik="<?=round(($stage['anggaran']/$row['pagu'])*100,2); ?>">
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

														if($actWeeks[$act['id']][$i-1] == 0){

															if($i>=$bln && $i <=$end){
																	?>
												<td class="text-center">
													<a href="#" class="text-danger" data-toggle="modal" data-target="#addLaporan" data-money="<?=$act['anggaran']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?=round(($act['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
													<?php }else if($ada==0){ ?>
												<td class="text-center">
													<a href="#" class="text-secondary" data-toggle="modal" data-target="#addLaporan" data-money="<?=$act['anggaran']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?=round(($act['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
												<?php 
															}else{
													?>
													<td></td>
												<?php 		} 
														}else{
															?>
												<td class="text-center">
													<a href="#" class="text-success" data-toggle="modal" data-target="#updateLaporan" data-money="<?=$act['anggaran']; ?>" data-refer="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-type="act" data-fisik="<?=round(($act['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
															<?php
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
												if($stageWeeks[$stage['id']][$i-1] == 0){
													if($i>=$bln && $i <= $end){
														?>
												<td class="text-center">
													<a href="#" class="text-danger" data-toggle="modal" data-target="#addLaporan" data-money="<?=$stage['anggaran']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=$i; ?>" data-type="stage" data-fisik="<?=round(($stage['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
												<?php }else{ ?>
												<td class="text-center">
													<a href="#" class="text-secondary" data-toggle="modal" data-target="#addLaporan" data-money="<?=$stage['anggaran']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=$i; ?>" data-type="stage" data-fisik="<?=round(($stage['anggaran']/$row['pagu'])*100,2); ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
												<?php 
													}
												}else{
												?>
												<td class='text-center'>
													<a href="#" class="text-success" data-toggle="modal" data-target="#updateLaporan" data-money="<?=$stage['anggaran']; ?>" data-refer="<?=$stage['id']; ?>" data-month="<?=$i; ?>" data-type="stage" data-fisik="<?=round(($stage['anggaran']/$row['pagu'])*100,2); ?>">
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
										
									</tbody>	
								</table>
							</div>
				</div><!-- .content -->
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
											<div class="col-sm-4">
												<h5>Minggu ke-<i id="mingguItem" style="font-style: normal;"> </i></b></h5>
											</div>
											<div class="col-md-12" style="margin-top: 20px;">
												<div class="form-group">
													<label class=" form-control-label">Presentase Fisik</label>
													<div class="input-group">
														<input name="persentase" type="number" class="form-control" placeholder="100">
													</div>
													<small class="form-text text-muted">Skala kumulatif 0 - 100</small>
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
											</div>
										</div>
								</div>
								<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<input type="hidden" name="user_id" value="<?=$this->session->userdata('id'); ?>">
										<input type="hidden" name="id_kegiatan" value="<?=$id_kegiatan; ?>">
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
														<input name="persentaseF" id="persentaseF" type="number" class="form-control" placeholder="100">
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
												<h5>Bulan: <b><i id="bulanItemK" style="font-style: normal;"> </i></b></h5>
											</div>
											<div class="col-sm-4">
												<h5>Minggu ke-<i id="mingguItemK" style="font-style: normal;"> </i></b></h5>
											</div>
											<div class="col-md-12" id="listMoney" style="margin-top: 20px;">
												
												
											</div>
										</div>
								</div>
								<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<input type="hidden" name="user_id" value="<?=$this->session->userdata('id'); ?>">
										<input type="hidden" name="id_kegiatan" value="<?=$id_kegiatan; ?>">
										<input type="hidden" name="id_rmp" value="<?=$row['id']; ?>">
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
												<h5>Bulan: <b><i id="bulanItemKU" style="font-style: normal;"> </i></b></h5>
											</div>
											<div class="col-sm-4">
												<h5>Minggu ke-<i id="mingguItemKU" style="font-style: normal;"> </i></b></h5>
											</div>
											<div class="col-md-12" id="listMoneyKU" style="margin-top: 20px;">
												
												
											</div>
										</div>
								</div>
								<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<input type="hidden" name="user_id" value="<?=$this->session->userdata('id'); ?>">
										<input type="hidden" name="id_kegiatan" value="<?=$id_kegiatan; ?>">
										<input type="hidden" name="id_rmp" value="<?=$row['id']; ?>">
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


		<!-- Right Panel -->
