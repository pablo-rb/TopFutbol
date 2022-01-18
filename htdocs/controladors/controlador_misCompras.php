
<?php
include_once __DIR__ . "/../models/connectaBD.php";
include_once __DIR__ . "/../models/historialCompras.php";

session_start();
$connexio = connectaBD();
$result = historialPedidos($connexio);

include __DIR__ . "/../vistes/vista_head_misCompras.php";
include __DIR__ . "/../vistes/vista_header.php";
?></header><?php

foreach ($result as $pedido)
{
    $productos = getProductosFromPedido($connexio, $pedido['idPedido']);    
    include __DIR__ . "/../vistes/vista_misCompras.php";
   


}


?> <footer> <?php
include __DIR__ . "/../vistes/vista_footer.php";

?>     
</footer>
</body>
</html>
<?php


?>




