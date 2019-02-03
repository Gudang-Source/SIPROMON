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

				<div class="content mt-3" >
						<div class="animated fadeIn">
								<div class="row">
									<div class="col-md-12">
										<div>
											<center><h2><?=$row['judul'] ?></h2>Halaman Judul</center>
										</div>
										<div>
											<div class="form-group col-md-2">
									      <select id="navigate" class="form-control" style="margin-left:-15px; background-color:#ffd700;">
									        <option disabled><b>-Navigasi-</b></option>
									        <option value="judul" <?php if($this->uri->segment(2) == "judul") echo "selected"; ?> >Judul</option>
									        <option value="rekap" <?php if($this->uri->segment(2) == "rekap") echo "selected"; ?> >Rekap</option>
									        <option value="sejarah" <?php if($this->uri->segment(2) == "sejarah") echo "selected"; ?> >Sejarah</option>
									        <option value="satu" <?php if($this->uri->segment(2) == "satu") echo "selected"; ?> >Bab I</option>
									        <option value="dua" <?php if($this->uri->segment(2) == "dua") echo "selected"; ?>>Bab II</option>
									        <option value="tiga" <?php if($this->uri->segment(2) == "tiga") echo "selected"; ?>>Bab III</option>
									        <option value="empat" <?php if($this->uri->segment(2) == "empat") echo "selected"; ?>>Bab IV</option>
									        <?php if($row['jenis'] == "Litbang"){ ?>
									        <option value="limabelas" <?php if($this->uri->segment(2) == "limabelas") echo "selected"; ?>>Daftar Pustaka</option>
									        <?php } ?>
									        <option value="att1" <?php if($this->uri->segment(2) == "att1") echo "selected"; ?>>Lampiran 1</option>
									        <option value="att2" <?php if($this->uri->segment(2) == "att2") echo "selected"; ?>>Lampiran 2</option>
									        <option value="att3" <?php if($this->uri->segment(2) == "att3") echo "selected"; ?>>Lampiran 3</option>
									      </select>
									    </div>											
											<div class="pull-right" style="margin-bottom: 15px;">
												<a href="<?=base_url(); ?>RMP/sejarah/<?=$this->uri->segment(3)?>"  class="btn btn-labeled btn-success">
														 Sejarah <span class="btn-label btn-label-right"><i class="fa fa-fw fa-arrow-right"></i></span>
												</a>
											</div>
										</div>
									</div>
								</div>
								<?php echo form_open('RMP/processJudul/'.$this->uri->segment(3)); ?>
								<div class="row" style="background-color: white;">
									<div class="col-md-8 offset-md-2">
											<h4 class="text-center">Halaman Rekap Kegiatan <a href="#" data-toggle="tooltip" data-placement="bottom"  title="Halaman ini akan terisi otomatis setelah mengisi Bab 1 - 4"><i class="fa fa-info-circle"></i></a>
												<a href="#" data-toggle="tooltip" data-placement="bottom"  title="No Dokumen, Beban Anggaran dan Ringkasan harus diisi!"><i class="fa fa-info-circle" style="color:red;"></i></a></h4>
											<table class="table table-sm table-bordered" width="100%">
												<col>
												<col width="25%">
												<tr>
													<td colspan="3" align="center" style="font-weight: bold;"><?=strtoupper($row['judul']); ?></td>
												</tr>
												<tr>
													<td colspan=2>No. Dokumen<br><input type="text" name="nodokumen" value="<?=$row['nodokumen'] ?>" placeholder="Masukan No Dokumen" class="form-control <?php if(isset($row['nodokumen'])){ ?>is-valid <?php }else{ ?> is-invalid  <?php } ?>">
														<?php if(!isset($row['nodokumen'])){ ?>
										        <div class="invalid-feedback">
										          Harus diisi!
										        </div>
										      <?php } ?>
													 </td>
													<td>Nomor DIPA <br>033.11.1.576981/2018</td>
												</tr>
												<tr>
													<td colspan=2>Nama Satker<br><?=strtoupper($row['satuankerja']); ?></td>
													<td>Tanggal Pengesahan DIPA<br>5 Desember 2018</td>
												</tr>												
												<tr>
													<td>Tanggal Terbit <br><?=date("d M Y ");?></td>
													<td>Rev: 00</td>
													<td>Besaran Anggaran: <br> 
															<div class="input-group">
																
											        <div class="input-group-prepend">
											          <div class="input-group-text">Rp.</div>
											        </div>
											        <input type="text" name="besaran" value="<?=$row['besaran'] ?>" placeholder="Besaran Anggaran" class="form-control <?php if(isset($row['besaran'])){ ?>is-valid <?php }else{ ?> is-invalid  <?php } ?>">
														<?php if(!isset($row['besaran'])){ ?>
										        <div class="invalid-feedback">
										          Harus diisi!
										        </div>
															</div>
										      <?php } ?>
													</td>
												</tr>
												<tr>
													<td colspan=3>Ringkasan Kegiatan <br><textarea name="ringkasan" class="form-control <?php if(isset($row['ringkasan'])){ ?>is-valid <?php }else{ ?> is-invalid  <?php } ?>" placeholder="Isi Ringkasan Kegiatan"><?=$row['ringkasan'] ?></textarea>
														<?php if(!isset($row['ringkasan'])){ ?>
										        <div class="invalid-feedback">
										          Harus diisi!
										        </div>
										      <?php } ?>
													</td>
												</tr>
												<tr>
													<td colspan=3>Lokasi Kegiatan <br><?=$row['lokasi']; ?></td>
												</tr>
												<tr>
													<td>Sasaran Output <br> <?=$row['sasarankeluaran'];?></td>	
													<td colspan=2>Sasaran Mutu: <br> <?=$row['sasaranmutu'];?></td>	
												</tr>
												<tr>
													<td>Konseptor: <br><?=$row['konseptor']; ?></td>
													<td>Diperiksa: <br><?=$row['pemeriksa']; ?></td>
													<td>Disahkan: <br><?=$row['pengesah']; ?></td>
												</tr>
											</table>
											<button type="submit" class="btn btn-success form-control">
													<span class=""><i class="fa fa-fw fa-save"></i></span> Simpan Draf
											</button>
										</div>
								</div>
								<?=form_close(); ?>
						</div><!-- .animated -->
				</div><!-- .content -->


		</div><!-- /#right-panel -->

		<!-- Right Panel -->