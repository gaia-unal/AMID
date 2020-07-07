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
    $newConn->connectionDB();
  	require '../../../../queries/activeSession.php';
	$rutaSession="../../../../queries/"; include '../../../header.php'; 
?>

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
						<a href="module11.1_inicio.php" class="list-group-item active">Unidad 1</a>
						<ul class="list-group-item">
							<a href="#" class="list-group-item active">Temas</a>
							<a href="module11.1_act.php" class="list-group-item">Actividad</a>
						</ul>
						<a href="../modulo11.2/module11.2_inicio.php" class="list-group-item">Unidad 2</a>
						<a href="../modulo11.3/module11.3_inicio.php" class="list-group-item">Unidad 3</a>
						<a href="../modulo11.4/module11.4_inicio.php" class="list-group-item">Unidad 4</a>
					</ul>
					<a href="../../modulo12/module12.php" class="list-group-item">Módulo 12</a>
				</div>
				<br /><br />
			</div>
			<!-- /.col-lg-3 -->
			<div class="col-lg-9">
				<h1><br>Unidad 1: Propiedad de los Medios en el Mundo Global Actual</h1>
				<div class="card mt-4">
					<div class="card-body">
						<h4>Temas clave</h4>
						<p class="card-text">
							<ul>
								<li class="animated lightSpeedIn">La economía global, el comercio electrónico y la propiedad de
									los medios</li>
								<li class="animated lightSpeedIn">Patrones de comunicación, propiedad de los medios y control
								</li>
								<li class="animated lightSpeedIn">Medios privados (comerciales), medios controlados o de
									propiedad del gobierno, y
									organizaciones de medios públicos, por Ej. sistemas de difusión pública</li>
								<li class="animated lightSpeedIn">Medios comunitarios</li>
								<li class="animated lightSpeedIn">Convergencia de tecnologías (medios de masas,
									telecomunicaciones y computadoras) y
									el nacimiento de los conglomerados mediáticos</li>
								<li class="animated lightSpeedIn retraso3">Pluralismo y concentración (por Ej. cadenas de medios
									y propiedad cruzada (cross
									ownership)</li>
								<li class="animated lightSpeedIn retraso3">Adquisiciones, fusiones, sociedades conjuntas (joint
									ventures) y consorcios</li>
								<li class="animated lightSpeedIn retraso3">Transnacionalización (corporaciones mediáticas
									globales)</li>
								<li class="animated lightSpeedIn retraso3">Protocolos internacionales y nacionales sobre la
									propiedad de los medios</li>
								<li class="animated lightSpeedIn retraso3">Leyes anti-monopolio</li>
								<li class="animated lightSpeedIn retraso5">Limitaciones a la propiedad en el extranjero</li>
								<li class="animated lightSpeedIn retraso5">Otras políticas regulatorias y mecanismos</li>
								<li class="animated lightSpeedIn retraso5">Propiedad de los medios, desarrollo del contenido y
									programación</li>
								<li class="animated lightSpeedIn retraso5">Contenido extranjero vs. contenido local</li>
								<li class="animated lightSpeedIn retraso5">Externalización de servicios, deslocalización y
									aprovisionamiento local (home
									sourcing)</li>
								<li class="animated lightSpeedIn retraso5">Tensiones entre la independencia editorial y los
									intereses de los propietarios</li>
							</ul>
						</p>
					</div>
				</div>
				<!-- /.card -->
				<br>
				<center>
					<a href="module11.1_inicio.php" class="btn btn-success">Anterior</a>
					<a href="module11.1_act.php" class="btn btn-success btnS retraso3">Siguiente</a>
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