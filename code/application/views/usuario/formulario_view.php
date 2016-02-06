<?php

$titulo = '';

switch ($accion)
{
    case 'alta': $titulo = 'Nuevo Usuario';
        break;
    case 'baja': $titulo = 'Eliminar Usuario';
        break;
    case 'modificar' : $titulo = 'Modificar Usuario';
        break;
}
?>

<article>
    <div class="row titulo-seccion">
        <div class="col-md-12 text-center">
            <header>
                <h3><?php echo $titulo ?></h3>
            </header>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <p></p>
            <form action="<?php echo base_url('/index.php/usuario/guardar_usuario'); ?>" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="usuario">Usuario</label>
                            <input id="usuario" type="text" name="usuario" class="form-control" value="<?php echo (isset($usuario) ? $usuario->username : '') ?>"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input id="password" type="password" name="password" class="form-control" value="<?php echo (isset($usuario) ? $usuario->password : '') ?>"  <?php echo (isset($usuario) ? 'disabled' : '') ?>/>
                            <input id="change_password" type="checkbox" name="change_password" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input id="nombre" type="text" name="nombre" class="form-control" value="<?php echo (isset($usuario) ? $usuario->name : '') ?>"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input  id="apellido" type="text" name="apellido" class="form-control" value="<?php echo (isset($usuario) ? $usuario->surname : '') ?>"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="telefono">Email</label>
                            <input id="telefono" type="email" name="email" class="form-control" value="<?php echo (isset($usuario) ? $usuario->email : '') ?>"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Teléfono</label>
                            <input id="email" type="tel" name="telefono" class="form-control" value="<?php echo (isset($usuario) ? $usuario->phone : '') ?>"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="btn-form">
                            <button type="submit"  class="btn btn-success form-group "><i class="fa fa-check"></i> Aceptar</button>
                            <a id="canselar" href="<?php echo base_url('index.php/home/tabla'); ?>" class="btn btn-danger  form-group "><i class="fa fa-close"></i> Cancelar</a>
                        </div>
                    </div>
                </div>
                <!-- Input Hidden -->
                <input name="action" value="<?php echo($accion) ?>" hidden>
                <input name="ID" value="<?php echo (isset($usuario) ? $usuario->ID : '') ?>" hidden>
                <!-- /Input Hidden -->
            </form>
        </div>
    </div>
</article>
<script>
    $('#canselar').click(function(event)
        {
//          event.preventDefault();
        });

    $('#change_password').on('change', function()
        {
            if ($('#change_password').prop('checked'))
                $('#password').val('').prop('disabled', false);
        });

</script>