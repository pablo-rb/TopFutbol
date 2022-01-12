

<a href="../vistes/equipos.html">
    <?php if ($id == 1 || $id == 4) {?> <div class="contenedor-links-categorias"> <?php } ?>
    <div class="contenedor-top">
        <div class="foto-liga">
            <img src=<?php echo ($result['imagenCategoria'])?> alt=<?php echo ($result['nombre'])?> width="200" height="200"><br>
        </div>
        <div class="letras-liga">
            <strong><?php echo ($result['nombre'])?></strong><br>
        </div>
    </div>
    <?php if ($id == 3 || $id == 6) {?> </div> <?php } ?>
</a>