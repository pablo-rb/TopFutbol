<?php   

    function productoTramite($connexio)
    {
        $sql = "SELECT * FROM carrito";
        $consulta = $connexio->prepare($sql);   
        $consulta->execute();   
        
        $result = $consulta->fetchAll();
    
        return $result;
    }
    
    function getProductoByPedido($connexio, $idProducto)
    {
    
    
    $sql = "SELECT descripcion, precio, foto, idProducto 
            FROM producto 
            WHERE idProducto=:idProducto";
    $consulta = $connexio->prepare($sql);   
    $consulta->bindParam("idProducto", $idProducto,PDO::PARAM_STR);
    $consulta->execute();   
    
    $result = $consulta->fetch();

    return $result;
    
    }
?>

