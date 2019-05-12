<?php

require ("conectar.php");

$consulta = "INSERT INTO `autor` (`id`, `nombre`, `apellidos`, `fechaNac`) VALUES 
    (NULL, 'Nieves', 'Herrero', '1968-06-06'), 
    (NULL, 'Matilde', 'Asensi', '1976-08-26'),
    (NULL, 'Albert', 'Espinosa', '1973-02-20'),
    (NULL, 'Paloma', 'Sánchez-Garnica', '1962-05-13'),
    (NULL, 'Nuria', 'Labari', '1982-08-09'),
    (NULL, 'Javier', 'Jorge', '1980-10-01'),
    (NULL, 'María', 'Reig', '1970-03-28'),
    (NULL, 'Luis', 'Landero', '1948-11-12'),
    (NULL, 'Elvira', 'Sastre', '1992-06-30'),
    (NULL, 'Cristina', 'Cerrada', '1972-08-02');";

if (!$resultado = $mysqli->query($consulta))
{
    echo "Error en la ejecución debido a: <br>";
    echo "query: ". $consulta;
    echo "Num error: ".$mysqli->errno." <br>";
    echo "Error: ".$mysqli->error." <br>";
    die("Fallo");
}


$consulta = "INSERT INTO `libro` (`id`, `titulo`, `fechaPubl`, `editorial`, `idAutor`) VALUES 
    (NULL, 'Esos días azules', '2019-03-11', 'S.A Ediciones B', '1'),
    (NULL, 'Corazón de indio', '2010-05-17', 'S.L.U. Espasa Libros', '1'),
    (NULL, 'Hubiera un mañana', '2015-11-05', 'La Esfera de los Libros', '1'),
    (NULL, 'Sakura', '2019-01-25', 'La Esfera de los Libros', '2'),
    (NULL, 'El último catón', '2015-02-15', 'Planeta', '2'),
    (NULL, 'Tú no matarás', '2018-12-02', 'Plaza & Janes Editores', '3'),
    (NULL, 'El mundo azul. Ama tu caos', '2016-10-19', 'Debolsillo', '4'),
    (NULL, 'La sospecha de Sofía', '2019-04-04', 'Planeta', '5'),
    (NULL, 'El gran arcano', '2018-07-28', 'Planeta', '5'),
    (NULL, 'La mejor madre del mundo', '2019-03-29', 'Literatura Random House', '6'),
    (NULL, 'La última raya', '2010-09-18', 'Autor-Editor', '7'),
    (NULL, 'La vida negociable', '2018-02-01', 'Tusquets Editores', '9'),
    (NULL, 'El balcón en invierno', '2014-04-11', 'Tusquets Editores', '9'),
    (NULL, 'Ya nadie baila', '2015-09-01', 'Valparaiso Ediciones S.L.', '10'),
    (NULL, 'Aquella orilla nuestra', '2018-12-21', 'Alfaguara', '10'),
    (NULL, '43 maneras de cortarse el pelo', '2018-10-06', 'Valparaiso Ediciones S.L.', '10');";

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
