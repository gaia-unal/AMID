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
                        <a href="../modulo5.4/module5.4_inicio.php" class="list-group-item">Unidad 4</a>
                        <a href="module5.5_inicio.php" class="list-group-item active">Unidad 5</a>
                        <ul class="list-group-item">
                            <a href="module5.5_temas.php" class="list-group-item">Temas</a>
                            <a href="#" class="list-group-item active">Actividad</a>
                            <a href="module5.5_eval.php" class="list-group-item">Evaluación</a>
                        </ul>
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
                <h1><br>Unidad 5: Publicidad transnacional y "marcas super"</h1>
                <form action="../../../../queries/actividad.php?id_act=m5u5a1" method="post">
                <div class="card mt-4">
                    <div class="card-body">
                        <p class="card-text">
                            “La estrategia global de mercadeo es tan eficaz que se requiere una subversión consciente.
                            El mensaje “le venderemos una cultura”, ha dado como resultado una campaña global de
                            publicidad, un solo mensaje de publicidad que se utiliza en todos los países donde el
                            producto se fabrica o distribuye. La publicidad a nivel mundial es más económica y más
                            eficiente, a pesar de que no esté acorde con las condiciones locales” (Noreene Janus,
                            Advertising and Global Culture, en Cultural Survival Quaterly, 1983.)
                        </p>
                        <h4> El atractivo de las “súper marcas”</h4>
                        <p class="card-text">
                            Lleve a cabo una investigación en línea para determinar las estrategias de mercado que
                            utilizan las corporaciones transnacionales. Tome en cuenta visitar www.adage.com, el
                            sitio web de la industria de la publicación Advertising Age. <br>
                            Identifique las diversas estrategias que utilizan las principales compañías para promover
                            sus productos y “vender” una cultura. Hable lo que está implícito – directa o indirectamente
                            – sobre la cultura tradicional vs. la contemporánea <br>
                            <textarea name="preg1" style="width: 80%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br/>
                        </p>
                        <h4>Estrategias que se usan para crear las súper marcas</h4>
                        <p class="card-text">
                            Visite un sitio en la red de una corporación transnacional y elija uno de sus anuncios para
                            examinarlo de cerca. Identifique los elementos de este anuncio que hacen que sea llamativo.
                            Considere el uso de aseveraciones y el recurso emocional. Si es posible, compare este
                            anuncio con otro del mismo producto que esté enfocado a otra región o mercado. Identifique
                            las formas en las cuales se ha construido cada anuncio para el mercado seleccionado. <br>
                            Explore hasta qué punto es posible que una persona entienda el anuncio, incluso aún si él o
                            ella no entienden el idioma que se usa. (tome en cuenta lo que puede hacer que un anuncio y
                            sus imágenes sean “universales”) <br>
                            <textarea name="preg2" style="width: 80%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br/>
                        </p>
                        <h4>Temas claves y mensajes que se transmiten a través de las campañas globales de publicidad
                        </h4>
                        <p class="card-text">
                            “Ya que una característica importante de la cultura transnacional es la velocidad y el
                            aliento con los que se transmite, los sistemas de comunicación e información juegan un papel
                            importante, permitiendo que el mensaje sea distribuido globalmente a través de las series de
                            televisión, noticias, revistas, historietas, películas” (Noreene Janus, “Advertising and
                            Global Culture” en Cultural Survival Quarterly, 1983) y, quizá más importante hoy en día,
                            Internet <br>
                            Muchos críticos dicen que los anuncios transnacionales están centrados en
                            “vender” una cultura. Analice las maneras en las cuales se lleva a cabo esta “venta”.
                            Identifique los mensajes o los valores que se transmiten y escríbalos a continuación: <br>
                            <textarea name="preg3" style="width: 80%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br/>
                            Investigue los ejemplos actuales de publicidad que ilustran el poderoso papel de la
                            tecnología para comunicar y difundir el mensaje del anunciante. <br>
                            Explique a continuación cómo la tecnología se utiliza para tal fin <br/>
                            <textarea name="preg4" style="width: 80%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br/>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module5.5_temas.php" class="btn btn-success">Anterior</a>
                    <button id="btn-siguiente" class="btn btn-success" type="submit">Siguiente</button>
                    <!-- <a href="module5.5_eval.php" class="btn btn-success">Siguiente</a> -->
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