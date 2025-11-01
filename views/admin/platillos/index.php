<h2 class="dashboard__head"><?php echo $titulo; ?></h2>



<div class="dashboard__contenedor--boton">
    <a class="dashboard__boton" href="/admin/platillos/crear">
        <i class="fa-solid fa-circle-plus"></i>
        Añadir Platillo
    </a>
</div>



<div class="dashboard__contenedor">
    <div class="dashboard__buscador">
    <form action="/admin/platillos" method="GET">
    <input 
    placeholder="Buscar Platillos..." 
    type="text" 
    name="search" 
    id="search" 
    value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>"
    class="dashboard__buscador--input"
    >
        <button type="submit" class="dashboard__buscador--button"><i class="fa-solid fa-magnifying-glass" style="color: #FFF;" aria-label="Buscar-button"></i></button>
    </form>
    </div>

    <?php if(empty($platillos)) { ?> 
 
        <p class="text-center">Platillos no encontrados :(</p>
    


    <?php } else { ?>
        <div class="cards">
            <?php foreach($platillos as $platillo){ ?>
                <a    class="card" data-name="<?php echo $platillo->nombre; ?>">
            <form action="/admin/platillos/editar" method="get">
                <input type="hidden" name="id" value="<?php echo $platillo->id; ?>">
                <button class="editar-button" href="/admin/platillos/editar?id=<?php echo $platillo->id; ?>" aria-label="Editar-button">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 18 18" version="1.1">
                        <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Rounded" transform="translate(-579.000000, -2771.000000)">
                        <g id="Image" transform="translate(100.000000, 2626.000000)">
                        <g id="-Round-/-Image-/-edit" transform="translate(476.000000, 142.000000)">
                        <g transform="translate(0.000000, 0.000000)">
                        <polygon id="Path" points="0 0 24 0 24 24 0 24"/>
                        <path d="M3,17.46 L3,20.5 C3,20.78 3.22,21 3.5,21 L6.54,21 C6.67,21 6.8,20.95 6.89,20.85 L17.81,9.94 L14.06,6.19 L3.15,17.1 C3.05,17.2 3,17.32 3,17.46 Z M20.71,7.04 C21.1,6.65 21.1,6.02 20.71,5.63 L18.37,3.29 C17.98,2.9 17.35,2.9 16.96,3.29 L15.13,5.12 L18.88,8.87 L20.71,7.04 Z" id="🔹-Icon-Color" fill="#ffffff"/>
                        </g>
                        </g>
                        </g>
                        </g>
                        </g>
                    </svg>
                </button>  
            </form>

            <form class="contenedor_boton" method="POST" action="/admin/platillos/eliminar" >
                <input type="hidden" name="id" value="<?php echo $platillo->id; ?>">
                <button class="delete-button" aria-label="Borrar-button">
                    <svg class="delete-svgIcon" viewBox="0 0 448 512">
                        <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path>
                    </svg>
                </button>
            </form>
            <img src="/img/platillos/<?php echo $platillo->imagen; ?>.avif" class="card__image" alt="img-platillos" width="100%" height="90%" />
            <div class="card__overlay">
                <div class="card__header">
                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                    <div class="card__header-text">
                        <h3 class="card__title"><?php echo $platillo->nombre; ?></h3>        
                        <span class="card__status"><?php echo $platillo->tipo_platillo; ?></span>
                    </div>
                </div>
                        <p class="card__description"><?php echo $platillo->descripcion; ?></p>
            </div>
            </a>      
    
        <?php } ?>
      
    <?php }?> 

    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <?php 
    echo $paginacion;
    ?>


