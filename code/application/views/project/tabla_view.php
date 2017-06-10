<?php $CI = & get_instance(); ?>

<?php
    function view_list_project($ListProjects)
        {
            $ListProjects->header[] = 'Acción';

            foreach ($ListProjects->body as $key => $element)
            {
                //var_dump($key);die;

                //$elementAvailable = '<input type="checkbox" name="'.$element[0].'"/>';
               // $elementCode = $element[0];
                //$elementDescription = $element[1];


                $url = base_url("/index.php/project/adminProject").'/'. $element[0];
                $linkProjectAdmin = '<a class="btn btn-default" href="'.$url.'"><i class="fa fa-cog"></i> Administrar</a>';

                $ListProjects->body[$key][] = $linkProjectAdmin;

            }
            return json_encode($ListProjects);
        }

//var_dump(view_list_project($projects));die;



?>

<div class="container">
    <h3><strong>Proyectos</strong></h3>
    <!--
    <div></div><br>

    <div class="row">
        <div class="col-md-4">
            <button id="btn1-admin" class="btn btn-default">
                <i class="fa fa-cog "></i>&nbsp;&nbsp; Administrar
            </button>
        </div>
    </div>
-->
    <div class="row">
        <div class="col-md-12 ">
            <div id="tabla_home"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 ">
           <a href="<?php echo base_url()."index.php/home/tabla" ?>"> « Volver </a>
         </div>
    </div>
</div>

</div>

<script type="text/javascript">
$(document).ready(function () {

    // ******************Gestion de tabla*********************
    var tabla = new Table();
    tabla.setViewId('tabla_home');

    var data = <?php echo(view_list_project($projects)); ?>;

    tabla.setData(data);
    tabla.init();



    //Botones
//    $('#btn1-admin').click(function() {
//        alert("NO VA MAS");
//        var url = BASE_URL + "index.php/project/adminProject/"+ tabla.getSelectedRow();
//        $(location).attr('href',url);
//    });

});
</script>

<!--</body>
</html>-->