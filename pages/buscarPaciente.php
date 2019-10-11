<!DOCTYPE html>
<html lang="en">

<head>
    <?php
         
         session_start();
         include("servidor.php");
         if(isset($_SESSION['clave'])){
            
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

    <title>Buscar paciente</title>

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
    <?php
           if(isset($_POST['buscar']))                          
        {
            $NSS= $_POST['NSS'];

            include ("servidor.php");

            /* Crear una tabla que no devuelve un conjunto de resultados */
            if ( $result2 = $conect->query("SELECT * FROM datos_generales inner join historico_dp  inner join evaluacion_bioquimica WHERE NSS = '$NSS'") ) 
            {
                //echo "Se accedió con éxtio la tabla datos_clientes <br/>");
                $row = $result2->fetch_array(MYSQLI_ASSOC);
                $result2->free();
            }

            $conect->close();
        
         }  
         ?>
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
               <div class="navbar-header">
               
                 <a class="navbar-brand" href="menu.php"><i class="fa fa-th-large">.</i>Menú principal</a>
            </div>
            </div>
            <ul class="nav navbar-top-links navbar-right">
              
               
                </li>
                <!-- /.dropdown -->
             
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['nombre']; ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                        <li class="sidebar-search">
                        <h3>Buscar paciente por NSS</h3>
                            <div class="input-group custom-search-form">
                                <form action="buscarPaciente.php" method="post">
                                <input type="text" name="NSS" class="form-control" name="buscar" placeholder="Ingresar NSS">
                               <button type="submit" name="buscar" class="btn btn-lg btn-primary">Buscar  <i class="fa fa-search fa"></i> </button>
                                 </form>   
                                
                            </div>
                            <!-- /input-group -->
                        </li>
                       
                        <li>
                           
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
         
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper"><br><br>
         <div class="table-responsive">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                       <?php if( isset($row) ) : ?>
            
            <table class="table table-hover">
            <tbody><h3>Datos personales</h3>
                <tr class="warning">
                        <td>NSS</td>
                        <td><?= $row['NSS'] ?></td> 
                </tr>
                <tr class="even">
                        <td>Nombre</td>
                        <td><?= $row['nombre'] ?></td> 
                </tr>
                <tr class="even">
                        <td>Apellido paterno</td>
                        <td><?= $row['a_paterno'] ?></td> 
                </tr>
                <tr class="even">
                        <td>Apellido materno</td>
                        <td><?= $row['a_materno'] ?></td> 
                </tr>
                <tr class="even">
                        <td>Fecha nacimiento</td>
                        <td><?= $row['fecha_nacimiento'] ?></td>
                </tr>
                <tr class="even">
                        <td>Sexo</td>
                        <td><?= $row['sexo'] ?></td> 
                </tr>
                <tr class="even">
                        <td>Escolaridad</td>
                        <td><?= $row['escolaridad'] ?></td> 
                </tr>
                <tr class="even">
                        <td>Ocupación</td>
                        <td><?= $row['ocupacion'] ?></td> 
                </tr>
                <tr class="even">
                        <td>Adultos en la familia</td>
                        <td><?= $row['adultos'] ?></td> 
                </tr>
                <tr class="even">
                        <td>Menores en la familia</td>
                        <td><?= $row['menores'] ?></td> 
                </tr>
                   <tr>
                        <td><h3>Datos fisicos</h3></td>
                         
                </tr>
                   <tr class="warning">
                        <td>Peso actual</td>
                        <td><?= $row['peso_actual'] ?></td> 
                </tr>
                <tr class="even">
                        <td>Peso habitual</td>
                        <td><?= $row['peso_habitual'] ?></td> 
                </tr>
                   <tr class="even">
                        <td>Estatura</td>
                        <td><?= $row['estatura'] ?></td> 
                </tr>
                  <tr class="even">
                        <td>Cintura</td>
                        <td><?= $row['cintura'] ?></td> 
                </tr>
                  <tr class="even">
                        <td>Cadera</td>
                        <td><?= $row['cadera'] ?></td> 
                </tr>
                  <tr class="even">
                        <td>Perimetro abdominal</td>
                        <td><?= $row['perimetro_abdominal'] ?></td> 
                </tr>
                  <tr class="even">
                        <td>Circunferencia muñeca</td>
                        <td><?= $row['circunferencia_muneca'] ?></td> 
                </tr>
                  <tr class="even">
                        <td>Fecha consluta</td>
                        <td><?= $row['fecha_consulta'] ?></td> 
                </tr>
                  
                  <tr class="even">
                        <td>Elaboro</td>
                        <td><?= $row['elaboro'] ?></td> 
                </tr>
                <tr>
                        <td><h3>Datos bioquimicos</h3></td>
                         
                </tr>
                <tr class="warning">
                        <td>Hemoglobina</td>
                        <td><?= $row['hemoglobina'] ?></td> 
                </tr>
                <tr class="even">
                        <td>Hematrocritos</td>
                        <td><?= $row['hematrocritos'] ?></td> 
                </tr>
                <tr class="even">
                        <td>Leucocitos</td>
                        <td><?= $row['leucocitos'] ?></td> 
                </tr>
                <tr class="even">
                        <td>Glucosa</td>
                        <td><?= $row['glucosa'] ?></td> 
                </tr>
                <tr class="even">
                        <td>Urea</td>
                        <td><?= $row['urea'] ?></td> 
                </tr>
                <tr class="even">
                        <td>Acido urico</td>
                        <td><?= $row['aUrico'] ?></td> 
                </tr>
                <tr class="even">
                        <td>Cratinina</td>
                        <td><?= $row['cratinina'] ?></td> 
                </tr>
                <tr class="even">
                        <td>Proteinas totales</td>
                        <td><?= $row['pTotales'] ?></td> 
                </tr>
                <tr class="even">
                        <td>Albumina</td>
                        <td><?= $row['albumina'] ?></td> 
                </tr>
                <tr class="even">
                        <td>Colesterol</td>
                        <td><?= $row['colesterol'] ?></td> 
                </tr>
                <tr class="even">
                        <td>Trigliceridos</td>
                        <td><?= $row['trigliceridos'] ?></td> 
                </tr>
                <tr class="even">
                        <td>BUN</td>
                        <td><?= $row['bun'] ?></td> 
                </tr>



                </tbody>        
            </table>
            <!--/form-->    

        <?php elseif(!empty($NSS)) : ?>

             <h2>El paciente no existe en la base de datos</h2>

        <?php endif; ?>
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
