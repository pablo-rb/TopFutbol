<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Futbol, Camisetas, Promocion, Baratas, Equipos">
    <meta name="description" content="Iniciar sesión en la cuenta de TopFutbol">
    <meta name="author" content="Pablo & Albert">
    <link rel="stylesheet" type="text/css" href="../css/registro.css" />
    <title>Crear Cuenta | TopFutbol</title>
</head>
<body>

<form id="registro" action="../controladors/controlador_registro_usuari.php">
    <div class="logo-form">
        <legend>
            <a href="?accion=inicio">
                <img src="../img/TopFutbol_Logo_Negro.png" class="topfutbol-logo">
            </a>
        </legend>
    </div>
    <div class="divCrea">
        <label class="labelCrea">Crea tu cuenta de TopFutbol con estos sencillos pasos</label>
    </div>
    <fieldset class="registro2">

        <legend class="labelDatos">DATOS DE ACCESO</legend>
        <div class="datosAcceso">
            <div class="correoRegistro">
                <label for 'email'>CORREO ELECTRÓNICO</label>
                <div id="divCorreo" class="divCampos">
                    <input type ="email" placeholder="Dirección de email" name="email" required id="inputEmail" class="campos">
                </div>
                <div id="correoEnUso">
                    <label>El email introducido ya está en uso</label>
                </div>
            </div>
            <div class="contraseñas">
                <div class="contraseñaRegistro">
                    <label for 'contraseña'>CONTRASEÑA</label>
                    <div id="divContraseña" class="divCampos">
                        <input type ="password" placeholder="Mínimo 8 caracteres" name="contraseña" minlenght="8" required id="inputPassword" class="campos">
                    </div>
                </div>

                <div class="confirmaContraseña">
                    <label>CONFIRMA TU CONTRASEÑA</label>
                    <div id="divConfirma" class="divCampos">
                        <input type ="password" placeholder="Confirmar contraseña" minlenght="8" required id="inputConfirmar" class="campos">
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
                        <input type ="text" placeholder="Nombre" name="nombre" required id="inputNombre" class="campos">
                    </div>
                </div>

                <div class="apellidoRegistro1">
                    <label for 'apellido1'>PRIMER APELLIDO</label>
                    <div id="divApellido1" class="divCampos">
                        <input type ="text" placeholder="Primer apellido" name="apellido1" required id="inputApellido1" class="campos">
                    </div>
                </div>

                <div class="apellidoRegistro2">
                    <label for 'apellido2'>SEGUNDO APELLIDO</label>
                    <div id="divApellido2" class="divCampos">
                        <input type ="text" placeholder="Segundo apellido" name="apellido2" id="inputApellido2" class="campos">
                    </div>
                </div>
            </div>

            <div class="ApellidoTelefono">

                <div class="TELÉFONO">
                    <label for 'direccion'>DIRECCIÓN</label>
                    <div id="divTelefono" class="divCampos">
                        <input type ="text" placeholder="Dirección" name="direccion" required id="inputTelefono" class="campos">
                    </div>
                </div>

                <div class="poblacion">
                    <label for 'poblacion'>POBLACIÓN</label>
                    <div id="divPoblacion" class="divCampos">
                        <input type ="text" placeholder="Población" name="poblacion" required id="inputPoblacion" class="campos">
                    </div>
                </div>

                <div class="codigoPostal">
                    <label for 'codigoPostal'>CODIGO POSTAL</label>
                    <div id="divCodigoPostal" class="divCampos">
                        <input type ="number" placeholder="Codigo Postal" name="codigo" required id="inputCodigo" class="campos">
                    </div>
                </div>
            </div>
        </div>
        <div id="crearCuenta">
            <input type="submit" value="CREAR CUENTA">
        </div>

    </fieldset>
</form>

</body>
</html>