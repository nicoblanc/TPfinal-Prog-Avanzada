<?php
?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3><strong>Historial de estados</strong></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 ">
            <div id="table_History"></div>
        </div>
    </div>

</div>
<script type="text/javascript">
    $(document).ready(function () {

        // ******************Gestion de tabla*********************
        var tabla = new Table();
        tabla.setViewId('table_History');
        var data = <?php echo(json_encode($itemHistory)); ?>;
        tabla.setData(data);
        tabla.init();
    });
</script>