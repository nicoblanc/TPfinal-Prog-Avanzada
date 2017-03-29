

<?php
function view_list_items($pListItem)
{

    /*
     * object(stdClass)#23 (2) { ["header"]=> array(3) {
     *          [0]=> string(15) "Código de Item"
     *          [1]=> string(4) "Item"
     *          [2]=> string(8) "Proyecto"
     * }
     *  ["body"]=> array(1) {
     *              [0]=> array(4) {
     *                  [0]=> string(7) "Reporte"
     *                  [1]=> string(1) "0"
     *                  [2]=> string(1) "0"
     *                  [3]=> string(1) "0"
     *                 }
     *  } }
     *
     *
     * */


    $html = "";


    foreach ($pListItem->body as $item)
    {
        $html .= '<input type="checkbox" name="'.$item[0].'">'.$item[0].'<br>';

    }

    return $html;

}
?>

<?php if (isset($msj)){ ?>

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
                                            <?php echo $project_code?>
                                        </dd>
                                        <dt>
                                            Nombre
                                        </dt>
                                        <dd>
                                            <?php echo $project_Name?>
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
                <p>Items Disponibles</p>
                <form method="POST" action="<?php echo(base_url('/index.php/project/addItems'));?>">
                    <?php echo view_list_items($list_items)?>
                    <input type="submit" value="Asignar">
                    <input type="hidden" name="projectcode" value="<?php echo($project_code);?>">
                </form>
            </div>
            <div id="client" class="tab-pane fade">
                <p>clientes disponibles</p>
            </div>

        </div>
        </div>

<?php
 }//Fin del ELSE
?>