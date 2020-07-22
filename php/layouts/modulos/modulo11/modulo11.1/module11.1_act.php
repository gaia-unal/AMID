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
	<link rel="stylesheet" href="../assets/css/estilo.css">
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
					<ul class="list-group-item">
						<a href="module11.1_inicio.php" class="list-group-item active">Unidad 1</a>
						<ul class="list-group-item">
							<a href="module11.1_temas.php" class="list-group-item">Temas</a>
							<a href="#" class="list-group-item active">Actividad</a>
						</ul>
						<a href="../modulo11.2/module11.2_inicio.php" class="list-group-item">Unidad 2</a>
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
				<h1><br>Unidad 1: Propiedad de los medios en el mundo global actual</h1>
				<div class="card mt-4">
					<div class="card-body">
						<div id="parte1">
							<p class="card-text">
								“El monopolio de los medios, así como el control del estado, puede representar una
								gran amenaza para la diversidad y el pluralismo de los medios, y por tanto para la
								libertad de expresión. La regulación de la competencia es una parte importante para
								restringir los monopolios como también lo es el profesionalismo y la independencia
								periodística. La diversidad de puntos de vista también se alimenta a través de una
								variedad de formas de propiedad (público, privado y sin fines de lucro), así como
								por la disponibilidad de diferentes tipos de medios (impresos, radio, televisión,
								Internet, etc.) Para dialogar: es esencial tener la diseminación más amplia posible
								de información que provenga de fuentes diversas y antagónicas para el bienestar de
								las personas. Mientras que los diferentes propietarios de periódicos y aquellos que
								hacen transmisiones generalmente critican los contenidos de los otros, la
								concentración de los medios bajo un propietario común puede prevenir cualquier tipo
								de crítica mutua y dar como resultado la auto-promoción.”
							</p>
						</div>
						<div id="parte2">
							<p class="card-text">
								<h4>Cómo la propiedad de los medios y el control afecta a las políticas de medios,
									a los procesos, a los contenidos y a la transmisión</h4>
								En este sentido, Rodrigo Alsina afirma que la producción de la noticia es un
								proceso que se inicia con un acontecimiento. Pero no todo acontecimiento se
								transforma en noticia, ni toda noticia representa un acontecimiento para la
								sociedad. Entender esto es importante para comprender una de las aristas de
								la relación entre medios de comunicación y sociedad: “los medios utilizan como
								materia prima unos acontecimientos sociales y, a su vez, construyen y transmiten
								un producto que puede llegar a convertirse en acontecimiento social”. Por su parte,
								Borrat sostiene que cada medio fabrica “una actualidad periodística que le es propia,
								característica, autónoma e irrepetible”,porque supone un proceso de producción en
								función de decisiones, acciones, recursos y señas de identidad propias de cada
								organización informativa.<br><br>
								En La fabricación de la noticia, Fishman demostró el modo en que los medios de
								comunicación no sólo influyen en nuestra percepción del mundo, sino que también
								pueden “construir realidades”. El autor explicó de qué modo una ola de crímenes
								producida contra ancianos en Nueva York fue un hecho construido por los medios de
								comunicación, no porque la hayan “inventado”, sino porque fueron “los instrumentos
								en virtud de los cuales esa ola de crímenes fue montada”, al otorgar “una forma y
								un contenido determinantes a todos los incidentes sobre los que informaron”. En
								este caso, los medios de comunicación crearon un acontecimiento (“la ola de crímenes”)
								que trascendió una serie de hechos individuales (algunos crímenes de ancianos),
								que adquirió presencia en la conciencia pública y organizó la percepción de las
								personas (temor, inseguridad) acerca de un aspecto de la comunidad en que vivían.
								Por lo tanto, la “ola de crímenes” fue real por las consecuencias que provocó
								(mudanzas a otro barrio, mayor número de agentes de la policía en las calles,
								implementación de leyes contra el delito, etc.), pese a que las estadísticas
								policiales de la época señalaban una disminución en el número de delitos cometidos
								contra ancianos en comparación con otros años. De esta forma, en el proceso de
								producción de las noticias se crean nuevos acontecimientos que adquieren el carácter
								de “sucesos públicos” al ser transmitidos por los medios institucionalizados de
								comunicación. (Califano, 2015)
							</p>
						</div>
						<div id="parte3">
							<p class="card-text">
								<h4>Cómo las convenciones internacionales existentes y las leyes/políticas nacionales
									dan forma o regulan la estructura de la propiedad de medios </h4>
								Da clic en las imagenes para verla más grande.
								<div><a href="../assets/img/2-img1.png" target="_blank" rel="noopener noreferrer"><img
											src="../assets/img/2-img1.png" alt="" class="noti"></a></div>
								<br>
								<div><a href="../assets/img/2-img2.png" target="_blank" rel="noopener noreferrer"><img
											src="../assets/img/2-img2.png" alt="" class="noti"></a></div>
							</p>
						</div>
						<div id="parte4">
							<p class="card-text">
								<h4>Funcionamiento de la economía global, y el nacimiento de las nuevas tecnologías, y
									cómo estas afectan a las estructuras y a los patrones de la propiedad de los medios.
								</h4>
								Los observadores políticos y los eruditos contemplaron la llegada de un «populismo de
								los nuevos medios» que implicaría a los ciudadanos desinteresados y facilitaría un papel
								más activo al público en el discurso político. Los nuevos medios tenían el potencial de
								mejorar el acceso de la gente a la información política, facilitar un discurso político
								de mayor alcance y fomentar la participación. Al principio, el público respondió
								positivamente a los canales de comunicación más accesibles, llamando a programas de opinión,
								debate y entrevistas políticos y participando en foros de discusión de los ayuntamientos por
								internet. Sin embargo, el verdadero potencial populista de los nuevos medios se vio socavado
								por el hecho de que el sistema de los nuevos medios políticos evolucionó anárquicamente, sin
								principios rectores ni objetivos. Estaba muy dominado por los intereses comerciales y por
								aquellos que ya ocupaban puestos privilegiados en la política y la industria de la
								información. El entusiasmo público acabó dando lugar a la ambivalencia y el cinismo,
								especialmente a medida que la novedad de la primera fase de los nuevos medios desapareció
								(Davis y Owen, 1998).<br><br>
								La siguiente fase en el desarrollo de los nuevos medios se desplegó junto con la aplicación
								a la política de tecnologías emergentes de comunicación digital que hicieron posible canales
								completamente nuevos y revolucionarios sistemas de envío de contenidos. El entorno digital y
								las plataformas a las que sostiene transformaron profundamente el sistema de los medios
								políticos. Empezando a mediados de la década de 1990, nuevas plataformas de medios políticos
								progresaron rápidamente desde la rudimentaria página web de «folletos» sin capacidad de
								interacción usada por la campaña presidencial de Bill Clinton en 1992 hasta abarcar sitios
								web con características interactivas, foros de discusión, blogs, plataformas online para la
								recaudación de fondos, páginas web para el reclutamiento de voluntarios y reuniones. El
								público se implicó más en la producción y distribución real de contenidos políticos. Los
								«periodistas ciudadanos» estaban siendo testigos de eventos que los periodistas
								profesionales no cubrían. La gente no perteneciente a las élites aportaba sus puntos de
								vista sobre cualquier asunto a los propios líderes políticos. Los miembros del público
								también eran responsables de la grabación y la publicación de vídeos que podían volverse
								virales e influir en el desarrollo de los acontecimientos (Wallsten, 2010). En 2006, por
								ejemplo, la campaña para la reelección del senador republicano George Allen se vio arruinada
								por un vídeo viral en el que utilizaba el término «macaco» (un insulto racista) para
								referirse a una joven de origen indio que estaba asistiendo a su mitin electoral (Craig y
								Shear, 2006).
							</p>
						</div>
						<br>
						<center>
							<button id="btnSig" class="btn btn-outline-success" onclick="sig();">Siguiente</button>
						</center>
					</div>
				</div>
				<!-- /.card -->
				<br>
				<center>
					<a href="module11.1_temas.php" class="btn btn-success">Anterior</a>
					<a href="module11.1_act2.php" class="btn btn-success btnSig retraso3">Siguiente</a>
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
	<script src="../assets/js/script.js"></script>

</body>

</html>