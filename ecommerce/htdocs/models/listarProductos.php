<?php   

    function listarProductos($connexio, $id)
    {
        $sql = "SELECT * 
                FROM productos
                WHERE id=:id";
        $consulta1 = $connexio->prepare($sql);   
        $consulta1->bindParam("id", $id,PDO::PARAM_STR);
        $consulta1->execute();   
        
        $result = $consulta1->fetch();
    
        return $result; 
    
    
    
    
    
    }


?>

