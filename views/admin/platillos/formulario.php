<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Informacion del platillo</legend>


    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre del platillo</label>
        <input
            type="text"
            class="formulario__input"
            id="nombre"
            name="nombre"
            placeholder="Ejemplo: &quot;Asado Rojo&quot;"
            value="<?php echo $platillo->nombre ?? '';?>"
        >
    </div>

   <!--Corregir alerta del input=tipo_platillo--input-->
    <div class="formulario__campo">
    <label for="tipo_platillo--txt" class="formulario__label">Opción Culinaria</label>
    <select id="tipo_platillo" name="tipo_platillo" class="formulario__select">
    <?php if ($platillo->tipo_platillo === '') { ?>
        <option value="--Seleccionar--">--Seleccionar--</option>
    <?php } else { ?>
        <option value="<?php echo $platillo->tipo_platillo; ?>"><?php echo $platillo->tipo_platillo; ?></option>
    <?php } ?>

    <?php foreach($categorias as $categoria) {
        if ($categoria->nombre !== $platillo->tipo_platillo) { ?>
            <option value="<?php echo $categoria->nombre; ?>"><?php echo $categoria->nombre; ?></option>
        <?php }
    } ?>
    </select>
    </div>



    <div class="formulario__campo">
        <label for="descripcion" class="formulario__label">Descripcion</label>
        <input
            type="text"
            class="formulario__input"
            id="descripcion"
            name="descripcion"
            placeholder="Breve explicación del platillo"
            value="<?php echo $platillo->descripcion ?? '';?>"
            >
    </div>


    <div class="formulario__campo">
        <label for="imagen" class="formulario__label">Imagen</label>
        <input
            type="file"
            class="formulario__input formulario__input--file"
            id="imagen"
            name="imagen"
         >
    </div>

    <?php if(isset($platillo->imagen_actual)){ ?>
    <p class="formulario__texto">Imagen Actual:</p>
    <div >
   <img src="/img/platillos/<?php echo $platillo->imagen; ?>.avif" class="card__image" alt="img-platillos" width="200" height="200" loading="lazy" style="border-radius: 3rem;" />
 </div>
    <?php } ?>

  
</fieldset>





</fieldset>