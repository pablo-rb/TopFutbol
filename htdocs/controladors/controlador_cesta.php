<?php 
    include_once __DIR__ . "/../models/añadirCesta.php";
    include_once __DIR__ . "/../models/vaciarCesta.php";
    include_once __DIR__ . "/../index.php";
    include_once __DIR__ . "/../models/connectaBD.php";
    
    $connexio = connectaBD();
    $id = $_POST['id'];
    $unidades = $_POST['unidades'];
    $precio = $_POST['precio'];    
    

    //Vaciar carro
    if ($precio == 0)
    {
        $_SESSION['numCarrito'] = 0;
        $_SESSION['precio'] = 0;
        $pedido = vaciarCesta($connexio);
        
    }
    else
    {
        $_SESSION['numCarrito'] += $unidades;
        $_SESSION['precio'] += ($unidades * $precio);
        $pedido = anadirPedido($connexio, $id, $unidades);
    }

    //include_once __DIR__ . "/../index.php";
?>
        