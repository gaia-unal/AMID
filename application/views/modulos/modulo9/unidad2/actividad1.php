<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>AMID</title>
  
  <?php $this->load->view('initial/linkGenerico');?>
  <link href="<?php echo base_url();?>public/assets/modulos/mod9/css/u2estilo.css" rel="stylesheet">

</head>

<body>
  <?php $this->load->view('initial/nav');?>

  <!-- Page Content -->
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<h1 class="my-4">Módulos AMID</h1>
				<div class="list-group">
				<a href="<?php echo base_url();?>modulo1" class="list-group-item">Módulo 1</a>
				<a href="<?php echo base_url();?>modulo2" class="list-group-item">Módulo 2</a>
				<a href="<?php echo base_url();?>modulo3" class="list-group-item">Módulo 3</a>
				<a href="<?php echo base_url();?>modulo4" class="list-group-item">Módulo 4</a>
				<a href="<?php echo base_url();?>modulo5" class="list-group-item">Módulo 5</a>
				<a href="<?php echo base_url();?>modulo6" class="list-group-item">Módulo 6</a>
				<a href="<?php echo base_url();?>modulo7" class="list-group-item">Módulo 7</a>
				<a href="<?php echo base_url();?>modulo8" class="list-group-item">Módulo 8</a>
					<a href="<?php echo base_url();?>modulo9" class="list-group-item active">Módulo 9</a>
					<ul class="list-group-item">
						<a href="<?php echo base_url();?>modulo9/unidad1" class="list-group-item">Unidad 1</a>
						<a href="<?php echo base_url();?>modulo9/unidad2" class="list-group-item active">Unidad 2</a>
						<ul class="list-group-item">
							<a href="<?php echo base_url();?>modulo9/unidad2/temas" class="list-group-item">Temas</a>
							<a href="#" class="list-group-item active">Actividades</a>
							<a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
						</ul>
						<a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 3</a>
					</ul>
						
				<a href="<?php echo base_url();?>modulo10" class="list-group-item">Módulo 10</a>
				<a href="<?php echo base_url();?>modulo11" class="list-group-item">Módulo 11</a>
				<a href="<?php echo base_url();?>modulo12" class="list-group-item">Módulo 12</a>
				</div>
				<br /><br />
			</div>
			<!-- /.col-lg-3 -->
			<div class="col-lg-9">
				<br>
				<h1> Unidad 2: Teorías de aprendizaje y AMI</h1>
				<div class="card mt-4">
					<div class="card-body">
						<h4>Teorías de Aprendizaje</h4>
						<p class="card-text">
							<div id="parte1">
								<h4>Meta-cognición</h4>
								Se puede definir la meta cognición como “la cognición sobre la cognición” o “el
								conocimiento
								sobre el conocimiento”. Esto puede tomar muchas formas e incluye el conocimiento sobre
								cuándo y cómo utilizar una estrategia en particular para aprender o para resolver
								problemas.
								En la práctica, estas capacidades se utilizan para regular nuestro propio conocimiento,
								para
								maximizar nuestro propio potencial para pensar y aprender, y para evaluar las reglas
								adecuadas de ética/moral (adaptado de la Wikipedia).
							</div>
							<div id="parte2">
								<h4>Estrategias de meta-cognición</h4>
								Son una serie de pasos y procedimientos que nos permiten acceder, procesar e
								interiorizar
								conocimientos, las estrategias metacognitivas son acciones concretas que realizamos
								conscientemente para mejorar o facilitar el aprendizaje.<br>
								Algunas veces, por ejemplo, clasificamos la información, otras veces tomamos apuntes de
								lo
								más importante, en otras ocasiones hacemos esquemas o tratamos de asociar los nuevos
								conocimientos con algo que ya sabemos para que así no se nos olvide.
							</div>
							<div id="parte3">
								<h4>¿Qué papel tiene la meta-cognición en la transferencia de aprendizaje? </h4>
								«El objetivo de enseñar las habilidades del pensamiento no se tendría que considerar
								como
								algo opuesto a enseñar el contenido convencional, sino como un complemento de éste. Las
								personas razonan con frecuencia de una manera inferior a la óptima; por lo tanto, son
								importantes los esfuerzos para desarrollar métodos que permitan mejorar las habilidades
								de
								pensamiento. El auténtico protagonismo de la escuela tiene que dirigirse a ayudar a
								pensar a
								la persona y a enseñar a aprender. Es decir, el docente tiene que enseñar estrategias de
								aprendizaje y debe promover el esfuerzo del estudiante para propiciar la construcción de
								esquemas y facilitar el aprendizaje permanente. Finalmente, cabe destacar que una de las
								áreas prioritarias actuales y futuras en investigación es la de las intervenciones en
								estrategias metacognitivas, su impacto en el desarrollo cognitivo de los alumnos y la
								transferencia y la perdurabilidad de sus efectos en el aprendizaje»<br> Escrito
								por: Montse Tesouro. Universitat de Girona. Departamento de Pedagogia
							</div>
							<center>
								<button class="btn btn-self mg-5" id="ant" onclick="anterior();">Anterior</button>
								<button class="btn btn-self mg-5" id="sig" onclick="siguiente();">Siguiente</button>
							</center>
						</p>
					</div>
				</div>
				<!-- /.card -->
				<br>
                <center>
                    <a href="<?php echo base_url();?>modulo9/unidad2/temas" class="btn btn-success">Anterior</a>
                    <a href="<?php echo base_url();?>modulo9/unidad2/actividad2" class="btn btn-success">Siguiente</a>
                </center>
				<?php $this->load->view('initial/paginacion');?>

<br />
<p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative Commons
	Reconocimiento Compartir igual 4.0</a></p>
<br><br>
<!-- /.card -->
</div>
<!-- /.col-lg-9 -->
</div>
</div>
<!-- /.container -->

<?php $this->load->view('initial/footer');?>
<?php $this->load->view('initial/scriptGenerico');?>
<script src="<?php echo base_url();?>public/assets/modulos/mod9/js/2script.js"></script>
</body>

</html>