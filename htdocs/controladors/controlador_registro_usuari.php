<?php 
    include_once __DIR__ . "/../models/connectaBD.php";
    include_once __DIR__ . "/../models/insertarUsuario.php";
    $connexio = connectaBD();

    $correoCorrecto = insertaUsuario($connexio);

    $connexio = null;

    if ($correoCorrecto == 0)
    {
        include_once __DIR__ . "/../vistes/vista_registro.php";
        include_once __DIR__ . "/../js/emailEnUso.js";
        
    }
    else
    {
        //include_once __DIR__ . "/../vistes/vista_iniciarSesion.php";
        header("Location: /../index.php?accion=inicio_sesion");
    }
    ?>
        
        