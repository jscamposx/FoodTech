<aside class="dashboard__sidebar">
    <!-- Navigation -->
    <div class="sidebar__container">
        <div class="sidebar__navigation">
            <ul>
            <li>
                    <a href="">
                        <span class="sidebar__icon">
                            <i class="fa-solid fa-bag-shopping"></i>
                        </span>
                        <span class="sidebar__tittle">Yola</span>
                    </a>
                </li>

                <li class="<?php echo pagina_actual('dashboard') ? 'hovered' : '';?>">
                    <a href="/admin/dashboard">
                        <span class="sidebar__icon">
                            <i class="fa-solid fa-house"></i>
                        </span>
                        <span class="sidebar__tittle">Inicio</span>
                    </a>
                </li>

                <li class="<?php echo pagina_actual('platillos') ? 'hovered' : '';?>">
                    <a href="/admin/platillos">
                        <span class="sidebar__icon">
                        <i class="fa-solid fa-bowl-food"></i>
                        </span>
                        <span class="sidebar__tittle">Platillos</span>
                    </a>
                </li>

                <li class="<?php echo pagina_actual('eventos') ? 'hovered' : '';?>">
                    <a href="/admin/eventos">
                        <span class="sidebar__icon">
                        <i class="fa-solid fa-calendar"></i>
                        </span>
                        <span class="sidebar__tittle">Eventos</span>
                    </a>
                </li>

                <li class="<?php echo pagina_actual('registrados') ? 'hovered' : '';?>">
                    <a href="/admin/registrados">
                        <span class="sidebar__icon"> 
                            <i class="fa-solid fa-users"></i>
                        </span>
                        <span class="sidebar__tittle">Usuarios</span>
                    </a>
                </li>
                
                <li class="<?php echo pagina_actual('consumos') ? 'hovered' : '';?>">
                    <a href="/admin/consumos">
                        <span class="sidebar__icon">
                            <i class="fa-solid fa-file "></i>
                        </span>
                        <span class="sidebar__tittle">Consumos</span>
                    </a>
                </li>

                <li>
                    <a href="/login">
                        <span class="sidebar__icon">
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </span>
                        <span class="sidebar__tittle">Salir</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>