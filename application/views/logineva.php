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
                    <?php echo form_open('Auth/loginevaluator',['class' => 'needs-validation']); ?>
                        <center><p>Masuk Evaluator</p></center>
                        <?php if($this->session->flashdata('msg') == 'wrong'){ ?>
                        <div class="col-md-12">
                            <div class="alert alert-danger alert-dismissible fade show col-12" role="alert">
                                Gagal Masuk. Username atau Password Salah!
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <?php } ?>                
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-user fa-fw"></i></span>
                          </div>
                          <input type="text" name="username" class="form-control" placeholder="Masukkan Username">
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-lock fa-fw"></i></span>
                          </div>
                          <input type="password" name="password" class="form-control" placeholder="Masukkan Password" >
                        </div>
                        <button type="submit" class="btn btn-warning btn-flat m-b-30 m-t-30">Masuk</button>
                        <!-- <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Masuk</button> -->
                        <br>
                        <br>
                        <a href="<?=base_url(); ?>Auth/ka" type="button" class="btn btn-labeled btn-primary">
                                <span class="btn-label"><i class="fa fa-fw fa-arrow-left"></i></span> Kepala Pusair
                        </a>                                                
                        <br>
                        <br>
                        <a href="<?=base_url(); ?>Auth" type="button" class="btn btn-labeled btn-success">
                                <span class="btn-label"><i class="fa fa-fw fa-sign-in"></i></span> Ketua Tim
                        </a>                                                
                        <br>
                        <br>
                        <a href="<?=base_url(); ?>Auth/evaluator" type="submit" class="btn btn-info btn-flat m-b-30 m-t-30"><span class="btn-label"><i class="fa fa-fw fa-right"></i></span> Eselon 3</a>                        
                    </form>
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
