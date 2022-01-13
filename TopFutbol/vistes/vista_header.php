
    <div class="contenedor-items-header">
        <div id="superior-menu" class="separador-nav">

            <div id="logo-principal">
                <a href="#">
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
                                <ul id="toggle-post-ini">
                                    <li><span id="iniciar-sesion"><a href="<?php echo $accionConsulta[1]['href'] ?>"><strong>Iniciar Sesión</strong></a></li></span>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!--
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
                          <li><span id="mi-cuenta"><a href="#"><strong>Mi Cuenta</strong></a></span></li>
                          <li><span id="mis-compras"><a href="#"><strong>Mis Compras</strong></a></span></li>
                          <li><span id="cerrar-sesion"><a href="#"><strong>Cerrar Sesión</strong></a></span></li>
                        </ul>
                      </li>
                    </ul>
                  </nav>
                </div>
        -->
                <div id="carrito">
                    <a>

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
                            <li><a href="../vistes/producto.html">Real Madrid</a></li>
                            <li><a href="../vistes/producto.html">Atlético de Madrid</a></li>
                            <li><a href="../vistes/producto.html">Sevilla</a></li>
                            <li><a href="../vistes/producto.html">Valencia</a></li>
                            <li><a href="../vistes/producto.html">Athletic Bilbao</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="letras-header">Premier League</a>
                        <ul>
                            <li><a href="../vistes/producto.html">Chelsea FC</a></li>
                            <li><a href="../vistes/producto.html">Manchester United</a></li>
                            <li><a href="../vistes/producto.html">Manchester City</a></li>
                            <li><a href="../vistes/producto.html">Liverpool</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="letras-header">Bundesliga</a>
                        <ul>
                            <li><a href="../vistes/producto.html">Bayern de Múnich</a></li>
                            <li><a href="../vistes/producto.html">Borussia Dortmund</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="letras-header">Ligue1</a>
                        <ul>
                            <li><a href="../vistes/producto.html">PSG</a></li>
                            <li><a href="../vistes/producto.html">AS Mónaco</a></li>
                            <li><a href="../vistes/producto.html">O. Lyon</a></li>
                            <li><a href="../vistes/producto.html">O. Marsella</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="letras-header">Serie A</a>
                        <ul>
                            <li><a href="../vistes/producto.html">Juventus</a></li>
                            <li><a href="../vistes/producto.html">Inter</a></li>
                            <li><a href="../vistes/producto.html">AC Milán</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="letras-header">Otras</a>
                        <ul>
                            <li><a href="../vistes/producto.html">River Plate</a></li>
                            <li><a href="../vistes/producto.html">Ajax</a></li>
                            <li><a href="../vistes/producto.html">Benfica</a></li>
                            <li><a href="../vistes/producto.html">Shakhtar</a></li>
                            <li><a href="../vistes/producto.html">Flamengo</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
