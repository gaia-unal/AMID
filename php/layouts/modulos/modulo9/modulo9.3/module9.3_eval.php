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
					<a href="../module9.php" class="list-group-item active">Módulo 9</a>
					<ul class="list-group-item">
						<a href="../modulo9.1/module9.1_inicio.php" class="list-group-item">Unidad 1</a>
						<a href="../modulo9.2/module9.2_inicio.php" class="list-group-item">Unidad 2</a>
						<a href="module9.3_inicio.php" class="list-group-item active">Unidad 3</a>
						<ul class="list-group-item">
							<a href="module9.3_temas.php" class="list-group-item">Temas</a>
							<a href="recurso/recurso.php" class="list-group-item">Actividad</a>
							<a href="#" class="list-group-item active">Evaluación</a>
						</ul>
					</ul>
					<a href="../../modulo10/module10.php" class="list-group-item">Módulo 10</a>
					<a href="../../modulo11/module11.php" class="list-group-item">Módulo 11</a>
					<a href="../../modulo12/module12.php" class="list-group-item">Módulo 12</a>
				</div>
				<br />
				<br />
			</div>
			<!-- /.col-lg-3 -->
			<div class="col-lg-9">
				<h1><br>Unidad 3: Manejando el Cambio Para Fomentar un Medio Ambiente Propicio para las Escuelas AMI
				</h1>

				<form action="../../../../queries/evaluacion.php?id_und=m9u3" method="post">

				<div class="card mt-4">
					<div class="card-body">
						<h4>Evaluación</h4>
						<p class="card-text">
							Selecciona las opciones que correspondan a recomendaciones para los cursos AMI <br>
							<input type="checkbox" name="opc1" id="opc1" onclick="correcto()">a. Identificar el
							contexto <br>
							<input type="checkbox" name="opc2" id="opc2" onclick="incorrecto()">b. Buscar
							información antes de comenzar el curso <br>
							<input type="checkbox" name="opc3" id="opc3" onclick="correcto()">c. Desarrolle un plan
							para promover AMI <br>
							<input type="checkbox" name="opc4" id="opc4" onclick="correcto()">d. Identifique los
							recursos disponibles y los que se requieren <br>
							<input type="checkbox" name="opc5" id="opc5" onclick="incorrecto()">e. Desarrollar un
							cronograma de acción <br>
							<a href="#" class="btn btn-outline-success" onclick="validar();">Validar</a>

							<input type="text" name="preg" id="preg" value="" style="display: none">
						</p>
					</div>
				</div>
				<!-- /.card -->
				<br>
				<center>
					<a href="recurso/actividad.php" class="btn btn-success">Anterior</a>
					<!--<a href="../../modulo10/module10.php" class="btn btn-success">Siguiente</a>-->
					<button id="btn-siguiente"  class="btn btn-success" type="submit" onclick="evaluacion()">Siguiente</button>
				</center>
				</form>	
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
	<script src="assets/js/script.js"></script>
	<script src="../../../../../vendor/jquery/jquery.min.js"></script>
	<script src="../../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="../../../../../assets/js/script.js"></script>
</body>

</html>