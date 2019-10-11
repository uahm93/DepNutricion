

<!DOCTYPE html>
<html lang="en">

<head>
 <?php
         
         session_start();
         include("servidor.php");
         if(isset($_SESSION['admin'])){
            
         }else{
            echo "<script>window.location='index.php';</script>"; 
         }
    ?>
    <link rel="icon" type="image/png" href="../imagenes/favicon.ico" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrador de cuentas</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">IMSS</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
              
              
                <li class="dropdown">
                  
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <?php echo $_SESSION['nombre']; ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                      
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pencil fa-fw"></i> Ingresar nuevo </a>
                        </li>
                        <li>
                       
                            <a href="buscardoc.php"><i class="fa fa-search fa-fw"></i> Buscar </a>
                        </li>
                        <li>
                            <a href="eliminardoc.php"><i class="fa fa-bitbucket-square  fa-fw"></i> Eliminar</a>
                        </li>
                 
                        <li>
                      
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-6">
                <a name="datospersonales"></a>
              <div class="table-responsive">
  
         <table  class="table table-hover">
                 <CAPTION><h3>Datos del doctor</h3></CAPTION>
                <tbody>
                <form method="POST" action="qDoctores.php">
                <tr >
                    <td>
                        <label >Nombre : </label>
                    </td>
                    <td>
                        <input type='text' class="form-control" value="" name="nombre" placeholder="Escribe el nombre.." size="3" autofocus="autofocus" required />
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label >Apellido Paterno:</label>
                    </td>
                    <td>
                        <input type='text' class="form-control" name="a_paterno" placeholder="Apellido Paterno" size="30"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Apellido Materno</label>
                    </td>
                    <td>
                        <input type='text' id='a_materno' name="a_materno" class="form-control" placeholder="Apellido Materno" size="30"/>
                    </td>
                </tr >
                <tr>
                    <td>
                        <label>Clave:</label>
                    </td>
                    <td>
                        <input type='text' id='NSS' name ="clave"placeholder="Ingrese clave" class="form-control" maxlength="11" size="10" required />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Contraseña:</label>
                    </td>
                    <td>
                        <input type='password' id='pw' name ="pw1" placeholder="Ingresar contraseña" class="form-control" maxlength="11" size="10" required />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Repita contraseña:</label>
                    </td>
                    <td>
                        <input type='password' id='pw' name ="pw" placeholder="Ingresar contraseña" class="form-control" maxlength="11" size="10" required />
                    </td>
                </tr>

             <tr><td></td><td><button type="submit" class="btn btn-lg btn-primary">Guardar registro</button></td></tr>
         </form>
           </tbody>             
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
