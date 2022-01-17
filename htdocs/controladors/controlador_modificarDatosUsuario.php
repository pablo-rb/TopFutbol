<?php
    session_start();
    include_once __DIR__ . "/../models/connectaBD.php";
    include_once __DIR__ . "/../models/modificarDatosUsuario.php";

    $connexio = connectaBD();

    $email = $_POST['email'];
    $nombre = $_POST['nombre'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $direccion = $_POST['direccion'];
    $poblacion = $_POST['poblacion'];
    $codigopostal = $_POST['codigo'];

    $estado = modificarDatos($connexio, $email, $nombre, $apellido1, $apellido2, $direccion, $poblacion, $codigopostal);

    if($estado == 1) {
        echo "Datos Modificados con Exito";
    }
    else {
        echo "Los datos no se han podido modificar";
    }

    header("Location: /");

    ?>
