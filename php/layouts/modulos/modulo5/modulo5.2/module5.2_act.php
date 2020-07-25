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
                    <a href="../../modulo2/module2.php" class="list-group-item">Módulo 2</a>
                    <a href="../../modulo3/module3.php" class="list-group-item">Módulo 3</a>
                    <a href="../../modulo4/module4.php" class="list-group-item">Módulo 4</a>
                    <a href="../module5.php" class="list-group-item active">Módulo 5</a>
                    <ul class="list-group-item">
                        <a href="../modulo5.1/module5.1_inicio.php" class="list-group-item">Unidad 1</a>
                        <a href="module5.2_inicio.php" class="list-group-item active">Unidad 2</a>
                        <ul class="list-group-item">
                            <a href="module5.2_temas.php" class="list-group-item">Temas</a>
                            <a href="#" class="list-group-item active">Actividad</a>
                            <a href="module5.2_eval.php" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 3</a>
                        <a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 4</a>
                        <a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 5</a>
                    </ul>
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
                <h1><br>Unidad 2: Anuncios de bien público (ABP)</h1>
                <form action="../../../../queries/actividad.php?id_act=m5u2a1" method="post">
                <div class="card mt-4">
                    <div class="card-body">
                        <p class="card-text">
                            Periódicamente los gobiernos desean comunicarse con sus ciudadanos a través de los medios
                            para alcanzar algún objetivo de política pública. Un ejemplo clásico son las campañas de
                            salud pública para limitar la propagación del SIDA y el VIH, campañas para incentivar a los
                            habitantes que usen redes anti-mosquito para reducir la malaria o campañas de
                            alfabetización. Estos se conocen como <strong>de servicio público (ASP)</strong>.
                        </p>
                        <h4>Lineamientos para un anuncio de servicio público</h4>
                        <p class="card-text">
                            Adaptado de Think Literacy www.edu.gov.on.ca/eng/…/thinkliteracy/library.html <br>
                            <ul>
                                <li><strong>Concepto:</strong> Diseñado por usted para alcanzar los objetivos de la
                                    organización/cliente y para explicar el propósito o la función de la campaña. </li>
                                <li><strong>Estrategias:</strong> Creativas (una explicación de sus ideas, incluyendo la
                                    descripción de cómo se pueden alcanzar los objetivos) y técnicas (qué medios se
                                    pueden utilizar, de qué forma, para alcanzar los objetivos del cliente). </li>
                                <li><strong>Audiencia:</strong> ¿Quién es su audiencia seleccionada? ¿A quién tiene que
                                    llegar? De una descripción detallada de su audiencia (por Ej. edad, género, raza,
                                    clase, nacionalidad, qué nivel de familiaridad tienen con esta forma de medio,
                                    etc.).</li>
                                <li><strong>Texto:</strong> El mensaje general de la campaña tiene que estar vinculado
                                    con los objetivos y con la estrategia creativa mencionada anteriormente (es decir,
                                    información clave que se incluye, el punto de vista, la trama, las imágenes de
                                    hombres y mujeres, el lenguaje, las costumbres y el comportamiento de los
                                    personajes). Considere el uso de afirmaciones específicas o un recurso emocional.
                                </li>
                                <li><strong>Producción: </strong>Un bosquejo de lo que se va a producir. Esto está
                                    vinculado con su estrategia técnica. Tome en cuenta las ubicaciones, trabajo de
                                    cámara, sonido, doblaje, efectos especiales, gráficas, animación, etc. Decida qué
                                    tecnologías pueden transmitir el mensaje que usted desea y complementen su mensaje.
                                </li>
                                <li><strong>Componente de la industria/negocio:</strong> Explique y defienda sus
                                    elecciones de dónde y cuándo usted quiere pasar el ASP. También un ASP de
                                    televisión, radio o Internet debe incluir los elementos de publicidad que se
                                    presentan en estos medios, como un eslogan/ jingle, recursos específicos o
                                    afirmaciones, un guión que incluya el escenario apropiado, accesorios y vestimenta,
                                    un storyboard que incluya un video adecuado y/o direcciones de audio. </li>
                            </ul>
                            <ul>Visite uno de los sitios de servicio público: (Estos sólo se incluyen como fuentes de
                                muestra para ilustrar la actividad que se describe a continuación. Se pueden utilizar
                                otras fuentes, apropiadas para las diversas regiones, en su lugar)
                                <li><a href="http://www.un.org.za/public-service-announcement-on-the-effects-of-drugs"
                                        target="_blank">United Nations in South Africa</a></li>
                                <li><a href="http://www.unodc.org/unodc/en/human-trafficking/human-trafficking-public-serviceannouncements.html"
                                        target="_blank">United Nations Office on Drugs and Crime</a></li>
                            </ul>
                            <ol>
                                <li>Explique los efectos que se crean a través del uso de la toma de cámara y los
                                    ángulos. Explique cómo se puede utilizar el sonido para transmitir un significado
                                </li>
                                <textarea name="preg1" style="width: 80%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                                <li>Desarrolle un plan original de un ASP para un tema social o cultural importante.
                                    Haga una lluvia de ideas de los posibles temas y utilícelo como la base para un ASP.
                                    Hable sobre el propósito y la audiencia. Esta discusión a su vez, ayudará a dar
                                    forma al mensaje que se quiere transmitir. Tome en cuenta la información importante
                                    y el mensaje principal que tienen que transmitir</li>
                                <textarea name="preg2" style="width: 80%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                            </ol>
                            Ahora tome en cuenta a quién usted quiere llegar y cómo. La información y el mensaje deben
                            estar dirigidos a una audiencia específica En un papel, describa un concepto y desarrolle
                            una lista de estrategias que se pueden utilizar para crear un ASP. Esto puede incluir
                            estrategias creativas (el contenido de las ideas de un ASP) y las estrategias técnicas (el
                            componente de producción). <br><br>
                            <ol>
                                <li value="3">Haga un diseño preliminar de un ASP, incluyendo una oración que describa
                                    el concepto, las estrategias técnicas y creativas y la audiencia.</li>
                                <textarea name="preg3" style="width: 80%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                            </ol>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module5.2_temas.php" class="btn btn-success">Anterior</a>
                    <button id="btn-siguiente" class="btn btn-success" type="submit">Siguiente</button>
                    <!-- <a href="module5.2_eval.php" class="btn btn-success">Siguiente</a> -->
                </center>
                </form>
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