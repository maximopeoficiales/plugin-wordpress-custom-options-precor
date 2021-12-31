<h2>Configuracion de Precor</h2>
<form action="" method="post">
    <input type="hidden" name="updateOptionsConfigPrecor" value="1">
    <div class="form-group my-2">
        <label for="precor_validez_oferta">Texto de Validez de Oferta del PDF:</label>
        <input type="text" name="precor_validez_oferta" id="precor_validez_oferta" class="form-control" placeholder="Ejm: 08 DIAS" value="{{ get_option('precor_validez_oferta') }}">
    </div>

    <button type="submit" class="button blue">Guardar Cambios</button>
</form>

<h3>¿Como usarlo?</h3>
<div class="plugin-description">
    <p>En esta pagina usted podra cambiar ciertos parametros que modificaran el comportamiento de <b>PRECOR</b></p>
</div>