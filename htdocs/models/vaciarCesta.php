<?php
function vaciarCesta($connexio)
{

    
    
    $idPedido = 1;
    
    $sql1 = "DELETE FROM listapedidos WHERE idPedido=:idPedido";
            
            
    $consulta = $connexio->prepare($sql1);


    $consulta->bindParam("idPedido", $idPedido,PDO::PARAM_STR);
    $consulta->execute();

    
    
    

    

     return 0;


}

?>