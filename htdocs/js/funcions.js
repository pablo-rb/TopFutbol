
function infoProducto($id)
{
$.ajax({type: "POST",url: "controladors/controlador_producto.php",data:{id: $id}, success: function(data){
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

function anadirCesta($id, $unidades, $precio)
{

$.ajax({type: "POST",url: "controladors/controlador_cesta.php",data:{id: $id, unidades:$unidades, precio:$precio}, success: function(data){
        $("body").html(data);
        
    }
    })
    
}

function tramitarCarro($carro)
{

$.ajax({type: "POST",url: "controladors/controlador_tramiteCesta.php",data:{carro: $carro}, success: function(data){
        $("body").html(data);
    }
    })

}

function mostrarCarroVacio()
{ 
    document.getElementById("cestaVacia").style.visibility = 'visible';
    var x = setTimeout(function() {
        $("#cestaVacia").fadeIn(500);
    },10000);

    setTimeout(function() {
        $("#cestaVacia").fadeOut(1500);
    },3000);
    clearTimeout(x);
}


function actualizaUnidades($unidades, $idProducto)
{

$.ajax({type: "POST",url: "controladors/controlador_actualizarUnidades.php",data:{unidades: $unidades, idProducto: $idProducto}, success: function(data){
        $("body").html(data);
    }
    })

}

