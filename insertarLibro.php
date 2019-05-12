<?php

require ("conectar.php");

$titulo=$_REQUEST["titLibro"];
$fechaPubl=$_REQUEST["fechaPublLibro"];
$editorial=$_REQUEST["editLibro"];
$idAutor=$_REQUEST["radio"];

$consulta ="INSERT INTO `libro` (`id`, `titulo`, `fechaPubl`, `editorial`, `idAutor`) VALUES (NULL, '$titulo', '$fechaPubl', '$editorial', '$idAutor');";
    
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

echo ("<br><a href='opcionesLibro.php'>VOLVER</a>");

header("Location: opcionesLibro.php");

?>