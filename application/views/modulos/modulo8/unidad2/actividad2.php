<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AMID</title>
  
  <?php $this->load->view('initial/linkGenerico');?>
  <link href="<?php echo base_url();?>public/assets/modulos/mod1/css/estilo.css" rel="stylesheet">

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
                            <a href="<?php echo base_url();?>modulo8/unidad2/actividad1" class="list-group-item active">Actividad</a>
                            <a href="<?php echo base_url();?>modulo8/unidad2/evaluacion" class="list-group-item">Evaluación</a>
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
                        <h4>Actividad reflexión</h4>
                        <p class="card-text">
                            <ol>
                                <li>¿Está usted de acuerdo que las seis etapas del Big6 son los elementos claves de la
                                    alfabetización informacional? Si no es así, ¿qué es lo que usted añadiría y por qué?
                                    En realidad, ¿cree usted que estas seis etapas ocurren en un orden secuencial claro
                                    como se presentan?
                                </li>
                                <textarea name="preg1" id="p1-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea> <br>
                                Busque una revista impresa o en formato electrónico en la biblioteca de su
                                escuela/colegio (o la principal biblioteca en su ciudad o pueblo) sobre educación (por
                                Ej. educación de profesores, educación especial, educación comparativa, etc.). En la
                                revista, identifique un tema sobre el cual usted quiera conocer más. Haga un resumen de
                                los principales hallazgos/ temas en los artículos.
                                <li>¿Qué tan útil es la información para su práctica profesional como profesor? ¿La
                                    información es aplicable para el contexto de su país? De ser así, ¿de qué manera
                                    usted usaría esta información?</li>
                                <textarea name="preg2" id="p2-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Evalúe el ambiente de la escuela/colegio en relación a las necesidades de
                                    alfabetización informacional y escriba recomendaciones específicas que mejorarían la
                                    alfabetización informacional de los estudiantes</li>
                                <textarea name="preg3" id="p3-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>El Big6 y la resolución de problemas en información: utilice los recursos de
                                    información en la biblioteca para explorar un tema o un tema de actualidad (por Ej.
                                    derecho al voto, democracia, VIH/SIDA, etc.). Aplique las etapas del Big6 para
                                    explorar este tema.</li>
                                <textarea name="preg1" id="p1-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Utilice la tecnología de las computadoras para tener acceso a la información en
                                    temas de interés y presente la información (textual o numérica) en un cuadro o en un
                                    formato gráfico. Compare la cantidad, calidad y utilidad de la información de sus
                                    recursos bibliotecarios con la información del Internet</li>
                                <textarea name="preg2" id="p2-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Escriba a continuación sobre cómo el uso de la radio y la telefonía móvil está
                                    cambiando la cara de la generación de la información y su uso en su país.</li>
                                <textarea name="preg3" id="p3-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Escriba un ensayo sobre cómo el uso de la radio y la telefonía móvil está cambiando
                                    la cara de la generación de la información y su uso en su país. Presente sus
                                    descubrimientos por medio de una presentación en Power Point.</li>
                            </ol>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo8/unidad2/actividad1" class="btn btn-success">Anterior</a>
                    <a href="<?php echo base_url();?>modulo8/unidad2/evaluacion" class="btn btn-success">Siguiente</a>
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
<script src="<?php echo base_url();?>public/assets/modulos/mod"></script>
</body>

</html>