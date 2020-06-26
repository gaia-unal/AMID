<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>AMID</title>
	<!-- Bootstrap core CSS -->
	<link href="../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="../../../assets/css/shop-item.css" rel="stylesheet">
	<link rel="stylesheet" href="../../../assets/css/sweetalert/sweetalert2.css">
	<link rel="stylesheet" href="../../../assets/css/animated.css">
	<link rel="stylesheet" href="assets/css/juego.css">
</head>

<body>
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="../../../index.php">AMID</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
				aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<!--
                    <li class="nav-item active">
                        <a class="nav-link" href="../../index.php">Home
                        <span class="sr-only">(current)</span>
                        </a>
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
					<a href="../../modulo1/module1.php" class="list-group-item">Módulo 1</a>
					<a href="../../modulo2/module2.php" class="list-group-item">Módulo 2</a>
					<a href="../../modulo3/module3.php" class="list-group-item">Módulo 3</a>
					<a href="../../modulo4/module4.php" class="list-group-item">Módulo 4</a>
					<a href="../../modulo5/module5.php" class="list-group-item">Módulo 5</a>
					<a href="../../modulo6/module6.php" class="list-group-item">Módulo 6</a>
					<a href="../../modulo7/module7.php" class="list-group-item">Módulo 7</a>
					<a href="../../modulo8/module8.php" class="list-group-item">Módulo 8</a>
					<a href="../module9.php" class="list-group-item active">Módulo 9</a>
					<ul class="list-group-item">
						<a href="module9.1_inicio.php" class="list-group-item active">Unidad 1</a>
						<ul class="list-group-item">
							<a href="module9.1_temas.php" class="list-group-item">Temas</a>
							<a href="Recurso/recurso.php" class="list-group-item">Actividades</a>
							<a href="#" class="list-group-item active">Evaluación</a>
						</ul>
						<a href="../modulo9.2/module9.2_inicio.php" class="list-group-item">Unidad 2</a>
						<a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
					</ul>
					<a href="../../modulo10/module10.php" class="list-group-item">Módulo 10</a>
					<a href="../../modulo11/module11.php" class="list-group-item">Módulo 11</a>
					<a href="../../modulo12/module12.php" class="list-group-item">Módulo 12</a>
				</div>
			</div>
			<!-- /.col-lg-3 -->
			<div class="col-lg-9">
				<br>
				<h1>Unidad 1: Comunicación, enseñanza y aprendizaje</h1>
				<div class="card mt-4">
					<div class="card-body">
						<h4>Evaluación</h4>
						<p class="card-text">
							Empareja cada palabra con su significado <br>
							<a href="#" onclick="validar('6')"><img id="imagen6" src="assets/img/palabra/6.png" alt="p6"></a>
							<a href="#" onclick="validar('12')"><img id="imagen12" src="assets/img/definicion/6.png"
									alt="d6"></a>
							<a href="#" onclick="validar('3')"><img id="imagen3" src="assets/img/palabra/3.png" alt="p3"></a>
							<a href="#" onclick="validar('8')"><img id="imagen8" src="assets/img/definicion/2.png"
									alt="d2"></a>
							<a href="#" onclick="validar('1')"><img id="imagen1" src="assets/img/palabra/1.png" alt="p1"></a>
							<a href="#" onclick="validar('11')"><img id="imagen11" src="assets/img/definicion/5.png"
									alt="d5"></a>
							<a href="#" onclick="validar('4')"><img id="imagen4" src="assets/img/palabra/4.png" alt="p4"></a>
							<a href="#" onclick="validar('10')"><img id="imagen10" src="assets/img/definicion/4.png"
									alt="d4"></a>
							<a href="#" onclick="validar('5')"><img id="imagen5" src="assets/img/palabra/5.png" alt="p5"></a>
							<a href="#" onclick="validar('7')"><img id="imagen7" src="assets/img/definicion/1.png"
									alt="d1"></a>
							<a href="#" onclick="validar('2')"><img id="imagen2" src="assets/img/palabra/2.png" alt="p2"></a>
							<a href="#" onclick="validar('9')"><img id="imagen9" src="assets/img/definicion/3.png"
									alt="d3"></a>
						</p>
					</div>
				</div>
				<!-- /.card -->
				<br>
				<center>
					<a href="Recurso/actividad.php" class="btn btn-success">Anterior</a>
					<a href="../modulo9.2/module9.2_inicio.php" class="btn btn-success btnSig retraso3">Siguiente</a>
					<p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia
							Creative Commons Reconocimiento Compartir igual 4.0</a></p>
				</center>
				<br /><br />
			</div>
			<!-- /.col-lg-9 -->
		</div>
	</div>
	<!-- /.container -->
	<!-- Footer -->
	<footer class="py-5 bg-dark" style="position: static">
		<div class="container">
			<a href="https://www.manizales.unal.edu.co/" target="_blank"><img class="logo1 logos"
					src="../../../assets/img/Logo_UN.png" alt="logo Universidad Nacional"></a>
			<a href="http://www.ucaldas.edu.co/portal/" target="_blank"><img class="logo1 logos"
					src="../../../assets/img/Logo_UCaldas.png" alt="logo Universidad de Caldas"></a>
			<a href="https://unisucre.edu.co/index.php/es/" target="_blank"><img class="logo1 logos"
					src="../../../assets/img/Logo_USucre.png" alt="logo Universidad de Sucre"></a>
			<a href="https://www.utch.edu.co/portal/es/" target="_blank"><img class="logo1 logos"
					src="../../../assets/img/Logo_UChoco.png" alt="logo Universidad Tecnológica del Chocó"></a>
			<a href="https://www.autonoma.edu.co/" target="_blank"><img class="logo1 logos"
					src="../../../assets/img/Logo_UAM.png" alt="logo Universidad Autónoma de Manizales"></a>
			<a href="https://www.cinde.org.co/sitio/" target="_blank"><img class="logo1 logos"
					src="../../../assets/img/Logo_CINDE.png" alt="logo CINDE"></a>
		</div>
		<!-- /.container -->
	</footer>
	<!-- Bootstrap core JavaScript -->
	<script src="assets/js/juego.js"></script>
	<script src="../../../assets/js/sweetalert/sweetalert2.js"></script>
	<script src="../../../vendor/jquery/jquery.min.js"></script>
	<script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../../../assets/js/script.js"></script>
</body>

</html>