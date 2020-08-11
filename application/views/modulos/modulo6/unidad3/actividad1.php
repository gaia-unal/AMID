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
                <a href="<?php echo base_url();?>modulo6" class="list-group-item active">Módulo 6</a>
                    <ul class="list-group-item">
                        <a href="<?php echo base_url();?>modulo6/unidad1" class="list-group-item">Unidad 1</a>
                        <a href="<?php echo base_url();?>modulo6/unidad2" class="list-group-item">Unidad 2</a>
                        <a href="<?php echo base_url();?>modulo6/unidad3" class="list-group-item active">Unidad 3</a>
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo6/unidad3/temas" class="list-group-item">Temas</a>
                            <a href="#" class="list-group-item active">Actividad</a>
                            <a href="<?php echo base_url();?>modulo6/unidad3/evaluacion" class="list-group-item">Evaluación</a>
                        </ul>
                    </ul>
                    <a href="<?php echo base_url();?>modulo7" class="list-group-item">Módulo 7</a>
				<a href="<?php echo base_url();?>modulo8" class="list-group-item">Módulo 8</a>
				<a href="<?php echo base_url();?>modulo9" class="list-group-item">Módulo 9</a>
				<a href="<?php echo base_url();?>modulo10" class="list-group-item">Módulo 10</a>
				<a href="<?php echo base_url();?>modulo11" class="list-group-item">Módulo 11</a>
				<a href="<?php echo base_url();?>modulo12" class="list-group-item">Módulo 12</a>
                </div>
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <h1><br>Unidad 3: Usos de las Herramientas Interactivas de Multimedia, incluyendo los Juegos Digitales en las
                    Aulas</h1>
                    <?php echo form_open('modulo6/unidad3/evaluacion');$this->session->set_userdata('idAc','m6u3a1'); ?>
                <div class="card mt-4">
                    <div class="card-body">
                        <p class="card-text">
                            Los recursos educativos abiertos (REAs) son materiales y herramientas de aprendizaje –
                            incluyendo cursos completos, módulos, materiales de curso, libros de texto, videos,
                            exámenes, software y cualquier otro material (interactivo y no-interactivo), o técnicas –
                            que se utilizan para apoyar el acceso al conocimiento, en un formato de documento abierto,
                            entregado con una licencia abierta, permitiendo el uso libre, re-uso y adecuación a las
                            necesidades específicas de un cierto grupo de usuarios (es decir, estudiantes, capacitadores
                            de capacitadores, facilitadores, etc.).
                        </p>
                        <h4>Principios de los REA</h4>
                        <p class="card-text">
                            David Wiley es uno de los pioneros de los REA. Él y sus colegas han sugerido (Hilton et al.,
                            2010) que hay cinco principios básicos en la publicación abierta:
                            <ul>
                                <li>Re-utilizable: el nivel básico de apertura. El material se puede utilizar completo o
                                    parte para sus propios fines (por ejemplo, descargar un video educativo para verlo
                                    más tarde);</li>
                                <li>Re-distribuible: el material se puede compartir con otros (por ejemplo, puede enviar
                                    por mail un artículo digital a un colega);</li>
                                <li>Revisable: el material se puede adaptar, modificar, traducir, o cambiar (por
                                    ejemplo, tomar un libro en inglés y convertirlo en un audio libro en castellano);
                                </li>
                                <li>Re-mixable: puede tomar dos o más partes del recurso y combinarlas para crear un
                                    nuevo recurso (por ejemplo, tomar algunos podcasts de un libro y combinarlos con las
                                    dispositivas de otro curso para crear un nuevo trabajo);</li>
                                <li>Retenible: o sonservable significa que no hay restricciones con los derechos del
                                    material digital (DRM), es decir puede conservar el contenido para su uso, ya sea
                                    usted el autor, un instructor o un estudiante. Obtenido de: <a
                                        href="https://cead.pressbooks.com/chapter/10-2-recursos-educativos-abiertos-rea/"
                                        target="_blank">Link</a> </li>
                            </ul>
                        </p>
                        <p >
                            <h4> Objetivo:</h4>
                            Identificar el valor de las herramientas interactivas de multimedia, incluyendo sitios
                            interactivos en la red, presentaciones, discusiones en línea, blogs, Wiki, wikilibros,
                            libros electrónicos, podcasting, videocasting, vodcasting y juegos de enseñanza y
                            aprendizaje. </p>
                        <p class="card-text">
                            <strong>Herramientas interactivas de multimedia:</strong> Piense en la materia que usted
                            enseña. Utilizando un motor de búsqueda, identifique y haga una lista de las herramientas
                            interactivas de multimedia, incluyendo juegos digitales, elementos que se podrían utilizar
                            al dar una lección (o lecciones) específicas a un grupo de profesores. Debe identificar un
                            número de dichas herramientas. Dé prioridad a estas herramientas en términos de utilidad
                            para sus necesidades específicas.
                            <ul>
                                <li>¿Qué criterio utilizó?</li>
                                <textarea name="preg1" style="width: 90%;" rows="8" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br/>
                            </ul>
                            Investigue acerca de los criterios utilizados por expertos en el uso de herramientas
                            interactivas de multimedia en la educación. Ahora compare su criterio con aquel de los
                            expertos.
                            <ul>
                                <li>¿Cuáles son sus observaciones?</li>
                                <textarea name="preg2" style="width: 90%;" rows="8" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br/>
                                <li>¿Está de acuerdo con el criterio de los expertos?</li>
                                <textarea name="preg3" style="width: 90%;" rows="8" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br/>
                                <li>En su lista de herramientas interactivas de multimedia, ¿puede identificar
                                    herramientas que podrían alterar o facilitar de una manera importante la cooperación
                                    y discusión en el proceso de enseñanza-aprendizaje? ¿Por qué escogió esas
                                    herramientas?</li>
                                <textarea name="preg4" style="width: 90%;" rows="8" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br/>
                                <li>¿Cómo cree usted que las tecnologías de multimedia podrían permitir a los
                                    estudiantes y profesores interactuar con la información de una nueva forma,
                                    cambiar el contenido, y crear su propio conocimiento?</li>
                                <textarea name="preg5" style="width: 90%;" rows="8" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br/>
                            </ul>
                        </p>
                        <p class="card-text">
                            <p>
                                 <h4> Objetivos:</h4>
                                <ol>
                                    <li>Desarrollar habilidades sociales, intelectuales y espacio-temporales utilizando
                                        herramientas interactivas de multimedia, especialmente juegos</li>
                                    <li>Aplicar las herramientas interactivas de multimedia, especialmente los juegos
                                        digitales, para la enseñanza y el aprendizaje</li>
                                    <li>Utilizar herramientas/juegos interactivos de multimedia de baja y alta
                                        tecnología para exponer conceptos de temas académicos (por Ej. matemáticas,
                                        ciencias, estudios sociales, etc.)</li>
                                </ol>
                            </p>
                            <ul>
                                <li>¿De qué forma un juego de computadora le puede ayudar a pensar creativamente sobre
                                    temas globales?</li>
                                <textarea name="preg6" style="width: 90%;" rows="8" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br/>
                                <li>¿Cuáles son los resultados de aprendizaje con estos juegos?</li>
                                <textarea name="preg7" style="width: 90%;" rows="8" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br/>
                            </ul>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo6/unidad3/temas" class="btn btn-success">Anterior</a>
                    <button id="btn-siguiente" class="btn btn-success" type="submit">Siguiente</button>
                </center>
                <?php echo form_close(); ?>
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