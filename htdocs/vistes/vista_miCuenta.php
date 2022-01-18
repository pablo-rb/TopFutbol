<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Futbol, Camisetas, Promocion, Baratas, Equipos">
    <meta name="description" content="Iniciar sesión en la cuenta de TopFutbol">
    <meta name="author" content="Pablo & Albert">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="/js/menusDesplegables.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/styleModificarDatos.css" />
    <title>Mi Cuenta | TopFutbol</title>
</head>
<body>

    <header id="topheader">
        <div class="contenedor-items-header">
            <div id="superior-menu" class="separador-nav">

                <div id="logo-principal">
                    <a href="?accion=inicio">
                        <img src="../img/TopFutbol_Logo.png" alt="Logo TopFutbol" width="150" />
                    </a>
                </div>

                <div class="inicio-sesion-carrito">

                    <div id="<?php if($_SESSION['user_id'] != 'none') {echo "btn-usuario-logged";} else{echo "btn-usuario-not-logged";} ?>">
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

                                    <?php
                                    if($_SESSION['user_id'] != 'none')
                                    {
                                        include __DIR__ . "/vista_usuario_logeado.php";
                                    }
                                    else{
                                        include __DIR__ . "/vista_usuario_no_logeado.php";
                                    }
                                    ?>

                                </li>
                            </ul>
                        </nav>
                    </div>

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
                                        <li><span id="carro-productos"><a href="#"><strong>Productos: <?php echo($_SESSION['numCarrito'])?></strong></a></span></li>
                                        <li><span id="carro-precio"><a href="#"><strong>Precio: <?php echo($_SESSION['precio'])?>€</strong></a></span></li>
                                        <li><span ><a href="#" id="carro-tramitar" onclick="tramitarCarro()"><strong>TRAMITAR</strong></a></span></li>
                                        <li><span ><a href="#" id="carro-vaciar" onclick="anadirCesta('1','0','0') ; location.reload();" ><strong>Vaciar</strong></a></span></li
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
    </header>

    <main>
        <form id="registro" action="../controladors/controlador_modificarDatosUsuario.php" method="post" enctype="multipart/form-data">
            <div class="logo-form">
                <legend>
                    <a href="?accion=inicio">
                        <img src="../img/TopFutbol_Logo_Negro.png" class="topfutbol-logo">
                    </a>
                </legend>
            </div>
            <div class="divCrea">
                <label class="labelCrea">Datos de <?php echo $datosUser['nombre'] ?></label>
            </div>
            <fieldset class="registro2">
                <legend class="labelDatos">DATOS DE ACCESO</legend>
                <div class="datosAcceso">
                    <div class="correoRegistro">
                        <label for 'email'>CORREO ELECTRÓNICO</label>
                        <div id="divCorreo" class="divCampos">
                            <input type ="email" placeholder="<?php echo ($datosUser['email']) ?>" name="email" id="inputEmail" class="campos">
                        </div>
                        <div id="correoEnUso">
                            <label>El email introducido ya está en uso</label>
                        </div>
                        <label for 'contraseña'>CONTRASEÑA ACTUAL</label>
                        <div id="divContraseña" class="divCampos">
                            <input type ="password" placeholder="Contraseña Actual" name="contraseña_actual" id="inputContraseña" class="campos">
                        </div>

                        <label for 'contraseña'>NUEVA CONTRASEÑA</label>
                        <div id="divContraseña" class="divCampos">
                            <input type ="password" placeholder="Nueva Contraseña" name="contraseña_nueva" id="inputContraseña" class="campos">
                        </div>
                    </div>
                    <div class="contraseñas">
                        <div class="contraseñaRegistro">
                            <div>
                                <img src="<?php echo ($filesPublicPath . $datosUser['imagenPerfil']) ?>" class="imagen_perfil" alt="<?php echo "Imagen de Perfil de " . $datosUser['nombre'] ?>">
                            </div>
                            <div>
                                <input type="file" name="profile_image">
                            </div>
                            <div>
                                <input type="submit" onsubmit="" value="Actualizar Imagen">
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset class="registro3">

                <legend class="labelDatos">DATOS PERSONALES</legend>
                <div class="contenedorNombres">
                    <div class="nombreApellido">
                        <div class="nombreRegistro">
                            <label for 'nombre' class="label">NOMBRE</label>
                            <div id="divNombre" class="divCampos">
                                <input type ="text" placeholder="<?php echo ($datosUser['nombre']) ?>" name="nombre" id="inputNombre" class="campos">
                            </div>
                        </div>

                        <div class="apellidoRegistro1">
                            <label for 'apellido1'>PRIMER APELLIDO</label>
                            <div id="divApellido1" class="divCampos">
                                <input type ="text" placeholder="<?php echo ($datosUser['apellido1']) ?>" name="apellido1" id="inputApellido1" class="campos">
                            </div>
                        </div>

                        <div class="apellidoRegistro2">
                            <label for 'apellido2'>SEGUNDO APELLIDO</label>
                            <div id="divApellido2" class="divCampos">
                                <input type ="text" placeholder="<?php echo ($datosUser['apellido2']) ?>" name="apellido2" id="inputApellido2" class="campos">
                            </div>
                        </div>
                    </div>

                    <div class="ApellidoTelefono">

                        <div class="TELÉFONO">
                            <label for 'direccion'>DIRECCIÓN</label>
                            <div id="divTelefono" class="divCampos">
                                <input type ="text" placeholder="<?php echo ($datosUser['direccion']) ?>" name="direccion" id="inputTelefono" class="campos">
                            </div>
                        </div>

                        <div class="poblacion">
                            <label for 'poblacion'>POBLACIÓN</label>
                            <div id="divPoblacion" class="divCampos">
                                <input type ="text" placeholder="<?php echo ($datosUser['poblacion']) ?>" name="poblacion" id="inputPoblacion" class="campos">
                            </div>
                        </div>

                        <div class="codigoPostal">
                            <label for 'codigoPostal'>CODIGO POSTAL</label>
                            <div id="divCodigoPostal" class="divCampos">
                                <input type ="number" placeholder="<?php echo ($datosUser['codigopostal']) ?>" name="codigo" id="inputCodigo" class="campos">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="crearCuenta">
                    <input type="submit" onsubmit="" value="MODIFICAR DATOS">
                </div>

            </fieldset>
        </form>
    </main>

</body>
</html>