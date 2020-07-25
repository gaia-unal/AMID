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
                    <a href="../../modulo5/module5.php" class="list-group-item">Módulo 5</a>
                    <a href="../module6.php" class="list-group-item active">Módulo 6</a>
                    <ul class="list-group-item">
                        <a href="../modulo6.1/module6.1_inicio.php" class="list-group-item">Unidad 1</a>
                        <a href="module6.2_inicio.php" class="list-group-item active">Unidad 2</a>
                        <ul class="list-group-item">
                            <a href="module6.2_temas.php" class="list-group-item">Temas</a>
                            <a href="#" class="list-group-item active">Actividad</a>
                            <a href="module6.2_eval.php" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="../modulo6.3/module6.3_inicio.php" class="list-group-item">Unidad 3</a>
                    </ul>
                    <a href="../../modulo7/module7.php" class="list-group-item">Módulo 7</a>
                    <a href="../../modulo8/module8.php" class="list-group-item">Módulo 8</a>
                    <a href="../../modulo9/module9.php" class="list-group-item">Módulo 9</a>
                    <a href="../../modulo10/module10.php" class="list-group-item">Módulo 10</a>
                    <a href="../../modulo11/module11.php" class="list-group-item">Módulo 11</a>
                    <a href="../../modulo12/module12.php" class="list-group-item">Módulo 12</a>
                </div>
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <h1><br>Unidad 2: Uso de las Nuevas Tecnologías Mediáticas en la Sociedad – Comunicación de Masas y Digital</h1>
                <form action="../../../../queries/actividad.php?id_act=m6u2a1" method="post">
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Describir el uso de una o dos formas de nuevos medios para compartir conocimientos e
                            información sobre temas de actualidad en la sociedad</h4>
                        <p class="card-text">
                            El gobierno electrónico tiene que ver con las nuevas formas de gobierno y las que se
                            desarrollan donde las TICs juegan un papel principal. El uso de las TICs ha influido en la
                            forma de gobierno en una variedad de formas. Estas incluyen:
                            <ol>
                                <li>Democracia electrónica que facilita la participación a través del mayor
                                    acceso a la información y conocimiento que es la base para la toma de decisiones.
                                </li>
                                <li>Los servicios electrónicos que es una forma de automatizar el trabajo tedioso como
                                    llenar formolarios de impuestos, revisar el estatus de las aplicaciones etc.; y</li>
                                <li>La administración en línea que se utiliza para mejorar los procesos del gobierno y
                                    el funcionamiento interno del sector público con los nuevos procesos de información
                                    ejecutados por las TICs. Por lo tanto, las TICs pueden ser una forma muy útil para
                                    mejorar el proceso de autoridad.
                                </li>
                            </ol>
                            La E-gobernanza y el gobierno electrónico son conceptos relacionados con una diferencia
                            muy sutil entre los dos. La última se refiere a los sistemas por los cuales los procesos del
                            gobierno son automatizados mientras que la primera se refiere a los procesos que se hacen
                            abiertos e inclusivos (cf. UNESCO 2007).
                            <ol><br>
                                <li>Según el texto anterior, ¿Qué tipo de proyecto de e-gobernanza usted
                                    recomendaría para su gobierno local? ¿Por qué?</li>
                                <textarea name="preg1" style="width: 90%;" rows="8" minlength="1" maxlength="300" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true"  ></textarea><br/>
                            </ol>
                        </p>
                        <h4>Evaluar cómo se usan los nuevos medios en la comunicación de masas y el impacto en las
                            instituciones democráticas y en sus procesos en la sociedad</h4>
                        <p class="card-text">
                            El acceso a las TICs o nuevas tecnologías es igual de importante para el empoderamiento de
                            los hombres, las mujeres, las personas discapacitadas, los otros grupos marginalizados, las
                            poblaciones étnicas e indígenas así como para aquellos que viven en comunidades remotas.
                            <ol>
                                <li value="2">¿Cree usted que las mujeres tienen igual acceso a las tecnologías que los
                                    hombres?</li>
                                <textarea name="preg2" style="width: 90%;" rows="8" minlength="1" maxlength="300" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true"  ></textarea><br/>
                                <li>¿Hasta qué punto cree que las personas con discapacidades o personas que viven en
                                    comunidades remotas tienen acceso?</li>
                                <textarea name="preg3" style="width: 90%;" rows="8" minlength="1" maxlength="300" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true"  ></textarea><br/>
                                <li>¿Qué se debería hacer si ciertos grupos están marginalizados al acceso a las nuevas
                                    tecnologías?</li>
                                <textarea name="preg4" style="width: 90%;" rows="8" minlength="1" maxlength="300" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true"  ></textarea><br/>
                            </ol>
                        </p>
                        <h4>Analizar los efectos de la comunicación digital en la vida social y política de la sociedad
                        </h4>
                        <p class="card-text">
                            <ol>
                                <li value="5">¿Cómo cree usted que la tecnología de los teléfonos móviles ha ayudado a
                                    cerrar la brecha de comunicación entre los ricos y los pobres en la sociedad?</li>
                                <textarea name="preg5" style="width: 90%;" rows="8" minlength="1" maxlength="300" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true"  ></textarea><br/>
                                <li>¿Cuáles son los riesgos y desafíos que los profesores podrían encontrar al usar las
                                    redes sociales para propósitos educativos?</li>
                                <textarea name="preg6" style="width: 90%;" rows="8" minlength="1" maxlength="300" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true"  ></textarea><br/>
                            </ol>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module6.2_temas.php" class="btn btn-success">Anterior</a>
                    <button id="btn-siguiente" class="btn btn-success" type="submit">Siguiente</button>
                    <!-- <a href="module6.2_eval.php" class="btn btn-success">Siguiente</a> -->
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