<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>AMID</title>
  <!-- Bootstrap core CSS -->
  <link href="../../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../../../../assets/css/shop-item.css" rel="stylesheet">
  <link href="../../../../assets/css/style.css" rel="stylesheet">
</head>

<body>
  <?php 
    require_once "../../../queries/connectionDB.php"; 
    $newConn= new Connection;
    $newConn->connectionDB();
    
    require '../../../queries/activeSession.php';
    $rutaSession="../../../queries/"; include '../../header.php'; 
    include '../../../queries/estadoMod.php'; estadoMod(11,1);
  ?>


    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="my-4">Módulos AMID</h1>
                <div class="list-group">
                    <a href="../modulo1/module1.php" class="list-group-item">Módulo 1</a>
                    <a href="../modulo2/module2.php" class="list-group-item">Módulo 2</a>
                    <a href="../modulo3/module3.php" class="list-group-item">Módulo 3</a>
                    <a href="../modulo4/module4.php" class="list-group-item">Módulo 4</a>
                    <a href="../modulo5/module5.php" class="list-group-item">Módulo 5</a>
                    <a href="../modulo6/module6.php" class="list-group-item">Módulo 6</a>
                    <a href="../modulo7/module7.php" class="list-group-item">Módulo 7</a>
                    <a href="../modulo8/module8.php" class="list-group-item">Módulo 8</a>
                    <a href="../modulo9/module9.php" class="list-group-item">Módulo 9</a>
                    <a href="../modulo10/module10.php" class="list-group-item">Módulo 10</a>
                    <a href="../modulo11/module11.php" class="list-group-item">Módulo 11</a>
                    <a href="module12.php" class="list-group-item active">Módulo 12</a>
                    <ul class="list-group-item">
                        <a href="#" class="list-group-item active">Actividad</a>
                    </ul>
                </div>
                <br /><br />
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <br>
                <h1>Módulo 12: Libertad de expresión</h1>

                <form action="../../../queries/evaluacion.php?id_und=m12" method="post">
                
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Actividad</h4>
                        Completa la definición de libertad de expresión escribiendo las palabras que faltan donde
                        corresponde <br><br>
                        La libertad de expresión es un <input type="text" name="opc1" id="opc1"
                            style="text-transform:lowercase;"> que todo el mundo debe
                        gozar, e incluye el <input type="text" name="opc2" id="opc2" style="text-transform:lowercase;">
                        opinión sin <input type="text" name="opc3" id="opc3" style="text-transform:lowercase;"> y a
                        buscar, <input type="text" name="opc4" id="opc4" style="text-transform:lowercase;"> y <input
                            type="text" name="opc5" id="opc5" style="text-transform:lowercase;"> información e ideas a
                        través de cualquier <input type="text" name="opc6" id="opc6" style="text-transform:lowercase;">
                        sin limitación de fronteras. <br><br>
                        <b>Las palabras son</b>
                        <ul>
                            <li>Medio de difusión</li>
                            <li>Interferencias</li>
                            <li>Derecho universal</li>
                            <li>Difundir</li>
                            <li>Mantener una</li>
                            <li>Recibir</li>
                        </ul>
                        <center>
                            <button class="btn btn-outline-success" onclick="validar();">Validar</button>
                        </center>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module12_act.php" class="btn btn-success">Anterior</a>
                    <!--<a href="../../inicio.php" class="btn btn-success btnSig retraso3">Siguiente</a>-->
					<button id="btn-siguiente"  class="btn btn-success" type="submit" onclick="evaluacion()">Siguiente</button>
                </center>
                </form>	
                <?php
                    include '../../../functions/paginacion.php';
                    pag(1);
                ?>
                <p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative
                        Commons Reconocimiento Compartir igual 4.0</a></p>
                <br><br>
            </div>
            <!-- /.col-lg-9 -->
        </div>
    </div>
  <!-- /.container -->
  <?php $ruta="../../../../assets"; include '../../footer.php';?>

<!-- Bootstrap core JavaScript menu-->
<script src="../../../../vendor/jquery/jquery.min.js"></script>
<script src="../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- script unidad/evaluación inactiva -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../../../../assets/js/script.js"></script>
<script src="assets/js/script.js"></script>
</body>

</html>