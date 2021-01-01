<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<?php $this->load->view('initial/linkGenerico'); ?>
	<title>AMID</title>

</head>

<body id="body">
	<!-- Page Content -->
	<div class="container">

		<div class="row">
			<div class="col-lg-12">

				<div class="card mt-4">

					<!--<div class="card-body">-->

					<center><a href="<?php echo base_url('inicio/principal'); ?>">
							<img class="logoAMID" src="<?php echo base_url(); ?>public/assets/img/Logo_AMID.png" alt="Logo AMID">
						</a></center>
					<div class="user_card" id="texto">
						<div class="d-flex justify-content-center links">
							Recueda ingresar el correo que tienes registrado
						</div>
						<div class="d-flex justify-content-center form_container mt-2">
							<?php echo form_open('inicio/reset'); ?>
							<label for="email" class="sr-only">email</label>
								<input type="email" name="email" id="email" class="form-control mb-10" value="" placeholder="Correo" required>
								<center>
									<input type="submit" class="btn btn-info" name="forgotSubmit" value="Continuar">
								</center>
							<?php echo form_close(); ?>

						</div>
					</div>
					</div>

				</div>
			</div>
			<!-- /.card -->
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	</div>
	<!-- /.container -->

	<br><br><br><br>

	<?php $this->load->view('initial/footer'); ?>
	<!-- Bootstrap core JavaScript -->
	<script src="<?php echo base_url(); ?>public/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>