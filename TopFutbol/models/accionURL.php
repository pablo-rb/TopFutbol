<?php

    function consulta_accion_url($connexio) {

        $sql = "SELECT href FROM switchpaginas";

        $consulta = $connexio->prepare($sql);
        $consulta->execute();
        $accion = $consulta->fetchAll();

        return $accion;
    }

    ?>