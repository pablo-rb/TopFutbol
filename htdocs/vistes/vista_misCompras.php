<main>   
            
        <fieldset id="fieldInfo">
            <div class="divContedor">
                <fieldset id="fieldSeparador">
                <div class="infoGeneral">
                    <div id="fecha">
                        <label><strong>Fecha: </strong><?php echo $pedido['fecha']; ?></label>
                    </div>
                    <div id="importeTotal">
                        <label><strong>Importe total: </strong><?php echo $pedido['importe_total']; ?>,00€</label>
                    </div>
                    <div id="elementosTotales">
                        <label><strong>Elementos totales: </strong><?php echo $pedido['elementos_totales']; ?></label>
                    </div>
                </div>
                </fieldset>
                
                    
                        <?php foreach ($productos as $producto){?>
                <div class="infoProductos">
                    <div class="imagenProducto">
                            <img src=<?php echo ($producto['foto'])?> alt=<?php echo ($producto['nombre'])?> width="100" height="100"><br>
                    </div>
                    <div class="nombrePrecioUnidades">
                        <div class="contenedorNombre">
                                <label class="etiquetaNombre"><?php echo ($producto['nombre'])?></label>                                
                            </div>
                        <div id="precioUnidades">
                            <div class="precioProducto">
                                <label class="labelPrecio"><?php echo ($producto['precio'])?>€</label>
                            </div>
                            
                            <div class="contenedorUnidades">
                                <label class="etiquetaUnidades">Unidades: <?php echo ($producto['cantidad'])?></label>                                
                            </div>

                        </div>
                    </div>
                </div>
            </div>



            <?php
            
            }
            ?>
            
        </fieldset>
    </main>