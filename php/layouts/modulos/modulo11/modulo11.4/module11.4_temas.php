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
						<a href="../modulo11.2/module11.2_inicio.php" class="list-group-item">Unidad 2</a>
						<a href="../modulo11.3/module11.3_inicio.php" class="list-group-item">Unidad 3</a>
						<a href="../modulo11.4/module11.4_inicio.php" class="list-group-item active">Unidad 4</a>
						<ul class="list-group-item">
							<a href="#" class="list-group-item active">Temas</a>
							<a href="module11.4_act.php" class="list-group-item">Actividad</a>
						</ul>
					</ul>
					<a href="../../modulo12/module12.php" class="list-group-item">Módulo 12</a>
				</div>
				<br /><br />
			</div>
			<!-- /.col-lg-3 -->
			<div class="col-lg-9">
				<h1><br>Unidad 4: El nacimiento de medios alternativos</h1>
				<div class="card mt-4">
					<div class="card-body">
						<h4>Temas clave</h4>
						<p class="card-text">
						<ul>
							<li class="animated lightSpeedIn">Medios alternativos: por qué han surgido</li>
							<li class="animated lightSpeedIn">Credibilidad pública de los principales medios</li>
							<li class="animated lightSpeedIn">Aparición de la tecnología de la información y las la
								comunicación</li>
							<li class="animated lightSpeedIn">Cambios en los hábitos mediáticos y las preferencias del
								consumidor</li>
							<li class="animated lightSpeedIn">Definición de medios alternativos (en contraste con los
								medios principales)</li>
							<li class="animated lightSpeedIn retraso3">Propiedad y control de los medios alternativos
								(es decir; democratizar la propiedad y el control)</li>
							<li class="animated lightSpeedIn retraso3">Audiencias de los medios alternativos: distintos
								sectores (mujeres, jóvenes, niños, obreros/ trabajadores, etc.) grupos marginados
								(comunidades culturales, migrantes, etc.)</li>
							<li class="animated lightSpeedIn retraso3">Contenido de los medios alternativos (por Ej.
								perspectivas de la comunidad, enfoque de participación e interactividad)</li>
							<li class="animated lightSpeedIn retraso3">El papel de los medios alternativos en la
								sociedad (por Ej. transparencia, diversidad y libertad de expresión)</li>
							<li class="animated lightSpeedIn retraso5">Planificación, administración y mantenimiento de
								un medio alternativo en distintos escenarios</li>
							<li class="animated lightSpeedIn retraso5">Medios alternativos en un ambiente de
								escuela/colegio</li>
							<li class="animated lightSpeedIn retraso5">Medios alternativos en una comunidad</li>
							<li class="animated lightSpeedIn retraso5">Modelos de ingresos para los medios alternativos.
							</li>
						</ul>
						</p>
					</div>
				</div>
				<!-- /.card -->
				<br>
				<center>
					<a href="module11.4_inicio.php" class="btn btn-success">Anterior</a>
					<a href="module11.4_act.php" class="btn btn-success btnS retraso3">Siguiente</a>
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