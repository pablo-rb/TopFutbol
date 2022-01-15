<?php  
    include_once __DIR__ . "/../models/connectaBD.php";
    include_once __DIR__ . "/../models/detallesProducto.php";
    
    $connexio = connectaBD();

    $id = $_POST['id'];
    $result = detallesProducto($connexio, $id);
    include __DIR__ . "/../vistes/vista_producto.php";
?>