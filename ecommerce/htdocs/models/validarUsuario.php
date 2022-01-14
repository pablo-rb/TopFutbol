<?php

function validaUsuario($connexio)
{

    $email = $_REQUEST['email'];
    $contrasena =  $_REQUEST['contraseña'];


    $sql = "SELECT email, contraseña, idUsuario FROM usuarios WHERE email=:email";  // AND contraseña=:contrasena";

    $my_Insert_Statement = $connexio->prepare($sql);


    $my_Insert_Statement->bindParam("email", $email,PDO::PARAM_STR);
    $my_Insert_Statement->execute();

    $row = $my_Insert_Statement->fetch();
    $filas = $my_Insert_Statement->rowCount();

    if ($filas == 1)
    {
        if (password_verify($contrasena, $row['contraseña']))
        {
            //echo 'Sesion iniciada';
            
            return 0;
        }
        else{
            //echo 'Contraseña incorrecta';
            return 1;
        }

    }
    else
    {
        //echo 'Email incorrecto';
        return 2;
    }


}