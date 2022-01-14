<?php  
    include_once __DIR__ . "/../models/connectaBD.php";
    include_once __DIR__ . "/../models/modelo_tramiteCesta.php";
    $connexio = connectaBD();
    
    $resultat = productoTramite($connexio);
    include __DIR__ . "/../vistes/vistes_headTramitar.php";
    include __DIR__ . "/../vistes/vistes_header.php";
    $total = 0;
    foreach($resultat as $pedido)
    {
        $unidades = $pedido['cantidad'];
        $total += ($pedido['cantidad'] * $pedido['precio']);
        $result = getProductoByPedido($connexio, $pedido['idProducto']);
        include __DIR__ . "/../vistes/tramiteCesta.php";
    }
    include __DIR__ . "/../vistes/vistes_finalizarCompra.php";
    include __DIR__ . "/../vistes/vistest_footer.php";
?>