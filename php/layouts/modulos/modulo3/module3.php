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
    <?php require "../../../queries/connectionDB.php";
$newConn= new Connection;
$newConn->connectionDB();
        require '../../../queries/activeSession.php';
        $rutaSession="../../../queries/"; include '../../header.php'; 
        include '../../../queries/estadoMod.php'; estadoMod(3,1);
    ?>


    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="my-4">Módulos AMID</h1>
                <div class="list-group">
                    <a href="../modulo1/module1.php" class="list-group-item">Módulo 1</a>
                    <a href="../modulo2/module2.php" class="list-group-item">Módulo 2</a>
                    <a href="#" class="list-group-item active">Módulo 3</a>
                    <ul class="list-group-item">
                        <a href="modulo3.1/module3.1_inicio.php" class="list-group-item">Unidad 1</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 4</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 5</a>
                    </ul>
                    <a href="../modulo4/module4.php" class="list-group-item">Módulo 4</a>
                    <a href="../modulo5/module5.php" class="list-group-item">Módulo 5</a>
                    <a href="../modulo6/module6.php" class="list-group-item">Módulo 6</a>
                    <a href="../modulo7/module7.php" class="list-group-item">Módulo 7</a>
                    <a href="../modulo8/module8.php" class="list-group-item">Módulo 8</a>
                    <a href="../modulo9/module9.php" class="list-group-item">Módulo 9</a>
                    <a href="../modulo10/module10.php" class="list-group-item">Módulo 10</a>
                    <a href="../modulo11/module11.php" class="list-group-item">Módulo 11</a>
                    <a href="../modulo12/module12.php" class="list-group-item">Módulo 12</a>
                </div>
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <h1><br>Módulo 3: Representación en los medios de información</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Antecedentes y fundamento</h4>
                        <p class="card-text">
                            La representación en los medios puede tomar muchas formas. Vivimos en una cultura llena de
                            imágenes y diariamente estamos rodeados de representaciones mediáticas en los sitios de la
                            red, en la televisión, en las películas, en el reportaje de noticias y en los libros. Los
                            periodistas, autores, camarógrafos, anunciantes, publicistas y productores de películas
                            utilizan imágenes, audio y palabras escritas para transmitir la información sobre un evento,
                            una historia o un tema. Generalmente se ven limitados por el tiempo, el espacio, los
                            recursos y otras restricciones editoriales para preparar y presentar las historias al
                            público. Por lo tanto, dependiendo de la historia que se cuenta o del mensaje que se
                            transmita, a menudo es necesario “re-presentar” los temas o eventos refiriéndose a
                            características tales como raza, género, sexualidad, edad o clase. Inevitablemente, aquellos
                            que trabajan en los medios deben seleccionar el contenido que se va a presentar al público.
                            Sin embargo, esta selección a menudo no está libre de subjetividad y a veces lleva a
                            representaciones de estereotipos o sobre-simplificaciones, las cuales pueden ser utilizadas
                            para etiquetar a individuos y justificar creencias cerradas o actitudes. Esta puede que sea
                            o no la intención del autor o periodista/reportero. A veces está sujeta a la interpretación
                            del receptor (espectador, lector u oyente), donde los medios y los otros proveedores de
                            información se convierten en un instrumento de partidismo, conflicto o discriminación, los
                            medios, como es lógico, deberían ser responsables de sus acciones como cualquier otro actor
                            social. Sin embargo, como plataforma para debate público, es vital que los medios puedan
                            presentar una discusión e información sin control de ningún partido o gobierno. También
                            tenemos que entender que los medios y otros proveedores de información trabajan en un
                            contexto social y que ellos son actores sociales dentro de ese contexto social. Los medios
                            están influenciados por la sociedad y a la vez influyen a la sociedad. Tenemos que ver con
                            más profundidad el contexto nacional específico dentro del cual los medios particulares
                            operan. En el esfuerzo de ser alfabetizado en medios e información, debemos examinar las
                            imágenes de los medios o representaciones y analizar no sólo la imagen o el texto de los
                            medios en sí, sino también el contexto que rodea la imagen y el que a veces no vemos. Es
                            importante reconocer que mientras los medios tienen mucho poder para dirigir y desafiar a la
                            sociedad, también reflejan la sociedad al proveer los tipos de historias y representaciones
                            que exigimos y aceptamos. Muchas industrias mediáticas en varias regiones han desarrollado
                            voluntariamente códigos de diversidad, con el objetivo de garantizar que las industrias
                            mediáticas demuestren un compromiso con el contenido y con las iniciativas que son
                            inclusivas y diversas. Muchas industrias mediáticas también siguen un código de ética que
                            prohíbe el uso de material abusivo o discriminatorio basado en la raza, la etnia, la edad,
                            el género, la habilidad física o el estado marital. Las preguntas claves en este módulo
                            incluyen: ¿Quién se beneficia de la aceptación de representaciones inapropiadas de medios y
                            quién pierde? ¿De qué forma estas imágenes influyen en la forma en cómo nos vemos a nosotros
                            mismo y a otros? ¿De qué forma influye nuestro conocimiento y entendimiento del mundo más
                            allá de nuestra experiencia inmediata?
                            <br> Referencias: <a
                                href="http://unesco.mil-for-teachers.unaoc.org/modules/modulo-7-oportunidades-y-retos-en-internet/?lang=es">AMID</a>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="../modulo1/modulo1.4/module1.4.2_eval.php" class="btn btn-success">Anterior</a>
                    <a href="modulo3.1/module3.1_inicio.php" class="btn btn-success">Siguiente</a>
                </center>
                <?php
                    include '../../../functions/paginacion.php';
                    pag(1);
                ?>
                <br />
                <p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative
                        Commons Reconocimiento Compartir igual 4.0</a></p>
                <br><br>
                <!-- /.card -->
            </div>
            <!-- /.col-lg-9 -->
        </div>
    </div>

<?php $ruta="../../../../assets"; include '../../footer.php';?>

<!-- Bootstrap core JavaScript menu-->
<script src="../../../../vendor/jquery/jquery.min.js"></script>
<script src="../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- script unidad/evaluación inactiva -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../../../../assets/js/script.js"></script>
</body>

</html>