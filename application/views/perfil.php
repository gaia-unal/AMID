<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<?php $this->load->view('initial/linkGenerico');?>
	<link href="<?php echo base_url();?>public/assets/css/style.css" rel="stylesheet">
	<title>AMID</title>

</head>

<body id="body">
	<?php $this->load->view('initial/nav');?>

	<?php echo form_open('usuario/update'); ?>
	<div class="container">
		<br>
		<h1>Información personal</h1>
		<p>
			Para actualizar los datos es necesario ingresar la contraseña actual, los únicos 
			datos que se pueden actualizar son el nombre, el apellido, la fecha de nacimiento y 
			la contraseña actual, si no se ingresa la contraseña nueva no se actualizara la 
			contraseña actual pero si los demás datos.
		</p>
		<?php 
			if(isset($mensaje)){
				echo "<p class='mensaje'>¡".$mensaje."!</p>";
			}
		?>
		<div class="row">
		
			<div class="col-md-6">

				<div class="card mt-4">
					<div class="card-body">
						<div class="formulario">

							<label class="title-form" for="nombre">Nombre :</label><br>
							<div class="form-group wh">
								<div class="text-center">
									<span class="icon-self "><i class="fa fa-user"></i></span>
									<div class="ft">
										<input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control"
											value="<?php echo $usuario->result()[0]->nombre;?>" required>
									</div>
								</div>
							</div>
							<br>
							<!-- ---------------------->
							<label class="title-form" for="apellido">Apellido :</label><br>
							<div class="form-group wh">
								<div class="text-center">
									<span class="icon-self "><i class="fa fa-user"></i></span>
									<div class="ft">
										<input id="apellido" name="apellido" type="text" placeholder="Apellido"
											class="form-control" value="<?php echo $usuario->result()[0]->apellido;?>" required>
									</div>
								</div>
							</div>
							<br>
							<!-- ---------------------->
							<label class="title-form" for="email">Correo :</label><br>
							<div class="form-group wh">
								<div class="text-center">
									<span class="icon-self "><i class="fa fa-envelope"></i></span>
									<div class="ft">
										<input id="email" name="correo" type="email"
											class="form-control" value="<?php echo $usuario->result()[0]->correo;?>" readonly >
									</div>
								</div>
							</div>
							<br>
							<!-- ---------------------->
							<label class="title-form" for="institucion">Institución :</label><br>
							<div class="form-group wh">
								<div class="text-center">
									<span class="icon-self "><i class="fas fa-graduation-cap"></i></span>
									<div class="ft">
										<input id="institucion" name="institucion" type="text" placeholder="Institución"
											class="form-control" value="<?php echo $institucion->result()[0]->nombre ?>" disabled>
									</div>
								</div>
							</div>
							<br>
							<!-- ---------------------->
							<label class="title-form" for="pregunta">Pregunta de seguridad :</label><br>
							<div class="form-group wh">
								<div class="text-center">
									<span class="icon-self "><i class="fas fa-question"></i></span>
									<div class="ft">
										<input id="pregunta" name="pregunta" type="text" placeholder="Pregunta"
											class="form-control" value="<?php echo $usuario->result()[0]->question;?>" disabled>
									</div>
								</div>
							</div>
							<br>
							<!-- ---------------------->
						</div>
					</div>
				</div>
			</div>

			<!-- ------------------------------------------------------------ -->

			<div class="col-md-6">

				<div class="card mt-4">
					<div class="card-body">
						<div class="formulario">

							<label class="title-form" for="nacimiento">Fecha de nacimiento :</label><br>
							<div class="form-group wh">
								<div class="text-center">
									<span class="icon-self "><i class="fas fa-calendar-day"></i></span>
									<div class="ft">
										<input type="date" name="nacimiento" id="nacimiento" class="form-control" value="<?php echo $usuario->result()[0]->fechanmto;?>" required>
										
									</div>
								</div>
							</div>
							<br>
							<!-- ---------------------->
							<label class="title-form" for="registro">Fecha de registro :</label><br>
							<div class="form-group wh">
								<div class="text-center">
									<span class="icon-self "><i class="fas fa-calendar-day"></i></span>
									<div class="ft">
										<input type="date" name="registro" id="registro" class="form-control" value="<?php echo $usuario->result()[0]->fecharegistro;?>" disabled>

									</div>
								</div>
							</div>
							<br>
							<!-- ---------------------->
							<label class="title-form" for="passAct">Contraseña actual:</label><br>
							<div class="form-group wh">
								<div class="text-center">
									<span class="icon-self "><i class="fas fa-unlock"></i></span>
									<div class="ft">
										<input id="passAct" name="passAct" type="password" placeholder="Contraseña actual"
											class="form-control" required>
									</div>
								</div>
							</div>
							<br>
							<!-- ---------------------->
							<label class="title-form" for="passNew">Contraseña nueva:</label><br>
							<div class="form-group wh">
								<div class="text-center">
									<span class="icon-self "><i class="fas fa-unlock"></i></span>
									<div class="ft">
										<input id="pass" name="passNew" type="password" placeholder="Contraseña nueva"
											class="form-control">
									</div>
								</div>
							</div>
							<br>
							<!-- ---------------------->
							<label class="title-form" for="passNew2">Confirmar contraseña :</label><br>
							<div class="form-group wh">
								<div class="text-center">
									<span class="icon-self "><i class="fas fa-unlock"></i></span>
									<div class="ft">
										<input id="pass2" name="passNew2" type="password" placeholder="Confirmar contraseña"
											class="form-control">
									</div>
								</div>
							</div>
							<br>
							<!-- ---------------------->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
		<div class="form-group not-ft">
			<div class="col-md-12 text-center">
				<button type="submit" class="btn btn-primary btn-lg">Actualizar</button>
			</div>
		</div>
	<?php echo form_close(); ?>
	<br>

	<?php $this->load->view('initial/footer');?>

	<!-- Bootstrap core JavaScript -->
	<script src="<?php echo base_url();?>public/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url();?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
