<?php  
    include_once __DIR__ . "/../models/connectaBD.php";
    include_once __DIR__ . "/../models/listarProductos.php";
    $connexio = connectaBD();
    
    $id = $_POST['id'];
    $result = listarProductos($connexio, $id);
    include __DIR__ . "/../vistes/producto.php";



  
?>