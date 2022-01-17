<?php

    function productoPorCategoria($idCat, $connexio)
    {
        $sql = "SELECT *
                            FROM producto p, categorias c
                            WHERE p.idCategoria = c.idCategoria AND c.idCategoria = :idCat";
        $consulta1 = $connexio->prepare($sql);
        $consulta1->bindParam(":idCat", $idCat,PDO::PARAM_STR);
        $consulta1->execute();

        $result = $consulta1->fetchAll();
        return $result;
    }

    ?>