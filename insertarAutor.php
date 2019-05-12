<?php

require ("conectar.php");

$nombre=$_REQUEST["nomAutor"];
$apellidos=$_REQUEST["apeAutor"];
$fechaNac=$_REQUEST["fechaNacAutor"];

$consulta ="INSERT INTO `autor` (`id`, `nombre`, `apellidos`, `fechaNac`) VALUES (NULL, '$nombre', '$apellidos', '$fechaNac')";
    
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