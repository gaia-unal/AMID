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
    <link rel="stylesheet" href="../../../../../assets/css/animated.css">
    <link rel="stylesheet" href="../../../../../assets/css/sweetalert/sweetalert2.css">
	<link rel="stylesheet" href="assets/css/estilo.css">
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
					<a href="../../modulo3/module3.php" class="list-group-item">Módulo 3</a>
					<a href="../../modulo4/module4.php" class="list-group-item">Módulo 4</a>
					<a href="../../modulo5/module5.php" class="list-group-item">Módulo 5</a>
					<a href="../../modulo6/module6.php" class="list-group-item">Módulo 6</a>
					<a href="../../modulo7/module7.php" class="list-group-item">Módulo 7</a>
					<a href="../../modulo8/module8.php" class="list-group-item">Módulo 8</a>
					<a href="../../module9.php" class="list-group-item active">Módulo 9</a>
					<ul class="list-group-item">
						<a href="../../modulo9.1/module9.1_inicio.php" class="list-group-item">Unidad 1</a>
						<a href="module9.2_inicio.php" class="list-group-item active">Unidad 2</a>
						<ul class="list-group-item">
							<a href="../module9.2_temas.php" class="list-group-item">Temas</a>
							<a href="Recurso/recurso.php" class="list-group-item">Actividades</a>
							<a href="#" class="list-group-item active">Evaluación</a>
						</ul>
						<a href="../modulo9.3/module9.3_inicio.php" class="list-group-item">Unidad 3</a>
					</ul>
					<a href="../../modulo10/module10.php" class="list-group-item">Módulo 10</a>
					<a href="../../modulo11/module11.php" class="list-group-item">Módulo 11</a>
					<a href="../../modulo12/module12.php" class="list-group-item">Módulo 12</a>
				</div>
				<br /><br />
			</div>
			<!-- /.col-lg-3 -->
			<div class="col-lg-9">
				<br>
				<h1>Unidad 2: Teorías de aprendizaje y AMI</h1>

                <form action="../../../../queries/evaluacion.php?id_und=m9u2" method="post">

				<div class="card mt-4">
					<h4>Evaluación</h4>
					<div class="card-body">
						<h4>Ubique dentro del marco la definición correspondiente a cada concepto</h4>
						<img id="imagen1" src="assets/img/frase/metacognicion.png">
						<img id="imagen2" src="assets/img/frase/estrategias.png">
						<img id="imagen3" src="assets/img/frase/formas.png">
						<canvas id="lienzo" width="800" height="500"></canvas>

						<input type="text" name="preg" id="preg" value="" style="display: none">
					</div>
				</div>
				<!-- /.card -->
				<br>
				<center>
					<a href="actividad.php" class="btn btn-success">Anterior</a>
					<!--<a href="../modulo9.3/module9.3_inicio.php" class="btn btn-success btnSig retraso3">Siguiente</a>-->
					<button id="btn-siguiente"  class="btn btn-success" type="submit" onclick="evaluacion()">Siguiente</button>                    
				</center>
				</form>	
                <?php
                    include '../../../../functions/paginacion.php';
                    pag(2);
                ?>
                <p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative
                            Commons Reconocimiento Compartir igual 4.0</a></p>
			</div>
			<!-- /.col-lg-9 -->
		</div>
	</div>
	<!-- /.container -->  
	<?php $ruta="../../../../../assets"; include '../../../footer.php';?>

	<!-- Bootstrap core JavaScript -->
	<script src="assets/js/script.js"></script>
	<script src="../../../../../vendor/jquery/jquery.min.js"></script>
	<script src="../../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="../../../../../assets/js/script.js"></script>
</body>

</html>