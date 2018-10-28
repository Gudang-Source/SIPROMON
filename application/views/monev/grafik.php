				<div class="breadcrumbs">
						<div class="col-sm-4">
								<div class="page-header float-left">
										<div class="page-title">
												<h1>Grafik Perkembangan<br><?=$row['judul']; ?></h1>
										</div>
								</div>
						</div>
						<div class="col-sm-8">
								<div class="page-header float-right">
										<div class="page-title">
												<ol class="breadcrumb text-right">
														<li><a href="#">Monitoring dan Evaluasi</a></li>
														<li class="active">Grafik Perkembangan</li>
												</ol>
										</div>
								</div>
						</div>
				</div>

				<div class="content mt-3" style="background-color: white;">
						<div class="animated fadeIn">
								<div class="row">
									<div class="col-md-12">
										<br/>
										<div id="grafik"></div>																			
										<br/>
									</div>

								</div>
						</div><!-- .animated -->
				</div><!-- .content -->
		</div><!-- /#right-panel -->
		
		<!-- Right Panel -->
		
		<!-- Highcharts -->
		<script type="text/javascript">
			Highcharts.chart('grafik', {

				title: {
					text: 'Lorem Ipsum dolor sit amet'
				},

				subtitle: {
					text: 'Tahun Anggaran 2018'
				},

				yAxis: {
					title: {
						text: 'Dana yang digunakan'
					}
				},
				legend: {
					layout: 'vertical',
					align: 'right',
					verticalAlign: 'middle'
				},

				plotOptions: {
					series: {
						label: {
							connectorAllowed: true
						},
						pointStart: 2010
					}
				},

				series: [{
					name: 'Installation',
					data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
				}, {
					name: 'Manufacturing',
					data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
				}, {
					name: 'Sales & Distribution',
					data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
				}, {
					name: 'Project Development',
					data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227]
				}, {
					name: 'Other',
					data: [12908, 5948, 8105, 11248, 8989, 11816, 18274, 18111]
				}],

				responsive: {
					rules: [{
						condition: {
							maxWidth: 500
						},
						chartOptions: {
							legend: {
								layout: 'horizontal',
								align: 'center',
								verticalAlign: 'bottom'
							}
						}
					}]
				}

			});
		</script>