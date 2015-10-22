<article>
    <div class="row titulo-seccion">
        <div class="col-md-12 text-center">
            <header>
                <h3>Nuevo Item</h3>
            </header>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <p>validacion de formularios(corregir)</p>
            <form action="<?php echo base_url('/index.php/usuario/guardar_usuario'); ?>" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="usuario">Item</label>
                            <input id="item" type="text" name="item" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input id="password" type="password" name="password" class="form-control"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input id="nombre" type="text" name="nombre" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input  id="apellido" type="text" name="apellido" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="telefono">Email</label>
                            <input id="telefono" type="email" name="email" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Teléfono</label>
                            <input id="email" type="tel" name="telefono" class="form-control"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="btn-form">
                            <a type="submit"  href="<?php echo base_url('index.php/home/tabla'); ?>" class="btn btn-success form-group "><i class="fa fa-check"></i> Aceptar</a>
                            <a id="canselar" href="<?php echo base_url('index.php/home/tabla'); ?>" class="btn btn-danger  form-group "><i class="fa fa-close"></i> Cancelar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</article>
<script>
    $('#canselar').click(function(event){
//        event.preventDefault();
    });

</script>


