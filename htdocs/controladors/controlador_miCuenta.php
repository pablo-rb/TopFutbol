<?php
    include_once __DIR__ . "/../models/connectaBD.php";
    include_once __DIR__ . "/../models/obtenerDatosUsuario.php";

    $connexio = connectaBD();

    $datosUser = obtenerDatosUsuario($connexio);

//    echo "<pre>";
//    var_dump($datosUser);
//    echo "</pre>";
    if($datosUser == 0)
    {
        echo "Error al obtener los datos";
    }

    include __DIR__ . "/../vistes/vista_miCuenta.php";

?>