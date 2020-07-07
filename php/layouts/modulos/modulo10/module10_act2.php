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
  <link href="../../../../assets/css/shop-item.css" rel="stylesheet">
  <link href="../../../../assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="../../../../assets/css/sweetalert/sweetalert2.css">
  <link rel="stylesheet" href="../../../../assets/css/animated.css">
	<link rel="stylesheet" href="assets/css/w3.css">
</head>

<body>
  <?php 
    require_once "../../../queries/connectionDB.php"; 
    $newConn= new Connection;
    $newConn->connectionDB();
    
    require '../../../queries/activeSession.php';
    $rutaSession="../../../queries/"; include '../../header.php';
  ?>

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
							Relaciona cada palabra con su respectiva justificación colocando frente a la palabra el número que
							corresponde a su justificación.
							<table class="w3-table w3-bordered">
								<tr>
									<th style="width: 30%;">Palabra</th>
									<th style="width: 30%;">Relación</th>
									<th style="width: 40%;">Justificación</th>
								</tr>
								<tr>
									<td>Diversión</td>
									<td><input type="number" name="resp1" id="resp1" min="1" max="4"></td>
									<td>1. El verse a usted conectado con un personaje de televisión o de la “familia”</td>
								</tr>
								<tr>
									<td>Relaciones personales</td>
									<td><input type="number" name="resp2" id="resp2" min="1" max="4"></td>
									<td>2. Utilizar los medios y los textos de información para aprender acerca de lo que sucede
										en nuestro mundo de alrededor</td>
								</tr>
								<tr>
									<td>Identidad personal</td>
									<td><input type="number" name="resp3" id="resp3" min="1" max="4"></td>
									<td>3. Un escape de la vida diaria</td>
								</tr>
								<tr>
									<td>Supervisión</td>
									<td><input type="number" name="resp4" id="resp4" min="1" max="4"></td>
									<td>4. Ser capaz de identificarse con y aprender de un comportamiento, actitud o valores que
										se reflejan en los textos mediáticos</td>
								</tr>
							</table>
							<br>
							<center>
								<button class="btn btn-outline-success" onclick="validar();">Validar</button>
							</center>
						</p>
					</div>
				</div>
				<!-- /.card -->
				<br>
				<center>
					<a href="module10_act.php" class="btn btn-success">Anterior</a>
					<a href="module10_act3.php" class="btn btn-success btnSig retraso3">Siguiente</a>
				</center>
                <?php
                    include '../../../functions/paginacion.php';
                    pag(1);
                ?>
        <p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative Commons
            Reconocimiento Compartir igual 4.0</a></p>
        <br /><br />
			</div>
			<!-- /.col-lg-9 -->
		</div>
	</div>
	<!-- /.container --><?php $ruta="../../../../assets"; include '../../footer.php';?>

	<!-- Bootstrap core JavaScript -->
	<script src="assets/js/act.js"></script>
<script src="../../../../vendor/jquery/jquery.min.js"></script>
<script src="../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- script unidad/evaluación inactiva -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../../../assets/js/sweetalert/sweetalert2.js"></script>
<script src="../../../../assets/js/script.js"></script>
</body>

</html>