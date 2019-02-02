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
										<div  style="margin-bottom: 15px;">
											<a href="<?=base_url(); ?>RMP/att1/<?=$this->uri->segment(3)?>" type="button" class="btn btn-labeled btn-danger">
													<span class="btn-label"><i class="fa fa-fw fa-arrow-left"></i></span> Back
											</a>												
											<a href="<?=base_url(); ?>Report/printAtt2/<?=$this->uri->segment(3)?>" type="button" class="btn btn-labeled btn-secondary">
													<span class="btn-label"><i class="fa fa-fw fa-print"></i></span> Print
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
									<col width="7px" />
									<col width="7px" />
									<col width="7px" />
									<thead class="text-center font-weight-bold">	
											<tr class="table-danger">
												<td>No</td>
												<td colspan="3">Tahapan Kegiatan</td>
												<td>Output yang akan dicapai</td>
												<td>Kriteria Penerimaan</td>
												<td>Acuan Pemeriksaan</td>
												<td>Target Penyelesaian</td>
												<td>Prasarana dan Sarana</td>
												<td>Pelaksana</td>
												<td>Penanggung Jawab</td>
											</tr>	

									</thead>			
									<tbody style="">
										<tr>
											<td></td>
											<td class="font-weight-bold" colspan="3"><?=$row['judul']; ?>
											</td>
											<td><?=$row['output']; ?></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
										<tr class="text-muted">
											<td class="font-weight-bold">1.</td>
											<td colspan="3">PERSIAPAN
											</td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
										<?php $bulan = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember']; ?>
										<?php if(isset($allAct) != NULL){ $no=1; foreach($allAct as $act){if($act['parent'] == 'A'){$ada=0;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){$ada=1;}} ?>
										<tr <?php if($ada!=0)echo 'class="text-muted"' ?>>
											<td></td>
											<td>1.<?=$no++; ?></td>
											<td colspan="2">
												<?php if($ada!=0){ ?>
												<?php echo $act['kegiatan'];?>
												<?php }else{ ?>
												<a href="#" class="text-info" id="<?=$act['id']; ?>" data-toggle="modal" data-target="#tambahraker" data-sarpras="<?=$act['sarpras']; ?>" data-hasil="<?=$act['hasil']; ?>" data-metode="<?=$act['metode']; ?>" data-kriteria="<?=$act['kriteria']; ?>" data-waktu="<?=$act['waktu']; ?>" data-pj="<?=$act['pj']; ?>" ><i data-toggle="tooltip" data-placement="bottom" title="Isi Rincian Kerja" style="font-style: normal;">	<?php echo $act['kegiatan'];?></i></a>
												<?php } ?>
											</td>
											<td nowrap=""><?=$act['hasil']; ?></td>
											<td nowrap=""><?=$act['kriteria']; ?></td>
											<td nowrap=""><?=$act['metode']; ?></td>
											<td nowrap="">
												<?php
													if($act['waktu'] != ""){
														$temp = explode("-",$act['waktu']);
														if($temp[0] != $temp[1]){
															echo $bulan[$temp[0]-1]." - ".$bulan[$temp[1]-1]." 2018";
														}else{
															echo $bulan[$temp[0]-1]." 2018";
														}
													}
												?>
											</td>
											<td nowrap=""><?=$act['sarpras']; ?></td>
											<td nowrap=""><?php 	foreach($allActExe as $key=>$actexe){ if($actexe['rmp_activity_id'] == $act['id']){ echo $actexe['name']." "; }}?></td>
											<td class="text-center" nowrap=""><?=$act['pj']; ?></td>
										</tr>
											<?php if(isset($allStages) != NULL){ $no3=1;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){ ?>
										<tr>
											<td></td>
											<td></td>
											<td>1.<?=($no-1).".".$no3++; ?></td>
											<td><a href="#" class="text-success" id="<?=$stage['id']; ?>" data-toggle="modal" data-target="#tambahraker2" data-sarpras="<?=$stage['sarpras']; ?>" data-hasil="<?=$stage['hasil']; ?>" data-metode="<?=$stage['metode']; ?>" data-kriteria="<?=$stage['kriteria']; ?>" data-waktu="<?=$stage['waktu']; ?>><i data-toggle="tooltip" data-placement="bottom" title="Isi Rincian Kerja" style="font-style: normal;">	<?php echo $stage['kegiatan'];?></i></a> </td>
											<td nowrap=""><?=$stage['hasil']; ?></td>
											<td nowrap=""><?=$stage['kriteria']; ?></td>
											<td nowrap=""><?=$stage['metode']; ?></td>
											<td nowrap="">
												<?php
													if($stage['waktu'] != ""){
														$temp = explode("-",$stage['waktu']);
														if($temp[0] != $temp[1]){
															echo $bulan[$temp[0]-1]." - ".$bulan[$temp[1]-1]." 2018";
														}else{
															echo $bulan[$temp[0]-1]." 2018";
														}
													} 
												?>	
											</td>
											<td nowrap=""><?=$stage['sarpras']; ?></td>
											<td nowrap=""><?php foreach($allStageExe as $key=>$stageexe){ if($stageexe['rmp_stages_id'] == $stage['id']){ echo $stageexe['name'].", "; }}?></td>
											<td nowrap=""><?=$stage['pj']; ?></td>
										</tr>
											<?php }}} ?>
										<?php }}} ?>
										<tr class="text-muted">
											<td class="font-weight-bold">2.</td>
											<td colspan="3">PELAKSANAAN
											</td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
										<?php if(isset($allAct) != NULL){ $no=1; foreach($allAct as $act){if($act['parent'] == 'B'){$ada=0;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){$ada=1;}} ?>
										<tr <?php if($ada!=0)echo 'class="text-muted"' ?>>
											<td></td>
											<td>2.<?=$no++; ?></td>
											<td nowrap="" colspan="2">
												<?php if($ada!=0){ ?>
												<?php echo $act['kegiatan'];?>
												<?php }else{ ?>
												<a href="#" class="text-info" id="<?=$act['id']; ?>" data-toggle="modal" data-target="#tambahraker" data-sarpras="<?=$act['sarpras']; ?>" data-hasil="<?=$act['hasil']; ?>" data-metode="<?=$act['metode']; ?>" data-kriteria="<?=$act['kriteria']; ?>" data-waktu="<?=$act['waktu']; ?>" data-pj="<?=$act['pj']; ?>"><i data-toggle="tooltip" data-placement="bottom" title="Isi Rincian Kerja" style="font-style: normal;">	<?php echo $act['kegiatan'];?></i></a>
												<?php } ?>
											</td>
											<td nowrap=""><?=$act['hasil']; ?></td>
											<td nowrap=""><?=$act['kriteria']; ?></td>
											<td nowrap=""><?=$act['metode']; ?></td>
											<td nowrap="">
												<?php
													if($act['waktu'] != ""){
														$temp = explode("-",$act['waktu']);
														if($temp[0] != $temp[1]){
															echo $bulan[$temp[0]-1]." - ".$bulan[$temp[1]-1]." 2018";
														}else{
															echo $bulan[$temp[0]-1]." 2018";
														}
													} 
												?>	
											</td>
											<td nowrap=""><?=$act['sarpras']; ?></td>
											<td nowrap=""><?php foreach($allActExe as $key=>$actexe){ if($actexe['rmp_activity_id'] == $act['id']){ echo $actexe['name']." "; }}?></td>
											<td class="text-center" nowrap=""><?=$act['pj']; ?></td>
										</tr>
											<?php if(isset($allStages) != NULL){ $no3=1;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){ ?>
										<tr>
											<td></td>
											<td></td>
											<td>2.<?=($no-1).".".$no3++; ?></td>
											<td><a href="#" class="text-success" id="<?=$stage['id']; ?>" data-toggle="modal" data-target="#tambahraker2" data-sarpras="<?=$stage['sarpras']; ?>" data-hasil="<?=$stage['hasil']; ?>" data-metode="<?=$stage['metode']; ?>" data-kriteria="<?=$stage['kriteria']; ?>" data-waktu="<?=$stage['waktu']; ?>><i data-toggle="tooltip" data-placement="bottom" title="Isi Rincian Kerja" style="font-style: normal;">	<?php echo $stage['kegiatan'];?></i></a> </td>
											<td nowrap=""><?=$stage['hasil']; ?></td>
											<td nowrap=""><?=$stage['kriteria']; ?></td>
											<td nowrap=""><?=$stage['metode']; ?></td>
											<td nowrap="">
												<?php
													if($stage['waktu'] != ""){
														$temp = explode("-",$stage['waktu']);
														if($temp[0] != $temp[1]){
															echo $bulan[$temp[0]-1]." - ".$bulan[$temp[1]-1]." 2018";
														}else{
															echo $bulan[$temp[0]-1]." 2018";
														}
													} 
												?>	
											</td>
											<td nowrap=""><?=$stage['sarpras']; ?></td>
											<td nowrap=""><?php foreach($allStageExe as $key=>$stageexe){ if($stageexe['rmp_stages_id'] == $stage['id']){ echo $stageexe['name']." "; }}?></td>
											<td nowrap=""><?=$stage['pj']; ?></td>
										</tr>
											<?php }}} ?>															
										<?php }}} ?>															
										<tr class="text-muted">
											<td class="font-weight-bold">3.</td>
											<td colspan="3">PELAPORAN
											</td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
										<?php if(isset($allAct) != NULL){ $no=1; foreach($allAct as $act){if($act['parent'] == 'C'){$ada=0;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){$ada=1;}} ?>
										<tr <?php if($ada!=0)echo 'class="text-muted"' ?>>
											<td></td>
											<td>3.<?=$no++; ?></td>
											<td colspan="2" nowrap="">
												<?php if($ada!=0){ ?>
												<?php echo $act['kegiatan'];?>
												<?php }else{ ?>
												<a href="#" class="text-info" id="<?=$act['id']; ?>" data-toggle="modal" data-target="#tambahraker" data-sarpras="<?=$act['sarpras']; ?>" data-hasil="<?=$act['hasil']; ?>" data-metode="<?=$act['metode']; ?>" data-kriteria="<?=$act['kriteria']; ?>" data-waktu="<?=$act['waktu']; ?>" data-pj="<?=$act['pj']; ?>"><i data-toggle="tooltip" data-placement="bottom" title="Isi Rincian Kerja" style="font-style: normal;">	<?php echo $act['kegiatan'];?></i></a>
												<?php } ?>
											</td>
											<td nowrap=""><?=$act['hasil']; ?></td>
											<td nowrap=""><?=$act['kriteria']; ?></td>
											<td nowrap=""><?=$act['metode']; ?></td>
											<td nowrap="">
												<?php
													if($act['waktu'] != ""){
														$temp = explode("-",$act['waktu']);
														if($temp[0] != $temp[1]){
															echo $bulan[$temp[0]-1]." - ".$bulan[$temp[1]-1]." 2018";
														}else{
															echo $bulan[$temp[0]-1]." 2018";
														}
													} 
												?>	
											</td>
											<td nowrap=""><?=$act['sarpras']; ?></td>
											<td nowrap=""><?php 	foreach($allActExe as $key=>$actexe){ if($actexe['rmp_activity_id'] == $act['id']){ echo $actexe['name']." "; }}?></td>
											<td class="text-center" nowrap=""><?=$act['pj']; ?></td>
										</tr>
											<?php if(isset($allStages) != NULL){ $no3=1;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){ ?>
										<tr>
											<td></td>
											<td></td>
											<td>3.<?=($no-1).".".$no3++; ?></td>
											<td><a href="#" class="text-success" id="<?=$stage['id']; ?>" data-toggle="modal" data-target="#tambahraker2" data-sarpras="<?=$stage['sarpras']; ?>" data-hasil="<?=$stage['hasil']; ?>" data-metode="<?=$stage['metode']; ?>" data-kriteria="<?=$stage['kriteria']; ?>" data-waktu="<?=$stage['waktu']; ?>><i data-toggle="tooltip" data-placement="bottom" title="Isi Rincian Kerja" style="font-style: normal;">	<?php echo $stage['kegiatan'];?></i></a> </td>
											<td nowrap=""><?=$stage['hasil']; ?></td>
											<td nowrap=""><?=$stage['kriteria']; ?></td>
											<td nowrap=""><?=$stage['metode']; ?></td>
											<td nowrap="">
												<?php
													if($stage['waktu'] != ""){
														$temp = explode("-",$stage['waktu']);
														if($temp[0] != $temp[1]){
															echo $bulan[$temp[0]-1]." - ".$bulan[$temp[1]-1]." 2018";
														}else{
															echo $bulan[$temp[0]-1]." 2018";
														}
													} 
												?>	
											</td>
											<td nowrap=""><?=$stage['sarpras']; ?></td>
											<td nowrap=""><?php 	foreach($allStageExe as $key=>$stageexe){ if($stageexe['rmp_stages_id'] == $stage['id']){ echo $stageexe['name']." "; }}?></td>
											<td nowrap=""><?=$stage['pj']; ?></td>

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
												<label class=" form-control-label">Output yang akan dicapai</label>
												<div class="input-group">
														<input type="text" name="hasil" class="form-control" placeholder="">
												</div>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Kriteria Penerimaan</label>
												<div class="input-group">
														<input type="text" name="kriteria" class="form-control" placeholder="">
												</div>
											</div>					
											<div class="form-group">
												<label class=" form-control-label">Acuan Pemeriksaan</label>
												<div class="input-group">
														<input type="text" name="metode" class="form-control" placeholder="">
												</div>
											</div>
											<div class="form-group" style="margin-bottom: 0px;">
												<label class=" form-control-label">Target Penyelesaian</label>
											</div>
											<div class="form-group row">
											   <label for="colFormLabelSm" class="col-sm-1	 col-form-label col-form-label-sm">Dari Bulan</label>
											   <div class="col-sm-3">
											    	<select name="start" class="form-control form-control-sm" required="">
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
											   	<label for="colFormLabelSm" class="col-sm-1	 col-form-label col-form-label-sm">Sampai Bulan</label>
											   <div class="col-sm-3">
											      <select name="end"  class="form-control form-control-sm" required="">
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

											</div>
											<div class="form-group">
												<label class=" form-control-label">Prasarana dan Sarana Kegiatan</label>
												<div class="input-group">
														<input type="text" name="sarpras" class="form-control">
												</div>
											</div>								
											<div id="pelaksana" class="form-group">
												<label class=" form-control-label">Pelaksana <a href="#" id="addPelaksana" class="text-info"><i class="fa fa-fw fa-plus" data-toggle="tooltip" data-placement="bottom" title="Tambah Pelaksana" style="font-style: normal;">	</i></a></label>
												<div class="input-group">
											    <div class="input-group-prepend">
											      <div class="input-group-text"><i class="fa fa-user fa-fw"></i></div>
											    </div>
											    <input type="text" class="form-control" name="pelaksana[]" value="" required="">
											  </div>
											</div>

											<div class="form-group">
												<label class=" form-control-label">Penanggung Jawab</label>
												<div class="input-group">
													<select name="pj" class="form-control" required="">
														<option selected disabled>-- Pilih Penanggung Jawab -- </option>
														<option value="">(Kosong)</option>
														<option value="<?= $kapus['name']; ?>"><?=$kapus['name']; ?></option>
														<option value="<?= $row2['pemeriksa']; ?>"><?=$row2['pemeriksa']; ?></option>
														<option value="<?= $row2['konseptor']; ?>"><?=$row2['konseptor']; ?></option>
													</select>
												</div>
											</div>																							
										  
										  <input type="hidden" name="activity_id" value="<?=$row['id']; ?>">
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
												<label class=" form-control-label">Output yang akan dicapai</label>
												<div class="input-group">
														<input type="text" name="hasil" class="form-control" placeholder="">
												</div>
											</div>

											<div class="form-group">
												<label class=" form-control-label">Kriteria Penerimaan</label>
												<div class="input-group">
														<input type="text" name="kriteria" class="form-control" placeholder="">
												</div>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Acuan Pemeriksaan</label>
												<div class="input-group">
														<input type="text" name="metode" class="form-control" placeholder="">
												</div>
											</div>
											<div class="form-group" style="margin-bottom: 0px;">
												<label class=" form-control-label">Target Penyelesaian</label>
											</div>	
											<div class="form-group row">
										    <label for="colFormLabelSm" class="col-sm-1	 col-form-label col-form-label-sm">Dari Bulan</label>
											    <div class="col-sm-3">
											      <select name="start" class="form-control form-control-sm" >
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
											    <div class="col-sm-3">
											      <select name="end"  class="form-control form-control-sm">
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
										  </div>
											<div class="form-group">
												<label class=" form-control-label">Prasarana dan Sarana Kegiatan</label>
												<div class="input-group">
														<input type="text" name="sarpras" class="form-control">
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
																																
										  
									      <input type="hidden" name="stages_id" value="<?=$row['id']; ?>">
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