
function infoProducto($id)
{
$.ajax({type: "POST",url: "controladors/controlador_detallesProducto.php",data:{id: $id}, success: function(data){
        $("body").html(data);
    }
    })
}

/*function anadirCesta($id, $unidades, $precio, $descripcion, $foto)
{

$.ajax({type: "POST",url: "controladors/controlador_cesta.php",data:{id: $id, unidades:$unidades, precio:$precio, descripcion:$descripcion, foto:$foto}, success: function(data){
        $("body").html(data);
    }
    })

}*/

function anadirCesta($id, $unidades, $precio, $descripcion)
{

$.ajax({type: "POST",url: "controladors/controlador_cesta.php",data:{id: $id, unidades:$unidades, precio:$precio, descripcion:$descripcion}, success: function(data){
        $("body").html(data);
    }
    })

}

function tramitarCarro()
{

$.ajax({type: "POST",url: "controladors/controlador_tramiteCesta.php", success: function(data){
        $("body").html(data);
    }
    })

}
