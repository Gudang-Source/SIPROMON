<html>
<style>
</style>
      <body>
        <div style="text-align:center; font-size: 14; font-family: Calibri;"><b>LAMPIRAN 3 KURVA S RENCANA PELAKSANAAN FISIK DAN KEUANGAN</b></div>
        <div style="text-align: center; font-size: 14; font-family: Calibri; line-height: 1;">
          <b><?=$row['judul']; ?></b><br>
          <b>Tahun Anggaran <?=$row['tahun_anggaran']; ?></b>
        <div>
        <br>

        <table border="1" style="border-collapse: collapse;">
         	<thead style="text-align:center; font-size: 12; font-family: Calibri;">	
				<tr style="background-color: #cccccc;" >
					<th colspan="1" rowspan="2" style="vertical-align: middle;">
						No
					</th>
					<th colspan="4" rowspan="2" style="vertical-align: middle;">
						Uraian Kegiatan
					</th>
					<th rowspan="2">Satuan/Volume</th>
					<th rowspan="2">Harga Satuan</th>
					<th rowspan="2">Jumlah Biaya<br>[Rp.]</th>
					<th rowspan="2">Bobot Keuangan<br>[%]</th>
					<th rowspan="2">Bobot Fisik<br>[%]</th>
					<th rowspan="1" colspan="12">Bulan</th>
				</tr>
				<tr style="background-color: #eaeaea;">
					<th colspan="1">Jan</th>
					<th colspan="1">Feb</th>
					<th colspan="1">Mar</th>
					<th colspan="1">Apr</th>
					<th colspan="1">Mei</th>
					<th colspan="1">Jun</th>
					<th colspan="1">Jul</th>
					<th colspan="1">Agt</th>
					<th colspan="1">Sep</th>
					<th colspan="1">Okt</th>
					<th colspan="1">Nov</th>
					<th colspan="1">Des</th>
				</tr>
			</thead>

			<tbody style="font-size: 12; font-family: Calibri;">
				<tr>
					<td></td>
					<td colspan="4"><b>Judul Kegiatan</b></br><?=$row['judul']; ?></td>
					<td></td>
					<td></td>
					<td><?=number_format($row['pagu'],0,',','.'); ?></td>
					<td></td>
					<td></td>
					<?php for($bulan=1;$bulan<=12;$bulan++){?>
						 <td></td>
					<?php } ?>
				</tr>
				<tr>
					<td><b>1.</b></td>
					<td colspan="4"><b>PERSIAPAN</b></td>
					<td></td>
					<td></td>
					<td><?=number_format($total[0],0,',','.');?></td>
					<td><?=round($totalP[0],2); ?></td>
					<td><?=round($totalF[0],2); ?></td>
					<?php for($i=0;$i<12;$i++){ ?>
						<td></td>
					<?php } ?>
														
				</tr>
				<?php if(isset($allAct) != NULL){ $no=1; foreach($allAct as $act){if($act['parent'] == 'A'){?>
				<tr <?php if($actTotal[$act['id']]['hchild']!=0)echo 'style="font-weight:bold"' ?>>
					<td></td>
					<td colspan="4">1.<?=$no++; ?> <?php echo $act['kegiatan'];?>
					</td>
					<td></td>
					<td></td>
					<td><?=number_format($actTotal[$act['id']]['biaya'],0,',','.'); ?></td>
					<td><?=round($actTotal[$act['id']]['biayaP'],2);?></td>
					<td><?=round($actTotal[$act['id']]['fisik'],2); ?></td>

					<?php 
							for($i=0;$i<12;$i++){
								if($actTotal[$act['id']]['hchild']==0 && $actMonths[$act['id']][$i]['biaya'] != 'x'){
									echo "<td>".number_format((int)$actMonths[$act['id']][($i)]['biaya'],0,',','.')."</td>";
								}else{
									echo "<td></td>";
								}
						 	} ?>
														
				</tr>
					<?php if(isset($allStages) != NULL){ $no3=1;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){ ?>
				<tr>
					<td></td>
					<td colspan="4">   1.<?=($no-1).".".$no3++; ?> <?php echo $stage['kegiatan'];?> 
					</td>
					<td></td>
					<td></td>
					<td><?=round($stageTotal[$stage['id']]['biaya'],2); ?></td>
					<td><?=round($stageTotal[$stage['id']]['biayaP'],2); ?></td>
					<td><?=round($stageTotal[$stage['id']]['fisik'],2); ?></td>
					<?php 
					for($i=0;$i<12;$i++){ 
						if($stageMonths[$stage['id']][$i]['biaya'] != "x"){
							echo "<td>".number_format($stageMonths[$stage['id']][$i]['biaya'],0,',','.')."</td>";
						}else{
							echo "<td></td>";
						}
					}
					?>
														
				</tr>
					<?php }}} ?>
				<?php }}} ?>
				<tr>
					<td><b>2.</b></td>
					<td colspan="4"><b>PELAKSANAAN</b>
					</td>
					<td></td>
					<td></td>
					<td><?=number_format($total[1],0,',','.');?></td>
					<td><?=round($totalP[1],2); ?></td>
					<td><?=round($totalF[1],2); ?></td>											
					<?php for($i=0;$i<12;$i++){ ?>
						<td></td>
					<?php } ?>
														
				</tr>
				<?php if(isset($allAct) != NULL){ $no=1; foreach($allAct as $act){if($act['parent'] == 'B'){ ?>
				<tr>
					<td></td>
					<td colspan="4">2.<?=$no++; ?> <?php echo $act['kegiatan'];?>
					</td>
					<td></td>
					<td></td>
					<td><?=number_format($actTotal[$act['id']]['biaya'],0,',','.'); ?></td>
					<td><?=round($actTotal[$act['id']]['biayaP'],2);?></td>
					<td><?=round($actTotal[$act['id']]['fisik'],2); ?></td>

					<?php 
							for($i=0;$i<12;$i++){
								if($actTotal[$act['id']]['hchild']==0 && $actMonths[$act['id']][$i]['biaya'] != 'x'){
									echo "<td>".number_format((int)$actMonths[$act['id']][($i)]['biaya'],0,',','.')."</td>";
								}else{
									echo "<td></td>";
								}
						 	} ?>
														
				</tr>
					<?php if(isset($allStages) != NULL){ $no3=1;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){ ?>
				<tr>
					<td></td>
					<td colspan="4">   2.<?=($no-1).".".$no3++; ?> <?php echo $stage['kegiatan'];?> 
					</td>
					<td></td>
					<td></td>
					<td><?=round($stageTotal[$stage['id']]['biaya'],2); ?></td>
					<td><?=round($stageTotal[$stage['id']]['biayaP'],2); ?></td>
					<td><?=round($stageTotal[$stage['id']]['fisik'],2); ?></td>
					<?php 
					for($i=0;$i<12;$i++){ 
						if($stageMonths[$stage['id']][$i]['biaya'] != "x"){
							echo "<td>".number_format($stageMonths[$stage['id']][$i]['biaya'],0,',','.')."</td>";
						}else{
							echo "<td></td>";
						}
					}
					?>
														
				</tr>
					<?php }}} ?>															
				<?php }}} ?>															
				<tr>
					<td><b>3.</b></td>
					<td colspan="4"><b>PELAPORAN</b>
					</td>
					<td></td>
					<td></td>
					<td><?=number_format($total[2],0,',','.');?></td>
					<td><?=round($totalP[2],2); ?></td>
					<td><?=round($totalF[2],2); ?></td>
					<?php for($i=0;$i<12;$i++){ ?>
						<td></td>
					<?php } ?>
														
				</tr>
				<?php if(isset($allAct) != NULL){ $no=1; foreach($allAct as $act){if($act['parent'] == 'C'){ ?>
				<tr>
					<td></td>
					<td colspan="4">3.<?=$no++; ?> <?php echo $act['kegiatan'];?>
					</td>
					<td></td>
					<td></td>
					<td><?=number_format($actTotal[$act['id']]['biaya'],0,',','.'); ?></td>
					<td><?=round($actTotal[$act['id']]['biayaP'],2);?></td>
					<td><?=round($actTotal[$act['id']]['fisik'],2); ?></td>

					<?php 
							for($i=0;$i<12;$i++){
								if($actTotal[$act['id']]['hchild']==0 && $actMonths[$act['id']][$i]['biaya'] != 'x'){
									echo "<td>".number_format((int)$actMonths[$act['id']][($i)]['biaya'],0,',','.')."</td>";
								}else{
									echo "<td></td>";
								}
						 	} ?>
														
				</tr>
					<?php if(isset($allStages) != NULL){ $no3=1;foreach($allStages as $stage){if($stage['act_id'] == $act['id']){ ?>
				<tr>
					<td></td>
					<td colspan="4">   3.<?=($no-1).".".$no3++; ?> <?php echo $stage['kegiatan'];?> 
					</td>
					<td></td>
					<td></td>
					<td><?=round($stageTotal[$stage['id']]['biaya'],2); ?></td>
					<td><?=round($stageTotal[$stage['id']]['biayaP'],2); ?></td>
					<td><?=round($stageTotal[$stage['id']]['fisik'],2); ?></td>
					<?php 
					for($i=0;$i<12;$i++){ 
						if($stageMonths[$stage['id']][$i]['biaya'] != "x"){
							echo "<td>".number_format($stageMonths[$stage['id']][$i]['biaya'],0,',','.')."</td>";
						}else{
							echo "<td></td>";
						}
					}
					?>
														
				</tr>
					<?php }}} ?>															
				<?php }}} ?>
				<tr style="text-weight:bold;">
					<td></td>
					<td colspan="6">Jumlah Rencana Keuangan</td>
					
					<td><?=number_format($moneysKumulatif,0,',','.'); ?></td>
					<td><?= round($moneysP,2); ?></td>
					<td><?= round($fisikP,2); ?></td>
					<?php for($i=0;$i<12;$i++){ 
						if($moneysMonths[($i)] == 0){
							echo "<td></td>";
						}else{
							echo "<td>".number_format($moneysMonths[$i],0,',','.')."</td>";
							
						}
					 } ?>											
				</tr>
				
				<tr style="text-weight:bold;">
					<td></td>
					<td colspan="6">Jumlah Kumulatif Rencana Keuangan</td>
					<td></td>
					<td></td>
					<td></td>
					<?php for($i=0;$i<12;$i++){ 
						if($moneysMonthsKumulatif[($i)] == 0){
							echo "<td></td>";
						}else{
							echo "<td>".number_format($moneysMonthsKumulatif[$i],0,',','.')."</td>";
							
						}
					 } ?>											
				</tr>
				<tr style="text-weight:bold;">
					<td></td>
					<td colspan="6">Persentase Rencana Keuangan</td>
					<td></td>
					<td></td>
					<td></td>

					<?php for($i=0;$i<12;$i++){ 
						if($moneysMonthsP[($i)] == 0){
							echo "<td></td>";
						}else{
							echo "<td>".round($moneysMonthsP[$i],2)."</td>";
							
						}
					 } ?>											
				</tr>
				<tr style="text-weight:bold;">
					<td></td>
					<td colspan="6">Persentase Kumulatif Rencana Keuangan</td>
					<td style="background-color:#f90000;"></td>
					<td></td>
					<td></td>
					<?php for($i=0;$i<12;$i++){ 
						if($moneysMonthsKumulatifP[($i)] == 0){
							echo "<td></td>";
						}else{
							echo "<td>".round($moneysMonthsKumulatifP[$i],2)."</td>";
							
						}
					 } ?>											
				</tr>
				<tr style="text-weight:bold;">
					<td></td>
					<td colspan="6">Persentase Rencana Fisik</td>
					<td></td>
					<td></td>
					<td></td>
					<?php for($i=0;$i<12;$i++){ 
						if($fisikMonths[($i)] == 0){
							echo "<td></td>";
						}else{
							echo "<td>".round($fisikMonths[$i],2)."</td>";
							
						}
					 } ?>											
				</tr>
				<tr style="text-weight:bold;">
					<td></td>
					<td colspan="6">Persentase Kumulatif Rencana Fisik</td>
					<td style="background-color:#0059f9;"></td>
					<td></td>
					<td></td>
					<?php for($i=0;$i<12;$i++){ 
						if($fisikMonthsKumulatif[($i)] == 0){
							echo "<td></td>";
						}else{
							echo "<td>".round($fisikMonthsKumulatif[$i],2)."</td>";
							
						}
					 } ?>											
				</tr>
			</tbody>
		</table>
		<br>
		<table style="text-align:center; font-size: 12; font-family: Calibri;">
			<thead>
				<tr>
					<th>Akun</th>
					<th>Jenis</th>
					<th>biaya</th>
				</tr>
			</thead>
			<tbody>
			<?php
			foreach ($moneys as $data) {
				echo "<tr>";
					echo "<td>".$data['akun']."</td>";
					echo "<td>".$data['jenis']."</td>";
					echo "<td>".$data['biaya']."</td>";
				echo "</tr>";
			}
			?>
			</tbody>
		</table>
	</body>
</html>
		<!-- Right Panel -->
