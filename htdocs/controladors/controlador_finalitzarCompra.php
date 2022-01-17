<?php
include_once __DIR__ . "/../models/connectaBD.php";
include_once __DIR__ . "/../models/anadirPedidoUsuario.php";
include_once __DIR__ . "/../models/vaciarCesta.php";
session_start();
$connexio = connectaBD();
if ($_SESSION['user_id'] == 'none')
{
    header("Location: /../index.php?accion=inicio_sesion");
}
else
{
$resultat = anadirPedidoUsuario($connexio);

$_SESSION['numCarrito'] = 0;
$_SESSION['precio'] = 0;
$pedido = vaciarCesta($connexio);
include __DIR__ . "/../vistes/vista_head_confirmada.php";
include __DIR__ . "/../vistes/vista_header.php";
?></header><?php


include __DIR__ . "/../vistes/vista_compraConfirmada.php";
?> <footer> <?php
include __DIR__ . "/../vistes/vista_footer.php";

?>     
</footer>
</body>
</html>
<?php
}

?>