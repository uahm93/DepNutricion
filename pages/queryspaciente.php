<?php

$nombre=$_POST['nombre'];
$a_paterno=$_POST['a_paterno'];
$a_materno=$_POST['a_materno'];
$NSS=$_POST['NSS'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$sexo=$_POST['sexo'];
$escolaridad=$_POST['escolaridad'];
$ocupacion=$_POST['ocupacion'];
$adultos=$_POST['adultos'];
$menores=$_POST['menores'];
$fecha_consulta=$_POST['fecha_consulta'];
$ejercicio=$_POST['ejercicio'];
$hemoglobina=$_POST['hemoglobina'];
$hematrocritos=$_POST['hematrocritos'];
$leucocitos=$_POST['leucocitos'];
$glucosa=$_POST['glucosa'];
$urea=$_POST['urea'];
$aUrico=$_POST['aUrico'];
$cratinina=$_POST['cratinina'];
$pTotales=$_POST['pTotales'];
$albumina=$_POST['albumina'];
$colesterol=$_POST['colesterol'];
$trigliceridos=$_POST['trigliceridos'];
$bun=$_POST['bun'];
$peso_actual=$_POST['peso_actual'];
$peso_habitual=$_POST['peso_habitual'];
$estatura=$_POST['estatura'];
$cintura=$_POST['cintura'];
$cadera=$_POST['cadera'];
$perimetro_abdominal=$_POST['perimetro_abdominal'];
$circunferencia_muneca=$_POST['circunferencia_muneca'];


include("servidor.php");
include("validarDoc.php");
$elaboro= $_SESSION['nombre'].$_SESSION['a_paterno'].$_SESSION['a_materno'];
   $consulta1 = $conect->query("INSERT INTO datos_generales (id_dg, nombre,  a_paterno, a_materno, fecha_nacimiento, sexo, escolaridad, ocupacion, adultos, menores, NSS, fecha_consulta,elaboro)
			VALUES (NULL,'$nombre', '$a_paterno','$a_materno','$fecha_nacimiento','$sexo','$escolaridad','$ocupacion','$adultos','$menores','$NSS', '$fecha_consulta', '$elaboro')");
   $ultimo =mysqli_insert_id($conect);
      echo $ultimo;
          
   $consulta2 = $conect->query("INSERT INTO evaluacion_bioquimica(id_eb, id_dg, hemoglobina, hematrocritos, leucocitos, glucosa, urea, aUrico, cratinina, pTotales, albumina, colesterol, trigliceridos, bun)
         VALUES (NULL, '$ultimo', '$hemoglobina','$hematrocritos','$leucocitos','$glucosa','$urea','$aUrico','$cratinina','$pTotales','$albumina','$colesterol','$trigliceridos','$bun')");
   
  

   $consulta3 = $conect->query("INSERT INTO historico_dp (id_historico_dp, peso_actual, peso_habitual, estatura, cintura, cadera, perimetro_abdominal, circunferencia_muneca, id_dg)
   	    VALUES (NULL, '$peso_actual','$peso_habitual','$estatura','$cintura','$cadera','$perimetro_abdominal','$circunferencia_muneca','$ultimo')");

echo"<script type=\"text/javascript\">alert('Se ha completado el registro correctamente'); window.location='paciente.php';</script>";






?>