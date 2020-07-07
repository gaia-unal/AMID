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
                        <a href="module5.3_inicio.php" class="list-group-item active">Unidad 3</a>
                        <ul class="list-group-item">
                            <a href="module5.3_temas.php" class="list-group-item">Temas</a>
                            <a href="#" class="list-group-item active">Actividad</a>
                            <a href="module5.3_eval.php" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(3)" class="list-group-item inactive">Unidad 4</a>
                        <a href="#" onclick="inactivo(3)" class="list-group-item inactive">Unidad 5</a>
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
                <h1><br>Unidad 3: Publicidad: El proceso creativo</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>La publicidad y el auspicio – ubicación, mensajes y audiencia</h4>
                        <p class="card-text">
                            Haga un tour imaginario de su escuela/colegio/campus y vecindario. Identifique los tipos de
                            publicidad, los anuncios de servicio público, promociones o auspicios que existan. Explique
                            por qué los negocios e instituciones pueden escoger tener sus nombres, productos o logos
                            expuestos ahí. Explique en qué formas estos patrocinios/promociones difieren de la
                            publicidad “tradicional. <br>
                            <textarea name="preg1" id="p1-r" cols="80" rows="5" placeholder="Escriba su respuesta aquí"
                                spellcheck="true"></textarea> <br>
                            Haga una inspección de una colección de revistas, vea anuncios de televisión y visite un
                            número de sitos en la red de compañías importantes. Describa las estrategias de publicidad
                            que se usan en los ejemplos actuales. Elija un número de anuncios para examinar de cerca.
                            Describa la “personalidad” del producto que se presenta en cada anuncio e identifique las
                            emociones que el publicista trata de alcanzar. <br> ¿Qué promesas o soluciones ofrece el
                            anuncio o el ASP? ¿Cómo son de realistas? ¿Qué visiones de alegría o éxito comunican? <br>
                            <textarea name="preg2" id="p2-r" cols="80" rows="5" placeholder="Escriba su respuesta aquí"
                                spellcheck="true"></textarea> <br>
                            Identifique la información, los mensajes y los valores que se transmiten en cada anuncio.
                            Hable sobre la necesidad de una clara distinción entre el contenido editorial y
                            publicitario. <br> ¿Qué tipo de afirmaciones se hacen en estos anuncios? ¿Quizá algún tipo
                            de información es engañosa o no es clara? Basándose en su análisis, ¿qué recomendaciones
                            haría usted a la audiencia de este anuncio? En otras palabras, ¿aceptaría usted la
                            información que se presenta en este anuncio? ¿Por qué o por qué no? ¿Haría usted algún
                            cambio para que la información o el mensaje fueran más exactos o completos? <br>
                            <textarea name="preg3" id="p3-r" cols="80" rows="5" placeholder="Escriba su respuesta aquí"
                                spellcheck="true"></textarea> <br>
                            La colocación de un producto quiere decir el poner un producto comercial prominente en un
                            programa de radio o televisión en particular o en un libro, y también cada vez más en
                            Internet, sin identificarlo como publicidad, para satisfacer al fabricante del producto que
                            ha patrocinado el programa (es decir: ha pagado completamente o ha cubierto algunos de los
                            costos asociados). Algunos reguladores permiten la colocación del producto bajo la condición
                            de que los espectadores estén claramente informados acerca de la colocación del producto al
                            inicio o fin del programa. <br> Elija ejemplos de colocación del producto: ¿Están
                            identificados como tal? Si en su país existen regulaciones para la colocación de productos,
                            ¿qué acciones pueden tomar los ciudadanos? ¿Cuál es el mensaje del producto que se transmite
                            en relación al contexto? ¿Qué mensajes se transmiten a través del producto en sí, así como
                            en el contexto en el que está? ¿Acaso un contexto diferente o colocación cambiaría la imagen
                            del producto y su mensaje? <br>
                            <textarea name="preg4" id="p4-r" cols="80" rows="5" placeholder="Escriba su respuesta aquí"
                                spellcheck="true"></textarea>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module5.3_temas.php" class="btn btn-success">Anterior</a>
                    <a href="module5.3_eval.php" class="btn btn-success">Siguiente</a>
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