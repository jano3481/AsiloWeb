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
            /*background-image: url('images/guadalupe.jpg');*/
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
                <li class="menu_item"><a class="menu__link " href="Index.php">Inicio</a></li>
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

<section id="Inicio" class="main">

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">

                <div class="card">
                    <div class="card-body">

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                   aria-controls="home" aria-selected="true">Iniciar sesion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                   aria-controls="profile" aria-selected="false">Registrate</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                <form method="post" action="controladores/Inicio.php" class="form-signin">

                                    <h1 class="h3 mb-3 font-weight-normal">Iniciar sesión</h1>
                                    <label for="inputEmail" class="sr-only">Correo</label>
                                    <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Correo"
                                           required="" autofocus="">
                                    <label for="inputPassword" class="sr-only">Contraseña</label>
                                    <input type="password" id="inputPassword" class="form-control"
                                           placeholder="Contraseña" name="inputPassword" required="">

                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                <form method="post" action="controladores/Registro.php" class="form-signin">

                                    <h1 class="h3 mb-3 font-weight-normal">Iniciar sesión</h1>
                                    <label for="inputEmail" class="sr-only">Correo</label>
                                    <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Correo"
                                           required="" autofocus="">
                                    <label for="inputPassword" class="sr-only">Contraseña</label>
                                    <input type="password" id="inputPassword" class="form-control"
                                           placeholder="Contraseña" name="inputPassword" required="">

                                    <label for="inputName" class="sr-only">Nombre</label>
                                    <input id="inputName" name="inputName" class="form-control" placeholder="Nombre"
                                           required="" autofocus="">

                                    <label for="inputCedula" class="sr-only">Cedula</label>
                                    <input id="inputCedula" name="inputCedula" class="form-control" placeholder="Cedula"
                                           required="" autofocus="">

                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Registrarse</button>
                                </form>


                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>


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
