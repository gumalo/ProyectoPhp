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
    <title>Autores</title>
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
                    <li><a href="opcionesLibro.php">Libros</a></li>
                    <li class="active"><a href="opcionesAutor.php">Autores</a></li>
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
                                    <label class="col-form-label-sm text-white" for="nomAutor" style="font-size: 20px">NOMBRE:</label>
                                    <input class="search_input" type="text" name="nomAutor" id="nomAutor" style="width: 2000px; margin-left: 20px" required/>
                                </div>
                                <br>
                                <div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
                                    <label class="col-form-label-sm text-white" for="apeAutor" style="font-size: 20px">APELLIDOS:</label>
                                    <input class="search_input" type="text" name="apeAutor" id="apeAutor" style="width: 2000px; margin-left: 20px"  required/>
                                </div>
                                <br>
                                <div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
                                    <label class="text-white" for="fechaNacAutor" style="font-size: 20px; width: 200px;">FECHA DE NACIMIENTO:</label>
                                    <input class="search_input" type="date" name="fechaNacAutor" id="fechaNacAutor" max="<?php echo (date('Y-m-d')); ?>" style="width: 780px; margin-left: 20px" required/>
                                    <button class="search_button" type="submit" name="boton" formaction="insertarAutor.php" style="width: 400px; margin-left: 20px">Enviar</button>
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