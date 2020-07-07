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
    include '../../../queries/estadoMod.php'; estadoMod(4,1);
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
          <a href="#" class="list-group-item active">Módulo 4</a>
          <ul class="list-group-item">
            <a href="modulo4.1/module4.1_inicio.php" class="list-group-item">Unidad 1</a>
            <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
            <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
            <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 4</a>
          </ul>
          <a href="../modulo5/module5.php" class="list-group-item">Módulo 5</a>
          <a href="../modulo6/module6.php" class="list-group-item">Módulo 6</a>
          <a href="../modulo7/module7.php" class="list-group-item">Módulo 7</a>
          <a href="../modulo8/module8.php" class="list-group-item">Módulo 8</a>
          <a href="../modulo9/module9.php" class="list-group-item ">Módulo 9</a>
          <a href="../modulo10/module10.php" class="list-group-item">Módulo 10</a>
          <a href="../modulo11/module11.php" class="list-group-item">Módulo 11</a>
          <a href="../modulo12/module12.php" class="list-group-item">Módulo 12</a>
        </div>
      </div>
      <!-- /.col-lg-3 -->
      <div class="col-lg-9">
        <h1><br>Módulo 4: Lenguaje en los medios e información</h1>
        <div class="card mt-4">
          <div class="card-body">
            <h4>Antecedentes y fundamentos</h4>
            <p class="card-text">
              “El medio es el mensaje”, ahora es una famosa cita que Marshall Mcluhan hizo en 1964. Si bien el medio
              puede afectar a la forma en cómo se reciben los mensajes, los propios antecedentes/ experiencia de los
              usuarios/audiencias también pueden afectar la interpretación de los mensajes. Un primer paso importante
              para ser alfabetizados en medios e información es entender cómo la información, las ideas y el significado
              se comunican a través de y por varios medios y otros proveedores de información, tales como bibliotecas,
              archivos, museos e Internet. Cada medio tiene su propio “lenguaje” o gramática que trabaja de forma única
              para trasmitir un mensaje. El “lenguaje” en este sentido se refiere a los ingredientes técnicos y
              simbólicos, los códigos o las convenciones que los profesionales de los medios e información pueden
              seleccionar y usar en un esfuerzo por comunicar ideas, información y conocimiento. Los códigos técnicos
              incluyen sonido, ángulos de cámara, tipos de tomas e iluminación. Por ejemplo, pueden incluir música
              siniestra para comunicar peligro en una película, o utilizar ángulos altos para crear un sentimiento de
              poder en una fotografía. Los códigos simbólicos incluyen el lenguaje, el vestuario o las acciones del
              personaje, símbolos icónicos que son fáciles de entender. Por ejemplo, una rosa roja puede usarse
              simbólicamente para comunicar un romance, o un puño cerrado puede usarse para representar la ira. Los
              lenguajes de los medios también pueden incluir el uso repetido de palabras particulares, frases o
              imágenes, también conocidas como lenguaje verbal o visual. Cuando estudiamos los lenguajes de los medios,
              hay tres preguntas principales que debemos tomar en cuenta: ¿Cómo las audiencias de los medios entienden
              el lenguaje de los medios? ¿Cuáles son algunos de los principales códigos y convenciones que las personas
              que trabajan en los medios e información utilizan hoy en día? Otra pregunta importante es si distintas
              personas pueden obtener distintos significados que provienen de un mismo texto o pieza de información.
              Este módulo busca capacitar a los profesores para que adquieran conocimiento sobre una variedad de
              lenguajes de los medios para permitirles que entiendan las formas en las cuales la información y los
              mensajes pueden ser transmitidos y cómo su interpretación de la información o de las ideas de los medios y
              de otros proveedores de información pueden estar relacionadas con el tipo de lenguajes utilizados.
            </p>
          </div>
        </div>
        <!-- /.card -->
        <br>
        <center>
          <a href="../modulo3/modulo3.5/module3.5.1_act2.php" class="btn btn-success">Anterior</a>
          <a href="modulo4.1/module4.1_inicio.php" class="btn btn-success">Siguiente</a>
        </center>
        <?php 
          include '../../../functions/paginacion.php';
          pag(1);
        ?>
        <p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative Commons
            Reconocimiento Compartir igual 4.0</a></p>
        <br />
        <br />
        <br />
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