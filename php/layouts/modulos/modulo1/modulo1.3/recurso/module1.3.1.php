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
  <!-- <link href="assets/css/estilo.css" rel="stylesheet"> -->
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
                    <a href="../module1.php" class="list-group-item active">Módulo 1</a>
                    <ul class="list-group-item">
                        <a href="../modulo1.1/module1.1_inicio.php" class="list-group-item">Unidad 1</a>
                        <a href="../modulo1.2/module1.2_inicio.php" class="list-group-item ">Unidad 2</a>
                        <a href="module1.3_inicio.php" class="list-group-item active">Unidad 3</a>
                        <ul class="list-group-item">
                            <a href="module1.3_temas.php" class="list-group-item">Temas</a>
                            <a href="#" class="list-group-item active">Actividades</a>
                            <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(3)" class="list-group-item inactive">Unidad 4</a>
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
                <h1><br>Unidad 3: Interactuándo con los medios y otros proveedores de información como las bibliotecas,
                    los
                    archivos y el internet</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <p class="card-text">
                            <em>
                                Una parte clave de la alfabetización mediática es entender cómo los medios construyen
                                diferentes tipos de historias, cómo le dan forma a la información al presentarla, y qué
                                técnicas utilizan para organizar el material que de otra forma sería caótico y difícil
                                de entender. Es importante tener un entendimiento básico de las diferentes técnicas que
                                se emplean en los medios, los “códigos” que utilizan y cómo interpretarlos. También
                                podría ser relevante considerar quién esta produciendo y arreglando el material y qué
                                tan activos o interactivos son los consumidores de los medios e información – si es que
                                sus propias percepciones tienen impacto sobre la forma en como se presenta la
                                información. En cuanto a AMI, las siguientes áreas claves deben ser examinadas de cerca
                                para poder comprender como los medios y los otros proveedores de información operan,
                                cómo presentan el significado, cómo se puede utilizar, y cómo se puede evaluar la
                                información presentada. Las áreas a continuación también apuntalan los siguientes
                                módulos de este documento del Curriculum AMI: <br>
                                <h4>Lenguaje en los medios de información</h4>
                                <ul>
                                    <li>¿Cómo los productores de textos mediáticos utilizan diferentes técnicas o
                                        formas de representar diferentes tipos de información para comunicar?</li>
                                    <li>¿Cómo el público en general se identifica y acepta estos usos?</li>
                                    <li>¿Cuáles son los códigos y convenciones o los “ingredientes claves” o gramática
                                        de un medio en particular?</li>
                                    <li>Un comentarista de los medios, Marshall Mcluhan, escribió que “el medio es el
                                        mensaje” implicando que el medio en sí – impreso, transmisión, Internet – afecta
                                        la forma en cómo entendemos al mundo. ¿Cómo la elección de los medios puede
                                        influir en el tipo de información que recibimos? ¿Cómo esto da forma al mensaje
                                        transmitido por los medios?</li>
                                </ul>
                                <h4>Representación en los medios e información</h4>
                                <ul>
                                    <li>Examine las imágenes o representaciones en los medios</li>
                                    <li>Analice las imágenes o textos de los medios</li>
                                    <li>Analice el contexto</li>
                                    <li>¿Quién se beneficia al aceptar las representaciones de los medios y quién
                                        pierde?</li>
                                    <li>¿Cómo estas imágenes influyen en la forma en cómo nos vemos a nosotros mismos y
                                        a otros?</li>
                                    <li>¿Cómo pueden influir en nuestro conocimiento y comprensión del mundo más allá de
                                        nuestra experiencia inmediata?</li>
                                    <li>¿Cómo influyen en nuestra visión de equidad de género, en el empoderamiento de
                                        las mujeres, en las personas que viven con discapacidades, en las personas
                                        indígenas y en los grupos de minorías étnicas?</li>
                                    <li>Examine hasta qué punto la independencia editorial se refleja en los textos
                                        mediático</li>
                                </ul>
                                <h4>Producción/contenido generado por usuarios</h4>
                                <ul>
                                    <li>Aquí es importante la noción de una agencia humana – ¿Quién crea los textos de
                                        medios e información y por qué?</li>
                                    <li>Se conecta a los derechos de comunicación y de expresión de los ciudadanos y del
                                        profesional</li>
                                    <li>Se conecta a la libertad de expresión, a la ciudadanía activa y a la
                                        alfabetización mediática e informacional</li>
                                    <li>Aquí se toman en cuenta los recursos (humanos, financieros, tecnológicos, etc.)
                                        y las regulaciones</li>
                                </ul>
                                <h4>La audiencia como ciudadanos y usuarios/consumidores</h4>
                                <ul>
                                    <li>Audiencias seleccionadas y activas</li>
                                    <li>Ciudadanos activos y usuarios/consumidores negocian sus propios significados
                                        basados en lo que ellos aportan al texto</li>
                                    <li>Las audiencias tienen expectativas en las industrias mediáticas basadas en la
                                        transparencia, la rendición de cuentas e imparcialidad</li>
                                    <li>Los usuarios/consumidores tiene necesidades de información personales,
                                        económicas, sociales y culturales</li>
                                </ul>
                                <h4>Los ciudadanos como usuarios/consumidores de los servicios de los proveedores de
                                    información</h4>
                                <ul>
                                    <li>¿Cómo los proveedores de información seleccionan los recursos de información y
                                        los principales criterios de selección?</li>
                                    <li>¿Cómo los proveedores de información como las bibliotecas, suscriben o compran
                                        los recursos de información como libros, publicaciones periódicas y bases de
                                        datos?</li>
                                    <li>¿Cómo los proveedores de información, incluyendo los proveedores públicos y
                                        privados de Internet, reciben sus fondos?</li>
                                    <li>¿Cómo los proveedores de información generan sus ingresos provenientes de los
                                        servicios de información?</li>
                                </ul>
                            </em>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="../module1.3_temas.php" class="btn btn-success">Anterior</a>
                    <a href="module1.3.2.php" class="btn btn-success">Siguiente</a>
                </center>
                <?php
                    include '../../../../../functions/paginacion.php';
                    pag(3);
                ?>
                <br />
                <p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative
                        Commons Reconocimiento Compartir igual 4.0</a></p>
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
  <script src="assets/js/script.js"></script>
</body>

</html>