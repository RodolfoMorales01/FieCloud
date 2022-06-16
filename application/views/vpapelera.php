<div class="row">
	<div class="col-lg-12">
        <center><h1 class="page-header"><i class="fa fa-trash" aria-hidden="true">&nbsp;</i>Papelera</h1></center>
    </div>
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
                            <a href="<?php echo base_url();?>index.php/cpapelera/restaurarfolder/<?php echo $folder->idfolder?>" class="btn btn-sm btn-success" title="Restaurar archivo">
                                <i class="fa fa-recycle" aria-hidden="true"></i>
                            </a>
                            <a href="<?php echo base_url();?>index.php/cpapelera/eliminardefinitivofolder/<?php echo $folder->nombre?>" class="btn btn-sm btn-danger">
                                <i class="fa fa-times" aria-hidden="true" title="Eliminar(permanente)"></i>
                            </a>
                        </center>
                    </td>
                    <td style="width:210px;">
                        <img src="<?php echo base_url();?>img/folder.png" width="50px" height="50px">&nbsp;<?php echo $folder->nombre?>
                    </td>
                    <td style="width:15px;"><center></center></td>
                    <td style="width:100px;"><center><?php echo $folder->tipo?></center></td>
                    <td style="width:126px;"><center><?php echo $folder->date?></center></td>
                </tr>         
                <?php } ?> 
                <?php foreach($result as $key){?>
                <tr>
                    <td style="width: 20px;">
                        <center>
                            <a href="<?php echo base_url();?>index.php/cpapelera/restaurarfile/<?php echo $key->idarchivos?>" class="btn btn-sm btn-success" title="Restaurar archivo">
                                <i class="fa fa-undo" aria-hidden="true"></i>
                            </a>
                            <a href="<?php echo base_url();?>index.php/cpapelera/eliminardefinitivo/<?php echo $key->archivo?>" class="btn btn-sm btn-danger">
                                <i class="fa fa-times" aria-hidden="true" title="Eliminar(permanente)"></i>
                            </a>
                        </center>
                    </td>
                    <td style="width:210px;">
                        <img src="<?php echo base_url();?>img/file.png" width="50px" height="50px">
                        <?php echo $key->archivo?>
                    </td>
                    <td style="width:15px;"><center><?php echo $key->tamaño?> KB</center></td>
                    <td style="width:100px;"><center><?php echo $key->tipo?></center></td>
                    <td style="width:126px;"><center><?php echo $key->date?></center></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>