
<main class="auth">
  <div class="auth__contenedor">  
  <h2 class="auth__heading"><?php echo $titulo; ?></h2>
  <p class="auth__texto"> Tu cuenta </p>

  <?php
  require_once __DIR__ . '/../templates/alertas.php'
  ?>

  <?php if(isset($alertas['exito'])){  ?>
      <div class="acciones acciones--centrar">
          <a href="/login" class="acciones__enlace">Iniciar sesión</a>   
      </div>
  <?php }  ?>


  <?php if(isset($alertas['error'])){  ?>
        <div class="acciones acciones--centrar">
          <a href="/registro" class="acciones__enlace">Volver</a>     
        </div>
  <?php }  ?>
  </div>
</main>