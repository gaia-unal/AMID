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
                        <a href="<?php echo base_url();?>modulo6/unidad2" class="list-group-item active">Unidad 2</a>
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo6/unidad2/temas" class="list-group-item">Temas</a>
                            <a href="<?php echo base_url();?>modulo6/unidad2/actividad1" class="list-group-item">Actividad</a>
                            <a href="#" class="list-group-item active">Evaluación</a>
                        </ul>
                        <a href="<?php echo base_url();?>modulo6/unidad3" class="list-group-item">Unidad 3</a>
                    </ul>
                    <a href="<?php echo base_url();?>modulo7" class="list-group-item">Módulo 7</a>
				<a href="<?php echo base_url();?>modulo8" class="list-group-item">Módulo 8</a>
				<a href="<?php echo base_url();?>modulo9" class="list-group-item">Módulo 9</a>
				<a href="<?php echo base_url();?>modulo10" class="list-group-item">Módulo 10</a>
				<a href="<?php echo base_url();?>modulo11" class="list-group-item">Módulo 11</a>
				<a href="<?php echo base_url();?>modulo12" class="list-group-item">Módulo 12</a>
                </div>
                <br />
                <br />
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <h1><br>Unidad 2: Uso de las Nuevas Tecnologías Mediáticas en la Sociedad – Comunicación de Masas y
                    Digital</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Evaluación</h4>
                        <p class="card-text">
                            <ol>
                                <li>Haga una investigación para un estudio de caso de cómo se utilizan los medios de
                                    masas y las nuevas tecnologías para la comunicación de masas, y cómo están
                                    influyendo en la vida diaria, los valores y opiniones del público. Por ejemplo,
                                    ¿cómo la tecnología de los teléfonos móviles ha ayudado a cerrar la brecha de
                                    comunicación entre los ricos y los pobres en la sociedad?
                                </li>
                                <textarea name="preg1" id="p1-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Explore cómo la comunicación digital está cambiando la forma en la que las personas
                                    interactúan en la sociedad, comparten el conocimiento e intercambian información.
                                </li>
                                <textarea name="preg2" id="p2-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Desarrolle una estrategia para utilizar un sito de red social para promover la
                                    interacción sobre un tema en particular que usted quiera enseñar. ¿Cuáles son los
                                    riesgos y desafíos que los profesores podrían encontrar al usar las redes sociales
                                    para propósitos educativos? Identifique los riesgos y sugiera formas para reducir
                                    su impacto. </li>
                                <textarea name="preg3" id="p3-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Utilice Internet para investigar el grado de gobierno electrónico que existe en su
                                    país. Debe elegir dos ejemplos como evidencia de que dichas actividades existen e
                                    indicar hasta qué punto ellos están involucrados o se les consulta en el proceso.
                                    ¿Se les consultó a los ciudadanos en general? Hable sobre la eficacia de estos
                                    proyectos de e-gobernanza. ¿Cuáles son los beneficios y las desventajas?</li>
                                <textarea name="preg4" id="p4-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                            </ol>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo6/unidad2/actividad1" class="btn btn-success">Anterior</a>
                    <a href="<?php echo base_url();?>modulo6/unidad3" class="btn btn-success">Siguiente</a>
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