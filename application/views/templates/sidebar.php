		<!-- Left Panel -->
	<aside id="left-panel" class="left-panel">
		<nav class="navbar navbar-expand-sm navbar-default">

			<div class="navbar-header">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa fa-bars"></i>
				</button>
				<a class="navbar-brand" href="<?=base_url();?>Home/beranda"  style="font-family: 'Cinzel'; font-weight: bold; font-size:150%"><img src="<?=base_url();?>assets/images/logo.png" alt="Logo" width=25>&nbsp;Sipromon</a>
				<a class="navbar-brand hidden" href="./"><img src="<?=base_url();?>assets/images/favicon.ico" alt="Logo"></a>
			</div>

			<div id="main-menu" class="main-menu collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<h3 class="menu-title">Dashboard Menu</h3><!-- /.menu-title -->
					<?php if($this->session->userdata('position') != NULL){ ?>
					<li class="active">
						<a href="<?=base_url();?>Home/berandaka"> <i class="menu-icon fa fa-home"></i>Halaman Utama</a>
					</li>

					<?php } ?>

					<?php if($this->session->userdata('roles') == "Ketua"){ ?>
					<li class="active">
						<a href="<?=base_url();?>Home/beranda"> <i class="menu-icon fa fa-home"></i>Halaman Utama</a>
					</li>
					<li class="menu-item-has-children dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th-list"></i>Kegiatan</a>
						<ul class="sub-menu children dropdown-menu">
							<li><i class="menu-icon fa fa-angle-double-right"></i><a href="<?php echo base_url(); ?>Kegiatan">Semua Kegiatan</a></li>
						</ul>
					</li>
					<?php } ?>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
	</aside><!-- /#left-panel -->

	<!-- Left Panel -->
	<!-- Right Panel -->

	<div id="right-panel" class="right-panel">

			<!-- Header-->
	<!-- Header-->
	<header id="header" class="header">

		<div class="header-menu">

			<div class="col-sm-7">
				<a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
				<div class="header-left">
					<div class="dropdown for-notification">
						<button class="btn btn-secondary dropdown-toggle" type="button" onclick="toggleFullScreen()">
						<i class="ti-fullscreen"></i>
						</button>
					</div>
					<div class="dropdown for-notification">
						<i class="fa fa-clock-o"></i>
						<span id='clock'></span>	
					</div>					
				

				</div>
			</div>
			<!-- Profile right -->
			<div class="col-sm-5">
				<div class="user-area dropdown float-right">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img class="user-avatar rounded-circle" src="<?=base_url();?>assets/images/admin.jpg" alt="User Avatar">
					</a>

					<div class="user-menu dropdown-menu">
							<?php if($this->session->userdata('position') == NULL){ ?>
							<a class="nav-link" href="<?php echo site_url(); ?>Home/profilku"><i class="fa fa-user-o"></i> Profilku</a>
							<?php } ?>
							<a class="nav-link" href="<?php echo site_url(); ?>Auth/logout/"><i class="fa fa-power-off"></i> Keluar</a>
					</div>
				</div>


			</div>
		</div>

	</header><!-- /header -->
	<!-- Header-->