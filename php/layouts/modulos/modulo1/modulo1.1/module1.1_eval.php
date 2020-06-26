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
  <link href="assets/css/estilo.css" rel="stylesheet">
</head>

<body>
  <?php require_once "../../../../queries/connectionDB.php"; 
  $newConn= new Connection;
  $newConn->connectionDB();
  ?>
  <?php require_once '../../../../queries/activeSession.php'; ?>
  <?php 
  // include "../../../../queries/evaluacion.php"; 
  ?>
  <?php $rutaSession="../../../../queries/"; include '../../../header.php'; ?>


  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <h1 class="my-4">Módulos AMID</h1>
        <div class="list-group">
          <a href="../module1.php" class="list-group-item active">Módulo 1</a>
          <ul class="list-group-item">
            <a href="module1.1_inicio.php" class="list-group-item active">Unidad 1</a>
            <ul class="list-group-item">
              <a href="module1.1_temas.php" class="list-group-item">Temas</a>
              <a href="recurso/module1.1.1.php" class="list-group-item">Actividades</a>
              <a href="#" class="list-group-item active">Evaluación</a>
            </ul>
            <a href="#" onclick="inactivo(1)" class="list-group-item inactive" id="unid-sgte">Unidad 2</a>
            <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
            <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 4</a>
          </ul>
          <a href="../../modulo2/module2.php" class="list-group-item">Módulo 2</a>
          <a href="../../modulo3/module3.php" class="list-group-item">Módulo 3</a>
          <a href="../../modulo4/module4.php" class="list-group-item">Módulo 4</a>
          <a href="../../modulo5/module5.php" class="list-group-item">Módulo 5</a>
          <a href="../../modulo6/module6.php" class="list-group-item">Módulo 6</a>
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
        <h1><br>Unidad 1: Comprender la alfabetización mediática e informacional: una orientación</h1>
        
        <form action="../../../../queries/evaluacion.php?id_und=m1u1" method="post">

        <div class="card mt-4">
          <div class="card-body">
            <h4>Evaluación</h4>
            <p class="card-text">
              <div><a
                  href="https://www.elespectador.com/noticias/el-mundo/cucuta-un-oasis-para-los-venezolanos-antes-de-las-presidenciales-en-su-pais-articulo-789059"
                  target="_blank"><img class="noticia" src="assets/img/noticia.png" alt="noticia"></a></div><br>
              La edición virtual del periódico El Espectador, del 17 de mayo de 2018, presenta un artículo titulado
              "Cúcuta, un oasis para los venezolanos antes de las presidenciales en su pais" <a
                href="https://www.elespectador.com/noticias/el-mundo/cucuta-un-oasis-para-los-venezolanos-antes-de-las-presidenciales-en-su-pais-articulo-789059"
                target="_blank">(Enlace)</a>. Uno de los apartes del articulo expresa: <br><br>
              <center>
                <em>
                  "Los cruces fronterizos del departamento colombiano de Norte de Santander, principal conexión con
                  Venezuela, son testigos de la odisea de las cerca de 50.000 personas que entran y salen de ese país a
                  diario por estas fechas, unos 15.000 más de lo habitual. <br>
                  Lo hacen para abastecerse de alimentos, medicinas y artículos de higiene para los días venideros
                  porque, según dicen, no saben lo que pueda pasar después de las elecciones presidenciales del domingo
                  20, por lo cual la frontera se cerrará antes".
                </em>
              </center>
              <br>
              <strong>Marque: </strong>¿Qué rol cumple el texto?<br> <br>
              
              <input class="space" type="radio" name="pre1" id="resp1" onclick="incorrecto()" value="1" required>
              <label for="resp1">Entretener</label> <br>

              <input class="space" type="radio" name="pre1" id="resp2" onclick="incorrecto()" value="1" required>
              <label for="resp2">Proveer acceso a todos los tipos de información </label> <br>

              <input class="space" type="radio" name="pre1" id="resp3" onclick="incorrecto()" value="1" required>
              <label for="resp3">Servir como una puerta hacia la información </label> <br>

              <input class="space" type="radio" name="pre1" id="resp4" onclick="incorrecto()" value="1" required>
              <label for="resp4">Promover los valores universales y los derechos civiles </label> <br>

              <input class="space" type="radio" name="pre1" id="resp5" onclick="correcto()" value="5" required>
              <label for="resp5">Informar </label> <br>

              <input class="space" type="radio" name="pre1" id="resp6" onclick="incorrecto()" value="1" required>
              <label for="resp6">Educar </label> <br>

              <input class="space" type="radio" name="pre1" id="resp7" onclick="incorrecto()" value="1" required>
              <label for="resp7">Facilitar los procesos de enseñanza y aprendizaje </label> <br>

              <input class="space" type="radio" name="pre1" id="resp8" onclick="incorrecto()" value="1" required>
              <label for="resp8">Servir como memoria colectiva de la sociedad </label> <br>

              <input class="space" type="radio" name="pre1" id="resp9" onclick="incorrecto()" value="1" required>
              <label for="resp9">Recolectar información</label> <br>

              <input class="space" type="radio" name="pre1" id="resp10" onclick="incorrecto()" value="1" required>
              <label for="resp10">Conservar el patrimonio cultural</label>
              
            </p>
          </div>
        </div>
        <!-- /.card -->
        <br>
        
        
        <center>
          <a href="recurso/module1.1.10.php" class="btn btn-success">Anterior</a>
          <!-- <a href="#"  class="btn btn-success" id="btn-siguiente" type="submit">Siguiente</a>   -->
          <button id="btn-siguiente"  class="btn btn-success" type="submit" onclick="evaluacion()">Siguiente</button>
             
        </center>
        </form>
        <?php
          
          include '../../../../functions/paginacion.php';
          pag(2);
          
          
        ?>
        <p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/">Licencia Creative
            Commons Reconocimiento Compartir igual 4.0</a></p>
        <br><br>
      </div>
      <!-- /.col-lg-9 -->
    </div>
  </div>
  <!-- /.container -->

  <?php $ruta="../../../../../assets"; include '../../../footer.php';?>

  

<!-- <script>
  function algo(){
    <?php 
      // 
      ?>
  }
</script>   -->

  <!-- Bootstrap core JavaScript -->
  <script src="../../../../../vendor/jquery/jquery.min.js"></script>
  <script src="../../../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="../../../../../assets/js/script.js"></script>
  <script src="assets/js/script.js"></script>


</body>




</html>

