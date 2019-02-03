<body>
	<h1> BAB 1<br> PENDAHULUAN </h1>
<?php if($row['jenis'] == "Litbang"){ ?>
	<h2> 1.1 Latar Belakang</h2>
	<?=$row['latar']; ?>
	<h2> 1.2 Identifikasi Masalah</h2>
	<?=$row['masalah']; ?>
	<h2> 1.3 Tujuan Kegiatan</h2>
	<?=$row['tujuan']; ?>
	<h2> 1.4 Sasaran Keluaran</h2>
	<?=$row['sasarankeluaran']; ?>
	<h2> 1.5 Sasaran Mutu</h2>
	<?=$row['sasaranmutu']; ?>
	<h2> 1.6 Penerima Manfaat</h2>
	<?=$row['manfaat']; ?>
	<h2> 1.7 Lokasi Kegiatan</h2>
	<?=$row['lokasi']; ?>		
<?php }else{ ?>
	<h2> 1.1 Latar Belakang</h2>
	<?=$row['latar']; ?>
	<h2> 1.2 Tujuan Kegiatan</h2>
	<?=$row['tujuan']; ?>
	<h2> 1.3 Sasaran Keluaran</h2>
	<?=$row['sasarankeluaran']; ?>
	<h2> 1.4 Sasaran Mutu</h2>
	<?=$row['sasaranmutu']; ?>
	<h2> 1.5 Lokasi Kegiatan</h2>
	<?=$row['lokasi']; ?>
<?php } ?>
<pagebreak />
<?php if($row['jenis'] == "Litbang"){ ?>
	<h1> BAB 2<br> KAJIAN LITERATUR </h1>
	<h2> 2.1 Tinjauan Pustaka</h2>
	<?=$row['tinjauan']; ?>
	<h2> 2.2 Acuan Teknis</h2>
	<?=$row['acuanteknis']; ?>
	<h2> 2.3 Acuan Administrasi</h2>
	<?=$row['acuanadministrasi']; ?>

<?php }else{ ?>
	<h1> BAB 2<br> ACUAN NORMATIF </h1>
	<h2> 2.1 Acuan Teknis</h2>
	<?=$row['acuanteknis']; ?>
	<h2> 2.2 Acuan Administrasi</h2>
	<?=$row['acuanadministrasi']; ?>
<?php } ?>
<pagebreak />
	<h1> BAB 3<br> RENCANA KEGIATAN </h1>
	<h2> 3.1 Pemetaan Risiko dan Mitigasi</h2>
	<p style="text-align: center;"><b>Tabel 3.1.</b> Pemetaan Risiko dan Mitigasi Internal</p>
	<table width="100%" style="page-break-inside:avoid;">
		<col width="20px" align="center">
		<col width="auto" align="center">
		<col width="50px" align="center">
		<col width="50px" align="center">
		<col width="50px" align="center">
		<col width="100px" align="center">
		<col width="100px" align="center">
		<thead>
			<tr align="middle" style="background-color: #e3ece4; text-align:center;">
				<th>No.</th>
				<th>Faktor Internal</th>
				<th>U</th>
				<th>S</th>
				<th>G</th>
				<th>JML</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style="font-weight: bold;">I</td>
				<td style="font-weight: bold;" colspan="5">STRENGTHS/KEKUATAN
				</td>
			</tr>
			<?php $no=1;foreach($swots as $swot){
				if($swot['swot_parent'] == 1){
			?>
			<tr>
				<td align="center">S<?=$no++ ?></td>
				<td><?=$swot['swot_factor'] ?></td>
				<td><?=$swot['swot_u'] ?></td>
				<td><?=$swot['swot_s'] ?></td>
				<td><?=$swot['swot_g'] ?></td>
				<td><?=$swot['swot_u']+$swot['swot_s']+$swot['swot_g']; ?></td>
			</tr>
			<?php 
				}
			} 
			 ?>
			<tr>
				<td style="font-weight: bold;">II</td>
				<td style="font-weight: bold;" colspan="5">WEAKNESS/KELEMAHAN
				</td>
			</tr>
			<?php $no=1;foreach($swots as $swot){
				if($swot['swot_parent'] == 2){
			?>
			<tr>
				<td align="center">W<?=$no++ ?></td>
				<td><?=$swot['swot_factor'] ?></td>
				<td><?=$swot['swot_u'] ?></td>
				<td><?=$swot['swot_s'] ?></td>
				<td><?=$swot['swot_g'] ?></td>
				<td><?=$swot['swot_u']+$swot['swot_s']+$swot['swot_g']; ?></td>
			</tr>
			<?php 
				}
			} 
			 ?>															
			<tr>
				<td style="font-weight: bold;">III</td>
				<td style="font-weight: bold;" colspan="5">OPPORTUNITIES/PELUANG
				</td>
			</tr>
			<?php $no=1;foreach($swots as $swot){
				if($swot['swot_parent'] == 3){
			?>
			<tr>
				<td align="center">U<?=$no++ ?></td>
				<td><?=$swot['swot_factor'] ?></td>
				<td><?=$swot['swot_u'] ?></td>
				<td><?=$swot['swot_s'] ?></td>
				<td><?=$swot['swot_g'] ?></td>
				<td><?=$swot['swot_u']+$swot['swot_s']+$swot['swot_g']; ?></td>
			</tr>
			<?php 
				}
			} 
			 ?>															
			<tr>
				<td style="font-weight: bold;">IV</td>
				<td style="font-weight: bold;" colspan="5">THREATS/ANCAMAN
				</td>
			</tr>																																													
			<?php $no=1;foreach($swots as $swot){
				if($swot['swot_parent'] == 4){
			?>
			<tr>
				<td align="center">T<?=$no++ ?></td>
				<td><?=$swot['swot_factor'] ?></td>
				<td><?=$swot['swot_u'] ?></td>
				<td><?=$swot['swot_s'] ?></td>
				<td><?=$swot['swot_g'] ?></td>
				<td><?=$swot['swot_u']+$swot['swot_s']+$swot['swot_g']; ?></td>
			</tr>
			<?php 
				}
			} 
			 ?>															
		</tbody>
	</table>	

	<h2> 3.2 Analisa Risiko/Peluang dan Mitigasi</h2>
	<p>Isu yang muncul pada kegiatan ini, dilakukan analisis risiko/peluang serta tindakan mitigasi pengendalian risikonya. Tindakan mitigasi/adaptasi pengendalian risiko menjelaskan tentang antisipasi dari risiko/peluang yang akan muncul. Rencana pemantauan mengacu pada kriteria penerimaan dan acuan pemeriksaan pada Lampiran 2. Adapun analisa risiko/peluang dan mitigasi dapat dilihat pada tabel 3.2 dibawah ini:</p>

	<pagebreak />
	<p style="text-align: center;"><b>Tabel 3.2. </b>Analisa Risiko/Peluang dan Mitigasi/Adaptasi</p>
	<table width=100% style="page-break-inside:avoid;"> 
	  <tr style="background-color: #e3ece4; text-align:center;">
	  <td><b>No.</b></td>
	  <td><b>Isu</b></td>
	  <td><b>Risiko/Peluang</b></td>
	  <td><b>Mitigasi/Adaptasi Pengendalian Risiko</b></td>
	  <td><b>Rencana Pemantauan</b></td>
	  </tr>
	<tbody>
		<?php if(isset($anals)){$no=1;foreach($anals as $anal){ ?>
			<tr>
				<td><?=$no++; ?></td>	
				<td><?=$anal['anal_isu'] ?></td>
				<td><?=$anal['anal_risiko'] ?></td>
				<td><?=$anal['anal_tindakan'] ?></td>
				<td><?=$anal['anal_rencana'] ?></td>
			</tr>
		<?php }} ?>
	</tbody>
	</table>
	<h2> 3.3 Tahapan Kegiatan</h2>
	1) Tahapan Persiapan 
	<ol type="a" style="margin-top:0px;border-top:0px;">
	<?php if(isset($acts)){ foreach($acts as $act){if($act['parent'] == 'A'){ ?>
		<li><?=$act['kegiatan'] ?></li>
		<ol type="1">
		<?php if(isset($stages)){foreach($stages as $stage){if($stage['act_id'] == $act['id']){ ?>
			<li><?=$stage['kegiatan']; ?></li>
		<?php }}} ?>
		</ol>
	<?php }}} ?>
	</ol>
	2) Tahapan Pelaksanaan 
	<ol type="a" style="margin-top:0px;border-top:0px;">
	<?php if(isset($acts)){ foreach($acts as $act){if($act['parent'] == 'B'){ ?>
		<li><?=$act['kegiatan'] ?></li>
		<ol type="1">
		<?php if(isset($stages)){foreach($stages as $stage){if($stage['act_id'] == $act['id']){ ?>
			<li><?=$stage['kegiatan']; ?></li>
		<?php }}} ?>
		</ol>
	<?php }}} ?>
	</ol>
	3) Tahapan Pelaporan
	<ol type="a" style="margin-top:0px;border-top:0px;">
	<?php if(isset($acts)){ foreach($acts as $act){if($act['parent'] == 'C'){ ?>
		<li><?=$act['kegiatan'] ?></li>
		<ol type="1">
		<?php if(isset($stages)){foreach($stages as $stage){if($stage['act_id'] == $act['id']){ ?>
			<li><?=$stage['kegiatan']; ?></li>
		<?php }}} ?>
		</ol>
	<?php }}} ?>        
	</ol>
	<h2> 3.4 Bagan Alir Pelaksanaan Kegiatan</h2>
	<div style="text-align: center">
	   <img src="<?=base_url(); ?>assets/uploads/baganalir/<?=$row['baganalir'] ?>" style="width: 550px; height: 400px; margin-left: 30px" />
		<h5><b>Gambar 3.1.</b> Bagan Alir</h5>
	</div>
	<pagebreak />
	<h1> BAB 4<br> KEBUTUHAN SUMBER DAYA </h1>
	<h2> 4.1 Struktur Organisasi</h2>
	<div style="text-align: center">
	   <img src="<?=base_url(); ?>assets/uploads/strukturorg/<?=$row['strukturorg'] ?>" style="width: 550px; height: 400px; margin-left: 30px" />
		<h5><b>Gambar 4.1.</b> Struktur Organisasi</h5>
	</div>   
	<h2> 4.2 Sumber Daya Manusia</h2>
	<p style="text-align: center;"><b>Tabel 4.1. </b>Rencana Sumber Daya Manusia</p>
	<table width=100% style="page-break-inside:avoid;"> 
	  <tr style="background-color: #e3ece4; text-align:center;">
	  <td><b>No.</b></td>
	  <td><b>Jabatan</b></td>
	  <td><b>Kompentensi</b></td>
	  <td><b>Tugas</b></td>
	  <td><b>Tanggung Jawab</b></td>
	  <td><b>Wewenang</b></td>
	  </tr>
	<tbody>
		<?php if(isset($allsdm)){$no=1;foreach($allsdm as $row2){ ?>
			<tr>
				<td><?=$no++; ?></td>	
				<td><?=$row2['name'];?></td>
				<td><?=$row2['kompetensi'];?></td>
				<td><?=$row2['tugas'];?></td>
				<td><?=$row2['tanggungjawab'];?></td>
				<td><?=$row2['wewenang'];?></td>
			</tr>
		<?php }} ?>
	</tbody>
	</table>	<h2> 4.3 Kondisi Lingkungan</h2>
	<?=$row['lingkungan']; ?>
<?php if($row['jenis'] == "Litbang"){ ?>
<pagebreak />
	<h1>DAFTAR PUSTAKA </h1>
		<?php $no=1;foreach($bibs as $bib){ ?>
			<p style="text-indent:-50px"><?=$bib['bib_author'] ?>. <?=$bib['bib_year'] ?>. <?=$bib['bib_title'] ?>. ';
			<?php  if($bib['bib_city'] == NULL){ ?>
				<?=$bib['bib_publisher']; ?>
			<?php }else{ ?>
				<?=$bib['bib_city']; ?>:<?=$bib['bib_publisher']; ?>
			<?php } ?>
		<?php } ?>
<?php } ?>

<pagebreak />
	<h1>LAMPIRAN </h1>
	<p style="text-indent: 0px;">Lampiran 1 Rincian Anggaran Biaya (RAB)<br>Lampiran 2 Rencana Kerja Kegiatan <br>Lampiran 3 Kurva S Rencana dan Pelaksanaan Fisik dan Keuangan</p>