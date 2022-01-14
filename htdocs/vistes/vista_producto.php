<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Futbol, Camisetas, Promocion, Baratas, Equipos">
    <meta name="description" content="Venta de camisetas de futbol autenticas y baratas">
    <meta name="author" content="Pablo & Albert">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/styleProducto.css">
    <script type="text/javascript" src="../js/menusDesplegables.js"></script>
    <title>TopFutbol--Producto</title>
</head>
<body>
    <header>
        <?php include __DIR__ . "/../vistes/vista_header.php"; ?>
    </header>

    <main>
        <div class="contenidoPrincipalProducto">
            <div class="imagenProducto">
                <img src=<?php echo ($result['foto'])?> alt=<?php echo ($result['descripcion'])?> width="500" height="500"><br>
            </div>
            <div class="formularioPedido">
            
            <form onsubmit="anadirCesta(<?php echo ($result['idProducto'])?>, document.getElementById('inputUnidades').value, <?php echo ($result['precio'])?>);"> 
                    <h2 class="tituloProducto"><?php echo ($result['descripcion'])?></h2>
                    <fieldset class="datosProducto">
                        <div class="precioProducto">
                            <label class="labelPrecio"><?php echo ($result['precio'])?>,00€</label>
                        </div>
                        <div class="infoPedido">
                            <label class="labelGratuitos">Envíos gratuitos</label>
                        </div>
                        <div class="contenedorSelecionadores">
                            <label class="etiquetaTallas"><strong>Tamaño:</strong></label>

                            <div class="selecionadorTallas">                                
                                <select name="Talla" class="letraTalla">
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                </select>
                            </div>
                            <label for 'unidades' class="etiquetaUnidades"><strong>Unidades:</strong></label>
                            <div class="selecionadorUnidades">
                                <input type="number" value="1" min="1" max="10" name="unidades" class="numeroUnidades" id="inputUnidades">
                               
                            </div>
                        </div>
                        <div class="botonComprar"> <!-- onclick="anadirCesta(<?php echo ($result['idProducto'])?> );" -->
                           <input type="submit" value="Añadir a la cesta" class="inputComprar" >
                           <!--<label class="inputComprar">Añadir a la cesta</label>-->
                        </div>
                        <div class="divStock">
                            <img src="../img/ico/okey_verde.ico" alt="Icono okey" height="10" width="15">
                            <label class="labelStock">En Stock. Envío inmediato</label>
                        </div>
                    </fieldset>
                </form> 
                
            </div>
                        
        </div>
    </main>

    <footer>
        <?php include __DIR__ . "/../vistes/vista_footer.php"; ?>
    </footer>
</body>
</html>