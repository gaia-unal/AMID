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
                        <a href="../../modulo1.2/module1.2_inicio.php" class="list-group-item">Unidad 2</a>
                        <a href="../module1.3_inicio.php" class="list-group-item active">Unidad 3</a>
                        <ul class="list-group-item">
                            <a href="../module1.3_temas.php" class="list-group-item">Temas</a>
                            <a href="module1.3.1.php" class="list-group-item active">Actividad</a>
                            <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(3)" class="list-group-item inactive">Unidad 4</a>
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
                <h1><br>Unidad 3: Interactuando con los medios y otros proveedores de información</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <p class="card-text">
                            A continuación encontrará preguntas resumen de los módulos expuestos anteriormente. De clic
                            en cada titulo para visualizarlas:
                            <center>
                                <table width="80%" border="1" bordercolor="#0000FF" cellspacing="10" cellpadding="10">
                                    <tr>
                                        <button class="btn btn-outline-success" data-toggle='modal'
                                            data-target='#lenguaje'>Lenguaje en los medios de información</button>
                                    </tr><br><br>
                                    <tr>
                                        <button class="btn btn-outline-success" data-toggle='modal'
                                            data-target='#informacion'>Representación en los medios de
                                            información</button>
                                    </tr><br><br>
                                    <tr>
                                        <button class="btn btn-outline-success" data-toggle='modal'
                                            data-target='#produccion'>Producción/contenido generado por
                                            usuarios</button>
                                    </tr><br><br>
                                    <tr>
                                        <button class="btn btn-outline-success" data-toggle='modal'
                                            data-target='#audiencia'>La audiencia como ciudadanos y
                                            usuarios/consumidores</button>
                                    </tr><br><br>
                                    <tr>
                                        <button class="btn btn-outline-success" data-toggle='modal'
                                            data-target='#servicio'>Los ciudadanos como usuarios/consumidores de los
                                            servicios de los proveedores de información</button>
                                    </tr>
                                </table>
                            </center>
                            <!-- Modal -->
                            <div class="modal fade" id="lenguaje" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Lenguaje en los medios de
                                                información: </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>En esta área se deben plantear y responder preguntas como:</p>
                                            <p>¿Cómo los medios utilizan diferentes técnicas de representación según la
                                                información que desean
                                                trasmitir?</p>
                                            <p>¿De qué manera los espectadores se identifican con la información
                                                transmitida?</p>
                                            <p>¿Cuales son los códigos o elementos clave de un medio específico?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="informacion" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Representación en los medios
                                                de
                                                información: </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>En esta área se plantea el análisis de imágenes o textos y del contexto
                                                en el
                                                que se está comunicando, a partir de ello responder:</p>
                                            <p>¿Quiénes son los actores beneficiados y perjudicados al aceptar las
                                                representaciones de los medios?</p>
                                            <p>¿De qué forma las imágenes presentadas en los medios influencian la
                                                percepción que se tiene sobre uno y
                                                sobre los demás miembros de la sociedad?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="produccion" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Producción/contenido generado
                                                por
                                                usuarios:</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Se orienta a identificar quién construye la información en los medios y
                                                por
                                                qué razón lo hace,
                                                contempla elementos como los derechos de expresión y comunicación del
                                                ciudadano, la libertad de opinión,
                                                la participación ciudadana activa y la alfabetización mediática e
                                                informacional digital.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="audiencia" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">La audiencia como ciudadanos
                                                y
                                                usuarios/consumidores:</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Los espectadores buscan que los medios comuniquen información
                                                considerando
                                                factores como la
                                                transparencia, la rendición de cuentas y la imparcialidad, generando
                                                confianza en el público.</p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="servicio" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Los ciudadanos como
                                                usuarios/consumidores de los servicios de los proveedores de
                                                información:
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>En esta área se examina la forma en que los medios seleccionan la
                                                información
                                                y los criterios que
                                                aplican para ello y su manera de recibir fondos y de generar ingresos
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div> <br>
                            <em>
                                <h4>Preguntas claves</h4>
                                <ul>
                                    <li>¿Cuál es el propósito de este texto mediático/ de información?</li>
                                    <li>¿Cómo se ha producido?</li>
                                    <li>¿Quién lo creó?</li>
                                    <li>¿A qué audiencia está dirigido? ¿Cómo lo sabe?</li>
                                    <li>¿Cuál es el principal mensaje?</li>
                                    <li>¿Quién se beneficia y qué ganan?</li>
                                    <li>¿Cuáles son mis necesidades de información?</li>
                                    <li>¿Cómo puedo identificar y definir esta necesidad?</li>
                                    <li>¿Acaso la información que yo necesito existe de la manera en que la necesito?
                                        ¿De lo contrario, que acción puedo tomar?</li>
                                    <li>¿Cómo entender, organizar y valorar la información hallada?</li>
                                    <li>¿Cómo puedo presentar esta información en formatos que se puedan utilizar?</li>
                                    <li>¿Cómo puedo preservar, almacenar y reutilizar, grabar y archivar la información?
                                    </li>
                                </ul>
                            </em>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="module1.3.1.php" class="btn btn-success">Anterior</a>
                    <a href="module1.3.3.php" class="btn btn-success">Siguiente</a>
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