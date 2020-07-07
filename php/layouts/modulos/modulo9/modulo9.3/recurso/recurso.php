<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>AMID</title>
    <!-- Bootstrap core CSS -->
	<link href="../../../../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="../../../../../../assets/css/shop-item.css" rel="stylesheet">
	<link rel="stylesheet" href="../../../../../../assets/css/sweetalert/sweetalert2.css">
	<link rel="stylesheet" href="../../../../../../assets/css/animated.css">
</head>

<body>
  <?php require "../../../../../queries/connectionDB.php";
    $newConn= new Connection;
    $newConn->connectionDB(); ?>
  <?php require '../../../../../queries/activeSession.php'; ?>  
  <?php $rutaSession="../../../../../queries/"; include '../../../../header.php'; ?>
  
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="my-4">Módulos AMID</h1>
                <div class="list-group">
                    <a href="../../../modulo1/module1.php" class="list-group-item">Módulo 1</a>
                    <a href="../../../modulo2/module2.php" class="list-group-item">Módulo 2</a>
                    <a href="../../../modulo3/module3.php" class="list-group-item">Módulo 3</a>
                    <a href="../../../modulo4/module4.php" class="list-group-item">Módulo 4</a>
                    <a href="../../../modulo5/module5.php" class="list-group-item">Módulo 5</a>
                    <a href="../../../modulo6/module6.php" class="list-group-item">Módulo 6</a>
                    <a href="../../../modulo7/module7.php" class="list-group-item">Módulo 7</a>
                    <a href="../../../modulo8/module8.php" class="list-group-item">Módulo 8</a>
                    <a href="../../module9.php" class="list-group-item active">Módulo 9</a>
                    <ul class="list-group-item">
                        <a href="../../modulo9.1/module9.1_inicio.php" class="list-group-item">Unidad 1</a>
                        <a href="../../module9.2_inicio.php" class="list-group-item">Unidad 2</a>
                        <a href="../../modulo9.3/module9.3_inicio.php" class="list-group-item active">Unidad 3</a>
                        <ul class="list-group-item">
                            <a href="../module9.3_temas.php" class="list-group-item">Temas</a>
                            <a href="#" class="list-group-item active">Actividades</a>
                            <a href="../module9.3_eval.php" class="list-group-item">Evaluación</a>
                        </ul>
                    </ul>
                    <a href="../../../modulo10/module10.php" class="list-group-item">Módulo 10</a>
                    <a href="../../../modulo11/module11.php" class="list-group-item">Módulo 11</a>
                    <a href="../../../modulo12/module12.php" class="list-group-item">Módulo 12</a>
                </div>
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <br>
                <h1>Unidad 3: Manejando el Cambio Para Fomentar un Medio Ambiente Propicio para las Escuelas AMI</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <p class="card-text">
                            Para garantizar el éxito de los cursos y programas de AMI, muchos expertos han
                            desarrollado un conjunto de recomendaciones. Varias de estas recomendaciones se enumeran a
                            continuación. Recomendaciones sugeridas:
                            <ul>
                                <li>Identificar el contexto</li>
                                <li>Identificar los principales participantes y partidarios a nivel de programa y de
                                    políticas</li>
                                <li>Desarrolle un plan estratégico para la implementación/integración, etc.</li>
                                <li>Desarrolle un plan para promover AMI</li>
                                <li>Identifique las agencias/asociaciones que prestan apoyo</li>
                                <li>Identifique los recursos disponibles y los que se requieren</li>
                            </ul>
                        </p>
                        <p>1. Identifique cómo se puede aplicar esta lista dentro de su situación
                            particular. Identifique cualquier recomendación adicional que usted haría
                            para garantizar el éxito de AMI en su departamento o institución</p>
                        <textarea name="preg1" id="p1-r" cols="100" rows="10" placeholder="Escriba su respuesta aquí"
                            spellcheck="true"></textarea>
                        <p>2. Cambiaría esta lista si uno toma en cuenta los criterios de un programa
                            exitoso para los estudiantes? Identifique aquí cualquier consideración adicional.
                        </p>
                        <textarea name="preg2" id="p2-r" cols="100" rows="10" placeholder="Escriba su respuesta aquí"
                            spellcheck="true"></textarea>
                        <p>3. Tomando en cuenta las necesidades de su propia comunidad educativa, ¿de qué
                            manera se podría integrar AMI a los programas existentes para profesores, o desarrollarse
                            como un programa en sí? ¿Cuáles son las ventajas y desventajas de cada uno? Cite módulos
                            específicos como ejemplos</p>
                        <textarea name="preg3" id="p3-r" cols="100" rows="10" placeholder="Escriba su respuesta aquí"
                            spellcheck="true"></textarea>
                        <br>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="../module9.3_temas.php" class="btn btn-success">Anterior</a>
                    <a href="actividad.php" class="btn btn-success btnSig retraso">Siguiente</a>
				</center>
                <?php
                    include '../../../../../functions/paginacion.php';
                    pag(2);
                ?>
				<p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative
						Commons Reconocimiento Compartir igual 4.0</a></p>
                <br /> <br />
            </div>
        </div>
        <!-- /.col-lg-9 -->
    </div>
    <!-- /.container -->
	<?php $ruta="../../../../../../assets"; include '../../../../footer.php';?>
    <!-- Bootstrap core JavaScript -->
	<script src="../../../../../../assets/js/sweetalert/sweetalert2.js"></script>
	<script src="../../../../../../vendor/jquery/jquery.min.js"></script>
	<script src="../../../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="../../../../../../assets/js/script.js"></script>
</body>

</html>