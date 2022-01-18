<?php

    include_once __DIR__ . "/../models/connectaBD.php";
    include_once __DIR__ . "/../models/detallesLigas.php";
    include_once __DIR__ . "/../models/productoPorCategoria.php";
    $connexio = connectaBD();

    $liga = $_GET['accion'];
    $liga = filter_var($liga,FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);


    $categoriaId = detallesLigaFromName($connexio, $liga);

    $idCat = $categoriaId["idCategoria"];


    $result = productoPorCategoria($idCat, $connexio);


    include __DIR__ . "/../vistes/vista_ligaProductosTop.php";

    $counter = 0;
    foreach ($result as $fila)
    {
        include __DIR__ . "/../vistes/vista_productoLiga.php";
    }

    include __DIR__ . "/../vistes/vista_ligaProductosBottom.php";

?>
