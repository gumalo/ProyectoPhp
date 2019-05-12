<?php

require ("conectar.php");

$consulta ="CREATE DATABASE IF NOT EXISTS proyectophp;";

if (!$resultado = $mysqli->query($consulta))
{
    echo ("Lo sentimos la instrucción de BBDD ha fallado debido a: <br>");
    echo ("Query: $consulta <br>");
    echo ("Error_numero: ". $mysqli->errno . "<br>");
    echo ("Error: ". $mysqli->error . "<br>");
    exit;
}

mysqli_select_db($mysqli,"proyectophp");

$consulta = "CREATE TABLE IF NOT EXISTS `autor` 
(
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `nombre` char(25) NOT NULL,
  `apellidos` char(50) NOT NULL,
  `fechaNac` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;";

if (!$resultado = $mysqli->query($consulta))
{
    echo "Error en la ejecución debido a: <br>";
    echo "query: ". $consulta;
    echo "Num error: ".$mysqli->errno." <br>";
    echo "Error: ".$mysqli->error." <br>";
    die("Fallo");
}


$consulta = "CREATE TABLE IF NOT EXISTS `libro` 
(
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `titulo` char(25) NOT NULL,
  `fechaPubl` date NOT NULL,
  `editorial` char(25) NOT NULL,
  `idAutor` int(11) NOT NULL,
  CONSTRAINT `autorLibro` FOREIGN KEY (`idAutor`) REFERENCES `autor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;";

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
