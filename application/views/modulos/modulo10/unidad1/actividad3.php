<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>AMID</title>
  
  <?php $this->load->view('initial/linkGenerico');?>
  <link href="<?php echo base_url();?>public/assets/modulos/mod10/css/juego.css" rel="stylesheet">
  <link href="<?php echo base_url();?>public/assets/modulos/mod10/css/animacion.css" rel="stylesheet">

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
				<a href="<?php echo base_url();?>modulo9" class="list-group-item">Módulo 9</a>
					<a href="<?php echo base_url();?>modulo10" class="list-group-item active">Módulo 10</a>
					<ul class="list-group-item">
					<a href="<?php echo base_url();?>modulo10/unidad1" class="list-group-item active">Unidad 1</a>
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo10/unidad1/temas" class="list-group-item">Temas</a>
                            <a href="<?php echo base_url();?>modulo10/unidad1/actividad1" class="list-group-item active">Actividades</a>
                        </ul>
                    </ul>
					<a href="<?php echo base_url();?>modulo11" class="list-group-item">Módulo 11</a>
				<a href="<?php echo base_url();?>modulo12" class="list-group-item">Módulo 12</a>
				</div>
				<br /><br />
			</div>
			<!-- /.col-lg-3 -->
			<div class="col-lg-9">
				<br>
				<h1>Módulo 10: Audiencia</h1>

				<?php echo form_open('modulo11');$this->session->set_userdata('idAc','m10'); ?>
					
				<div class="card mt-4">
					<div class="card-body">
						<p class="card-text">
							Empareja cada definición con la correspondiente referencia de película, programa de televisión o
							demás. <br><br>
							<img id="imagen1" src="<?php echo base_url();?>public/assets/modulos/mod10/img/comercial1.png"		  onclick = "verificar(1)"  alt = "comercial">
							<img id="imagen4" src="<?php echo base_url();?>public/assets/modulos/mod10/img/noticia1.png" 		  onclick = "verificar(4)"  alt = "noticia1">
							<img id="imagen11" src="<?php echo base_url();?>public/assets/modulos/mod10/img/entretenimiento2.png" onclick = "verificar(11)" alt = "entretenimiento2">
							<img id="imagen9" src="<?php echo base_url();?>public/assets/modulos/mod10/img/ideologia2.png"		  onclick = "verificar(9)"  alt = "ideologia2">
							<img id="imagen2" src="<?php echo base_url();?>public/assets/modulos/mod10/img/mickey1.png" 		  onclick = "verificar(2)"  alt = "mickey1">
							<img id="imagen12" src="<?php echo base_url();?>public/assets/modulos/mod10/img/personas2.png"	      onclick = "verificar(12)" alt = "personas2">
							<img id="imagen6" src="<?php echo base_url();?>public/assets/modulos/mod10/img/personas1.png"		  onclick = "verificar(6)"  alt = "personas1">
							<img id="imagen8" src="<?php echo base_url();?>public/assets/modulos/mod10/img/mickey2.png" 		  onclick = "verificar(8)"  alt = "mickey2">
							<img id="imagen5" src="<?php echo base_url();?>public/assets/modulos/mod10/img/entretenimiento1.png"  onclick = "verificar(5)"  alt = "entretenimiento1">
							<img id="imagen10" src="<?php echo base_url();?>public/assets/modulos/mod10/img/noticia2.png"		  onclick = "verificar(10)" alt = "noticia2">
							<img id="imagen3" src="<?php echo base_url();?>public/assets/modulos/mod10/img/ideologia1.png" 		  onclick = "verificar(3)"  alt = "ideologia1">
							<img id="imagen7" src="<?php echo base_url();?>public/assets/modulos/mod10/img/comercial2.png" 		  onclick = "verificar(7)"  alt = "comercial">
						</p>
					</div>
				</div>
				<!-- /.card -->
				<br>
				<center>
					<a href="<?php echo base_url();?>modulo10/unidad1/actividad2" class="btn btn-success">Anterior</a>
					<button id="btn-siguiente"  class="btn btn-success" type="submit">Siguiente</button>
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
<script src="<?php echo base_url();?>public/assets/modulos/mod10/js/juego.js"></script>
</body>

</html>