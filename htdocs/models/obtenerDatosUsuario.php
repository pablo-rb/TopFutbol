<?php

    function obtenerDatosUsuario($connexio)
    {
        $identificadorUsuario = $_SESSION['user_id'];

        $sql = "SELECT * FROM usuarios WHERE idUsuario=:identificadorUsuario";

        $my_Insert_Statement = $connexio->prepare($sql);
        $my_Insert_Statement->bindParam("identificadorUsuario", $identificadorUsuario,PDO::PARAM_STR);
        $my_Insert_Statement->execute();

        $datosUsuario = $my_Insert_Statement->fetch();
        $nfilas = $my_Insert_Statement->rowCount();

        if ($nfilas == 1)
        {
            return $datosUsuario;
        }
        else
        {
            return 0;
        }
    }
?>