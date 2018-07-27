<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contactanos</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">  
<link rel="icon" type="image/png" href="favicon.ico"/>
<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="css/fontello.css">
<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bower_components/animate.css/animate.min.css">

</head>
<script>
  var contador=0;
  function incrementar()
  {
    contador++;
    alert('HEMOS RECIBIDO ' + contador +" COMENTARIO SIGUE COLABORANDO PARA MEJORAR NUESTROS SERVICIOS");
  }
</script>
<body style="background-image: url('images/guadalupe.jpg');">
    <header class="header">
        <div class="contenedor" >
            <h1 class="logo">CONTÁCTANOS</h1>
            <span class="icon-menu" id="btn-menu"></span>
            <nav class="nav" id="nav">
                <ul class="menu">
                    <li class="menu_item"><a class="menu__link " href="Index.php">Inicio</a></li>
                    <li class="menu_item"><a class="menu__link " href="Informacion.php">Información</a></li>
                    <li class="menu_item"><a class="menu__link select " href="#">Contactanos</a></li>    
                    <li class="menu_item"><a class="menu__link " href="Inicio.php">Login</a></li>
                </ul>
            </nav>        
        </div>        
    </header>
        <div class="banner">        
        <div class="contenedor">
            <center>
                </br>
              <img src="imagenes/Contacto.jpg" class="banner_img" width="600">
                </br>
            </center>              
        </div>        
    </div>
    <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>NOMBRE</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Nombre">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">APELLIDO</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Apellido">
    </div>
    <div class="form-group col-md-6">
      <label>TELÉFONO</label>
      <input type="number" class="form-control" id="inputEmail4" placeholder="Teléfono">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">DIRECCIÓN</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Calle principal y secundaria">
  </div>
     
    </div>
    <label for="inputAddress">COMENTARIO</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>        
  </div>
</br>
    <center><input type="button" onClick="incrementar()" value="Enviar"></center>  
</br>
</form>

    <footer class="footer">            
        <div class= "social">
            </br>
            <a class="icon-facebook" href="https://www.facebook.com/"></a>
            <a class="icon-snapchat-ghost" href="https://scan.snapchat.com/"></a> 
            <a class="icon-instagram" href="https://www.instagram.com/"></a>
            <a class="icon-twitter" href="https://twitter.com/"></a>
        </div> 
        </br>
            <p class="copy"> WHATSAPP: 0996717722 </br> TELEFONO: 2860429</p>
        </br>
    </footer> 
   <script src="js/menu.js"></script> 
    <script>
  
</script>
</body>
</html>

