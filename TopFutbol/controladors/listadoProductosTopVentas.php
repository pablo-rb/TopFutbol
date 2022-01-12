<?php  
    include_once __DIR__ . "/../models/connectaBD.php";
    include_once __DIR__ . "/../models/detallesProducto.php";
    $connexio = connectaBD();
    
    for ($id = 2; $id <= 5; $id++) 
    {
        $result = detallesProducto($connexio, $id);
        include __DIR__ . "/../vistes/productoResumen.php";

    }


  
?>