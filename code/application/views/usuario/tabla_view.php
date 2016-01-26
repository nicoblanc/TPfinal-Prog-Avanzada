<header>
    <div class="col-lg-12  text-center">
        <h3>Lista de usuarios</h3>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div id="tabla_usuarios"></div>
        </div>
    </div>
</div>
<script type="text/javascript">

    var tablaUsuarios = new Table();
    tablaUsuarios.setViewId('tabla_usuarios');
    var data = "";
    $.ajax({
        url: BASE_URL + "index.php/usuario/ajax_users_to_table_view",
        dataType: 'json',
        method: 'POST',
    }).done(function(pData){
        data = pData;
        tablaUsuarios.setData(data);
        tablaUsuarios.init();
    });


//Modificar usuario.
    $('#item_modificar_usuario').on('click', function(event){
        event.preventDefault();
        if (tablaUsuarios.getSelectedRow() != '') {
            location.href = '<?php echo base_url('/index.php/usuario/modificar_usuario'); ?>' + '/' + tablaUsuarios.getSelectedRow();
        } else {
            alert('Seleccione un elemento de la tabla');
        }
    });

</script>

</body>
</html>

