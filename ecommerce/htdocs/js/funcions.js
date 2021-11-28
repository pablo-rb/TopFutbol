$(document).ready(function(){ 
 $(".contenedor-top").click(function(){
 $.ajax({type: "POST", url: "controladors/detallesProducto.php", data:{type:$p} success:  function(result){ 
 //$("#mencions").html(result); 
 }}); 
 }); 
}); 
