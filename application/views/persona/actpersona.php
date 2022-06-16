<center>
	<div class="row">
		<div class="col-lg-6"><!-- Horizontal Form -->
	        <div class="box box-info">
	            <div class="box-header with-border">
	        	    <h1>Actualizar datos personales</h1>
	            </div>
	            <!-- /.box-header -->
	            <!-- form start -->
	            <form class="form-horizontal" action="<?= base_url()?>index.php/cactualizar/guardarregistro" method="POST">
	            <!-- <form class="form-horizontal" action="#" method="POST"> -->
	            	<?php foreach($result as $key){?>
	            	<div class="box-body">
	                	<div class="form-group">
		                	<label class="col-sm-2 control-label">Cuenta</label>
		                	<div class="col-sm-10">
		                    	<input type="text" class="form-control" placeholder="Cuenta" value="<?php echo $key->cuenta?>" disabled>
		                  	</div>
		                </div>
		                <div class="form-group">
		                  	<label class="col-sm-2 control-label">Nombre</label>
			                <div class="col-sm-10">
		    	                <input type="text" class="form-control" placeholder="Nombre" value="<?php echo $key->nombre?>" name="nombre" required>
			                </div>
		                </div>
		                <div class="form-group">
		                  	<label class="col-sm-2 control-label">Apellido paterno</label>
			                <div class="col-sm-10">
		    	                <input type="text" class="form-control" placeholder="Apellido paterno" value="<?php echo $key->appaterno?>" name="paterno" required>
			                </div>
		                </div>
		                <div class="form-group">
		                  	<label class="col-sm-2 control-label">Apellido materno</label>
			                <div class="col-sm-10">
		    	                <input type="text" class="form-control" placeholder="Apellido materno" value="<?php echo $key->apmaterno?>" name="materno" required>
			                </div>
		                </div>
		                <div class="form-group">
		                  	<label class="col-sm-2 control-label">Correo</label>
			                <div class="col-sm-10">
		    	                <input type="text" class="form-control" placeholder="correo" value="<?php echo $key->email?>" disabled>
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
		                  	<label class="col-sm-2 control-label">Nueva contrase&ntilde;a</label>
			                <div class="col-sm-10">
		    	                <input type="password" class="form-control" placeholder="Contraseña" name="password" required>
			                </div>
		                </div>
		                <div class="form-group">
		                  	<label class="col-sm-2 control-label">Confirmar contrase&ntilde;a</label>
			                <div class="col-sm-10">
		    	                <input type="password" class="form-control" placeholder="Contraseña" name="password1" required>
			                </div>
		                </div>
		                <?php }?>
		              	<div class="box-footer">
		              		<button type="submit" class="btn btn-success" onclick="actualizar()">Actualizar</button>&nbsp;
		              		<!-- <button type="button" class="btn btn-danger">Cancelar</button> -->
		              		<a href="<?= site_url('cinicio')?>" class="btn btn-danger">Cancelar</a>
		              	</div>
	            	</div>
	            </form>
	        </div>
	    </div>
	</div>
</center>
<script>
function actualizar() {
    alert("Datos Actualizados..!!");
}
</script>