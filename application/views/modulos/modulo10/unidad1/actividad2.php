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
				<div class="card mt-4">
					<div class="card-body">
						<p class="card-text">
							Relaciona cada palabra con su respectiva justificación colocando frente a la palabra el número que
							corresponde a su justificación.
							<table class="w3-table w3-bordered">
								<tr>
									<th style="width: 30%;">Palabra</th>
									<th style="width: 30%;">Relación</th>
									<th style="width: 40%;">Justificación</th>
								</tr>
								<tr>
									<td>Diversión</td>
									<td><input type="number" name="resp1" id="resp1" min="1" max="4"></td>
									<td>1. El verse a usted conectado con un personaje de televisión o de la “familia”</td>
								</tr>
								<tr>
									<td>Relaciones personales</td>
									<td><input type="number" name="resp2" id="resp2" min="1" max="4"></td>
									<td>2. Utilizar los medios y los textos de información para aprender acerca de lo que sucede
										en nuestro mundo de alrededor</td>
								</tr>
								<tr>
									<td>Identidad personal</td>
									<td><input type="number" name="resp3" id="resp3" min="1" max="4"></td>
									<td>3. Un escape de la vida diaria</td>
								</tr>
								<tr>
									<td>Supervisión</td>
									<td><input type="number" name="resp4" id="resp4" min="1" max="4"></td>
									<td>4. Ser capaz de identificarse con y aprender de un comportamiento, actitud o valores que
										se reflejan en los textos mediáticos</td>
								</tr>
							</table>
							<br>
							<center>
								<button class="btn btn-outline-success" onclick="validar();">Validar</button>
							</center>
						</p>
					</div>
				</div>
				<!-- /.card -->
				<br>
                <center>
                    <a href="<?php echo base_url();?>modulo10/unidad1/actividad1" class="btn btn-success">Anterior</a>
                    <a href="<?php echo base_url();?>modulo10/unidad1/actividad3" class="btn btn-success">Siguiente</a>
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
<script src="<?php echo base_url();?>public/assets/modulos/mod10/js/act.js"></script>
</body>

</html>