<?php
    session_start();
?>

<div class="contenedor-items-header">
    <div id="superior-menu" class="separador-nav">

        <div id="logo-principal">
            <a href="?accion=inicio">
                <img src="../img/TopFutbol_Logo.png" alt="Logo TopFutbol" width="150" />
            </a>
        </div>

        <div id = "buscador">
            <input type="text" id="barrabusqueda" placeholder="Buscar Camisetas" class="search" autocomplete="off">
        </div>

        <div class="inicio-sesion-carrito">


            <div id="btn-usuario-not-logged">
                <nav id="btn-usuario">
                    <ul>
                        <li>
                            <a>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <circle cx="12" cy="7" r="4" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                </svg>
                            </a>
                            <ul id="toggle-post-ini" class="sesion_no_iniciada">
                                <!--
                                    <li><span id="iniciar-sesion"><a href="<?php echo $accionConsulta[1]['href'] ?>"><strong>Iniciar Sesión</strong></a></li></span>
                                    -->
                                <li><span id="iniciar-sesion"><a href="?accion=inicio_sesion"><strong>Iniciar Sesión</strong></a></li></span>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>


            <!--                <div id="btn-usuario-logged">-->
            <!--                  <nav id="btn-usuario">-->
            <!--                    <ul>-->
            <!--                      <li>-->
            <!--                        <a>-->
            <!--                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">-->
            <!--                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>-->
            <!--                            <circle cx="12" cy="7" r="4" />-->
            <!--                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />-->
            <!--                          </svg>-->
            <!--                        </a>-->
            <!--                        <ul id="toggle-post-ini" class="sesion_iniciada">-->
            <!--                          <li><span id="mi-cuenta"><a href="#"><strong>Mi Cuenta</strong></a></span></li>-->
            <!--                          <li><span id="mis-compras"><a href="#"><strong>Mis Compras</strong></a></span></li>-->
            <!--                          <li><span id="cerrar-sesion"><a href="#"><strong>Cerrar Sesión</strong></a></span></li>-->
            <!--                        </ul>-->
            <!--                      </li>-->
            <!--                    </ul>-->
            <!--                  </nav>-->
            <!--                </div>-->

            <div id="carrito">
                <nav id="btn-carrito">
                    <ul>
                        <li>
                            <a href="#">

                                <!--<img src="../img/ico/shopping-cart.ico" alt="Carrito De Compra" height="30" width="30">-->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <circle cx="6" cy="19" r="2" />
                                    <circle cx="17" cy="19" r="2" />
                                    <path d="M17 17h-11v-14h-2" />
                                    <path d="M6 5l14 1l-1 7h-13" />
                                </svg>
                                <label id="numCarrito"><?php echo($_SESSION['numCarrito'])?> </label>
                            </a>
                            <ul id="toggle-post-ini-carro">
                                <li><span id="carro-precio"><a href="#"><strong>Precio: <?php echo($_SESSION['precio'])?>€</strong></a></span></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
    <div id="navegador-ligas" class="separador-nav">
        <nav id="menu-desplegable-ligas">
            <ul id="contenedores-ligas">
                <li>
                    <a href="#" class="letras-header">LaLiga</a>
                    <ul>
                        <li><a onclick="infoProducto(<?php echo (1)?>);">FC Barcelona</a></li>
                        <li><a onclick="infoProducto(<?php echo (5)?>);">Real Madrid</a></li>
                        <li><a onclick="infoProducto(<?php echo (25)?>);">Atlético de Madrid</a></li>
                        <li><a onclick="infoProducto(<?php echo (27)?>);">Sevilla</a></li>
                        <li><a onclick="infoProducto(<?php echo (28)?>);">Valencia</a></li>
                        <li><a onclick="infoProducto(<?php echo (26)?>);">Athletic Bilbao</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="letras-header">Premier League</a>
                    <ul>
                        <li><a onclick="infoProducto(<?php echo (16)?>);">Chelsea FC</a></li>
                        <li><a onclick="infoProducto(<?php echo (3)?>);">Manchester United</a></li>
                        <li><a onclick="infoProducto(<?php echo (7)?>);">Manchester City</a></li>
                        <li><a onclick="infoProducto(<?php echo (6)?>);">Liverpool</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="letras-header">Bundesliga</a>
                    <ul>
                        <li><a onclick="infoProducto(<?php echo (12)?>);">Bayern de Múnich</a></li>
                        <li><a onclick="infoProducto(<?php echo (8)?>);">Borussia Dortmund</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="letras-header">Ligue1</a>
                    <ul>
                        <li><a onclick="infoProducto(<?php echo (4)?>);">PSG</a></li>
                        <li><a onclick="infoProducto(<?php echo (20)?>);">AS Mónaco</a></li>
                        <li><a onclick="infoProducto(<?php echo (18)?>);">O. Lyon</a></li>
                        <li><a onclick="infoProducto(<?php echo (19)?>);">O. Marsella</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="letras-header">Serie A</a>
                    <ul>
                        <li><a onclick="infoProducto(<?php echo (2)?>);">Juventus</a></li>
                        <li><a onclick="infoProducto(<?php echo (14)?>);">Inter</a></li>
                        <li><a onclick="infoProducto(<?php echo (15)?>);">AC Milán</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="letras-header">Otras</a>
                    <ul>
                        <li><a onclick="infoProducto(<?php echo (11)?>);">River Plate</a></li>
                        <li><a onclick="infoProducto(<?php echo (17)?>);">Ajax</a></li>
                        <li><a onclick="infoProducto(<?php echo (10)?>);">América</a></li>
                        <li><a onclick="infoProducto(<?php echo (9)?>);">LA Galaxy</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
