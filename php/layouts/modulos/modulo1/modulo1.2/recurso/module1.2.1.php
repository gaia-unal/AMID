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
          <a href="../../module1.php" class="list-group-item active"><i class="dropdown-menu"></i>Módulo 1<span
              class="arrow"></span></a>
          <ul class="list-group-item">
            <a href="../../modulo1.1/module1.1_inicio.php" class="list-group-item">Unidad 1</a>
            <a href="../module1.2_inicio.php" class="list-group-item active">Unidad 2</a>
            <ul class="list-group-item">
              <a href="../module1.2_temas.php" class="list-group-item">Temas</a>
              <a href="#" class="list-group-item active">Actividades</a>
              <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
            </ul>
            <a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 3</a>
            <a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 4</a>
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
        <h1><br>Unidad 2: AMI y la participación cívica</h1>
        <div class="card mt-4">
          <div class="card-body">
            <p class="card-text">
              <em>
                El periodismo y las fuentes de los medios son muy importantes en cada sociedad. Sin los periodistas y
                las noticias de los medios no habría “una ventana al mundo” –sabríamos muy poco de lo que sucede en
                nuestras comunidades o en el mundo más allá de una inmediata experiencia. <br>
                Existen varios factores claves que las prácticas periodísticas deben respetar y que los ciudadanos
                esperan del periodismo: <br>
                <ul>
                  <li><strong>Organizar el conocimiento:</strong> hacer que la información caótica esté organizada y sea
                    comprensible, e ir detrás de las posiciones oficiales para destapar intereses especiales.</li>
                  <li><strong>Verdad:</strong> que las fuentes de información en los medios, estén claramente
                    identificadas para que los ciudadanos puedan juzgar la relevancia, la fiabilidad y los posibles
                    prejuicios; se deberían anotar las preguntas importantes que no han sido respondidas a la espera de
                    un seguimiento, en caso de que existiesen controversias.</li>
                  <li><strong>Interés público:</strong> en el trabajo que realizan los periodistas pueden hacer mucho
                    para defender el interés público al dotar a los ciudadanos de la información necesaria para que
                    puedan tomar parte en los asuntos públicos.</li>
                  <li><strong>Independencia:</strong> debe estar claro que el debate ciudadano debe realizarse más allá
                    de los sesgos personales; los comentaristas deben examinar “los dos lados de la moneda” (es decir,
                    discutir las ideas con las cuales ellos están de acuerdo o en desacuerdo); los periodistas deben
                    demostrar un pensamiento independiente en su trabajo.</li>
                  <li><strong>Foro de la crítica pública y la resolución de problemas:</strong> los medios deberían
                    ofrecen varios canales para la interacción del público (cartas, correo electrónico, teléfonos de
                    contacto o un foro público); los ciudadanos también esperan que los medios les den acceso a espacios
                    o tiempo-aire para tener conversaciones en su propio “idioma” con sus colegas ciudadanos; más aún,
                    ellos esperan que esté presente una amplia representación de las visiones y valores en la cobertura
                    de las noticias.</li>
                  <li><strong>Rendición de cuentas:</strong> los medios deben monitorear todos los ejercicios de poder,
                    no sólo de los gobiernos, sino también de importantes entidades públicas y privadas; al hacer que
                    los poderosos rindan cuentas, los medios pueden proveer de información al pensamiento comunitario.
                  </li>
                  <li><strong>Noticias proporcionales y relevantes:</strong> los ciudadanos necesitan un conocimiento
                    oportuno de los temas importantes y tendencias; los informes no deben exagerar o subestimar la
                    verdadera naturaleza de las amenazas o riesgos.</li>
                  <li><strong>Equilibrando la privacidad y el derecho a saber:</strong> los ciudadanos esperan que los
                    profesionales de los medios encuentren un equilibrio entre el derecho público a saber y el derecho
                    personal a la privacidad (cf. Fackson Banda, UNESCO, 2009)</li>
                </ul>
              </em>
              De clic en los botones para ver un resumen de estos factores: <br><br>
              <div>
                <center>
                  <button class="btn btn-outline-success" onclick="plusDivs(-1)">Volver</button>
                  <button class="btn btn-outline-success" onclick="plusDivs(1)"> Seguir </button>
                  <br>
                  <table width="80%" border="1" bordercolor="#0000FF" cellspacing="10" cellpadding="10">
                    <tr>
<<<<<<< HEAD
                      <img class="mySlides" src="assets/img/accesoInformacion.png">
                      <img class="mySlides" src="assets/img/foroCritica.png">
                      <img class="mySlides" src="assets/img/independencia.png">
                      <img class="mySlides" src="assets/img/interesPublico.png">
                      <img class="mySlides" src="assets/img/noticias.png">
                      <img class="mySlides" src="assets/img/organizarConocimiento.png">
                      <img class="mySlides" src="assets/img/rendicionCuentas.png">
                      <img class="mySlides" src="assets/img/verdad.png">
=======
                      <img class=mySlides src="assets/img/accesoInformacion.png">
                      <img class=mySlides src="assets/img/foroCritica.png">
                      <img class=mySlides src="assets/img/independencia.png">
                      <img class=mySlides src="assets/img/interesPublico.png">
                      <img class=mySlides src="assets/img/noticias.png">
                      <img class=mySlides src="assets/img/organizarConocimiento.png">
                      <img class=mySlides src="assets/img/rendicionCuentas.png">
                      <img class=mySlides src="assets/img/verdad.png">
>>>>>>> 2ef1147925e598054693ff02b58bf2938d33532c
                    </tr>
                  </table>
                </center>
              </div>
              <br><br>
              <em>
                <center>
                  <h4>Acceso a la información</h4>
                </center>
                El acceso a la información es esencial tanto para la democracia como para el desarrollo. Los ciudadanos
                tienen el derecho a la libertad de palabra y el derecho de acceso a la información pública. Esta
                información es también propiedad de los ciudadanos. Los medios y los otros proveedores de información
                como bibliotecas, archivos y el Internet deben ayudar a garantizar la libertad de información para cada
                ciudadano. <br>
                El papel de los medios y de los otros proveedores de información cambia con el rápido esparcimiento de
                las tecnologías como las tecnologías de información y comunicación (TICs). <br>
                Las TICs proveen acceso a la información y al conocimiento casi instantáneamente. Los medios y los
                proveedores de información como las bibliotecas, archivos e Internet, son capaces de proveer nuevos
                servicios y se están convirtiendo en más que centros de recursos o proveedores de información. Estas
                nuevas posibilidades ofrecen nuevas oportunidades para cubrir las necesidades de los ciudadanos que
                tengan un aprendizaje a lo largo de la vida que sea eficiente y eficaz, y cubra las necesidades de
                investigación y entretenimiento, y conecte a las comunidades. <br>
                Los medios y los proveedores de información tienen varias funciones claves, que incluyen: <br>
                <ul>
                  <li>Proveer acceso abierto a las fuentes de información sin ninguna restricción racial, de género,
                    ocupacional o religiosa; en especial que las bibliotecas públicas provean el libre acceso.</li>
                  <li>Proteger la privacidad de los lectores y la confidencialidad en términos del contenido consultado
                    en lo local o en línea.</li>
                  <li>Proveer acceso a las fuentes de información diversas y plurales, basándose en el profesionalismo y
                    sin sesgos políticos, religiosos o morales.</li>
                  <li>Recolectar y preservar la información para futuras generaciones</li>
                </ul>
              </em>
            </p>
          </div>
        </div>
        <br>
        <center>
          <a href="../module1.2_temas.php" class="btn btn-success">Anterior</a>
          <a href="module1.2.2.php" class="btn btn-success">Siguiente</a>
        </center>
        <!-- /.card -->
        <?php
          include '../../../../../functions/paginacion.php';
          pag(3);
        ?>
        <p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative Commons
            Reconocimiento Compartir igual 4.0</a></p>
        <!-- /.col-lg-9 -->
      </div>
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