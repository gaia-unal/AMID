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
  <link href="../../../../../../assets/css/style.css" rel="stylesheet">
  <link href="assets/css/estilo.css" rel="stylesheet">
</head>

<body>
  <?php require_once "../../../../../queries/connectionDB.php"; 
  $newConn= new Connection;
  $newConn->connectionDB();
  ?>
  <?php require '../../../../../queries/activeSession.php'; ?>  
  <?php $rutaSession="../../../../../queries/"; include '../../../../header.php'; ?>


    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="my-4">Módulos AMID</h1>
                <div class="list-group">
                    <a href="../../module1.php" class="list-group-item active">Módulo 1</a>
                    <ul class="list-group-item">
                        <a href="../module1.1_inicio.php" class="list-group-item active">Unidad 1</a>
                        <ul class="list-group-item">
                            <a href="../module1.1_temas.php" class="list-group-item">Temas</a>
                            <a href="module1.1.1.php" class="list-group-item active">Actividad</a>
                            <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 4</a>
                    </ul>
                    <a href="../../../modulo2/module2.php" class="list-group-item">Módulo 2</a>
                    <a href="../../../modulo3/module3.php" class="list-group-item">Módulo 3</a>
                    <a href="../../../modulo4/module4.php" class="list-group-item">Módulo 4</a>
                    <a href="../../../modulo5/module5.php" class="list-group-item">Módulo 5</a>
                    <a href="../../../modulo6/module6.php" class="list-group-item">Módulo 6</a>
                    <a href="../../../modulo7/module7.php" class="list-group-item">Módulo 7</a>
                    <a href="../../../modulo8/module8.php" class="list-group-item">Módulo 8</a>
                    <a href="../../../modulo9/module9.php" class="list-group-item">Módulo 9</a>
                    <a href="../../../modulo10/module10.php" class="list-group-item">Módulo 10</a>
                    <a href="../../../modulo11/module11.php" class="list-group-item">Módulo 11</a>
                    <a href="../../../modulo12/module12.php" class="list-group-item">Módulo 12</a>
                </div>
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <h1><br>Unidad 1: Comprender la alfabetización mediática e informacional: una orientación</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <center>
                            <h4><em>Información sobre los proveedores</em></h4>
                        </center>
                        <p class="card-text">
                            <em>
                                El uso adecuado de la información que está disponible a través de los medios y varios de
                                los proveedores de información depende de la habilidad de las personas para entender sus
                                necesidades de información, y para localizar, recuperar y evaluar la calidad de la
                                información a la cual puedan tener acceso. Hoy en día, hay una amplia variedad y diversa
                                selección de material de información, contenido y recursos disponibles, especialmente en
                                Internet, que varía mucho en exactitud, confiabilidad y valor. Adicionalmente, esta
                                información existe en una variedad de formas (por Ej. como texto, imagen o estadística,
                                electrónicamente o en impreso) que puede estar disponible a través de depositarios en
                                línea y portales, bibliotecas virtuales o reales y colecciones de documentales, bases de
                                datos, archivos, museos, etc. Sin embargo, el factor más importante es que la calidad de
                                esta información puede variar desde “muy buena” a “muy mala”. Antes de evaluar las
                                fuentes de información, es importante pensar para qué se usa la información. Esto
                                ayudará a identificar fuentes confiables de información. Las preguntas claves podrían
                                ser: ¿Qué fuente o qué tipo de fuente sería la más fiable para que provea información en
                                este caso en particular? ¿Qué fuentes pueden ser más justas, objetivas, que no tengan
                                motivos ocultos, que demuestren control de calidad? <br> <br>
                                Podemos pensar en la información como algo que tienen los medios y otros proveedores de
                                información como bibliotecas, museos, archivos e Internet. Estos proveedores de
                                información tienen un número de roles, incluyendo: <br>
                                <ul>
                                    <li>Informar</li>
                                    <li>Educar</li>
                                    <li>Facilitar los procesos de enseñanza y aprendizaje</li>
                                    <li>Proveer acceso a todos los tipos de información (a menudo libre de costos,
                                        plural, confiable y sin restricciones)</li>
                                    <li>Servir como una puerta hacia la información</li>
                                    <li>Promover los valores universales y los derechos civiles tales como libertad de
                                        expresión e información</li>
                                    <li>Servir como memoria colectiva de la sociedad</li>
                                    <li>Recolectar información</li>
                                    <li>Conservar el patrimonio cultural</li>
                                    <li>Entretener</li>
                                </ul>
                            </em>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module1.1.6.php" class="btn btn-success">Anterior</a>
                    <a href="module1.1.8.php" class="btn btn-success">Siguiente</a>
                </center>
                <?php
                    include '../../../../../functions/paginacion.php';
                    pag(3);
                ?>
                <p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative
                        Commons Reconocimiento Compartir igual 4.0</a></p>
                <br><br>
            </div>
            <!-- /.col-lg-9 -->
        </div>
    </div>
  <!-- /.container -->

  <?php $ruta="../../../../../../assets"; include '../../../../footer.php';?>

  <!-- Bootstrap core JavaScript -->
  <script src="../../../../../../vendor/jquery/jquery.min.js"></script>
  <script src="../../../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="../../../../../../assets/js/script.js"></script>
  <!-- <script src="assets/js/script.js"></script> -->
</body>

</html>