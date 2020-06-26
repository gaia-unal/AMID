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
						<a href="../modulo9.1/module9.1_inicio.php" class="list-group-item">Unidad 1</a>
						<a href="module9.2_inicio.php" class="list-group-item active">Unidad 2</a>
						<ul class="list-group-item">
							<a href="#" class="list-group-item active">Temas</a>
							<a href="Recurso/recurso.php" class="list-group-item">Actividades</a>
							<a href="module9.2_eval.php" class="list-group-item">Evaluación</a>
						</ul>
						<a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 3</a>
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
				<div class="card mt-4">
					<div class="card-body">
						<h4>Temas</h4>
						<ul>
							<li class="animated lightSpeedIn">Pedagogía y AMI</li>
							<li class="animated lightSpeedIn retraso3">¿Qué es meta cognición?</li>
							<li class="animated lightSpeedIn retraso5">Meta cognición y AMI: haciendo el vínculo</li>
						</ul>
					</div>
				</div>
				<!-- /.card -->
				<br>
				<center>
					<a href="module9.2_inicio.php" class="btn btn-success">Anterior</a>
					<a href="Recurso/recurso.php" class="btn btn-success btnSig retraso3">Siguiente</a>
					
				</center>
                <?php
                    include '../../../../functions/paginacion.php';
                    pag(2);
                ?>
				<p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative
                            Commons Reconocimiento Compartir igual 4.0</a></p>
                <br /><br />
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