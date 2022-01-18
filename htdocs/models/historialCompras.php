<?php

function historialPedidos($connexio)
{
$idUsuario = $_SESSION['user_id']; 
$sql = "SELECT * FROM pedidos WHERE idUsuario=:idUsuario";
$consulta = $connexio->prepare($sql);    
$consulta->bindParam( ':idUsuario', $idUsuario, PDO::PARAM_STR);
$consulta->execute();
$result =$consulta->fetchAll();



return $result;


}


function getProductosFromPedido($connexio, $idPedido)
{
    $sql = "SELECT * FROM listapedidos WHERE idPedido=:idPedido";
    $consulta = $connexio->prepare($sql);    
    $consulta->bindParam( ':idPedido', $idPedido, PDO::PARAM_STR);
    $consulta->execute();
    $result =$consulta->fetchAll();
    
    return $result;

}

?>