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
					<a href="../../module4/modulo4.php" class="list-group-item">Módulo 4</a>
					<a href="../../modulo5/module5.php" class="list-group-item">Módulo 5</a>
					<a href="../../modulo6/module6.php" class="list-group-item">Módulo 6</a>
					<a href="../../modulo7/module7.php" class="list-group-item">Módulo 7</a>
					<a href="../../modulo8/module8.php" class="list-group-item">Módulo 8</a>
					<a href="../../modulo9/module9.php" class="list-group-item">Módulo 9</a>
					<a href="../../modulo10/module10.php" class="list-group-item">Módulo 10</a>
					<a href="../module11.php" class="list-group-item active">Módulo 11</a>
					<a href="../modulo11.1/module11.1_inicio.php" class="list-group-item">Unidad 1</a>
					<a href="../modulo11.2/module11.2_inicio.php" class="list-group-item active">Unidad 2</a>
					<ul class="list-group-item">
						<a href="module11.2_temas.php" class="list-group-item">Temas</a>
						<a href="module11.2_act.php" class="list-group-item active">Actividad</a>
					</ul>
					<a href="../modulo11.3/module11.3_inicio.php" class="list-group-item">Unidad 3</a>
					<a href="../modulo11.4/module11.4_inicio.php" class="list-group-item">Unidad 4</a>
					</ul>
					<a href="../../modulo12/module12.php" class="list-group-item">Módulo 12</a>
				</div>
				<br />
				<br />
			</div>
			<!-- /.col-lg-3 -->
			<div class="col-lg-9">
				<h1><br>Unidad 2: Dimensiones Socio-Culturales y Políticas de los Medios Globalizados</h1>
				<div class="card mt-4">
					<div class="card-body">
						<h4>Actividad</h4>
						<p class="card-text">
							Examina la letra de la canción y responde
							<center>
								<h5>La canción. J Balvin, Bad Bunny</h5>
								Pensaba que te había olvida'o, eh <br>
								Pero pusieron la canción, eh, eh, eh<br>
								Que cantamo' bien borracho'<br>
								Que bailamo' bien borracho'<br>
								Nos besamo' bien borracho' los dos<br>
								Pensaba que te había olvida'o<br>
								Justo cuando creía<br>
								Que por comerme a do' o diez, te olvidaría' (yeh)<br>
								Cogí un respiro y me salí de la vía<br>
								Y como un pendejo, no sabía lo que hacía<br>
								Nunca lo superé, nunca te superé (no, no)<br>
								Hasta me aprendí to'a la' balada' en inglé' (yeh)<br>
								Respiré y conté hasta tres (uno, dos, tres)<br>
								Ere' la fantasía oscura de Kanye West, bebé, ey<br>
								Hace tiempo lo barato me salió caro (yih)<br>
								Yo sólo twitteo, bala' loca'…
							</center>
						<ol>
							<li>¿Los valores expuestos son apropiados?</li>
							<input type="radio" name="preg1" id="opc1" onclick="correcto(1);"> Si<br>
							<input type="radio" name="preg1" id="opc2" onclick="incorrecto(1)"> No<br>
							<li>¿Crea un estereotipo?</li>
							<input type="radio" name="preg2" id="opc3" onclick="correcto(2);"> Si<br>
							<input type="radio" name="preg2" id="opc4" onclick="incorrecto(2)"> No<br>
							<li>¿Qué elementos reflejan sesgo o prejuicio?</li>
							<input type="checkbox" name="opc5" id="opc5" onclick="incorrecto(3)"> Pensaba que te había
							olvida'o<br>
							<input type="checkbox" name="opc6" id="opc6" onclick="correcto(4);"> Que cantamo' bien
							borracho'<br>
							<input type="checkbox" name="opc7" id="opc7" onclick="correcto(5);"> Que por comerme a do' o
							diez, te olvidaría'<br>
							<input type="checkbox" name="opc8" id="opc8" onclick="correcto(6);"> Nos besamo' bien
							borracho'<br>
							<input type="checkbox" name="opc9" id="opc9" onclick="correcto(7);"> Que bailamo' bien
							borracho' <br>
							<input type="checkbox" name="opc10" id="opc10" onclick="incorrecto(8)"> Yo sólo twitteo, bala'
							loca'… <br>
							<input type="checkbox" name="opc11" id="opc11" onclick="correcto(9);"> Ere' la fantasía
							oscura de Kanye West, bebé, ey
						</ol>
						</p>
						<center>
							<button class="btn btn-outline-success" onclick="validar();">Validar</button>
						</center>
					</div>
				</div>
				<!-- /.card -->
				<br>
				<center>
					<a href="module11.2_act.php" class="btn btn-success">Anterior</a>
					<a href="../modulo11.3/module11.3_inicio.php" class="btn btn-success btnSig retraso3">Siguiente</a>
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
	<script src="assets/js/preguntas.js"></script>
	<script src="../../../../../vendor/jquery/jquery.min.js"></script>
	<script src="../../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="../../../../../assets/js/script.js"></script>
</body>

</html>