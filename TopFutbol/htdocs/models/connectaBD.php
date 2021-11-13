
<?php

 function connectaBD(){
     $servidor = "localhost";
     $usuari = "pablo";
     $clau = "topfut123";
     try{
         $connexio = new PDO("mysql:host=$servidor;dbname=topfutbol;charset=UTF8", $usuari, $clau);
         $connexio->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
     }
     return($connexio);
 }
?>