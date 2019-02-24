<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sipromon | Pusair-pu</title>
	<meta name="description" content="Sipromon | PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon" href="<?=base_url();?>apple-icon.png">
	<link rel="shortcut icon" href="<?=base_url();?>assets/images/favicon.ico">
	
	<link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/css/normalize.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/css/themify-icons.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/css/flag-icon.min.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/css/cs-skin-elastic.css">
	<!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/lib/datatable/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/css/lib/chosen/chosen.min.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/scss/style.css">	
  <link rel="stylesheet" href="<?=base_url();?>assets/css/jasny-bootstrap.css">
  <!-- <link rel="stylesheet" href="<?=base_url();?>assets/css/accordion.min.css"> -->
  <!-- <link rel="stylesheet" href="<?=base_url();?>assets/css/progress-tracker.css"> -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/sweetalert.css">
  <!-- Froala -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
	<!-- <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
	<style type="text/css" media="screen">
		body { padding-right: 0 !important }
		#header{
			background-color: #ffd700;
		}
		.left{
			font-weight: bold;
		}


		a{
			color: #2780e3;
	    text-decoration: none;
		}		
		.breadcrumb>li>a{
			    color: #878787;
		}
		.dropdown-menu.show{
			top:38px!important;
		}
		p{
			color:black;
		}
		.ui.styled.accordion .accordion .title, .ui.styled.accordion .title {
	    color: rgba(0,0,0);
  	}
		.ui.styled.accordion {
			width:inherit;
		}

		.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
	    color: white;
	    background-color: #007bff;		
	  }
	  .nav-pills .nav-link {
		    color: #007bff;
				text-decoration: none;
				font-weight: 32	0;
		}
		#grafik {
			min-width: 80%;
			max-width: 100%;
			height: 400px;
			padding 20px;
		}
		.table-black{
			background-color: black;
		}
	</style>
	<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
	<!-- Highcharts -->
	<script src="<?=base_url();?>assets/js/highcharts/highcharts.js"></script>
	<script src="<?=base_url();?>assets/js/highcharts/modules/series-label.js"></script>
	<script src="<?=base_url();?>assets/js/highcharts/modules/exporting.js"></script>
	<script src="<?=base_url();?>assets/js/highcharts/modules/export-data.js"></script>

</head>
<body style="font-family: 'Source Sans Pro',Calibri,Candara,Arial; " <?php 	if($this->uri->segment(2) == "att2" || $this->uri->segment(2) == "att3" || $this->uri->segment(1) == "Monev") echo 'class="open"'; ?>>
	
	<div>
