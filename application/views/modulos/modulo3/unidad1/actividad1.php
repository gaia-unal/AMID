<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AMID</title>
  
  <?php $this->load->view('initial/linkGenerico');?>
  <link href="<?php echo base_url();?>public/assets/modulos/mod3/css/u1estilo.css" rel="stylesheet">

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
					<a href="<?php echo base_url();?>modulo3" class="list-group-item active">Módulo 3</a>
					<ul class="list-group-item">
						<a href="<?php echo base_url();?>modulo3/unidad1" class="list-group-item active">Unidad 1</a>
						<ul class="list-group-item">
							<a href="<?php echo base_url();?>modulo3/unidad1/temas" class="list-group-item">Temas</a>
							<a href="#" class="list-group-item active">Actividad</a>
							<a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
						</ul>
						<a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
						<a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
						<a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 4</a>
						<a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 5</a>
					</ul>
					
                    <a href="<?php echo base_url();?>modulo4" class="list-group-item">Módulo 4</a>
                    <a href="<?php echo base_url();?>modulo5" class="list-group-item">Módulo 5</a>
                    <a href="<?php echo base_url();?>modulo6" class="list-group-item">Módulo 6</a>
                    <a href="<?php echo base_url();?>modulo7" class="list-group-item">Módulo 7</a>
                    <a href="<?php echo base_url();?>modulo8" class="list-group-item">Módulo 8</a>
                    <a href="<?php echo base_url();?>modulo9" class="list-group-item">Módulo 9</a>
                    <a href="<?php echo base_url();?>modulo10" class="list-group-item">Módulo 10</a>
                    <a href="<?php echo base_url();?>modulo11" class="list-group-item">Módulo 11</a>
                    <a href="<?php echo base_url();?>modulo12" class="list-group-item">Módulo 12</a>
				</div>
			</div>
			<!-- /.col-lg-3 -->
			<div class="col-lg-9">
				<h1><br>Unidad 1: Informes de noticias y el poder de las imágenes</h1>
				<div class="card mt-4">
					<div class="card-body">
						<h4>Representación en los medios de información</h4>
						<p class="card-text">
							Para el desarrollo de este módulo denominado <strong>"Representación en los medios de
								información"</strong> se va a investigar y analizar la cobertura de los medios de un
							evento importante como el terremoto en Haití. Este estudio de caso debe enfocarse en las
							imágenes de la cobertura de noticias y las representaciones de las personas y los temas
							que se vinculan con estos eventos.<br> Observe detenidamente las siguientes imágenes y luego
							responda las preguntas de la actividad.</p>
						<div>
							<img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod3/img/img1.png">
							<img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod3/img/img2.png">
							<img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod3/img/img3.png">
							<img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod3/img/img4.png">
							<img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod3/img/img5.png">
							<img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod3/img/img6.png">
							<img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod3/img/img7.png">
							<img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod3/img/img8.png">
							<img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod3/img/img9.png">
							<img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod3/img/img10.png">
							<img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod3/img/img11.png">
							<img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod3/img/img12.png">
							<img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod3/img/img13.png">



						</div>
					</div>
				</div>
				<!-- /.card -->
				<br>
                <center>
                    <a href="<?php echo base_url();?>modulo3/unidad1/temas" class="btn btn-success">Anterior</a>
                    <a href="<?php echo base_url();?>modulo3/unidad1/actividad2" class="btn btn-success">Siguiente</a>
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
<script src="<?php echo base_url();?>public/assets/modulos/mod"></script>
</body>

</html>