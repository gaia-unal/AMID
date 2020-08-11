<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>AMID</title>
  
  <?php $this->load->view('initial/linkGenerico');?>
  <link href="<?php echo base_url();?>public/assets/modulos/mod9/css/u1juego.css" rel="stylesheet">

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
						<a href="<?php echo base_url();?>modulo9/unidad1" class="list-group-item active">Unidad 1</a>
						<ul class="list-group-item">
							<a href="<?php echo base_url();?>modulo9/unidad1/temas" class="list-group-item">Temas</a>
							<a href="<?php echo base_url();?>modulo9/unidad1/actividad1" class="list-group-item">Actividades</a>
							<a href="#" class="list-group-item active">Evaluación</a>
						</ul>
						<a href="<?php echo base_url();?>modulo9/unidad2" class="list-group-item">Unidad 2</a>
						<a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
					</ul>
						
				<a href="<?php echo base_url();?>modulo10" class="list-group-item">Módulo 10</a>
				<a href="<?php echo base_url();?>modulo11" class="list-group-item">Módulo 11</a>
				<a href="<?php echo base_url();?>modulo12" class="list-group-item">Módulo 12</a>
				</div>
			</div>
			<!-- /.col-lg-3 -->
			<div class="col-lg-9">
				<br>
				<h1>Unidad 1: Comunicación, enseñanza y aprendizaje</h1>

				<?php echo form_open('modulo9/unidad2');$this->session->set_userdata('idAc','m9u1'); ?>

				<div class="card mt-4">
					<div class="card-body">
						<h4>Evaluación</h4>
						<p class="card-text">
							Empareja cada palabra con su significado <br>
							<img id="imagen6" src="<?php echo base_url();?>public/assets/modulos/mod9/img/palabra/6.png"     alt="p6" onclick="validar('6')">
							<img id="imagen12" src="<?php echo base_url();?>public/assets/modulos/mod9/img/definicion/6.png" alt="d6" onclick="validar('12')">
							<img id="imagen3" src="<?php echo base_url();?>public/assets/modulos/mod9/img/palabra/3.png"     alt="p3" onclick="validar('3')">
							<img id="imagen8" src="<?php echo base_url();?>public/assets/modulos/mod9/img/definicion/2.png"  alt="d2" onclick="validar('8')">
							<img id="imagen1" src="<?php echo base_url();?>public/assets/modulos/mod9/img/palabra/1.png"     alt="p1" onclick="validar('1')">
							<img id="imagen11" src="<?php echo base_url();?>public/assets/modulos/mod9/img/definicion/5.png" alt="d5" onclick="validar('11')">
							<img id="imagen4" src="<?php echo base_url();?>public/assets/modulos/mod9/img/palabra/4.png"     alt="p4" onclick="validar('4')">
							<img id="imagen10" src="<?php echo base_url();?>public/assets/modulos/mod9/img/definicion/4.png" alt="d4" onclick="validar('10')">
							<img id="imagen5" src="<?php echo base_url();?>public/assets/modulos/mod9/img/palabra/5.png"     alt="p5" onclick="validar('5')">
							<img id="imagen7" src="<?php echo base_url();?>public/assets/modulos/mod9/img/definicion/1.png"  alt="d1" onclick="validar('7')">
							<img id="imagen2" src="<?php echo base_url();?>public/assets/modulos/mod9/img/palabra/2.png"     alt="p2" onclick="validar('2')">
							<img id="imagen9" src="<?php echo base_url();?>public/assets/modulos/mod9/img/definicion/3.png"  alt="d3" onclick="validar('9')">

							<input type="text" name="preg" id="preg" value="" style="display: none">
						</p>
					</div>
				</div>
				<!-- /.card -->
				<br>
				<center>
					<a href="<?php echo base_url();?>modulo9/unidad1/actividad2" class="btn btn-success">Anterior</a>
					<button id="btn-siguiente"  class="btn btn-success" type="submit"">Siguiente</button>                    
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
<script src="<?php echo base_url();?>public/assets/modulos/mod9/js/juego.js"></script>
</body>

</html>