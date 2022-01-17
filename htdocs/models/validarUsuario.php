<?php
    session_start();
    function validaUsuario($connexio)
    {

        $email = $_POST['email'];
        $contrasena =  $_POST['contraseña'];


        $sql = "SELECT email, contraseña, idUsuario FROM usuarios WHERE email=:email";  // AND contraseña=:contrasena";

        $my_Insert_Statement = $connexio->prepare($sql);


        $my_Insert_Statement->bindParam("email", $email,PDO::PARAM_STR);
        $my_Insert_Statement->execute();

        $row = $my_Insert_Statement->fetch();
        $nfilas = $my_Insert_Statement->rowCount();

        if ($nfilas == 1)
        {
            if (password_verify($contrasena, $row['contraseña']))
            {
                //echo 'Sesion iniciada';
                $_SESSION['user_id'] = $row['idUsuario'];
                return 0;
            }
            else{
                //echo 'Contraseña incorrecta';
                $_SESSION['user_id'] = 'none';
                return 1;
            }

        }
        else
        {
            //echo 'Email incorrecto';
            $_SESSION['user_id'] = 'none';
            return 2;
        }


    }