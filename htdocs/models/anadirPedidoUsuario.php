<?php

function anadirPedidoUsuario($connexio)
{
    $sql = "SELECT * FROM listapedidos";
    $consulta = $connexio->prepare($sql);    
    $consulta->execute();
    $result =$consulta->fetchAll();
    
    $importe_total = 0;
    $elementos_totales = 0;
    foreach($result as $producto)
    {
        $importe_total += ($producto['cantidad'] * $producto['precio']);
        $elementos_totales += $producto['cantidad'];
    }

    $fecha = date('Y-m-d');
    
    $idUsuario = 1;

    $sql2 = "INSERT INTO pedidos (idUsuario, fecha, importe_total, elementos_totales) 
                    VALUES (:idUsuario, :fecha, :importe_total, :elementos_totales)";

    $consulta2 = $connexio->prepare($sql2);

    $consulta2->bindParam( ':idUsuario', $idUsuario, PDO::PARAM_STR);
    $consulta2->bindParam( ':fecha', $fecha, PDO::PARAM_STR);
    $consulta2->bindParam( ':importe_total', $importe_total, PDO::PARAM_STR);
    $consulta2->bindParam( ':elementos_totales', $elementos_totales, PDO::PARAM_STR);
    $consulta2->execute();

    $array = array($fecha, $importe_total, $elementos_totales);
    return $array;

}



?>