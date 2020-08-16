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
						<a href="<?php echo base_url();?>modulo9/unidad2" class="list-group-item active">Unidad 2</a>
						<ul class="list-group-item">
							<a href="<?php echo base_url();?>modulo9/unidad2/temas" class="list-group-item">Temas</a>
							<a href="<?php echo base_url();?>modulo9/unidad2/actividad1" class="list-group-item active">Actividades</a>
							<a href="<?php echo base_url();?>modulo9/unidad2/evaluacion" class="list-group-item">Evaluación</a>
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
				<h1>Unidad 2: Teorías de aprendizaje y AMI</h1>
				<?php echo form_open('modulo9/unidad2/evaluacion');$this->session->set_userdata('idAct','m9u2a2'); ?>
				<div class="card mt-4">
					<div class="card-body">
						<h4>Retroalimentación</h4>
						<p>1. ¿Qué papel puede tener la meta cognición en la transferencia de aprendizaje de las
							actividades que usted propone a sus estudiantes?</p>
							<textarea name="preg1" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
						<p>2. Considere el papel de las bibliotecas y de los museos en el desarrollo de las destrezas
							AMI. Diseñe una actividad en la que ilustre cómo una actividad estratégica específica puede
							utilizarse en uno de estos medios. Considere las características únicas que son parte de
							estos ambientes y que pueden influir en la experiencia de enseñanza o aprendizaje de una
							manera positiva y escriba su respuesta.</p>
							<textarea name="preg2" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
						<p>3. Basado en su propio trabajo, explique las formas en las cuales el Curriculum AMI provee
							las oportunidades para una instrucción y aprendizaje diferenciado (es decir: aprendizaje
							cinestético, aprendizaje visual, aprendizaje auditivo, etc.)</p>
							<textarea name="preg3" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
						<p>4. Para que los estudiantes tengan éxito como aprendices, es importante conocer la meta
							cognición y las estrategias de meta cognición. ¿Cónsidera usted que esta frase es cierta?
							¿Por qué?</p>
							<textarea name="preg4" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
					</div>
				</div>
				<!-- /.card -->
				<br>
                <center>
                    <a href="<?php echo base_url();?>modulo9/unidad2/actividad1" class="btn btn-success">Anterior</a>
                    <button id="btn-siguiente" class="btn btn-success" name="submit" type="submit">Siguiente</button>
                </center>
                <?php echo form_close(); ?>
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