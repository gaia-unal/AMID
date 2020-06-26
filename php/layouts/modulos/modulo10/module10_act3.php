<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>AMID</title>
	<!-- Bootstrap core CSS -->
	<link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="assets/css/w3.css">
	<link rel="stylesheet" href="assets/css/animacion.css">
	<link rel="stylesheet" href="assets/css/juego.css">
	<link href="../../assets/css/shop-item.css" rel="stylesheet">
	<link rel="stylesheet" href="../../assets/css/animated.css">
	<link rel="stylesheet" href="../../assets/css/sweetalert/sweetalert2.css">
</head>

<body>
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="../../index.php">AMID</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
				aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<!--
					<li class="nav-item active">
						<a class="nav-link" href="../index.php">Home</a>
					</li>
					-->
				</ul>
			</div>
		</div>
	</nav>

	<!-- Page Content -->
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<h1 class="my-4">Módulos AMID</h1>
				<div class="list-group">
					<a href="../modulo1/module1.php" class="list-group-item">Módulo 1</a>
					<a href="../modulo2/module2.php" class="list-group-item">Módulo 2</a>
					<a href="../modulo3/module3.php" class="list-group-item">Módulo 3</a>
					<a href="../modulo4/module4.php" class="list-group-item">Módulo 4</a>
					<a href="../modulo5/module5.php" class="list-group-item">Módulo 5</a>
					<a href="../modulo6/module6.php" class="list-group-item">Módulo 6</a>
					<a href="../modulo7/module7.php" class="list-group-item">Módulo 7</a>
					<a href="../modulo8/module8.php" class="list-group-item">Módulo 8</a>
					<a href="../modulo9/module9.php" class="list-group-item">Módulo 9</a>
					<a href="module10.php" class="list-group-item active">Módulo 10</a>
					<ul class="list-group-item">
						<a href="module10_inicio.php" class="list-group-item">Inicio</a>
						<a href="module10_temas.php" class="list-group-item">Temas</a>
						<a href="#" class="list-group-item active">Actividad</a>
					</ul>
					<a href="../modulo11/module11.php" class="list-group-item">Módulo 11</a>
					<a href="../modulo12/module12.php" class="list-group-item">Módulo 12</a>
				</div>
				<br /><br />
			</div>
			<!-- /.col-lg-3 -->
			<div class="col-lg-9">
				<br>
				<h1>Módulo 10: Audiencia</h1>
				<div class="card mt-4">
					<div class="card-body">
						<p class="card-text">
							Empareja cada definición con la correspondiente referencia de película, programa de televisión o
							demás. <br><br>
							<a href="#" onclick="verificar(1)"><img id="imagen1" src="assets/img/comercial1.png"
									alt="comercial"></a>
							<a href="#" onclick="verificar(4)"><img id="imagen4" src="assets/img/noticia1.png"
									alt="noticia1"></a>
							<a href="#" onclick="verificar(11)"><img id="imagen11" src="assets/img/entretenimiento2.png"
									alt="entretenimiento2"></a>
							<a href="#" onclick="verificar(9)"><img id="imagen9" src="assets/img/ideologia2.png"
									alt="ideologia2"></a>
							<a href="#" onclick="verificar(2)"><img id="imagen2" src="assets/img/mickey1.png"
									alt="mickey1"></a>
							<a href="#" onclick="verificar(12)"><img id="imagen12" src="assets/img/personas2.png"
									alt="personas2"></a>
							<a href="#" onclick="verificar(6)"><img id="imagen6" src="assets/img/personas1.png"
									alt="personas1"></a>
							<a href="#" onclick="verificar(8)"><img id="imagen8" src="assets/img/mickey2.png"
									alt="mickey2"></a>
							<a href="#" onclick="verificar(5)"><img id="imagen5" src="assets/img/entretenimiento1.png"
									alt="entretenimiento1"></a>
							<a href="#" onclick="verificar(10)"><img id="imagen10" src="assets/img/noticia2.png"
									alt="noticia2"></a>
							<a href="#" onclick="verificar(3)"><img id="imagen3" src="assets/img/ideologia1.png"
									alt="ideologia1"></a>
							<a href="#" onclick="verificar(7)"><img id="imagen7" src="assets/img/comercial2.png"
									alt="comercial"></a>
						</p>
					</div>
				</div>
				<!-- /.card -->
				<br>
				<center>
					<a href="module10_act2.php" class="btn btn-success">Anterior</a>
					<a href="../modulo11/module11.php" class="btn btn-success btnSig retraso3">Siguiente</a>
					<p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia
							Creative Commons Reconocimiento Compartir igual 4.0</a></p>
					<br><br>
				</center>
				<?php
            #  include '../paginacion.php';
         	#  pag(2);
            ?>
			</div>
			<!-- /.col-lg-9 -->
		</div>
	</div>
	<!-- /.container -->
	<!-- Footer -->
	<footer class="py-5 bg-dark">
		<div class="container">
			<a href="https://www.manizales.unal.edu.co/" target="_blank"><img class="logo1 logos"
					src="../../assets/img/Logo_UN.png" alt="logo Universidad Nacional"></a>
			<a href="http://www.ucaldas.edu.co/portal/" target="_blank"><img class="logo1 logos"
					src="../../assets/img/Logo_UCaldas.png" alt="logo Universidad de Caldas"></a>
			<a href="https://unisucre.edu.co/index.php/es/" target="_blank"><img class="logo1 logos"
					src="../../assets/img/Logo_USucre.png" alt="logo Universidad de Sucre"></a>
			<a href="https://www.utch.edu.co/portal/es/" target="_blank"><img class="logo1 logos"
					src="../../assets/img/Logo_UChoco.png" alt="logo Universidad Tecnológica del Chocó"></a>
			<a href="https://www.autonoma.edu.co/" target="_blank"><img class="logo1 logos"
					src="../../assets/img/Logo_UAM.png" alt="logo Universidad Autónoma de Manizales"></a>
			<a href="https://www.cinde.org.co/sitio/" target="_blank"><img class="logo1 logos"
					src="../../assets/img/Logo_CINDE.png" alt="logo CINDE"></a>
		</div>
		<!-- /.container -->
	</footer>

	<!-- Bootstrap core JavaScript -->
	<script src="assets/js/juego.js"></script>
	<script src="../../assets/js/sweetalert/sweetalert2.js"></script>
	<script src="../../vendor/jquery/jquery.min.js"></script>
	<script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../../assets/js/script.js"></script>
</body>

</html>