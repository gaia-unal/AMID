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
                        <a href="../module1.1_inicio.php" class="list-group-item active">Unidad 1</a>
                        <ul class="list-group-item">
                            <a href="../module1.1_temas.php" class="list-group-item">Temas</a>
                            <a href="module1.1.1.php" class="list-group-item active">Actividad</a>
                            <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 4</a>
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
                <h1><br>Unidad 1: Comprender la alfabetización mediática e informacional: una orientación</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Información de los proveedores</h4>
                        <p class="card-text">
                            <strong>Tema:</strong> Definición de "información" y "medios". <br><strong>Propósito de la
                                actividad:</strong> Explorar los roles en una variedad de medios de información.
                            <br><strong>Descripción: </strong> Utilice la descripción sobre proveedores de información
                            que se expone en la lectura <strong>Información sobre los proveedores</strong> y a partir de
                            ella escriba a continuación una lista de su elección <br>
                           <center>
                                <label class="space" for="p1">1.</label><input type="text" name="proveedor" id="p1" autofocus><br><br>
                                <label class="space" for="p2">2.</label><input type="text" name="proveedor" id="p2"><br><br>
                                <label class="space" for="p3">3.</label><input type="text" name="proveedor" id="p3"><br><br>
                                <label class="space" for="p4">4.</label><input type="text" name="proveedor" id="p4"><br><br>
                                <label class="space" for="p5">5.</label><input type="text" name="proveedor" id="p5"><br><br>
                            </center>
                            De los proveedores que se presentarán a continuación, determine que papel cumple. Por
                            ejemplo: Si uno de los proveedores de información es un Youtuber (proveedores de videos
                            sobre un tema específico en la plataforma YOUTUBE) que ofrece videos sobre temas de
                            matemáticas para el nivel de secundaria, marque el círculo frente al rol que dice "Facilitar
                            los proceso de enseñanza y aprendizaje".
                        </p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><strong>Rol</strong></th>
                                    <th>Instagrammer</th>
                                    <th>Bibliotecas virtuales</th>
                                    <th>Recursos digitales</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Informar</td>
                                    <td>
                                        <center>
                                            <input type="radio" class="form-check-input" name="" id="">
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <input type="radio" class="form-check-input" name="" id="">
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <input type="radio" class="form-check-input" name="" id="">
                                        </center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Educar</td>
                                    <td>
                                        <center>
                                            <input type="radio" class="form-check-input" name="" id="">
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <input type="radio" class="form-check-input" name="" id="">
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <input type="radio" class="form-check-input" name="" id="">
                                        </center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Facilitar los procesos de enseñanza y aprendizaje</td>
                                    <td>
                                        <center>
                                            <input type="radio" class="form-check-input" name="" id="">
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <input type="radio" class="form-check-input" name="" id="">
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <input type="radio" class="form-check-input" name="" id="">
                                        </center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Proveer acceso a todos los tipos de información (a menudo libre de costos,
                                        plural, confiable y sin restricciones)</td>
                                    <td>
                                        <center>
                                            <input type="radio" class="form-check-input" name="" id="">
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <input type="radio" class="form-check-input" name="" id="">
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <input type="radio" class="form-check-input" name="" id="">
                                        </center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Servir como una puerta hacia la información</td>
                                    <td>
                                        <center>
                                            <input type="radio" class="form-check-input" name="" id="">
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <input type="radio" class="form-check-input" name="" id="">
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <input type="radio" class="form-check-input" name="" id="">
                                        </center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Promover los valores universales y los derechos civiles tales como libertad de
                                        expresión e información</td>
                                    <td>
                                        <center>
                                            <input type="radio" class="form-check-input" name="" id="">
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <input type="radio" class="form-check-input" name="" id="">
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <input type="radio" class="form-check-input" name="" id="">
                                        </center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Servir como memoria colectiva de la sociedad</td>
                                    <td>
                                        <center>
                                            <input type="radio" class="form-check-input" name="" id="">
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <input type="radio" class="form-check-input" name="" id="">
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <input type="radio" class="form-check-input" name="" id="">
                                        </center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Recolectar información</td>
                                    <td>
                                        <center>
                                            <input type="radio" class="form-check-input" name="" id="">
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <input type="radio" class="form-check-input" name="" id="">
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <input type="radio" class="form-check-input" name="" id="">
                                        </center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Conservar el patrimonio cultural</td>
                                    <td>
                                        <center>
                                            <input type="radio" class="form-check-input" name="" id="">
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <input type="radio" class="form-check-input" name="" id="">
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <input type="radio" class="form-check-input" name="" id="">
                                        </center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Entretener</td>
                                    <td>
                                        <center>
                                            <input type="radio" class="form-check-input" name="" id="">
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <input type="radio" class="form-check-input" name="" id="">
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <input type="radio" class="form-check-input" name="" id="">
                                        </center>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module1.1.7.php" class="btn btn-success">Anterior</a>
                    <a href="module1.1.9.php" class="btn btn-success">Siguiente</a>
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
  <!-- <script src="assets/js/script.js"></script> -->
</body>

</html>