<!-- MENU PRINCIPAL ENCAMINADOR -->

<?php

    error_reporting(0);

    $accion = $_GET['accion'];

    switch ($accion) {
        case 'camiseta':
            include __DIR__.'/resources/resource_camiseta.php';
            break;
        case 'liga':
            include __DIR__.'/resources/resource_liga.php';
            break;
        case 'inicio_sesion':
            include __DIR__.'/resources/resource_inicio_sesion.php';
            break;
        case 'mi_cuenta':
            include __DIR__.'/resources/resource_mi_cuenta.php';
            break;
        case 'mis_compras':
            include __DIR__ . '/resources/resource_mis_compras.php';
            break;
        case 'carrito':
            include __DIR__.'/resources/resource_carrito.php';
            break;
        case 'registro':
            include __DIR__ . '/resources/resource_registro.php';
            break;
        default:
            include __DIR__.'/resources/resource_principal.php';
            break;
    }
?>