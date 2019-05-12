<?php

require ("conectar.php");

$consulta = "DELETE FROM `libro` WHERE `id` = ".$_REQUEST['radio'];

$resultado = $mysqli->query($consulta);
    
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

header("Location: opcionesLibro.php");

?>