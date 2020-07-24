<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>AMID</title>
	<!-- Bootstrap core CSS -->
	<link href="../../../../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="../../../../../../assets/css/shop-item.css" rel="stylesheet">
	<link rel="stylesheet" href="../../../../../../assets/css/sweetalert/sweetalert2.css">
	<link rel="stylesheet" href="../../../../../../assets/css/animated.css">
	<link rel="stylesheet" href="assets/css/juego.css">
</head>

<body>
  <?php require "../../../../../queries/connectionDB.php";
    $newConn= new Connection;
    $newConn->connectionDB(); ?>
  <?php require '../../../../../queries/activeSession.php'; ?>  
  <?php $rutaSession="../../../../../queries/"; include '../../../../header.php'; ?>
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
						<a href="../../modulo9.1/module9.1_inicio.php" class="list-group-item">Unidad 1</a>
						<a href="../module9.2_inicio.php" class="list-group-item active">Unidad 2</a>
						<ul class="list-group-item">
							<a href="../module9.2_temas.php" class="list-group-item">Temas</a>
							<a href="recurso.php" class="list-group-item active">Actividades</a>
							<a href="../module9.2_eval.php" class="list-group-item">Evaluación</a>
						</ul>
						<a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 3</a>
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
				<h1>Unidad 2: Teorías de aprendizaje y AMI</h1>
				<div class="card mt-4">
					<div class="card-body">
						<h4>Retroalimentación</h4>
						<p>1. ¿Qué papel puede tener la meta cognición en la transferencia de aprendizaje de las
							actividades que usted propone a sus estudiantes?</p>
						<textarea name="preg1" id="p1-r" cols="100" rows="10" placeholder="Escriba su respuesta aquí"
							spellcheck="true"></textarea>
						<p>2. Considere el papel de las bibliotecas y de los museos en el desarrollo de las destrezas
							AMI. Diseñe una actividad en la que ilustre cómo una actividad estratégica específica puede
							utilizarse en uno de estos medios. Considere las características únicas que son parte de
							estos ambientes y que pueden influir en la experiencia de enseñanza o aprendizaje de una
							manera positiva y escriba su respuesta.</p>
						<textarea name="preg2" id="p2-r" cols="100" rows="10" placeholder="Escriba su respuesta aquí"
							spellcheck="true"></textarea>
						<p>3. Basado en su propio trabajo, explique las formas en las cuales el Curriculum AMI provee
							las oportunidades para una instrucción y aprendizaje diferenciado (es decir: aprendizaje
							cinestético, aprendizaje visual, aprendizaje auditivo, etc.)</p>
						<textarea name="preg3" id="p3-r" cols="100" rows="10" placeholder="Escriba su respuesta aquí"
							spellcheck="true"></textarea>
						<p>4. Para que los estudiantes tengan éxito como aprendices, es importante conocer la meta
							cognición y las estrategias de meta cognición. ¿Cónsidera usted que esta frase es cierta?
							¿Por qué?</p>
						<textarea name="preg4" id="p4-r" cols="100" rows="10" placeholder="Escriba su respuesta aquí"
							spellcheck="true"></textarea>
					</div>
				</div>
				<!-- /.card -->
				<br>
				<center>
					<a href="recurso.php" class="btn btn-success">Anterior</a>
					<a href="../module9.2_eval.php" class="btn btn-success btnSig retraso3">Siguiente</a>
				</center>
                <?php
                    include '../../../../../functions/paginacion.php';
                    pag(3);
                ?>
				<p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative
						Commons Reconocimiento Compartir igual 4.0</a></p>
				<br /> <br />
			</div>
			<!-- /.col-lg-9 -->
		</div>
	</div>
	<!-- /.container -->
	<?php $ruta="../../../../../../assets"; include '../../../../footer.php';?>

	<!-- Bootstrap core JavaScript -->
	<script src="../../../../../../assets/js/sweetalert/sweetalert2.js"></script>
	<script src="../../../../../../vendor/jquery/jquery.min.js"></script>
	<script src="../../../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="../../../../../../assets/js/script.js"></script>
</body>

</html>