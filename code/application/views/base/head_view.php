<?php $CI = & get_instance(); ?>

<!DOCTYPE html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS-->
    <link rel="stylesheet" href="<?php echo base_url('plugins/bootstrap/css/bootstrap.css'); ?>">
    <!--<link rel="stylesheet" href="<?php echo base_url('plugins/Flat-UI/css/flat-ui.css'); ?>">-->
    <link rel="stylesheet" href="<?php echo base_url('plugins/font-awesome/css/font-awesome.css'); ?>">

    <link rel="stylesheet" href="<?php echo base_url('css/estilo.css'); ?>">
    <!--<link rel="stylesheet" href="<?php echo base_url('css/estilo_sass.css'); ?>">-->

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

    <!-- Corrector -->
    <!--<link rel="stylesheet" href="<?php echo base_url('css/corrector/grocery_crud_corrector.css'  ); ?>">
    -->

    <title>Proyectos de Software</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <!--Navbar-->
    <div class="row">
        <div class="col-lg-12">
            <nav class="navbar navbar-inverse navbar-embossed" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url('index.php/home/tabla'); ?>"><i class="fa fa-cogs"></i> SGP</a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-collapse-01">
                    <ul class="nav navbar-nav">
                        <?php
                        if (isset($CI->session->all_userdata()['usercode']))
                           { ?>
                             <li><a href="<?php echo base_url('/index.php/project/listProjects'); ?>"><i class="fa fa-list"></i>&nbsp; &nbsp;Gestion de Proyectos</a></li>
                             <li><a href="<?php echo base_url('/index.php/user/show_crud_view'); ?>"><i class="fa fa-plus"></i>&nbsp; &nbsp; Usuarios</a></li>
                             <li><a href="<?php echo base_url('/index.php/client/show_crud_view'); ?>"><i class="fa fa-plus"></i>&nbsp; &nbsp; Cliente</a></li>
                             <li><a href="<?php echo base_url('/index.php/project/show_crud_view'); ?>"><i class="fa fa-plus"></i>&nbsp; &nbsp;CRUD Proyectos</a></li>
                             <li><a href="<?php echo base_url('/index.php/item/show_crud_view'); ?>"><i class="fa fa-plus"></i>&nbsp; &nbsp;CRUD Items</a></li>
                             <li><a href="<?php echo base_url('/index.php/item_type/show_crud_view'); ?>"><i class="fa fa-plus"></i>&nbsp; &nbsp;CRUD Tipos de Items </a></li>
                      <?php }; ?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        if (isset($CI->session->all_userdata()['usercode']))
                            { ?>
                                <li style="color: #9d9d9d; margin-right: 26px; margin-top: 10px;">
                                    <div class="btn-group-sm">
                                        <a class="btn btn-default navbar-right" href="<?php echo base_url('/index.php/verificar/CloseSession'); ?>"><i class="fa fa-user">
                                            </i> <?php echo($CI->session->all_userdata()['usercode']);  ?> SALIR >>
                                        </a>
                                    </div>
                                </li>
                     <?php  };?>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
   <!--/Navbar-->
