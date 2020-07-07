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
                        <h4>Lenguajes de los medios</h4>
                        <p class="card-text">
                            En vista de la gran cantidad de tecnología que nos rodea, se afirma que "Los medios de
                            comunicación [...] han creado un nuevo concepto de lectura y escritura y un nuevo concepto
                            de comunicación" (Huelva, 2001, p. 163). Por esto a continuación expondremos los principales
                            medios de comunicación y la función con la que cumple (Huelva, 2001, pp. 165-168):
                            <ul>
                                <li>La <strong>prensa</strong> es el medio de comunicación de masas más antiguo, utiliza
                                    el lenguaje gráfico, fundamentalmente verbal, con sus propias convenciones y usos
                                    retóricos, pragmáticos y gramaticales, pero también se sirve de códigos no verbales
                                    que desempeñan un papel fundamental en el proceso de comunicación a través de este
                                    medio [...] Cumple con las funciones de: <br> • Informar: con noticias de interés
                                    general sobre la actualidad. <br> • Opinar y orientar: con comentarios sobre esa
                                    actualidad que sirven de orientación al lector para formar su propia opinión sobre
                                    la misma. <br> • Entretener: con pasatiempos y otros recursos para divertir al
                                    lector. <br> • Hacer publicidad: mediante anuncios por palabras y ofertas varias con
                                    anuncios breves ofreciendo servicios, o publicidad con módulos o espacios en
                                    páginas de diversa extensión con fines comerciales.</li>
                                <li>La <strong>radio</strong> es el medio más rápido y ágil para la difusión de la
                                    información, pero también el más fugaz. Su canal de comunicación es el aire y está
                                    basado en la utilización de la lengua oral, además de otros sistemas de comunicación
                                    acústicos no verbales. [...] Su finalidad fundamental es informar y entretener, con
                                    unos géneros y tipología textual similar a la prensa, que requieren una programación
                                    previa y la elaboración de un guión escrito.</li>
                                <li>La <strong>televisión</strong> es el medio de comunicación de masas que mayor
                                    impacto está causando en la sociedad actual [...] Es el medio de comunicación que
                                    cuenta con un mayor número de audiencia [...] Su lenguaje se basa en la imagen en mo
                                    vimiento, que es lo que le confiere un mayor atractivo respecto a otros medios. Por
                                    eso, destaca en primer lugar la utilización de: <br>
                                    • Códigos iconográficos: imágenes, dibujos, emblemas, mapas... y otros códigos
                                    visuales: color, luminosidad, formas, tamaños... <br>
                                    • Códigos espaciales: encuadre, planos, angulación... <br>
                                    • Códigos verbales orales: la voz articulada y todos los códigos paralingüísticos
                                    que acompañan a ésta, comentados anteriormente en el lenguaje radiofónico:
                                    pronunciación, entonación, ritmo, acento e intensidad; y verbales escritos: rótulos,
                                    títulos, créditos, pies de foto, con todas las convenciones tipográficas indicadas
                                    en el lenguaje de la prensa. <br>
                                    • Además de otros códigos no verbales: sonoros, como música, sintonías de programa,
                                    de apertura y cierre, de separación entre espacios, sonidos ambientales y efectos
                                    acústicos diversos; gestuales y proxémicos: movimientos, posturas, gestos; y
                                    escenográficos: decoración, ambientación, vestuario.</li>
                            </ul>
                            <h5>Utilización didáctica y sus objetivos</h5>
                            Algunos de los objetivos específicos que se pueden plantear en el aula relacionados con la
                            alfabetización en el discurso y lenguaje de los medios son (Lomas, 1999, 304; Cassany ,1994,
                            535; citados por Huelva, 2001, p. 168): <br>
                            • Conocer los mecanismos lingüísticos, paralingüísticos, iconográficos y acústicos del
                            lenguaje de los diferentes medios. <br>
                            • Reconocer los diversos géneros periodísticos y su tipología textual y valorar su finalidad
                            comunicativa. <br>
                            • Distinguir las distintas variedades, registros y usos lingüísticos que se dan en estos
                            medios, así como los recursos no lingüísticos utilizados en función de la temática de las
                            secciones, espacios y programas y el público al que van dirigidos. <br>
                            • Desarrollar una actitud crítica y analítica ante los usos estereotipados, persuasivos,
                            ideológicos y manipuladores de sus contenidos. <br>
                            Para profundizar en el tema le recomendamos leer el siguiente artículo:
                            <a href="https://www.revistacomunicar.com/indice/articulo.php?numero=16-2001-22"
                                target="_blank">Hacia un nuevo concepto de alfabetización: el lenguaje de los medios</a>
                            <br>
                            <strong>Referencias: </strong>Huelva, J. P. A. (2001). Hacia un nuevo concepto de
                            alfabetización: el lenguaje de los medios. Comunicar, 8(16), 161–170.
                            https://doi.org/10.3916/C16-2001-22
                        </p>
                        <h4>El collage</h4>
                        <p class="card-text">
                            Se define como "una técnica artística, consistente en el pegado de diversos fragmentos de
                            materiales sobre una superficie" (Artesaniasymanualidades.com, 2012). Su función es realizar
                            una representación gráfica al combinar diferentes imágenes para transmitir el significado de
                            un tema. A continuación encontrará 2 plataformas que permiten la creación de collages
                            online.
                            <ul>
                                <li><a href="https://www.fotojet.com/es/features/photo-collage/" target="_blank">Photo
                                        collage</a></li>
                                <li><a href="https://www.photofancy.es/funciones/collage-de-fotos.html"
                                        target="_blank">Photo Fancy</a></li>
                            </ul>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module4.1.5.php" class="btn btn-success">Anterior</a>
                    <a href="module4.1.7.php" class="btn btn-success">Siguiente</a>
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