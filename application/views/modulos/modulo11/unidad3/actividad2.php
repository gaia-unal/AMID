<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>AMID</title>
  
  <?php $this->load->view('initial/linkGenerico');?>
  <link href="<?php echo base_url();?>public/assets/modulos/mod11/css/estilo.css" rel="stylesheet">

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
				<a href="<?php echo base_url();?>modulo10" class="list-group-item">Módulo 10</a>
					<a href="<?php echo base_url();?>modulo11" class="list-group-item active">Módulo 11</a>
					<ul class="list-group-item">
					<a href="<?php echo base_url();?>modulo11/unidad1" class="list-group-item">Unidad 1</a>
						<a href="<?php echo base_url();?>modulo11/unidad2" class="list-group-item">Unidad 2</a>
						<a href="<?php echo base_url();?>modulo11/unidad3" class="list-group-item active">Unidad 3</a>
					<ul class="list-group-item">
						<a href="<?php echo base_url();?>modulo11/unidad3/temas" class="list-group-item">Temas</a>
						<a href="<?php echo base_url();?>modulo11/unidad3/actividad1" class="list-group-item active">Actividad</a>
					</ul>
					<a href="<?php echo base_url();?>modulo11/unidad4" class="list-group-item">Unidad 4</a>
					</ul>
					<a href="<?php echo base_url();?>modulo12" class="list-group-item">Módulo 12</a>
				</div>
				<br />
				<br />
			</div>
			<!-- /.col-lg-3 -->
			<div class="col-lg-9">
				<h1><br>Unidad 3: La información como un producto (Commodity)</h1>
				<div class="card mt-4">
					<div class="card-body">
						<h4>Actividad</h4>
						<p class="card-text">
							Completa la frase que define los productos de información usando las palabras que aparecen a
							continuación: <br>
						<ul>
							<li>Entregados</li>
							<li>proporcionan</li>
							<li>Internet</li>
							<li>Productos</li>
							<li>Información</li>
							<li>Pague</li>
							<li>Interes</li>
						</ul>
						<div class="auto">
						Son <input type="text" name="productos" id="opc1"> que pueden ser <input type="text"
							name="entregados" id="opc2"> a través de <input type="text" name="internet" id="opc3"> y
						que, de manera general, <input type="text" name="proporcionan" id="opc4"> <input type="text"
							name="informacion" id="opc5"> sobre un tema que despierta suficiente <input type="text"
							name="interes" id="opc6"> como para que la gente <input type="text" name="pague" id="opc7">
						por ellos. <br><br>
						¿Cuál es el orden de los comportamientos descritos a continuación? (Completa con 1, 2 y 3). <br>
						<input type="number" name="2" id="opc8" min="1" max="3"> El producto busca al cliente. <br>
						<input type="number" name="1" id="opc9" min="1" max="3"> El cliente busca el producto.<br>
						<input type="number" name="3" id="opc10" min="1" max="3"> El consumidor mismo se convierte en
						producto.

						</div>
						</p>
						<center>
							<button class="btn btn-outline-success" onclick="validar();">Validar</button>
						</center>
					</div>
				</div>
				<!-- /.card -->
				<br>
                <center>
                    <a href="<?php echo base_url();?>modulo11/unidad3/actividad1" class="btn btn-success">Anterior</a>
                    <a href="<?php echo base_url();?>modulo11/unidad4" class="btn btn-success">Siguiente</a>
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
<script src="<?php echo base_url();?>public/assets/modulos/mod11/js/u3preguntas.js"></script>
</body>

</html>