<!-- MENU PRINCIPAL ENCAMINADOR -->

<?php

    if(!isset($_SESSION['numCarrito']))
    {
        //$_SESSION['numCarrito'] = 0;
        session_start();
    }
    if(empty($_SESSION['numCarrito']))
    {
        $_SESSION['numCarrito'] = 0;
        $_SESSION['precio'] = 0;
        
    }
    if(empty($_SESSION['usuario']))
    {
        $_SESSION['usuario'] = 0;
    }

    //echo "<pre>";
    //var_dump($_SESSION);
    //echo "</pre>";

    error_reporting(0);

    $accion = $_GET['accion'];

    switch ($accion) {
        case 'La Liga':
            include __DIR__.'/resources/resource_liga.php';
            break;
        case 'Premier League':
            include __DIR__.'/resources/resource_liga.php';
            break;
        case 'Bundesliga':
            include __DIR__.'/resources/resource_liga.php';
            break;
        case 'Ligue1':
            include __DIR__.'/resources/resource_liga.php';
            break;
        case 'Serie A':
            include __DIR__.'/resources/resource_liga.php';
            break;
        case 'Otras':
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
        case 'tramitada':
            include __DIR__. '/resources/resource_finalizarComanda.php';
            break;
        default:
            include __DIR__.'/resources/resource_principal.php';
            break;
    }
?>