<?php  
    include_once __DIR__ . "/../models/connectaBD.php";
    include_once __DIR__ . "/../models/detallesProducto.php";
    $connexio = connectaBD();
    
    for ($id = 6; $id <= 9; $id++) 
    {
        $result = detallesProducto($connexio, $id);
        include __DIR__ . "/../vistes/vista_productoResumen.php";

    }

  
?>