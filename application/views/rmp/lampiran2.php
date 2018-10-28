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
										<center><h2>Kerangka dan Rencana Kerja Kegiatan</h2><?=$row['judul']; ?><br>Tahun Anggaran <?=$row['tahun_anggaran']; ?></center>
									</div>
									<div>
										<div class="form-group col-sm-2">
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
										<div  style="margin-bottom: 15px;">
											<a href="<?=base_url(); ?>RMP/att1/<?=$this->uri->segment(3)?>" type="button" class="btn btn-labeled btn-danger">
													<span class="btn-label"><i class="fa fa-fw fa-arrow-left"></i></span> Back
											</a>												
											<a href="<?=base_url(); ?>RMP/att3/<?=$this->uri->segment(3)?>" type="button" class="btn btn-labeled btn-success">
													<span class="btn-label"><i class="fa fa-fw fa-arrow-right"></i></span> Lampiran 3 (Kurva S)
											</a>												
										</div>

									</div>
								</div>
							</div>
							<div class="table-responsive">
								<table class="table table-sm table-bordered table-hover" style="background-color: white; border-color: white; font-size:11px;">	
									<col width="200">
									<col width="200">
									<thead class="text-center font-weight-bold">	
											<tr class="table-danger">
												<td rowspan="4">No</td>
												<td rowspan="4">Tahapan Kegiatan</td>
												<td rowspan="2" colspan="4" width="500">Hasil Pelaksanaan Kegiatan</td>
												<td rowspan="4">Prasarana dan Sarana Kegiatan</td>
												<td rowspan="4">Anggaran Kegiatan	<br> (Rp.)</td>
												<td rowspan="4">Penanggung Jawab</td>
												<td rowspan="4">Pelaksana</td>
												<td colspan="48">Waktu</td>
											</tr>	
											<tr> 
												<td colspan="4" class="table-warning">RMP</td>
												<td colspan="4" class="table-warning">Lap Awal</td>
												<td colspan="4" class="table-warning"></td>
												<td colspan="4" class="table-warning"></td>
												<td colspan="4" class="table-warning"></td>
												<td colspan="4" class="table-warning">Lap</td>
												<td colspan="4" class="table-warning"></td>
												<td colspan="4" class="table-warning"></td>
												<td colspan="4" class="table-warning"></td>
												<td colspan="4" class="table-warning"></td>
												<td colspan="4" class="table-warning">Konsep</td>
												<td colspan="4" class="table-warning">Lap Akhir</td>
											</tr>
											<tr class="table-danger">
												<td colspan="2" rowspan="2">Sub Kegiatan</td>
												<td colspan="2" rowspan="2">Sub Tahapan</td>
												<td colspan="4">Jan</td>
												<td colspan="4">Feb</td>
												<td colspan="4">Mar</td>
												<td colspan="4">Apr</td>
												<td colspan="4">Mei</td>
												<td colspan="4">Jun</td>
												<td colspan="4">Jul</td>
												<td colspan="4">Agust</td>
												<td colspan="4">Sept</td>
												<td colspan="4">Okt</td>
												<td colspan="4">Nop</td>
												<td colspan="4">Des</td>
											</tr>
											<tr class="table-danger">
												<?php $num=48;for($i=1;$i<=$num;$i++){ ?>
														<td	><?=$i ?></td>	
												<?php 	} ?>
											</tr>	
									</thead>			
									<tbody style="">
										<tr>
											<td></td>
											<td class="font-weight-bold"><?=$row['judul']; ?>
											</td>
											<td colspan="2"><?=$row['output']; ?></td>
											<td></td>
											<td></td>
											<td></td>
											<td><?=number_format($row['pagu'],0,',','.'); ?></td>
											<td></td>
											<td></td>
									<?php $num=48;for($i=1;$i<=$num;$i++){ ?>
											<td></td>	
									<?php 	} ?>											
										</tr>
										<tr class="text-muted">
											<td class="font-weight-bold">1.</td>
											<td>PERSIAPAN
											</td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td><?=number_format($total[0],0,',','.');?></td>
											<td></td>
											<td></td>
									<?php $num=48;for($i=1;$i<=$num;$i++){ ?>
											<td></td>	
									<?php 	} ?>											
										</tr>
										<?php if(isset($allAct) != NULL){ $no=1; foreach($allAct as $act){if($act['parent'] == 'A'){$ada=0;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){$ada+=$stage['anggaran'];}} ?>
										<tr <?php if($ada!=0)echo 'class="text-muted"' ?>>
											<td>1.<?=$no++; ?></td>
											<td nowrap="">
												<?php if($ada!=0){ ?>
												<?php echo $act['kegiatan'];?>
												<?php }else{ ?>
												<a href="#" class="text-info" id="<?=$act['id']; ?>" data-toggle="modal" data-target="#tambahraker"><i data-toggle="tooltip" data-placement="bottom" title="Isi Rincian Kerja" style="font-style: normal;">	<?php echo $act['kegiatan'];?></i></a>
												<?php } ?>
											</td>
											<td colspan="2" nowrap=""><?=$act['hasil']; ?></td>
												<td colspan="2"></td>
											<td nowrap=""><?=$act['sarpras']; ?></td>
											<td class="text-center">
												<?php if($ada!=0){ ?>
												<?=number_format($ada,0,',','.'); ?>
												<?php }else{ ?>
												<?=number_format($act['anggaran'],0,',','.'); ?>
												<?php } ?>												
											</td>
											<td class="text-center" nowrap=""><?=$act['pj']; ?></td>
											<td nowrap=""><?php 	foreach($allActExe as $key=>$actexe){ if($actexe['rmp_activity_id'] == $act['id']){ echo $actexe['name']." "; }}?></td>
									<?php $waktu=explode("-",$act['waktu']);$start=0;$num=48;for($i=1;$i<=$num;$i++){ ?>
											<?php  if($waktu[0] == $i || $start == 1){ $start=1; ?>
											<td class="table-black"></td>
											<?php if($waktu[1] == $i){$start=0;}}else{ ?>
											<td></td>
											<?php } ?>
									<?php 	} ?>																						
										</tr>
											<?php if(isset($allStages) != NULL){ $no3=1;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){ ?>
										<tr>
											<td>1.<?=($no-1).".".$no3++; ?></td>
											<td><a href="#" class="text-success" id="<?=$stage['id']; ?>" data-toggle="modal" data-target="#tambahraker2"><i data-toggle="tooltip" data-placement="bottom" title="Isi Rincian Kerja" style="font-style: normal;">	<?php echo $stage['kegiatan'];?></i></a> </td>
												<td colspan="2"></td>
											<td colspan="2" nowrap=""><?=$stage['hasil']; ?></td>
											<td><?=$stage['sarpras']; ?></td>
											<td class="text-center"><?=number_format($stage['anggaran'],0,',','.'); ?></td>
											<td class="text-center" nowrap=""><?=$stage['pj']; ?></td>
											<td nowrap=""><?php 	foreach($allStageExe as $key=>$stageexe){ if($stageexe['rmp_stages_id'] == $stage['id']){ echo $stageexe['name']." "; }}?></td>
									<?php $waktu=explode("-",$stage['waktu']);$start=0;$num=48;for($i=1;$i<=$num;$i++){ ?>
											<?php  if($waktu[0] == $i || $start == 1){ $start=1; ?>
											<td class="table-black"></td>
											<?php if($waktu[1] == $i){$start=0;}}else{ ?>
											<td></td>
											<?php } ?>
									<?php 	} ?>											
										</tr>
											<?php }}} ?>
										<?php }}} ?>
										<tr class="text-muted">
											<td class="font-weight-bold">2.</td>
											<td>PELAKSANAAN
											</td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td><?=number_format($total[1],0,',','.');?></td>
											<td></td>
											<td></td>
									<?php $num=48;for($i=1;$i<=$num;$i++){ ?>
											<td></td>	
									<?php 	} ?>											
										</tr>
										<?php if(isset($allAct) != NULL){ $no=1; foreach($allAct as $act){if($act['parent'] == 'B'){$ada=0;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){$ada+=$stage['anggaran'];}} ?>
										<tr <?php if($ada!=0)echo 'class="text-muted"' ?>>
											<td>2.<?=$no++; ?></td>
											<td nowrap="">
												<?php if($ada!=0){ ?>
												<?php echo $act['kegiatan'];?>
												<?php }else{ ?>
												<a href="#" class="text-info" id="<?=$act['id']; ?>" data-toggle="modal" data-target="#tambahraker"><i data-toggle="tooltip" data-placement="bottom" title="Isi Rincian Kerja" style="font-style: normal;">	<?php echo $act['kegiatan'];?></i></a>
												<?php } ?>
											</td>
											<td colspan="2" nowrap=""><?=$act['hasil']; ?></td>
												<td colspan="2"></td>
											<td nowrap=""><?=$act['sarpras']; ?></td>
											<td class="text-center">
												<?php if($ada!=0){ ?>
												<?=number_format($ada,0,',','.'); ?>
												<?php }else{ ?>
												<?=number_format($act['anggaran'],0,',','.'); ?>
												<?php } ?>												
											</td>
											<td class="text-center" nowrap=""><?=$act['pj']; ?></td>
											<td nowrap=""><?php 	foreach($allActExe as $key=>$actexe){ if($actexe['rmp_activity_id'] == $act['id']){ echo $actexe['name']." "; }}?></td>
									<?php $waktu=explode("-",$act['waktu']);$start=0;$num=48;for($i=1;$i<=$num;$i++){ ?>
											<?php  if($waktu[0] == $i || $start == 1){ $start=1; ?>
											<td class="table-black"></td>
											<?php if($waktu[1] == $i){$start=0;}}else{ ?>
											<td></td>
											<?php } ?>
									<?php 	} ?>											
										</tr>
											<?php if(isset($allStages) != NULL){ $no3=1;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){ ?>
										<tr>
											<td>2.<?=($no-1).".".$no3++; ?></td>
											<td><a href="#" class="text-success" id="<?=$stage['id']; ?>" data-toggle="modal" data-target="#tambahraker2"><i data-toggle="tooltip" data-placement="bottom" title="Isi Rincian Kerja" style="font-style: normal;">	<?php echo $stage['kegiatan'];?></i></a> </td>
												<td colspan="2"></td>
											<td colspan="2" nowrap=""><?=$stage['hasil']; ?></td>
											<td><?=$stage['sarpras']; ?></td>
											<td class="text-center"><?=number_format($stage['anggaran'],0,',','.'); ?></td>
											<td class="text-center" nowrap=""><?=$stage['pj']; ?></td>
											<td nowrap=""><?php 	foreach($allStageExe as $key=>$stageexe){ if($stageexe['rmp_stages_id'] == $stage['id']){ echo $stageexe['name']." "; }}?></td>
									<?php $waktu=explode("-",$stage['waktu']);$start=0;$num=48;for($i=1;$i<=$num;$i++){ ?>
											<?php  if($waktu[0] == $i || $start == 1){ $start=1; ?>
											<td class="table-black"></td>
											<?php if($waktu[1] == $i){$start=0;}}else{ ?>
											<td></td>
											<?php } ?>
									<?php 	} ?>											
										</tr>
											<?php }}} ?>															
										<?php }}} ?>															
										<tr class="text-muted">
											<td class="font-weight-bold">3.</td>
											<td>PELAPORAN
											</td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td><?=number_format($total[2],0,',','.');?></td>
											<td></td>
											<td></td>
									<?php $num=48;for($i=1;$i<=$num;$i++){ ?>
											<td></td>	
									<?php 	} ?>											
										</tr>
										<?php if(isset($allAct) != NULL){ $no=1; foreach($allAct as $act){if($act['parent'] == 'C'){$ada=0;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){$ada+=$stage['anggaran'];}} ?>
										<tr <?php if($ada!=0)echo 'class="text-muted"' ?>>
											<td>3.<?=$no++; ?></td>
											<td nowrap="">
												<?php if($ada!=0){ ?>
												<?php echo $act['kegiatan'];?>
												<?php }else{ ?>
												<a href="#" class="text-info" id="<?=$act['id']; ?>" data-toggle="modal" data-target="#tambahraker"><i data-toggle="tooltip" data-placement="bottom" title="Isi Rincian Kerja" style="font-style: normal;">	<?php echo $act['kegiatan'];?></i></a>
												<?php } ?>
											</td>
											<td colspan="2" nowrap=""><?=$act['hasil']; ?></td>
												<td colspan="2"></td>
											<td nowrap=""><?=$act['sarpras']; ?></td>
											<td class="text-center">
												<?php if($ada!=0){ ?>
												<?=number_format($ada,0,',','.'); ?>
												<?php }else{ ?>
												<?=number_format($act['anggaran'],0,',','.'); ?>
												<?php } ?>												
											</td>
											<td class="text-center" nowrap=""><?=$act['pj']; ?></td>
											<td nowrap=""><?php 	foreach($allActExe as $key=>$actexe){ if($actexe['rmp_activity_id'] == $act['id']){ echo $actexe['name']." "; }}?></td>
									<?php $waktu=explode("-",$act['waktu']);$start=0;$num=48;for($i=1;$i<=$num;$i++){ ?>
											<?php  if($waktu[0] == $i || $start == 1){ $start=1; ?>
											<td class="table-black"></td>
											<?php if($waktu[1] == $i){$start=0;}}else{ ?>
											<td></td>
											<?php } ?>
									<?php 	} ?>											
										</tr>
											<?php if(isset($allStages) != NULL){ $no3=1;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){ ?>
										<tr>
											<td>3.<?=($no-1).".".$no3++; ?></td>
											<td><a href="#" class="text-success" id="<?=$stage['id']; ?>" data-toggle="modal" data-target="#tambahraker2"><i data-toggle="tooltip" data-placement="bottom" title="Isi Rincian Kerja" style="font-style: normal;">	<?php echo $stage['kegiatan'];?></i></a> </td>
												<td colspan="2"></td>
											<td colspan="2" nowrap=""><?=$stage['hasil']; ?></td>
											<td><?=$stage['sarpras']; ?></td>
											<td class="text-center"><?=number_format($stage['anggaran'],0,',','.'); ?></td>
											<td class="text-center" nowrap=""><?=$stage['pj']; ?></td>
											<td nowrap=""><?php 	foreach($allStageExe as $key=>$stageexe){ if($stageexe['rmp_stages_id'] == $stage['id']){ echo $stageexe['name']." "; }}?></td>
									<?php $waktu=explode("-",$stage['waktu']);$start=0;$num=48;for($i=1;$i<=$num;$i++){ ?>
											<?php  if($waktu[0] == $i || $start == 1){ $start=1; ?>
											<td class="table-black"></td>
											<?php if($waktu[1] == $i){$start=0;}}else{ ?>
											<td></td>
											<?php } ?>
									<?php 	} ?>											
										</tr>
											<?php }}} ?>															
										<?php }}} ?>															
									</tbody>	
								</table>
							</div>
						</div><!-- .animated -->
				</div><!-- .content -->


		</div><!-- /#right-panel -->
		<div class="modal fade" id="tambahraker" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
								<div class="modal-header">
										<h5 class="modal-title" id="largeModalLabel">Rincian Rancangan Kerja</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
										</button>
								</div>
								<div class="modal-body">
								<?php echo form_open('RMP/addDetailAct/'.$this->uri->segment(3)); ?>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class=" form-control-label">Hasil Pelaksanaan Kegiatan</label>
												<div class="input-group">
														<input type="text" name="hasil" class="form-control" placeholder="">
												</div>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Prasarana dan Sarana Kegiatan</label>
												<div class="input-group">
														<input type="text" name="sarpras" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Anggaran Biaya</label>
												<div class="input-group">
											    <div class="input-group-prepend">
											      <div class="input-group-text"><i class="fa fa-money fa-fw"></i></div>
											    </div>
											    <input type="number" min=0 class="form-control" name="anggaran" >
											  </div>											
											  <small class="form-text text-muted">Sisa Pagu: <i style="font-style: normal;color:red;">Rp. <?=number_format($row['sisa'],0,',','.'); ?></i> </small>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Penanggung Jawab</label>
												<div class="input-group">
													<select name="pj" class="form-control">
														<option selected disabled>-- Pilih Penanggung Jawab -- </option>
														<option value="">(Kosong)</option>
														<option value="<?= $kapus['name']; ?>"><?=$kapus['name']; ?></option>
														<option value="<?= $row2['pemeriksa']; ?>"><?=$row2['pemeriksa']; ?></option>
														<option value="<?= $row2['konseptor']; ?>"><?=$row2['konseptor']; ?></option>
													</select>
												</div>
											</div>											
											<div id="pelaksana" class="form-group">
												<label class=" form-control-label">Pelaksana <a href="#" id="addPelaksana" class="text-info"><i class="fa fa-fw fa-plus" data-toggle="tooltip" data-placement="bottom" title="Tambah Pelaksana" style="font-style: normal;">	</i></a></label>
												<div class="input-group">
											    <div class="input-group-prepend">
											      <div class="input-group-text"><i class="fa fa-user fa-fw"></i></div>
											    </div>
											    <input type="text" class="form-control" name="pelaksana[]" value="">
											  </div>
											</div>
											<div class="form-group" style="margin-bottom: 0px;">
												<label class=" form-control-label">Waktu</label>
											</div>																						
										  <div class="form-group row">
										    <label for="colFormLabelSm" class="col-sm-1	 col-form-label col-form-label-sm">Dari Bulan</label>
										    <div class="col-sm-3">
										      <select name="start[]" class="form-control form-control-sm" >
										      	<option value="1">Januari</option>
										      	<option value="2">Februari</option>
										      	<option value="3">Maret</option>
										      	<option value="4">April</option>
										      	<option value="5">Mei</option>
										      	<option value="6">Juni</option>
										      	<option value="7">Juli</option>
										      	<option value="8">Agustus</option>
										      	<option value="9">September</option>
										      	<option value="10">Oktober</option>
										      	<option value="11">November</option>
										      	<option value="12">Desember</option>
										      </select>
										    </div>
										    <label for="colFormLabelSm" class="col-sm-2	 col-form-label col-form-label-sm">Minggu ke-</label>
										    <div class="col-sm-3">
										      <input type="number" min=1 max=4 class="form-control form-control-sm" name="start[]" >
										    </div>										    
										  </div>
										  <div class="form-group row">
										    <label for="colFormLabelSm" class="col-sm-1	 col-form-label col-form-label-sm">Sampai Bulan</label>
										    <div class="col-sm-3">
										      <select name="end[]"  class="form-control form-control-sm">
										      	<option value="1">Januari</option>
										      	<option value="2">Februari</option>
										      	<option value="3">Maret</option>
										      	<option value="4">April</option>
										      	<option value="5">Mei</option>
										      	<option value="6">Juni</option>
										      	<option value="7">Juli</option>
										      	<option value="8">Agustus</option>
										      	<option value="9">September</option>
										      	<option value="10">Oktober</option>
										      	<option value="11">November</option>
										      	<option value="12">Desember</option>
										      </select>
										    </div>
										    <label for="colFormLabelSm" class="col-sm-2	 col-form-label col-form-label-sm">Minggu ke-</label>
										    <div class="col-sm-3">
										      <input type="number" min=1 max=4 class="form-control form-control-sm" name="end[]" >
										      <input type="hidden" name="activity_id" value="<?=$row['id']; ?>">
										    </div>										    
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
		<!-- Modal untuk rincian kerja tahapan kecil -->
		<div class="modal fade" id="tambahraker2" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
								<div class="modal-header">
										<h5 class="modal-title" id="largeModalLabel">Rincian Rancangan Kerja Tahapan</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
										</button>
								</div>
								<div class="modal-body">
								<?php echo form_open('RMP/addDetailStage/'.$this->uri->segment(3)); ?>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class=" form-control-label">Hasil Pelaksanaan Kegiatan</label>
												<div class="input-group">
														<input type="text" name="hasil" class="form-control" placeholder="">
												</div>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Prasarana dan Sarana Kegiatan</label>
												<div class="input-group">
														<input type="text" name="sarpras" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Anggaran Biaya</label>
												<div class="input-group">
											    <div class="input-group-prepend">
											      <div class="input-group-text"><i class="fa fa-money fa-fw"></i></div>
											    </div>
											    <input type="number" min=0 class="form-control" name="anggaran" >
											  </div>											
											  <small class="form-text text-muted">Sisa Pagu: <i style="font-style: normal;color:red;">Rp. <?=number_format($row['sisa'],0,',','.'); ?></i> </small>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Penanggung Jawab</label>
												<div class="input-group">
													<select name="pj" class="form-control">
														<option selected disabled>-- Pilih Penanggung Jawab -- </option>
														<option value="">(Kosong)</option>
														<option value="<?= $kapus['name']; ?>"><?=$kapus['name']; ?></option>
														<option value="<?= $row2['pemeriksa']; ?>"><?=$row2['pemeriksa']; ?></option>
														<option value="<?= $row2['konseptor']; ?>"><?=$row2['konseptor']; ?></option>
													</select>
												</div>
											</div>											
											<div id="pelaksana2" class="form-group">
												<label class=" form-control-label">Pelaksana <a href="#" id="addPelaksana2" class="text-info"><i class="fa fa-fw fa-plus" data-toggle="tooltip" data-placement="bottom" title="Tambah Pelaksana" style="font-style: normal;">	</i></a></label>
												<div class="input-group">
											    <div class="input-group-prepend">
											      <div class="input-group-text"><i class="fa fa-user fa-fw"></i></div>
											    </div>
											    <input type="text" class="form-control" name="pelaksana[]" value="">
											  </div>
											</div>
											<div class="form-group" style="margin-bottom: 0px;">
												<label class=" form-control-label">Waktu</label>
											</div>																						
										  <div class="form-group row">
										    <label for="colFormLabelSm" class="col-sm-1	 col-form-label col-form-label-sm">Dari Bulan</label>
										    <div class="col-sm-3">
										      <select name="start[]" class="form-control form-control-sm" >
										      	<option value="1">Januari</option>
										      	<option value="2">Februari</option>
										      	<option value="3">Maret</option>
										      	<option value="4">April</option>
										      	<option value="5">Mei</option>
										      	<option value="6">Juni</option>
										      	<option value="7">Juli</option>
										      	<option value="8">Agustus</option>
										      	<option value="9">September</option>
										      	<option value="10">Oktober</option>
										      	<option value="11">November</option>
										      	<option value="12">Desember</option>
										      </select>
										    </div>
										    <label for="colFormLabelSm" class="col-sm-2	 col-form-label col-form-label-sm">Minggu ke-</label>
										    <div class="col-sm-3">
										      <input type="number" min=1 max=4 class="form-control form-control-sm" name="start[]" >
										    </div>										    
										  </div>
										  <div class="form-group row">
										    <label for="colFormLabelSm" class="col-sm-1	 col-form-label col-form-label-sm">Sampai Bulan</label>
										    <div class="col-sm-3">
										      <select name="end[]"  class="form-control form-control-sm">
										      	<option value="1">Januari</option>
										      	<option value="2">Februari</option>
										      	<option value="3">Maret</option>
										      	<option value="4">April</option>
										      	<option value="5">Mei</option>
										      	<option value="6">Juni</option>
										      	<option value="7">Juli</option>
										      	<option value="8">Agustus</option>
										      	<option value="9">September</option>
										      	<option value="10">Oktober</option>
										      	<option value="11">November</option>
										      	<option value="12">Desember</option>
										      </select>
										    </div>
										    <label for="colFormLabelSm" class="col-sm-2	 col-form-label col-form-label-sm">Minggu ke-</label>
										    <div class="col-sm-3">
										      <input type="number" min=1 max=4 class="form-control form-control-sm" name="end[]" >
										      <input type="hidden" name="stages_id" value="<?=$row['id']; ?>">
										    </div>										    
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