<?php   

    function detallesLiga($connexio, $id)
    {
        $sql = "SELECT * 
                FROM categorias
                WHERE idCategoria=:id";
        $consulta1 = $connexio->prepare($sql);   
        $consulta1->bindParam("id", $id, PDO::PARAM_STR);
        $consulta1->execute();   
        
        $result = $consulta1->fetch();
        $result['nombre'] = htmlentities($result['nombre'], ENT_QUOTES | ENT_HTML5,'UTF-8');
    
        return $result;
    }

    function detallesLigaFromName($connexio, $liga)
    {
        $sql = "SELECT idCategoria 
                    FROM categorias
                    WHERE nombre=:liga";
        $consulta1 = $connexio->prepare($sql);
        $consulta1->bindParam("liga", $liga, PDO::PARAM_STR);
        $consulta1->execute();

        $result = $consulta1->fetch();
        //$result['nombre'] = htmlentities($result['nombre'], ENT_QUOTES | ENT_HTML5,'UTF-8');

        return $result;
    }
?>
