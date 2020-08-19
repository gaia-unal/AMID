
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<?php $this->load->view('initial/linkGenerico');?>
	<link href="<?php echo base_url();?>public/assets/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>public/assets/css/hc.css" rel="stylesheet">
	
	<script src="<?php echo base_url();?>public/vendor/code/highcharts.js"></script>
	<script src="<?php echo base_url();?>public/vendor/code/modules/data.js"></script>
	<script src="<?php echo base_url();?>public/vendor/code/modules/series-label.js"></script>

	<!-- public/vendor/code/modules/export-data.js"></script> -->
	<script src="<?php echo base_url();?>public/vendor/code/modules/accessibility.js"></script>



	<title>AMID</title>

</head>

<body id="body">
	<?php $this->load->view('initial/nav');?>

	<div class="container">
		<br>
		<h1>Reportes de evaluaciones y actividades</h1>
		<p>
			A continuación puedes consultar las calificaciones de las evaluaciones,
			las calificaciones se pueden consultar en formato PDF o en gráfico.
			<br>
			Tambien puedes ver tus respuestas de las actividades.
		</p>
		
		<div class="card p-4">
			<h2>Evaluaciones</h2>

			<div class="row ">

				<div class="col-md-6">
				<!-- $this->load->view('initial/footer') -->
					<div class="evaluacion_pdf  p-2">
						<a href="<?php echo base_url();?>inicio/reportePDF" target="_blank">
							<img class="option_pdf" src="<?php echo base_url();?>public/assets/img/pdf.png"
								alt="Archivo PDF">
						</a>
						<br>
						<a href="#" target="_blank">
							Calificaciones en PDF
						</a>
					</div>

				</div>

				<!-- ------------------------------------------------------------ -->
				<div class="col-md-6">

					<div class="evaluacion_grafico p-2">
						<a href="#grafico">
							<img class="option_pdf" src="<?php echo base_url();?>public/assets/img/grafico.png"
								alt="Archivo PDF">
						</a>
						<br>
						<a href="#grafico">
							Calificaciones en Gráfico
							
						</a>
						
					</div>
				</div>

			</div>
		</div>

		<div class="row">
			<!-- ------------------------------------------------------------ -->
			<div class="col-md-12">

				<div class="card mt-4">
					<div class="card-body">

						<h2>Actividades</h2>

						Módulos:

						<ul class="tabs">
							<li><a href="#tab1"> 1</a></li>
							<li><a href="#tab2"> 2</a></li>
							<li><a href="#tab3"> 3</a></li>
							<li><a href="#tab4"> 4</a></li>
							<li><a href="#tab5"> 5</a></li>
							<li><a href="#tab6"> 6</a></li>
							<li><a href="#tab7"> 7</a></li>
							<li><a href="#tab8"> 8</a></li>
							<li><a href="#tab9"> 9</a></li>
							<li><a href="#tab10"> 10</a></li>
							<li><a href="#tab11"> 11</a></li>
							<li><a href="#tab12"> 12</a></li>

						</ul>

						<div class="tab_container">

						

							<div id="tab1" class="tab_content">
								<h3>Módulo 1</h3> 
							<?php 
							if(isset($actividad)){
								$titleMod=true;
								$uno=$dos=$tres=$cuatro=true;
							foreach($actividad->result() as $act){
								
								
								$mod=$act->id_actividad;
								// echo $mod,"<br>";
								$answer=json_decode($act->respuesta,true);

								$mod1=[
										['m1u1a1','m1u1a3','m1u1a5','m1u1a6','m1u1a8','m1u1a9',
										 'm1u2a2','m1u2a3','m1u2a5',
										 'm1u3a3',
										 'm1u4a3'],
										['m1u1a1','m1u1a3','m1u1a5','m1u1a6','m1u1a8','m1u1a9'],
										['m1u2a2','m1u2a3','m1u2a5'],
										['m1u3a3'],
										['m1u4a3']
									];
								
								
								
								if (in_array($mod, $mod1[0])) {
									if (in_array($mod, $mod1[1])) {
										if($uno){
											echo "<br>Unidad 1<br>";
											$uno=false;
										}
										if($mod=='m1u1a1'){
											echo "<br>Actividad 1<br>";
											echo "<br>Fecha de realización: ",$act->fecharealizacion," <br>";
											echo "Nota: ",$act->nota," <br>";
											echo "<br>Observación: ",$answer['Actividad 1']['Pregunta 1']," <br>";
										}
									}
									// else if(in_array($mod, $mod1[2])) {
									// 	if($dos){
									// 		echo "<br>Unidad 2<br>";
									// 		$dos=false;
									// 	}
									// 	echo $mod,"<br>";
									// }else if(in_array($mod, $mod1[3])) {
									// 	if($tres){
									// 		echo "<br>Unidad 3<br>";
									// 		$tres=false;
									// 	}
									// 	echo $mod,"<br>";
									// }else if(in_array($mod, $mod1[4])) {
									// 	if($cuatro){
									// 		echo "<br>Unidad 4<br>";
									// 		$cuatro=false;
									// 	}
									// 	echo $mod,"<br>";
									// }
								}
			
							}
							}else{
								echo "No hay datos de actividades";
							}
							?>
								
							</div>
							<div id="tab2" class="tab_content">
								<!--Contenido del bloque de texto-->
								Hola2
							</div>
							<div id="tab3" class="tab_content">
								<!--Contenido del bloque de texto-->
								Hola 3
							</div>
							<div id="tab4" class="tab_content">
								<!--Contenido del bloque de texto-->
								Hola4
							</div>
							<div id="tab5" class="tab_content">
								<!--Contenido del bloque de texto-->
								Hola5
							</div>
							<div id="tab6" class="tab_content">
								<!--Contenido del bloque de texto-->
								Hola 6
							</div>
							<div id="tab7" class="tab_content">
								<!--Contenido del bloque de texto-->
								Hola7
							</div>
							<div id="tab8" class="tab_content">
								<!--Contenido del bloque de texto-->
								Hola8
							</div>
							<div id="tab9" class="tab_content">
								<!--Contenido del bloque de texto-->
								Hola 9
							</div>
							<div id="tab10" class="tab_content">
								<!--Contenido del bloque de texto-->
								Hola10
							</div>
							<div id="tab11" class="tab_content">
								<!--Contenido del bloque de texto-->
								Hola11
							</div>
							<div id="tab12" class="tab_content">
								<!--Contenido del bloque de texto-->
								Hola 12
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- ------------------------------------------------------------ -->

		</div>
	</div>
	<br>

	<div id="grafico" class="modalDialog">
		<div class="contentmodal" style="width: 90%;">
			<a href="#close" title="Close" class="close">X</a>
			<div class="modal-head">
				<center><h2>Gráfico</h2></center>
			</div>
			<figure class="highcharts-figure" style="display:block;">
				<div id="container"></div>
				<!-- <p class="highcharts-description">
					Basic line chart showing trends in a dataset. This chart includes the
					<code>series-label</code> module, which adds a label to each line for
					enhanced readability.
				</p> -->
			</figure>
			<hr>
		</div>
	</div>

	<?php $this->load->view('initial/footer');?>

	<!-- Bootstrap core JavaScript -->
	<script src="<?php echo base_url();?>public/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url();?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url();?>public/assets/js/pestana.js"></script>

	<?php $this->load->view('initial/grafico');?>

	

</body>

</html>
