<?php

function anadirPedidoUsuario($connexio)
{
    $sql = "SELECT * FROM carrito";
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
    
    $idUsuario = $_SESSION['user_id'];

    $sql2 = "INSERT INTO pedidos (idUsuario, fecha, importe_total, elementos_totales) 
                    VALUES (:idUsuario, :fecha, :importe_total, :elementos_totales)";

    $consulta2 = $connexio->prepare($sql2);

    $consulta2->bindParam( ':idUsuario', $idUsuario, PDO::PARAM_STR);
    $consulta2->bindParam( ':fecha', $fecha, PDO::PARAM_STR);
    $consulta2->bindParam( ':importe_total', $importe_total, PDO::PARAM_STR);
    $consulta2->bindParam( ':elementos_totales', $elementos_totales, PDO::PARAM_STR);
    $consulta2->execute();

    $array = array($fecha, $importe_total, $elementos_totales);


    foreach($result as $producto)
    {
        
        
        $sql_idPedido = "SELECT * FROM pedidos WHERE idPedido=(SELECT max(idPedido) FROM pedidos);";
        $consulta_idPedido = $connexio->prepare($sql_idPedido);         
        $consulta_idPedido->execute();
        $result_idPedido =$consulta_idPedido->fetch();
        $idPedido = $result_idPedido['idPedido'];        
        
        
        $idProducto = $producto['idProducto'];
        $cantidad = $producto['cantidad'];
        $nombre = $producto['nombre'];
        $precio = $producto['precio'];
        

        $sql_foto = "SELECT foto FROM producto WHERE idProducto=:idProducto";
        $consulta_foto = $connexio->prepare($sql_foto); 
        $consulta_foto->bindParam( ':idProducto', $idProducto, PDO::PARAM_STR);
        $consulta_foto->execute();
        $result_foto =$consulta_foto->fetch();
        $foto = $result_foto['foto'];
        
        
        $sql_listaPedidos = "INSERT INTO listapedidos (idPedido, idProducto, cantidad, nombre, precio, foto) 
        VALUES (:idPedido, :idProducto, :cantidad, :nombre, :precio, :foto) ";
        
        $consulta_listaPedidos = $connexio->prepare($sql_listaPedidos); 
        
        $consulta_listaPedidos->bindParam( ':idPedido', $idPedido, PDO::PARAM_STR);
        $consulta_listaPedidos->bindParam( ':idProducto', $idProducto, PDO::PARAM_STR);
        $consulta_listaPedidos->bindParam( ':cantidad', $cantidad, PDO::PARAM_STR);
        $consulta_listaPedidos->bindParam( ':nombre', $nombre, PDO::PARAM_STR);
        $consulta_listaPedidos->bindParam( ':precio', $precio, PDO::PARAM_STR);
        $consulta_listaPedidos->bindParam( ':foto', $foto, PDO::PARAM_STR);
        
        $consulta_listaPedidos->execute();
        
        

    }

    return $array;

}



?>