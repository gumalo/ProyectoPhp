<?php

require ("conectar.php");

$consulta = "DROP DATABASE IF EXISTS `proyectophp`";

if (!$resultado = $mysqli->query($consulta))
{
    echo "Error en la ejecución debido a: <br>";
    echo "query: ". $consulta;
    echo "Num error: ".$mysqli->errno." <br>";
    echo "Error: ".$mysqli->error." <br>";
    die("Fallo");
}

header("Location: opcionesBBDD.php");
?>
