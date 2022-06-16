<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="<?= base_url()?>vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url()?>vendor/bootstrap/css/metisMenu.css" rel="stylesheet">
    <link href="<?= base_url()?>vendor/bootstrap/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?= base_url()?>assets/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?= base_url() ?>img/fiecloud1.png">
</head>
<style type="text/css">
	body {
		background-image: url('<?= base_url()?>img/fondo.jpg');
		background-repeat: no-repeat;
	}
	.login-panel {
  		margin-top: 12%;
	}
</style>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-panel panel panel-default">
					<center><img src="<?= base_url() ?>img/fiecloud1.png" width="100%"></center><br>
					<div class="panel-heading">
						<h3 class="panel-title">Iniciar Sesi&oacute;n</h3>
					</div>
					<div class="panel-body">
						<form method="POST" action="<?=base_url()?>index.php/clogin/iniciar">
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="Correo" name="usu" id="correo" type="text" autofocus required>
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Contrase&ntilde;a" name="pass" type="password" id="password" required>
								</div>
								<input name="login" value="Iniciar sesi&oacute;n" type="submit" class="btn btn-lg btn-success btn-block"/>
							</fieldset>
						</form>
						<?= $mensaje;?>
						<br>
						<center>
							¿No tienes una cuenta?.. <a href="<?= base_url()?>index.php/cpersona"><font color="blue">!Registrate aqui..!</font></a>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
	 <!-- jQuery -->
    <script src="<?= base_url()?>vendor/bootstrap/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url()?>vendor/bootstrap/js/bootstrap.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?= base_url()?>vendor/bootstrap/js/metisMenu.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url()?>vendor/bootstrap/js/sb-admin-2.js"></script>
</body>
</html>