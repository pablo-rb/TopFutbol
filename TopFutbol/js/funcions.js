
function infoProducto($id)
{
    $.ajax({type: "POST",url: "controladors/controlador_producto.php",data:{id: $id}, success:
            function(data){
                $("body").html(data);
            }
        })
}
