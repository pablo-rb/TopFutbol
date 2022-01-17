<?php

    include_once __DIR__ . "/../models/connectaBD.php";
    include_once __DIR__ . "/../models/detallesLigas.php";
    include_once __DIR__ . "/../models/productoPorCategoria.php";
    $connexio = connectaBD();

    $liga = $_GET['accion'];
    $liga = filter_var($liga,FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);


    $categoriaId = detallesLigaFromName($connexio, $liga);

    $idCat = $categoriaId["idCategoria"];

    //echo $idCat;

    $result = productoPorCategoria($idCat, $connexio);


//echo "<pre>";
//var_dump($result);
//echo "</pre>";

    include __DIR__ . "/../vistes/vista_ligaProductosTop.php";

    $counter = 0;
    foreach ($result as $fila)
    {
        //echo $fila["idProducto"] . " " . $fila["descripcion"] .  " " . $fila["foto"] .  "<br />" ;
        include __DIR__ . "/../vistes/vista_productoLiga.php";
    }

//    for ($i = 0; $i < sizeof($result); $i++)
//    {
//        //echo $fila["idProducto"] . " " . $fila["descripcion"] .  " " . $fila["foto"] .  "<br />" ;
//        include __DIR__ . "/../vistes/vista_productoResumen.php";
//
//    }

    include __DIR__ . "/../vistes/vista_ligaProductosBottom.php";

?>
