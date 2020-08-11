<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>AMID</title>
  <?php $this->load->view('initial/linkGenerico');?>
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
					<a href="<?php echo base_url();?>modulo11/unidad3" class="list-group-item ">Unidad 3</a>
					<a href="<?php echo base_url();?>modulo11/unidad4" class="list-group-item active">Unidad 4</a>
						<ul class="list-group-item">
							<a href="#" class="list-group-item active">Temas</a>
							<a href="<?php echo base_url();?>modulo11/unidad4/actividad1" class="list-group-item">Actividad</a>
						</ul>
					</ul>
					<a href="<?php echo base_url();?>modulo12" class="list-group-item">Módulo 12</a>
				</div>
				<br /><br />
			</div>
			<!-- /.col-lg-3 -->
			<div class="col-lg-9">
				<h1><br>Unidad 4: El nacimiento de medios alternativos</h1>
				<div class="card mt-4">
					<div class="card-body">
						<h4>Temas clave</h4>
						<p class="card-text">
						<ul>
							<li class="animated lightSpeedIn">Medios alternativos: por qué han surgido</li>
							<li class="animated lightSpeedIn">Credibilidad pública de los principales medios</li>
							<li class="animated lightSpeedIn">Aparición de la tecnología de la información y las la
								comunicación</li>
							<li class="animated lightSpeedIn">Cambios en los hábitos mediáticos y las preferencias del
								consumidor</li>
							<li class="animated lightSpeedIn">Definición de medios alternativos (en contraste con los
								medios principales)</li>
							<li class="animated lightSpeedIn retraso3">Propiedad y control de los medios alternativos
								(es decir; democratizar la propiedad y el control)</li>
							<li class="animated lightSpeedIn retraso3">Audiencias de los medios alternativos: distintos
								sectores (mujeres, jóvenes, niños, obreros/ trabajadores, etc.) grupos marginados
								(comunidades culturales, migrantes, etc.)</li>
							<li class="animated lightSpeedIn retraso3">Contenido de los medios alternativos (por Ej.
								perspectivas de la comunidad, enfoque de participación e interactividad)</li>
							<li class="animated lightSpeedIn retraso3">El papel de los medios alternativos en la
								sociedad (por Ej. transparencia, diversidad y libertad de expresión)</li>
							<li class="animated lightSpeedIn retraso5">Planificación, administración y mantenimiento de
								un medio alternativo en distintos escenarios</li>
							<li class="animated lightSpeedIn retraso5">Medios alternativos en un ambiente de
								escuela/colegio</li>
							<li class="animated lightSpeedIn retraso5">Medios alternativos en una comunidad</li>
							<li class="animated lightSpeedIn retraso5">Modelos de ingresos para los medios alternativos.
							</li>
						</ul>
						</p>
					</div>
				</div>
				<!-- /.card -->
				<br>
                <center>
                    <a href="<?php echo base_url();?>modulo11/unidad3/actividad2" class="btn btn-success">Anterior</a>
                    <a href="<?php echo base_url();?>modulo11/unidad4/actividad1" class="btn btn-success">Siguiente</a>
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
  
</body>

</html>