<?php   

    function detallesProducto($connexio, $id)
    {
        $sql = "SELECT * 
                FROM producto
                WHERE idProducto=:id";
        $consulta1 = $connexio->prepare($sql);   
        $consulta1->bindParam("id", $id, PDO::PARAM_STR);
        $consulta1->execute();   
        
        $result = $consulta1->fetch();
    
        return $result;
    }
?>

