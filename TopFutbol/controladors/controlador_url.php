<?php
    include_once __DIR__ . "/../models/connectaBD.php";
    include_once __DIR__ . "/../models/accionURL.php";
    $connexio = connectaBD();
    $accionConsulta = consulta_accion_url($connexio);
    include_once __DIR__ . "/../vistes/vista_header.php";

    include_once __DIR__ . "/../resources/resource_principal.php";
?>