

<main class="auth" >

    <div class="auth__contenedor" >
    <h2 class="auth__heading "><?php echo $titulo; ?></h2>
    <p class="auth__texto">Inicia Sesion en Yola-Tacos Rancheros</p>
 
    <?php
    require_once __DIR__ . '/../templates/alertas.php'
    ?>  

    <form method="POST" action="/login" class="formulario" id="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input
                type="email"
                class="formulario__input "
                placeholder="Email"
                id="email"
                name="email"
                value="<?php echo $usuario->email; ?>"
            >
        </div>

        <div class="formulario__campo">
        <label for="password" class="formulario__label">Password</label>            
            <input
                type="password"
                class="formulario__input"
                placeholder="Password"
                id="password"
                name="password"
            >
        </div>

        
        <input type="submit" class="formulario__submit" value="Iniciar Sesion">
    </form>    
      
    <div class="acciones">
        <a href="/olvide" class="acciones__enlace">Olvidé mi contraseña</a>
        <a href="/registro" class="acciones__enlace">¿Aún no tienes una cuenta? Obtén una</a>
    </div> 
 </div>  




</main>