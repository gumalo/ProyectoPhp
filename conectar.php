<?php

$servidor = "database-1.cltrtfvhf7dx.eu-west-3.rds.amazonaws.com:3306";
$usuario = "admin";
$clave = "FnEFZfFE2MQ3Znk9tpPF";

$mysqli = @mysqli_connect($servidor,$usuario,$clave);
if (mysqli_connect_errno($mysqli)){
    echo ("Fallo al conectar a Mysql: ".mysqli_connect_errno($mysqli)." ".
        mysqli_connect_error($mysqli));
}

mysqli_select_db($mysqli,"proyectophp");

?>
