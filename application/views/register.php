<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Simonev | Pusair-pu</title>
		<meta name="description" content="Simonev | PUSAT PENELITIAN DAN PENGEMBANGAN SUMBER DAYA AIR">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="apple-touch-icon" href="<?=base_url();?>apple-icon.png">
		<link rel="shortcut icon" href="<?=base_url();?>assets/images/favicon.ico">

		<link rel="stylesheet" href="<?=base_url();?>assets/css/normalize.css">
		<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?=base_url();?>assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?=base_url();?>assets/css/themify-icons.css">
		<link rel="stylesheet" href="<?=base_url();?>assets/css/flag-icon.min.css">
		<link rel="stylesheet" href="<?=base_url();?>assets/css/cs-skin-elastic.css">
		<!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
		<link rel="stylesheet" href="<?=base_url();?>assets/scss/style.css">

		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

		<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">
		<div class="sufee-login d-flex align-content-center flex-wrap">
				<div class="container">
						<div class="login-content">
								<div class="login-logo">
								<a class="navbar-brand" href="./"  style="font-family: 'Cinzel'; font-weight: bold; font-size:150%; color:white;"><img src="<?=base_url();?>assets/images/logo.png" alt="Logo" width=25>&nbsp;SIPROMON</a>
								</div>
							 <div class="login-form">
										<?php echo form_open('Auth/register'); ?>
												<center><p>Daftar untuk melanjutkan</p></center>
												<div class="input-group mb-3">
													<div class="input-group-prepend">
													  <span class="input-group-addon"><i class="fa fa-fw fa-user "></i></span>
													</div>
													<input name="username" type="text" class="form-control" required="" placeholder="Username">
												</div>
												<div class="input-group mb-3">
													<div class="input-group-prepend">
													  <span class="input-group-text"><i class="fa fa-fw fa-envelope"></i></span>
													</div>
													<input name="email" type="text" class="form-control" required="" placeholder="Alamat Email">
												</div>
												<div class="input-group mb-3">
													<div class="input-group-prepend">
													  <span class="input-group-text"><i class="fa fa-fw fa-lock"></i></span>
													</div>
													<input name="password" type="password" class="form-control" required="" placeholder="Password">
												</div>
												<button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
												<div class="register-link m-t-15 text-center">
														<p>Sudah punya akun ? <a href="<?php echo base_url(); ?>Auth"> Masuk di sini</a></p>
												</div>
										<?php echo form_close(); ?>
								</div>
						</div>
				</div>
		</div>


		<script src="<?=base_url();?>assets/js/vendor/jquery-2.1.4.min.js"></script>
		<script src=<?=base_url();?>"assets/js/popper.min.js"></script>
		<script src="<?=base_url();?>assets/js/plugins.js"></script>
		<script src="<?=base_url();?>assets/js/main.js"></script>


</body>
</html>
