
<!DOCTYPE html lang="es">
<head>
    <!--CSS-->
    <link rel="stylesheet" href="<?php echo base_url('plugins/bootstrap/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('plugins/Flat-UI/css/flat-ui.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('plugins/font-awesome/css/font-awesome.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/estilo.css'); ?>">


    <!--JS-->
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
                    <a class="navbar-brand" href="<?php echo base_url('index.php/home/tabla'); ?>"><i class="fa fa-pinterest "></i> Proyectos</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url('/index.php/usuario/alta_usuario'); ?>"> <i class="fa fa-user"></i> Nuevo usuario</a></li>
                    <li><a href="<?php echo base_url('/index.php/item/alta_item'); ?>"><i class="fa fa-plus"></i> Nuevo tipo de items</a></li>
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
    </div>

