<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AMID</title>
  
  <?php $this->load->view('initial/linkGenerico');?>
  <link href="<?php echo base_url();?>public/assets/modulos/mod1/css/partes.css" rel="stylesheet">

</head>

<body>
  <?php $this->load->view('initial/nav');?>

  <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="my-4">Módulos AMID</h1>
                <div class="list-group">
                <a href="<?php echo base_url();?>modulo1" class="list-group-item">Módulo 1</a>
				<a href="<?php echo base_url();?>modulo2" class="list-group-item">Módulo 2</a>
				<a href="<?php echo base_url();?>modulo3" class="list-group-item">Módulo 3</a>
				<a href="<?php echo base_url();?>modulo4" class="list-group-item">Módulo 4</a>
				<a href="<?php echo base_url();?>modulo5" class="list-group-item">Módulo 5</a>
				<a href="<?php echo base_url();?>modulo6" class="list-group-item">Módulo 6</a>
				<a href="<?php echo base_url();?>modulo7" class="list-group-item">Módulo 7</a>
                <a href="<?php echo base_url();?>modulo8" class="list-group-item active">Módulo 8</a>
                    <ul class="list-group-item">
                        <a href="<?php echo base_url();?>modulo8/unidad1" class="list-group-item">Unidad 1</a>
                        <a href="<?php echo base_url();?>modulo8/unidad2" class="list-group-item active">Unidad 2</a>
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo8/unidad2/temas" class="list-group-item">Temas</a>
                            <a href="#" class="list-group-item active">Actividad</a>
                            <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 3</a>
                    </ul>
                    <a href="<?php echo base_url();?>modulo9" class="list-group-item">Módulo 9</a>
				<a href="<?php echo base_url();?>modulo10" class="list-group-item">Módulo 10</a>
				<a href="<?php echo base_url();?>modulo11" class="list-group-item">Módulo 11</a>
				<a href="<?php echo base_url();?>modulo12" class="list-group-item">Módulo 12</a>
                </div>
                <br /><br />
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <h1><br>Unidad 2: Ambiente de Aprendizaje y Alfabetización Informacional</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>El Big6 (Gran6): Marco de seis etapas para la alfabetización informacional y la resolución
                            de problemas de información</h4>
                        <p class="card-text">
                        <div id="parte1" style="display:block;">
                                <dt>Etapa 1</dt>
                                <dd>Definición de las necesidades o problemas de información ¿Qué es lo
                                    que quiero conocer? ¿Qué problema estoy tratando de resolver? ¿Entiendo la
                                    naturaleza del problema o el tema que estoy investigando? ¿Puedo definir claramente
                                    mis necesidades de información o el problema? ¿Qué conocimiento previo tengo sobre
                                    el tema? ¿Cuánta información quiero sobre el tema?</dd>
                            </div>
                            <div id="parte2" style="display:none;">
                                <dt>Etapa 2</dt>
                                <dd>Estrategias para buscar información ¿Cuánto tiempo tengo para encontrar esta
                                    información? ¿Dónde debo buscar la información? Se debe guiar a los profesores hacia
                                    los mejores recursos para ciertos tipos de información y el por qué. Dependiendo del
                                    contexto, esto puede incluir:
                                    <ul>
                                        <li>Recursos primarios, que son las fuentes originales, en lugares en los que la
                                            información no se interpreta, tales como informes de investigación, recibos
                                            de venta, discursos, correos electrónicos, piezas de arte original,
                                            manuscritos, fotos, diarios, cartas personales, historias orales/entrevistas
                                            o informes diplomáticos;</li>
                                        <li>Fuentes secundarias, que son producidas por los proveedores de información,
                                            donde la información ha sido interpretada, analizada o resumida ( por Ej.
                                            libros académicos, revistas, críticas o interpretaciones); y</li>
                                        <li>Fuentes terciarias, que incluyen compilaciones, índices y otras fuentes
                                            organizadas (por Ej. abstractos, bibliografías, libros de referencia,
                                            enciclopedias, índices, cronologías, bases de datos, etc.) ¿Dónde busco, en
                                            la biblioteca física, Internet (incluyendo las bibliotecas digitales),
                                            museos, archivos, etc.? ¿A quién puedo solicitar ayuda?</li>
                                    </ul>
                                </dd>
                            </div>
                            <div id="parte3" style="display:none;">
                                <dt>Etapa 3</dt>
                                <dd>Localización y acceso Aquí se debe guiar a los profesores a buscar la información de
                                    una manera eficiente en las fuentes antes mencionadas en la Etapa 2. Esto debería
                                    incluir:
                                    <ol>
                                        <li>Consejos para buscar en Internet, incluyendo una búsqueda general y una
                                            búsqueda especializada en un campo en especial (por Ej. el país de los
                                            estudiantes); entender los nombres de los dominios (por Ej. edu.,gov., org.
                                            etc.), buscar en la red fotos y sonido (audio y video) y buscar en sitos
                                            académicos en la red (por Ej. Googlescholar); </li>
                                        <li>Usar el índice y la lista de contenidos para buscar eficazmente en un libro,
                                            y buscar dentro de los archivos electrónicos en PDF, etc. </li>
                                        <li>Utilizar las bibliotecas (buscar catálogos de bibliotecas, publicaciones
                                            periódicas, índices y abstractos y libros de referencia) </li>
                                        <li>Investigar bases de datos (ejemplos de bases de datos populares como
                                            AGRICOLA, AGRIS7CARIS, EBSCO o Expanded Academic ASAP, y otras en el país y
                                            la región de los estudiantes); consejos para búsqueda de bases de datos (
                                            búsquedas por palabras claves, identificación de sinónimos y variaciones de
                                            ortografía, búsqueda por tema o autor, combinar palabras claves como “y”,
                                            “o” y “no”, uso del truncamiento y caracteres comodín, y buscar por límites,
                                            tales como fecha, idioma, tipo de publicación y trabajos revisados por
                                            pares; y </li>
                                        <li>Utilizar la alimentación de RSS para recibir la información que usted
                                            necesita automáticamente.</li>
                                    </ol>
                                </dd>
                            </div>
                            <div id="parte4" style="display:none;">
                                <dt>Etapa 4</dt>
                                <dd>Evaluación crítica Criterio de evaluación necesario para valorar/validar la
                                    confiabilidad, autenticidad o calidad de la información en los libros, sitios en
                                    red, otros recursos en línea, etc.</dd>
                            </div>
                            <div id="parte5" style="display:none;">
                                <dt>Etapa 5</dt>
                                <dd>Síntesis ¿Qué es una tesis? ¿Cuál es mi tesis? ¿De qué forma se relaciona con el
                                    problema que quiero resolver? ¿Cómo puedo organizar la información relevante que
                                    proviene de múltiples fuentes de una manera eficaz? ¿Cómo presento la información?
                                    ¿Qué herramientas están disponibles? ¿Qué herramientas necesito?</dd>
                            </div>
                            <div id="parte6" style="display:none;">
                                <dt>Etapa 6</dt>
                                <dd>Uso de la información, compartir y distribución Aplicar la información que he
                                    localizado para resolver mi problema. Fuentes de referencia/rastreo, uso de la
                                    bibliografía/herramientas de referencia disponibles como zotex, refwork, etc.
                                    Herramientas que están disponibles para compartir, distribuir y cooperar con otros
                                    que tienen necesidades de información similares o problemas (por Ej. Google
                                    Documents, Wikis, Slash, etc.) Entendimiento de los derechos de autor y el plagio
                                </dd>
                            </div>
                            <center>
                                <div id="btnAtras">
                                    <a onclick="volver();">
                                        <img width=70 src="<?php echo base_url();?>public/assets/img/arrow_l.jpg">
                                    </a>
                                </div>
                                <div id="btnAdelante">
                                    <a onclick="avanzar();">
                                        <img width=70 src="<?php echo base_url();?>public/assets/img/arrow_r.jpg">
                                    </a>
                                </div>
                                </center>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo8/unidad2/temas" class="btn btn-success">Anterior</a>
                    <a href="<?php echo base_url();?>modulo8/unidad2/actividad2" class="btn btn-success">Siguiente</a>
                </center>
                <?php $this->load->view('initial/paginacion');?>

<br />
<p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative Commons
    Reconocimiento Compartir igual 4.0</a></p>
<br><br>
<!-- /.card -->
</div>
<!-- /.col-lg-9 -->
</div>
</div>
<!-- /.container -->

<?php $this->load->view('initial/footer');?>
<?php $this->load->view('initial/scriptGenerico');?>
<script src="<?php echo base_url();?>public/assets/modulos/mod8/js/arrows.js"></script>
</body>

</html>