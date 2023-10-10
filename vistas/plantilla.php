<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="author" content="NextGenerationDev">
   <title>Wedding - HMOR</title>
   <!--Favicon img-->
   <link rel="shortcut icon" href="assets/img/favicon/favicon.png">
   <!--Bootstarp min css-->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <!--Bootstarp map css-->
   <link rel="stylesheet" href="assets/css/bootstrap.css.map">
   <!--Owl Carousel css-->
   <link rel="stylesheet" href="assets/css/owl.min.css">
   <!--Owl Carousel Theme css-->
   <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
   <!--All min css-->
   <link rel="stylesheet" href="assets/css/all.min.css">
   <!--Animate css-->
   <link rel="stylesheet" href="assets/css/animate.css">
   <!--Magnific popup css-->
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <!--Swiper min css-->
   <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
   <!--main css-->
   <link rel="stylesheet" href="assets/css/main.css">

   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- Plugins JS -->
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/d4012cf959.js" crossorigin="anonymous"></script>
</head>
<body>
    <!--==== Header Section Here ======= -->
    
    <header class="header-section">
        <div class="container-fluid bg-light">
            <div class="container">
                <div class="logo-menu">
                    <a href="index.php?pagina=registro" class="logo">
                        <img src="assets/img/logo/logo1.png" alt="logo">
                    </a> 
                </div>
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul class="nav nav-justified py-2 nav-pills">
                    <?php if (isset($_GET["pagina"])) :  ?>
                        <?php if ($_GET["pagina"] == "registro") : ?>
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php?pagina=registro">Register</a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?pagina=registro">Register</a>
                            </li>
                        <?php endif ?>

                        <?php if ($_GET["pagina"] == "ingreso") : ?>
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php?pagina=ingreso">Login</a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?pagina=ingreso">Login</a>
                            </li>
                        <?php endif ?>

                        <?php if ($_GET["pagina"] == "inicio") : ?>
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php?pagina=inicio">Accounts</a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?pagina=inicio">Accounts</a>
                            </li>
                        <?php endif ?>

                        <?php if ($_GET["pagina"] == "salir") : ?>
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php?pagina=salir">Go out</a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?pagina=salir">Go out</a>
                            </li>
                        <?php endif ?>

                        <?php if ($_GET["pagina"] == "home") : ?>
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php?pagina=home">Home</a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?pagina=home">Home</a>
                            </li>
                        <?php endif ?>

                        <?php if ($_GET["pagina"] == "about") : ?>
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php?pagina=about">About</a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?pagina=about">About</a>
                            </li>
                        <?php endif ?>

                        <?php if ($_GET["pagina"] == "story") : ?>
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php?pagina=story">Our story</a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?pagina=story">Our story</a>
                            </li>
                        <?php endif ?>

                        <?php if ($_GET["pagina"] == "contact") : ?>
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php?pagina=contact">Contact</a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?pagina=contact">Contact</a>
                            </li>
                        <?php endif ?>

                    <?php else : ?>

                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=registro">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=ingreso">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=inicio">Acounts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=salir">Lodout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=story">Our story</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=contact">Contact</a>
                        </li>
                    <?php endif ?>

                </ul>
            </div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="container py-5">
            <?php
            # ISSET: isset() Que determina si una variable de tipo GET o POST esta definida
            # y no es NULL
            if (isset($_GET["pagina"])) {
                if (
                    $_GET["pagina"] == "registro" ||
                    $_GET["pagina"] == "ingreso" ||
                    $_GET["pagina"] == "inicio" ||
                    $_GET["pagina"] == "editar" ||
                    $_GET["pagina"] == "salir" ||
                    $_GET["pagina"] == "home" ||
                    $_GET["pagina"] == "about" ||
                    $_GET["pagina"] == "story" ||
                    $_GET["pagina"] == "contact"
                ) {
                    include "paginas/" . $_GET["pagina"] . ".php";
                } else {
                    include "paginas/error.php";
                }
            } else {
                include "paginas/registro.php";
            }
            ?>
        </div>
    </div>
<!--=========== Footer Section End ========= -->
   <!--Jquery 3 6 0 Min Js-->
   <script src="assets/js/jquery-3.6.0.min.js"></script>
   <!--Bootstrap bundle Js-->
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <!--Viewport Jquery Js-->
   <script src="assets/js/viewport.jquery.js"></script>
   <!--Wow min Js-->
   <script src="assets/js/wow.min.js"></script>
   <!--Owl Carousel min Js-->
   <script src="assets/js/owl.min.js"></script>
   <!--Swiper min Js-->
   <script src="assets/js/swiper-bundle.min.js"></script> 
   <!--Magnific popup min Js-->
   <script src="assets/js/jquery.magnific-popup.min.js"></script> 
   <!--main Js-->
   <script src="assets/js/main.js"></script>
</body>
</html>