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
                        <a href="../../modulo1.1/module1.1_inicio.php" class="list-group-item">Unidad 1</a>
                        <a href="../module1.2_inicio.php" class="list-group-item active">Unidad 2</a>
                        <ul class="list-group-item">
                            <a href="../module1.2_temas.php" class="list-group-item">Temas</a>
                            <a href="module1.2.1.php" class="list-group-item active">Actividad</a>
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
                        <center>
                            <em>
                                <h4>Libertad de expresión, independencia editorial, pluralidad y diversidad</h4>
                            </em>
                        </center>
                        <p class="card-text">
                            <em>
                                La libertad de información y expresión apuntalan a la alfabetización mediática e
                                informacional. En este contexto, el uso del término relacionado con libertad de
                                información se refiere al acceso a la información pública. “La información es clave para
                                entender el mundo que nos rodea, para nuestra habilidad de encontrar un papel importante
                                en él, y para nuestra capacidad para sacar ventaja de los recursos que están disponibles
                                para nosotros. Cuando la información se concentra en las manos de pocos o sólo en las
                                manos de las élites, se reduce la habilidad del público tanto para tomar decisiones como
                                para evaluar decisiones. Un medio ético y pluralista puede garantizar la transparencia,
                                la rendición de cuentas y el estado de derecho” (Paquete de Herramientas para la
                                Libertad de Expresión de UNESCO) Los medios independientes obtienen su poder al informar
                                con responsabilidad a las comunidades que sirven. <br>
                                <ul>
                                    <li><strong>La libertad de expresión y la prensa</strong></li>
                                    La libertad de expresión es la libertad de expresar e intercambiar visones y
                                    opiniones sin miedo a amenazas o acciones punitivas. La libertad de expresión es un
                                    derecho fundamental de los seres humanos. La libertad de expresión protege no sólo a
                                    la libertad de palabra sino a cualquier acto de buscar, recibir o impartir
                                    información o ideas, sin tomar en cuenta el medio que se utilice. La libertad de
                                    prensa es un pilar fundamental de este derecho ya que posibilita que la libertad de
                                    expresión sea pública y compartida, por lo tanto, es esencial para la construcción y
                                    el apoyo a las comunidades y a la sociedad civil. La libertad de expresión puede
                                    promover un verdadero sentido de propiedad dentro de una sociedad al permitir que
                                    los individuos comunes puedan examinar y expresar diferentes pensamientos y
                                    opiniones. La libertad de expresión es una parte integral de la responsabilidad
                                    cívica, y es esencial para un pensamiento crítico. Las restricciones a la libertad
                                    de expresión se permiten sólo cuando dichas restricciones son necesarias para
                                    proteger la libertad de otros. Limitaciones, tales como las leyes que impiden el
                                    “discurso de odio” deberían ser definidas con precisión para evitar su mal
                                    uso.<br><br>
                                    <li><strong>El pluralismo en los medios</strong></li>
                                    Un sector de medios pluralistas – uno que atraviesa plataformas mediáticas
                                    (imprenta, transmisión, en línea) local (nacional, provincial y comunitario) y
                                    perspectivas políticas – ayuda a las sociedades a reflexionar de una mejor manera
                                    sobre sí mismas. Cuando la operación de los medios pasa a ser manejada por muchas
                                    manos, las opiniones que no son populares pueden encontrar aún un foro. Una mezcla
                                    eficaz de medios internacionales, nacionales y locales puede dar a las personas
                                    medios para participar en los procesos democráticos. La forma más amplia de
                                    diseminación de la información desde fuentes diversas y antagonistas contribuye al
                                    bienestar de las personas. Mientras los periódicos y transmisiones que son de
                                    distintos propietarios generalmente critican el contenido de otros, la concentración
                                    de los medios bajo una propiedad común está lejos de ofrecer una crítica mutua y
                                    podría terminar en medios promocionales o de defensoría. <br><br>
                                    <li><strong>Independencia editorial</strong></li>
                                    La independencia editorial se refiere a la libertad profesional que se da a los
                                    editores para que realicen decisiones editoriales sin interferencia de los
                                    propietarios de los medios o cualquier otro estado o actores no estatales. La
                                    independencia editorial se prueba, por ejemplo, cuando una organización de medios
                                    saca artículos que pueden ser impopulares para sus propietarios o anunciantes.
                                </ul>
                            </em>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module1.2.3.php" class="btn btn-success">Anterior</a>
                    <a href="module1.2.5.php" class="btn btn-success">Siguiente</a>
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
  <script src="assets/js/script.js"></script>
</body>

</html>