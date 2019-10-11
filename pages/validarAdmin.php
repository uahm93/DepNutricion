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
    
    $admin= $_POST['admin'];
    $pw= $_POST['pw'];
    $consultas = $conect->query("SELECT * FROM administradores WHERE admin='$admin' AND pw='$pw' ");

    if($resultado = mysqli_fetch_array( $consultas)){

        $_SESSION['admin'] = $resultado['admin'];
        $_SESSION['nombre'] = $resultado['nombre'];
       echo "<script>window.location='administrador.php';</script>"; 
    	

    }
    else{
           echo"<script type=\"text/javascript\">alert('Usuario o ontraseña incorrectos'); window.location='index.php';</script>";

    }






}

  ?>

</body>
</html>