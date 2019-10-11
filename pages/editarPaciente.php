<!DOCTYPE html>
<html lang="es">

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
 <script type="text/javascript">
	$(document).ready(function (){
        $('#hemoglobina').on('keyup', function(){
            var valor = $('#hemoglobina').val();
           
            if(valor == 0){
              var mensaje1 = "ND";
            }else if(valor <= 11.9){
              var mensaje1 = "Bajo";
            }else if(valor = 12 && valor <=16){
            	var mensaje1 = "Normal";
            }else{
				var mensaje1 = "Alto";
            }
             $('#mensaje').text(mensaje1); 
           
        });
	});
	</script>
	 <script type="text/javascript">
	$(document).ready(function (){
        $('#hematocritos').on('keyup', function(){
            var valor = $('#hematocritos').val();
           
            if(valor == 0){
              var mensaje1 = "ND";
            }else if(valor <= 35.9){
              var mensaje1 = "Bajo";
            }else if(valor = 36 && valor <=47){
            	var mensaje1 = "Normal";
            }else{
				var mensaje1 = "Alto";
            }
             $('#mensaje2').text(mensaje1); 
           
        });
	});
	</script>
	 <script type="text/javascript">
	$(document).ready(function (){
        $('#leucocitos').on('keyup', function(){
            var valor = $('#leucocitos').val();
           
            if(valor == 0){
              var mensaje1 = "ND";
            }else if(valor <= 3999){
              var mensaje1 = "Bajo";
            }else if(valor = 4000 && valor <=11000){
            	var mensaje1 = "Normal";
            }else{
				var mensaje1 = "Alto";
            }
             $('#mensaje3').text(mensaje1); 
           
        });
	});
	</script>
	<script type="text/javascript">
	$(document).ready(function (){
        $('#glucosa').on('keyup', function(){
            var valor = $('#glucosa').val();
           
            if(valor == 0){
              var mensaje1 = "ND";
            }else if(valor <= 64.9){
              var mensaje1 = "Bajo";
            }else if(valor = 65 && valor <=110){
            	var mensaje1 = "Normal";
            }else{
				var mensaje1 = "Alto";
            }
             $('#mensaje4').text(mensaje1); 
           
        });
	});
	</script>
	<script type="text/javascript">
	$(document).ready(function (){
        $('#urea').on('keyup', function(){
            var valor = $('#urea').val();
           
            if(valor == 0){
              var mensaje1 = "ND";
            }else if(valor <= 13.9){
              var mensaje1 = "Bajo";
            }else if(valor = 14 && valor <=44){
            	var mensaje1 = "Normal";
            }else{
				var mensaje1 = "Alto";
            }
             $('#mensaje5').text(mensaje1); 
           
        });
	});
	</script>
	<script type="text/javascript">
	$(document).ready(function (){
        $('#aUrico').on('keyup', function(){
            var valor = $('#aUrico').val();
           
            if(valor == 0){
              var mensaje1 = "ND";
            }else if(valor <= 3.39){
              var mensaje1 = "Bajo";
            }else if(valor = 3.4 && valor <=66){
            	var mensaje1 = "Normal";
            }else{
				var mensaje1 = "Alto";
            }
             $('#mensaje6').text(mensaje1); 
           
        });
	});
	</script>
	<script type="text/javascript">
	$(document).ready(function (){
        $('#cratinina').on('keyup', function(){
            var valor = $('#cratinina').val();
           
            if(valor == 0){
              var mensaje1 = "ND";
            }else if(valor <= 0.49){
              var mensaje1 = "Bajo";
            }else if(valor = 0.5 && valor <=1.6){
            	var mensaje1 = "Normal";
            }else{
				var mensaje1 = "Alto";
            }
             $('#mensaje7').text(mensaje1); 
           
        });
	});
	
 
           
        });
	});
	</script>
	<script type="text/javascript">
	$(document).ready(function (){
        $('#albumina').on('keyup', function(){
            var valor = $('#albumina').val();
           
            if(valor == 0){
              var mensaje1 = "ND";
            }else if(valor <= 3.39){
              var mensaje1 = "Bajo";
            }else if(valor = 3.4 && valor <=5){
            	var mensaje1 = "Normal";
            }else{
				var mensaje1 = "Alto";
            }
             $('#mensaje9').text(mensaje1); 
           
        });
	});
	</script>
	<script type="text/javascript">
	$(document).ready(function (){
        $('#colesterol').on('keyup', function(){
            var valor = $('#colesterol').val();
           
            if(valor == 0){
              var mensaje1 = "ND";
            }else if(valor <= 139.9){
              var mensaje1 = "Bajo";
            }else if(valor = 140 && valor <=200){
            	var mensaje1 = "Normal";
            }else{
				var mensaje1 = "Alto";
            }
             $('#mensaje10').text(mensaje1); 
           
        });
	});
	</script>
	<script type="text/javascript">
	$(document).ready(function (){
        $('#trigliceridos').on('keyup', function(){
            var valor = $('#trigliceridos').val();
           
            if(valor == 0){
              var mensaje1 = "ND";
            }else if(valor <= 39.9){
              var mensaje1 = "Bajo";
            }else if(valor = 40 && valor <=160){
            	var mensaje1 = "Normal";
            }else{
				var mensaje1 = "Alto";
            }
             $('#mensaje11').text(mensaje1); 
           
        });
	});
	</script>
	<script type="text/javascript">
	$(document).ready(function (){
        $('#colesterol').on('keyup', function(){
            var valor = $('#colesterol').val();
           
            if(valor == 0){
              var mensaje1 = "ND";
            }else if(valor <= 139.9){
              var mensaje1 = "Bajo";
            }else if(valor = 140 && valor <=200){
            	var mensaje1 = "Normal";
            }else{
				var mensaje1 = "Alto";
            }
             $('#mensaje10').text(mensaje1); 
           
        });
	});
	</script>
	<script type="text/javascript">
	$(document).ready(function (){
        $('#bun').on('keyup', function(){
            var valor = $('#bun').val();
           
            if(valor == 0){
              var mensaje1 = "ND";
            }else if(valor <= 8.9){
              var mensaje1 = "Bajo";
            }else if(valor = 9 && valor <=20){
            	var mensaje1 = "Normal";
            }else{
				var mensaje1 = "Alto";
            }
             $('#mensaje12').text(mensaje1); 
           
        });
	});
	</script>
	<script>
     
    function suma(){
    var peso_actual = document.getElementById("peso_actual");
    var peso_habitual = document.getElementById("peso_habitual");
    var estatura = document.getElementById("estatura");
	var peso_teoricoI = 21.5 * (parseFloat(estatura.value) * parseFloat(estatura.value));
	var rangoinf = 18.5 * (parseFloat(estatura.value) * parseFloat(estatura.value));
	var rangosup = 24.9 * (parseFloat(estatura.value) * parseFloat(estatura.value));
    var calculo = parseFloat(peso_actual.value) / (parseFloat(estatura.value) * parseFloat(estatura.value));
    var pesoTeorico = (peso_teoricoI / parseFloat(peso_actual.value))*100;
    var pesoHab = (peso_teoricoI / parseFloat(peso_habitual.value))*100;
	var div = document.getElementById("resultado");
	var div2 = document.getElementById("q");
	var div3 = document.getElementById("resultado2");
	var div4 =document.getElementById("resultado3");
	var div5 =document.getElementById("resultado4")
	var div6=document.getElementById("resultado5");
	var div7=document.getElementById("resultado6");
	resultado6=pesoHab;
	div7.innerHTML=pesoHab;
	resultado5=pesoTeorico;
	div6.innerHTML=pesoTeorico;
	resultado4=rangosup;
	div5.innerHTML=rangosup;
    resultado3=rangoinf;
    div4.innerHTML = rangoinf;
	resultado = calculo;
	div.innerHTML= resultado;
	resultado2 = peso_teoricoI;
	div3.innerHTML=resultado2;
	
	
	
	if (calculo <=18.5){
	  div2.innerHTML= "Bajo peso";	
	}else if(calculo >= 18.6 && calculo <= 24.99){
		div2.innerHTML= "Normal";
	}else if(calculo >= 25.0 && calculo <= 29.9){
		div2.innerHTML= "Sobre peso";		
	}else if (calculo >= 30.0 && calculo <= 34.9){
		div2.innerHTML= "Obesidad grado 1";
	}else if (calculo >= 35.0 && calculo <= 39.9){
		div2.innerHTML= "Obesidad grado 2";
	}else if(calculo >= 40.0 && calculo <=1000){
		div2.innerHTML= "Obesidad grado 3";
	}
    }
	
    </script>
   <script>
     
    function icc(){
    var cintura = document.getElementById("cintura");
    var cadera = document.getElementById("cadera");
	var calculo = (parseFloat(cintura.value) / parseFloat(cadera.value));
	var div4 = document.getElementById("result");
		
	if (calculo >=0.8){
	  div4.innerHTML= "MUJER  CON DISTRIBUCION DE GRASA ANDROIDE";	
	}else if(calculo <= 0.79){
		div4.innerHTML= "MUJER CON DISTRIBUCION DE GRASA GINECOIDE";
	}
}
    
	
    </script> 
   
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
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="menu.php"><i class="fa fa-th-large"></i>Menú principal</a> 
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-top-links navbar-right">  
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['nombre']; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i>Cerrar sesión</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse"><br>
                
                <ul class="nav navbar-nav side-nav">
                <li class="sidebar-search">
                  
                    <!-- /input-group -->
                </li>
                  
                    <li>

                        <a href="#datospersonales"><i class="fa fa-fw fa-edit"></i> Datos personales</a>

                    </li>
                    <li>
                        <a href="#ahf"><i class="fa fa-fw fa-bar-chart-o"></i> A.H.F</a>
                    </li>
                    <li>
                        <a href="#paraclinicos"><i class="fa fa-fw fa-table"></i> paraclinicos</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-edit"></i> Recordatorio 24 horas</a>
                    </li>
                    <li >
                        <a href="#valoracion"><i class="fa fa-fw fa-table"></i>Valoración y DX</a>
                    </li>
                   
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
            <div class="col-lg-6">
			    <a name="datospersonales"></a>
              <div class="table-responsive">
  
		 <br><br><br> <br><br>
		 <table  class="table table-hover">
                  <div class="input-group custom-search-form"><form action="editarPaciente.php" method="POST">
                        <input type="text" name="NSS" class="form-control" placeholder="Ingrese NSS para editar paciente">
                                    <span class="input-group-btn">
                                    <button class="btn btn-default" name="buscar" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button> 
                                </span>
                                </form>
                    </div><?php if( isset($row) ) : ?>
		         <CAPTION><h3>Datos personales</h3></CAPTION>
		        <tbody>
		        
				
         
                 <tr class='warning'>
					<td>
						<label >Nombre: </label>
					</td>
					<td>
						<input type='text' class='form-control' value='<?= $row["nombre"] ?>' name='nombre' placeholder='Escribe el nombre..' size='3' autofocus='autofocus' required />
					</td>
				</tr>
                
                     
       
		
				<tr class='warning'>
					<td>
						<label >Apellido Paterno:</label>
					</td>
					<td>
						<input type='text' class='form-control' value ='<?= $row["a_paterno"] ?>' name='a_paterno' placeholder='Apellido Paterno' size='30'/>
					</td>
				</tr>
         
				<tr class='warning'>
					<td>
						<label>Apellido Materno</label>
					</td>
					<td>
						<input type='text' id='a_materno' name='a_Paterno' value ='<?= $row["a_materno"] ?>' class='form-control' placeholder='Apellido Paterno' size='30'/>
					</td>
				</tr >

                    
				<tr class='warning'>
					<td>
						<label>NSS:</label>
					</td>
					<td>
						<input type='text' id='NSS' value ='<?= $row["NSS"] ?>' name ='NSS' placeholder='11 digitos' class='form-control' maxlength='11' size='10' required />
					</td>
				</tr>
            
				<tr class='warning'>
					<td>
						<label>Fecha de nacimiento:</label>
					</td>
					<td>
						<input type='date' id='fecha' class='form-control' name='fecha_nacimiento' value='<?= $row["fecha_nacimiento"] ?>' required />
					</td>
				</tr>
                
			
                <tr class='warning'>
                    <td>
                        <label>Sexo:</label>
                    </td>
                    <td>
                        <input type='date' id='fecha' class='form-control' name='sexo' value='<?= $row["sexo"] ?>' disabled />
                    </td>
                </tr>
				
				
				
				
				<tr class="success">
					<td>
						<label>Escolaridad:</label>
						 
					</td>
					<td>
							<select class="form-control" name="escolaridad" required>
							 
						     <option value="primaria">Pimaria</option>
							 <option value="secundaria">Secundaria</option>
							 <option value="bachillerato">Bachillerato</option>
							 <option value="tecnico">Tecnico</option>
							 <option value="profesional">Profesional</option>
						 </select>
					</td>
				</tr>
				<tr class="success">
					<td>
						<label>Ocupación</label>
					</td>
					<td>
						<input type='text' id='ocupacion' name="ocupacion" class="form-control" value='<?= $row["ocupacion"] ?>' placeholder="ocupacion" size="30"/>
					</td>
				</tr>
				<tr class="success">
					<td>
						<label>No. de integrantes de la familia</label>
					</td>
					<tr class="success">
							<td>Adultos <input name="adultos" type='number' value='<?= $row["adultos"] ?>' id='peso_corregido'  min="0" max="50" step="1" class="form-control"  size="2"  required /></td>
					        <td>Menores <input name="menores" type='number' id='peso_corregido'  value='<?= $row["menores"] ?>' min="0" max="50" step="1" class="form-control"  size="2"  required /></td>
					</tr>
				</tr>
				<tr class="success">
					<td>
						<label>Factores que intervienen</label>
					</td>
					<td>
							<select class="form-control" name="ejercicio" required>
							 <option selected>Ejercicio</option>
						     <option value="si">Si</option>
							 <option value="no">No</option>
							 </select>
					
					</td>
				</tr>
           </tbody>				
	       
            </div>
            <!-- /.container-fluid -->

        </div>

<div class="table-responsive">
             
			 <table align="center" class="table table-bordered table-hover"><a name="ahf"></a> <br><br><br><br><br><CAPTION><h3>Antecedentes personales</h3></CAPTION>
  <tbody>
    <tr class="success">
      <th>Nutricionales </th>
      <th>Patologico </th>
      <th>Hereditario </th>
      <th>Otros  </th>
    </tr>
	
	<tr class="active">
      <td><label>Bajo peso <br><input value ="Bajo peso" type="checkbox" name="checkbox[]" /></label></td>
      <td><label>Hipertenciòn<br><input value ="Hipertenciòn"  type="checkbox" name="checkbox[]" /></label></td>
      <td><label>Cancer <br><input value ="Cancer" type="checkbox" name="checkbox[]" /></label></td>
	  <td><label>Alcoholismo<br><input value ="Alcoholismo" type="checkbox"  name="checkbox[]" /></label></td>
    </tr class="active">
    
	<tr class="active">
      <td><label>Sobre peso<br><input value ="Sobre peso"  type="checkbox" name="checkbox[]" /></label> </td>
      <td><label>Diabetes<br> <input value ="Diabetes"  type="checkbox" name="checkbox[]"/></label> </td>
      <td><label>Gastritis <br><input value ="Gastritis" type="checkbox" name="checkbox[]" /></label></td>
	  <td><label>Tabaquismo <br><input value ="Tabaquismo" type="checkbox" name="checkbox[]"/></label></td>
    </tr>
	<tr class="active">
      <td><label>Desnutriciòn <br><input value ="Desnutriciòn" type="checkbox" name="checkbox[]"/> </label></td>
      <td><label>Cardiopatias<br><input value ="Cardiopatias" type="checkbox" name="checkbox[]"/></label></td>
	  <td><label>Colitis<br> <input value ="Colitis" type="checkbox" name="checkbox[]"/></label></td>
      <td><label>Alergias<br><input value ="Alergias" type="checkbox" name="checkbox[]"/></label></td>
    </tr>
	<tr class="active">
      <td><label>Obesidad<br> <input value ="Obesidad" type="checkbox" name="checkbox[]"/></label> </td>
      <td><label>Nefropatias<br><input value ="Nefropatias" type="checkbox" name="checkbox[]"/></label></td>
	  <td></td>
      <td><label>Alergico a medicamentos<br><input class="form-control" placeholder="Especificar medicamento" type="text" name="alergias" /></label></td>
    </tr >
              
  </tbody>
	</table>	

            </div>



            <div class="row">
			  <a name="paraclinicos"></a><br><br><br> <br><br><br><br>
			    <h3>Perfil hematologíco</h3>
                 <div class="table-responsive">
                
       					<table class="table table-bordered table-hover">
                                 
								<thead>
                                    <tr class="active">
                                        <th></th>
                                        <th></th>
                                        <th></th>
										<th>Resultado</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="success"> 
                                        <td>Hemoglobina</td>
                                        <td>12.0-16.0 <i>g/dl</i></td>
                                        <td><input class="form-control" type="num" id="hemoglobina" name="hemoglobina" size="1"  /></td>
                                        <td><div id="mensaje"></div></td>
                                    </tr>
                                    <tr class="success">
                                        <td>Hematocritos</td>
                                        <td>36.0-47 <i>%</i></td>
                                        <td><input class="form-control" type="num" name="hematrocritos" id="hematocritos" size="1" /></td>
                                        <td><div id="mensaje2"></div></td>
                                    </tr >
                                    <tr class="success">
                                        <td>Leucocitos</td>
                                        <td>4000-11200 <i>cel/mm</i></td>
                                        <td><input class="form-control" type="num" name="p3" id="leucocitos" name="leucocitos" size="1" /></td>
                                        <td><div id="mensaje3"></div></td>
                                    </tr>
                                   
                                    
                                </tbody>
                            </table>
							<h3>Perfil bioquimico</h3>
                         <table class="table table-bordered table-hover">
                                <thead>
                                    <tr class="active">
                                        <th></th>
                                        <th></th>
                                        <th></th>
										<th>Resultado</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="success">
                                        <td>Glucosa</td>
                                        <td>65-110 <i>mg/dl</i></td>
                                        <td><input class="form-control" type="num" name="glucosa" id="glucosa" size="1" /></td>
                                        <td><div id="mensaje4"></div></td>
                                    </tr>
                                    <tr class="success">
                                        <td>Urea</td>
                                        <td>14.0-44 <i>mg/dl</i></td>
                                        <td><input class="form-control" type="num" name="urea" id="urea" size="1" /></td>
                                        <td><div id="mensaje5"></div></td>
                                    </tr>
                                    <tr class="success">
                                        <td>Acido urico</td>
                                        <td>3.4-7.0 <i>mg/dl</i></td>
                                        <td><input class="form-control" type="num" name="aUrico" id="aUrico" size="1" /></td>
                                        <td><div id="mensaje6"></div></td>
                                    </tr>
									<tr class="success">
                                        <td>Cratinina</td>
                                        <td>0.5-1.6 <i>mg/dl</i></td>
                                        <td><input class="form-control" type="num" name="cratinina" id="cratinina" size="1" /></td>
                                        <td><div id="mensaje7"></div></td>
                                    </tr>
                                   
                                    
                                </tbody>
                            </table>
                             <h3>Proteinas</h3>
                         <table class="table table-bordered table-hover">
                                <thead>
                                    <tr class="active">
                                        <th></th>
                                        <th></th>
                                        <th></th>
										<th>Resultado</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="success">
                                        <td>Proteinas totales</td>
                                        <td> 	6.4-8.3 <i>g/dl</i></td>
                                        <td><input class="form-control" type="num" name="pTotales" id="pTotales" size="1" /></td>
                                        <td><div id="mensaje8"></div></td>
                                    </tr>
                                    <tr class="success">
                                        <td>Albumina</td>
                                        <td>3.4- 5.0 <i>g/dl</i></td>
                                        <td><input class="form-control" type="num" name="albumina" id="albumina" size="1" /></td>
                                        <td><div id="mensaje9"></div></td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3>Perfil de lipidos</h3>
                         <table class="table table-bordered table-hover">
                                <thead>
                                    <tr class="active">
                                        <th></th>
                                        <th></th>
                                        <th></th>
										<th>Resultado</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="success">
                                        <td>Colesterol</td>
                                        <td>1400-600mg <i>mg/dl</i></td>
                                        <td><input class="form-control" type="num" name="colesterol" id="colesterol" size="1" /></td>
                                        <td><div id="mensaje10"></div></td>
                                    </tr>
                                    <tr class="success">
                                        <td>Trigliceridos</td>
                                        <td>40-160 <i>mg/dl</i></td>
                                        <td><input class="form-control" type="num" name="trigliceridos" id="trigliceridos" size="1" /></td>
                                        <td><div id="mensaje11"></div></td>
                                    </tr>
                                </tbody>
                            </table>
                             <h3>Especiales</h3>
                         <table class="table table-bordered table-hover">
                                <thead>
                                    <tr class="active">
                                        <th></th>
                                        <th></th>
                                        <th></th>
										<th>Resultado</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="success">
                                        <td>Bun</td>
                                        <td>9.0-20 <i>mg/dl</i></td>
                                        <td><input class="form-control" type="num" name="bun" id="bun" size="1" /></td>
                                        <td><div id="mensaje12"></div></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                            						
		  				
		  

                 </div>

            <!-- /.container-fluid -->
           </div>
              <!-- /#page-wrapper -->

    </div>

    </div>
	<div class="row">
            <div class="col-lg-6">
			   <a name="valoracion"></a> <br><br><br> <br><br><br><br>
              <div class="table-responsive">

		 
		 <h3>Valoracion y DX</h3>
		 <table  class="table table-hover">
		        <tbody>
				<tr class="active">
					<td>
						<label>Peso actual:</label>
					</td>
					<td>
						
						<input onblur="if(this.value == ''){this.value='0'}"  onKeyUp="suma();" type="text" id="peso_actual" class="form-control" value='<?= $row["peso_actual"] ?>' placeholder="Peso en KG">
					</td>
				</tr>
				<tr class="active">
					<td>
						<label>Peso habitual:</label>
					</td>
					<td>
						<input onblur="if(this.value == ''){this.value='0'}"  onKeyUp="suma();" type='number' class="form-control" size="3"  id='peso_habitual' name="peso_habitual" placeholder="Peso en KG" value='<?= $row["peso_habitual"] ?>' step="any" required/>
				</tr>
				<tr class="active">
					<td>
						<label>Peso teórico ideal:</label>					 
					</td>
					<td>
						<b><div id="resultado2"></div>	
					</td>
				</tr>
				<tr class="active">
					<td>
						<label>Estatura:</label>
					</td>
					<td>
					
						<input onblur="if(this.value == ''){this.value='0'}" onKeyUp="suma();" value='<?= $row["estatura"] ?>' class="form-control" type="text" id="estatura" value="" placeholder="Estatura en MTS">
					</td>
				</tr>
				<tr class="active">
					<td>
						<label>Cintura:</label>
					</td>
					<td>
						<input onblur="if(this.value == ''){this.value='0'}" onKeyUp="icc();"  type='number' id="cintura" name ="cintura" placeholder="Tamaño cintura en CM" class="form-control" value='<?= $row["cintura"] ?>' size="10" required />
					</td>
				</tr>
				<tr class="active">
					<td>
						<label>Cadera:</label>
					</td>
					<td>
						<input onblur="if(this.value == ''){this.value='0'}" onKeyUp="icc();" value='<?= $row["cadera"] ?>' type='number' id='cadera' class="form-control" name="cadera" placeholder="Tamaño cadera en CM" required />
					</td>
				</tr>
				
				<tr class="active">
					<td>
						<label>Perimetro abdominal: </label>
					</td>
					<td>
						<input type='number' class="form-control" size="3" value='<?= $row["perimetro_abdominal"] ?>' id='perimetro_abd' name="perimetro_abd" placeholder="Perimetro abdominal en CM"  step="any" required/>
				</tr>
				<tr class="active">
					<td>
						<label>Circunferencia muñeca:</label>
					</td>
					<td>
						<input type='number' id='circ_muñeca' name="circ_muñeca" value='<?= $row["circunferencia_muneca"] ?>' class="form-control"   size="3" placeholder="Tamaño muñeca en CM"  required />
					</td>
				</tr>
				<tr class="active">
					<td>
						<label >IMC: </label>
					</td>
					<td>
						 <b> <div id="resultado"></div>
					</td>
					
				</tr>
				
				<tr class="active">
					<td>
						<label >P.P.C.I:</label>
					</td>
					<td>
						<input type='text' class="form-control" name="ppci"  readonly />
					</td>
				</tr>
				<tr class="active">
					<td>
						<label>Clasificación: </label>
					</td>
					<td>
						<b><div id="q">
					</td>
				</tr >
				
				<tr class="active">
					<td>
		    		<label>I.C.C:</label>
					</td>
					<td>
			  		<b><div id="result"></div>
					 </td>
				</tr>			
				<tr class="active">
					<td>
						<label>Rango inferior:</label>					 
					</td>
					<td>
						<b><div id="resultado3"></div>
					</td>
				</tr>
				<tr class="active">
					<td>
						<label>Rango superior:</label>					 
					</td>
					<td>
					<b><div id="resultado4"></div>
					</td>
				</tr>	
				<tr class="active">
					<td>
						<label>Peso teórico:</label>					 
					</td>
					<td>
						<b><div id="resultado5"></div>	
					</td>
				</tr>	
				<tr class="active">
					<td>
						<label>Peso habitual:</label>					 
					</td>
					<td>
						<b><div id="resultado6"></div>
					</td>
				</tr>
		<td></td>
					<td><form action="salir.php">
						<button type="submit" class="btn btn-lg btn-primary">Enviar datos</button>
					</td></form>
				</tr>

<?php elseif(!empty($NSS)) : ?>

             <h2>El paciente no existe en la base de datos</h2>

        <?php endif; ?>

</tbody>				
	        
             
             
            </div>
	</div>

    <!-- /#wrapper -->
    <script src="js/jquery.js"></script>
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>