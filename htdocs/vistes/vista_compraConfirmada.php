<main>   
            
        <div id="labelPedidoCorrecto">
            <h2><label>¡Tu pedido se ha tramitado correctamente!</label><h2></br>
        </div>

        <fieldset id="fieldInfo">
            <div id="fecha">
                <label><strong>Fecha: </strong><?php echo $resultat[0]; ?></label>
            </div>
            <div id="importeTotal">
                <label><strong>Importe total: </strong><?php echo $resultat[1]; ?>,00€</label>
            </div>
            <div id="elementosTotales">
                <label><strong>Elementos totales: </strong><?php echo $resultat[2]; ?></label>
            </div>
            <div id="labelInfoCorreo">
                <label>En tu corrreo eléctronico encontraras más información sobre tu pedido</label>
            </div>
        </fieldset>
    </main>