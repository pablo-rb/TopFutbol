
<div id="finalizar-compra">
    <div id="vaciar">
        <input type="button"  id="buttonVaciar" value="Vaciar cesta" onclick="anadirCesta('1','0','0')">
    </div>
    <div id="precioFinalitza">
        <div>
            <label id="precioTotal"><strong>Total: <?php echo $total ?>€</strong></label>
        </div>
        <!--<form action="../controladors/controlador_finalitzarCompra.php">-->
        <div>
            <a href="?accion=tramitada">
                <input type="submit" id="buttonFinalitzar" value="Finalizar Pedido">
            </a>
        </div>
    </div>
</div>
<!--</form>-->


