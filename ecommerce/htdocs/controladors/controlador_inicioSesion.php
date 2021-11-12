<?php 
 include_once __DIR__ . "/../models/connectaBD.php";  
 include_once __DIR__ . "/../models/validarUsuario.php";  
 $connexio = connectaBD();

 $error = validaUsuario($connexio);

 $connexio = null;
 
 if ($error == 0)
 {
 include_once __DIR__ . "/../index.php";

 
 }
 else
 {
 
     include_once __DIR__ . "/../secondary/iniciarSesion.html"; 
     if ($error == 1)
     {
      ?>
     <script type="text/javascript">
         document.getElementById("contraseñaErronea").style.visibility = 'visible';
     </script>
     <?php
     }
     else
     {
     ?>
     <script type="text/javascript">
         document.getElementById("emailErroneo").style.visibility = 'visible';
     </script>
     <?php
     
     }
     
 }



?>