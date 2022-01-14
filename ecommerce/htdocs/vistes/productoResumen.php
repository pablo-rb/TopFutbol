
<!-- <a href="#"> -->
  <div class="contenedor-top" onclick="infoProducto(<?php echo ($result['idProducto'])?> );">
    <div class="foto-camiseta">
        <img src=<?php echo ($result['foto'])?> alt=<?php echo ($result['descripcion'])?> width="200" height="200"><br>
    </div>
    <div class="letras-camiseta">
        <strong><?php echo ($result['descripcion'])?></strong><br>
    </div>
  </div>
<!-- </a> -->