<?php $CI = & get_instance(); ?>

<?php
    function view_list_project($ListProjects)
        {
            $ListProjects->header[] = 'Acción';

            foreach ($ListProjects->body as $key => $element)
            {
                $url = base_url("/index.php/project/adminProject").'/'. $element[0];
                $linkProjectAdmin = '<a class="btn btn-default" href="'.$url.'"><i class="fa fa-cog"></i> Administrar</a>';

                $ListProjects->body[$key][] = $linkProjectAdmin;
            }
            return json_encode($ListProjects);
        }

?>

<div class="container">
    <h3><strong>Proyectos</strong></h3>
    <div class="row">
        <div class="col-md-12 ">
            <div id="tabla_home"></div>
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

});
</script>

