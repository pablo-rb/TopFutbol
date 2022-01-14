<?php 
    include_once __DIR__ . "/../models/connectaBD.php";
    include_once __DIR__ . "/../models/validarUsuario.php";
    $connexio = connectaBD();

    $error = validaUsuario($connexio);

    $connexio = null;

    if ($error == 0)
    {
        include_once __DIR__ . "/../resources/resource_principal.php";
    }
    else
    {
        include_once __DIR__ . "/../vistes/vista_iniciarSesion.php";
        if ($error == 1)
        {
                include_once __DIR__ . "/../js/contraseñaErronea.js";
        }
        else
        {
                include_once __DIR__ . "/../js/emailErroneo.js";
        }

    }
?>