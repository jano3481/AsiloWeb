<?php

if(isset($_POST['inputEmail']) && isset($_POST['inputPassword']) && isset($_POST['inputName']) && isset($_POST['inputCedula'])) {

    $usuario = $_POST['inputEmail'];
    $clave = $_POST['inputPassword'];
    $nombre = $_POST['inputName'];
    $cedula = $_POST['inputCedula'];

    $mysqli = new mysqli("127.0.0.1", "root", "toor", "AsiloWeb");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

   $query = "INSERT INTO tbl_usuarios (Nombre, Correo, Cedula, Clave, Activo) VALUE (?,?,?,?,1)";

    if ($stmt = $mysqli->prepare($query)) {

        $stmt->bind_param("ssss", $nombre, $usuario, $cedula, $clave);
        $stmt->execute();
        $stmt->fetch();
        $stmt->close();

        header("Location: /AsiloWeb/Inicio.php");

    }

}