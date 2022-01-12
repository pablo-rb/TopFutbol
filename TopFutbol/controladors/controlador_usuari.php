<?php 
    include_once __DIR__ . "/../models/connectaBD.php";
    include_once __DIR__ . "/../models/insertarUsuario.php";
    $connexio = connectaBD();

    $correoCorrecto = insertaUsuario($connexio);

    $connexio = null;

    if ($correoCorrecto == 0)
    {
        include_once __DIR__ . "/../vistes/registro.html";
        include_once __DIR__ . "/../vistes/emailEnUso.js";
        
    }
    else
    {
        include_once __DIR__ . "/../vistes/iniciarSesion.html";
    }
    
    
    

        ?>
        
        