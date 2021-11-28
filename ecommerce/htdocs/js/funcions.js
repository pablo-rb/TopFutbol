
/*
$(document).ready(function(){ 
 $(".contenedor-top").click(infoProducto('2')){
  $.ajax({type: "POST", url: "controladors/detallesProducto.php",  data:{type:'2'} success:  function(result){ 
 //$("#mencions").html(result); 
 }}); 
 }); 
}); 


function infoProducto()
{
 $.ajax({type: "POST", url: "controladors/detallesProducto.php", data:{'2'}}) // data:{type:'2'}
}
*/


function infoProducto($id)
{
$.ajax({type: "POST",url: "controladors/detallesProducto.php",data:{id: $id}, success: function(data){
        $("body").html(data);
    }
    })
}