<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Futbol, Camisetas, Promocion, Baratas, Equipos">
    <meta name="description" content="Iniciar sesión en la cuenta de TopFutbol">
    <meta name="author" content="Pablo & Albert">
    <link rel="stylesheet" type="text/css" href="../css/iniciarSesion.css" />
    <title>Mi Cuenta | TopFutbol</title>
</head>
<body>
    <form id="iniciarSesion" action="../controladors/controlador_inicioSesion.php" method="post">
            <div class="fieldset">
                <div class="logo-form">
                    <legend>
                        <a href="/index.php">
                            <img src="../img/TopFutbol_Logo_Negro.png" class="topfutbol-logo">
                        </a>
                    </legend>
                </div>

                <div class="contenedor-formulario">
                    <div id="correo">
                        <label>Correo Electrónico</label>
                        <input type ="email" id="inputEmail" placeholder="Dirección de email" class="campo" name="email" required>
                        <div class="error">
                            <label id="emailErroneo">Email no registrado</label>
                        </label>
                    </div>

                    <div id="contraseña">
                        <label>Contraseña</label>
                        <input type ="password" placeholder="Mínimo 8 caracteres" minlenght="8" class="campo" name="contraseña" required>
                        <div class="error">
                            <label id="contraseñaErronea">Contraseña incorrecta</label>
                        </label>
                    </div>

                    <div id="registrarse">
                        <a href="?accion=registro" >¿No tienes cuenta? Regístrate </a>
                    </div>

                    <div id="acceder">
                        <input type="submit" value="Acceder">
                    </div>
                </div>
            </div>
    </form>     
</body>
</html>