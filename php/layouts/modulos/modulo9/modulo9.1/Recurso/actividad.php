<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>AMID</title>
	<!-- Bootstrap core CSS -->
	<link href="../../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="assets/css/juego.css">
	<link href="../../../../assets/css/shop-item.css" rel="stylesheet">
	<link rel="stylesheet" href="../../../../assets/css/sweetalert/sweetalert2.css">
	<link rel="stylesheet" href="../../../../assets/css/animated.css">
</head>

<body>
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="../../../../index.php">AMID</a>
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
					<a href="../../../modulo1/module1.php" class="list-group-item">Módulo 1</a>
					<a href="../../../modulo2/module2.php" class="list-group-item">Módulo 2</a>
					<a href="../../../modulo3/module3.php" class="list-group-item">Módulo 3</a>
					<a href="../../../modulo4/module4.php" class="list-group-item">Módulo 4</a>
					<a href="../../../modulo5/module5.php" class="list-group-item">Módulo 5</a>
					<a href="../../../modulo6/module6.php" class="list-group-item">Módulo 6</a>
					<a href="../../../modulo7/module7.php" class="list-group-item">Módulo 7</a>
					<a href="../../../modulo8/module8.php" class="list-group-item">Módulo 8</a>
					<a href="../../module9.php" class="list-group-item active">Módulo 9</a>
					<ul class="list-group-item">
						<a href="../module9.1_inicio.php" class="list-group-item active">Unidad 1</a>
						<ul class="list-group-item">
							<a href="../module9.1_temas.php" class="list-group-item">Temas</a>
							<a href="recurso.php" class="list-group-item active">Actividades</a>
							<a href="../module9.1_eval.php" class="list-group-item">Evaluación</a>
						</ul>
						<a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
						<a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
					</ul>
					<a href="../../../modulo10/module10.php" class="list-group-item">Módulo 10</a>
					<a href="../../../modulo11/module11.php" class="list-group-item">Módulo 11</a>
					<a href="../../../modulo12/module12.php" class="list-group-item">Módulo 12</a>
				</div>
				<br /><br />
			</div>
			<!-- /.col-lg-3 -->
			<div class="col-lg-9">
				<br>
				<h1>Unidad 1: Comunicación, enseñanza y aprendizaje</h1>
				<div class="card mt-4">
					<div class="card-body">
						<h4>Reflexión</h4>
						<div>
							<p>1. Según los roles identificados (Emisor, receptor...) ¿Qué rol asume usted como
								profesor?</p>
							<textarea name="preg1" required id="p1-r" cols="90" rows="10"
								placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
						</div>
						<div>
							<p>2. ¿Qué roles están disponibles para sus estudiantes?</p>
							<textarea name="preg2" required id="p2-r" cols="90" rows="10"
								placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
						</div>
						<div>
							<p>3. ¿Cómo se da forma a la experiencia de aprendizaje a través de estos roles?</p>
							<textarea name="preg3" required id="p3-r" cols="90" rows="10"
								placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
						</div>
						<div>
							<p>4. ¿Cómo se administra el proceso de retroalimentación en el proceso de
								enseñanza-aprendizaje?</p>
							<textarea name="preg4" required id="p4-r" cols="90" rows="10"
								placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
						</div>
						<div>
							<p>5. El enseñar a través de los medios y los otros proveedores de información requiere un
								conocimiento y un análisis por parte de los profesores sobre su propio papel y el papel
								de los medios y la tecnología en el proceso de enseñanza y aprendizaje. Para decirlo de
								otro modo, ¿qué es lo que se enseña a través de los medios y/o tecnología en la clase?
								¿Existe un tema en especial o materia que se enseña a través del uso de la tecnología o
								los medios? ¿Cómo se administra el proceso de retroalimentación en el proceso de
								enseñanza-aprendizaje?</p>
							<textarea name="preg5" required id="p5-r" cols="90" rows="10"
								placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
						</div>
					</div>
				</div>
				<!-- /.card -->
				<br>
				<center>
					<a href="recurso.php" class="btn btn-success">Anterior</a>
					<a href="../module9.1_eval.php" class="btn btn-success btnSig retraso3">Siguiente</a>
					<p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative
							Commons Reconocimiento Compartir igual 4.0</a></p>
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
					src="../../../../assets/img/Logo_UN.png" alt="logo Universidad Nacional"></a>
			<a href="http://www.ucaldas.edu.co/portal/" target="_blank"><img class="logo1 logos"
					src="../../../../assets/img/Logo_UCaldas.png" alt="logo Universidad de Caldas"></a>
			<a href="https://unisucre.edu.co/index.php/es/" target="_blank"><img class="logo1 logos"
					src="../../../../assets/img/Logo_USucre.png" alt="logo Universidad de Sucre"></a>
			<a href="https://www.utch.edu.co/portal/es/" target="_blank"><img class="logo1 logos"
					src="../../../../assets/img/Logo_UChoco.png" alt="logo Universidad Tecnológica del Chocó"></a>
			<a href="https://www.autonoma.edu.co/" target="_blank"><img class="logo1 logos"
					src="../../../../assets/img/Logo_UAM.png" alt="logo Universidad Autónoma de Manizales"></a>
			<a href="https://www.cinde.org.co/sitio/" target="_blank"><img class="logo1 logos"
					src="../../../../assets/img/Logo_CINDE.png" alt="logo CINDE"></a>
		</div>
		<!-- /.container -->
	</footer>
	<!-- Bootstrap core JavaScript -->
	<script src="../../../assets/js/sweetalert/sweetalert2.js"></script>
	<script src="../../../vendor/jquery/jquery.min.js"></script>
	<script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../../../assets/js/script.js"></script>
</body>

</html>