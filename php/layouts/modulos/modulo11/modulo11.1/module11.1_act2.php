<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>AMID</title>
	<!-- Bootstrap core CSS -->
    <link href="../../../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../../../../../assets/css/shop-item.css" rel="stylesheet">
    <link href="../../../../../assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../../../assets/css/animated.css">
    <link rel="stylesheet" href="../../../../../assets/css/sweetalert/sweetalert2.css">
	<link rel="stylesheet" href="assets/estilo.css">
	<link rel="stylesheet" href="../assets/css/estilo.css">
</head>

<body>
<?php require "../../../../queries/connectionDB.php";
    $newConn= new Connection;
    $newConn->connectionDB(); ?>
  <?php require '../../../../queries/activeSession.php'; ?>  
  <?php $rutaSession="../../../../queries/"; include '../../../header.php'; ?>

	<!-- Page Content -->
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<h1 class="my-4">Módulos AMID</h1>
				<div class="list-group">
					<a href="../../modulo1/module1.php" class="list-group-item">Módulo 1</a>
					<a href="../../modulo2/module2.php" class="list-group-item">Módulo 2</a>
					<a href="../../modulo3/module3.php" class="list-group-item">Módulo 3</a>
					<a href="../../module4/modulo4.php" class="list-group-item">Módulo 4</a>
					<a href="../../modulo5/module5.php" class="list-group-item">Módulo 5</a>
					<a href="../../modulo6/module6.php" class="list-group-item">Módulo 6</a>
					<a href="../../modulo7/module7.php" class="list-group-item">Módulo 7</a>
					<a href="../../modulo8/module8.php" class="list-group-item">Módulo 8</a>
					<a href="../../modulo9/module9.php" class="list-group-item">Módulo 9</a>
					<a href="../../modulo10/module10.php" class="list-group-item">Módulo 10</a>
					<a href="../module11.php" class="list-group-item active">Módulo 11</a>
					<ul class="list-group-item">
						<a href="module11.1_inicio.php" class="list-group-item active">Unidad 1</a>
						<ul class="list-group-item">
							<a href="module11.1_temas.php" class="list-group-item">Temas</a>
							<a href="module11.1_act.php" class="list-group-item active">Actividad</a>
						</ul>
						<a href="../modulo11.2/module11.2_inicio.php" class="list-group-item">Unidad 2</a>
						<a href="../modulo11.3/module11.3_inicio.php" class="list-group-item">Unidad 3</a>
						<a href="../modulo11.4/module11.4_inicio.php" class="list-group-item">Unidad 4</a>
					</ul>
					<a href="../../modulo12/module12.php" class="list-group-item">Módulo 12</a>
				</div>
				<br />
				<br />
			</div>
			<!-- /.col-lg-3 -->
			<div class="col-lg-9">
				<h1><br>Unidad 1: Propiedad de los medios en el mundo global actual</h1>
				<div class="card mt-4">
					<div class="card-body">
						<h4>Retroalimentación</h4>
						<p class="card-text">
							Completa el crucigrama con las palabras que hacen referencia a las pistas que encuentras en
							la parte de abajo.
						</p>
						<table class="crossword" cellspacing="0">
							<tbody>
								<tr>
									<td class="nb cuadro" title="0,0"></td>
									<td class="nb cuadro" title="0,1"></td>
									<td class="nb cuadro" title="0,2"></td>
									<td class="nb cuadro" title="0,3"></td>
									<td class="nb cuadro" title="0,4"></td>
									<td class="b cuadro" title="0,5">
										<input type="text" name="t" id="opc1" placeholder="1">
									</td>
									<td class="nb cuadro" title="0,6"></td>
									<td class="nb cuadro" title="0,7"></td>
									<td class="nb cuadro" title="0,8"></td>
									<td class="nb cuadro" title="0,9"></td>
									<td class="nb cuadro" title="0,10"></td>
									<td class="nb cuadro" title="0,11"></td>
								</tr>
								<tr>
									<td class="nb cuadro" title="1,0"></td>
									<td class="nb cuadro" title="1,1"></td>
									<td class="nb cuadro" title="1,2"></td>
									<td class="nb cuadro" title="1,3"></td>
									<td class="nb cuadro" title="1,4"></td>
									<td class="b cuadro" title="1,5">
										<input type="text" name="r" id="opc2">
									</td>
									<td class="nb cuadro" title="1,6"></td>
									<td class="nb cuadro" title="1,7"></td>
									<td class="nb cuadro" title="1,8"></td>
									<td class="nb cuadro" title="1,9"></td>
									<td class="nb cuadro" title="1,10"></td>
									<td class="nb cuadro" title="1,11"></td>
								</tr>
								<tr>
									<td class="nb cuadro" title="2,0"></td>
									<td class="nb cuadro" title="2,1"></td>
									<td class="nb cuadro" title="2,2"></td>
									<td class="nb cuadro" title="2,3"></td>
									<td class="nb cuadro" title="2,4"></td>
									<td class="b cuadro" title="2,5">
										<input type="text" name="a" id="opc3" placeholder="2">
									</td>
									<td class="b cuadro" title="2,6">
										<input type="text" name="n" id="opc4">
									</td>
									<td class="b cuadro" title="2,7">										
										<input type="text" name="g" id="opc5">
									</td>
									<td class="b cuadro" title="2,8">
										<input type="text" name="u" id="opc6">
									</td>
									<td class="b cuadro" title="2,9">
										<input type="text" name="l" id="opc7">
									</td>
									<td class="b cuadro" title="2,10">
										<input type="text" name="o" id="opc8">
									</td>
									<td class="b cuadro" title="2,11">
										<input type="text" name="s" id="opc9">
									</td>
								</tr>
								<tr>
									<td class="nb cuadro" title="3,0"></td>
									<td class="nb cuadro" title="3,1"></td>
									<td class="nb cuadro" title="3,2"></td>
									<td class="nb cuadro" title="3,3"></td>
									<td class="nb cuadro" title="3,4"></td>
									<td class="b cuadro" title="3,5">
										<input type="text" name="t" id="opc10">
									</td>
									<td class="nb cuadro" title="3,6"></td>
									<td class="nb cuadro" title="3,7"></td>
									<td class="nb cuadro" title="3,8"></td>
									<td class="nb cuadro" title="3,9"></td>
									<td class="nb cuadro" title="3,10"></td>
									<td class="nb cuadro" title="3,11"></td>
								</tr>
								<tr>
									<td class="b cuadro" title="4,0">
										<input type="text" name="r" id="opc11" placeholder="3">
									</td>
									<td class="b cuadro" title="4,1">
										<input type="text" name="e" id="opc12">
									</td>
									<td class="b cuadro" title="4,2">
										<input type="text" name="g" id="opc13">
									</td>
									<td class="b cuadro" title="4,3">
										<input type="text" name="u" id="opc14">
									</td>
									<td class="b cuadro" title="4,4">
										<input type="text" name="l" id="opc15">
									</td>
									<td class="b cuadro" title="4,5">
										<input type="text" name="a" id="opc16">
									</td>
									<td class="b cuadro" title="4,6">
										<input type="text" name="c" id="opc17">
									</td>
									<td class="b cuadro" title="4,7">
										<input type="text" name="i" id="opc18">
									</td>
									<td class="b cuadro" title="4,8">
										<input type="text" name="o" id="opc19">
									</td>
									<td class="b cuadro" title="4,9">
										<input type="text" name="n" id="opc20">
									</td>
									<td class="nb cuadro" title="4,10"></td>
									<td class="nb cuadro" title="4,11"></td>
								</tr>
								<tr>
									<td class="nb cuadro" title="5,0"></td>
									<td class="nb cuadro" title="5,1"></td>
									<td class="nb cuadro" title="5,2"></td>
									<td class="nb cuadro" title="5,3"></td>
									<td class="nb cuadro" title="5,4"></td>
									<td class="b cuadro" title="5,5">
										<input type="text" name="m" id="opc21">
									</td>
									<td class="nb cuadro" title="5,6"></td>
									<td class="nb cuadro" title="5,7"></td>
									<td class="nb cuadro" title="5,8"></td>
									<td class="nb cuadro" title="5,9"></td>
									<td class="nb cuadro" title="5,10"></td>
									<td class="nb cuadro" title="5,11"></td>
								</tr>
								<tr>
									<td class="nb cuadro" title="6,0"></td>
									<td class="nb cuadro" title="6,1"></td>
									<td class="nb cuadro" title="6,2"></td>
									<td class="nb cuadro" title="6,3"></td>
									<td class="nb cuadro" title="6,4"></td>
									<td class="b cuadro" title="6,5">
										<input type="text" name="i" id="opc22">
									</td>
									<td class="nb cuadro" title="6,6"></td>
									<td class="nb cuadro" title="6,7"></td>
									<td class="nb cuadro" title="6,8"></td>
									<td class="nb cuadro" title="6,9"></td>
									<td class="nb cuadro" title="6,10"></td>
									<td class="nb cuadro" title="6,11"></td>
								</tr>
								<tr>
									<td class="nb cuadro" title="7,0"></td>
									<td class="nb cuadro" title="7,1"></td>
									<td class="nb cuadro" title="7,2"></td>
									<td class="nb cuadro" title="7,3"></td>
									<td class="nb cuadro" title="7,4"></td>
									<td class="b cuadro" title="7,5">
										<input type="text" name="e" id="opc23">
									</td>
									<td class="nb cuadro" title="7,6"></td>
									<td class="nb cuadro" title="7,7"></td>
									<td class="nb cuadro" title="7,8"></td>
									<td class="nb cuadro" title="7,9"></td>
									<td class="nb cuadro" title="7,10"></td>
									<td class="nb cuadro" title="7,11"></td>
								</tr>
								<tr>
									<td class="b cuadro" title="8,0">
										<input type="text" name="a" id="opc24" placeholder="4">
									</td>
									<td class="b cuadro" title="8,1">
										<input type="text" name="m" id="opc25">
									</td>
									<td class="b cuadro" title="8,2">
										<input type="text" name="b" id="opc26">
									</td>
									<td class="b cuadro" title="8,3">
										<input type="text" name="i" id="opc27">
									</td>
									<td class="b cuadro" title="8,4">
										<input type="text" name="e" id="opc28">
									</td>
									<td class="b cuadro" title="8,5">
										<input type="text" name="n" id="opc29">
									</td>
									<td class="b cuadro" title="8,6">
										<input type="text" name="t" id="opc30">
									</td>
									<td class="b cuadro" title="8,7">
										<input type="text" name="e" id="opc31">
									</td>
									<td class="b cuadro" title="8,8">
										<input type="text" name="s" id="opc32">
									</td>
									<td class="nb cuadro" title="8,9"></td>
									<td class="nb cuadro" title="8,10"></td>
									<td class="nb cuadro" title="8,11"></td>
								</tr>
								<tr>
									<td class="nb cuadro" title="9,0"></td>
									<td class="nb cuadro" title="9,1"></td>
									<td class="nb cuadro" title="9,2"></td>
									<td class="nb cuadro" title="9,3"></td>
									<td class="nb cuadro" title="9,4"></td>
									<td class="b cuadro" title="9,5">
										<input type="text" name="t" id="opc33">
									</td>
									<td class="nb cuadro" title="9,6"></td>
									<td class="nb cuadro" title="9,7"></td>
									<td class="nb cuadro" title="9,8"></td>
									<td class="nb cuadro" title="9,9"></td>
									<td class="nb cuadro" title="9,10"></td>
									<td class="nb cuadro" title="9,11"></td>
								</tr>
								<tr>
									<td class="b cuadro" title="10,0">
										<input type="text" name="m" id="opc34" placeholder="5">
									</td>
									<td class="b cuadro" title="10,1">
										<input type="text" name="o" id="opc35">
									</td>
									<td class="b cuadro" title="10,2">
										<input type="text" name="n" id="opc36">
									</td>
									<td class="b cuadro" title="10,3">
										<input type="text" name="o" id="opc37">
									</td>
									<td class="b cuadro" title="10,4">
										<input type="text" name="p" id="opc38">
									</td>
									<td class="b cuadro" title="10,5">
										<input type="text" name="o" id="opc39">
									</td>
									<td class="b cuadro" title="10,6">
										<input type="text" name="l" id="opc40">
									</td>
									<td class="b cuadro" title="10,7">
										<input type="text" name="i" id="opc41">
									</td>
									<td class="b cuadro" title="10,8">
										<input type="text" name="o" id="opc42">
									</td>
									<td class="nb cuadro" title="10,9"></td>
									<td class="nb cuadro" title="10,10"></td>
									<td class="nb cuadro" title="10,11"></td>
								</tr>
							</tbody>
						</table>
						<p class="card-text">
						<ol>
							<b>Vertical</b>
							<li>Reporte o manipulación</li>
							<b>Horizontal</b>
							<li>Puntos de vista particulares o perspectivas</li>
							<li>Restringe los monopolios</li>
							<li>Sectario, no sectario, privado, propiedad de gobierno</li>
							<li>Amenaza para la diversidad y pluralismo de medios</li>
						</ol>
						</p>
						<center>
							<button class="btn btn-outline-success" onclick="validar();">Validar</button>
						</center>
					</div>
				</div>
				<!-- /.card -->
				<br>
				<center>
					<a href="module11.1_act.php" class="btn btn-success">Anterior</a>
					<a href="../modulo11.2/module11.2_inicio.php" class="btn btn-success btnSig retraso3">Siguiente</a>
				</center>
                <?php
                    include '../../../../functions/paginacion.php';
                    pag(2);
                ?>
                <p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative
                            Commons Reconocimiento Compartir igual 4.0</a></p>
							<br><br>
			</div>
			<!-- /.col-lg-9 -->
		</div>
	</div>
	<!-- /.container -->
	<?php $ruta="../../../../../assets"; include '../../../footer.php';?>

	<!-- Bootstrap core JavaScript -->
	<script src="../assets/js/crucigrama.js"></script>
	<script src="../../../../../vendor/jquery/jquery.min.js"></script>
	<script src="../../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="../../../../../assets/js/script.js"></script>
	<script src="../assets/js/script.js"></script>
</body>

</html>