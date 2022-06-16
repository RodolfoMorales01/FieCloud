<div class="row">
   	<div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-users" aria-hidden="true">&nbsp;</i>Compartidos</h1>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
        <table id="example2" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th><center>Archivo</center></th>
                    <th><center>Estado</center></th>
                    <th><center>Fecha</center></th>
                    <th><center>Acci&oacute;n</center></th>
                </tr>
            </thead>
            <tbody> 
            <?php foreach ($result as $key) { ?>
                <tr>
                    <td>
                        <img src="<?php echo base_url();?>img/file.png" width="50px" height="50px">
                        <a href="<?php echo base_url();?>index.php/cinicio/downloads/<?php echo $key->archivo?>"><?php echo $key->archivo?>
                    </td>
                    <td><center><?php echo $key->shared?></center></td>
                    <td><center><?php echo $key->date?></center></td>
                    <td>
                        <!--<center>
                            <a href="<?php echo base_url();?>index.php/ccompartir/eliminar/<?php echo $key->idarchivos?>" class="btn btn-sm btn-danger" onclick="EliminarCarpeta()">
                                <i class="fa fa-times" aria-hidden="true" title="Eliminar carpeta"></i>
                            </a>
                        </center>-->
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

</div>