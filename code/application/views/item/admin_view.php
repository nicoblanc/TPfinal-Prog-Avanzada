<?php

?>

<div class="container">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#data"><i class="fa fa-eye"></i>&nbspDatos</a></li>
        <li><a data-toggle="tab" href="#itemStatus"><i class="fa fa-star"></i>&nbsp Asignar Estado</a></li>
        <!--
        <li><a data-toggle="tab" href="#items"><i class="fa fa-plus"></i>&nbsp; &nbsp;Asignar Items</a></li>
        <li><a data-toggle="tab" href="#client"><i class="fa fa-plus"></i>&nbsp; &nbsp;Asignar Cliente</a></li>
        -->
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
                                        Codigo:
                                    </dt>
                                    <dd>
                                        <?php echo $itemCode;?>
                                    </dd>
                                    <dt>
                                        Descripción:
                                    </dt>
                                    <dd>
                                        [AGREDAR DESCRIPCION DESDE MODELO ITEMS]                                   ]
                                        <?php //echo $project_Name;?>
                                    </dd>
                                    <dt>
                                        Tipo:
                                    </dt>
                                    <dd>
                                        <?php //echo $project_client;?>
                                    </dd>

                                    <dt>
                                        Estado:
                                    </dt>
                                    <dd>
                                        <?php echo $itemStateDescription;?>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="itemStatus" class="tab-pane fade">
            <div><h3>Estado Actual: <strong><?php echo $itemStateDescription;?></strong></h3></div>
                <form method="POST" action="<?php echo(base_url('/index.php/item/changeState').'/'.$itemCode);?> ">
                    <div class="form-group">
                        <div class="row">
                        <div class="col-md-6">
                            <label>Asignar estado: </label>
                            <select name="itemState" class="form-control">
                                <?php foreach ($stateList as $data){?>
                                    <option <?php echo ($itemSteteCode == $data->itemstatecode) ? 'selected':''; ?> value="<?php echo $data->itemstatecode; ?>"><?php echo $data->description; ?></option>
                                <?php }?>
                                <!--
                                <option value="0">Sin Estado</option>
                                <option value="1">Análisis </option>
                                <option value="2">Desarrollo</option>
                                <option value="3">Testing</option>
                                <option value="4">Implementación</option>
                                -->
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Asignar a: </label>
                            <select name="userAssign" class="form-control">
                                <option value="0">[AGREGAR USUARIO]</option>
                                <option value="1">[AGREGAR USUARIO] </option>
                                <option value="2">[AGREGAR USUARIO]</option>
                            </select>
                        </div>
                        </div>
                        <div class="row"></div></br>
                        <div class="row">
                        <div class="col-md-2">
                            <input type="submit" value="Aplicar" class=" btn btn-success form-control">
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
        <!--
        <div id="items" class="tab-pane fade">
            <p>Items Disponibles</p>
            <form method="POST" action="<?php echo(base_url('/index.php/project/addItems'));?>">
                <input class="btn btn-default" type="submit" value="Asignar" />
                <div id="table_Select_Items_unassigned"></div>
                <input type="hidden" name="projectcode" value="<?php echo($project_code);?>">
            </form>
        </div>
        <div id="client" class="tab-pane fade">
            <p>clientes disponibles</p>
        </div>
        -->
</div>