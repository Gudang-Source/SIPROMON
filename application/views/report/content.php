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
<?php }else{ ?>
	<h2> 1.1 Latar Belakang</h2>
	<?=$row['latar']; ?>
	<h2> 1.2 Tujuan Kegiatan</h2>
	<?=$row['tujuan']; ?>
	<h2> 1.3 Sasaran Keluaran</h2>
	<?=$row['sasarankeluaran']; ?>
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
	<h1> BAB 2<br> Acuan Normatif </h1>
	<h2> 2.1 Acuan Teknis</h2>
	<?=$row['acuanteknis']; ?>
	<h2> 2.2 Acuan Administrasi</h2>
	<?=$row['acuanadministrasi']; ?>
<?php } ?>
<pagebreak />
<?php if($row['jenis'] == "Litbang"){ ?>
	<h1> BAB 3<br> RENCANA KEGIATAN </h1>
	<h2> 3.1 Lingkup Kegiatan</h2>
	<?=$row['lingkup']; ?>
	<h2> 3.2 Formulasi Kegiatan</h2>
	<?=$row['formulasi']; ?>
	<h2> 3.3 Kerangka Pemikiran</h2>
	<?=$row['kerangka']; ?>
	<h2> 3.4 Bagan Alir Pelaksanaan Kegiatan</h2>
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
	<div style="text-align: center">
	   <img src="<?=base_url(); ?>assets/uploads/baganalir/<?=$row['baganalir'] ?>" style="width: 550px; height: 400px; margin-left: 30px" />
		<h5><b>Gambar 1.</b> Bagan Alir</h5>
	</div>
	<h2> 3.5 Dokumentasi Sistem Manajemen Mutu</h2>
	<p style="text-indent: 0px;">3.5.1 Daftar Dokumen Sistem Manajemen Mutu</p>
	<p>Dokumen Sistem Mutu yang digunakan dalam pelaksanaan kegiatan, antara lain sebagaimana dalam Tabel 2.</p>
	<p style="text-align: center;">Tabel 2. Daftar Dokumen Sistem Manajemen Mutu</p>
	<table width=100%>
	  <tr style="background-color: #e3ece4; text-align:center;">
	  <td><b>No.</b></td>
	  <td><b>Nama Dokumen</b></td>
	  <td><b>Nomor Dokumen</b></td>
	  </tr>
	<tbody>
		<?php if(isset($docs)){$no=1;foreach($docs as $doc){ ?>
			<tr>
				<td><?=$no++; ?></td>	
				<td><?=$doc['document_name'] ?></td>	
				<td><?=$doc['document_num'] ?></td>	
			</tr>
		<?php }} ?>
	</tbody>
	</table>
	<p>Daftar dokumen SMM merujuk pada Formulir Daftar Induk Dokumen Sistem Manajemen Mutu terbaru.</p>
	<!-- Rec -->
	<p style="text-indent: 0px;">3.5.2 Daftar Induk Rekaman</p>
	<p>Bukti kerja pelaksanaan kegiatan meliputi rekaman-rekaman seperti pada Tabel 3.</p>
	<p style="text-align: center;">Tabel 3. Daftar Induk Rekaman</p>
	<table width=100%>
      <tr style="background-color: #e3ece4; text-align:center;">
      <td><b>No.</b></td>
      <td><b>Nama Rekaman/Bukti Kerja</b></td>
      <td><b>Lokasi dan Penanggungjawab Penyimpanan Rekaman</b></td>
      <td><b>Masa Simpan</b></td>
      </tr>
	<tbody>
		<?php if(isset($recs)){$no=1;foreach($recs as $rec){ ?>
			<tr>
				<td><?=$no++; ?></td>	
				<td><?=$rec['record_name'] ?></td>	
				<td><?=$rec['location'] ?></td>	
				<td><?=$rec['period'] ?></td>	
			</tr>
		<?php }} ?>
	</tbody>
	</table>
	<p>Masa Simpan Rekaman mengacu ke Permen PU No. 39/PRT/M/2007 Pedoman Jadwal Retensi Arsip (JRA) Kementerian Pekerjaan Umum.</p>

<?php }else{ ?>
	<h1> BAB 3<br> RENCANA KEGIATAN </h1>
	<h2> 3.1 Lingkup Kegiatan</h2>
	<?=$row['lingkup']; ?>
	<h2> 3.2 Bagan Alir Pelaksanaan Kegiatan</h2>
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
	<div style="text-align: center">
	   <img src="<?=base_url(); ?>assets/uploads/baganalir/<?=$row['baganalir'] ?>" style="width: 550px; height: 400px; margin-left: 30px" />
		<h5><b>Gambar 1.</b> Bagan Alir</h5>
	</div>   
	<h2> 3.3 Dokumentasi Sistem Manajemen Mutu</h2>
	<p style="text-indent: 0px;">3.3.1 Daftar Dokumen Sistem Manajemen Mutu</p>
	<p>Dokumen Sistem Mutu yang digunakan dalam pelaksanaan kegiatan, antara lain sebagaimana dalam Tabel 2.</p>
	<p style="text-align: center;">Tabel 2. Daftar Dokumen Sistem Manajemen Mutu</p>
	<table width=100%>
	  <tr style="background-color: #e3ece4; text-align:center;">
	  <td><b>No.</b></td>
	  <td><b>Nama Dokumen</b></td>
	  <td><b>Nomor Dokumen</b></td>
	  </tr>
	<tbody>
		<?php if(isset($docs)){$no=1;foreach($docs as $doc){ ?>
			<tr>
				<td><?=$no++; ?></td>	
				<td><?=$doc['document_name'] ?></td>	
				<td><?=$doc['document_num'] ?></td>	
			</tr>
		<?php }} ?>
	</tbody>
	</table>
	<p>Daftar dokumen SMM merujuk pada Formulir Daftar Induk Dokumen Sistem Manajemen Mutu terbaru.</p>
	<!-- Rec -->
	<p style="text-indent: 0px;">3.3.2 Daftar Induk Rekaman</p>
	<p>Bukti kerja pelaksanaan kegiatan meliputi rekaman-rekaman seperti pada Tabel 3.</p>
	<p style="text-align: center;">Tabel 3. Daftar Induk Rekaman</p>
	<table width=100%>
      <tr style="background-color: #e3ece4; text-align:center;">
      <td><b>No.</b></td>
      <td><b>Nama Rekaman/Bukti Kerja</b></td>
      <td><b>Lokasi dan Penanggungjawab Penyimpanan Rekaman</b></td>
      <td><b>Masa Simpan</b></td>
      </tr>
	<tbody>
		<?php if(isset($recs)){$no=1;foreach($recs as $rec){ ?>
			<tr>
				<td><?=$no++; ?></td>	
				<td><?=$rec['record_name'] ?></td>	
				<td><?=$rec['location'] ?></td>	
				<td><?=$rec['period'] ?></td>	
			</tr>
		<?php }} ?>
	</tbody>
	</table>
	<p>Masa Simpan Rekaman mengacu ke Permen PU No. 39/PRT/M/2007 Pedoman Jadwal Retensi Arsip (JRA) Kementerian Pekerjaan Umum.</p>
<?php } ?>
<pagebreak />
	<h1> BAB 4<br> KEBUTUHAN SUMBER DAYA </h1>
	<h2> 4.1 Struktur Organisasi</h2>
	<div style="text-align: center">
	   <img src="<?=base_url(); ?>assets/uploads/strukturorg/<?=$row['strukturorg'] ?>" style="width: 550px; height: 400px; margin-left: 30px" />
		<h5><b>Gambar 3.</b> Struktur Organisasi</h5>
	</div>   
	<h2> 4.2 Sumber Daya Manusia</h2>
	
	<h2> 4.3 Sumber Daya Keuangan</h2>
	<p>Sesuai dokumen anggaran DIPA No. DIPA-033.11.1.636846/2018 Tanggal 05 Desember 2017, biaya pelaksanaan Kegiatan <?=$row['judul']; ?> Tahun <?=$row['tahun_anggaran']; ?> pada Satuan Kerja <?=$user['name']; ?> sebesar Rp. <?=number_format($row['pagu'],0,',','.'); ?>,- (terbilang : <?=$terbilang ?> Rupiah dengan rincian seperti pada Tabel 5 berikut.</p>.
		<p style="text-align: center;">Tabel 5. Daftar Induk Rekaman</p>
	<table width=100%>
		<thead>
      <tr style="background-color: #e3ece4; text-align:center;">
      <td rowspan="2"><b>No.</b></td>
      <td colspan="2"><b>Belanja</b></td>
      <td rowspan="2"><b>Biaya (Rp)</b></td>
      </tr>
      <tr>
      	<td><b>Akun</b></td>
      	<td><b>Jenis</b></td>
      </tr>
		</thead>
		<tbody>
			<?php if(isset($sdks)){$no=1;foreach($sdks as $sdk){ ?>
				<tr>
					<td><?=$no++; ?></td>
					<td><?=$sdk['akun']; ?></td>
					<td><?=$sdk['jenis']; ?></td>
					<td><?=number_format($sdk['biaya'],0,',','.');?></td>
				</tr>
			<?php }} ?>
				<tr>
					<td colspan="3" class="table-warning"><b>Total</b></td>
					<td colspan="2"><b> <?=number_format($row['pagu'],0,',','.'); ?></b></td>
				</tr>
		</tbody>
	</table>
	<h2> 4.4 Kondisi Lingkungan</h2>
	<?=$row['lingkungan']; ?>
	
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