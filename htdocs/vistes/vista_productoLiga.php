<!--<a href="?accion=camiseta">-->
<div class="contenedor-top" onclick="infoProducto(<?php echo ($fila['idProducto'])?> );">
    <div class="foto-camiseta">
        <img src=<?php echo ($fila['foto'])?> alt=<?php echo ($fila['descripcion'])?> width="200" height="200"><br>
    </div>
    <div class="letras-camiseta">
        <strong><?php echo ($fila['descripcion'])?></strong><br>
    </div>
</div>
<!--</a>-->

