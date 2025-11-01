<h2 class="dashboard__head"><?php echo $titulo; ?></h2>

<div class="user__container">
	<div class="user__row">
		<div class="user__column">
			<div class="user__container--table">
				<table class="user__table">
					<thead>
						<tr>
							<th><span>Usuario</span></th>
							<th class="text-center"><span>Confirmado</span></th>
							<th class="text-center"><span>Email</span></th>
							<th class="text-center"><span>Acciones</span></th>
						</tr>
					</thead>

					<tbody>
						<?php if (empty($users)) { ?>
							<p class="text-center">Usuarios no encontrados :(</p>
						<?php } else { ?>
							<?php foreach ($users as $user) { ?>
								<tr>
									<td>
										<img src="/img/usuarios/<?php echo $user->imagen; ?>.avif">
										<a><?php echo $user->nombre . '  ' . $user->apellido ?? ''; ?></a>
										<span class="user-subhead"><i><?php echo ($user->admin == 1) ? 'Admin'  : 'Usuario' ?></i></span>
									</td>
									<td>
										<p class="<?php echo ($user->confirmado == 1) ? 'confirmado' : 'sin-confirmar' ?> user__confirm">
											<?php echo ($user->confirmado == 1) ? 'Si' : 'No' ?>
										</p>
									</td>
									<td>
										<p class="text-center"><?php echo $user->email ?? ''; ?></p>
									</td>
									<td>
										<a href="#">editar</a>
										<a href="#">admin</a>
										<form class="contenedor_boton" method="POST" action="/admin/registrados/eliminar" >
                <input type="hidden" name="id" value="<?php echo $user->id; ?>">
                <button class="" aria-label="Borrar-button">
                   eliminar
                </button>
            </form>
									</td>
								</tr>
							<?php } ?>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>