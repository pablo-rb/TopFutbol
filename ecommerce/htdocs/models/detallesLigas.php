<?php   

    function detallesLiga($connexio, $id)
    {
        $sql = "SELECT * 
                FROM categorias
                WHERE idCategoria=:id";
        $consulta1 = $connexio->prepare($sql);   
        $consulta1->bindParam("id", $id,PDO::PARAM_STR);
        $consulta1->execute();   
        
        $result = $consulta1->fetch();
    
        return $result; 
    
    
    
    
    
    }


?>
