<!DOCTYPE html>
<html lang="es">

<head>

<link rel="icon" type="image/png" href="../imagenes/favicon.ico" />

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ingreso de datos</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
       <script type="text/javascript" src="jquery-2.2.0.min.js"></script>
    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <title>IMSS-NUTRICION</title>

    <script src="js/funcionesjs.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Consultas</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">

                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Usuario <b class="caret"></b></a>
                    <ul class="dropdown-menu">

                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
             <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li >
                        <a href="paciente.php"><i class="fa fa-fw fa-edit"></i> Datos personales</a>
                    </li>
                    <li >
                        <a href="paciente.php"><i class="fa fa-fw fa-table"></i> A.H.F</a>
                    </li>
                    <li class="active">
                        <a href="#"><i class="fa fa-fw fa-table"></i>Paraclinicos</a>
                    </li>
                    <li>
                        <a href="javascript:; " data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-bar-chart-o"></i> Recordatorio 24 horas<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#desayuno">Desayuno</a>
                            </li>
                            <li>
                                <a href="#comida">Comida</a>
                            </li>
                            <li>
                                <a href="#cena">Cena</a>
                            </li>
                            <li>
                                <a href="#total24horas">total 24 horas</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">



              <div class="row">
                  <div class="col-lg-8">
                      <h1 class="page-header">
                        <a name="desayuno"></a>
                          RECORDATORIO 24 HORAS
                      </h1>
                  </div>
                  <div class="col-lg-4">
                      <div class="form-group">
                        <label class="col-md-2 control-label" for="fecha">fecha: </label>
                          <div class="col-md-7">
                            <input id="fecha" name="fecha" type="date" values="" class="form-control input-sm" ><!--<?php echo date("y-m-d");?>-->
                        </div>
                      </div>
                  </div>

                </div>
                        <!-- /.row -->

                <!-- Page Heading -->


            <div class="row">
              <div class="col-lg-12">

                <div class="col-lg-7">




                        <h2 >DESAYUNO</h2>
                        <div class="table-responsive">
                          <form action="POST" name="recordatorio" id="recordatorio">
                            <table class="table table-hover table-striped" id="recordatorio">
                                <thead>
                                    <tr>
                                        <th>ALIMENTO</th>
                                        <th>RACIÓN</th>
                                        <th>H.C</th>
                                        <th>PROTEINAS</th>
                                        <th>LIPIDOS</th>
                                        <th>KILOCALO.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Leche</td>
                                        <td>
                                            <input type="number" id="rac_leche" name="rac_leche"   min="0"  class="form-control input-md " onclick="funcionHC_LECHE(), funcionPROTE_LECHE(), funcionLIPI_LECHE(), funcionKC_LECHE(), funcionTOTAL_HC(), funcionTOTAL_PROTEINAS(),funcionTOTAL_LIPIDOS(),funcionTOTAL_KC()"/>
                                        </td>
                                        <td><input id='hc_rac_leche' type="number" name="hc_rac_leche"  class="form-control input-md " readonly="redonly"/></td>
                                        <td><input id='prote_rac_leche' type="number" name="prote_rac_leche"  class="form-control input-md " readonly="redonly"/></td>
                                        <td><input id='lipi_rac_leche' type="number" name="lipi_rac_leche"  class="form-control input-md " readonly="redonly"/></td>
                                        <td><input id='kc_rac_leche' type="number" name="kc_rac_leche"  class="form-control input-md " readonly="redonly"/></td>

                                    </tr>
                                    <tr>
                                        <td>Carne</td>
                                        <td><input type="number" id="rac_carne" name="rac_carne" min="0" class="form-control input-md " onclick="funcionHC_CARNE(), funcionPROTE_CARNE(), funcionLIPI_CARNE(), funcionKC_CARNE(), funcionTOTAL_HC(), funcionTOTAL_PROTEINAS(),funcionTOTAL_LIPIDOS(),funcionTOTAL_KC()"></td>
                                        <td><input id='hc_rac_carne' type="number" name="hc_rac_carne"  class="form-control input-md " readonly="redonly"/></td>
                                        <td><input id='prote_rac_carne' type="number" name="prote_rac_carne"  class="form-control input-md " readonly="redonly"/></td>
                                        <td><input id='lipi_rac_carne' type="number" name="lipi_rac_carne"  class="form-control input-md " readonly="redonly"/></td>
                                        <td><input id='kc_rac_carne' type="number" name="kc_rac_carne"  class="form-control input-md " readonly="redonly"/></td>
                                    </tr>
                                    <tr>
                                        <td>Fruta</td>
                                        <td><input type="number" id="rac_fruta" name="rac_fruta" min="0" class="form-control input-md " onchange="funcionHC_FRUTA(), funcionPROTE_FRUTA(), funcionLIPI_FRUTA(), funcionKC_FRUTA(), funcionTOTAL_HC(), funcionTOTAL_PROTEINAS(),funcionTOTAL_LIPIDOS(),funcionTOTAL_KC()"></td>
                                        <td><input id='hc_rac_fruta' type="number" name="hc_rac_fruta"  class="form-control input-md " readonly="redonly"/></td>
                                        <td><input id='prote_rac_fruta' type="number" name="prote_rac_fruta"  class="form-control input-md " readonly="redonly"/></td>
                                        <td><input id='lipi_rac_fruta' type="number" name="lipi_rac_fruta"  class="form-control input-md " readonly="redonly"/></td>
                                        <td><input id='kc_rac_fruta' type="number" name="kc_rac_fruta"  class="form-control input-md " readonly="redonly"/></td>
                                    </tr>
                                    <tr>
                                        <td>Vegetales</td>
                                        <td><input type="number" id="rac_vegetales" name="rac_vegetales" min="0" class="form-control input-md " onchange="funcionHC_VEGETALES(), funcionPROTE_VEGETALES(), funcionLIPI_VEGETALES(), funcionKC_VEGETALES(), funcionTOTAL_HC(),funcionTOTAL_PROTEINAS(),funcionTOTAL_LIPIDOS() ,funcionTOTAL_KC()"></td>
                                        <td><input id='hc_rac_vegetales' type="number" name="hc_rac_vegetales"  class="form-control input-md " readonly="redonly"/></td>
                                        <td><input id='prote_rac_vegetales' type="number" name="prote_rac_vegetales"  class="form-control input-md " readonly="redonly"/></td>
                                        <td><input id='lipi_rac_vegetales' type="number" name="lipi_rac_vegetales"  class="form-control input-md " readonly="redonly"/></td>
                                        <td><input id='kc_rac_vegetales' type="number" name="kc_rac_vegetales"  class="form-control input-md " readonly="redonly"/></td>

                                    </tr>
                                    <tr>
                                        <td>Cereales y tuberculos</td>
                                        <td><input type="number" id="rac_cyt" name="rac_cyt" min="0" class="form-control input-md " onchange="funcionHC_CYT(), funcionPROTE_CYT(), funcionLIPI_CYT(), funcionKC_CYT(), funcionTOTAL_HC(), funcionTOTAL_PROTEINAS(),funcionTOTAL_LIPIDOS(),funcionTOTAL_KC()">
                                        <td><input id='hc_rac_cyt' type="number" name="hc_rac_cyt"  class="form-control input-md " readonly="redonly"/></td>
                                        <td><input id='prote_rac_cyt' type="number" name="prote_rac_cyt"  class="form-control input-md " readonly="redonly"/></td>
                                        <td><input id='lipi_rac_cyt' type="number" name="lipi_rac_cyt"  class="form-control input-md " readonly="redonly"/></td>
                                        <td><input id='kc_rac_cyt' type="number" name="kc_rac_cyt"  class="form-control input-md " readonly="redonly"/></td>

                                    </tr>
                                    <tr>
                                        <td>Leguminosas</td>
                                        <td><input type="number" id="rac_leguminosas" name="rac_leguminosas" min="0" class="form-control input-md " onchange="funcionHC_LEGUMINOSAS(), funcionPROTE_LEGUMINOSAS(), funcionLIPI_LEGUMINOSAS(), funcionKC_LEGUMINOSAS(), funcionTOTAL_HC(), funcionTOTAL_PROTEINAS(),funcionTOTAL_LIPIDOS(),funcionTOTAL_KC()"></td>
                                        <td><input id='hc_rac_leguminosas' type="number" name="hc_rac_leguminosas"  class="form-control input-md " readonly="redonly"/></td>
                                        <td><input id='prote_rac_leguminosas' type="number" name="prote_rac_leguminosas"  class="form-control input-md " readonly="redonly"/></td>
                                        <td><input id='lipi_rac_leguminosas' type="number" name="lipi_rac_leguminosas"  class="form-control input-md " readonly="redonly"/></td>
                                        <td><input id='kc_rac_leguminosas' type="number" name="kc_rac_leguminosas"  class="form-control input-md " readonly="redonly"/></td>
                                    </tr>
                                    <tr>
                                        <td>Grasas</td>
                                        <td><input type="number" id="rac_grasas" name="rac_grasas" min="0" class="form-control input-md " onchange="funcionHC_GRASAS(), funcionPROTE_GRASAS(), funcionLIPI_GRASAS(), funcionKC_GRASAS(), funcionTOTAL_HC(), funcionTOTAL_PROTEINAS(),funcionTOTAL_LIPIDOS(),funcionTOTAL_KC()"></td>
                                        <td><input id='hc_rac_grasas' type="number" name="hc_rac_grasas"  class="form-control input-md " readonly="redonly"/></td>
                                        <td><input id='prote_rac_grasas' type="number" name="prote_rac_grasas"  class="form-control input-md " readonly="redonly"/></td>
                                        <td><input id='lipi_rac_grasas' type="number" name="lipi_rac_grasas"  class="form-control input-md " readonly="redonly"/></td>
                                        <td><input id='kc_rac_grasas' type="number" name="kc_rac_grasas"  class="form-control input-md " readonly="redonly"/></td>
                                    </tr>
                                    <tr>
                                        <td>Azucares</td>
                                        <td><input type="number" id="rac_azucares" name="rac_azucares" min="0" class="form-control input-md " onchange="funcionHC_AZUCARES(), funcionPROTE_AZUCARES(), funcionLIPI_AZUCARES(), funcionKC_AZUCARES(), funcionTOTAL_HC(), funcionTOTAL_PROTEINAS(),funcionTOTAL_LIPIDOS(),funcionTOTAL_KC()"></td>
                                        <td><input id='hc_rac_azucares' type="number" name="hc_rac_azucares"  class="form-control input-md " readonly="redonly"/></td>
                                        <td><input id='prote_rac_azucares' type="number" name="prote_rac_azucares"  class="form-control input-md " readonly="redonly"/></td>
                                        <td><input id='lipi_rac_azucares' type="number" name="lipi_rac_azucares"  class="form-control input-md " readonly="redonly"/></td>
                                        <td><input id='kc_rac_azucares' type="number" name="kc_rac_azucares"  class="form-control input-md " readonly="redonly"/></td>

                                    </tr>
                                    <tr>
                                      <td><h3>TOTAL</h2></td>
                                      <td></td>
                                      <td><input id='total_hc' type="number" name="total_hc"  class="form-control input-md " readonly="redonly"/></td>
                                      <td><input id='total_prote' type="number" name="total_prote"  class="form-control input-md " readonly="redonly"/></td>
                                      <td><input id='total_lipi' type="number" name="total_LIPI"  class="form-control input-md " readonly="redonly"/></td>
                                      <td><input id='total_kc' type="number" name="total_kc"  class="form-control input-md " readonly="redonly"/></td>
                                    </tr>
                                </tbody>
                            </table>
                          </form>
                        </div>
                    </div>

                    <div class="col-lg-5">
                      <br><br><br>
                      <div class="table-responsive">
                        <form action="POST" name="recordatorio" id="recordatorio">
                          <table class="table table-hover table-striped" id="recordatorio">
                              <thead>
                                  <tr>
                                      <th></th>
                                      <th>&nbsp &nbsp &nbsp &nbsp %</th>
                                      <th>GRS</th>
                                      <th>KILOCALO.</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>H DE C</td>
                                      <td><input id='hc_porcentaje' type="number" name="hc_porcentaje"  class="form-control input-md " readonly="redonly" /></td>
                                      <td><input id='hc_grs' type="number" name="hc_grs"  class="form-control input-md " readonly="redonly"/></td>
                                      <td><input id='hc_kc' type="number" name="hc_kc"  class="form-control input-md " readonly="redonly"/></td>


                                  </tr>
                                  <tr>
                                      <td>PROTEINAS</td>
                                      <td><input id='prote_porcentaje' type="number" name="prote_porcentaje"  class="form-control input-md " readonly="redonly"/></td>
                                      <td><input id='prote_grs' type="number" name="prote_grs"  class="form-control input-md " readonly="redonly"/></td>
                                      <td><input id='prote_kc' type="number" name="prote_kc"  class="form-control input-md " readonly="redonly"/></td>


                                  </tr>
                                  <tr>
                                      <td>LIPIDOS</td>
                                      <td><input id='lipi_porcentaje' type="number" name="lipi_porcentaje"  class="form-control input-md " readonly="redonly"/></td>
                                      <td><input id='lipi_grs' type="number" name="lipi_grs"  class="form-control input-md " readonly="redonly"/></td>
                                      <td><input id='lipi_kc' type="number" name="lpi_kc"  class="form-control input-md " readonly="redonly"/></td>
                                  </tr>
                                  <tr>
                                    <td><input type="button" value="mostrar grafica"  class="btn btn-xs btn-primary" onclick="desayuno()"/></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                  </tr>
                                </tbody>
                            </table>
                          </form>
                        </div>


                        <div id="containerdesayuno" style="width:100%;">  </div>

                    </div>

                  </div>

                  </div>

              <a name="comida"></a>

              <div class="col-lg-12">



                    <div class="col-lg-7">
                            <br>
                            <br>
                            <br>
                            <h2>COMIDA</h2>


                            <div class="table-responsive">
                              <form action="POST" name="recordatorio" id="recordatorio">
                                <table class="table table-hover table-striped" id="recordatorio">
                                    <thead>
                                        <tr>
                                            <th>ALIMENTO</th>
                                            <th>RACIÓN</th>
                                            <th>H.C</th>
                                            <th>PROTEINAS</th>
                                            <th>LIPIDOS</th>
                                            <th>KILOCALO.</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Leche</td>
                                            <td>
                                                <input type="number" id="comida_rac_leche" name="comida_rac_leche"   min="0"  class="form-control input-md " onchange="comida_funcionHC_LECHE(), comida_funcionPROTE_LECHE(), comida_funcionLIPI_LECHE(), comida_funcionKC_LECHE(), comida_funcionTOTAL_HC(), comida_funcionTOTAL_PROTEINAS(),comida_funcionTOTAL_LIPIDOS(),comida_funcionTOTAL_KC()"/>
                                            </td>
                                            <td><input id='comida_hc_rac_leche' type="number" name="comida_hc_rac_leche"  class="form-control input-md " readonly="redonly"/></td>
                                            <td><input id='comida_prote_rac_leche' type="number" name="comida_prote_rac_leche"  class="form-control input-md " readonly="redonly"/></td>
                                            <td><input id='comida_lipi_rac_leche' type="number" name="comida_lipi_rac_leche"  class="form-control input-md " readonly="redonly"/></td>
                                            <td><input id='comida_kc_rac_leche' type="number" name="comida_kc_rac_leche"  class="form-control input-md " readonly="redonly"/></td>

                                        </tr>
                                        <tr>
                                            <td>Carne</td>
                                            <td><input type="number" id="comida_rac_carne" name="comida_rac_carne" min="0" class="form-control input-md " onchange="comida_funcionHC_CARNE(), comida_funcionPROTE_CARNE(), comida_funcionLIPI_CARNE(), comida_funcionKC_CARNE(), comida_funcionTOTAL_HC(), comida_funcionTOTAL_PROTEINAS(),comida_funcionTOTAL_LIPIDOS(),comida_funcionTOTAL_KC()"></td>
                                            <td><input id='comida_hc_rac_carne' type="number" name="comida_hc_rac_carne"  class="form-control input-md " readonly="redonly"/></td>
                                            <td><input id='comida_prote_rac_carne' type="number" name="comida_prote_rac_carne"  class="form-control input-md " readonly="redonly"/></td>
                                            <td><input id='comida_lipi_rac_carne' type="number" name="comida_lipi_rac_carne"  class="form-control input-md " readonly="redonly"/></td>
                                            <td><input id='comida_kc_rac_carne' type="number" name="comida_kc_rac_carne"  class="form-control input-md " readonly="redonly"/></td>
                                        </tr>
                                        <tr>
                                            <td>Fruta</td>
                                            <td><input type="number" id="comida_rac_fruta" name="comida_rac_fruta" min="0" class="form-control input-md " onchange="comida_funcionHC_FRUTA(), comida_funcionPROTE_FRUTA(), comida_funcionLIPI_FRUTA(), comida_funcionKC_FRUTA(), comida_funcionTOTAL_HC(), comida_funcionTOTAL_PROTEINAS(),comida_funcionTOTAL_LIPIDOS(),comida_funcionTOTAL_KC()"></td>
                                            <td><input id='comida_hc_rac_fruta' type="number" name="comida_hc_rac_fruta"  class="form-control input-md " readonly="redonly"/></td>
                                            <td><input id='comida_prote_rac_fruta' type="number" name="comida_prote_rac_fruta"  class="form-control input-md " readonly="redonly"/></td>
                                            <td><input id='comida_lipi_rac_fruta' type="number" name="comida_lipi_rac_fruta"  class="form-control input-md " readonly="redonly"/></td>
                                            <td><input id='comida_kc_rac_fruta' type="number" name="comida_kc_rac_fruta"  class="form-control input-md " readonly="redonly"/></td>
                                        </tr>
                                        <tr>
                                            <td>Vegetales</td>
                                            <td><input type="number" id="comida_rac_vegetales" name="comida_rac_vegetales" min="0" class="form-control input-md " onchange="comida_funcionHC_VEGETALES(), comida_funcionPROTE_VEGETALES(), comida_funcionLIPI_VEGETALES(), comida_funcionKC_VEGETALES(), comida_funcionTOTAL_HC(),comida_funcionTOTAL_PROTEINAS(),comida_funcionTOTAL_LIPIDOS() ,comida_funcionTOTAL_KC()"></td>
                                            <td><input id='comida_hc_rac_vegetales' type="number" name="comida_hc_rac_vegetales"  class="form-control input-md " readonly="redonly"/></td>
                                            <td><input id='comida_prote_rac_vegetales' type="number" name="comida_prote_rac_vegetales"  class="form-control input-md " readonly="redonly"/></td>
                                            <td><input id='comida_lipi_rac_vegetales' type="number" name="comida_lipi_rac_vegetales"  class="form-control input-md " readonly="redonly"/></td>
                                            <td><input id='comida_kc_rac_vegetales' type="number" name="comida_kc_rac_vegetales"  class="form-control input-md " readonly="redonly"/></td>

                                        </tr>
                                        <tr>
                                            <td>Cereales y tuberculos</td>
                                            <td><input type="number" id="comida_rac_cyt" name="comida_rac_cyt" min="0" class="form-control input-md " onchange="comida_funcionHC_CYT(), comida_funcionPROTE_CYT(), comida_funcionLIPI_CYT(), comida_funcionKC_CYT(), comida_funcionTOTAL_HC(), comida_funcionTOTAL_PROTEINAS(),comida_funcionTOTAL_LIPIDOS(),comida_funcionTOTAL_KC()">
                                            <td><input id='comida_hc_rac_cyt' type="number" name="comida_hc_rac_cyt"  class="form-control input-md " readonly="redonly"/></td>
                                            <td><input id='comida_prote_rac_cyt' type="number" name="comida_prote_rac_cyt"  class="form-control input-md " readonly="redonly"/></td>
                                            <td><input id='comida_lipi_rac_cyt' type="number" name="comida_lipi_rac_cyt"  class="form-control input-md " readonly="redonly"/></td>
                                            <td><input id='comida_kc_rac_cyt' type="number" name="comida_kc_rac_cyt"  class="form-control input-md " readonly="redonly"/></td>

                                        </tr>
                                        <tr>
                                            <td>Leguminosas</td>
                                            <td><input type="number" id="comida_rac_leguminosas" name="comida_rac_leguminosas" min="0" class="form-control input-md " onchange="comida_funcionHC_LEGUMINOSAS(), comida_funcionPROTE_LEGUMINOSAS(), comida_funcionLIPI_LEGUMINOSAS(), comida_funcionKC_LEGUMINOSAS(), comida_funcionTOTAL_HC(), comida_funcionTOTAL_PROTEINAS(),comida_funcionTOTAL_LIPIDOS(),comida_funcionTOTAL_KC()"></td>
                                            <td><input id='comida_hc_rac_leguminosas' type="number" name="comida_hc_rac_leguminosas"  class="form-control input-md " readonly="redonly"/></td>
                                            <td><input id='comida_prote_rac_leguminosas' type="number" name="comida_prote_rac_leguminosas"  class="form-control input-md " readonly="redonly"/></td>
                                            <td><input id='comida_lipi_rac_leguminosas' type="number" name="comida_lipi_rac_leguminosas"  class="form-control input-md " readonly="redonly"/></td>
                                            <td><input id='comida_kc_rac_leguminosas' type="number" name="comida_kc_rac_leguminosas"  class="form-control input-md " readonly="redonly"/></td>
                                        </tr>
                                        <tr>
                                            <td>Grasas</td>
                                            <td><input type="number" id="comida_rac_grasas" name="comida_rac_grasas" min="0" class="form-control input-md " onchange="comida_funcionHC_GRASAS(), comida_funcionPROTE_GRASAS(), comida_funcionLIPI_GRASAS(), comida_funcionKC_GRASAS(), comida_funcionTOTAL_HC(), comida_funcionTOTAL_PROTEINAS(),comida_funcionTOTAL_LIPIDOS(),comida_funcionTOTAL_KC()"></td>
                                            <td><input id='comida_hc_rac_grasas' type="number" name="comida_hc_rac_grasas"  class="form-control input-md " readonly="redonly"/></td>
                                            <td><input id='comida_prote_rac_grasas' type="number" name="comida_prote_rac_grasas"  class="form-control input-md " readonly="redonly"/></td>
                                            <td><input id='comida_lipi_rac_grasas' type="number" name="comida_lipi_rac_grasas"  class="form-control input-md " readonly="redonly"/></td>
                                            <td><input id='comida_kc_rac_grasas' type="number" name="comida_kc_rac_grasas"  class="form-control input-md " readonly="redonly"/></td>
                                        </tr>
                                        <tr>
                                            <td>Azucares</td>
                                            <td><input type="number" id="comida_rac_azucares" name="comida_rac_azucares" min="0" class="form-control input-md " onchange="comida_funcionHC_AZUCARES(), comida_funcionPROTE_AZUCARES(), comida_funcionLIPI_AZUCARES(), comida_funcionKC_AZUCARES(), comida_funcionTOTAL_HC(), comida_funcionTOTAL_PROTEINAS(),comida_funcionTOTAL_LIPIDOS(),comida_funcionTOTAL_KC()"></td>
                                            <td><input id='comida_hc_rac_azucares' type="number" name="comida_hc_rac_azucares"  class="form-control input-md " readonly="redonly"/></td>
                                            <td><input id='comida_prote_rac_azucares' type="number" name="comida_prote_rac_azucares"  class="form-control input-md " readonly="redonly"/></td>
                                            <td><input id='comida_lipi_rac_azucares' type="number" name="comida_lipi_rac_azucares"  class="form-control input-md " readonly="redonly"/></td>
                                            <td><input id='comida_kc_rac_azucares' type="number" name="comida_kc_rac_azucares"  class="form-control input-md " readonly="redonly"/></td>

                                        </tr>
                                        <tr>
                                          <td><h3>TOTAL</h2></td>
                                          <td></td>
                                          <td><input id='comida_total_hc' type="number" name="comida_total_hc"  class="form-control input-md " readonly="redonly"/></td>
                                          <td><input id='comida_total_prote' type="number" name="comida_total_prote"  class="form-control input-md " readonly="redonly"/></td>
                                          <td><input id='comida_total_lipi' type="number" name="comida_total_LIPI"  class="form-control input-md " readonly="redonly"/></td>
                                          <td><input id='comida_total_kc' type="number" name="comida_total_kc"  class="form-control input-md " readonly="redonly"/></td>
                                        </tr>
                                    </tbody>
                                </table>
                              </form>
                            </div>
                        </div>
                        <div class="col-lg-5">
                          <br><br><br><br><br><br>

                          <div class="table-responsive">
                            <form action="POST" name="recordatorio" id="recordatorio">
                              <table class="table table-hover table-striped" id="recordatorio">
                                  <thead>
                                      <tr>
                                          <th></th>
                                          <th>&nbsp &nbsp &nbsp &nbsp %</th>
                                          <th>GRS</th>
                                          <th>KILOCALO.</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>H DE C</td>
                                          <td><input id='comida_hc_porcentaje' type="number" name="comida_hc_porcentaje"  class="form-control input-md " readonly="redonly" /></td>
                                          <td><input id='comida_hc_grs' type="number" name="comida_hc_grs"  class="form-control input-md " readonly="redonly"/></td>
                                          <td><input id='comida_hc_kc' type="number" name="comida_hc_kc"  class="form-control input-md " readonly="redonly"/></td>


                                      </tr>
                                      <tr>
                                          <td>PROTEINAS</td>
                                          <td><input id='comida_prote_porcentaje' type="number" name="comida_prote_porcentaje"  class="form-control input-md " readonly="redonly"/></td>
                                          <td><input id='comida_prote_grs' type="number" name="comida_prote_grs"  class="form-control input-md " readonly="redonly"/></td>
                                          <td><input id='comida_prote_kc' type="number" name="comida_prote_kc"  class="form-control input-md " readonly="redonly"/></td>


                                      </tr>
                                      <tr>
                                          <td>LIPIDOS</td>
                                          <td><input id='comida_lipi_porcentaje' type="number" name="comida_lipi_porcentaje"  class="form-control input-md " readonly="redonly"/></td>
                                          <td><input id='comida_lipi_grs' type="number" name="comida_lipi_grs"  class="form-control input-md " readonly="redonly"/></td>
                                          <td><input id='comida_lipi_kc' type="number" name="comida_lpi_kc"  class="form-control input-md " readonly="redonly"/></td>
                                      </tr>
                                      <tr>
                                        <td><input type="button" value="mostrar grafica"  class="btn btn-xs btn-primary" onclick="comida()"/></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                      </tr>
                                    </tbody>
                                </table>
                              </form>
                            </div>
                          <div id="containercomida" style="width:100%;">  </div>
                          </div>
                        </div>

<a name="cena"></a>

                      <div class="col-lg-12">
                        <div class="col-lg-7">

                                <br>
                                <br>
                                <br>

                                <h2>CENA</h2>

                                <div class="table-responsive">

                                  <form action="POST" name="recordatorio" id="recordatorio">
                                    <table class="table table-hover table-striped" id="recordatorio">
                                        <thead>
                                            <tr>
                                                <th>ALIMENTO</th>
                                                <th>RACIÓN</th>
                                                <th>H.C</th>
                                                <th>PROTEINAS</th>
                                                <th>LIPIDOS</th>
                                                <th>KILOCALO.</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Leche</td>
                                                <td>
                                                    <input type="number" id="cena_rac_leche" name="cena_rac_leche"   min="0"  class="form-control input-md " onchange="cena_funcionHC_LECHE(), cena_funcionPROTE_LECHE(), cena_funcionLIPI_LECHE(), cena_funcionKC_LECHE(), cena_funcionTOTAL_HC(), cena_funcionTOTAL_PROTEINAS(),cena_funcionTOTAL_LIPIDOS(),cena_funcionTOTAL_KC()"/>
                                                </td>
                                                <td><input id='cena_hc_rac_leche' type="number" name="cena_hc_rac_leche"  class="form-control input-md " readonly="redonly"/></td>
                                                <td><input id='cena_prote_rac_leche' type="number" name="cena_prote_rac_leche"  class="form-control input-md " readonly="redonly"/></td>
                                                <td><input id='cena_lipi_rac_leche' type="number" name="cena_lipi_rac_leche"  class="form-control input-md " readonly="redonly"/></td>
                                                <td><input id='cena_kc_rac_leche' type="number" name="cena_kc_rac_leche"  class="form-control input-md " readonly="redonly"/></td>

                                            </tr>
                                            <tr>
                                                <td>Carne</td>
                                                <td><input type="number" id="cena_rac_carne" name="cena_rac_carne" min="0" class="form-control input-md " onchange="cena_funcionHC_CARNE(), cena_funcionPROTE_CARNE(), cena_funcionLIPI_CARNE(), cena_funcionKC_CARNE(), cena_funcionTOTAL_HC(), cena_funcionTOTAL_PROTEINAS(),cena_funcionTOTAL_LIPIDOS(),cena_funcionTOTAL_KC()"></td>
                                                <td><input id='cena_hc_rac_carne' type="number" name="cena_hc_rac_carne"  class="form-control input-md " readonly="redonly"/></td>
                                                <td><input id='cena_prote_rac_carne' type="number" name="cena_prote_rac_carne"  class="form-control input-md " readonly="redonly"/></td>
                                                <td><input id='cena_lipi_rac_carne' type="number" name="cena_lipi_rac_carne"  class="form-control input-md " readonly="redonly"/></td>
                                                <td><input id='cena_kc_rac_carne' type="number" name="cena_kc_rac_carne"  class="form-control input-md " readonly="redonly"/></td>
                                            </tr>
                                            <tr>
                                                <td>Fruta</td>
                                                <td><input type="number" id="cena_rac_fruta" name="cena_rac_fruta" min="0" class="form-control input-md " onchange="cena_funcionHC_FRUTA(), cena_funcionPROTE_FRUTA(), cena_funcionLIPI_FRUTA(), cena_funcionKC_FRUTA(), cena_funcionTOTAL_HC(), cena_funcionTOTAL_PROTEINAS(),cena_funcionTOTAL_LIPIDOS(),cena_funcionTOTAL_KC()"></td>
                                                <td><input id='cena_hc_rac_fruta' type="number" name="cena_hc_rac_fruta"  class="form-control input-md " readonly="redonly"/></td>
                                                <td><input id='cena_prote_rac_fruta' type="number" name="cena_prote_rac_fruta"  class="form-control input-md " readonly="redonly"/></td>
                                                <td><input id='cena_lipi_rac_fruta' type="number" name="cena_lipi_rac_fruta"  class="form-control input-md " readonly="redonly"/></td>
                                                <td><input id='cena_kc_rac_fruta' type="number" name="cena_kc_rac_fruta"  class="form-control input-md " readonly="redonly"/></td>
                                            </tr>
                                            <tr>
                                                <td>Vegetales</td>
                                                <td><input type="number" id="cena_rac_vegetales" name="cena_rac_vegetales" min="0" class="form-control input-md " onchange="cena_funcionHC_VEGETALES(), cena_funcionPROTE_VEGETALES(), cena_funcionLIPI_VEGETALES(), cena_funcionKC_VEGETALES(), cena_funcionTOTAL_HC(),cena_funcionTOTAL_PROTEINAS(),cena_funcionTOTAL_LIPIDOS() ,cena_funcionTOTAL_KC()"></td>
                                                <td><input id='cena_hc_rac_vegetales' type="number" name="cena_hc_rac_vegetales"  class="form-control input-md " readonly="redonly"/></td>
                                                <td><input id='cena_prote_rac_vegetales' type="number" name="cena_prote_rac_vegetales"  class="form-control input-md " readonly="redonly"/></td>
                                                <td><input id='cena_lipi_rac_vegetales' type="number" name="cena_lipi_rac_vegetales"  class="form-control input-md " readonly="redonly"/></td>
                                                <td><input id='cena_kc_rac_vegetales' type="number" name="cena_kc_rac_vegetales"  class="form-control input-md " readonly="redonly"/></td>

                                            </tr>
                                            <tr>
                                                <td>Cereales y tuberculos</td>
                                                <td><input type="number" id="cena_rac_cyt" name="cena_rac_cyt" min="0" class="form-control input-md " onchange="cena_funcionHC_CYT(), cena_funcionPROTE_CYT(), cena_funcionLIPI_CYT(), cena_funcionKC_CYT(), cena_funcionTOTAL_HC(), cena_funcionTOTAL_PROTEINAS(),cena_funcionTOTAL_LIPIDOS(),cena_funcionTOTAL_KC()">
                                                <td><input id='cena_hc_rac_cyt' type="number" name="cena_hc_rac_cyt"  class="form-control input-md " readonly="redonly"/></td>
                                                <td><input id='cena_prote_rac_cyt' type="number" name="cena_prote_rac_cyt"  class="form-control input-md " readonly="redonly"/></td>
                                                <td><input id='cena_lipi_rac_cyt' type="number" name="cena_lipi_rac_cyt"  class="form-control input-md " readonly="redonly"/></td>
                                                <td><input id='cena_kc_rac_cyt' type="number" name="cena_kc_rac_cyt"  class="form-control input-md " readonly="redonly"/></td>

                                            </tr>
                                            <tr>
                                                <td>Leguminosas</td>
                                                <td><input type="number" id="cena_rac_leguminosas" name="cena_rac_leguminosas" min="0" class="form-control input-md " onchange="cena_funcionHC_LEGUMINOSAS(), cena_funcionPROTE_LEGUMINOSAS(), cena_funcionLIPI_LEGUMINOSAS(), cena_funcionKC_LEGUMINOSAS(), cena_funcionTOTAL_HC(), cena_funcionTOTAL_PROTEINAS(),cena_funcionTOTAL_LIPIDOS(),cena_funcionTOTAL_KC()"></td>
                                                <td><input id='cena_hc_rac_leguminosas' type="number" name="cena_hc_rac_leguminosas"  class="form-control input-md " readonly="redonly"/></td>
                                                <td><input id='cena_prote_rac_leguminosas' type="number" name="cena_prote_rac_leguminosas"  class="form-control input-md " readonly="redonly"/></td>
                                                <td><input id='cena_lipi_rac_leguminosas' type="number" name="cena_lipi_rac_leguminosas"  class="form-control input-md " readonly="redonly"/></td>
                                                <td><input id='cena_kc_rac_leguminosas' type="number" name="cena_kc_rac_leguminosas"  class="form-control input-md " readonly="redonly"/></td>
                                            </tr>
                                            <tr>
                                                <td>Grasas</td>
                                                <td><input type="number" id="cena_rac_grasas" name="comida_rac_grasas" min="0" class="form-control input-md " onchange="cena_funcionHC_GRASAS(), cena_funcionPROTE_GRASAS(), cena_funcionLIPI_GRASAS(), cena_funcionKC_GRASAS(), cena_funcionTOTAL_HC(), cena_funcionTOTAL_PROTEINAS(),cena_funcionTOTAL_LIPIDOS(),cena_funcionTOTAL_KC()"></td>
                                                <td><input id='cena_hc_rac_grasas' type="number" name="comida_hc_rac_grasas"  class="form-control input-md " readonly="redonly"/></td>
                                                <td><input id='cena_prote_rac_grasas' type="number" name="comida_prote_rac_grasas"  class="form-control input-md " readonly="redonly"/></td>
                                                <td><input id='cena_lipi_rac_grasas' type="number" name="comida_lipi_rac_grasas"  class="form-control input-md " readonly="redonly"/></td>
                                                <td><input id='cena_kc_rac_grasas' type="number" name="comida_kc_rac_grasas"  class="form-control input-md " readonly="redonly"/></td>
                                            </tr>
                                            <tr>
                                                <td>Azucares</td>
                                                <td><input type="number" id="cena_rac_azucares" name="cena_rac_azucares" min="0" class="form-control input-md " onchange="cena_funcionHC_AZUCARES(), cena_funcionPROTE_AZUCARES(), cena_funcionLIPI_AZUCARES(), cena_funcionKC_AZUCARES(), cena_funcionTOTAL_HC(), cena_funcionTOTAL_PROTEINAS(),cena_funcionTOTAL_LIPIDOS(),cena_funcionTOTAL_KC()"></td>
                                                <td><input id='cena_hc_rac_azucares' type="number" name="cena_hc_rac_azucares"  class="form-control input-md " readonly="redonly"/></td>
                                                <td><input id='cena_prote_rac_azucares' type="number" name="cena_prote_rac_azucares"  class="form-control input-md " readonly="redonly"/></td>
                                                <td><input id='cena_lipi_rac_azucares' type="number" name="cena_lipi_rac_azucares"  class="form-control input-md " readonly="redonly"/></td>
                                                <td><input id='cena_kc_rac_azucares' type="number" name="cena_kc_rac_azucares"  class="form-control input-md " readonly="redonly"/></td>

                                            </tr>
                                            <tr>
                                              <td><h3>TOTAL</h2></td>
                                              <td></td>
                                              <td><input id='cena_total_hc' type="number" name="cena_total_hc"  class="form-control input-md " readonly="redonly"/></td>
                                              <td><input id='cena_total_prote' type="number" name="cena_total_prote"  class="form-control input-md " readonly="redonly"/></td>
                                              <td><input id='cena_total_lipi' type="number" name="cena_total_LIPI"  class="form-control input-md " readonly="redonly"/></td>
                                              <td><input id='cena_total_kc' type="number" name="cena_total_kc"   class=" form-control input-md " readonly="redonly"/></td>
                                            </tr>
                                        </tbody>
                                    </table>


                                  </form>
                                </div>
                            </div>


                            <div class="col-lg-5">
                              <br><br><br><br><br><br>

                              <div class="table-responsive">
                                <form action="POST" name="recordatorio" id="recordatorio">
                                  <table class="table table-hover table-striped" id="recordatorio">
                                      <thead>
                                          <tr>
                                              <th></th>
                                              <th>&nbsp &nbsp &nbsp &nbsp %</th>
                                              <th>GRS</th>
                                              <th>KILOCALO.</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>H DE C</td>
                                              <td><input id='cena_hc_porcentaje' type="number" name="hc_porcentaje"  class="form-control input-md " readonly="redonly" /></td>
                                              <td><input id='cena_hc_grs' type="number" name="hc_grs"  class="form-control input-md " readonly="redonly"/></td>
                                              <td><input id='cena_hc_kc' type="number" name="hc_kc"  class="form-control input-md " readonly="redonly"/></td>


                                          </tr>
                                          <tr>
                                              <td>PROTEINAS</td>
                                              <td><input id='cena_prote_porcentaje' type="number" name="prote_porcentaje"  class="form-control input-md " readonly="redonly"/></td>
                                              <td><input id='cena_prote_grs' type="number" name="prote_grs"  class="form-control input-md " readonly="redonly"/></td>
                                              <td><input id='cena_prote_kc' type="number" name="prote_kc"  class="form-control input-md " readonly="redonly"/></td>


                                          </tr>
                                          <tr>
                                              <td>LIPIDOS</td>
                                              <td><input id='cena_lipi_porcentaje' type="number" name="lipi_porcentaje"  class="form-control input-md " readonly="redonly"/></td>
                                              <td><input id='cena_lipi_grs' type="number" name="lipi_grs"  class="form-control input-md " readonly="redonly"/></td>
                                              <td><input id='cena_lipi_kc' type="number" name="lpi_kc"  class="form-control input-md " readonly="redonly"/></td>
                                          </tr>
                                          <tr>
                                            <td><input type="button" value="mostrar grafica"  class="btn btn-xs btn-primary" onclick="cena()"/></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                          </tr>
                                        </tbody>

                                    </table>
                                  </form>
                                </div>

                              <div id="containercena" style="width:100%;">  </div>

                              </div>
                            </div>

<a name="total24horas"></a>

                          <div class="col-lg-12">
                            <div class="col-lg-7">
                                    <br>
                                    <br>
                                    <br>

                                    <h2>TOTAL 24 HORAS </h2>

                                    <div class="table-responsive">
                                      <form action="POST" name="recordatorio" id="recordatorio">
                                        <table class="table table-hover table-striped" id="recordatorio">
                                            <thead>
                                                <tr>
                                                    <th>ALIMENTO</th>
                                                    <th>RACIÓN</th>
                                                    <th>H.C</th>
                                                    <th>PROTEINAS</th>
                                                    <th>LIPIDOS</th>
                                                    <th>KILOCALO.</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Leche</td>
                                                    <td>
                                                        <input type="number" id="t24h_rac_leche" name="t24h_rac_leche"   min="0"  class="form-control input-md " onclick="t24h_funcionHC_LECHE(), t24h_funcionPROTE_LECHE(), t24h_funcionLIPI_LECHE(), t24h_funcionKC_LECHE(), t24h_funcionTOTAL_HC(), t24h_funcionTOTAL_PROTEINAS(),t24h_funcionTOTAL_LIPIDOS(),t24h_funcionTOTAL_KC()"/>
                                                    </td>
                                                    <td><input id='t24h_hc_rac_leche' type="number" name="t24h_hc_rac_leche"  class="form-control input-md " readonly="redonly"/></td>
                                                    <td><input id='t24h_prote_rac_leche' type="number" name="t24h_prote_rac_leche"  class="form-control input-md " readonly="redonly"/></td>
                                                    <td><input id='t24h_lipi_rac_leche' type="number" name="t24h_lipi_rac_leche"  class="form-control input-md " readonly="redonly"/></td>
                                                    <td><input id='t24h_kc_rac_leche' type="number" name="t24h_kc_rac_leche"  class="form-control input-md " readonly="redonly"/></td>

                                                </tr>
                                                <tr>
                                                    <td>Carne</td>
                                                    <td><input type="number" id="t24h_rac_carne" name="t24h_rac_carne" min="0" class="form-control input-md " onchange="t24h_funcionHC_CARNE(), t24h_funcionPROTE_CARNE(), t24h_funcionLIPI_CARNE(), t24h_funcionKC_CARNE(), t24h_funcionTOTAL_HC(), t24h_funcionTOTAL_PROTEINAS(),t24h_funcionTOTAL_LIPIDOS(),t24h_funcionTOTAL_KC()"></td>
                                                    <td><input id='t24h_hc_rac_carne' type="number" name="t24h_hc_rac_carne"  class="form-control input-md " readonly="redonly"/></td>
                                                    <td><input id='t24h_prote_rac_carne' type="number" name="t24h_prote_rac_carne"  class="form-control input-md " readonly="redonly"/></td>
                                                    <td><input id='t24h_lipi_rac_carne' type="number" name="t24h_lipi_rac_carne"  class="form-control input-md " readonly="redonly"/></td>
                                                    <td><input id='t24h_kc_rac_carne' type="number" name="t24h_kc_rac_carne"  class="form-control input-md " readonly="redonly"/></td>
                                                </tr>
                                                <tr>
                                                    <td>Fruta</td>
                                                    <td><input type="number" id="t24h_rac_fruta" name="t24h_rac_fruta" min="0" class="form-control input-md " onchange="t24h_funcionHC_FRUTA(), t24h_funcionPROTE_FRUTA(), t24h_funcionLIPI_FRUTA(), t24h_funcionKC_FRUTA(), t24h_funcionTOTAL_HC(), t24h_funcionTOTAL_PROTEINAS(),t24h_funcionTOTAL_LIPIDOS(),t24h_funcionTOTAL_KC()"></td>
                                                    <td><input id='t24h_hc_rac_fruta' type="number" name="t24h_hc_rac_fruta"  class="form-control input-md " readonly="redonly"/></td>
                                                    <td><input id='t24h_prote_rac_fruta' type="number" name="t24h_prote_rac_fruta"  class="form-control input-md " readonly="redonly"/></td>
                                                    <td><input id='t24h_lipi_rac_fruta' type="number" name="t24h_lipi_rac_fruta"  class="form-control input-md " readonly="redonly"/></td>
                                                    <td><input id='t24h_kc_rac_fruta' type="number" name="t24h_kc_rac_fruta"  class="form-control input-md " readonly="redonly"/></td>
                                                </tr>
                                                <tr>
                                                    <td>Vegetales</td>
                                                    <td><input type="number" id="t24h_rac_vegetales" name="t24h_rac_vegetales" min="0" class="form-control input-md " onchange="t24h_funcionHC_VEGETALES(), t24h_funcionPROTE_VEGETALES(), t24h_funcionLIPI_VEGETALES(), t24h_funcionKC_VEGETALES(), t24h_funcionTOTAL_HC(),t24h_funcionTOTAL_PROTEINAS(),t24h_funcionTOTAL_LIPIDOS() ,t24h_funcionTOTAL_KC()"></td>
                                                    <td><input id='t24h_hc_rac_vegetales' type="number" name="t24h_hc_rac_vegetales"  class="form-control input-md " readonly="redonly"/></td>
                                                    <td><input id='t24h_prote_rac_vegetales' type="number" name="t24h_prote_rac_vegetales"  class="form-control input-md " readonly="redonly"/></td>
                                                    <td><input id='t24h_lipi_rac_vegetales' type="number" name="t24h_lipi_rac_vegetales"  class="form-control input-md " readonly="redonly"/></td>
                                                    <td><input id='t24h_kc_rac_vegetales' type="number" name="t24h_kc_rac_vegetales"  class="form-control input-md " readonly="redonly"/></td>

                                                </tr>
                                                <tr>
                                                    <td>Cereales y tuberculos</td>
                                                    <td><input type="number" id="t24h_rac_cyt" name="t24h_rac_cyt" min="0" class="form-control input-md " onchange="t24h_funcionHC_CYT(), t24h_funcionPROTE_CYT(), t24h_funcionLIPI_CYT(), t24h_funcionKC_CYT(), t24h_funcionTOTAL_HC(), t24h_funcionTOTAL_PROTEINAS(),t24h_funcionTOTAL_LIPIDOS(),t24h_funcionTOTAL_KC()">
                                                    <td><input id='t24h_hc_rac_cyt' type="number" name="t24h_hc_rac_cyt"  class="form-control input-md " readonly="redonly"/></td>
                                                    <td><input id='t24h_prote_rac_cyt' type="number" name="t24h_prote_rac_cyt"  class="form-control input-md " readonly="redonly"/></td>
                                                    <td><input id='t24h_lipi_rac_cyt' type="number" name="t24h_lipi_rac_cyt"  class="form-control input-md " readonly="redonly"/></td>
                                                    <td><input id='t24h_kc_rac_cyt' type="number" name="t24h_kc_rac_cyt"  class="form-control input-md " readonly="redonly"/></td>

                                                </tr>
                                                <tr>
                                                    <td>Leguminosas</td>
                                                    <td><input type="number" id="t24h_rac_leguminosas" name="cena_rac_leguminosas" min="0" class="form-control input-md " onchange="t24h_funcionHC_LEGUMINOSAS(), t24h_funcionPROTE_LEGUMINOSAS(), t24h_funcionLIPI_LEGUMINOSAS(), t24h_funcionKC_LEGUMINOSAS(), t24h_funcionTOTAL_HC(), t24h_funcionTOTAL_PROTEINAS(),t24h_funcionTOTAL_LIPIDOS(),t24h_funcionTOTAL_KC()"></td>
                                                    <td><input id='t24h_hc_rac_leguminosas' type="number" name="cena_hc_rac_leguminosas"  class="form-control input-md " readonly="redonly"/></td>
                                                    <td><input id='t24h_prote_rac_leguminosas' type="number" name="cena_prote_rac_leguminosas"  class="form-control input-md " readonly="redonly"/></td>
                                                    <td><input id='t24h_lipi_rac_leguminosas' type="number" name="cena_lipi_rac_leguminosas"  class="form-control input-md " readonly="redonly"/></td>
                                                    <td><input id='t24h_kc_rac_leguminosas' type="number" name="cena_kc_rac_leguminosas"  class="form-control input-md " readonly="redonly"/></td>
                                                </tr>
                                                <tr>
                                                    <td>Grasas</td>
                                                    <td><input type="number" id="t24h_rac_grasas" name="t24hda_rac_grasas" min="0" class="form-control input-md " onchange="t24h_funcionHC_GRASAS(), t24h_funcionPROTE_GRASAS(), t24h_funcionLIPI_GRASAS(), t24h_funcionKC_GRASAS(), t24h_funcionTOTAL_HC(), t24h_funcionTOTAL_PROTEINAS(),t24h_funcionTOTAL_LIPIDOS(),t24h_funcionTOTAL_KC()"></td>
                                                    <td><input id='t24h_hc_rac_grasas' type="number" name="t24hda_hc_rac_grasas"  class="form-control input-md " readonly="redonly"/></td>
                                                    <td><input id='t24h_prote_rac_grasas' type="number" name="t24hda_prote_rac_grasas"  class="form-control input-md " readonly="redonly"/></td>
                                                    <td><input id='t24h_lipi_rac_grasas' type="number" name="t24hda_lipi_rac_grasas"  class="form-control input-md " readonly="redonly"/></td>
                                                    <td><input id='t24h_kc_rac_grasas' type="number" name="t24hda_kc_rac_grasas"  class="form-control input-md " readonly="redonly"/></td>
                                                </tr>
                                                <tr>
                                                    <td>Azucares</td>
                                                    <td><input type="number" id="t24h_rac_azucares" name="t24h_rac_azucares" min="0" class="form-control input-md " onchange="t24h_funcionHC_AZUCARES(), t24h_funcionPROTE_AZUCARES(), t24h_funcionLIPI_AZUCARES(), t24h_funcionKC_AZUCARES(), t24h_funcionTOTAL_HC(), t24h_funcionTOTAL_PROTEINAS(),t24h_funcionTOTAL_LIPIDOS(),t24h_funcionTOTAL_KC()"></td>
                                                    <td><input id='t24h_hc_rac_azucares' type="number" name="t24h_hc_rac_azucares"  class="form-control input-md " readonly="redonly"/></td>
                                                    <td><input id='t24h_prote_rac_azucares' type="number" name="t24h_prote_rac_azucares"  class="form-control input-md " readonly="redonly"/></td>
                                                    <td><input id='t24h_lipi_rac_azucares' type="number" name="t24h_lipi_rac_azucares"  class="form-control input-md " readonly="redonly"/></td>
                                                    <td><input id='t24h_kc_rac_azucares' type="number" name="t24h_kc_rac_azucares"  class="form-control input-md " readonly="redonly"/></td>

                                                </tr>
                                                <tr>
                                                  <td><h3>TOTAL</h2></td>
                                                  <td></td>
                                                  <td><input id='t24h_total_hc' type="number" name="t24h_total_hc"  class="form-control input-md " readonly="redonly"/></td>
                                                  <td><input id='t24h_total_prote' type="number" name="t24h_total_prote"  class="form-control input-md " readonly="redonly"/></td>
                                                  <td><input id='t24h_total_lipi' type="number" name="t24h_total_LIPI"  class="form-control input-md " readonly="redonly"/></td>
                                                  <td><input id='t24h_total_kc' type="number" name="t24h_total_kc"   class=" form-control input-md " readonly="redonly"/></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                      </form>
                                    </div>
                                </div>

                                <div class="col-lg-5">
                                  <br><br><br><br><br><br>

                                  <div class="table-responsive">
                                    <form action="POST" name="recordatorio" id="recordatorio">
                                      <table class="table table-hover table-striped" id="recordatorio">
                                          <thead>
                                              <tr>
                                                  <th></th>
                                                  <th>&nbsp &nbsp &nbsp &nbsp %</th>
                                                  <th>GRS</th>
                                                  <th>KILOCALO.</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <td>H DE C</td>
                                                  <td><input id='t24h_hc_porcentaje' type="number" name="hc_porcentaje"  class="form-control input-md " readonly="redonly" /></td>
                                                  <td><input id='t24h_hc_grs' type="number" name="hc_grs"  class="form-control input-md " readonly="redonly"/></td>
                                                  <td><input id='t24h_hc_kc' type="number" name="hc_kc"  class="form-control input-md " readonly="redonly"/></td>


                                              </tr>
                                              <tr>
                                                  <td>PROTEINAS</td>
                                                  <td><input id='t24h_prote_porcentaje' type="number" name="total24horas_prote_porcentaje"  class="form-control input-md " readonly="redonly"/></td>
                                                  <td><input id='t24h_prote_grs' type="number" name="total24horas_prote_grs"  class="form-control input-md " readonly="redonly"/></td>
                                                  <td><input id='t24h_prote_kc' type="number" name="total24horas_prote_kc"  class="form-control input-md " readonly="redonly"/></td>


                                              </tr>
                                              <tr>
                                                  <td>LIPIDOS</td>
                                                  <td><input id='t24h_lipi_porcentaje' type="number" name="total24horas_lipi_porcentaje"  class="form-control input-md " readonly="redonly"/></td>
                                                  <td><input id='t24h_lipi_grs' type="number" name="total24horas_lipi_grs"  class="form-control input-md " readonly="redonly"/></td>
                                                  <td><input id='t24h_lipi_kc' type="number" name="total24horas_lpi_kc"  class="form-control input-md " readonly="redonly"/></td>
                                              </tr>
                                              <tr>
                                                <td><input type="button" value="mostrar grafica"  class="btn btn-xs btn-primary" onclick="total24horas()"/></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>

                                              </tr>
                                            </tbody>

                                        </table>
                                      </form>
                                    </div>
                                    <div id="containert24h" style="width:100%;display:none;">  </div>

                                  </div>
                                </div>








                                <div class="col-lg-12">




                                              <h2>INGESTA DIARIA</h2>


                                              <div class="table-responsive">
                                                <form action="POST" name="recordatorio" id="recordatorio">
                                                  <table class="table table-hover table-striped" id="recordatorio">
                                                      <thead>
                                                          <tr>
                                                              <th>ALIMENTO</th>
                                                              <th>RAC.</th>
                                                              <th>H.C.</th>
                                                              <th>PROTE.</th>
                                                              <th>LIPIDOS</th>
                                                              <th>KILOCALO.</th>
                                                              <th>RAC.</th>
                                                              <th>DESAYUNO</th>
                                                              <th>COL.MAT.</th>
                                                              <th>COMIDA</th>
                                                              <th>COL.VESP.</th>
                                                              <th>CENA</th>
                                                              <th>W</th>
                                                              <th>.</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                          <tr>
                                                              <td>Leche</td>
                                                              <td>
                                                                  <input type="number" id="ingestadiaria_rac_leche" name="ingestadiaria_rac_leche"   min="0"  class="form-control input-md " onchange="ingestadiaria_funcionHC_LECHE(), ingestadiaria_funcionPROTE_LECHE(), ingestadiaria_funcionLIPI_LECHE(), ingestadiaria_funcionKC_LECHE(), ingestadiaria_funcionTOTAL_HC(), ingestadiaria_funcionTOTAL_PROTEINAS(),ingestadiaria_funcionTOTAL_LIPIDOS(),ingestadiaria_funcionTOTAL_KC()"/>
                                                              </td>
                                                              <td><input id='ingestadiaria_hc_rac_leche' type="number" name="ingestadiaria_hc_rac_leche"  class="form-control input-md " readonly="redonly"/></td>
                                                              <td><input id='ingestadiaria_prote_rac_leche' type="number" name="ingestadiaria_prote_rac_leche"  class="form-control input-md " readonly="redonly"/></td>
                                                              <td><input id='ingestadiaria_lipi_rac_leche' type="number" name="ingestadiaria_lipi_rac_leche"  class="form-control input-md " readonly="redonly"/></td>
                                                              <td><input id='ingestadiaria_kc_rac_leche' type="number" name="ingestadiaria_kc_rac_leche"  class="form-control input-md " readonly="redonly"/></td>
                                                              <td>
                                                                <input type="number"  id="ingestadiaria_rac2_leche" name="name" class="form-control input-md " readonly="redonly"/>
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_desayuno_leche" name="name" class="form-control input-md " />
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_colmat_leche" name="name" class="form-control input-md " />
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_comida_leche" name="name" class="form-control input-md " />
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_colvesp_leche" name="name" class="form-control input-md " />
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_cena_leche" name="name" class="form-control input-md " />
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_w_leche" name="name" class="form-control input-md " readonly="redonly"/>
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_info_leche" name="name" class="form-control input-md " readonly="redonly"/>
                                                              </td>

                                                          </tr>
                                                          <tr>
                                                              <td>Carne</td>
                                                              <td><input type="number" id="ingestadiaria_rac_carne" name="ingestadiaria_rac_carne" min="0" class="form-control input-md " onchange="ingestadiaria_funcionHC_CARNE(), ingestadiaria_funcionPROTE_CARNE(), ingestadiaria_funcionLIPI_CARNE(), ingestadiaria_funcionKC_CARNE(), ingestadiaria_funcionTOTAL_HC(), ingestadiaria_funcionTOTAL_PROTEINAS(),ingestadiaria_funcionTOTAL_LIPIDOS(),ingestadiaria_funcionTOTAL_KC()"></td>
                                                              <td><input id='ingestadiaria_hc_rac_carne' type="number" name="ingestadiaria_hc_rac_carne"  class="form-control input-md " readonly="redonly"/></td>
                                                              <td><input id='ingestadiaria_prote_rac_carne' type="number" name="ingestadiaria_prote_rac_carne"  class="form-control input-md " readonly="redonly"/></td>
                                                              <td><input id='ingestadiaria_lipi_rac_carne' type="number" name="ingestadiaria_lipi_rac_carne"  class="form-control input-md " readonly="redonly"/></td>
                                                              <td><input id='ingestadiaria_kc_rac_carne' type="number" name="ingestadiaria_kc_rac_carne"  class="form-control input-md " readonly="redonly"/></td>



                                                              <td>
                                                                <input type="number" id="ingestadiaria_rac2_carne" name="name" class="form-control input-md " readonly="redonly"/>
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_desayuno_carne" name="name" class="form-control input-md " />
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_colmat_carne" name="name" class="form-control input-md " />
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_comida_carne" name="name" class="form-control input-md " />
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_colvesp_carne" name="name" class="form-control input-md " />
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_cena_carne" name="name" class="form-control input-md " />
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_w_carne" name="name" class="form-control input-md " readonly="redonly"/>
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_info_carne" name="name" class="form-control input-md " readonly="redonly"/>
                                                              </td>
                                                          </tr>
                                                          <tr>
                                                              <td>Fruta</td>
                                                              <td><input type="number" id="ingestadiaria_rac_fruta" name="ingestadiaria_rac_fruta" min="0" class="form-control input-md " onchange="ingestadiaria_funcionHC_FRUTA(), ingestadiaria_funcionPROTE_FRUTA(), ingestadiaria_funcionLIPI_FRUTA(), ingestadiaria_funcionKC_FRUTA(), ingestadiaria_funcionTOTAL_HC(), ingestadiaria_funcionTOTAL_PROTEINAS(),ingestadiaria_funcionTOTAL_LIPIDOS(),ingestadiaria_funcionTOTAL_KC()"></td>
                                                              <td><input id='ingestadiaria_hc_rac_fruta' type="number" name="ingestadiaria_hc_rac_fruta"  class="form-control input-md " readonly="redonly"/></td>
                                                              <td><input id='ingestadiaria_prote_rac_fruta' type="number" name="ingestadiaria_prote_rac_fruta"  class="form-control input-md " readonly="redonly"/></td>
                                                              <td><input id='ingestadiaria_lipi_rac_fruta' type="number" name="ingestadiaria_lipi_rac_fruta"  class="form-control input-md " readonly="redonly"/></td>
                                                              <td><input id='ingestadiaria_kc_rac_fruta' type="number" name="ingestadiaria_kc_rac_fruta"  class="form-control input-md " readonly="redonly"/></td>




                                                              <td>
                                                                <input type="number" id="ingestadiaria_rac2_fruta" name="name" class="form-control input-md " readonly="redonly"/>
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_desayuno_fruta" name="name" class="form-control input-md "/>
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_colmat_fruta" name="name" class="form-control input-md "/>
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_comida_fruta" name="name" class="form-control input-md "/>
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_colvesp_fruta" name="name" class="form-control input-md "/>
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_cena_fruta" name="name" class="form-control input-md "/>
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_w_fruta" name="name" class="form-control input-md " readonly="redonly"/>
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_info_fruta" name="name" class="form-control input-md " readonly="redonly"/>
                                                              </td>
                                                          </tr>
                                                          <tr>
                                                              <td>Vegetales</td>
                                                            <td><input type="number" id="ingestadiaria_rac_vegetales" name="ingestadiaria_rac_vegetales" min="0" class="form-control input-md " onchange="ingestadiaria_funcionHC_VEGETALES(), ingestadiaria_funcionPROTE_VEGETALES(), ingestadiaria_funcionLIPI_VEGETALES(), ingestadiaria_funcionKC_VEGETALES(), ingestadiaria_funcionTOTAL_HC(),ingestadiaria_funcionTOTAL_PROTEINAS(),ingestadiaria_funcionTOTAL_LIPIDOS() ,ingestadiaria_funcionTOTAL_KC()"></td>
                                                              <td><input id='ingestadiaria_hc_rac_vegetales' type="number" name="ingestadiaria_hc_rac_vegetales"  class="form-control input-md " readonly="redonly"/></td>
                                                              <td><input id='ingestadiaria_prote_rac_vegetales' type="number" name="ingestadiaria_prote_rac_vegetales"  class="form-control input-md " readonly="redonly"/></td>
                                                              <td><input id='ingestadiaria_lipi_rac_vegetales' type="number" name="ingestadiaria_lipi_rac_vegetales"  class="form-control input-md " readonly="redonly"/></td>
                                                              <td><input id='ingestadiaria_kc_rac_vegetales' type="number" name="ingestadiaria_kc_rac_vegetales"  class="form-control input-md " readonly="redonly"/></td>




                                                              <td>
                                                                <input type="number" id="ingestadiaria_rac2_vegetales" name="name" class="form-control input-md " readonly="redonly"/>
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_desayuno_vegetales" name="name" class="form-control input-md " />
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_colmat_vegetales" name="name" class="form-control input-md " />
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_comida_vegetales" name="name" class="form-control input-md " />
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_colvesp_vegetales" name="name" class="form-control input-md " />
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_cena_vegetales" name="name" class="form-control input-md " />
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_w_vegetales" name="name" class="form-control input-md " readonly="redonly"/>
                                                              </td>
                                                              <td>
                                                                <input type="ingestadiaria_info_vegetales" name="name" class="form-control input-md " readonly="redonly"/>
                                                              </td>

                                                          </tr>
                                                          <tr>
                                                              <td>Cereales y tuberculos</td>
                                                              <td><input type="number" id="ingestadiaria_rac_cyt" name="ingestadiaria_rac_cyt" min="0" class="form-control input-md " onchange="ingestadiaria_funcionHC_CYT(), ingestadiaria_funcionPROTE_CYT(), ingestadiaria_funcionLIPI_CYT(), ingestadiaria_funcionKC_CYT(), ingestadiaria_funcionTOTAL_HC(), ingestadiaria_funcionTOTAL_PROTEINAS(),ingestadiaria_funcionTOTAL_LIPIDOS(),ingestadiaria_funcionTOTAL_KC()">
                                                              <td><input id='ingestadiaria_hc_rac_cyt' type="number" name="ingestadiaria_hc_rac_cyt"  class="form-control input-md " readonly="redonly"/></td>
                                                              <td><input id='ingestadiaria_prote_rac_cyt' type="number" name="ingestadiaria_prote_rac_cyt"  class="form-control input-md " readonly="redonly"/></td>
                                                              <td><input id='ingestadiaria_lipi_rac_cyt' type="number" name="ingestadiaria_lipi_rac_cyt"  class="form-control input-md " readonly="redonly"/></td>
                                                              <td><input id='ingestadiaria_kc_rac_cyt' type="number" name="ingestadiaria_kc_rac_cyt"  class="form-control input-md " readonly="redonly"/></td>




                                                              <td>
                                                                <input type="number" id="ingestadiaria_rac2_cyt" name="name" class="form-control input-md " readonly="redonly"/>
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_desayuno_cyt" name="name" class="form-control input-md " />
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_colmat_cyt" name="name" class="form-control input-md " />
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_comida_cyt" name="name" class="form-control input-md " />
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_colvesp_cyt" name="name" class="form-control input-md " />
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_cena_cyt" name="name" class="form-control input-md " />
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_w_cyt" name="name" class="form-control input-md " readonly="redonly"/>
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_info_cyt" name="name" class="form-control input-md " readonly="redonly"/>
                                                              </td>

                                                          </tr>
                                                          <tr>
                                                              <td>Legumin.</td>
                                                              <td><input type="number" id="ingestadiaria_rac_leguminosas" name="ingestadiaria_rac_leguminosas" min="0" class="form-control input-md " onchange="ingestadiaria_funcionHC_LEGUMINOSAS(), ingestadiaria_funcionPROTE_LEGUMINOSAS(), ingestadiaria_funcionLIPI_LEGUMINOSAS(), ingestadiaria_funcionKC_LEGUMINOSAS(), ingestadiaria_funcionTOTAL_HC(), ingestadiaria_funcionTOTAL_PROTEINAS(),ingestadiaria_funcionTOTAL_LIPIDOS(),ingestadiaria_funcionTOTAL_KC()"></td>
                                                              <td><input id='ingestadiaria_hc_rac_leguminosas' type="number" name="ingestadiaria_hc_rac_leguminosas"  class="form-control input-md " readonly="redonly"/></td>
                                                              <td><input id='ingestadiaria_prote_rac_leguminosas' type="number" name="ingestadiaria_prote_rac_leguminosas"  class="form-control input-md " readonly="redonly"/></td>
                                                              <td><input id='ingestadiaria_lipi_rac_leguminosas' type="number" name="ingestadiaria_lipi_rac_leguminosas"  class="form-control input-md " readonly="redonly"/></td>
                                                              <td><input id='ingestadiaria_kc_rac_leguminosas' type="number" name="ingestadiaria_kc_rac_leguminosas"  class="form-control input-md " readonly="redonly"/></td>



                                                              <td>
                                                                <input type="number" id="ingestadiaria_rac2_lehuminosas" name="name" class="form-control input-md " readonly="redonly"/>
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_desayuno_lehuminosas" name="name" class="form-control input-md " />
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_colmat_lehuminosas" name="name" class="form-control input-md " />
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_comida_lehuminosas" name="name" class="form-control input-md " />
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_colvesp_lehuminosas" name="name" class="form-control input-md " />
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_cena_lehuminosas" name="name" class="form-control input-md " />
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_w_lehuminosas" name="name" class="form-control input-md " readonly="redonly"/>
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_info_lehuminosas" name="name" class="form-control input-md " readonly="redonly"/>
                                                              </td>
                                                          </tr>
                                                          <tr>
                                                              <td>Grasas</td>
                                                              <td><input type="number" id="ingestadiaria_rac_grasas" name="ingestadiaria_rac_grasas" min="0" class="form-control input-md " onchange="ingestadiaria_funcionHC_GRASAS(), ingestadiaria_funcionPROTE_GRASAS(), ingestadiaria_funcionLIPI_GRASAS(), ingestadiaria_funcionKC_GRASAS(), ingestadiaria_funcionTOTAL_HC(), ingestadiaria_funcionTOTAL_PROTEINAS(),ingestadiaria_funcionTOTAL_LIPIDOS(),ingestadiaria_funcionTOTAL_KC()"></td>
                                                              <td><input id='ingestadiaria_hc_rac_grasas' type="number" name="ingestadiaria_hc_rac_grasas"  class="form-control input-md " readonly="redonly"/></td>
                                                              <td><input id='ingestadiaria_prote_rac_grasas' type="number" name="ingestadiaria_prote_rac_grasas"  class="form-control input-md " readonly="redonly"/></td>
                                                              <td><input id='ingestadiaria_lipi_rac_grasas' type="number" name="ingestadiaria_lipi_rac_grasas"  class="form-control input-md " readonly="redonly"/></td>
                                                              <td><input id='ingestadiaria_kc_rac_grasas' type="number" name="ingestadiaria_kc_rac_grasas"  class="form-control input-md " readonly="redonly"/></td>



                                                              <td>
                                                                <input type="number" id="ingestadiaria_rac2_grasas" name="name" class="form-control input-md " readonly="redonly"/>
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_desayuno_grasas" name="name" class="form-control input-md "/>
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_colmat_grasas" name="name" class="form-control input-md "/>
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_comida_grasas" name="name" class="form-control input-md "/>
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_colvesp_grasas" name="name" class="form-control input-md "/>
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_cena_grasas" name="name" class="form-control input-md "/>
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_w_grasas" name="name" class="form-control input-md " readonly="redonly"/>
                                                              </td>
                                                              <td>
                                                                <input type="number" id="ingestadiaria_info_grasas" name="name" class="form-control input-md " readonly="redonly"/>
                                                              </td>

                                                          </tr>
                                                          <tr>
                                                              <td>Azucares</td>
                                                              <td><input type="number" id="ingestadiaria_rac_azucares" name="ingestadiaria_rac_azucares" min="0" class="form-control input-md " onchange="ingestadiaria_funcionHC_AZUCARES(), ingestadiaria_funcionPROTE_AZUCARES(), ingestadiaria_funcionLIPI_AZUCARES(), ingestadiaria_funcionKC_AZUCARES(), ingestadiaria_funcionTOTAL_HC(), ingestadiaria_funcionTOTAL_PROTEINAS(),ingestadiaria_funcionTOTAL_LIPIDOS(),ingestadiaria_funcionTOTAL_KC()"></td>

                                                  <td><input id='ingestadiaria_hc_rac_azucares' type="number" name="ingestadiaria_hc_rac_azucares"  class="form-control input-md " readonly="redonly"/></td>
                                                              <td><input id='ingestadiaria_prote_rac_azucares' type="number" name="ingestadiaria_prote_rac_azucares"  class="form-control input-md " readonly="redonly"/></td>
                                                              <td><input id='ingestadiaria_lipi_rac_azucares' type="number" name="ingestadiaria_lipi_rac_azucares"  class="form-control input-md " readonly="redonly"/></td>
                                                              <td><input id='ingestadiaria_kc_rac_azucares' type="number" name="ingestadiaria_kc_rac_azucares"  class="form-control input-md " readonly="redonly"/></td>




                                                              <td>
                                                                <input type="ingestadiaria_rac2_azucares" name="name" class="form-control input-md " readonly="redonly"/>
                                                              </td>
                                                              <td>
                                                                <input type="ingestadiaria_desayuno_azucares" name="name" class="form-control input-md " />
                                                              </td>
                                                              <td>
                                                                <input type="ingestadiaria_colmat_azucares" name="name" class="form-control input-md " />
                                                              </td>
                                                              <td>
                                                                <input type="ingestadiaria_comida_azucares" name="name" class="form-control input-md " />
                                                              </td>
                                                              <td>
                                                                <input type="ingestadiaria_colvesp_azucares" name="name" class="form-control input-md " />
                                                              </td>
                                                              <td>
                                                                <input type="ingestadiaria_cena_azucares" name="name" class="form-control input-md " />
                                                              </td>
                                                              <td>
                                                                <input type="ingestadiaria_w_azucares" name="name" class="form-control input-md " readonly="redonly"/>
                                                              </td>
                                                              <td>
                                                                <input type="ingestadiaria_info_azucares" name="name" class="form-control input-md " readonly="redonly"/>
                                                              </td>

                                                          </tr>
                                                          <tr>
                                                            <td><h3>TOTAL</h2></td>
                                                            <td></td>
                                                            <td><input id='ingestadiaria_total_hc' type="number" name="ingestadiaria_total_hc"  class="form-control input-md " readonly="redonly"/></td>
                                                            <td><input id='ingestadiaria_total_prote' type="number" name="ingestadiaria_total_prote"  class="form-control input-md " readonly="redonly"/></td>
                                                            <td><input id='ingestadiaria_total_lipi' type="number" name="ingestadiaria_total_LIPI"  class="form-control input-md " readonly="redonly"/></td>
                                                            <td><input id='ingestadiaria_total_kc' type="number" name="ingestadiaria_total_kc"  class="form-control input-md " readonly="redonly"/></td>



                                                            <td>

                                                            </td>
                                                            <td>
                                                              <input type="ingestadiaria_total_desayuno" name="name" class="form-control input-md " readonly="redonly"/>
                                                            </td>
                                                            <td>
                                                              <input type="ingestadiaria_total_colmat" name="name" class="form-control input-md " readonly="redonly"/>
                                                            </td>
                                                            <td>
                                                              <input type="ingestadiaria_total_comida" name="name" class="form-control input-md " readonly="redonly"/>
                                                            </td>
                                                            <td>
                                                              <input type="ingestadiaria_total_colvesp" name="name" class="form-control input-md " readonly="redonly"/>
                                                            </td>
                                                            <td>
                                                              <input type="ingestadiaria_total_cena" name="name" class="form-control input-md " readonly="redonly"/>
                                                            </td>
                                                            <td>
                                                              <input type="ingestadiaria_total_w" name="name" class="form-control input-md " readonly="redonly"/>
                                                            </td>
                                                            <td>

                                                            </td>
                                                          </tr>
                                                          <tr>
                                                            <td>

                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>
                                                              %

                                                            </td>
                                                            <td>
                                                              <input type="ingestadiaria_total_w" name="name" class="form-control input-md " readonly="redonly"/>

                                                            </td>
                                                            <td>
                                                              <input type="ingestadiaria_total_w" name="name" class="form-control input-md " readonly="redonly"/>

                                                            </td>
                                                            <td>
                                                              <input type="ingestadiaria_total_w" name="name" class="form-control input-md " readonly="redonly"/>

                                                            </td>
                                                            <td>
                                                              <input type="ingestadiaria_total_w" name="name" class="form-control input-md " readonly="redonly"/>

                                                            </td>
                                                            <td>
                                                              <input type="ingestadiaria_total_w" name="name" class="form-control input-md " readonly="redonly"/>

                                                            </td>
                                                            <td>
                                                              <input type="ingestadiaria_total_w" name="name" class="form-control input-md " readonly="redonly"/>

                                                            </td>
                                                            <td>

                                                            </td>
                                                          </tr>
                                                      </tbody>
                                                  </table>
                                                </form>
                                              </div>

                                        </div>





            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <script src="js/highcharts.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


    <script>

function desayuno(){

  var hc=  Number(document.getElementById("hc_porcentaje").value);
  var prote=Number(document.getElementById("prote_porcentaje").value);
  var lipi=Number(document.getElementById("lipi_porcentaje").value);
    $(function () {


    // Radialize the colors
    Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
        return {
            radialGradient: {
                cx: 0.5,
                cy: 0.3,
                r: 0.7
            },
            stops: [
                [0, color],
                [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
            ]
        };
    });

    // Build the chart
    $('#containerdesayuno').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'DESAYUNO'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    },
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: 'porcentaje',
            data: [
                { name: 'H DE C', y: hc },
                {
                    name: 'PROTEINAS',
                    y: prote,
                    sliced: true,
                    selected: true
                },
                { name: 'LIPIDOS', y: lipi }
                ]
        }]
    });
  });
}

</script>

<script>

function comida(){

var comida_hc_porcentaje=  Number(document.getElementById("comida_hc_porcentaje").value);
var comida_prote_porcentaje=Number(document.getElementById("comida_prote_porcentaje").value);
var comida_lipi_porcentaje=Number(document.getElementById("comida_lipi_porcentaje").value);
$(function () {


// Radialize the colors
Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
    return {
        radialGradient: {
            cx: 0.5,
            cy: 0.3,
            r: 0.7
        },
        stops: [
            [0, color],
            [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
        ]
    };
});

// Build the chart
$('#containercomida').highcharts({
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'COMIDA'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                },
                connectorColor: 'silver'
            }
        }
    },
    series: [{
        name: 'porcentaje',
        data: [
            { name: 'H DE C', y: comida_hc_porcentaje },
            {
                name: 'PROTEINAS',
                y: comida_prote_porcentaje,
                sliced: true,
                selected: true
            },
            { name: 'LIPIDOS', y: comida_lipi_porcentaje }
            ]
    }]
});
});
}

</script>


<script>

function cena(){

var hc=  Number(document.getElementById("cena_hc_porcentaje").value);
var prote=Number(document.getElementById("cena_prote_porcentaje").value);
var lipi=Number(document.getElementById("cena_lipi_porcentaje").value);
$(function () {


// Radialize the colors
Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
    return {
        radialGradient: {
            cx: 0.5,
            cy: 0.3,
            r: 0.7
        },
        stops: [
            [0, color],
            [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
        ]
    };
});

// Build the chart
$('#containercena').highcharts({
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'CENA'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                },
                connectorColor: 'silver'
            }
        }
    },
    series: [{
        name: 'porcentaje',
        data: [
            { name: 'H DE C', y: hc },
            {
                name: 'PROTEINAS',
                y: prote,
                sliced: true,
                selected: true
            },
            { name: 'LIPIDOS', y: lipi }
            ]
    }]
});
});
}

</script>

<script>

function total24horas(){

var t24H_hc_porcentaje=  Number(document.getElementById("t24H_hc_porcentaje").value);
var t24H_prote_porcentaje=Number(document.getElementById("t24H_prote_porcentaje").value);
var t24H_lipi_porcentaje=Number(document.getElementById("t24H_lipi_porcentaje").value);
$(function () {


// Radialize the colors
Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
    return {
        radialGradient: {
            cx: 0.5,
            cy: 0.3,
            r: 0.7
        },
        stops: [
            [0, color],
            [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
        ]
    };
});

// Build the chart
$('#containert24h').highcharts({
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'TOTAL 24 HORAS'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                },
                connectorColor: 'silver'
            }
        }
    },
    series: [{
        name: 'porcentaje',
        data: [
            { name: 'H DE C', y: t24H_hc_porcentaje },
            {
                name: 'PROTEINAS',
                y: t24H_prote_porcentaje,
                sliced: true,
                selected: true
            },
            { name: 'LIPIDOS', y: t24H_lipi_porcentaje }
            ]
    }]
});
});
}

</script>





</body>

</html>
