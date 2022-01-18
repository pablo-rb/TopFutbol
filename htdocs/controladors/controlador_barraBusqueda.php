<?php
    include_once __DIR__ . "/../models/connectaBD.php";
    include_once __DIR__ . "/../models/searchEngineProductos.php";
    $connexio = connectaBD();


    $busqueda = $_GET['busqueda'];
    $busqueda = filter_var($busqueda,FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

    $result = searchEngine($connexio, $busqueda);

    include __DIR__ . "/../vistes/vista_ligaProductosTop.php";

    foreach ($result as $fila)
    {
        include __DIR__ . "/../vistes/vista_productoLiga.php";
    }

    include __DIR__ . "/../vistes/vista_ligaProductosBottom.php";

?>