<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Futbol, Camisetas, Promocion, Baratas, Equipos">
    <meta name="description" content="Venta de camisetas de futbol autenticas y baratas">
    <meta name="author" content="Pablo & Albert">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/style.css">
    <script type="text/javascript" src="/js/menusDesplegables.js"></script>
    <script type="text/javascript" src="/js/funcions.js"></script>
    <title>TopFutbol</title>
</head>
<body>

<header id="topheader">
    <?php require __DIR__.'/../controladors/controlador_header.php'; ?>
</header>

<main>
    <div id = "contenidoPrincipal">
        <section id = "destacados">
            <div class="titulos">
                <h1>Destacados</h1>
            </div>
            <div class="contenedor-destacados">
                <a href="">
                    <img src="../img/banner-desktop-lanzamiento.png" alt="Camiseta Exclusiva Superclásico River Plate">
                </a>
            </div>
        </section>

        <section id="categoriasMain">
            <div class="titulos">
                <h1>Ligas</h1>
            </div>

            <?php  include_once __DIR__ . "/../controladors/controlador_listadoLigas.php"; ?>

        </section>


        <section id="topVentas">
            <div class="titulos">
                <h1>Top Ventas</h1>
            </div>
            <div class="contenedor-links-camisetas">
                <?php  include __DIR__ . "/../controladors/controlador_listadoProductosTopVentas.php"; ?>
            </div>
        </section>

        <section id = "rebajas">
            <div class="titulos">
                <h1>Rebajas</h1>
            </div>
            <div class="contenedor-links-camisetas">
                <?php  include __DIR__ . "/../controladors/controlador_listadoProductosRebajas.php"; ?>
            </div>
        </section>

    </div>

</main>


<footer>
    <?php require __DIR__.'/../controladors/controlador_footer.php'; ?>
</footer>

</body>
</html>