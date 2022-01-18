<?php
    session_start();
    include_once __DIR__ . "/../models/connectaBD.php";
    include_once __DIR__ . "/../models/modificarDatosUsuario.php";
    include_once __DIR__ . "/../models/obtenerDatosUsuario.php";

    $connexio = connectaBD();
    $filesAbsoulutePath = "C:/xampp/htdocs/public_html/ficheros/";
    $datosUsuario = obtenerDatosUsuario($connexio);

    if(empty($_POST['email']))
    {
        $email = $datosUsuario['email'];
    }
    else
    {
        $email = $_POST['email'];
    }
    if(empty($_POST['nombre']))
    {
        $nombre = $datosUsuario['nombre'];
    }
    else
    {
        $nombre = $_POST['nombre'];
    }
    if(empty($_POST['apellido1']))
    {
        $apellido1 = $datosUsuario['apellido1'];
    }
    else
    {
        $apellido1 = $_POST['apellido1'];
    }
    if(empty($_POST['apellido2']))
    {
        $apellido2 = $datosUsuario['apellido2'];
    }
    else
    {
        $apellido2 = $_POST['apellido2'];
    }
    if(empty($_POST['direccion']))
    {
        $direccion = $datosUsuario['direccion'];
    }
    else
    {
        $direccion = $_POST['direccion'];
    }
    if(empty($_POST['poblacion']))
    {
        $poblacion = $datosUsuario['poblacion'];
    }
    else
    {
        $poblacion = $_POST['poblacion'];
    }
    if(empty($_POST['codigo']))
    {
        $codigopostal = $datosUsuario['codigopostal'];
    }
    else
    {
        $codigopostal = $_POST['codigo'];
    }

    $password = $datosUsuario['contraseña'];
    if(!empty($_POST['contraseña_nueva']) && !empty($_POST['contraseña_actual']))
    {
        if(password_verify($_POST['contraseña_actual'], $password))
        {
            $password = password_hash($_POST['contraseña_nueva'], PASSWORD_DEFAULT);
        }
    }


    $userId = $_SESSION['user_id'];


    if(isset($_FILES['profile_image']) && !empty($_FILES['profile_image']))
    {
        $nombreFichero = "imagen_perfil_usuario_" . $userId;
        $destinationPath = $filesAbsoulutePath . $nombreFichero;
        move_uploaded_file($_FILES['profile_image']['tmp_name'], $destinationPath);
    }

    $estado = modificarDatos($connexio, $email, $nombre, $apellido1, $apellido2, $direccion, $poblacion, $codigopostal, $nombreFichero, $password);

    if($estado == 1) {
        echo "Datos Modificados con Exito";
    }
    else {
        echo "Los datos no se han podido modificar";
    }

    header("Location: /../index.php?accion=mi_cuenta");

    ?>
