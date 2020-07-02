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
					<a href="module11.3_inicio.php" class="list-group-item active">Unidad 3</a>
					<ul class="list-group-item">
						<a href="module11.3_temas.php" class="list-group-item">Temas</a>
						<a href="module11.3_act.php" class="list-group-item active">Actividad</a>
					</ul>
					<a href="../modulo11.4/module11.4_inicio.php" class="list-group-item">Unidad 4</a>
					</ul>
					<a href="../../modulo12/module12.php" class="list-group-item">Módulo 12</a>
				</div>
				<br />
				<br />
			</div>
			<!-- /.col-lg-3 -->
			<div class="col-lg-9">
				<h1><br>Unidad 3: La información como un producto (Commodity)</h1>
				<div class="card mt-4">
					<div class="card-body">
						<h4>Actividad</h4>
						<p class="card-text">
							Completa la frase que define los productos de información usando las palabras que aparecen a
							continuación: <br>
						<ul>
							<li>Entregados</li>
							<li>proporcionan</li>
							<li>Internet</li>
							<li>Productos</li>
							<li>Información</li>
							<li>Pague</li>
							<li>Interes</li>
						</ul>
						Son <input type="text" name="productos" id="opc1"> que pueden ser <input type="text"
							name="entregados" id="opc2"> a través de <input type="text" name="internet" id="opc3"> y
						que, de manera general, <input type="text" name="proporcionan" id="opc4"> <input type="text"
							name="informacion" id="opc5"> sobre un tema que despierta suficiente <input type="text"
							name="interes" id="opc6"> como para que la gente <input type="text" name="pague" id="opc7">
						por ellos. <br><br>
						¿Cuál es el orden de los comportamientos descritos a continuación? (Completa con 1, 2 y 3). <br>
						<input type="number" name="2" id="opc8" min="1" max="3"> El producto busca al cliente. <br>
						<input type="number" name="1" id="opc9" min="1" max="3"> El cliente busca el producto.<br>
						<input type="number" name="3" id="opc10" min="1" max="3"> El consumidor mismo se convierte en
						producto.
						</p>
						<center>
							<button class="btn btn-outline-success" onclick="validar();">Validar</button>
						</center>
					</div>
				</div>
				<!-- /.card -->
				<br>
				<center>
					<a href="module11.3_act.php" class="btn btn-success">Anterior</a>
					<a href="../modulo11.4/module11.3_inicio.php" class="btn btn-success btnSig retraso3">Siguiente</a>
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