<?php
session_start();
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mi Segundo Hogar</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
    <link rel="icon" type="image/png" href="favicon.ico"/>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/animate.css/animate.min.css">
    <style>
        body {
            background-image: url('images/guadalupe.jpg');
        }
    </style>
</head>
<body>
<header class="header">
    <div class="contenedor">
        <h1 class="logo">CENTRO GERIÁTRICO</h1>
        <span class="icon-menu" id="btn-menu"></span>
        <nav class="nav" id="nav">
            <ul class="menu">
                <li class="menu_item"><a class="menu__link select" href="Index.php">Inicio</a></li>
                <li class="menu_item"><a class="menu__link " href="Informacion.php">Información</a></li>
                <li class="menu_item"><a class="menu__link " href="Contactanos.php">Contactanos</a></li>
                <?php
                if (isset($_SESSION["UsuarioId"])) {
                    echo '<li class="menu_item"><a class="menu__link " href="controladores/Salir.php">Cerrar</a></li>';
                } else {
                    echo '<li class="menu_item"><a class="menu__link " href="Inicio.php">Login</a></li>';
                }
                ?>
            </ul>
        </nav>
    </div>
</header>

<section id="banner">
    <div class="banner">
        <div class="contenedor">
            </br>
            <div class="jumbotron">
                <h1 style="text-align:center;" class="display-4 animated infinite bounce">BIENVENIDOS <?php
                    if (isset($_SESSION["UsuarioId"])) {
                        echo $_SESSION["UsuarioNombre"];
                    }
                    ?> A "MI SEGUNDO
                    HOGAR"</h1>
            </div>
        </div>
        </br>
    </div>
</section>
<section id="main">
    <div class="contenedor">
        <selection class="info">
            <article class="info__back">
                <h2 style="text-align:center;" class="info__titulo">MISIÓN</h2>
                <p class="info__txt">Brindar los mejores cuidados y espacios para una gran calidad de vida que les
                    permita a los adultos mayores sentir que son personas de gran valor, que con su experiencia y
                    alegría son de gran importancia.</p>
            </article>
            <article class="info__back">
                <h2 style="text-align:center;" class="info__titulo">VISIÓN</h2>
                <p class="info__txt">Tenemos como objetivos, no sólo mantener la capacidad y autonomía funcional o
                    potenciar la creatividad y expresión corporal del adulto mayor, sino también potenciar los contactos
                    familiares de los ancianos.</p>
            </article>

        </selection>
    </div>
</section>

<footer class="footer">
    <div class="social">
        </br>
        <a class="icon-facebook" href="https://www.facebook.com/"></a>
        <a class="icon-snapchat-ghost" href="https://scan.snapchat.com/"></a>
        <a class="icon-instagram" href="https://www.instagram.com/"></a>
        <a class="icon-twitter" href="https://twitter.com/"></a>
    </div>
    </br>
    <p class="copy"> MI SEGUNDO HOGAR &copy; 2018</p>
    </br>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="bower_components/jquery/dist/jquery.slim.min.js"></script>
<script src="bower_components/popper.js/dist/umd/popper.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="js/menu.js"></script>

</body>
</html>
