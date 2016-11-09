<!DOCTYPE html lang="es">
<head>
    <!--CSS-->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="plugins/Flat-UI/css/flat-ui.css">
    <link rel="stylesheet" href="css/estilo.css" >

    <!--JS-->
    <script  type="text/javascript" src="plugins/jquery/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap/js/bootstrap.js"></script>

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
                    <a class="navbar-brand" href="#">Proyectos</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse-01">
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="#fakelink">Menu Item<span class="navbar-unread">1</span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Messages <b class="caret"></b></a>
                            <span class="dropdown-arrow"></span>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                        <li><a href="#fakelink">About Us</a></li>
                    </ul>
                    <form class="navbar-form navbar-right" action="#" role="search">
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" id="navbarInput-01" type="search" placeholder="Search">
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

    <header>
        <div class="col-lg-12  text-center">
            <h3>Gestion de proyectos de Software</h3>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div id="tabla_item"></div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        
        var tabla = new Table();
        tabla.setViewId('tabla_item');

        var data = {
                    header: ['id', 'Proyecto', 'Etapa'],
                    body: [
                            ['1', 'Facturacion', 'Analisis'],
                            ['2', 'gestion de serie', 'Desarrollo']
                          ]
                    };

        tabla.setData(data);
        tabla.show();

    </script>
</body>
</html>