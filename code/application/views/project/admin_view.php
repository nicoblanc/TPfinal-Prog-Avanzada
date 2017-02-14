<?php
/**
 * Created by PhpStorm.
 * User: Mauricio
 * Date: 13/2/2017
 * Time: 8:36 PM
 */

if (isset($msj)){ ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert  alert-danger">
                    <p>
                        <?php echo($msj); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ">
               <a href="<?php echo base_url()."index.php/project/listProjects" ?>"> « Volver </a>
             </div>
        </div>
    </div>
    <?php
}else{
?>
        <div class="container">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#data"><i class="fa fa-eye"></i>&nbsp; &nbsp; Datos</a></li>
            <li><a data-toggle="tab" href="#items"><i class="fa fa-plus"></i>&nbsp; &nbsp;Asignar Items</a></li>
            <li><a data-toggle="tab" href="#client"><i class="fa fa-plus"></i>&nbsp; &nbsp;Asignar Cliente</a></li>
        </ul>

        <div class="tab-content">
            <div id="data" class="tab-pane fade in active">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <dl class="dl-horizontal">
                                        <dt>
                                            Codigo
                                        </dt>
                                        <dd>
                                            CODIGO DE PRUEBA
                                        </dd>
                                        <dt>
                                            Nombre
                                        </dt>
                                        <dd>
                                            CODIGO DE PRUEBA
                                        </dd>
                                        <dt>
                                            Cliente
                                        </dt>
                                        <dd>
                                            CODIGO DE PRUEBA
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="items" class="tab-pane fade">
                <h3>Menu 1</h3>
                <p>Some content in menu 1.</p>
            </div>
            <div id="client" class="tab-pane fade">
                <h3>Menu 2</h3>
                <p>Some content in menu 2.</p>
            </div>

        </div>
        </div>

<?php
 }//Fin del ELSE
?>