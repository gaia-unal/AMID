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
  <link href="<?php echo base_url();?>public/assets/modulos/mod1/css/partes.css" rel="stylesheet">

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
						<div id="parte1" style="display:block;">
							<img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod3/img/img1.png">
						</div>
						<div id="parte2" style="display:none;">
							<img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod3/img/img2.png">
						</div>
						<div id="parte3" style="display:none;">
							<img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod3/img/img3.png">
						</div>
						<div id="parte4" style="display:none;">
							<img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod3/img/img4.png">
						</div>
						<div id="parte5" style="display:none;">
							<img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod3/img/img5.png">							
						</div>
						<div id="parte6" style="display:none;">	
							<img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod3/img/img6.png">
						</div>
						<div id="parte7" style="display:none;">	
							<img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod3/img/img7.png">
						</div>
						<div id="parte8" style="display:none;">	
							<img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod3/img/img8.png">
						</div>
						<div id="parte9" style="display:none;">	
							<img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod3/img/img9.png">
						</div>
						<div id="parte10" style="display:none;">	
							<img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod3/img/img10.png">
						</div>
						<div id="parte11" style="display:none;">	
							<img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod3/img/img11.png">
						</div>
						<div id="parte12" style="display:none;">	
							<img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod3/img/img12.png">
						</div>
						<div id="parte13" style="display:none;">	
							<img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod3/img/img13.png">
						</div>
						<center>
							<div id="btnAtras">
								<a onclick="volver();">
									<img width=70 src="<?php echo base_url();?>public/assets/img/arrow_l.jpg">
								</a>
							</div>
							<div id="btnAdelante">
								<a onclick="avanzar();">
									<img width=70 src="<?php echo base_url();?>public/assets/img/arrow_r.jpg">
								</a>
							</div>
						</center>
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
<script src="<?php echo base_url();?>public/assets/modulos/mod3/js/arrows.js"></script>
</body>

</html>