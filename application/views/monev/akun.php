				<div class="breadcrumbs">
						<div class="col-sm-4">
								<div class="page-header float-left">
										<div class="page-title">
												<h1>Realisasi Per Akun<br><?=$row['judul']; ?></h1>
										</div>
								</div>
						</div>
						<div class="col-sm-8">
								<div class="page-header float-right">
										<div class="page-title">
												<ol class="breadcrumb text-right">
														<li><a href="#">Monitoring dan Evaluasi</a></li>
														<li class="active">Tabel Realisasi Per Akun</li>
												</ol>
										</div>
								</div>
						</div>
				</div>
				<?php
					$ddate = date("Y-m-d");
					$date = new DateTime($ddate);
					$week = $date->format("W");
				?>
				<div class="content mt-3" style="background-color: white;">
							<div class="table-responsive">
								<table class="table table-sm table-bordered table-hover" style="background-color: white; border-color: white; font-size:13px;">
									<thead class="text-center font-weight-bold" >	
										<tr class="" style="background-color: #607d8b;border-color: #607d8b;color:#fff; font-weight: 400; " >
											<td style="vertical-align: middle;">
												No
											</td>
											<td style="vertical-align: middle;">
												Kode Akun
											</td>
											<td style="vertical-align: middle;">
												Uraian
											</td>
											<td style="vertical-align: middle;">
												Pagu
											</td>
											<td style="vertical-align: middle;">
												Realisasi
											</td>
											<td style="vertical-align: middle;">
												Sisa
											</td>
										</tr>
									</thead>			
									<tbody>
										<tr>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
									</tbody>
								</table>
							</div>
				</div><!-- .content -->
				<div class="modal fade" id="addLaporan" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-md" role="document">
				</div>
		</div>
		</div><!-- /#right-panel -->

		<!-- Right Panel -->