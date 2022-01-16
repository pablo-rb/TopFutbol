<?php

function actualizaUnidades($unidades, $idProducto, $connexio)
{
    
    $sql1 = "SELECT cantidad, precio FROM listapedidos WHERE idProducto=:idProducto";
    $consulta1 = $connexio->prepare($sql1);
    $consulta1->bindParam("idProducto", $idProducto,PDO::PARAM_STR);
    $consulta1->execute();
    $result = $consulta1->fetch();
    
    $sql2 = "UPDATE listapedidos SET cantidad=:unidades WHERE idProducto=:idProducto";
    $consulta_update = $connexio->prepare($sql2);
    $consulta_update->bindParam("idProducto", $idProducto,PDO::PARAM_STR);
    $consulta_update->bindParam("unidades", $unidades,PDO::PARAM_STR);
    $consulta_update->execute();
    return $result;
}

?>