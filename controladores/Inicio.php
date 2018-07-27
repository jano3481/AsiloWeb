<?php

session_start();

if(isset($_POST['inputEmail']) && isset($_POST['inputPassword']))
{
    $usuario = $_POST['inputEmail'];
    $clave = $_POST['inputPassword'];

    $mysqli = new mysqli("127.0.0.1", "root", "toor", "AsiloWeb");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    //echo $mysqli->host_info . "\n";
    //$resultado = $mysqli->query("SELECT Id FROM tbl_usuarios WHERE Correo = '" . $usuario . "' AND Clave = '" .  $clave . "'" );

    $query = "SELECT Id, Nombre, Cedula FROM tbl_usuarios WHERE Correo =? AND Clave = ? AND Activo = 1";

    if ($stmt = $mysqli->prepare($query)) {
        $stmt->bind_param("ss", $usuario, $clave);

        $stmt->execute();
        $stmt->bind_result($Id, $Nombre, $Cedula);

        $stmt->fetch();

        $_SESSION["UsuarioId"] = $Id;
        $_SESSION["UsuarioNombre"] = $Nombre;
        $_SESSION["UsuarioCedula"] = $Cedula;

        $stmt->close();
    }

    if (isset($_SESSION["UsuarioId"]))
    {
        header("Location: /AsiloWeb/Index.php");
    }
    else
        header("Location: /AsiloWeb/Inicio.php");

}