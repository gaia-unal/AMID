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
                    <a href="../module2.php" class="list-group-item active">Módulo 2</a>
                    <ul class="list-group-item">
                        <a href="../modulo2.1/module2.1_inicio.php" class="list-group-item">Unidad 1</a>
                        <a href="module2.2_inicio.php" class="list-group-item active">Unidad 2</a>
                        <ul class="list-group-item">
                            <a href="module2.2_temas.php" class="list-group-item">Temas</a>
                            <a href="#" class="list-group-item active">Actividad</a>
                            <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 3</a>
                        <a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 4</a>
                    </ul>
                    <a href="../../modulo3/module3.php" class="list-group-item">Módulo 3</a>
                    <a href="../../modulo4/module4.php" class="list-group-item">Módulo 4</a>
                    <a href="../../modulo5/module5.php" class="list-group-item">Módulo 5</a>
                    <a href="../../modulo6/module6.php" class="list-group-item">Módulo 6</a>
                    <a href="../../modulo7/module7.php" class="list-group-item">Módulo 7</a>
                    <a href="../../modulo8/module8.php" class="list-group-item">Módulo 8</a>
                    <a href="../../modulo9/module9.php" class="list-group-item">Módulo 9</a>
                    <a href="../../modulo10/module10.php" class="list-group-item">Módulo 10</a>
                    <a href="../../modulo11/module11.php" class="list-group-item">Módulo 11</a>
                    <a href="../../modulo12/module12.php" class="list-group-item">Módulo 12</a>
                </div>
                <br />
                <br />
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <h1><br>Unidad 2: Libertad, ética y responsabilidad</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <p class="card-text">
                            <blockquote>
                                <em>
                                    “Al final el periodismo es un acto de carácter.” (Bill Kovach and Tom Rosenstiel,
                                    The Elements of Journalism).
                                </em>
                            </blockquote>
                            Si el estado busca regular los medios, va a interferir en la independencia de los
                            periodistas y en su habilidad de cubrir los eventos de la forma que a ellos les parezca más
                            apropiada. Los medios son actores sociales que pueden ejercer gran poder en la sociedad,
                            entonces, a fin de proteger su libertad de regulación y control, generalmente se cree que
                            los periodistas necesitan regularse a sí mismos al adoptar códigos de conducta ética o
                            establecer lineamientos profesionales de cómo las noticias o eventos deben ser cubiertos.
                            <h4>Código de ética periodística</h4>
                            En Bogotá, el circulo de periodistas público un código de ética que tiene como finalidad
                            brindarle al periodista y a todas aquellas personas que transmiten información, las pautas
                            necesarias para llevar una conducta y una ética adecuada, de tal manera que la información
                            recolectada y compartida sea correcta y no cuente con insinuaciones, morbosidad u otros
                            factores de influencia. <br>
                            <em>
                                “El compromiso del periodista consiste en servir y defender los intereses de la
                                democracia, más allá de cualquier adhesión a gobiernos, partidos o instituciones” <br>
                            </em>
                            En el siguiente enlace puede encontrar el documento: <a
                                href="http://eticasegura.fnpi.org/2011/12/27/conozca-el-codigo-de-etica-del-circulo-de-periodistas-de-bogota/"
                                target="_blank">Código de Etica del circulo de periodistas de Bogotá</a> <br>
                            Para profundizar, también compartimos el documento del Colegio Dominicano de Periodistas,
                            donde presentan el código de ética: <a
                                href="http://www.unesco.org/new/fileadmin/MULTIMEDIA/HQ/CI/CI/images/wmn/code%20of%20Ethics%20Collegio%20de%20periodistas.pdf"
                                target="_blank">Código de ética</a> <br>
                            En latinoamerica, se pueden encontrar 4 códigos de ética: <br>
                            <ul>
                                <li>La “Declaración de principios del periodismo” del Centro Latinoamericano de
                                    Periodismo</li>
                                <li>El Código latinoamericano de ética periodística de la Federación latinoamericana
                                    de periodistas</li>
                                <li>Las Normas de ética y deontología profesional del Congreso Iberoamericano de
                                    periodistas técnicos y especializados.</li>
                                <li>El código de ética de la Asociación Interamericana de Prensa, adoptado en la I
                                    Conferencia Panamericana de prensa</li>
                            </ul>
                            <strong>Tomado de: </strong>https://fundaciongabo.org/es/consultorio-etico/consulta/647 <br>
                            <h4>Código de ética profesional para los profesionales de la información</h4>
                            Los principios éticos de las sociedades del conocimiento derivan de la Declaración Universal
                            de los Derechos Humanos e incluyen el derecho a la libertad de expresión, el acceso
                            universal a la información –en particular la que está en el dominio público–, el derecho a
                            la educación, el derecho a la privacidad y el derecho a participar en la vida cultural. El
                            debate internacional en torno a la ética de la información (Infoética) aborda los aspectos
                            éticos, legales y sociales del uso de las Tecnologías de la Información y la Comunicación
                            (TIC). <br>
                            <strong>Tomado de: </strong>https://es.unesco.org/themes/etica-informacion <br>
                            El concepto de ética de la información abarca todas las preguntas éticas relacionadas con la
                            digitalización, es decir con la reconstrucción de todos los fenómenos posibles no
                            restringidos estos al actuar humano y concebidos en el código 0 y 1 como información
                            digital, así como también con respecto a los problemas éticos relacionados por el
                            intercambio, la combinación y el uso de dicha información incluyendo su comunicación a
                            través del medio digital. <br>
                            <strong>Tomado de: </strong>http://www.capurro.de/colombia.htm <br>
                            Le invitamos a examinar el código de ética para Bibliotecarios y otros trabajadores de la
                            información: <a
                                href="https://www.ifla.org/files/assets/faife/codesofethics/spanishcodeofethicsfull.pdf"
                                target="_blank">Código de ética de la ifla para bibliotecarios y otros trabajadores de
                                la información</a> <br><br>
                            A continuación le compartimos un artículo sobre la ética de la información que lo puede
                            ayudar a profundizar en el tema: <a
                                href="http://isegoria.revistas.csic.es/index.php/isegoria/article/view/2/2"
                                target="_blank">Ética de la información: su naturaleza y alcance</a> <br><br>
                            Lo invitamos a investigar acerca de la libertad de prensa en el índice de Freedom House
                            (www.freedomhouse.org) o en el índice mundial de libertad de prensa de Reporteros Sin
                            Fronteras, o una medida regional relevante, tal como el Afrobarómetro de los medios y
                            determinar la calificación que su país ha recibido. Esto le permitirá:
                            <ul>
                                <li>Explicar si está o no de acuerdo con la calificación</li>
                                <li>identificar y explicar los factores o variables que han afectado a la calificación
                                    de la libertad de prensa de su país. Los criterios cubiertos en estos índices
                                    incluyen:</li>
                                <ol>
                                    <li>Grado de libertad de impresión, transmisión y medios en línea (por Ej. Internet)
                                    </li>
                                    <li>Ambiente legal para los medios</li>
                                    <li>Presiones políticas que influyen en los reportajes</li>
                                    <li>Factores económicos que afectan al acceso de la información</li>
                                    <li>Concentración de la propiedad de los medios</li>
                                    <li>Ataques directos a los periodistas y a los medios</li>
                                    <li>Presencia de monopolio estatal en los medios</li>
                                    <li>Presencia de la censura y la auto-censura en los medios</li>
                                    <li>Dificultades de los reporteros extranjeros</li>
                                </ol>
                            </ul>
                            Existen muchas organizaciones en el mundo que hacen campaña para defender a los periodistas,
                            algunas de estas son internacionales como Media Support en Dinamarca, Artículo 19 en Londres
                            y el Comité para Proteger a los Periodistas en Nueva York
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module2.2_temas.php" class="btn btn-success">Anterior</a>
                    <a href="module2.2_act2.php" class="btn btn-success">Siguiente</a>
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
  <script src="../../../../../vendor/jquery/jquery.min.js"></script>
  <script src="../../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="../../../../../assets/js/script.js"></script>
</body>

</html>