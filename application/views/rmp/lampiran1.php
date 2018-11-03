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
										<center><h2>Rincian Anggaran Biaya</h2><?=$row['judul']; ?><br>Tahun Anggaran <?=$row['tahun_anggaran']; ?></center>
									</div>
									<div>
											<div class="form-group col-md-2">
									      <select id="navigate" class="form-control" style="margin-left:-15px; background-color:#ffd700;">
									        <option selected disabled><b>-Navigasi-</b></option>
									        <option value="satu">Bab I</option>
									        <option value="dua">Bab II</option>
									        <option value="tiga">Bab III</option>
									        <option value="empat">Bab IV</option>
									        <option value="limabelas">Daftar Pustaka</option>
									        <option value="att1">Lampiran 1</option>
									        <option value="att2">Lampiran 2</option>
									        <option value="att3">Lampiran 3</option>
									      </select>
									    </div>																						
											<div class="pull-right">
												
												<?php if($row['jenis'] == "Teknologi dan Terapan Terpadu" || $row['jenis'] == "Pilot Project"){ ?>
												<a href="<?=base_url(); ?>RMP/limabelas/<?=$this->uri->segment(3)?>" type="button" class="btn btn-labeled btn-danger">
														<span class="btn-label"><i class="fa fa-fw fa-arrow-left"></i></span> Back
												</a>												
												<?php }else{ ?>
												<a href="<?=base_url(); ?>RMP/empatbelas/<?=$this->uri->segment(3)?>" type="button" class="btn btn-labeled btn-danger">
														<span class="btn-label"><i class="fa fa-fw fa-arrow-left"></i></span> Back
												</a>												
												<?php } ?>
												<a href="<?=base_url(); ?>RMP/att2/<?=$this->uri->segment(3)?>" type="button" class="btn btn-labeled btn-success">
														<span class="btn-label"><i class="fa fa-fw fa-arrow-right"></i></span> Lampiran 2 (Raker)
												</a>												
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<table class="table table-striped table-sm" style="background-color: white;">
										<tr>
											<td>Kementerian Negara</td>
											<td>:</td>
											<td>Kementerian Pekerjaan Umum dan Perumahan Rakyat</td>
										</tr>
										<tr>
											<td>Unit Eselon II/Satker</td>
											<td>:</td>
											<td><?=$satker['name']; ?></td>
										</tr>
										<tr>
											<td>Kegiatan</td>
											<td>:</td>
											<td><?=$row['judul']; ?></td>
										</tr>
										<tr>
											<td>Keluaran (Output)</td>
											<td>:</td>

											<td><i <?php if($row['output'] == NULL) echo 'class="text-danger"'; else echo 'style="font-style:normal;"'; ?>><?php if($row['output']) echo $row['output']; else echo "(not set)"; ?> <a class="text-primary" href="" title="Lengkapi" data-toggle="modal" data-target="#lengkapi" data-output="<?=$row['output']; ?>" data-volume="<?=$row['volume']; ?>" data-unitof="<?=$row['unitof']; ?>" data-rabtitle="<?=$row['rabtitle']; ?>"><span class="fa fa-fw fa-pencil-square"></span></a></i></td>
										</tr>
										<tr>
											<td>Volume</td>
											<td>:</td>
											<td><i <?php if($row['volume'] == NULL) echo 'class="text-danger"'; else echo 'style="font-style:normal;"'; ?>><?php if($row['volume']) echo $row['volume']; else echo "(not set)"; ?></i></td>
										</tr>
										<tr>
											<td>Satuan Ukur</td>
											<td>:</td>
											<td><i <?php if($row['unitof'] == NULL) echo 'class="text-danger"'; else echo 'style="font-style:normal;"'; ?>><?php if($row['unitof']) echo $row['unitof']; else echo "(not set)"; ?></i></td>
										</tr>
										<tr>
											<td>Alokasi Dana <a href="#" data-toggle="tooltip" data-placement="right"  title="Dana sesuai Sumber Daya Keuangan pada RMP"><i class="fa fa-info-circle"></i></a></td>
											<td>:</td>
											<td>Rp. <?=number_format($row['pagu'],0,',','.'); ?></td>
										</tr>
										<tr>
											<td>Judul</td>
											<td>:</td>
											<td><i <?php if($row['rabtitle'] == NULL) echo 'class="text-danger"'; else echo 'style="font-style:normal;"'; ?>><?php if($row['rabtitle']) echo $row['rabtitle']; else echo "(not set)"; ?></i></td>
										</tr>
									</table>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="text-right">
										<button type="button" class=" btn-sm btn-labeled btn-success" data-toggle="modal" data-target="#tambahsdk">
												<span class="btn-label"><i class="fa fa-fw fa-plus"></i></span> Tambah Rincian
										</button>
									</div>
									<table class="table table-bordered table-striped table-sm">
									<thead class="text-center" style="background-color: white; font-weight: bold;">
										<tr>
											<td rowspan="2" >No.</td>
											<td rowspan="2" colspan="2">Tahapan Pelaksanaan dan Rincian Komponen Biaya.</td>
											<td colspan="2">Rincian Perhitungan</td>
											<td rowspan="2">Harga Satuan</td>
											<td rowspan="2">Jumlah</td>
										</tr>
										<tr>
											<td>Detil</td>
											<td>Jml</td>
										</tr>
									</thead>
									<tbody>
										<tr class="font-weight-bold">
											<td></td>
											<td>#<?=$row['id']; ?></td>
											<td><?=$row['judul']; ?></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
										<?php $no=1;foreach($moneys as $money){ ?>
											<tr class="font-weight-bold">
												<td></td>
												<td><?=$money['akun']; ?></td>
												<td><?=$money['jenis']; ?></td>
												<td></td>
												<td></td>
												<td></td>
												<td class="text-right"><?=number_format($money['biaya'],0,',','.');?></td>
											</tr>
											<?php $no2=1;foreach($sdktitles as $sdktitle){if($sdktitle['rmp_sdk_id'] == $money['id']){?>
													<tr class="table-info">
														<td></td>
														<td class="text-right"><?=$no2++; ?></td>
														<td><?=$sdktitle['name']; ?> <a class="text-danger" href="<?=base_url(); ?>RMP/deleteSDKTitle/<?=$sdktitle['id'];?>/<?=$this->uri->segment(3);?>" title="Hapus Rincian"><span class="fa fa-fw fa-trash"></span></a></td>
														<td><?=$sdktitle['details']; ?></td>
														<td class="text-center"><?=$sdktitle['jml']; ?></td>
														<td class="text-center"><?=number_format($sdktitle['satuan'],0,',','.'); ?></td>
														<td class="text-right"><?=number_format($sdktitle['total'],0,',','.'); ?></td>
													</tr>
											<?php }} ?>
										<?php } ?>
											<tr class="table-warning font-weight-bold">
												<td colspan="4" class="text-center">Total</td>
												<td></td>
												<td></td>
												<td class="text-right"><?=number_format($row['pagu'],0,',','.'); ?></td>
											</tr>
									</tbody>
								</table>
								</div>
								
							</div>
						</div><!-- .animated -->
				</div><!-- .content -->


		</div><!-- /#right-panel -->
		<div class="modal fade" id="tambahsdk" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
								<div class="modal-header">
										<h5 class="modal-title" id="largeModalLabel">Tambah Rincian Anggaran</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
										</button>
								</div>
								<div class="modal-body">
								<?php echo form_open('RMP/addSDKTitle/'.$this->uri->segment(3)); ?>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class=" form-control-label">Sub Rincian dari</label>
												<select name="rmp_sdk_id" class="form-control">
													<option disabled selected>--Pilih dari jenis--</option>
													<?php foreach($moneys as $money){ ?>
													<option value="<?=$money['id']; ?>"><?=$money['jenis']; ?></option>
													<?php } ?>
												</select>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Pelaksanaan</label>
												<div class="input-group">
														<input type="text" name="name" class="form-control" placeholder="mis: Perjalanan Dinas Jakarta-Solo dalam rangka audit">
												</div>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Rincian</label>
												<div class="input-group">
														<input type="text" name="details" class="form-control" placeholder="mis: 2 org x 4 jam x 1 kl, 2org x 2pp, dsb.. ">
												</div>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Jml</label>
												<div class="input-group">
														<input type="number" name="jml" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Harga Satuan</label>
												<div class="input-group">
											    <div class="input-group-prepend">
											      <div class="input-group-text"><i class="fa fa-money fa-fw"></i></div>
											    </div>
											    <input type="number" class="form-control" name="satuan" value="">
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
		<div class="modal fade" id="lengkapi" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-sm" role="document">
						<div class="modal-content">
								<div class="modal-header">
										<h5 class="modal-title" id="largeModalLabel">Lengkapi RAB</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
										</button>
								</div>
								<div class="modal-body">
								<?php echo form_open('RMP/fulfillAtt1/'.$this->uri->segment(3)); ?>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class=" form-control-label">Keluaran (output)</label>
												<div class="input-group">
														<input type="text" name="output" class="form-control" placeholder="">
												</div>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Volume</label>
												<div class="input-group">
														<input type="text" name="volume" class="form-control" placeholder="">
												</div>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Satuan Ukur</label>
												<div class="input-group">
														<input type="text" name="unitof" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Judul</label>
												<div class="input-group">
														<input type="text" name="rabtitle" class="form-control">
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