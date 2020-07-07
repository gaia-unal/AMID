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
        require "../../../queries/connectionDB.php";
$newConn= new Connection;
$newConn->connectionDB();
        require '../../../queries/activeSession.php';
        $rutaSession="../../../queries/"; include '../../header.php'; 
        include '../../../queries/estadoMod.php'; estadoMod(5,1);
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
                    <a href="#" class="list-group-item active">Módulo 5</a>
                    <ul class="list-group-item">
                        <a href="modulo5.1/module5.1_inicio.php" class="list-group-item">Unidad 1</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 4</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 5</a>
                    </ul>
                    <a href="../modulo6/module6.php" class="list-group-item">Módulo 6</a>
                    <a href="../modulo7/module7.php" class="list-group-item">Módulo 7</a>
                    <a href="../modulo8/module8.php" class="list-group-item">Módulo 8</a>
                    <a href="../modulo9/module9.php" class="list-group-item">Módulo 9</a>
                    <a href="../modulo10/module10.php" class="list-group-item">Módulo 10</a>
                    <a href="../modulo11/module11.php" class="list-group-item">Módulo 11</a>
                    <a href="../modulo12/module12.php" class="list-group-item">Módulo 12</a>
                </div>
                <br />
                <br />
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <h1><br>Módulo 5: Publicidad</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Antecedentes y fundamento</h4>
                        <p class="card-text">
                            La publicidad está relacionada con el uso pagado de los medios (impreso y electrónico) – en
                            términos de tiempo o espacio – para promover un mensaje, servicio o producto. Si hablamos en
                            general, existen dos tipos de publicidad: la publicidad comercial; y los anuncios de bien
                            público que a veces se los llama mercadeo social. Generalmente la publicidad comercial tiene
                            que ver con la promoción de una persona, producto, servicio o compañía para generar ventas
                            (por Ej. comerciales y anuncios impresos para compañías de confección, gaseosas, películas,
                            etc.), mientras que los anuncios de bien público tienen que ver con la promoción de mensajes
                            y servicios que benefician al público en general (por Ej. mensajes de salud y seguridad,
                            promoción literaria, etc.) Las dos formas de publicidad constituyen la fuente primaria de
                            ingresos para los medios tradicionales y nuevos. Los ingresos que los medios y otros
                            proveedores de información reciben de la publicidad se utilizan para pagar los costos
                            operativos y el desarrollo de contenido (por Ej. programas de televisión, material para el
                            sitio en red, artículos de revistas, programas radiales, etc.) Sin estos ingresos, la
                            mayoría de compañías de medios privados, que forman la parte central del mecanismo de
                            defensa para la democracia y las libertades de las que gozamos, podrían no sobrevivir. Es
                            importante que los medios atraigan los ingresos de la publicidad al ofrecer oportunidades o
                            “vehículos” que atraen a los publicistas o a los auspiciantes. Por lo tanto, a menudo los
                            medios desarrollan contenidos que están en la demanda pública o que atraerán a varios grupos
                            grandes de ciudadanos. Estos grupos se pueden clasificar de acuerdo a la edad, la raza, el
                            sexo, el ingreso, la persuasión política y más diferencias similares. De una u otra forma,
                            la publicidad alcanza casi todos los confines del mundo. Compañías, organizaciones,
                            ciudadanos y gobiernos utilizan la publicidad para promover los productos y servicios, y
                            para transmitir información, creencias y valores. La información o mensajes que se
                            transmiten a través de la publicidad son esenciales para la toma de decisiones del público.
                            <br>
                            Dado el importante papel que tiene la publicidad en nuestras sociedades en la actualidad,
                            los profesores deben comprender qué es lo que implica la creación de una publicidad eficaz y
                            ser capaces de evaluar la publicidad como fuente de información. Más aún, es importante que
                            los profesores aprendan sobre los mecanismos que permiten a los ciudadanos retroalimentarse
                            sobre los anuncios de la industria y de los funcionarios del gobierno. Sin embargo, la
                            publicidad también puede tener un efecto negativo en los medios. La presión de los
                            anunciantes puede conducir a que los periodistas eviten escribir sobre temas controvertidos.
                            Puede llevar el contenido de interés público a favor del entretenimiento que atrae a una
                            audiencia en particular. A menos que exista una clara delimitación entre los editoriales y
                            el lado comercial de los medios, que cada vez es menor, entonces los intereses del negocio
                            de la compañía de medios pueden tener un impacto sobre el contenido y la cobertura de
                            noticias sin que esto sea evidente. Si bien las oportunidades de publicidad se han expandido
                            con la explosión de los medios y la tecnología, la industria continúa siendo regulada por
                            códigos específicos que tratan de mantener la confianza del público. Hablando en general,
                            estos códigos operan a nivel nacional y están creados por la industria de la publicidad.
                            Estos códigos están diseñados para ayudar a asegurar que la publicidad sea verdadera, justa
                            y precisa. En muchos países, los consumidores pueden acudir a los consejos de publicidad y
                            grupos de consumidores por si tienen preguntas o preocupaciones sobre las prácticas de la
                            industria. La publicidad en el presente ha ido más allá de su papel tradicional. Ya no sólo
                            está limitada a comerciales de televisión, anuncios en revistas o vallas publicitarias, en
                            la actualidad a la publicidad se la puede usar para más y más productos, mensajes
                            informativos e ideas, ahora se las puede presentar a través de los pop-ups en los sitos en
                            red, teléfonos móviles y otros dispositivos manuales, colocación de productos en películas y
                            programas de televisión, y acuerdos de auspicios, a medida que las compañías continúan
                            buscando nuevas formas de presentar su información al público. Los gobiernos, políticos y
                            organizaciones no-gubernamentales (ONGs) también utilizan estrategias de publicidad a medida
                            que tratan de promover o ganar la aprobación para sus políticas o programas, y en algunos
                            casos para mejorar su imagen. En muchos países, la base local de los comerciales no es
                            suficiente para mantener a todas las entidades mediáticas que existen. Por lo tanto, a
                            veces, las compañías mediáticas también deben depender de la publicidad de compañías
                            extranjeras así como de las de gobierno. Adicionalmente, las compañías internacionales y las
                            organizaciones que quieren llegar a las audiencias locales, compran espacios de publicidad
                            de los medios locales. En años recientes, hemos visto emerger las “supermarcas”: productos o
                            compañías cuyos esfuerzos de publicidad y marca se han “convertido en globales”.
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="../modulo4/modulo4.4/module4.4_inicio.php" class="btn btn-success">Anterior</a>
                    <a href="modulo5.1/module5.1_inicio.php" class="btn btn-success">Siguiente</a>
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