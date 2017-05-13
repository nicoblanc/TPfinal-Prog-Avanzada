<?php // include './base.php';           ?>
<?php $CI = & get_instance(); ?>

<div class="container">
    <h3>Proyectos</h3>
    <div class="row">
        <div class="col-md-4">
            <button id="btn1-admin" class="btn btn-default">
                <i class="fa fa-cog "></i>&nbsp;&nbsp; Administrar
            </button>
        </div>
    </div>

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

    var data = <?php echo(json_encode($projects)); ?>;

    tabla.setData(data);
    tabla.init();
    //******************FIN Gestion de tabla*******************



    //Botones
    $('#btn1-admin').click(function() {
        var url = BASE_URL + "index.php/project/adminPeoject/"+ tabla.getSelectedRow();
        $(location).attr('href',url);
    });




});





</script>

</body>
</html>