<?php
    function searchEngine($connexio, $busqueda)
    {
        $sql = "SELECT * 
                    FROM producto
                    WHERE descripcion LIKE '%' :busqueda '%'";
        $consulta1 = $connexio->prepare($sql);
        $consulta1->bindParam(":busqueda", $busqueda, PDO::PARAM_STR);
        $consulta1->execute();

        $result = $consulta1->fetchAll();

        return $result;
    }

?>
