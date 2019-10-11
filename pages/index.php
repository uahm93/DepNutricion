<?php
session_start();
include ("servidor.php");
if(isset($_SESSION['clave'])){
	echo "<script>window.location='menu.php';</script>"; 
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>IMSS</title>
	    <link rel="shortcut icon" type="image/x-icon" href="../imagenes/favicon.ico" />
        <link rel="stylesheet" href="../css/style.css">
        <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
 
<body>
	
    
	<header id="main-header">
		
		<a id="logo-header">
			<span class="site-desc"> </span>
			<span class="site-desc"></span>
		</a> <!-- / #logo-header -->
 
		<nav>
			<ul>
				<li><a href=""><font color="#696969"><i class="fa  fa-home  fa"></i> Inicio</a></li>  
				<li><a href="loginadmin.php"><font color="#696969"><i class="fa  fa-cog  fa"></i> Administrador</font></a></li>
				</font>
			</ul>
		</nav><!-- / nav -->
 
	</header><!-- / #main-header -->
<br><br><br><br>
   
    <h5>HOSPITAL GENERAL REGIONAL 36<BR>
        DEPARTAMENTO DE NUTRICIÓN Y DIETÉTICA </h5>
   
	
	
	
	<div id="wrapper">
          
	<form name="login-form" class="login-form" action="validarDoc.php" method="POST">
	
		<div class="header">
		
		<img src='../imagenes/24.png' width='250' height='90'>
		
		</div>
	
		<div class="content">
		<input name="clave" type="text" class="input username" placeholder="Usuario" />
		<div class="user-icon"></div>
		<input name="pw" type="password" class="input password" placeholder="Contraseña" />
		<div class="pass-icon"></div>		
		</div>

		<div class="footer">
		<input type="submit" name="entrar" value="Ingresar" class="button" /> 
		</a>
		</div>
	
	</form>

</div>
<div class="gradient"></div>
 
 
 
    <footer id="main-footer">
       <P ALIGN=left> <br> 
			      
                
			</p>	
				<P ALIGN=right> <i>Sitio desarrollado por Alumnos de la Benemerita Universdad Autonoma de Puebla 
	                              <br>Ulises Antonio Hernandez Mendoza
                                  <br>Miguel Xilotzingo T.</i> </p>  
       
    </footer>
	
</body>
</html>