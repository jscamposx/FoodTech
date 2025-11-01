<h2 class="dashboard__head"><?php echo $titulo; ?></h2>

<div class="dashboard__contenedor--boton">
    <a class="dashboard__boton" href="/admin/eventos/crear">
        <i class="fa-solid fa-circle-plus"></i>
        Añadir Eventos
    </a>
</div>

<?php
foreach ($eventos as $evento) {
}
?>

<div class="dashboard__contenedor">
    <?php if (!empty($eventos)) { ?>
        
    <?php } else { ?>
        <p class="text-center">No Hay Eventos Aún</p>
    <?php } ?>
</div>