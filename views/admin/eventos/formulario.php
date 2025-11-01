<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información del evento</legend>

    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre del evento</label>
        <input
            type="text"
            class="formulario__input"
            id="nombre"
            name="nombre"
            placeholder="Básico"
            value="<?php echo $evento->nombre ?? ''; ?>"
        >
    </div>

    <div class="formulario__campo">
        <label for="precio" class="formulario__label">Precio por persona</label>
        <input
            type="number"
            class="formulario__input"
            id="precio"
            name="precio"
            placeholder="50$"
            value="<?php echo $evento->precio ?? ''; ?>"
        >
    </div>

    <div class="formulario__campo">
        <label for="descripcion" class="formulario__label">Descripción</label>
        <textarea id="descripcion" name="descripcion" rows="5" cols="50" class="formulario__txtarea" placeholder="Ingrese la descripción aquí"><?php echo $evento->descripcion ??''; ?></textarea>
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

    <?php if(isset($evento->imagen_actual)){ ?>
        <p class="formulario__texto">Imagen Actual:</p>
        <div>
            <picture>
                <img class="formulario__imagen--formulario" src="<?php echo $_ENV['HOST'] . '/img/platillos/' . $platillo->imagen; ?>.webp" alt="Imagen Platillo">
            </picture>
        </div>
    <?php } ?>

 
    <div class="formulario__campo__counter">
    <legend class="formulario__legend">Platillos del evento</legend>
        <input
            type="number"
            class="formulario__campo__counter--input"
            id="numero_platillos"
            name="numero_platillos"
            value="<?php echo $evento->numero_platillos ?? ''; ?>"
           
          
        >
        <input 
            type="hidden" 
            id="platillos_seleccionados"  
            name="platillos_seleccionados" 
            value="<?php echo $evento->platillos_seleccionados ?? ''; ?>"
    >
    </div>
    
    <div class="formulario__filter">
    <button id="mostrarTodosBtn" class="formulario__filter--button">Todos</button>
    <button id="mostrarSeleccionadosBtn" class="formulario__filter--button">Seleccionados</button>
    <?php foreach($categorias as $categoria): ?>
        <?php if ($categoria->nombre == 'Guisos' || $categoria->nombre == 'Platillos'): ?>
            <button data-categoria="<?php echo $categoria->nombre; ?>" class="formulario__filter--button categoriasBtn"><?php echo $categoria->nombre; ?></button>
        <?php endif; ?>
    <?php endforeach; ?>
<!-- search -->
<div class="formulario__search" id="searchPlatillos">
        <input checked="" class="formulario__search--checkbox" type="checkbox" id="checkbox"> 
        <div class="formulario__search--pad">
            <div class="formulario__search--icon">
                <svg viewBox="0 0 512 512" height="20px" xmlns="http://www.w3.org/2000/svg" class="search_icon">
                    <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                </svg>
            </div>
            <input class="formulario__search--InputPlatillos" placeholder="Buscar..." type="text" data-target="card-swiper">
        </div>
    </div>

<!--  -->
    </div>
  
    <div class="swiper-container swiper-container-css">
        <div class="swiper swiper-css mySwiper">
            <div class="swiper-wrapper swiper-wrapper-css">
                <?php foreach($platillos as $platillo){ ?>
                    <div class="card-swiper swiper-slide swiper-slide-css" data-nombre="<?php echo $platillo->nombre; ?>" data-tipo="<?php echo $platillo->tipo_platillo; ?>">
                        <div>
                            <div class="card-swiper__head">
                             <img class="card-swiper__head--img" src="/img/platillos/<?php echo $platillo->imagen; ?>.avif" class="card__image" alt="img-platillos" width="100%" height="100%" />
                           </div>
                            <div class="card-swiper__bottom">
                                <p class="card-swiper__bottom--tittle">
                                    <?php echo $platillo->nombre; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="swiper-button-next swiper-button-next-css"></div>
            <div class="swiper-button-prev swiper-button-prev-css"></div>
        </div>

    </div>
  
    <div class="formulario__campo__counter">
    <legend class="formulario__legend">Bebidas del evento</legend>
    <input 
        type="hidden" 
        id="bebidas_seleccionadas"  
        name="bebidas_seleccionadas" 
        value="<?php echo $evento->bebidas_seleccionadas ?? ''; ?>"
    >
</div>

<div class="formulario__filter">
    <button id="mostrarTodasBebBtn" class="formulario__filter--button">Todos</button>
    <button id="mostrarSeleccionadasBebBtn" class="formulario__filter--button">Seleccionados</button>
    <?php foreach($categorias as $categoria): ?>
        <?php if ($categoria->nombre == 'Bebidas'): ?>
            <button data-categoria="<?php echo $categoria->nombre; ?>" class="formulario__filter--button categoriasBebBtn"><?php echo $categoria->nombre; ?></button>
        <?php endif; ?>
    <?php endforeach; ?>
<!-- search -->
<div class="formulario__search" id="searchBebidas">

        <input checked="" class="formulario__search--checkbox" type="checkbox" id="checkbox1"> 
        <div class="formulario__search--pad">
            <div class="formulario__search--icon">
                <svg viewBox="0 0 512 512" height="20px" xmlns="http://www.w3.org/2000/svg" class="search_icon">
                    <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                </svg>
            </div>
         <input class="formulario__search--InputBebidas" placeholder="Buscar..." type="text"  data-target="card-swiper-bebidas">
        </div>
    </div>
<!--  -->
</div>

<div class="swiper-container swiper-container-css">
    <div class="swiper swiper-css mySwiperBebidas">
        <div class="swiper-wrapper swiper-wrapper-css">
            <!-- card inicial  -->
        <div class="card-swiper-bebidas swiper-slide swiper-slide-css" data-nombre="Ninguna" data-tipo="Bebidas">
                    <div>
                            <p class="card-swiper__bottom--tittle1">
                                Sin bebidas
                            </p>
                    </div>
                </div>
                <!--   -->
            <?php foreach($platillos as $platillo): ?>
                <div class="card-swiper-bebidas swiper-slide swiper-slide-css" data-nombre="<?php echo $platillo->nombre; ?>" data-tipo="<?php echo $platillo->tipo_platillo; ?>">
                    <div>
                        <div class="card-swiper__head">
                            <img class="card-swiper__head--img" src="/img/platillos/<?php echo $platillo->imagen; ?>.avif" class="card__image" alt="img-platillos" width="100%" height="100%" />
                        </div>
                        <div class="card-swiper__bottom">
                            <p class="card-swiper__bottom--tittle">
                                <?php echo $platillo->nombre; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-button-next swiper-button-next-css"></div>
        <div class="swiper-button-prev swiper-button-prev-css"></div>
    </div>
</div>



<div class="formulario__campo__counter">
    <legend class="formulario__legend">Extras del evento</legend>
    <input 
        type="hidden" 
        id="otros_seleccionados"  
        name="otros_seleccionados" 
        value="<?php echo $evento->otros_seleccionados ?? ''; ?>"
    >
</div>

<div class="formulario__filter">
    <button id="mostrarTodasOtrosBtn" class="formulario__filter--button">Todos</button>
    <button id="mostrarSeleccionadasOtrosBtn" class="formulario__filter--button">Seleccionados</button>
    <?php foreach ($categorias as $categoria): ?>
    <?php $categoriaNombre = $categoria->nombre; ?>
    <?php if (!in_array($categoriaNombre, ['Bebidas', 'Guisos', 'Platillos'])): ?>
        <button data-categoria="<?php echo $categoriaNombre; ?>" class="formulario__filter--button categoriasOtrosBtn"><?php echo $categoriaNombre; ?></button>
    <?php endif; ?>
<?php endforeach; ?>

<!-- search -->
<div class="formulario__search" id="searchOtros">
        <input checked="" class="formulario__search--checkbox" type="checkbox" id="checkbox2"> 
        <div class="formulario__search--pad">
            <div class="formulario__search--icon">
                <svg viewBox="0 0 512 512" height="20px" xmlns="http://www.w3.org/2000/svg" class="search_icon">
                    <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                </svg>
            </div>
            <input class="formulario__search--InputOtros" placeholder="Buscar..." type="text" data-target="card-swiper-otros" >
        </div>
    </div>
<!--  -->


</div>

<div class="swiper-container swiper-container-css">
    <div class="swiper swiper-css mySwiperOtros">
        <div class="swiper-wrapper swiper-wrapper-css">
            <!-- card inicial  -->
            <div class="card-swiper-otros swiper-slide swiper-slide-css" data-nombre="Ninguna" data-tipo="Acompañante">
                <div>
                    <p class="card-swiper__bottom--tittle1">
                        Sin extras
                    </p>
                </div>
            </div>
            <!--   -->
            <?php foreach($platillos as $platillo): ?>
                <div class="card-swiper-otros swiper-slide swiper-slide-css" data-nombre="<?php echo $platillo->nombre; ?>" data-tipo="<?php echo $platillo->tipo_platillo; ?>">
                    <div>
                        <div class="card-swiper__head">
                            <img class="card-swiper__head--img" src="/img/platillos/<?php echo $platillo->imagen; ?>.avif" class="card__image" alt="img-platillos" width="100%" height="100%" />
                        </div>
                        <div class="card-swiper__bottom">
                            <p class="card-swiper__bottom--tittle">
                                <?php echo $platillo->nombre; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-button-next swiper-button-next-css"></div>
        <div class="swiper-button-prev swiper-button-prev-css"></div>
    </div>
</div>




 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</fieldset>

