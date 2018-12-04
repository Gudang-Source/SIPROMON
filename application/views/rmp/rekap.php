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
											<div class="pull-right" style="margin-bottom: 15px;">
												<a href="<?=base_url(); ?>RMP/dua/<?=$this->uri->segment(3)?>"  class="btn btn-labeled btn-success">
														 Bab 2 <span class="btn-label btn-label-right"><i class="fa fa-fw fa-arrow-right"></i></span>
												</a>
											</div>
										</div>
									</div>
								</div>
								<?php echo form_open('RMP/satu/'.$this->uri->segment(3)); ?>
								<div class="row" style="background-color: white;">
									<div class="col-md-8 offset-md-2">
											<h4 style="font-weight: bold;" align="center">HALAMAN REKAP KEGIATAN</h4>
											<table class="table table-sm table-bordered">
												<tr>
													<td colspan="3" align="center" style="font-weight: bold;"><?=$row['judul']; ?></td>
												</tr>
												<tr>
													<td>No. Dokumen<br>RMP/PUSAIR/BLPANTAI/01-01</td>
													<td>Nomor DIPA <br>033.11.1.576981/2018</td>
												</tr>
												<tr>
													<td>Nama Satker<br><?=strtoupper($row['satuankerja']); ?></td>
													<td>Tanggal Pengesahan DIPA<br>.................</td>
												</tr>												
											</table>	
									</div>
								</div>
						</div><!-- .animated -->
				</div><!-- .content -->


		</div><!-- /#right-panel -->

		<!-- Right Panel -->