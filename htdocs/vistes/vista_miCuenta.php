<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Futbol, Camisetas, Promocion, Baratas, Equipos">
    <meta name="description" content="Iniciar sesión en la cuenta de TopFutbol">
    <meta name="author" content="Pablo & Albert">
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
        </div>
    </header>

    <main>
        <form id="registro" action="../controladors/controlador_modificarDatosUsuario.php" method="post">
            <div class="logo-form">
                <legend>
                    <a href="?accion=inicio">
                        <img src="../img/TopFutbol_Logo_Negro.png" class="topfutbol-logo">
                    </a>
                </legend>
            </div>
            <div class="divCrea">
                <label class="labelCrea">Modificar Mi Cuenta</label>
            </div>
            <fieldset class="registro2">

                <legend class="labelDatos">DATOS DE ACCESO</legend>
                <div class="datosAcceso">
                    <div class="correoRegistro">
                        <label for 'email'>CORREO ELECTRÓNICO</label>
                        <div id="divCorreo" class="divCampos">
                            <input type ="email" placeholder="<?php echo ($datosUser['email']) ?>" name="email" required id="inputEmail" class="campos">
                        </div>
                        <div id="correoEnUso">
                            <label>El email introducido ya está en uso</label>
                        </div>
                    </div>
<!--                    <div class="contraseñas">-->
<!--                        <div class="contraseñaRegistro">-->
<!--                            <label for 'contraseña'>CONTRASEÑA</label>-->
<!--                            <div id="divContraseña" class="divCampos">-->
<!--                                <input type ="password" placeholder="Mínimo 8 caracteres" name="contraseña" minlenght="8" required id="inputPassword" class="campos">-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="confirmaContraseña">-->
<!--                            <label>CONFIRMA TU CONTRASEÑA</label>-->
<!--                            <div id="divConfirma" class="divCampos">-->
<!--                                <input type ="password" placeholder="Confirmar contraseña" minlenght="8" required id="inputConfirmar" class="campos">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>


            </fieldset>
            <fieldset class="registro3">

                <legend class="labelDatos">DATOS PERSONALES</legend>
                <div class="contenedorNombres">
                    <div class="nombreApellido">
                        <div class="nombreRegistro">
                            <label for 'nombre' class="label">NOMBRE</label>
                            <div id="divNombre" class="divCampos">
                                <input type ="text" placeholder="<?php echo ($datosUser['nombre']) ?>" name="nombre" required id="inputNombre" class="campos">
                            </div>
                        </div>

                        <div class="apellidoRegistro1">
                            <label for 'apellido1'>PRIMER APELLIDO</label>
                            <div id="divApellido1" class="divCampos">
                                <input type ="text" placeholder="<?php echo ($datosUser['apellido1']) ?>" name="apellido1" required id="inputApellido1" class="campos">
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
                                <input type ="text" placeholder="<?php echo ($datosUser['direccion']) ?>" name="direccion" required id="inputTelefono" class="campos">
                            </div>
                        </div>

                        <div class="poblacion">
                            <label for 'poblacion'>POBLACIÓN</label>
                            <div id="divPoblacion" class="divCampos">
                                <input type ="text" placeholder="<?php echo ($datosUser['poblacion']) ?>" name="poblacion" required id="inputPoblacion" class="campos">
                            </div>
                        </div>

                        <div class="codigoPostal">
                            <label for 'codigoPostal'>CODIGO POSTAL</label>
                            <div id="divCodigoPostal" class="divCampos">
                                <input type ="number" placeholder="<?php echo ($datosUser['codigopostal']) ?>" name="codigo" required id="inputCodigo" class="campos">
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