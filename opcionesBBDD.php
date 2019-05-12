<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="myHOME - real estate template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
<title>BBDD</title>
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
                    <li><a href="opcionesAutor.php">Autores</a></li>
                    <li class="active"><a href="opcionesBBDD.php">BBDD</a></li>
                </ul>
            </nav>
            <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
        </div>
    </header>

    <div class="services">
        <div class="container">
            <div class="row services_row">

                <!-- Service -->
                <div class="col-xl-7 col-md-7">
                    <div class="service">
                        <div class="service_title_container d-flex flex-row align-items-center justify-content-start">
                            <div class="service_icon d-flex flex-column align-items-start justify-content-center">
                                <img src="images/crearBBDD.png" alt="">
                            </div>
                            <div class="service_title"><h3><a href="crearBBDD.php">Crear BBDD</a></h3></div>
                        </div>
                        <div class="service_text">
                            <p>Crea una nueva base de datos.</p>
                        </div>
                    </div>
                </div>

                <!-- Service -->
                <div class="col-xl-7 col-md-7">
                    <div class="service">
                        <div class="service_title_container d-flex flex-row align-items-center justify-content-start">
                            <div class="service_icon d-flex flex-column align-items-start justify-content-center">
                                <img src="images/eliminarBBDD.png" alt="">
                            </div>
                            <div class="service_title"><h3><a href="eliminarBBDD.php">Eliminar BBDD</a></h3></div>
                        </div>
                        <div class="service_text">
                            <p>Elimina la base de datos.</p>
                        </div>
                    </div>
                </div>

                <!-- Service -->
                <div class="col-xl-7 col-md-7">
                    <div class="service">
                        <div class="service_title_container d-flex flex-row align-items-center justify-content-start">
                            <div class="service_icon d-flex flex-column align-items-start justify-content-center">
                                <img src="images/modificarBBDD.png" alt="">
                            </div>
                            <div class="service_title"><h3><a href="insertarBBDD.php">Insertar datos de ejemplo</a></h3></div>
                        </div>
                        <div class="service_text">
                            <p>Inserta una lista de autores y libros como ejemplo para su uso.</p>
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