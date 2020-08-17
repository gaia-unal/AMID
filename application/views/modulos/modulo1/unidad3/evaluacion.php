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
                    <a href="<?php echo base_url();?>modulo1" class="list-group-item active">Módulo 1</a>
                    <ul class="list-group-item">
                        <a href="<?php echo base_url();?>modulo1/unidad1" class="list-group-item">Unidad 1</a>
                        <a href="<?php echo base_url();?>modulo2/unidad2" class="list-group-item">Unidad 2</a>
                        <a href="<?php echo base_url();?>modulo3/unidad3" class="list-group-item active">Unidad 3</a>
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo1/unidad3/temas" class="list-group-item">Temas</a>
                            <a href="<?php echo base_url();?>modulo1/unidad3/actividad1" class="list-group-item ">Actividades</a>
                            <a href="#" class="list-group-item active">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(3)" class="list-group-item inactive">Unidad 4</a>
                    </ul>
                    <a href="<?php echo base_url();?>modulo2" class="list-group-item">Módulo 2</a>
                    <a href="<?php echo base_url();?>modulo3" class="list-group-item">Módulo 3</a>
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
                <br>
			</div>
				
			
			<!-- /.col-lg-3 -->
			<div class="col-lg-9">
				<h1><br>Unidad 3: Interactuándo con los medios y otros proveedores de información</h1>

				<?php echo form_open('modulo1/unidad4/inicio');$this->session->set_userdata('idAct','m1u3'); ?>
				<div class="card mt-4">
					<div class="card-body">
						<h4>Evaluación<br></h4>
						<p class="card-text">
							<p>
								Utilice la biblioteca o el Internet, investigue sobre los principales programas de
								televisión o radio, películas o propagandas del año pasado. ¿Cuáles de los siguientes
								temas fueron importantes para el éxito?</p>
							<input type="checkbox" name="temas_1" id="ans1" value="5">
							<label for="ans1" clase="space">Forma en que los medios transmiten el
								significado.</label><br>

							<label for="ans2" clase="space"><input type="checkbox" name="temas_2" id="ans2" value="5">
								Cómo los medios y otros proveedores de
								información presentan la información, las personas, las culturas, las imágenes, los
								lugares, etc. </label><br>

							<input type="checkbox" name="temas_3" id="ans3" value="1">
							<label for="ans3" clase="space">El rol de los usuarios, los ciudadanos y las
								audiencias.</label><br>

							<input type="checkbox" name="temas_4" id="ans4" value="1">
							<label for="ans4" clase="space">Comprometiéndose con los medios a través de la
								producción de contenidos generados por los usuarios.</label><br>
							<!-- <p>
                            ¿Por qué los periodistas deben tener el derecho a no revelar las fuentes de su
                                información?, sólo a sus editores
                            </p>
                            <textarea name="" id="" cols="100" rows="10"
                                placeholder="Escriba su respuesta aquí"></textarea> -->
						</p>
					</div>
				</div>
				<!-- /.card -->
				<br>
				<center>
					<a href="<?php echo base_url();?>modulo1/unidad3/actividad3" class="btn btn-success">Anterior</a>
					<!-- onclick="evaluacion()" -->
					<button id="btn-siguiente" class="btn btn-success" name="submit" type="submit">Siguiente</button>
				</center>
				<?php echo form_close(); ?>
				<?php $this->load->view('initial/paginacion');?>

				<br />
				<p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative
						Commons
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
