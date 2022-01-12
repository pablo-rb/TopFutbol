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
    <script type="text/javascript" src="../vistes/menusDesplegables.js"></script>
    <title>TopFutbol Producto</title>
</head>
<body>
    <header id="topheader">
        <div class="contenedor-items-header">
            <div id="superior-menu" class="separador-nav">

                <div id="logo-principal">
                    <a href="../index.php">
                        <img src="../img/TopFutbol_Logo.png" alt="Logo TopFutbol" width="150" />
                    </a>
                </div>

                <div id = "buscador">
                    <input type="text" id="barrabusqueda" placeholder="Buscar Camisetas" class="search" autocomplete="off">
                </div>

                <div class="inicio-sesion-carrito">

                    <!--
                    <div id="btn-usuario-not-logged">
                        <nav id="btn-usuario">
                            <ul>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <circle cx="12" cy="7" r="4" />
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                        </svg>
                                    </a>
                                    <ul id="toggle-post-ini">
                                        <li><span id="iniciar-sesion"><a href="vistes/iniciarSesion.html"><strong>Iniciar Sesión</strong></a></li></span>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    -->


                    <div id="btn-usuario-logged">
                        <nav id="btn-usuario">
                            <ul>
                                <li>
                                    <a href="vistes/iniciarSesion.html">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <circle cx="12" cy="7" r="4" />
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                        </svg>
                                    </a>
                                    <ul id="toggle-post-ini">
                                        <li><span id="mi-cuenta"><a href="#"><strong>Mi Cuenta</strong></a></li></span>
                                        <li><span id="mis-compras"><a href="#"><strong>Mis Compras</strong></a></li></span>
                                        <li><span id="cerrar-sesion"><a href="#"><strong>Cerrar Sesión</strong></a></li></span>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div id="carrito">
                        <a href="#">

                            <!--<img src="../img/ico/shopping-cart.ico" alt="Carrito De Compra" height="30" width="30">-->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <circle cx="6" cy="19" r="2" />
                                <circle cx="17" cy="19" r="2" />
                                <path d="M17 17h-11v-14h-2" />
                                <path d="M6 5l14 1l-1 7h-13" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div id="navegador-ligas" class="separador-nav">
                <nav id="menu-desplegable-ligas">
                    <ul id="contenedores-ligas">
                        <li>
                            <a href="#" class="letras-header">LaLiga</a>
                            <ul>
                                <li><a href="../vistes/producto.html">FC Barcelona</a></li>
                                <li><a href="#">Real Madrid</a></li>
                                <li><a href="#">Atlético de Madrid</a></li>
                                <li><a href="#">Sevilla</a></li>
                                <li><a href="#">Valencia</a></li>
                                <li><a href="#">Athletic Bilbao</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="letras-header">Premier League</a>
                            <ul>
                                <li><a href="#">Chelsea FC</a></li>
                                <li><a href="#">Manchester United</a></li>
                                <li><a href="#">Manchester City</a></li>
                                <li><a href="#">Liverpool</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="letras-header">Bundesliga</a>
                            <ul>
                                <li><a href="#">Bayern de Múnich</a></li>
                                <li><a href="#">Borussia Dortmund</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="letras-header">Ligue1</a>
                            <ul>
                                <li><a href="#">PSG</a></li>
                                <li><a href="#">AS Mónaco</a></li>
                                <li><a href="#">O. Lyon</a></li>
                                <li><a href="#">O. Marsella</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="letras-header">Serie A</a>
                            <ul>
                                <li><a href="#">Juventus</a></li>
                                <li><a href="#">Inter</a></li>
                                <li><a href="#">AC Milán</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="letras-header">Otras</a>
                            <ul>
                                <li><a href="#">River Plate</a></li>
                                <li><a href="#">Ajax</a></li>
                                <li><a href="#">Benfica</a></li>
                                <li><a href="#">Shakhtar</a></li>
                                <li><a href="#">Flamengo</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>


    <main>
        <div class="contenidoPrincipalProducto">
            <div class="imagenProducto">
                <img src=<?php echo ($result['foto'])?> alt=<?php echo ($result['descripcion'])?> width="500" height="500"><br>
            </div>
            <div class="formularioPedido">
                <form>
                    <h2 class="tituloProducto"><?php echo ($result['descripcion'])?></h2>
                    <fieldset class="datosProducto">
                        <div class="precioProducto">
                            <label class="labelPrecio"><?php echo ($result['precio'])?></label>
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
                            <label class="etiquetaUnidades"><strong>Unidades:</strong></label>
                            <div class="selecionadorUnidades">
                                <input type="number" value="1" min="1" max="10" class="numeroUnidades">
                            </div>
                        </div>
                        <div class="botonComprar">
                            <input type="submit" value="Añadir a la cesta" class="inputComprar">
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
        <div id="contenedor-newLetter-redesSociales">
            <div class="newletter">
                <h2>Suscríbete a nuestra NEWSLETTER</h2>
                <p>Recibe descuentos de escándalo antes que nadie</p>
                <form>
                    <div id="contenedorMail">
                        <input type ="email" placeholder="Introduce tu email aquí" required id="inputMail" class="campo">
                        <div class="boton-suscribirse">
                            <input type="submit" value="Suscríbete" id="inputSuscribirse">
                        </div>
                    </div>
                </form>
            </div>
    
            <div class="redes">
                <div class="letras-redes">
                    <h3>Síguenos en nuestas Redes Sociales</h3>
                </div>
                <div id="redesSociales">
                    <div class="contenedor-redessociales">
                        <a href="https://www.instagram.com/">
                            <img src="../img/ico/instagram.ico" alt="Icono Instagram" height="30" width="30">
                            <p class="labelRedSocial">Instagram</p>
                        </a>
                    </div>
                    <div class="contenedor-redessociales">
                        <a href="https://www.facebook.com/">
                            <img src="../img/ico/facebook.ico" alt="Icono Facebook" height="30" width="30">
                            <p class="labelRedSocial">Facebook</p>
                        </a>
                    </div>
                    <div class="contenedor-redessociales">
                        <a href="https://twitter.com/home">
                            <img src="../img/ico/twitter.ico" alt="Icono Twitter" height="30" width="30">
                            <p class="labelRedSocial">Twitter</p>
                        </a>
                    </div>
                    <div class="contenedor-redessociales">
                        <a href="https://www.tiktok.com/">
                            <img src="../img/ico/tiktok.ico" alt="Icono TikTok" height="30" width="30">
                            <p class="labelRedSocial">TikTok</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="extrasFooter">
            <div class="contenedor-extras">
                <img src="../img/ico/contact.ico" alt="Icono Contacto" height="30" width="30">
                <p class="letras-extras">CONTACTAR</p>
            </div>
            <div class="contenedor-extras">
                <img src="../img/ico/help.ico" alt="Icono Ayuda" height="30" width="30">
                <p class="letras-extras">AYUDA</p>
            </div>
            <div class="contenedor-extras">
                <img src="../img/ico/work-with-us.ico" alt="Icono Trabaja con Nosotros" height="30" width="30">
                <p class="letras-extras">TRABAJA CON NOSOTROS</p>
            </div>
        </div>
    </footer>
</body>
</html>