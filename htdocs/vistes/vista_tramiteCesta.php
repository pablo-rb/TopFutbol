


    <main>   
        <fieldset id ="fieldProducto">
        <div class="contenidoPrincipalProducto">
            <div class="imagenProducto">
                <img src=<?php echo ($result['foto'])?> alt=<?php echo ($result['descripcion'])?> width="140" height="140"><br>
            </div>
            <div class="contenedorDatosProducto">             
               
                    <h3 class="tituloProducto"><?php echo ($result['descripcion'])?></h3>
                    <div id="precioUnidades">
                        <div class="precioProducto">
                            <label class="labelPrecio"><?php echo ($result['precio'])?>€</label>
                        </div>
                        <div class="infoPedido">
                            <label class="labelGratuitos">Envíos gratuitos</label>
                        </div>
                        <!-- <div class="contenedorSelecionadores"> -->
                            <label for 'unidades' class="etiquetaUnidades"><strong>Unidades: <?php echo $unidades ?></strong></label>
                            
                            <!--
                            <label class="etiquetaTallas"><strong>Tamaño:</strong></label>
    
                            <div class="selecionadorTallas">                                
                                <select name="Talla" class="letraTalla">
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                </select>
                            </div>
                            -->
                        <!--</div>-->
                    </div>

               
                
            </div>
                        
        </div>
        </fieldset>
        
    </main>

    