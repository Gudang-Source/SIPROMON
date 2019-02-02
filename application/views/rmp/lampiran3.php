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
									        <option disabled><b>-Navigasi-</b></option>
									        <option value="satu" <?php if($this->uri->segment(2) == "satu") echo "selected"; ?> >Bab I</option>
									        <option value="dua" <?php if($this->uri->segment(2) == "dua") echo "selected"; ?>>Bab II</option>
									        <option value="tiga" <?php if($this->uri->segment(2) == "tiga") echo "selected"; ?>>Bab III</option>
									        <option value="empat" <?php if($this->uri->segment(2) == "empat") echo "selected"; ?>>Bab IV</option>
									        <option value="limabelas" <?php if($this->uri->segment(2) == "limabelas") echo "selected"; ?>>Daftar Pustaka</option>
									        <option value="att1" <?php if($this->uri->segment(2) == "att1") echo "selected"; ?>>Lampiran 1</option>
									        <option value="att2" <?php if($this->uri->segment(2) == "att2") echo "selected"; ?>>Lampiran 2</option>
									        <option value="att3" <?php if($this->uri->segment(2) == "att3") echo "selected"; ?>>Lampiran 3</option>
									      </select>
								    </div>																																										
										<div style="margin-bottom: 15px;">
											<a href="<?=base_url(); ?>RMP/att2/<?=$this->uri->segment(3)?>" type="button" class="btn btn-labeled btn-danger">
													<span class="btn-label"><i class="fa fa-fw fa-arrow-left"></i></span> Back
											</a>												
											
											<a href="#" type="button" class="btn btn-labeled btn-secondary" onclick="printLamp3()">
													<span class="btn-label"><i class="fa fa-fw fa-print"></i></span> Print
											</a>												
											<a href="<?=base_url(); ?>RMP/end/<?=$this->uri->segment(3)?>" type="button" class="btn btn-labeled btn-success" onclick="checkSisa()">
													<span class="btn-label"><i class="fa fa-fw fa-arrow-right"></i></span> End
											</a>												
										</div>

									</div>
								</div>
							</div>
							<br>
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
											<td colspan="4"><?=$row['judul']; ?></td>
											<td><?=number_format($row['pagu'],0,',','.'); ?> <input type="hidden" id="pagu" value="<?= $row['pagu']; ?>"/></td>
											
											<?php for($bulan=0;$bulan<13;$bulan++){ ?>
											<td></td>
											<td></td>
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
														echo "<td class='text-center'>".number_format($actMonths[$act['id']][($i-1)]['biaya'],0,',','.');
														?>
														<a href="#" class="text-success" data-toggle="modal" data-target="#tambahrencanakeu" data-money="<?=$actTotal[$act['id']]['biaya']; ?>" data-act="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-fisik="<?=$actTotal[$act['id']]['fisik']; ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
												<td class='text-center'><?= round($actMonths[$act['id']][($i-1)]['fisik'],2);?></td>

														<?php
													}else{
													
												?>
												<td colspan="2" class="text-center">
													<a href="#" class="text-secondary" data-toggle="modal" data-target="#tambahrencanakeu" data-money="<?=$actTotal[$act['id']]['biaya']; ?>" data-act="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-fisik="<?=$actTotal[$act['id']]['fisik']; ?>">
														
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
												<!-- <td></td> -->
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
													echo "<td class='text-center'>".number_format($stageMonths[$stage['id']][$i]['biaya'],0,',','.');
													?>
													<a href="#" class="text-success" data-toggle="modal" data-target="#tambahrencanakeustage" data-money="<?=$stageTotal[$stage['id']]['biaya']; ?>" data-act="<?=$stage['id']; ?>" data-month="<?=$i+1; ?>" data-fisik="<?=$stageTotal[$stage['id']]['fisik']; ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
												<td><?= round($stageMonths[$stage['id']][$i]['fisik'],2);?></td>
													<?php
												}else{
													?>
												<td colspan="2" class="text-center">
													<a href="#" class="text-secondary" data-toggle="modal" data-target="#tambahrencanakeustage" data-money="<?=$stageTotal[$stage['id']]['biaya']; ?>" data-act="<?=$stage['id']; ?>" data-month="<?=$i+1; ?>" data-fisik="<?=$stageTotal[$stage['id']]['fisik']; ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
												<!-- <td></td> -->
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
														echo "<td class='text-center'>".number_format($actMonths[$act['id']][($i-1)]['biaya'],0,',','.');
														?>
														<a href="#" class="text-success" data-toggle="modal" data-target="#tambahrencanakeu" data-money="<?=$actTotal[$act['id']]['biaya']; ?>" data-act="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-fisik="<?=$actTotal[$act['id']]['fisik']; ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
												<td class='text-center'><?= round($actMonths[$act['id']][($i-1)]['fisik'],2);?></td>

														<?php
													}else{
													
												?>
												<td colspan="2" class="text-center">
													<a href="#" class="text-secondary" data-toggle="modal" data-target="#tambahrencanakeu" data-money="<?=$actTotal[$act['id']]['biaya']; ?>" data-act="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-fisik="<?=$actTotal[$act['id']]['fisik']; ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
												<!-- <td></td> -->
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
													echo "<td class='text-center'>".number_format($stageMonths[$stage['id']][$i]['biaya'],0,',','.');
													?>
													<a href="#" class="text-success" data-toggle="modal" data-target="#tambahrencanakeustage" data-money="<?=$stageTotal[$stage['id']]['biaya']; ?>" data-act="<?=$stage['id']; ?>" data-month="<?=$i+1; ?>" data-fisik="<?=$stageTotal[$stage['id']]['fisik']; ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
												<td><?= round($stageMonths[$stage['id']][$i]['fisik'],2);?></td>
													<?php
												}else{
													?>
												<td colspan="2" class="text-center">
													<a href="#" class="text-secondary" data-toggle="modal" data-target="#tambahrencanakeustage" data-money="<?=$stageTotal[$stage['id']]['biaya']; ?>" data-act="<?=$stage['id']; ?>" data-month="<?=$i+1; ?>" data-fisik="<?=$stageTotal[$stage['id']]['fisik']; ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
												<!-- <td></td> -->
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
														echo "<td class='text-center'>".number_format($actMonths[$act['id']][($i-1)]['biaya'],0,',','.');
														?>
														<a href="#" class="text-success" data-toggle="modal" data-target="#tambahrencanakeu" data-money="<?=$actTotal[$act['id']]['biaya']; ?>" data-act="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-fisik="<?=$actTotal[$act['id']]['fisik']; ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
												<td class='text-center'><?= round($actMonths[$act['id']][($i-1)]['fisik'],2);?></td>

														<?php
													}else{
													
												?>
												<td colspan="2" class="text-center">
													<a href="#" class="text-secondary" data-toggle="modal" data-target="#tambahrencanakeu" data-money="<?=$actTotal[$act['id']]['biaya']; ?>" data-act="<?=$act['id']; ?>" data-month="<?=$i; ?>" data-fisik="<?=$actTotal[$act['id']]['fisik']; ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
												<!-- <td></td> -->
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
													echo "<td class='text-center'>".number_format($stageMonths[$stage['id']][$i]['biaya'],0,',','.');
													?>
													<a href="#" class="text-success" data-toggle="modal" data-target="#tambahrencanakeustage" data-money="<?=$stageTotal[$stage['id']]['biaya']; ?>" data-act="<?=$stage['id']; ?>" data-month="<?=$i+1; ?>" data-fisik="<?=$stageTotal[$stage['id']]['fisik']; ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
												<td><?= round($stageMonths[$stage['id']][$i]['fisik'],2);?></td>
													<?php
												}else{
													?>
												<td colspan="2" class="text-center">
													<a href="#" class="text-secondary" data-toggle="modal" data-target="#tambahrencanakeustage" data-money="<?=$stageTotal[$stage['id']]['biaya']; ?>" data-act="<?=$stage['id']; ?>" data-month="<?=$i+1; ?>" data-fisik="<?=$stageTotal[$stage['id']]['fisik']; ?>">
															<i class="fa fa-fw fa-edit"></i>
														</a>
												</td>
												<!-- <td></td> -->
													<?php
												}
											}
											?>
																				
										</tr>
											<?php }}} ?>															
										<?php }}} ?>												
										<tr>
											<td colspan="4">Belum Terpakai</td>
											<td><font color="red" class='text-center'><?=number_format($sisa,0,',','.'); ?></font>
												<input type="hidden" id="sisaPagu" value="<?= $sisa; ?>" />
												<input type="hidden" id="sisaFisik" value="<?= $sisaFisik; ?>" />
											</td>
											<?php for($bulan=0;$bulan<13;$bulan++){ ?>
											<td></td>
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
													echo "<td colspan='1' class='text-center'></td><td colspan='1' class='text-center'></td>";
												}else{
													echo "<td colspan='1' class='text-center'>".number_format($moneysMonths[$i],0,',','.')."</td><td colspan='1' class='text-center'></td>";
												}
											 } ?>	
										</tr>	
										<tr style="background-color: #ffb74d;border-color: #ffb74d;color:#fff; font-weight: 400;">
											<td colspan="7">Jumlah Kumulatif Rencana Keuangan</td>
											<?php for($i=0;$i<12;$i++){ 
												if($moneysMonthsKumulatif[($i)] == 0){
													echo "<td colspan='1' class='text-center'></td><td colspan='1' class='text-center'></td>";
												}else{
													echo "<td colspan='1' class='text-center'>".number_format($moneysMonthsKumulatif[$i],0,',','.')."</td><td colspan='1' class='text-center'></td>";
													
												}
											 } ?>											
										</tr>
										<tr style="background-color: #a1887f;border-color: #a1887f;color:#fff; font-weight: 400;">
											<td colspan="7">Persentase Rencana Keuangan</td>
											<?php for($i=0;$i<12;$i++){ 
												if($moneysMonthsP[($i)] == 0){
													echo "<td colspan='1' class='text-center'></td><td colspan='1' class='text-center'></td>";
												}else{
													echo "<td colspan='1' class='text-center'>".round($moneysMonthsP[$i],2)."</td><td colspan='1' class='text-center'></td>";
													
												}
											 } ?>										
										</tr>
										<tr style="background-color: #90a4ae;border-color: #90a4ae;color:#fff; font-weight: 400;">
											<td colspan="7">Persentase Kumulatif Rencana Keuangan</td>
											<?php for($i=0;$i<12;$i++){ 
												if($moneysMonthsKumulatifP[($i)] == 0){
													echo "<td colspan='1' class='text-center'></td><td colspan='1' class='text-center'></td>";
												}else{
													echo "<td colspan='1' class='text-center'>".round($moneysMonthsKumulatifP[$i],2)."</td><td colspan='1' class='text-center'></td>";
													
												}
											 } ?>											
										</tr>
										<tr style="background-color: #999;border-color: #999;color:#fff; font-weight: 400;">
											<td colspan="7">Persentase Rencana Fisik</td>
											<?php for($i=0;$i<12;$i++){ 
												if($fisikMonths[($i)] == 0){
													echo "<td colspan='1' class='text-center'></td><td colspan='1' class='text-center'></td>";
												}else{
													echo "<td colspan='1' class='text-center'></td><td colspan='1' class='text-center'>".round($fisikMonths[$i],2)."</td>";
													
												}
											 } ?>											
										</tr>
										<tr style="background-color: #999;border-color: #232323;color:#fff; font-weight: 400;">
											<td colspan="7">Persentase Kumulatif Rencana Fisik</td>
											<?php for($i=0;$i<12;$i++){ 
												if($fisikMonthsKumulatif[($i)] == 0){
													echo "<td colspan='1' class='text-center'></td><td colspan='1' class='text-center'></td>";
												}else{
													echo "<td colspan='1' class='text-center'></td><td colspan='1' class='text-center'>".round($fisikMonthsKumulatif[$i],2)."</td>";
													
												}
											 } ?>											
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
															<td>Biaya</td>
															<td>Fisik</td>
															<td>Action</td>
														</tr>
													</thead>
													<tbody id="realact">
														
													</tbody>
		
												</table>
											</div>											
											
											<div class="form-group">
												<label class=" form-control-label">Anggaran Keuangan</label>
												<div class="input-group">
											    <div class="input-group-prepend">
											      <div class="input-group-text"><i class="fa fa-money fa-fw"></i></div>
											    </div>
											    <input type="number" min=0 class="form-control" name="biaya" id="biayaActAdd" onchange="setFisikAct()" required>
											    <button type="button" class="btn btn-info" onclick="setMaxBAct()">Set Max Biaya</button>
											    <!-- Hidden Here -->
											    <input type="hidden" name="act_id" id="actkeu" value="">
											    <input type="hidden" name="biayaP" id="biayaPact" value="">
											    <input type="hidden" name="month" id="monthkeu" value="">
											    <input type="hidden" name="id_kegiatan" id="id_kegiatankeu" value="<?= $this->uri->segment(3);?>">
											  </div>											
											  <small class="form-text text-muted">Total Anggaran Tahapan: Rp.<i id="paguanggaran" style="font-style: normal;color:green;"> </i> </small>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Bobot Fisik</label>
												<div class="input-group">
											    <div class="input-group-prepend">
											      <div class="input-group-text"><i class="fa fa-money fa-fw"></i></div>
											    </div>
											    <input type="number" step="any" min=0 class="form-control" name="fisik" readonly placeholder="otomatis terisi berdasarkan nilai keuangan" id="fisikAct" required>
											    
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
												<table class="table table-sm table-bordered">
													<thead>
														<tr>
															<td>No</td>
															<td>Biaya</td>
															<td>Fisik</td>
															<td>Action</td>
														</tr>
													</thead>
													<tbody id="realstage">
														
													</tbody>
												</table>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Anggaran Keuangan</label>
												<div class="input-group">
											    <div class="input-group-prepend">
											      <div class="input-group-text"><i class="fa fa-money fa-fw"></i></div>
											    </div>
											    <input type="number" min=0 class="form-control" name="biaya" id="biayaStageAdd" onchange="setFisikStage()" required>
											    <button type="button" class="btn btn-info" onclick="setMaxBStage()">Set Max Biaya</button>
											    <!-- Hidden Here -->
											    <input type="hidden" name="stage_id" id="actkeustage" value="">
											    <input type="hidden" name="month" id="monthkeustage" value="">	
											    <input type="hidden" name="id_kegiatan" id="id_kegiatanstage" value="<?= $this->uri->segment(3);?>">										    
											  </div>											
											  <small class="form-text text-muted">Total Anggaran Tahapan: Rp.<i id="paguanggaranstage" style="font-style: normal;color:green;"> </i> </small>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Bobot Fisik</label>
												<div class="input-group">
											    <div class="input-group-prepend">
											      <div class="input-group-text"><i class="fa fa-money fa-fw"></i></div>
											    </div>
											    <input type="hidden" min=0 class="form-control" name="biayaP" id="biayaPstage" required>
											    <input type="number" step="any" min=0 class="form-control" name="fisik" readonly placeholder="otomatis terisi berdasarkan nilai keuangan" id="fisikStage" required>
											    <button type="button" class="btn btn-info" onclick="setMaxFStage()">Set Max Fisik</button>
											  </div>											
											  <small class="form-text text-muted">Total Bobot Fisik: <i id="fisikstage" style="font-style: normal;color:green;"> </i> </small>
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