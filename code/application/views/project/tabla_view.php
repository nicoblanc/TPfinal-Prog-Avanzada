<?php // include './base.php';           ?>
<?php $CI = & get_instance(); ?>


<!--<!DOCTYPE html lang="es">
<head>
    CSS
    <link rel="stylesheet" href="<?php echo base_url('plugins/bootstrap/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('plugins/Flat-UI/css/flat-ui.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/estilo.css'); ?>">

    JS
    <script  type="text/javascript" src="<?php echo base_url('plugins/jquery/jquery-2.1.1.min.js'); ?>"></script>
    <script  type="text/javascript" src="<?php echo base_url('plugins/bootstrap/js/bootstrap.js'); ?>"></script>

    <title>Proyectos de Software</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<body>
    <div class="row">
        <div class="col-lg-12">
            <nav class="navbar navbar-inverse navbar-embossed" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url('index.php/home/tabla'); ?>">Proyectos</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url('/index.php/usuario/alta_usuario'); ?>">Nuevo usuario</a></li>
                </ul>
                <div class="collapse navbar-collapse" id="navbar-collapse-01">

                    <form class="navbar-form navbar-right" action="#" role="search">
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" id="navbarInput-01" type="search" placeholder="Buscar">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn"><span class="fui-search"></span></button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </nav>
        </div>
    </div>-->

<header>
    <div class="col-lg-12  text-center">
        <h3>Proyectos</h3>
    </div>
</header>
<div class="container">
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

        var tabla = new Table();
        tabla.setViewId('tabla_home');

        var data = <?php echo(json_encode($projects)); ?>;

        tabla.setData(data);
        tabla.show();

</script>

</body>
</html>