				<div class="breadcrumbs">
						<div class="col-sm-4">
								<div class="page-header float-left">
										<div class="page-title">
												<h1>Status RMP <br><?=$row['judul']; ?></h1>
										</div>
								</div>
						</div>
						<div class="col-sm-8">
								<div class="page-header float-right">
										<div class="page-title">
												<ol class="breadcrumb text-right">
														<li><a href="#">RMP</a></li>
														<li class="active">Status</li>
												</ol>
										</div>
								</div>
						</div>
				</div>

				<div class="content mt-3" style="background-color: white;">
						<div class="animated fadeIn">
								<div class="row">
									<div class="col-md-8 offset-md-2">
										<table class="table table-bordered"  style="background-color: white;">
											<tbody>
												<tr>
													<td colspan="3"><img src="<?=base_url()?>assets/images/rmp/cover.jpg" alt=""></td>
												</tr>
												<tr>
													<td colspan="3" style="text-align: center;"><h3>Satuan <?=$row['satuankerja']; ?></h3></td>
												</tr>
												<tr>
													<td>No.Dok. : RMP/PUSAIR/BLSUNGAI/?? <br>No.Rev. : 00	</td>
													<td>Tgl. Diterbitkan : <?=date("d M Y"); ?></td>
													<td>Hal    : 1 <br>Paraf :</td>
												</tr>
											</tbody>
										</table>
										<div style="text-align: center;">
											<h3>Rencana Mutu Pelaksanaan</h3>
											<h3><?=$row['judul'];  ?></h3>
											<!-- <h3>....</h3> -->
											<h4>Tahun Anggaran 2018</h4><br>
											<h4>Pengesahan</h4>
										</div>
										<table class="table table-bordered table-striped"  style="background-color: white;">
											<tbody>
											<tr>
												<td></td>
												<td class="text-center"><b>NAMA & JABATAN</b></td>
												<td class="text-center"><b>TANDA TANGAN</b></td>
											</tr>
											<tr>
												<td><b>Konseptor</b></td>
												<td><?=$row['konseptor']; ?></td>
												<td class="text-center">
													<?php if($row['rmp_stats'] == 1){ ?>
													<a href="javascript:void(0);" onclick="sign(<?php echo $row['id'];?>);" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Terbitkan RMP">
														<i class="fa fa-fw fa-exclamation-circle"></i> Sign
													</a>
													<?php }else if($row['rmp_stats'] > 1){ ?>
													<a href="#"  class="btn btn-success btn-sm disabled">
														<i class="fa fa-fw fa-check"></i> Approved
													</a>
													<?php } ?>
												</td>
											</tr>										
											<tr>
												<td><b>Diperiksa Oleh</b></td>
												<td><?=$row['pemeriksa']; ?></td>
												<td class="text-center" >
													<?php if($row['rmp_stats'] == 2){ ?>
													<a href="javascript:void(0);" onclick="check(<?php echo $row['id'];?>);" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Periksa RMP">
														<i class="fa fa-fw fa-exclamation-circle"></i> Sign
													</a>
													<?php }else if($row['rmp_stats'] > 2){ ?>
													<a href="" class="btn btn-success btn-sm disabled" >
														<i class="fa fa-fw fa-check"></i> Approved
													</a>
													<?php }else{ ?>
														<i style="color:red;">(belum di periksa)</i>
													<?php } ?>
												</td>
											</tr>										
											<tr>
												<td><b>Disahkan Oleh</b></td>
												<td><?=$row['pengesah']; ?></td>
												<td class="text-center" >
													<?php if($row['rmp_stats'] == 3){ ?>
													<a href="javascript:void(0);" onclick="pas(<?php echo $row['id'];?>);" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Periksa RMP">
														<i class="fa fa-fw fa-exclamation-circle"></i> Sign
													</a>
													<?php }else if($row['rmp_stats'] > 3){ ?>
													<a href="" class="btn btn-success btn-sm disabled" >
														<i class="fa fa-fw fa-check"></i> Approved
													</a>
													<?php }else{ ?>
														<i style="color:red;">(belum di periksa)</i>
													<?php } ?>												</td>
											</tr>
											</tbody>
										</table>
										<h4>Status Dokumen :</h4>
										<table class="table table-bordered"  style="background-color: grey;">
											<tbody>
											<tr>
												<td> </td>
												<td> </td>
												<td> </td>
												<td> </td>
											</tr>
											</tbody>
										</table>									
										<h4>Tanggal Distribusi :</h4>
										<table class="table table-bordered"  style="background-color: grey;">
											<tbody>
											<tr>
												<td> </td>
												<td> </td>
											</tr>
											</tbody>
										</table>																			
									</div>

								</div>
						</div><!-- .animated -->
				</div><!-- .content -->
		</div><!-- /#right-panel -->

		<!-- Right Panel -->