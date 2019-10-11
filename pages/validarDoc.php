<?php
session_start();
?>
<<!DOCTYPE html>
<html>
<head>
	<title>Validando...</title>
	<meta charset="utf-8">
</head>
<body>
  <?php
include ("servidor.php");
if(isset($_POST['entrar'])){
    
    $clave= $_POST['clave'];
    $pw= $_POST['pw'];
    $consultas = $conect->query("SELECT * FROM doctores WHERE clave='$clave' AND pw='$pw' ");

    if($resultado = mysqli_fetch_array( $consultas)){

        $_SESSION['clave'] = $resultado['clave'];
        $_SESSION['nombre'] = $resultado['nombre'];
        $_SESSION['a_paterno'] = $resultado['a_paterno'];
        $_SESSION['a_materno'] = $resultado['a_materno'];
        echo "<script>window.location='menu.php';</script>"; 
    	

    }
    else{
           echo"<script type=\"text/javascript\">alert('Usuario o ontraseña incorrectos'); window.location='index.php';</script>";

    }
}

  ?>

</body>
</html>