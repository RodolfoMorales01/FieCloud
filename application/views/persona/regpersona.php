<!DOCTYPE html>
<html>
	<head>
		<title>Alta persona</title>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	    <link rel="stylesheet" href="<?= base_url()?>assets/bootstrap/css/bootstrap.min.css">
	  	<link rel="stylesheet" href="<?= base_url()?>assets/font-awesome-4.7.0/css/font-awesome.min.css">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	    <link rel="stylesheet" href="<?= base_url()?>assets/plugins/datatables/dataTables.bootstrap.css">
	    <link rel="stylesheet" href="<?= base_url()?>assets/dist/css/AdminLTE.css">
	    <link rel="stylesheet" href="<?= base_url()?>assets/dist/css/skins/_all-skins.css">
	</head>
	<style type="text/css">
		body {
			background-image: url('<?= base_url()?>img/fondo.jpg');
			background-repeat: no-repeat;
		}
		
		@media (min-width: 1000px) {
			.col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, 
			.col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10,
			.col-lg-11, .col-lg-12 {
		    	float: inherit;
		  	}
		}
	</style>
	<body>
		<center>
		<div class="row">
			<div class="col-lg-6"><!-- Horizontal Form --><br>
		        <div class="box box-info">
		            <div class="box-header with-border">
		        	    <h2>Registra Nuevo Usuario</h2>
						<div class="callout callout-warning">
    						<font color="white">
								<h4>Aviso</h4>
								<h3>Solo Correos con @ucol.mx</h3>
							</font>
              			</div>
						<?= $mensaje;?>
		            </div><!-- /.box-header -->
			        <form class="form-horizontal" action="<?= base_url()?>index.php/cpersona/Guardar" method="POST">
			           	<div class="box-body">
			             	<div class="form-group">
				               	<label class="col-sm-2 control-label">Cuenta</label>
				              	<div class="col-sm-10">
				                   	<input type="text" class="form-control" placeholder="Cuenta" name="cuenta" maxlength="8" required>
				                </div>
				            </div>
				            <div class="form-group">
				              	<label class="col-sm-2 control-label">Nombre</label>
					            <div class="col-sm-10">
				    	            <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
					            </div>
				            </div>
				            <div class="form-group">
				              	<label class="col-sm-2 control-label">Apellido paterno</label>
					            <div class="col-sm-10">
				    	            <input type="text" class="form-control" name="paterno" placeholder="Apellido paterno" required>
					            </div>
				            </div>
				            <div class="form-group">
				             	<label class="col-sm-2 control-label">Apellido materno</label>
					        	<div class="col-sm-10">
				    	            <input type="text" class="form-control" name="materno" placeholder="Apellido materno" required>
					            </div>
				            </div>
				            <div class="form-group">
				              	<label class="col-sm-2 control-label">Licenciatura</label>
				              	<div class="col-sm-10">
				    	        	<select name="licen" class="form-control" required>
										<option></option>
										<option><b>Ing. en Sistemas Computacionales</b></option>
										<option><b>Ing. en Mecatr&oacute;nica</b></option>
										<option><b>Ing. Mec&aacute;nico Electricista</b></option>
										<option><b>Ing. en Tecnolog&iacute;as Electr&oacute;nicas</b></option>
									</select>
					            </div>
				            </div>
				            <div class="form-group">
				              	<label class="col-sm-2 control-label">Correo</label>
					            <div class="col-sm-10">
				    	            <input type="text" class="form-control" placeholder="Solo Correos UCOL" name="correo" required>
					            </div>
				            </div>
				            <!-- <div class="form-group">
				              	<label class="col-sm-2 control-label">Confirmar correo</label>
					            <div class="col-sm-10">
				    	            <input type="text" class="form-control" placeholder="Confirma correo" name="usuario" required>
					            </div>
				            </div> -->
				            <div class="form-group">
				              	<label class="col-sm-2 control-label">Contrase&ntilde;a</label>
					            <div class="col-sm-10">
				    	            <input type="password" class="form-control" placeholder="Contrase&ntilde;a" name="password" required>
					            </div>
				            </div>
				            <div class="form-group">
				              	<label class="col-sm-2 control-label">Confirmar contrase&ntilde;a</label>
					            <div class="col-sm-10">
				    	            <input type="password" class="form-control" placeholder="Confirme contrase&ntilde;a" name="password1" required>
					            </div>
				            </div>
				           	<div class="box-footer">
				           		<button type="submit" class="btn btn-success" onclick="Registrar()">Registrar</button>&nbsp;
				           		<a href="<?= site_url('')?>" class="btn btn-danger">Cancelar</a>
				          	</div>
			          	</div>
			        </form>
			    </div>
		    </div>
		</div></center>
	</body>
	<script>
		function Registrar() {
		    alert("El usuario fue exitosamente registrado..!!");
		}
	</script>
</html>	