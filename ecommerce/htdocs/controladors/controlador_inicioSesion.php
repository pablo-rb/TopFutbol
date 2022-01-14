<?php 
    include_once __DIR__ . "/../models/connectaBD.php";
    include_once __DIR__ . "/../models/validarUsuario.php";
    $connexio = connectaBD();

    $error = validaUsuario($connexio);

    $connexio = null;
 
    if ($error == 0)
    {
       
        include_once __DIR__ . "/../index.php";
    }
    else
    {
        include_once __DIR__ . "/../vistes/iniciarSesion.html";
        if ($error == 1)
        {
                include_once __DIR__ . "/../vistes/contraseñaErronea.js";

        }
        else
        {
                include_once __DIR__ . "/../vistes/emailErroneo.js";
        }

    }
?>