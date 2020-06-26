<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AMID</title>
  <!-- Bootstrap core CSS -->
  <link href="../../../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../../../../../assets/css/shop-item.css" rel="stylesheet">
  <link href="../../../../../assets/css/style.css" rel="stylesheet">
  <link href="assets/css/estilo.css" rel="stylesheet">
</head>

<body>
  <?php require "../../../../queries/connectionDB.php";
$newConn= new Connection;
$newConn->connectionDB(); ?>
  <?php require '../../../../queries/activeSession.php'; ?>  
  <?php $rutaSession="../../../../queries/"; include '../../../header.php'; ?>

	<!-- Page Content -->
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<h1 class="my-4">Módulos AMID</h1>
				<div class="list-group">
					<a href="../../modulo1/module1.php" class="list-group-item">Módulo 1</a>
					<a href="../../modulo2/module2.php" class="list-group-item">Módulo 2</a>
					<a href="../module3.php" class="list-group-item active">Módulo 3</a>
					<ul class="list-group-item">
						<a href="module3.1_inicio.php" class="list-group-item active">Unidad 1</a>
						<ul class="list-group-item">
							<a href="module3.1_temas.php" class="list-group-item">Temas</a>
							<a href="#" class="list-group-item active">Actividad</a>
							<a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
						</ul>
						<a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
						<a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
						<a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 4</a>
						<a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 5</a>
					</ul>
					<a href="../../modulo4/module4.php" class="list-group-item">Módulo 4</a>
					<a href="../../modulo5/module5.php" class="list-group-item">Módulo 5</a>
					<a href="../../modulo6/module6.php" class="list-group-item">Módulo 6</a>
					<a href="../../modulo7/module7.php" class="list-group-item">Módulo 7</a>
					<a href="../../modulo8/module8.php" class="list-group-item">Módulo 8</a>
					<a href="../../modulo9/module9.php" class="list-group-item">Módulo 9</a>
                    <a href="../../modulo10/module10.php" class="list-group-item">Módulo 10</a>
                    <a href="../../modulo11/module11.php" class="list-group-item">Módulo 11</a>
                    <a href="../../modulo12/module12.php" class="list-group-item">Módulo 12</a>
				</div>
			</div>
			<!-- /.col-lg-3 -->
			<div class="col-lg-9">
				<h1><br>Unidad 1: Informes de noticias y el poder de las imágenes</h1>
				<div class="card mt-4">
					<div class="card-body">
						<h4>Representación en los medios de información</h4>
						<p class="card-text">
							Para el desarrollo de este módulo denominado <strong>"Representación en los medios de
								información"</strong> se va a investigar y analizar la cobertura de los medios de un
							evento importante como el terremoto en Haití. Este estudio de caso debe enfocarse en las
							imágenes de la cobertura de noticias y las representaciones de las personas y los temas
							que se vinculan con estos eventos.<br> Observe detenidamente las siguientes imágenes y luego
							responda las preguntas de la actividad.</p>
						<div>
							<img id="imagen" src="assets/img/img1.png">
							<img id="imagen" src="assets/img/img2.png">
							<img id="imagen" src="assets/img/img3.png">
							<img id="imagen" src="assets/img/img4.png">
							<img id="imagen" src="assets/img/img5.png">
							<img id="imagen" src="assets/img/img6.png">
							<img id="imagen" src="assets/img/img7.png">
							<img id="imagen" src="assets/img/img8.png">
							<img id="imagen" src="assets/img/img9.png">
							<img id="imagen" src="assets/img/img10.png">
							<img id="imagen" src="assets/img/img11.png">
							<img id="imagen" src="assets/img/img12.png">
							<img id="imagen" src="assets/img/img13.png">
						</div>
					</div>
				</div>
				<!-- /.card -->
				<br>
				<center>
					<a href="module3.1_temas.php" class="btn btn-success">Anterior</a>
					<a href="module3.1.1_act2.php" class="btn btn-success">Siguiente</a>
				</center>
                <?php
                    include '../../../../functions/paginacion.php';
                    pag(2);
                ?>
				<p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative
						Commons Reconocimiento Compartir igual 4.0</a></p>
				<br><br>
			</div>
			<!-- /.col-lg-9 -->
		</div>
	</div>
  <!-- /.container -->

  <?php $ruta="../../../../../assets"; include '../../../footer.php';?>

  <!-- Bootstrap core JavaScript -->
  <script src="../../../../../vendor/jquery/jquery.min.js"></script>
  <script src="../../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="../../../../../assets/js/script.js"></script>
</body>

</html>