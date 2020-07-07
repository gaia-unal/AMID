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
  <!-- <link href="assets/css/estilo.css" rel="stylesheet"> -->
</head>

<body>
  <?php require "../../../../../queries/connectionDB.php";
$newConn= new Connection;
$newConn->connectionDB(); ?>
  <?php require '../../../../../queries/activeSession.php'; ?>  
  <?php $rutaSession="../../../../../queries/"; include '../../../../header.php'; ?>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="my-4">Módulos AMID</h1>
                <div class="list-group">
                    <a href="../../../modulo1/module1.php" class="list-group-item">Módulo 1</a>
                    <a href="../../../modulo2/module2.php" class="list-group-item">Módulo 2</a>
                    <a href="../../../modulo3/module3.php" class="list-group-item">Módulo 3</a>
                    <a href="../../module4.php" class="list-group-item active">Módulo 4</a>
                    <ul class="list-group-item">
                        <a href="../module4.1_inicio.php" class="list-group-item active">Unidad 1</a>
                        <ul class="list-group-item">
                            <a href="../module4.1_temas.php" class="list-group-item">Temas</a>
                            <a href="module4.1.1.php" class="list-group-item active">Actividad</a>
                            <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 4</a>
                    </ul>
                    <a href="../../../modulo5/module5.php" class="list-group-item">Módulo 5</a>
                    <a href="../../../modulo6/module6.php" class="list-group-item">Módulo 6</a>
                    <a href="../../../modulo7/module7.php" class="list-group-item">Módulo 7</a>
                    <a href="../../../modulo8/module8.php" class="list-group-item">Módulo 8</a>
                    <a href="../../../modulo9/module9.php" class="list-group-item">Módulo 9</a>
                    <a href="../../../modulo10/module10.php" class="list-group-item">Módulo 10</a>
                    <a href="../../../modulo11/module11.php" class="list-group-item">Módulo 11</a>
                    <a href="../../../modulo12/module12.php" class="list-group-item">Módulo 12</a>
                </div>
                <br />
                <br />
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <h1><br>Unidad 1: Lectura de medios y textos de información</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        A continuación escriba una definición de cada palabra listada, dando un ejemplo cercano a su
                        contexto
                        <ul>
                            <li>Código</li>
                            <textarea name="" id="" cols="80" rows="5"></textarea>
                            <li>Gesto</li>
                            <textarea name="" id="" cols="80" rows="5"></textarea>
                            <li>Lenguaje</li>
                            <textarea name="" id="" cols="80" rows="5"></textarea>
                            <li>Semiótica</li>
                            <textarea name="" id="" cols="80" rows="5"></textarea>
                            <li>Símbolo</li>
                            <textarea name="" id="" cols="80" rows="5"></textarea>
                            <li>Paralingüistica</li>
                            <textarea name="" id="" cols="80" rows="5"></textarea>
                            <li>Proxémica</li>
                            <textarea name="" id="" cols="80" rows="5"></textarea>
                            <li>¿Cuáles son las 3 formas de comunicación que considera usted que los estudiantes
                                utilizan más?</li>
                            1. <input type="text" name="" id=""> &nbsp &nbsp
                            2. <input type="text" name="" id=""> &nbsp &nbsp
                            3. <input type="text" name="" id="">
                        </ul>
                        <p class="card-text">
                            Seleccione aquellos elementos que <strong>no</strong> hacen parte de las formas de
                            comunicación virtual:
                            <ol>
                                <li><input type="checkbox" name="opc1" id="opc1" onclick="incorrecto(0)">Redes sociales
                                </li>
                                <li><input type="checkbox" name="opc2" id="opc2" onclick="correcto(1)">Foros</li>
                                <li><input type="checkbox" name="opc3" id="opc3" onclick="incorrecto(2)">Blogs</li>
                                <li><input type="checkbox" name="opc4" id="opc4" onclick="incorrecto(3)">Correo Electrónico
                                </li>
                                <li><input type="checkbox" name="opc5" id="opc5" onclick="correcto(4)">Oral</li>
                                <li><input type="checkbox" name="opc6" id="opc6" onclick="correcto(5)">Escrita</li>
                                <li><input type="checkbox" name="opc7" id="opc7" onclick="incorrecto(6)">Juegos en línea
                                </li>
                                <li><input type="checkbox" name="opc8" id="opc8" onclick="correcto(7)">Gráfica</li>
                            </ol>
                            <button class="btn btn-outline-success" onclick="term()">Validar</button>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module4.1.1.php" class="btn btn-success">Anterior</a>
                    <a href="module4.1.3.php" class="btn btn-success">Siguiente</a>
                </center>
                <?php
                    include '../../../../../functions/paginacion.php';
                    pag(3);
                ?>
        <p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative Commons
            Reconocimiento Compartir igual 4.0</a></p>
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
  <script src="assets/script.js"></script>
</body>

</html>