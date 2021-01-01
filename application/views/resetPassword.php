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
							Resetea la contraseña de tu cuenta
						</div>
						<div class="d-flex justify-content-center form_container mt-2">
							<?php echo form_open('inicio/resetPassword'); ?>
							<label for="pass1_r" class="sr-only">Contraseña</label>
							<input type="password" name="pass1_r" id="pass1_r" placeholder="Contraseña" required="" pattern="(?=.*\d)(?=.*[A-Za-z])(?=.*[@#$%]).{8,}" title="Debe contener al menos un número, una letra, uno de estos símbolos '@', '#', '$' o '%' y al menos 8 caracteres">
							<label for="pass2_r" class="sr-only">Confirma contraseña</label>
							<input type="password" name="pass2_r" id="pass2_r" placeholder="Confirma tu Contraseña" required="">
							<div class="send-button">
								<center style="margin:7%">
									<input type="hidden" name="fp_code" value="<?php echo $_GET['fp_code']; ?>">
									<input type="submit" class="btn btn-info" name="resetSubmit" value="Resetea Contraseña">
								</center>
							</div>

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

	<br><br><br>

	<?php $this->load->view('initial/footer'); ?>
	<!-- Bootstrap core JavaScript -->
	<script src="<?php echo base_url(); ?>public/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>