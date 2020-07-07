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
                        <a href="../modulo5.2/module5.2_inicio.php" class="list-group-item">Unidad 2</a>
                        <a href="../modulo5.3/module5.3_inicio.php" class="list-group-item">Unidad 3</a>
                        <a href="module5.4_inicio.php" class="list-group-item active">Unidad 4</a>
                        <ul class="list-group-item">
                            <a href="module5.4_temas.php" class="list-group-item">Temas</a>
                            <a href="module5.4_act.php" class="list-group-item">Actividad</a>
                            <a href="#" class="list-group-item active">Evaluación</a>
                        </ul>
                        <a href="../modulo5.5/module5.5_inicio.php" class="list-group-item">Unidad 5</a>
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
                <h1><br>Unidad 4: Publicidad y el campo político</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Evaluación</h4>
                        <p class="card-text">
                            <strong>Lea la siguiente publicidad política sucedida en Estados Unidos durante la campaña
                                de Donal Trump a la presidencia y luego analícelo utilizando los lineamientos de la
                                Unidad 2</strong> <br>
                            Entre los ejemplos de marketing político resulta interesante seguir con otro de los más
                            actuales. Que, precisamente, está ligado con dos de los canales más potentes del momento:
                            Facebook e Instagram.<br>
                            Se trata de la historia de cómo la campaña de Trump utilizó diferentes datos para hacer
                            anuncios personalizados en redes. De hecho, invirtió 150 millones de dólares en anuncios de
                            Facebook e Instagram en las últimas semanas de elecciones. De esta manera conseguiría
                            influenciar a los afroamericanos y las mujeres más jóvenes.<br>
                            Todo gracias a una base de datos personalizada llamada “Proyecto Álamo“. Esta base de datos
                            se creó con datos de diferentes orígenes. Tanto digitales como aportes personales y de
                            simpatizantes a la causa. Así, también, conseguiría quitar algo de esperanza a los
                            seguidores de Hillary Clinton.<br>
                            Tal y como explicó un alto cargo del partido de Trump en BusinessWeek, se pusieron en marcha
                            tres operaciones principales para esa supresión de votantes. Y las tres estaban orientadas a
                            los tres sectores en los que Clinton estaba centrándose:
                            <ul>
                                <li>Los liberales blancos.</li>
                                <li>Las mujeres jóvenes.</li>
                                <li>Los afroamericanos.</li>
                            </ul>
                            Sin embargo, los mejores ejemplos de marketing político son los que cumplen sus metas de la
                            manera menos esperada. Pero, además, haciendo uso de herramientas y recursos que están al
                            alcance de cualquiera.<br>
                            Por ejemplo, el equipo digital de Trump creó una animación del estilo de South Park de
                            Hillary Clinton con un título muy conciso: “Super depredador“. Mientras que el texto que se
                            incluía en el contenido persuadía de la siguiente manera: “Hillary piensa que los
                            afroamericanos son súper-depredadores”. <br>
                            Pero eso no fue todo. Esta imagen consiguió llegar a esos tres segmentos mediante las
                            publicaciones de páginas ocultas de Facebook.<br>
                            Tras las elecciones, Mark Zuckerberg compartió su opinión sobre este hecho. Apuntó que la
                            idea de que las “noticias falsas” de Facebook fueron las que influyeron en las elecciones
                            era una idea bastante loca. Pero lo cierto es que esta inversión en la red social tuvo una
                            gran influencia.<br>
                            A continuación, analice el ejemplo anterior según cada lineamiento:
                            <ol>
                                <li>Concepto</li>
                                <textarea name="preg1" id="p1-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Estrategias</li>
                                <textarea name="preg1" id="p1-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Audiencia</li>
                                <textarea name="preg1" id="p1-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Texto</li>
                                <textarea name="preg1" id="p1-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Producción</li>
                                <textarea name="preg1" id="p1-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Componente de la industria/negocio</li>
                                <textarea name="preg1" id="p1-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                            </ol>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module5.4_act.php" class="btn btn-success">Anterior</a>
                    <a href="../modulo5.5/module5.5_inicio.php" class="btn btn-success">Siguiente</a>
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