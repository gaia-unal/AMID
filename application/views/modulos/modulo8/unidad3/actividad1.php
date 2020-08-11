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
                        <a href="<?php echo base_url();?>modulo8/unidad2" class="list-group-item">Unidad 2</a>
                        <a href="<?php echo base_url();?>modulo8/unidad3" class="list-group-item active">Unidad 3</a>
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo8/unidad3/temas" class="list-group-item">Temas</a>
                            <a href="#" class="list-group-item active">Actividad</a>
                            <a href="#" onclick="inactivoEva() class="list-group-item">Evaluación</a>
                        </ul>
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
                <h1><br>Unidad 3: Alfabetización Informacional Digital</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Enfoques pedagógicos y actividades</h4>
                        <p class="card-text">
                            Almacenamiento de la información de formato digital, permitiendo que sea accesible
                            utilizando una amplia gama de dispositivos, no como en otras formas de información
                            analógica. Este acceso flexible hace que la digitalización sea importante y también da
                            énfasis a la necesidad de aprender destrezas digitales junto con las destrezas de
                            información. Esencialmente, la alfabetización digital incluye el analizar, localizar,
                            organizar, evaluar, crear y utilizar la información utilizando la tecnología digital. Hable
                            sobre las ventajas de tener la información en un formato digital (transmisión eficaz,
                            almacenamiento, investigación, manipulación, compatibilidad, etc.)
                            <ol>
                                <li>Investigue en Internet y en otros recursos en línea, tales como bases de datos y
                                    bibliotecas electrónicas y recolecte información sobre un tema específico de
                                    investigación. Reduzca las fuentes de información para que calcen en su propósito de
                                    investigación. <br> Busque palabras claves, operaciones lógicas (por Ej. “y”, “o”) y
                                    determine a continuación qué elementos trabajan mejor y por qué</li>
                                <textarea name="preg1" id="p1-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Estudie un sitio en Internet que se utilice para dar cursos sobre educación a
                                    profesores o cualquier otro programa educativo. Revise cómo se organiza esta
                                    información y cómo se tiene acceso al sitio. <br> ¿Qué recursos de información
                                    digital se utilizan? ¿Cómo se integran los recursos digitales a los materiales del
                                    curso? Practique hacer uso de este sitio y hable sobre lo útil que puede ser para el
                                    aprendizaje y cuáles son las limitaciones. Hable sobre las ventajas y desventajas.
                                </li>
                                <textarea name="preg2" id="p2-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                Visite varios “blogs” y “wikis” que han sido creados por individuos o en colaboración
                                con otras personas.
                                <li>¿Qué tipo de intercambio de información se da en estos medios en línea? ¿Para qué
                                    propósito sirve la información? ¿Quién provee la información? ¿Cuáles cree usted que
                                    son las motivaciones y los motivos?</li>
                                <textarea name="preg3" id="p3-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Escriba a continuación, desde el punto de vista de los estudiantes, acerca de ¿qué
                                    información digital debería ser preservada? ¿Cuáles son los principales criterios de
                                    selección y las soluciones técnicas disponibles, y cómo se puede asegurar la
                                    sostenibilidad? ¿Cuáles son otros aspectos de este tema de preservación?</li>
                                <textarea name="preg4" id="p4-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                            </ol>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo8/unidad3/temas" class="btn btn-success">Anterior</a>
                    <a href="<?php echo base_url();?>modulo8/unidad3/actividad2" class="btn btn-success">Siguiente</a>
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