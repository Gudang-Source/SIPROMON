		<div class="breadcrumbs">
			<div class="col-sm-4">
				<div class="page-header float-left">
					<div class="page-title">
						<h1>Profilku</h1>
					</div>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="page-header float-right">
					<div class="page-title">
						<ol class="breadcrumb text-right">
							<li><a href="" title="">Halaman Utama</a></li>
							<li class="active">Profilku</li>
						</ol>
					</div>
				</div>
			</div>
		</div>

		<div class="content mt-3">
		
			<?php if($this->session->flashdata('msg') == 'ok'){ ?>
			<div class="col-sm-12">
				<div class="alert alert-success alert-dismissible fade show col-9" role="alert">
					<span class="badge badge-pill badge-success">Berhasil</span> Profil anda telah diperbaharui!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
			<?php } ?>
			<div class="col-sm-12 mb-4">
				<?php echo form_open('Home/profilku'); ?>
					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-3 col-form-label">Username</label>
						<div class="input-group col-6">
					    <div class="input-group-prepend">
					      <div class="input-group-text"><i class="fa fa-user fa-fw"></i></div>
					    </div>
					    <input type="text" class="form-control" name="username" value="<?=$row['username']; ?>">
					  </div>
				  </div>
					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat Email</label>
				    <div class="input-group col-6">
					    <div class="input-group-prepend">
					      <div class="input-group-text"><i class="fa fa-envelope fa-fw"></i></div>
					    </div>
					    <input type="text" class="form-control" type="email" name="email" value="<?=$row['email']; ?>">
					  </div>
				  </div>
					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-3 col-form-label">Password Lama <a href="#" data-toggle="tooltip" title="Ganti Password"><i class="fa fa-info-circle"></i></a></label>
				    <div class="col-6">
				      <input type="password" class="form-control">
				    </div>
				  </div>
					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-3 col-form-label">Password Baru <a href="#" data-toggle="tooltip" title="Ganti Password"><i class="fa fa-info-circle"></i></a></label>
				    <div class="col-6">
				      <input type="password" name="password" class="form-control">
				    </div>
				  </div>
					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Lengkap dan Gelar</label>
				    <div class="col-6">
					    <input type="text" class="form-control <?php if(is_null($row['fullname'])) echo "is-valid"; ?>" type="text" name="fullname" value="<?=$row['fullname']; ?>" required>
				    </div>
				  </div>
					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-3 col-form-label">No Telepon</label>
				    <div class="col-6">
					    <input type="text" class="form-control <?php if(is_null($row['hp'])) echo "is-valid"; ?>" type="text" name="hp" value="<?=$row['hp']; ?>" required>
				    </div>
				  </div>				  
					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-3 col-form-label">Satuan Kerja</label>
				    <div class="col-6">
				      <select name="satker_id" class="form-control <?php if(is_null($row['satker_id'])) echo "is-valid"; ?>" required>
								<option disabled selected>--Pilih Satuan Kerja--</option>
				      	<?php foreach($satkers as $satker){ ?>
				      	<option value="<?=$satker['id']; ?>" <?php if($row['satker_id'] == $satker['id']) echo "selected"; ?>><?=$satker['name']; ?></option>
				      	<?php } ?>
				      </select>
				    </div>
				  </div>
					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-3 col-form-label">Atasan Langsung</label>
				    <div class="col-6">
				      <select name="roles_id" class="form-control <?php if(is_null($row['roles_id'])) echo "is-valid"; ?>" required>
								<option disabled selected>--Pilih Atasan Langsung--</option>
				      	<?php foreach($roles as $role){ ?>
				      	<option value="<?=$role['id']; ?>" <?php if($row['roles_id'] == $role['id']) echo "selected"; ?>><?=$role['position']; ?>( <?=$role['name']; ?> )</option>
				      	<?php } ?>
				      </select>
				    </div>
				  </div>				  
					<div class="form-group row">
						<div class="offset-sm-3 col-sm-9">
							<button type="submit" class="btn btn-labeled btn-primary"><span class="btn-label"><i class="fa fa-fw fa-save"></i></span> Simpan</button>        
						</div>
					</div>

				</form>
			</div>
<!-- 			<div class="col-xl-3 col-lg-6">
				<div class="card">
					<div class="card-body">
						<div class="stat-widget-one">
							<div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
							<div class="stat-content dib">
								<div class="stat-text">Active Projects</div>
								<div class="stat-digit">770</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
		</div> <!-- .content -->
	</div><!-- /#right-panel -->

	<!-- Right Panel -->
