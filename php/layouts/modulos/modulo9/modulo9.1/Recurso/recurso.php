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
						<a href="../module9.1_inicio.php" class="list-group-item active">Unidad 1</a>
						<ul class="list-group-item">
							<a href="../module9.1_temas.php" class="list-group-item">Temas</a>
							<a href="#" class="list-group-item active">Actividades</a>
							<a href="../module9.1_eval.php" class="list-group-item">Evaluación</a>
						</ul>
						<a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
						<a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
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
				<h1>Unidad 1: Comunicación, enseñanza y aprendizaje</h1>
				<div class="card mt-4">
					<div class="card-body">
						<h4>Comunicación</h4>
						<p class="card-text">
							<blockquote
								cite="http://unesco.mil-for-teachers.unaoc.org/modules/modulo-9-comunicacion-ami-y-aprendizaje-modulo-final/unidad-1-comunicacion-ensenanza-y-aprendizaje/?lang=es"
								align="justify">
								“Si utilizamos los medios, bibliotecas, archivos y otros proveedores de información
								(incluyendo Internet o las nuevas tecnologías) en el aula, tenemos que tomar en
								cuenta nuestra forma de enseñanza: ¿cómo utilizamos a los medios y a los otros
								proveedores de información? ¿De qué forma tienen un impacto sobre las formas en las
								cuales la información se comunica a los estudiantes? Los modelos de comunicación pueden
								proveer un marco conceptual para insertar a AMI dentro de la experiencia de enseñanza y
								aprendizaje. Estos modelos dan la oportunidad de examinar de cerca los roles de los
								profesores, los estudiantes y los medios, bibliotecas, archivos y otros proveedores
								de información en las aulas."(Shannon and Weaver, 1948; Schramm, 1954; Berlo, 1960)
							</blockquote>
							<h4>Emisor</h4>
							<em>Emisor</em> se refiere a la persona que enuncia un mensaje en un acto de
							comunicación. <br><br>
							<h4>Canal</h4>
							Un canal de comunicación es el medio de transmisión por el que viaja la información
							entre emisor y receptor. Puede ser el aire en la transmisión oral y el papel en la escrita.​
							<br><br>
							<h4>Receptor</h4>
							Receptor es la persona a quien va dirigido el mensaje. <br><br>
							<h4>Retroalimentación</h4>
							La retroalimentación sucede cuando el receptor responde al emisor, en otras palabras, es
							lacomunicación de vuelta en una comunicación efectiva.
						</p>
					</div>
				</div>
				<!-- /.card -->
				<br>
				<center>
					<a href="../module9.1_temas.php" class="btn btn-success">Anterior</a>
					<a href="actividad.php" class="btn btn-success btnSig retraso3">Siguiente</a>
				</center>
                <?php
                    include '../../../../../functions/paginacion.php';
                    pag(3);
                ?>
				<p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative
						Commons Reconocimiento Compartir igual 4.0</a></p>
				<br /><br />
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