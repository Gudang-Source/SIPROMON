<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>
        <h2 style="text-align:center;">Rencana Kerja Kegiatan</h2>
        <div style="text-align: center; font-family: Arial; font-size: 14; line-height: 1.5">
          <b><?php echo $row['judul'] ?><br>
          Tahun Anggaran <?php echo $row['tahun_anggaran'] ?></b>
        <div>
        <br>
        <?php $bulan = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember']; ?>
				<table border="1" style="border-collapse: collapse;">	
					<thead >	
							<tr style="text-align: center; background-color: grey;">
								<td style="text-align: center;">No</td>
								<td style="text-align: center;" colspan="3">Tahapan Kegiatan</td>
								<td style="text-align: center;">Output yang akan dicapai</td>
								<td style="text-align: center;">Kriteria Penerimaan</td>
								<td style="text-align: center;">Acuan Pemeriksaan</td>
								<td style="text-align: center;">Target Penyelesaian</td>
								<td style="text-align: center;">Prasarana dan Sarana</td>
								<td style="text-align: center;">Pelaksana</td>
								<td style="text-align: center;">Penanggung Jawab</td>
							</tr>	

					</thead>			
					<tbody style="">
						<tr>
							<td></td>
							<td class="font-weight-bold" colspan="3"><?=$row['judul']; ?>
							</td>
							<td></td>
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
						<?php if(isset($allAct) != NULL){ $no=1; foreach($allAct as $act){if($act['parent'] == 'A'){$ada=0;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){$ada=1;}} ?>
						<tr>
							<td></td>
							<td>1.<?=$no++; ?></td>
							<td nowrap="" colspan="2">
								<?php echo $act['kegiatan'];?>
							</td>
							<td nowrap=""><?=$act['hasil']; ?></td>
							<td nowrap=""><?=$act['kriteria']; ?></td>
							<td nowrap=""><?=$act['metode']; ?></td>
							<td nowrap="">
								<?php
									if($act['waktu'] != ""){
										$temp = explode("-",$act['waktu']);
										if($temp[0] != $temp[1]){
											echo $bulan[$temp[0]-1]." - ".$bulan[$temp[1]-1]." ".$row['tahun_anggaran'];
										}else{
											echo $bulan[$temp[0]-1]." ".$row['tahun_anggaran'];
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
							<td><?php echo $stage['kegiatan'];?> </td>
							<td nowrap=""><?=$stage['hasil']; ?></td>
							<td nowrap=""><?=$stage['kriteria']; ?></td>
							<td nowrap=""><?=$stage['metode']; ?></td>
							<td nowrap="">
								<?php
									if($stage['waktu'] != ""){
										$temp = explode("-",$stage['waktu']);
										if($temp[0] != $temp[1]){
											echo $bulan[$temp[0]-1]." - ".$bulan[$temp[1]-1]." ".$row['tahun_anggaran'];
										}else{
											echo $bulan[$temp[0]-1]." ".$row['tahun_anggaran'];
										}
									}
								?>
							</td>
							<td nowrap=""><?=$stage['sarpras']; ?></td>
							<td nowrap=""><?php 	foreach($allStageExe as $key=>$stageexe){ if($stageexe['rmp_stages_id'] == $stage['id']){ echo $stageexe['name'].", "; }}?></td>
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
						<?php if(isset($allAct) != NULL){ $no=1; foreach($allAct as $act){if($act['parent'] == 'B'){$ada=0;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){$ada+=$stage['anggaran'];}} ?>
						<tr <?php if($ada!=0)echo 'class="text-muted"' ?>>
							<td></td>
							<td>2.<?=$no++; ?></td>
							<td nowrap="" colspan="2">
								<?php echo $act['kegiatan'];?>
							</td>
							<td nowrap=""><?=$act['hasil']; ?></td>
							<td nowrap=""><?=$act['kriteria']; ?></td>
							<td nowrap=""><?=$act['metode']; ?></td>
							<td nowrap="">
								<?php
									if($act['waktu'] != ""){
										$temp = explode("-",$act['waktu']);
										if($temp[0] != $temp[1]){
											echo $bulan[$temp[0]-1]." - ".$bulan[$temp[1]-1]." ".$row['tahun_anggaran'];
										}else{
											echo $bulan[$temp[0]-1]." ".$row['tahun_anggaran'];
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
							<td>2.<?=($no-1).".".$no3++; ?></td>
							<td><?php echo $stage['kegiatan'];?> </td>
							<td nowrap=""><?=$stage['hasil']; ?></td>
							<td nowrap=""><?=$stage['kriteria']; ?></td>
							<td nowrap=""><?=$stage['metode']; ?></td>
							<td nowrap="">
								<?php
									if($stage['waktu'] != ""){
										$temp = explode("-",$stage['waktu']);
										if($temp[0] != $temp[1]){
											echo $bulan[$temp[0]-1]." - ".$bulan[$temp[1]-1]." ".$row['tahun_anggaran'];
										}else{
											echo $bulan[$temp[0]-1]." ".$row['tahun_anggaran'];
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
							<td nowrap="" colspan="2">
								<?php echo $act['kegiatan'];?>
							</td>
							<td nowrap=""><?=$act['hasil']; ?></td>
							<td nowrap=""><?=$act['kriteria']; ?></td>
							<td nowrap=""><?=$act['metode']; ?></td>
							<td nowrap="">
								<?php
									if($act['waktu'] != ""){
										$temp = explode("-",$act['waktu']);
										if($temp[0] != $temp[1]){
											echo $bulan[$temp[0]-1]." - ".$bulan[$temp[1]-1]." ".$row['tahun_anggaran'];
										}else{
											echo $bulan[$temp[0]-1]." ".$row['tahun_anggaran'];
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
							<td><?php echo $stage['kegiatan'];?> </td>
							<td nowrap=""><?=$stage['hasil']; ?></td>
							<td nowrap=""><?=$stage['kriteria']; ?></td>
							<td nowrap=""><?=$stage['metode']; ?></td>
							<td nowrap="">
								<?php
									if($stage['waktu'] != ""){
										$temp = explode("-",$stage['waktu']);
										if($temp[0] != $temp[1]){
											echo $bulan[$temp[0]-1]." - ".$bulan[$temp[1]-1]." ".$row['tahun_anggaran'];
										}else{
											echo $bulan[$temp[0]-1]." ".$row['tahun_anggaran'];
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
</body>
</html>