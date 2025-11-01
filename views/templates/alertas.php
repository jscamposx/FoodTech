<?php
foreach ($alertas as $tipo => $mensajes) {
    foreach ($mensajes as $mensaje) {
?>
        <div class="alerta alerta__<?php echo $tipo; ?>" role="alert">
            <p><?php echo $mensaje; ?></p>
        </div>
<?php
    }
}
?>
