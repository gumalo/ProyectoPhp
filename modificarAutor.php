<?php

require ("conectar.php");

$id=$_REQUEST["idAutor"];
$nombre=$_REQUEST["nomAutor"];
$apellidos=$_REQUEST["apeAutor"];
$fechaNac=$_REQUEST["fechaNacAutor"];

$consulta ="UPDATE `autor` SET `nombre` = '$nombre', `apellidos` = '$apellidos', `fechaNac` = '$fechaNac' WHERE `id` = '$id'";

$resultado=$mysqli->query($consulta);
    
if (!$resultado=$mysqli->query($consulta))
{
  echo "Lo sentimos. La Aplicación no funciona<br>";
  echo "Error. en la consulta: ".$consulta."<br>";
  echo "Num.error: ".$mysqli->errno."<br>";
  echo "Error: ".$mysqli->error. "<br>";
  exit;
} 
else
{
  echo "Consulta realizada con éxito";
}

echo ("<br><a href='opcionesAutor.php'>VOLVER</a>");

header("Location: opcionesAutor.php");

?>