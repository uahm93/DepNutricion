<?php
      
     echo "<meta charset='utf-8'>";
	 $nombre=$_POST['nombre'];
     $a_paterno=$_POST['a_paterno'];
     $a_materno=$_POST['a_materno'];
     $clave=$_POST['clave'];
     $pw=$_POST['pw'];
	 
         if ($_POST["pw1"]!=$_POST["pw"]) {
              echo "<script type=\"text/javascript\">alert('Las contraseñas no coinciden'); window.location='administrador.php';</script>";
              }
			  else{
		 include("servidor.php");
             if($comparar=$conect->query("SELECT * FROM doctores WHERE clave='$clave' and nombre='$nombre'"))
			     {
					 $almacenar=$comparar->num_rows;
					 $comparar->free();
					 if($almacenar>0)
					 {   
						 
						 
						   echo"<script type=\"text/javascript\">alert('El numero de empleado o usuario ya existen, intenta con otro'); window.location='administrador.php';</script>";
						 
					 }else
					    {
							  $consultas = $conect->query("INSERT INTO doctores (nombre,a_materno,a_paterno,clave,pw)
			                 VALUES ('$nombre','$a_materno','$a_paterno','$clave','$pw')");
							  echo"<script type=\"text/javascript\">alert('Se ha agregado el empleado correctamente'); window.location='administrador.php';</script>";
							 
						}
				 }
			  }

   //if($resultado = mysqli_fetch_array( $consultas))
     	
?>