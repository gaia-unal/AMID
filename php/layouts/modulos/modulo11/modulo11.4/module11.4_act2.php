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
					<a href="../../module4/modulo4.php" class="list-group-item">Módulo 4</a>
					<a href="../../modulo5/module5.php" class="list-group-item">Módulo 5</a>
					<a href="../../modulo6/module6.php" class="list-group-item">Módulo 6</a>
					<a href="../../modulo7/module7.php" class="list-group-item">Módulo 7</a>
					<a href="../../modulo8/module8.php" class="list-group-item">Módulo 8</a>
					<a href="../../modulo9/module9.php" class="list-group-item">Módulo 9</a>
					<a href="../../modulo10/module10.php" class="list-group-item">Módulo 10</a>
					<a href="../module11.php" class="list-group-item active">Módulo 11</a>
					<a href="../modulo11.1/module11.1_inicio.php" class="list-group-item">Unidad 1</a>
					<a href="../modulo11.2/module11.2_inicio.php" class="list-group-item">Unidad 2</a>
					<a href="../modulo11.3/module11.3_inicio.php" class="list-group-item">Unidad 3</a>
					<a href="../modulo11.4/module11.4_inicio.php" class="list-group-item active">Unidad 4</a>
					<ul class="list-group-item">
						<a href="module11.4_temas.php" class="list-group-item">Temas</a>
						<a href="module11.4_act.php" class="list-group-item active">Actividad</a>
					</ul>
					</ul>
					<a href="../../modulo12/module12.php" class="list-group-item">Módulo 12</a>
				</div>
				<br />
				<br />
			</div>
			<!-- /.col-lg-3 -->
			<div class="col-lg-9">
				<h1><br>Unidad 4: El nacimiento de medios alternativos</h1>

				<form action="../../../../queries/evaluacion.php?id_und=m11u4" method="post">

				<div class="card mt-4">
					<div class="card-body">
						<h4>Actividad</h4>
						<p class="card-text">
							Completa las frases usando las palabras que aparecen a continuación: <br>
						<ul style="columns: 2;">
							<li>empresas</li>
							<li>masivos</li>
							<li>agencia</li>
							<li>emisor</li>
							<li>interactivos</li>
							<li>independiente</li>
							<li>informacion</li>
							<li>comunicacion</li>
							<li>valores</li>
							<li>institucion</li>
							<li>transparencia</li>
							<li>publico</li>
							<li>departamentales</li>
						</ul>
						<b>Nota: </b> Las palabras pueden ser escritas en más de un espacio. <br><br>
						Es un <input type="text" name="emisor" id="opc1"> de <input type="text" name="informacion"
							id="opc2"> <input type="text" name="independiente" id="opc3"> que no constituye una <input
							type="text" name="agencia" id="opc4"> de <input type="text" name="informacion" id="opc5"> ni
						de los medios <input type="text" name="masivos" id="opc6"> de <input type="text"
							name="comunicacion" id="opc7"> organizados como <input type="text" name="empresas"
							id="opc8">.
						<br><br>
						Las relaciones con el <input type="text" name="publico" id="opc9"> deben respetar los mismos
						<input type="text" name="valores" id="opc10"> y normas que se siguen dentro de la <input
							type="text" name="institucion" id="opc11">, particularmente los de <input type="text"
							name="transparencia" id="opc12">, diálogo, y <input type="text" name="comunicacion"
							id="opc13"> general.
						<br><br>
						Kioscos <input type="text" name="interactivos" id="opc14"> en tiendas <input type="text"
							name="departamentales" id="opc15">.
						</p>
						<center>
							<button class="btn btn-outline-success" onclick="validar();">Validar</button>
						</center>
					</div>
				</div>
				<!-- /.card -->
				<br>
				<center>
					<a href="module11.4_act.php" class="btn btn-success">Anterior</a>
					<!--<a href="../../modulo12/module12.php" class="btn btn-success btnSig retraso3">Siguiente</a>-->
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
	<script src="assets/js/preguntas.js"></script>
	<script src="../../../../../vendor/jquery/jquery.min.js"></script>
	<script src="../../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="../../../../../assets/js/script.js"></script>
</body>

</html>