<?php  
    include_once __DIR__ . "/../models/connectaBD.php";
    include_once __DIR__ . "/../models/detallesLigas.php";
    $connexio = connectaBD();
    
    for ($id = 1; $id <= 6; $id++) 
    {
        $result = detallesLiga($connexio, $id);
        include __DIR__ . "/../vistes/ligasResumen.php";
    }
?>