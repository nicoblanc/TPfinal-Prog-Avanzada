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

    var data = {
        header: ['id', 'Usuario', 'Tipo'],
        body: [
            ['1', 'Mauricio', 'Administrador'],
            ['2', 'Nicolas', 'Administrador']
        ]
    };

    tablaUsuarios.setData(data);
    tablaUsuarios.show();

</script>

</body>
</html>

