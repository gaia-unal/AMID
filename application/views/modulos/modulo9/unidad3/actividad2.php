<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>AMID</title>
  
  <?php $this->load->view('initial/linkGenerico');?>
  <link href="<?php echo base_url();?>public/assets/modulos/mod1/css/estilo.css" rel="stylesheet">

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
                        <a href="<?php echo base_url();?>modulo9/unidad2" class="list-group-item">Unidad 2</a>
                        <a href="<?php echo base_url();?>modulo9/unidad3" class="list-group-item active">Unidad 3</a>
						<ul class="list-group-item">
							<a href="<?php echo base_url();?>modulo9/unidad3/temas" class="list-group-item">Temas</a>
							<a href="<?php echo base_url();?>modulo9/unidad3/actividad1" class="list-group-item active">Actividades</a>
							<a href="<?php echo base_url();?>modulo9/unidad3/evaluacion" class="list-group-item">Evaluación</a>
						</ul>
					</ul>
						
				<a href="<?php echo base_url();?>modulo10" class="list-group-item">Módulo 10</a>
				<a href="<?php echo base_url();?>modulo11" class="list-group-item">Módulo 11</a>
				<a href="<?php echo base_url();?>modulo12" class="list-group-item">Módulo 12</a>
				</div>
			</div>
			<!-- /.col-lg-3 -->
			<div class="col-lg-9">
				<br>
				<h1>Unidad 3: Manejando el Cambio Para Fomentar un Medio Ambiente Propicio para las Escuelas AMI</h1>
				<div class="card mt-4">
					<div class="card-body">
						<p class="card-text">
							<ol>
								<li>Desarrolle un plan para promover AMI entre los hacedores de políticas, directores de
									programas y profesores de su institución. ¿Cuáles son las principales prioridades o
									necesidades para cada grupo?</li>
								<textarea name="preg1" id="p1-r" cols="80" rows="5"
									placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
								<li>Explique cómo este Curriculum AMI puede ayudar a enfrentar aquellas necesidades.
								</li>
								<textarea name="preg2" id="p2-r" cols="80" rows="5"
									placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
								<li>Identifique otros grupos de actores a quienes se podría incluir.</li>
								<textarea name="preg3" id="p3-r" cols="80" rows="5"
									placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
								<li>¿Qué papel jugarían ellos en la promoción de AMI?</li>
								<textarea name="preg4" id="p4-r" cols="80" rows="5"
									placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
							</ol>
						</p>
					</div>
				</div>
				<!-- /.card -->
				<br>
                <center>
                    <a href="<?php echo base_url();?>modulo9/unidad3/actividad1" class="btn btn-success">Anterior</a>
                    <a href="<?php echo base_url();?>modulo9/unidad3/evaluacion" class="btn btn-success">Siguiente</a>
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