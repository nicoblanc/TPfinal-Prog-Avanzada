
<!DOCTYPE html lang="es">
<head>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!--CSS-->
    <link rel="stylesheet" href="<?php echo base_url('plugins/bootstrap/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('plugins/Flat-UI/css/flat-ui.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('plugins/font-awesome/css/font-awesome.css'); ?>">

    <link rel="stylesheet" href="<?php echo base_url('css/estilo.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/estilo_sass.css'); ?>">

    <!--JS-->
    <script  type="text/javascript" src="<?php echo base_url('plugins/jquery/jquery-2.1.1.min.js'); ?>"></script>
    <script  type="text/javascript" src="<?php echo base_url('plugins/bootstrap/js/bootstrap.js'); ?>"></script>
    <script  type="text/javascript" src="<?php echo base_url('js/table.js'); ?>"></script>
    <!--js de inicio-->
    <script>
        var BASE_URL = "<?php echo base_url(); ?>";
    </script>


    <!--Grocery Crud-->
    <?php
    if (isset($css_files) and isset($js_files))
    {
    foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach;
    }?>

    <title>Proyectos de Software</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<body>
    <!--Navbar-->
    <div class="row">
        <div class="col-lg-12">
            <nav class="navbar navbar-inverse navbar-embossed" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url('index.php/home/tabla'); ?>"><i class="fa fa-pinterest "></i> Proyectos</a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-collapse-01">
                    <ul class="nav navbar-nav">
                        <!--Dropdown de USsuarios-->
                        <!--<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Usuarios<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url('/index.php/usuario/listar_ususario'); ?>"><i class="fa fa-list"></i>&nbsp;&nbsp; Lista de Usuarios </a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?php echo base_url('/index.php/usuario/alta_usuario'); ?>"><i class="fa fa-plus"></i>&nbsp; &nbsp; Nuevo Usuario</a></li>
                                <li role="separator" class="divider"></li>
                                <li id="item_modificar_usuario"><a href="<?php echo base_url('/index.php/usuario/modificar_usuario'); ?>"><i class="fa fa-pencil"></i>&nbsp; &nbsp; Modificar Usuario</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?php echo base_url('/index.php/usuario/baja_usuario'); ?>"><i class="fa fa-minus"></i>&nbsp; &nbsp; Eliminal Usuario</a></li>

                            </ul>
                        </li>-->
                        <!--/Dropdown-->


                        <li><a href="<?php echo base_url('/index.php/user/show_crud_view'); ?>"><i class="fa fa-plus"></i> Usuarios</a></li>

                        <li><a href="<?php echo base_url('/index.php/item/alta_item'); ?>"><i class="fa fa-plus"></i> Nuevo tipo de items</a></li>
                    </ul>

                    <!--
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
                    -->
                </div>
            </nav>
        </div>
    </div>
   <!--/Navbar-->
