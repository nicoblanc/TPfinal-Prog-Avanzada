<?php

//Crea lista de items asignados al proyecto
function view_list_items_assigned($pListItem)
{
    $itemsToTable = array();
    foreach ($pListItem->body as $item)
        {
            $itemAvailable = '<input type="checkbox" name="'.$item[0].'"/>';
            $itemCode = $item[0];
            $itemDescription = $item[1];

            if($item[2] != null)
              {
                  $itemState = $item[2];
              }
            else
              {
                  $itemState = "Sin Estado";
              }

            $url = base_url("/index.php/item/adminItem").'/'. $item[0];
            $urlHistory = base_url("/index.php/item/historyByItem").'/'. $item[0];
            $linkItemAdmin = '
                <a class="btn btn-default" href="'.$url.'"><i class="fa fa-cog"></i> Administrar</a> 
                <a class="btn btn-default" href="'.$urlHistory.'"><i class="fa fa-clock-o"></i> Historial</a>
            ';

            //Agrega elentos al array final
            array_push($itemsToTable,array($itemAvailable,$itemCode, $itemDescription,$itemState ,$linkItemAdmin));
        }
    return json_encode($itemsToTable);
}

//Crea lista de items diponibles
function view_list_items_unassigned($pListItem)
{
    $itemsToTable = array();

    foreach ($pListItem->body as $item)
    {
        $itemAvailable = '<input type="checkbox" name="'.$item[0].'"/>';
        $itemCode = $item[0];
        $itemDescription = $item[1];

        //Agrega elentos al array final
        array_push($itemsToTable,array($itemAvailable,$itemCode, $itemDescription));
    }
    return json_encode($itemsToTable);
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
            <li><a data-toggle="tab" href="#data"><i class="fa fa-eye"></i>&nbsp; &nbsp; Datos</a></li>
            <li class="active"><a data-toggle="tab" href="#adminItem"><i class="fa fa-list"></i>&nbspItems</a></li>
            <li><a data-toggle="tab" href="#items"><i class="fa fa-plus"></i>&nbsp; &nbsp;Asignar Items</a></li>
            <!--<li><a data-toggle="tab" href="#client"><i class="fa fa-plus"></i>&nbsp; &nbsp;Asignar Cliente</a></li>-->
        </ul>
        <div class="tab-content">
            <div id="data" class="tab-pane fade">
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
                                            <?php echo $project_code;?>
                                        </dd>
                                        <dt>
                                            Descripción:
                                        </dt>
                                        <dd>
                                            <?php echo $project_Name;?>
                                        </dd>
                                        <!--
                                        <dt>
                                            Cliente:
                                        </dt>
                                        <dd>
                                            <?php echo $project_client;?>
                                        </dd>
                                        -->
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Items del proyecto-->
            <div id="adminItem" class="tab-pane fade in active">
                <div class="row">
                    <div class="col-md-3">
                        <h3>Items Asignados</h3>
                    </div>
                </div>
                <div class="row">
                    <form method="POST" action="<?php echo(base_url('/index.php/project/addItems'));?>">
                        <div id="table_Select_Items_assigned"></div>
                    </form>
                </div>
            </div>
            <!--/Items de proyecto-->

            <!--Items sin asignar-->
            <div id="items" class="tab-pane fade">
                <div class="row">
                    <div class="col-md-3">
                        <p><h3>Items Disponibles</h3></p>
                    </div>
                </div>
                <div class="row">
                    <form method="POST" action="<?php echo(base_url('/index.php/project/addItems'));?>">
                        <input class="btn btn-default" type="submit" value="Asignar" />
                        <div id="table_Select_Items_unassigned"></div>
                        <input type="hidden" name="projectcode" value="<?php echo($project_code);?>">
                    </form>
                </div>
            </div>
            <!--/Items sin asignar-->


            <!--
            <div id="client" class="tab-pane fade">
                <p>clientes disponibles</p>
            </div>
            -->
        </div>
        </div>

    <!-- JS Codigo LOCAL de la vista -->
    <script>
        $(document).ready(function () {

            // ******************Gestion de tabla listado de items*********************
            var tableItems= new Table();
            tableItems.setViewId('table_Select_Items_unassigned');
            tableItems.setIndexPositionColumn(1);

            var data = {
                header: ['<input id="selectAllItems" type="checkbox">','Codigo','Descripcion'],
                body: <?php echo view_list_items_unassigned($list_items_unassigned);?>
            };

            tableItems.setData(data);
            tableItems.init();

            //chequear o deschequear todos los elemtos
            $('#selectAllItems').click(function(){
                if( $('#selectAllItems').is(':checked') )
                {
                    $('#table_Select_Items_unassigned td>input').prop("checked", "checked");

                }else
                    {
                        $('#table_Select_Items_unassigned td>input').prop("checked", "");
                    }
            });
            //******************FIN Gestion de tabla listado de items*******************



            //****************************Botones**************************************
            $('#btn1-admin').click(function() {
                var url = BASE_URL + "index.php/project/adminProject/"+ tabla.getSelectedRow();
                $(location).attr('href',url);
            });

            //****************************FIN Botones**************************************

//###########################################################################################################

            // ******************Gestion de tabla listado de items asignados *********************
            var tableItems= new Table();
            tableItems.setViewId('table_Select_Items_assigned');
            tableItems.setIndexPositionColumn(1);

            var data = {
                header: ['<input id="selectAllItemsAssigned" type="checkbox">','Codigo','Descripcion', 'Estado', 'Acción'],
                body: <?php echo view_list_items_assigned($list_items_assigned);?>
            };

            tableItems.setData(data);
            tableItems.init();

            //chequear o deschequear todos los elemtos
            $('#selectAllItemsAssigned').click(function(){
                if( $('#selectAllItemsAssigned').is(':checked') )
                {
                    $('#table_Select_Items_assigned td>input').prop("checked", "checked");

                }else
                {
                    $('#table_Select_Items_assigned td>input').prop("checked", "");
                }
            });
            //******************FIN Gestion de tabla listado de items*******************
        });
    </script>
    <!-- /JS Codigo LOCAL de la vista -->
<?php
 }//Fin del ELSE
?>