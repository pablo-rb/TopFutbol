<?php
function anadirPedido($connexio, $idProducto, $unidades)
{

    
    $idPedido = 1;
    
    $sql0 = "SELECT * 
            FROM listapedidos
            WHERE idProducto=:idProducto";
            
    $consulta0 = $connexio->prepare($sql0);
    $consulta0->bindParam("idProducto", $idProducto,PDO::PARAM_STR);
    $consulta0->execute();
    $filas = $consulta0->rowCount();
    
    if ($filas == 1)
    {
        $result = $consulta0->fetch();
        $cantidad = $result['cantidad'] + $unidades;
        $sql_update = "UPDATE listapedidos SET cantidad=:cantidad WHERE idProducto=:idProducto";
        $consulta_update = $connexio->prepare($sql_update);
        $consulta_update->bindParam("idProducto", $idProducto,PDO::PARAM_STR);
        $consulta_update->bindParam("cantidad", $cantidad,PDO::PARAM_STR);
        $consulta_update->execute();
    }
            
    else
    {
    $sql1 = "SELECT descripcion, precio, foto 
            FROM producto 
            WHERE idProducto=:idProducto";
            
            
    $consulta = $connexio->prepare($sql1);


    $consulta->bindParam("idProducto", $idProducto,PDO::PARAM_STR);
    $consulta->execute();

    $row = $consulta->fetch();
    
    $descripcion = $row['descripcion'];
    $foto = $row['foto'];
    $precio = $row['precio'];

    
    $sql2 = "INSERT INTO listapedidos (idPedido, idProducto, cantidad, nombre, precio) 
                    VALUES (:idPedido, :idProducto, :unidades, :descripcion, :precio)";

    $consulta2 = $connexio->prepare($sql2);



    $consulta2->bindParam( ':unidades', $unidades, PDO::PARAM_STR);
    $consulta2->bindParam( ':descripcion', $descripcion, PDO::PARAM_STR);
    $consulta2->bindParam( ':precio', $precio, PDO::PARAM_STR);
    $consulta2->bindParam( ':idPedido', $idPedido, PDO::PARAM_STR);
    $consulta2->bindParam( ':idProducto', $idProducto, PDO::PARAM_STR);



    if ($consulta2->execute())
    {
      //echo "New record created successfully";
    }else {
      //echo "Unable to create record";
    }

    }

     return 0;


}

?>