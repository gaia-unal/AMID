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
							Recolecte y describa ejemplos de cómo las personas utilizan los medios de masas en sus vidas
							diarias. Tome en cuenta el uso de los medios de información, entretenimiento, monitoreo,
							compañía, e identificación. Encuentre algún material en los sitios de Internet sobre
							programas populares de televisión o música. ¿Qué le dicen estas fuentes sobre cómo las
							audiencias usan y disfrutan estos medios? ¿De qué manera estos usos podrían ser diferentes a
							lo que los productores esperaban? <br> Imagínese cómo una familia con un pasado totalmente
							diferente o un período de tiempo distinto podría interpretar algunos de los programas
							actuales de televisión o anuncios. ¿Qué dirían ellos sobre las audiencias de los medios hoy
							en día?<br>
							<textarea name="preg1" id="p1-r" cols="80" rows="5" placeholder="Escriba su respuesta aquí"
								spellcheck="true"></textarea> <br><br>

							Usando el Internet, investigue la respuesta de las audiencias a los programas populares de
							televisión en una variedad de países. ¿Cómo las diferentes audiencias de estos programas,
							“leen” o interpretan a los personajes principales?<br>
							<textarea name="preg2" id="p2-r" cols="80" rows="5" placeholder="Escriba su respuesta aquí"
								spellcheck="true"></textarea><br><br>

							Analice los mensajes y los valores que se transmiten a través de un texto mediático popular
							como un programa de televisión. ¿Cómo los mensajes podrían cambiar si incluyeran personas de
							diferentes grupos sociales (por Ej. edad, origen étnico), o si los personajes femeninos y
							masculinos cambiaran de papeles? ¿Cómo podría impactar esto en la audiencia?<br>
							<textarea name="preg3" id="p3-r" cols="80" rows="5" placeholder="Escriba su respuesta aquí"
								spellcheck="true"></textarea> <br><br>

							Utilizando Internet, investigue acerca de las actuales estrategias que los anunciantes
							utilizan para entender y seleccionar las audiencias, temas como psicografías o demografía
							social. Describa a continuación el enfoque, identifique las categorías, y analice los
							supuestos que se han hecho sobre las audiencias en la actualidad <br>
							<textarea name="preg4" id="p4-r" cols="80" rows="5" placeholder="Escriba su respuesta aquí"
								spellcheck="true"></textarea> <br><br>

							Haga dos lecturas opuestas de un texto mediático popular, como una película, un programa de
							televisión o un artículo de periódico. Determine las características de la audiencia o
							antecedentes que podrían contribuir a cada lectura crítica. ¿Cómo esto explica la variedad
							de respuestas que los textos mediáticos populares pueden recibir de las audiencias? <br>
							<textarea name="preg5" id="p5-r" cols="80" rows="5" placeholder="Escriba su respuesta aquí"
								spellcheck="true"></textarea> <br><br>

							Escanee una serie de periódicos o utilice Internet para evaluar los títulos de las películas
							actuales. Basado en los títulos y en los anuncios para estas películas, ¿qué es lo que usted
							espera ver en cada película? ¿Cuál cree usted que es la audiencia seleccionada para cada una
							de estas películas?<br>
							<textarea name="preg4" id="p4-r" cols="80" rows="5" placeholder="Escriba su respuesta aquí"
								spellcheck="true"></textarea> <br><br>

							Actualmente, en los cines, la audiencia mira anuncios antes de que inicie la película.
							¿Tomando las películas del ejercicio anterior, qué tipo de anuncios antes de la película
							esperaría usted que pasen a las audiencias?<br>
							<textarea name="preg2" id="p2-r" cols="80" rows="5" placeholder="Escriba su respuesta aquí"
								spellcheck="true"></textarea> <br><br>

							Examine el material promocional que está disponible para las universidades en su región. Si
							este material se les enseña a los estudiantes, ¿cómo se ven? ¿Qué están haciendo? ¿Qué
							imagen de la escuela/colegio se presenta a través de este material? ¿Qué impresión dan de la
							escuela/colegio que representan? ¿Son estudiantes verdaderos o sólo modelos? ¿Si los
							estudiantes no aparecen, qué imágenes se han escogido y qué dicen acerca de la institución?
							Basado en su análisis del material, ¿cuál es la audiencia seleccionada? ¿Cuál es el mensaje
							que se transmite?<br>
							<textarea name="preg2" id="p2-r" cols="80" rows="5" placeholder="Escriba su respuesta aquí"
								spellcheck="true"></textarea> <br><br>

							Existen muchas marcas independientes, películas, programas de televisión y revistas
							alternativas fuera de las grandes corporaciones mediáticas. Examine algunos de estos
							productos mediáticos para descubrir qué valor – social, artístico o comercial – tienen para
							ofrecer a las audiencias. ¿Cómo estos productores o creadores pagan y mercadean sus
							productos?<br>
							<textarea name="preg2" id="p2-r" cols="80" rows="5" placeholder="Escriba su respuesta aquí"
								spellcheck="true"></textarea> <br><br>
							Investigue sobre el trabajo realizado por Blumer y Kats (1974), quien dijo que las
							audiencias podrían escoger y utilizar un texto mediático por una o varias de las siguientes
							razones:
							<ul>
								<li>Diversión: un escape de la vida diaria</li>
								<li>Relaciones personales: el verse a usted conectado con un personaje de televisión
									o de la “familia”</li>
								<li>Identidad personal: ser capaz de identificarse con y aprender de un comportamiento,
									actitud o valores que se reflejan en los textos mediáticos</li>
								<li>Supervisión: utilizar los medios y los textos de información para aprender acerca de
									lo que sucede en nuestro mundo de alrededor, y para obtener información que puede
									ser útil para nuestra vida diaria (por Ej. Predicciones climáticas, noticias,
									resultados de elecciones, etc.) </li>
							</ul>
							Identifique ejemplos específicos en su vida o en las vidas de los estudiantes que ilustren
							estas razones para el uso de los textos mediáticos y de información
							<textarea name="preg2" id="p2-r" cols="80" rows="5" placeholder="Escriba su respuesta aquí"
								spellcheck="true"></textarea>
						</p>
					</div>
				</div>
				<!-- /.card -->
				<br>
				<center>
					<a href="module10_temas.php" class="btn btn-success">Anterior</a>
					<a href="module10_act2.php" class="btn btn-success btnSig retraso3">Siguiente</a>
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
	<!-- /.container -->
	<?php $ruta="../../../../assets"; include '../../footer.php';?>

	<!-- Bootstrap core JavaScript -->
<script src="../../../../vendor/jquery/jquery.min.js"></script>
<script src="../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- script unidad/evaluación inactiva -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../../../assets/js/sweetalert/sweetalert2.js"></script>
<script src="../../../../assets/js/script.js"></script>
</body>

</html>