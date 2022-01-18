<?php


    function modificarDatos($connexio, $emailMod, $nombreMod, $apellido1Mod, $apellido2Mod, $direccionMod, $poblacionMod, $codigopostalMod, $nombreFichero, $password)
    {
        $identificadorUsuario = $_SESSION['user_id'];


        $sql_update = "UPDATE usuarios
                            SET email=:emailMod,
                                nombre=:nombreMod,
                                apellido1=:apellido1Mod,
                                apellido2=:apellido2Mod,
                                direccion=:direccionMod,
                                poblacion=:poblacionMod,
                                codigopostal=:codigopostalMod,
                                imagenPerfil=:nombreFichero,
                                contraseña=:password
                                WHERE idUsuario=:identificadorUsuario";                                  
       
        $consulta_update = $connexio->prepare($sql_update);

        $consulta_update->bindParam(":emailMod", $emailMod,PDO::PARAM_STR);
        $consulta_update->bindParam(":nombreMod", $nombreMod,PDO::PARAM_STR);
        $consulta_update->bindParam(":apellido1Mod", $apellido1Mod,PDO::PARAM_STR);
        $consulta_update->bindParam(":apellido2Mod", $apellido2Mod,PDO::PARAM_STR);
        $consulta_update->bindParam(":direccionMod", $direccionMod,PDO::PARAM_STR);
        $consulta_update->bindParam(":poblacionMod", $poblacionMod,PDO::PARAM_STR);
        $consulta_update->bindParam(":codigopostalMod", $codigopostalMod,PDO::PARAM_STR);
        $consulta_update->bindParam(":nombreFichero", $nombreFichero,PDO::PARAM_STR);
        $consulta_update->bindParam(":password", $password, PDO::PARAM_STR);
        $consulta_update->bindParam(":identificadorUsuario", $identificadorUsuario,PDO::PARAM_STR);

        $consulta_update->execute();

        return 1;
    }
?>