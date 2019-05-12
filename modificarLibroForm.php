<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="myHOME - real estate template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/single.css">
    <link rel="stylesheet" type="text/css" href="styles/single_responsive.css">
    <title>Libros</title>
</head>

<body>

<div class="super_container">
    <div class="super_overlay"></div>

    <header class="header">
        <div class="header_content d-flex flex-row align-items-center justify-content-start">
            <div class="logo"><a href="index.php">book<span>database</span></a></div>
            <nav class="main_nav">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="opcionesLibro.php">Libros</a></li>
                    <li><a href="opcionesAutor.php">Autores</a></li>
                    <li><a href="opcionesBBDD.php">BBDD</a></li>
                </ul>
            </nav>
            <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
        </div>
    </header>

    <div class="search">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="search_container">
                        <div class="search_form_container">
                            <form action="#" class="search_form" id="search_form">
                                <div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
                                    <label class="col-form-label-sm text-white" for="idLibro" style="font-size: 20px">ID:</label>
                                    <input class="search_input" type="text" name="idLibro" id="idLibro" style="width: 2000px; margin-left: 20px" value="<?php echo $_REQUEST['radio']; ?>" readonly/>
                                </div>
                                <br>
                                <div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
                                    <label class="col-form-label-sm text-white" for="titLibro" style="font-size: 20px">TÍTULO:</label>
                                    <input class="search_input" type="text" name="titLibro" id="titLibro" style="width: 2000px; margin-left: 20px" required value=
                                        "<?php
                                        require ('conectar.php');
                                        $consulta = 'SELECT `titulo` FROM `libro` WHERE `id` = '.$_REQUEST['radio'];
                                        $resultado = $mysqli->query($consulta);
                                        $fila = $resultado->fetch_assoc();
                                        echo ($fila['titulo']);
                                        ?>"
                                    />
                                </div>
                                <br>
                                <div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
                                    <label class="col-form-label-sm text-white" for="editLibro" style="font-size: 20px">EDITORIAL:</label>
                                    <input class="search_input" type="text" name="editLibro" id="editLibro" style="width: 2000px; margin-left: 20px"  required value=
                                        "<?php
                                        require ('conectar.php');
                                        $consulta = 'SELECT `editorial` FROM `libro` WHERE `id` = '.$_REQUEST['radio'];
                                        $resultado = $mysqli->query($consulta);
                                        $fila = $resultado->fetch_assoc();
                                        echo ($fila['editorial']);
                                        ?>"
                                    />
                                </div>
                                <br>
                                <div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
                                    <label class="text-white" for="idAutor" style="font-size: 20px; width: 200px;">AUTOR:</label>
                                </div>
                                <br>
                                <div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
                                    <table class="table-active table table-light search_input" border="0">
                                        <tr>
                                            <td>
                                                <table cellspacing="0" cellpadding="0" border="0" width="1024" style="table-layout:fixed">
                                                    <tr>
                                                        <th scope="col"></th>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Nombre</th>
                                                        <th scope="col">Apellidos</th>
                                                        <th scope="col">Fecha de Nacimiento</th>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div style="height:330px; overflow:auto;">
                                                    <table cellspacing="0" cellpadding="0" border="0" width="1024" style="table-layout:fixed">

                                                        <?php
                                                        require ("conectar.php");

                                                        $consulta = "SELECT `autor`.`id`, `nombre`, `apellidos`, `fechaNac`, `libro`.`id` AS 'idLibro' FROM `autor` LEFT JOIN `libro` ON `libro`.`idAutor` = `autor`.`id` GROUP BY `autor`.`id`";

                                                        if (!$resultado = $mysqli->query($consulta))
                                                        {
                                                            echo "Error en la ejecución debido a: <br>";
                                                            echo "query: ". $consulta;
                                                            echo "Num error: ".$mysqli->errno." <br>";
                                                            echo "Error: ".$mysqli->error." <br>";
                                                            die("Fallo");
                                                        }

                                                        $numregistros = $resultado->num_rows;

                                                        for ($i = 1; $i <= $numregistros; $i++)
                                                        {
                                                            $fila=$resultado->fetch_assoc();
                                                            echo ("<tr>");

                                                            if ($_REQUEST['radio'] == $fila["idLibro"])
                                                                echo ("<td><label><input type='radio' name='radio' id='seleccion".$i."' value='".$fila["id"]."' checked='checked' /></label></td>");
                                                            else
                                                                echo ("<td><label><input type='radio' name='radio' id='seleccion".$i."' value='".$fila["id"]."' /></label></td>");

                                                            echo ("<td>".$fila["id"]."</td>");
                                                            echo ("<td>".$fila["nombre"]."</td>");
                                                            echo ("<td>".$fila["apellidos"]."</td>");
                                                            echo ("<td>".$fila["fechaNac"]."</td>");
                                                            echo ("</tr>");
                                                        }
                                                        ?>

                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <br>
                                <div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
                                    <label class="text-white" for="fechaPublLibro" style="font-size: 20px; width: 200px;">FECHA DE PUBLICACIÓN:</label>
                                    <input class="search_input" type="date" name="fechaPublLibro" id="fechaPublLibro" max="<?php echo (date('Y-m-d')); ?>" style="width: 780px; margin-left: 20px" required value=
                                        "<?php
                                        require ('conectar.php');
                                        $consulta = 'SELECT `fechaPubl` FROM `libro` WHERE `id` = '.$_REQUEST['radio'];
                                        $resultado = $mysqli->query($consulta);
                                        $fila = $resultado->fetch_assoc();
                                        echo ($fila['fechaPubl']);
                                        ?>"
                                    />
                                    <button class="search_button" type="submit" name="boton" formaction="modificarLibro.php" style="width: 400px; margin-left: 20px">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/custom.js"></script>
</body>
</html>