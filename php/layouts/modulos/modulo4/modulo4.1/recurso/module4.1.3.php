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
                    <a href="../../module4.php" class="list-group-item active">Módulo 4</a>
                    <ul class="list-group-item">
                        <a href="../module4.1_inicio.php" class="list-group-item active">Unidad 1</a>
                        <ul class="list-group-item">
                            <a href="../module4.1_temas.php" class="list-group-item">Temas</a>
                            <a href="module4.1.1.php" class="list-group-item active">Actividad</a>
                            <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 4</a>
                    </ul>
                    <a href="../../../modulo5/module5.php" class="list-group-item">Módulo 5</a>
                    <a href="../../../modulo6/module6.php" class="list-group-item">Módulo 6</a>
                    <a href="../../../modulo7/module7.php" class="list-group-item">Módulo 7</a>
                    <a href="../../../modulo8/module8.php" class="list-group-item">Módulo 8</a>
                    <a href="../../../modulo9/module9.php" class="list-group-item">Módulo 9</a>
                    <a href="../../../modulo10/module10.php" class="list-group-item">Módulo 10</a>
                    <a href="../../../modulo11/module11.php" class="list-group-item">Módulo 11</a>
                    <a href="../../../modulo12/module12.php" class="list-group-item">Módulo 12</a>
                </div>
                <br />
                <br />
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <h1><br>Unidad 1: Lectura de medios y textos de información</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Lenguaje televisivo</h4>
                        <ul>
                            <li>La televisión es un medio de comunicación masivo que utiliza para la transmisión de
                                información un lenguaje específico, constituido por la imagen y el sonido.</li>
                            <li>En televisión, el lenguaje no solo se caracteriza por el texto, sino también por la
                                imagen, el sonido, la voz y otros elementos que lo convierten en un vehículo del
                                pensamiento más complejo y que merece una mayor coordinación para transmitir un
                                resultado: el mensaje audiovisual.</li>
                            <li>El mensaje transmitido por la televisión no puede ser releído, a no ser que previamente
                                el usuario haya decidido su grabación, por tanto, su lenguaje se caracterizará por:
                                <ul>
                                    <li>Emplear frases sencillas con un léxico común, para llegar a todo el mundo</li>
                                    <li>Utilizar repeticiones</li>
                                    <li>Evitar términos ofensivos o discriminatorios.</li>
                                    <li>Mantener la atención del televidente mediante el empleo de recursos orales.</li>
                                    <li>Cuidar la vocalización y el tono adecuado.</li>
                                    <li>Enriquecer el contenido con la utilización del sonido ambiente y la música.</li>
                                    <li>Utilizar como tiempo verbal preferente el presente, y para dirigirse a hechos
                                        pasados el pretérito perfecto.</li>
                                    <li>Los programas están divididos por grandes bloques de publicidad.</li>
                                    <li>Los mensajes son muy llamativos para mantener el interés.</li>
                                    <li>Falsean la realidad como consecuencia de la tendencia a la superficialidad que
                                        tiene el medio televisivo.</li>
                                </ul>
                            </li>
                            <li>Básicamente, la televisión consiste en la transmisión de sonido e imágenes en movimiento
                                y utiliza códigos muy parecidos al cine. Su transmisión está gestionada por empresas y
                                necesita ser rentable, por lo que uno de los objetivos de los programadores es captar y
                                mantener las audiencias.</li>
                        </ul>
                        Este lenguaje contiene unos elementos que lo caracterizan, los cuales son:
                        <ul>
                            <li>El <strong>estudio</strong> es el espacio donde toda cadena de televisión, organiza y
                                ejecuta los elementos que componen su producción. En los estudios se siguen paso a paso
                                las escenas de lo programas y series, se graba todo lo que emiten las cámaras y se edita
                                el material grabado.</li>
                            <li>La <strong>producción</strong> hace referencia a los procesos de realización del
                                programa. De esta manera, el equipo de producción engloba a todo el personal de un
                                programa organizados entorno a las figuras del realizador y del productor</li>
                            <li>El <strong>guión</strong> es el texto escrito que se presenta todo lo que conforma una
                                obra audiovisual En la televisión, la coexistencia de tan variada cantidad de formatos y
                                géneros obligan a aplicar distintos modelos de guión</li>
                            <li>La <strong>realización</strong> en TV es lo mismo que la dirección en el cine.</li>
                        </ul>
                        Además hay unos formatos específicos que hacen parte del lenguaje televisivo:
                        <ul>
                            <li><strong>Documental:</strong> es un género que intenta describir aspectos de larealidad y
                                el entorno. Sus objetivos principales son enseñar, informar,describir o denunciar</li>
                            <li><strong>Entretenimiento:</strong> los programas de entretenimiento basan suscontenidos
                                en cuatro grandes conceptos: la sorpresa, el humor, elsentimiento y la emoción
                                (concursos, galas, variedades, reality shows,magacines…)</li>
                            <li><strong>Ficción:</strong> incluye géneros como series, miniseries, telenovela,
                                telefilmes, etc. Se caracteriza por:
                                <ul>
                                    <li>Un grupo reducido de personajes fijos</li>
                                    <li>Pocos decorados</li>
                                    <li>Están realizados en Estudio, lo que conlleva un absoluto control de los efectos,
                                        la iluminación o el posicionamiento de las cámaras</li>
                                    <li>La estructura de las tramas se amolda a los cortes publicitarios (Guevara,
                                        2011).</li>
                                </ul>
                            </li>
                        </ul>
                        <strong>Referencias:</strong> Guevara, P. P. (2011). Lenguaje Televisivo. Retrieved from
                        SlideShare website: https://es.slideshare.net/adurbecondita/el-lenguaje-televisivo-8007635
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module4.1.2.php" class="btn btn-success">Anterior</a>
                    <a href="module4.1.4.php" class="btn btn-success">Siguiente</a>
                </center>
                <?php
                    include '../../../../../functions/paginacion.php';
                    pag(3);
                ?>
        <p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative Commons
            Reconocimiento Compartir igual 4.0</a></p>
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
  <script src="assets/script.js"></script>
</body>

</html>