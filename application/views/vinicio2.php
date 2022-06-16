<div class="row">
</div>
<div class="panel-body"><!-- Button trigger modal -->
    <button class="btn btn-success" data-toggle="modal" data-target="#myModalfile">
        <i class="fa fa-file" aria-hidden="true"></i> Agregar archivo
    </button><!-- Modal -->&nbsp;
    <button class="btn btn-primary" data-toggle="modal" data-target="#myModalfolder">
        <i class="fa fa-folder" aria-hidden="true"></i> Crear Carpeta
    </button><!-- Modal -->

    <div class="modal fade" id="myModalfile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel" align="center">Subir Archivo</h4>
                </div>
                <form action="<?= base_url() ?>index.php/cinicio/cargarArchivo" method="POST" enctype="multipart/form-data">
                  <center><input type="file" name="fileImagen" class="form control"></center>
                
                  <div class="modal-footer">
                	  <button type="submit" class="btn btn-success" onclick="CargarArchivo()"><i class="fa fa-file" aria-hidden="true"></i>&nbsp;Cargar</button>
                	  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                  </div>
                </form>
        	</div><!-- /.modal-content -->
    	</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

	<!-- Crear Carpetas -->
	<div class="modal fade" id="myModalfolder" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel" align="center">Crear Carpeta</h4>
                </div>
                <form action="<?= base_url() ?>index.php/cinicio/ruta/CrearDir1" method="POST" enctype="multipart/form-data">
                    <center>
                        <table>
                            <tr>
                                <td style="padding: 10px"><label>Nombre </label></td>
                                <td><input type="text" style="width: 290px; height: 35px" name="carpeta" required></td>
                            </tr>
                        </table>
                    </center>
                    <div class="modal-footer">
                	   <button type="submit" class="btn btn-success" onclick="CrearCarpeta()"><i class="fa fa-folder" aria-hidden="true"></i> Crear</button>&nbsp;
                	   <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                  </div>
                </form>
        	</div><!-- /.modal-content -->
    	</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
    <br>
    <?= $errorArch?>
    <!--Datatables-->
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example2" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th><center>Acci&oacute;n</center></th>
                    <th><center>Archivo</center></th>
                    <th>Tama&ntilde;o</th>
                    <th><center>Tipo</center></th>
                    <th><center>Fecha</center></th>
                </tr>
            </thead>
            <tbody>          
                <?php foreach($folder as $folder){?>
                <tr>
                    <td style="width: 114px;">
                        <center>
                            <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#myModalshare">
                                <i class="fa fa-share-alt" aria-hidden="true"></i>
                            </button>
                            <a href="<?php echo base_url();?>index.php/cinicio/eliminarfolder/<?php echo $folder->idfolder?>" class="btn btn-sm btn-danger" onclick="EliminarCarpeta()">
                                <i class="fa fa-times" aria-hidden="true" title="Eliminar carpeta"></i>
                            </a>
                        </center>
                    </td>
                    <td style="width:210px;">
                        <a href="<?php echo base_url();?>index.php/cinicio/ruta?code=<?php echo $folder->ruta?>">
                            <img src="<?php echo base_url();?>img/folder.png" width="50px" height="50px">&nbsp;<?php echo $folder->nombre?>
                        </a>
                    </td>
                    <td style="width:15px;"><center></center></td>
                    <td style="width:100px;"><center><?php echo $folder->tipo?></center></td>
                    <td style="width:126px;"><center><?php echo $folder->date?></center></td>
                </tr>         
                <?php } ?> 
                <?php foreach($result as $key){?>
                <tr>
                    <td style="width: 98px;">
                        <center>
                            <a href="<?php echo base_url();?>index.php/cinicio/downloads/<?php echo $key->archivo?>" class="btn btn-sm btn-success">
                                <i class="fa fa-download" aria-hidden="true" title="Descargar Archivo"></i>
                            </a>
                            <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#myModalshare">
                                <i class="fa fa-share-alt" aria-hidden="true"></i>
                            </button>
                            <a href="<?php echo base_url();?>index.php/cinicio/eliminar/<?php echo $key->idarchivos?>" class="btn btn-sm btn-danger" onclick="EliminarArchivo()">
                                <i class="fa fa-times" aria-hidden="true" title="Eliminar Archivo"></i>
                            </a>
                        </center>
                    </td>
                    <td style="width:292px;">
                        <img src="<?php echo base_url();?>img/file.png" width="50px" height="50px">
                        <a href="<?php echo base_url();?>index.php/cinicio/downloads/<?php echo $key->archivo?>"><?php echo $key->archivo?></a>
                    </td>
                    <td style="width:1px;"><center><?php echo $key->tamaño?> KB</center></td>
                    <td style="width:52px;"><center><?php echo $key->tipo?></center></td>
                    <td style="width:1px;"><center><?php echo $key->date?></center></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- Crear Carpetas -->
    <div class="modal fade" id="myModalshare" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel" align="center">Compartir a:</h4>
                </div>
                <form action="#" method="POST" enctype="multipart/form-data">
                    <center>
                        <table>
                            <tr>
                                <td style="padding: 10px"><label>Correo a compartir</label></td>
                                <td><input type="text" style="width: 290px; height: 35px" name="carpeta" required></td>
                            </tr>
                        </table>
                    </center>
                    <div class="modal-footer">
                       <button type="submit" class="btn btn-success">Compartir</button>&nbsp;
                       <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                  </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
<script type="text/javascript">
    function CargarArchivo() {
        alert("Archivo Subido..!!");
    }

    function CrearCarpeta() {
        alert("Carpeta Creada..!!");
    }
    // function EliminarArchivo() {
    //     alert("Archivo en papelera..!!");
    // }

    // function EliminarCarpeta() {
    //     alert("Carpeta en la papelera..!!");
    // }
</script>

            <!-- /.box-body -->
<!--/Datatables-->