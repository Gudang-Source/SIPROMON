		<div class="breadcrumbs">
			<div class="col-sm-4">
				<div class="page-header float-left">
					<div class="page-title">
						<h1>Struktur Organisasi</h1>
					</div>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="page-header float-right">
					<div class="page-title">
						<ol class="breadcrumb text-right">
							<li><a href="" title="">Admin</a></li>
							<li class="active">Struktur Organisasi</li>
						</ol>
					</div>
				</div>
			</div>
		</div>

		<div class="content mt-3">

			<?php if($this->session->flashdata('msg') == 'ok'){ ?>
			<div class="col-sm-12">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<span class="badge badge-pill badge-success">Berhasil</span> Struktur Organisasi Telah Diperbaharui
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
			<?php } ?>
      <?php echo form_open('Admin/saveStruktur'); ?>
			<div class="col-sm-12 mb-4">
        <div class="ui styled accordion">
      	<div class="title active">
            <i class="dropdown icon"></i>
            Pusat Litbang Sumber Daya Air
          </div>
          <div class="content active">
            <?php for ($i=0; $i < 5; $i++) { ?>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-6 col-form-label"><?=$roles[$i]['position'] ?></label>
              <div class="input-group col-6">
                <select name="roles_<?php echo $roles[$i]['id']; ?>" class="form-control">
                  <option value="" disabled="">--Silahkan Pilih Pejabat--</option>
                  <?php foreach($employees as $employee){ ?>
                  <option value="<?=$employee['id']; ?>" <?php if($roles[$i]['employee_id'] == $employee['id']) echo "selected" ?>><?=$employee['name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <?php } ?>
            <div class="form-group row">
              <div class="offset-sm-6 col-sm-6">
                <button type="submit" class="btn btn-labeled btn-primary"><span class="btn-label"><i class="fa fa-fw fa-save"></i></span> Simpan</button>        
              </div>
            </div>
          </div>
      		<div class="title">
            <i class="dropdown icon"></i>
            Balai Bangunan Hidraulik dan Geoteknik Keairan
          </div>
          <div class="content">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-6 col-form-label"><?=$roles[5]['position'] ?></label>
              <div class="input-group col-6">
                <select name="roles_<?php echo $roles[$i]['id']; ?>" class="form-control">
                  <?php foreach($employees as $employee){ ?>
                  <option value="<?=$employee['id']; ?>" <?php if($roles[5]['employee_id'] == $employee['id']) echo "selected" ?>><?=$employee['name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <?php for ($i=13; $i < 16; $i++) { ?>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-6 col-form-label"><?=$roles[$i]['position'] ?></label>
              <div class="input-group col-6">
                <select name="roles_<?php echo $roles[$i]['id']; ?>" class="form-control">
                  <?php foreach($employees as $employee){ ?>
                  <option value="<?=$employee['id']; ?>" <?php if($roles[$i]['employee_id'] == $employee['id']) echo "selected" ?>><?=$employee['name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <?php } ?>
            <div class="form-group row">
              <div class="offset-sm-6 col-sm-6">
                <button type="submit" class="btn btn-labeled btn-primary"><span class="btn-label"><i class="fa fa-fw fa-save"></i></span> Simpan</button>        
              </div>
            </div>            
          </div>
          <div class="title">
            <i class="dropdown icon"></i>
            Balai Hidrologi dan Tata Air
          </div>
          <div class="content">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-6 col-form-label"><?=$roles[6]['position'] ?></label>
              <div class="input-group col-6">
                <select name="roles_<?php echo $roles[$i]['id']; ?>" class="form-control">
                  <?php foreach($employees as $employee){ ?>
                  <option value="<?=$employee['id']; ?>" <?php if($roles[6]['employee_id'] == $employee['id']) echo "selected" ?>><?=$employee['name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <?php for ($i=16; $i < 19; $i++) { ?>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-6 col-form-label"><?=$roles[$i]['position'] ?></label>
              <div class="input-group col-6">
                <select name="roles_<?php echo $roles[$i]['id']; ?>" class="form-control">
                  <?php foreach($employees as $employee){ ?>
                  <option value="<?=$employee['id']; ?>" <?php if($roles[$i]['employee_id'] == $employee['id']) echo "selected" ?>><?=$employee['name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <?php } ?>
            <div class="form-group row">
              <div class="offset-sm-6 col-sm-6">
                <button type="submit" class="btn btn-labeled btn-primary"><span class="btn-label"><i class="fa fa-fw fa-save"></i></span> Simpan</button>        
              </div>
            </div>            
          </div>
          <div class="title">
            <i class="dropdown icon"></i>
            Balai Lingkungan Keairan
          </div>
          <div class="content">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-6 col-form-label"><?=$roles[7]['position'] ?></label>
              <div class="input-group col-6">
                <select name="roles_<?php echo $roles[$i]['id']; ?>" class="form-control">
                  <?php foreach($employees as $employee){ ?>
                  <option value="<?=$employee['id']; ?>" <?php if($roles[7]['employee_id'] == $employee['id']) echo "selected" ?>><?=$employee['name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <?php for ($i=19; $i < 22; $i++) { ?>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-6 col-form-label"><?=$roles[$i]['position'] ?></label>
              <div class="input-group col-6">
                <select name="roles_<?php echo $roles[$i]['id']; ?>" class="form-control">
                  <?php foreach($employees as $employee){ ?>
                  <option value="<?=$employee['id']; ?>" <?php if($roles[$i]['employee_id'] == $employee['id']) echo "selected" ?>><?=$employee['name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <?php } ?>
            <div class="form-group row">
              <div class="offset-sm-6 col-sm-6">
                <button type="submit" class="btn btn-labeled btn-primary"><span class="btn-label"><i class="fa fa-fw fa-save"></i></span> Simpan</button>        
              </div>
            </div>            
          </div>
          <div class="title">
            <i class="dropdown icon"></i>
            Balai Sungai
          </div>
          <div class="content">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-6 col-form-label"><?=$roles[8]['position'] ?></label>
              <div class="input-group col-6">
                <select name="roles_<?php echo $roles[$i]['id']; ?>" class="form-control">
                  <?php foreach($employees as $employee){ ?>
                  <option value="<?=$employee['id']; ?>" <?php if($roles[8]['employee_id'] == $employee['id']) echo "selected" ?>><?=$employee['name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <?php for ($i=22; $i < 25; $i++) { ?>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-6 col-form-label"><?=$roles[$i]['position'] ?></label>
              <div class="input-group col-6">
                <select name="roles_<?php echo $roles[$i]['id']; ?>" class="form-control">
                  <?php foreach($employees as $employee){ ?>
                  <option value="<?=$employee['id']; ?>" <?php if($roles[$i]['employee_id'] == $employee['id']) echo "selected" ?>><?=$employee['name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <?php } ?>
            <div class="form-group row">
              <div class="offset-sm-6 col-sm-6">
                <button type="submit" class="btn btn-labeled btn-primary"><span class="btn-label"><i class="fa fa-fw fa-save"></i></span> Simpan</button>        
              </div>
            </div>            
          </div>
          <div class="title">
            <i class="dropdown icon"></i>
            Balai Sabo
          </div>
          <div class="content">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-6 col-form-label"><?=$roles[9]['position'] ?></label>
              <div class="input-group col-6">
                <select name="roles_<?php echo $roles[$i]['id']; ?>" class="form-control">
                  <?php foreach($employees as $employee){ ?>
                  <option value="<?=$employee['id']; ?>" <?php if($roles[9]['employee_id'] == $employee['id']) echo "selected" ?>><?=$employee['name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <?php for ($i=25; $i < 28; $i++) { ?>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-6 col-form-label"><?=$roles[$i]['position'] ?></label>
              <div class="input-group col-6">
                <select name="roles_<?php echo $roles[$i]['id']; ?>" class="form-control">
                  <?php foreach($employees as $employee){ ?>
                  <option value="<?=$employee['id']; ?>" <?php if($roles[$i]['employee_id'] == $employee['id']) echo "selected" ?>><?=$employee['name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <?php } ?>
            <div class="form-group row">
              <div class="offset-sm-6 col-sm-6">
                <button type="submit" class="btn btn-labeled btn-primary"><span class="btn-label"><i class="fa fa-fw fa-save"></i></span> Simpan</button>        
              </div>
            </div>            
          </div>
          <div class="title">
            <i class="dropdown icon"></i>
            Balai Rawa
          </div>
          <div class="content">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-6 col-form-label"><?=$roles[10]['position'] ?></label>
              <div class="input-group col-6">
                <select name="roles_<?php echo $roles[$i]['id']; ?>" class="form-control">
                  <?php foreach($employees as $employee){ ?>
                  <option value="<?=$employee['id']; ?>" <?php if($roles[10]['employee_id'] == $employee['id']) echo "selected" ?>><?=$employee['name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <?php for ($i=28; $i < 31; $i++) { ?>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-6 col-form-label"><?=$roles[$i]['position'] ?></label>
              <div class="input-group col-6">
                <select name="roles_<?php echo $roles[$i]['id']; ?>" class="form-control">
                  <?php foreach($employees as $employee){ ?>
                  <option value="<?=$employee['id']; ?>" <?php if($roles[$i]['employee_id'] == $employee['id']) echo "selected" ?>><?=$employee['name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <?php } ?>
            <div class="form-group row">
              <div class="offset-sm-6 col-sm-6">
                <button type="submit" class="btn btn-labeled btn-primary"><span class="btn-label"><i class="fa fa-fw fa-save"></i></span> Simpan</button>        
              </div>
            </div>            
          </div>
          <div class="title">
            <i class="dropdown icon"></i>
            Balai Pantai
          </div>
          <div class="content">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-6 col-form-label"><?=$roles[11]['position'] ?></label>
              <div class="input-group col-6">
                <select name="roles_<?php echo $roles[$i]['id']; ?>" class="form-control">
                  <?php foreach($employees as $employee){ ?>
                  <option value="<?=$employee['id']; ?>" <?php if($roles[11]['employee_id'] == $employee['id']) echo "selected" ?>><?=$employee['name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <?php for ($i=31; $i < 34; $i++) { ?>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-6 col-form-label"><?=$roles[$i]['position'] ?></label>
              <div class="input-group col-6">
                <select name="roles_<?php echo $roles[$i]['id']; ?>" class="form-control">
                  <?php foreach($employees as $employee){ ?>
                  <option value="<?=$employee['id']; ?>" <?php if($roles[$i]['employee_id'] == $employee['id']) echo "selected" ?>><?=$employee['name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <?php } ?>
            <div class="form-group row">
              <div class="offset-sm-6 col-sm-6">
                <button type="submit" class="btn btn-labeled btn-primary"><span class="btn-label"><i class="fa fa-fw fa-save"></i></span> Simpan</button>        
              </div>
            </div>            
          </div>
          <div class="title">
            <i class="dropdown icon"></i>
            Balai Irigasi
          </div>
          <div class="content">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-6 col-form-label"><?=$roles[12]['position'] ?></label>
              <div class="input-group col-6">
                <select name="roles_<?php echo $roles[$i]['id']; ?>" class="form-control">
                  <?php foreach($employees as $employee){ ?>
                  <option value="<?=$employee['id']; ?>" <?php if($roles[12]['employee_id'] == $employee['id']) echo "selected" ?>><?=$employee['name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <?php for ($i=34; $i < 37; $i++) { ?>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-6 col-form-label"><?=$roles[$i]['position'] ?></label>
              <div class="input-group col-6">
                <select name="roles_<?php echo $roles[$i]['id']; ?>" class="form-control">
                  <?php foreach($employees as $employee){ ?>
                  <option value="<?=$employee['id']; ?>" <?php if($roles[$i]['employee_id'] == $employee['id']) echo "selected" ?>><?=$employee['name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <?php } ?>
            <div class="form-group row">
              <div class="offset-sm-6 col-sm-6">
                <button type="submit" class="btn btn-labeled btn-primary"><span class="btn-label"><i class="fa fa-fw fa-save"></i></span> Simpan</button>        
              </div>
            </div>            
          </div>          
          <div class="title">
            <i class="dropdown icon"></i>
            End
          </div>

        </div>
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
