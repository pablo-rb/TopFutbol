<?php 
 include_once __DIR__ . "/../models/connectaBD.php";  
 include_once __DIR__ . "/../models/insertarUsuario.php";  
 $connexio = connectaBD();

 $correoCorrecto = insertaUsuario($connexio);

 $connexio = null;

 if ($correoCorrecto == 0)
 {
 include_once __DIR__ . "/../secondary/registro.html"; 
 ?>
 <script type="text/javascript">
  document.getElementById("correoEnUso").style.visibility = 'visible';
 </script>
 <?php
 }
 else{
 include_once __DIR__ . "/../secondary/iniciarSesion.html"; 
}
 

?>