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
                    <a href="#" class="list-group-item active">Módulo 11</a>
                    <ul class="list-group-item">
                        <a href="modulo11.1/module11.1_inicio.php" class="list-group-item">Unidad 1</a>
                    </ul>
                    <a href="../modulo12/module12.php" class="list-group-item">Módulo 12</a>
                </div>
                <br />
                <br />
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <h1><br>Módulo 11: Medios, tecnología y el mundo global (Global Village)</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Antecedentes y fundamento</h4>
                        <p class="card-text">
                            El tema de la propiedad y el control de los medios de comunicación es crucial ya que esto
                            define el contenido de los medios y los procesos. A pesar de que los periodistas promueven
                            la democracia en el ejercicio de la libertad de expresión y la libertad de prensa, esta
                            libertad e independencia de los periodistas, de acuerdo a algunos críticos, de alguna manera
                            recibe el impacto de los asuntos financieros y políticos de los dueños de los medios o sus
                            empleados – en algunos casos puede ser bastante sutil y en otros suele ser bastante obvio.
                            Dicho control, incluyendo su patrón y estructura, básicamente está formado por las
                            realidades generalizadas (y geopolíticas) y la potencial concentración de la propiedad. Es
                            por esto que tanto la independencia editorial y el pluralismo de los medios a nivel local y
                            global es importante. <br>
                            Debido a la creciente complejidad geográfica de los medios, los flujos de medios no sólo van
                            ahora del Norte al Sur sino que también van de Sur-Norte y de Sur-Sur. Algunos medios
                            influyentes regionales están cambiando la configuración del sistema internacional de medios.
                            En la mayoría de países alrededor del mundo, las organizaciones de medios masivos son
                            compañías comerciales privadas. Otras tienen propietarios privados pero no comerciales, como
                            aquellas que están operadas por las organizaciones no gubernamentales, mientras que otras
                            son de propiedad del gobierno y están controladas por este. <br>
                            En el campo de la difusión, el modelo de servicio público de difusión provee una alternativa
                            tanto para los medios comerciales como para los de propiedad del gobierno. Un desarrollo que
                            se ha vuelto positivo es la creciente popularidad de los medios que pertenecen a las
                            comunidades, lo que involucra a los residentes locales en el desarrollo del contenido y da
                            voz a los sectores marginados de la sociedad. Los avances tecnológicos en la economía
                            mundial de mercado han promovido el crecimiento de las compañías globales de medios, a los
                            cuales se denomina como conglomerados transnacionales de medios. Su poder e influencia se
                            extiende más allá de las barreras geográficas, económicas y políticas. Las compañías
                            globales de medios incluyen a aquellas que operan a nivel regional. La convergencia, a pesar
                            de las regulaciones anti-monopolio, también ha facilitado estas fusiones y adquisiciones de
                            los medios a nivel nacional y mundial. Muchas de las organizaciones de medios de masas están
                            estableciendo alianzas con compañías y haciendo negocios en telecomunicaciones, aplicaciones
                            de red y entretenimiento (películas y video juegos), etc. <br>
                            Las nuevas compañías creadas por estas coaliciones se han vuelto más poderosas a medida que
                            sus mensajes, imágenes y voces pueden ahora ser transmitidas globalmente y alcanzar incluso
                            los lugares más remotos a través de diversas plataformas – impresos, difusión y digital. El
                            nacimiento de estos medios globales presenta tanto retos como oportunidades. Algunos
                            académicos de la comunicación nos han advertido de las amenazas de la homogeneidad cultural,
                            pero las mismas herramientas de medios también ofrecen oportunidades para la diversidad
                            cultural y el pluralismo (es decir, producir, compartir, e intercambiar el contenido de los
                            medios locales). Los medios globales también tienen la capacidad y los recursos de
                            establecer estándares más altos de profesionalismo. <br>
                            Como resultado, muchos de los medios locales se ven forzados a ser más competitivos y
                            mejorar la calidad de su programación. Más aún, los temas de desarrollo que tienen un
                            impacto a nivel mundial, como el cambio climático, las pandemias o las amenazas a la
                            biodiversidad, pueden ser comunicadas de una manera eficaz a través de los medios globales.
                            También se reconoce que muchas de las historias que se esconden de las audiencias locales y
                            nacionales debido a restricciones político-económicas, sin embargo se revelan a la audiencia
                            del mundo a través de los medios globales independientes. También está cambiando el impacto
                            de las industrias mediáticas en el ambiente político. Con las nuevas tecnologías mediáticas,
                            ahora existe un mayor flujo bi-direccional de información dentro y fuera de las fronteras
                            nacionales, así como plataformas más amplias para el discurso público. Todo esto ha
                            cultivado la tolerancia y el entendimiento. <br>
                            El tema clave aquí es ¿Cómo los medios pueden ayudar a promover un rango de opciones más
                            amplio, con más capacidad de selección y libertad? El sistema de medios comerciales actual
                            requiere atención especial ya que la publicidad sigue siendo la principal fuente de
                            ingresos. ¿Cómo pueden las organizaciones mediáticas mantener su independencia y la
                            confianza del público, y al mismo tiempo permanecer viables (rentables) y sostenibles (en
                            términos de operaciones)? Se debería tomar en cuenta el impacto de sobredimensionar
                            cualquiera de los dos factores. Esté módulo termina con una nota de optimismo, con una
                            discusión sobre los medios alternativos, especialmente aquellos en pequeñas comunidades, que
                            operan en el panorama de los medios globales. También se habla sobre el número creciente de
                            canales mediáticos, ya que estos ofrecen alternativas a la dominación de unos pocos,
                            incluyendo sitios de noticias en red. Los medios comunitarios se pueden instalar en las
                            escuelas/colegios, comunidades, lugares de trabajo, etc. y son una alternativa para los
                            medios más grandes. Estos canales de medios “pequeños” promueven el derecho a la información
                            y ofrecen a las personas locales una voz propia. <br>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="../modulo10/module10_inicio.php" class="btn btn-success">Anterior</a>
                    <a href="modulo11.1/module11.1_inicio.php" class="btn btn-success">Siguiente</a>
                </center>
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
</body>

</html>