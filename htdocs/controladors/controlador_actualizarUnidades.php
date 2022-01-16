<?php 

    include_once __DIR__ . "/../models/connectaBD.php";
    include_once __DIR__ . "/../models/actualizaUnidades.php";

    $cantidad = $_POST['unidades'];
    $idProducto = $_POST['idProducto'];
    $connexio = connectaBD();
    $result = actualizaUnidades($cantidad, $idProducto, $connexio);
    session_start();
    $_SESSION['numCarrito'] += $cantidad;
    $_SESSION['numCarrito'] -= $result['cantidad'];
    $_SESSION['precio'] += ($cantidad * $result['precio']);
    $_SESSION['precio'] -= ($result['cantidad'] * $result['precio']);
    
    
    
    include_once __DIR__ . "/../controladors/controlador_tramiteCesta.php";



?>