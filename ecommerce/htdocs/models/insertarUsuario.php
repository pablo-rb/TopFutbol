

<?php
//include_once __DIR__ . "/../vistes/emailEnUso.js";  
function insertaUsuario($connexio){

   $email = $_REQUEST['email'];
   $nombre =  $_REQUEST['nombre'];
   $apellido1 = $_REQUEST['apellido1'];
   $apellido2 =  $_REQUEST['apellido2'];
   $password = $_REQUEST['contraseña'];
   $direccion = $_REQUEST['direccion'];
   $poblacion = $_REQUEST['poblacion'];
   $codigopostal = $_REQUEST['codigo'];
   
   //encriptamos la contraseña
   $contrasena = password_hash($password, PASSWORD_DEFAULT);
   
   //comprobar si existe el usuario
   
   $sql1 = "SELECT email 
            FROM usuarios 
            WHERE email=:email";
   
   $consulta1 = $connexio->prepare($sql1);   
   $consulta1->bindParam("email", $email,PDO::PARAM_STR);
   $consulta1->execute();
   
    $filas = $consulta1->rowCount();
    
    if ($filas == 1)
    {
        //emailEnUso();
        return 0;
    }
    else
    {
        //insertar nuevo usuario
        $sql2 = "INSERT INTO usuarios (email, nombre, apellido1, apellido2, contraseña, direccion, poblacion, codigopostal) 
                    VALUES (:email, :nombre, :apellido1, :apellido2, :contrasena, :direccion, :poblacion, :codigopostal)";

        $consulta2 = $connexio->prepare($sql2);



        $consulta2->bindParam( ':email', $email, PDO::PARAM_STR);
        $consulta2->bindParam( ':nombre', $nombre, PDO::PARAM_STR);
        $consulta2->bindParam( ':apellido1', $apellido1, PDO::PARAM_STR);
        $consulta2->bindParam( ':apellido2', $apellido2, PDO::PARAM_STR);
        $consulta2->bindParam( ':contrasena', $contrasena, PDO::PARAM_STR);
        $consulta2->bindParam( ':direccion', $direccion, PDO::PARAM_STR);
        $consulta2->bindParam( ':poblacion', $poblacion, PDO::PARAM_STR);
        $consulta2->bindParam( ':codigopostal', $codigopostal, PDO::PARAM_INT);


        if ($consulta2->execute())
        {
          //echo "New record created successfully";
        }else {
          //echo "Unable to create record";
        }
    }
   return 1;
}
?>

