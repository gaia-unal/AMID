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
						<a href="#" class="list-group-item active">Actividad</a>
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
				<h1><br>Unidad 4: El nacimiento de medios alternativos</h1>
				<div class="card mt-4">
					<div class="card-body">
						<div id="parte1">
							<h4>Medios Alternativos</h4>
							<p class="card-text">
								Un medio alternativo de información, medio de comunicación alternativo o medio
								alternativo es un emisor de información independiente que no constituye una agencia de
								información ni de los medios masivos de comunicación organizados como empresas. <br>
								Esta compuesto por:
							<ul>
								<li>Periodistas que trabajan de forma independiente</li>
								<li>Comunicadores individuales</li>
								<li>Comunicadores de organizaciones sociales, ecologistas, culturales y políticas</li>
							</ul>
							Puede, en ocasiones, contener información anónima o no verificable, ni legalmente autorizada
							o responsable, lo cual es identificado como una posible debilidad en su credibilidad.
							<i>Definición de medios alternativos</i> (2011).
							</p>
						</div>
						<div id="parte2">
							<p class="card-text">
							<h4>Características</h4>
							"Las características de la comunicación alternativa están intrínsecamente ligadas a la
							vocación de cambio de estos medios." <br>
							Enumerar una serie de características para los denominados medios alternativos se hace
							necesario, pues, para clasificar este tipo de comunicación. Se trata de medios de
							comunicación al margen de los mayoritarios o convencionales, ya que los últimos están
							"estrechamente vinculados con los sectores de poder, son parte de ellos y a su vez mantienen
							una relación de dependencia, en muchos casos, con un centro transnacional, por lo cual la
							comunicación se constituye en un canal de esa dominación de la que se depende" (CERIGUA,
							2003). Esta situación "provoca un monopolio de la información, tanto de parte de los
							gobiernos, como de intereses privados, lo que permite un uso arbitrario de los medios de
							información que da lugar a la manipulación de los mensajes, de acuerdo con intereses
							sectoriales" y por ello "usualmente cuando se habla de libertad de prensa, realmente a lo
							que se está refiriendo es la libertad de empresa" (CERIGUA, 2003). <br>
							A modo de síntesis, se toma de Albert (1997) las características definitorias para estos
							medios alternativos:
							<ol type="a">
								<li>Las diferencias en ingresos dentro de las instituciones de medios alternativos
									deberían disminuir a un ritmo constante. Tampoco debería haber alguien investido con
									más poder que los demás. Si alguna diferencia económica aún persistiese, debería
									tener una justificación legítima.</li>
								<li>Las condiciones de trabajo en las instituciones de medios alternativos no deben ser
									ampliamente disparejas. Es decir, dadas las tareas que se tienen que hacer, la
									calidad general de la vida en el trabajo debe ser comparable para todos los
									trabajadores; y en la medida en que no lo sea, aquellos que tienen las peores
									condiciones de trabajo deben ser compensados, y no lo contrario.</li>
								<li>Las jerarquías típicas de poder e influencia sobre las decisiones que se toman,
									deben ser reducidas y, hasta lo posible, eliminadas. Esto tiene un doble significado
									práctico. Las maneras y procedimientos de tomar decisiones deben ser participativos
									y democráticos, con la meta, compartida por todos, de que los participantes deben
									afectar las decisiones en proporción al grado en que ellos son afectados por éstas.
									Pero también, las circunstancias del trabajo (y entrenamiento) deben dar poder a
									todos los participantes para que sus derechos de votación no sean una formalidad; al
									contrario, cada participante debe tener la información, la confianza en sí mismo, el
									tiempo, y la seguridad para desarrollar sus propias opiniones, presentarlas y
									defenderlas de manera efectiva cuando sea necesario.</li>
								<li>Debe haber una disminución constante de las divisiones raciales y sexistas del
									trabajo, aunque haya obstáculos difíciles que sortear. Esto significa que la cultura
									de estas instituciones, sus poblaciones actuales y los roles que se desempeñan en el
									trabajo, deben incorporar objetivos feministas y multiculturales.</li>
								<li>Las relaciones con el público deben respetar los mismos valores y normas que se
									siguen dentro de la institución, particularmente los de transparencia, diálogo, y
									comunicación general. La audiencia que interesa debería ser amplia y socialmente
									relevante (no sólo esos que tienen buenos ingresos y que atraen a los publicistas).
								</li>
								<li>Las relaciones con otros proyectos de los medios alternativos deberían ser de apoyo.
									La agenda no debería ser exclusivamente la autopreservación, sino el avance de la
									totalidad del proyecto alternativo.</li>
							</ol>
							Fleischman, Luciana. Ginesta, Xavier. Lopez Calzada, Miguel (2009) <i>Los medios
								alternativos e internet: un ánalisis cualitativo del sistema mediático español</i>
							</p>
						</div>
						<div id="parte3">
							<h4>Tipos</h4>
							<p class="card-text">
								A continuación se presentan los tipos de medios alternativos expuestos por Lamb, Hair y
								McDaniel (2002):
							<ul>
								<li>Faxes</li>
								<li>Carritos de compras con vídeo en las tiendas comerciales.</li>
								<li>Protectores de pantallas de computadoras.</li>
								<li>Discos compactos.</li>
								<li>Kioscos interactivos en tiendas departamentales.</li>
								<li>Anuncios que pasan antes de las películas en los cines y en los videocasetes
									rentados.</li>
							</ul>
							Cabe mencionar que casi cualquier cosa puede convertirse en un vehículo para exhibir
							publicidad. Por ejemplo, los elevadores (ascensores) incluirán o ya incluyen pantallas para
							exhibir noticias, información y publicidad para captar la atención de trabajadores de altos
							ingresos en los grandes edificios de oficinas. <br>
							Marketing, Sexta Edición, de Lamb Charles, Hair Joseph y McDaniel Carl, International
							Thomson Editores, 2002, Págs. 512 al 516.
							</p>
						</div>
						<div id="parte4">
							<h4>Profundización</h4>
							<p class="card-text">
								También te recomendamos leer el siguiente artículo para profundizar en el tema. <br>
								<a target="_blank" rel="noopener noreferrer"
									href="http://www.scielo.org.mx/scielo.php?script=sci_arttext&pid=S1870-00632009000200011">Los
									medios alternativos e internet: un ánalisis cualitativo del sistema mediático
									español</a> <br>
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
					<a href="module11.4_temas.php" class="btn btn-success">Anterior</a>
					<a href="module11.4_act2.php" class="btn btn-success btnSig retraso3">Siguiente</a>
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
	<script src="assets/js/script.js"></script>
	<script src="../../../../../vendor/jquery/jquery.min.js"></script>
	<script src="../../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="../../../../../assets/js/script.js"></script>
</body>

</html>