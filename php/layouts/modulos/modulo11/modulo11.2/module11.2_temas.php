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
					<a href="../../modulo9/module9.php" class="list-group-item">Módulo 9</a>
					<a href="../../modulo10/module10.php" class="list-group-item">Módulo 10</a>
					<a href="../module11.php" class="list-group-item active">Módulo 11</a>
					<ul class="list-group-item">
						<a href="../modulo11.1/module11.1_inicio.php" class="list-group-item">Unidad 1</a>
						<a href="../modulo11.2/module11.2_inicio.php" class="list-group-item active">Unidad 2</a>
						<ul class="list-group-item">
							<a href="#" class="list-group-item active">Temas</a>
							<a href="module11.2_act.php" class="list-group-item">Actividad</a>
						</ul>
						<a href="../modulo11.3/module11.3_inicio.php" class="list-group-item">Unidad 3</a>
						<a href="../modulo11.4/module11.4_inicio.php" class="list-group-item">Unidad 4</a>
					</ul>
					<a href="../../modulo12/module12.php" class="list-group-item">Módulo 12</a>
				</div>
				<br /><br />
			</div>
			<!-- /.col-lg-3 -->
			<div class="col-lg-9">
				<h1><br>Unidad 2: Dimensiones Socio-Culturales y Políticas de los Medios Globalizados</h1>
				<div class="card mt-4">
					<div class="card-body">
						<h4>Temas clave</h4>
						<p class="card-text">
						<ul>
							<li class="animated lightSpeedIn">Dimensiones socio-culturales de los medios globales</li>
							<li class="animated lightSpeedIn">Los medios y la cultura popular</li>
							<li class="animated lightSpeedIn">Estereotipos culturales, prejuicios y sesgos</li>
							<li class="animated lightSpeedIn">Amenaza que se percibe por la homogenización de la cultura
							</li>
							<li class="animated lightSpeedIn">Promesa de una diversidad cultural y un pluralismo</li>
							<li class="animated lightSpeedIn retraso3">Medios y tolerancia cultural, entendimiento y
								ciudadanía global</li>
							<li class="animated lightSpeedIn retraso3">Impacto político de los medios</li>
							<li class="animated lightSpeedIn retraso3">Proporcionar mecanismos para un flujo de dos vías
								de la información (por Ej. norte-sur, sur-sur)</li>
							<li class="animated lightSpeedIn retraso3">Los medios como una plataforma para ampliar la
								esfera pública (discurso democrático)</li>
							<li class="animated lightSpeedIn retraso3">Los medios como un mecanismo para la movilización
								política y social</li>
							<li class="animated lightSpeedIn retraso5">El poder de los medios para dar forma a la
								opinión pública y a la agenda pública</li>
							<li class="animated lightSpeedIn retraso5">Promover el buen gobierno a través de la
								transparencia y de la rendición de cuentas</li>
							<li class="animated lightSpeedIn retraso5">Los medios y las comunidades de migrantes</li>
							<li class="animated lightSpeedIn retraso5">Cómo los medios globales y la convergencia
								tecnológica abordan las necesidades de las comunidades de migrantes</li>
							<li class="animated lightSpeedIn retraso5">Estudios de caso de los canales de medios de la
								diáspora/ comunidades de migrantes</li>
						</ul>
						</p>
					</div>
				</div>
				<!-- /.card -->
				<br>
				<center>
					<a href="module11.2_inicio.php" class="btn btn-success">Anterior</a>
					<a href="module11.2_act.php" class="btn btn-success btnS retraso3">Siguiente</a>
					<p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative
							Commons Reconocimiento Compartir igual 4.0</a></p>
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