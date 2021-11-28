<?php  
    include_once __DIR__ . "/../models/connectaBD.php";
    include_once __DIR__ . "/../models/listarProductos.php";
    $connexio = connectaBD();
    
    for ($id = 6; $id <= 9; $id++) 
    {
        $result = listarProductos($connexio, $id);
        include __DIR__ . "/../vistes/topVentas.php";

    }
    //include_once __DIR__ . "/../vistes/topVentas.php";

  
?>