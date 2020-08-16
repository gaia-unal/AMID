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
					<a href="<?php echo base_url();?>modulo3" class="list-group-item active">Módulo 3</a>
                    <ul class="list-group-item">
                        <a href="<?php echo base_url();?>modulo3/unidad1" class="list-group-item">Unidad 1</a>
                        <a href="<?php echo base_url();?>modulo3/unidad2" class="list-group-item active">Unidad 2</a>
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo3/unidad2/temas" class="list-group-item">Temas</a>
                            <a href="#" class="list-group-item active">Actividad</a>
                            <a href="<?php echo base_url();?>modulo3/unidad2/evaluacion" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(2)" class="list-group-item">Unidad 3</a>
                        <a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 4</a>
                        <a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 5</a>
                    </ul>
                    <a href="<?php echo base_url();?>modulo4" class="list-group-item">Módulo 4</a>
                    <a href="<?php echo base_url();?>modulo5" class="list-group-item">Módulo 5</a>
                    <a href="<?php echo base_url();?>modulo6" class="list-group-item">Módulo 6</a>
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
                <h1><br> Unidad 2: Códigos de la industria sobre la diversidad y la representación</h1>
                <?php echo form_open('modulo3/unidad2/evaluacion');$this->session->set_userdata('idAct','m3u2a1'); ?>
                <div class="card mt-4">
                    <div class="card-body">
                        <p class="card-text">
                            Los códigos mediáticos y de ética son unos principios de conducta fundados en los valores
                            éticos de la profesión como base del compromiso de todos los que tienen responsabilidad en
                            el proceso de informar: empresarios, directores, editores y reporteros.</p>

                        <blockquote cite="https://fundaciongabo.org/es/consultorio-etico/consulta/1744" align="justify">
                            <p class="card-text">
                                El ejercicio ético de la profesión está regulado, primordialmente, por la conciencia
                                personal del periodista. La ética, como decisión de cada persona, convierte a cada uno
                                en legislador de sí mismo y en lector de la ley moral inscrita en su corazón. Son las
                                dos expresiones con que Kant recoge una singularidad de lo ético, que según Aristóteles
                                es “una obediencia a la propia naturaleza”. Y según la práctica: la ética es una
                                decisión libre de cada persona.
                                Los códigos de ética y los Manuales de Estilo que adoptan los medios de comunicación son
                                ayudas que permiten identificar valores, objetivos y medios institucionales o colectivos
                                que orientan propósitos éticos, pero no son la ética, ni pueden tener el carácter de
                                leyes o de reglamentos. (Laguna Agudelo, 2018)
                            </p>
                        </blockquote>
                        <p class="card-text">
                            1. Aplique el código de práctica a las representaciones en las noticias del
                            ejercicio previo. Evalúe hasta qué grado se cumplen estas regulaciones. Tomen
                            en cuenta el texto y contexto de su evaluación. De ejemplos específicos de la
                            cobertura que sustenten su respuesta. Si existen casos en los cuales los reportajes
                            violan estas regulaciones, ¿qué recurso tienen disponible los individuos? <br><br>
                            <textarea name="preg1" style="width: 90%;" rows="5" minlength="1" maxlength="500" onkeypress="return check(event)"
                            required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea> <br><br>
                            2. Examine otras áreas donde los medios están cubiertos por estos códigos
                            (por Ej. imágenes de género en la publicidad). Evalúe hasta qué punto se siguen
                            estas regulaciones. Detalle la retroalimentación que usted daría a los entes
                            reguladores y/o productores de estos textos mediáticos <br> <br>
                            <textarea name="preg2" style="width: 90%;" rows="5" minlength="1" maxlength="500" onkeypress="return check(event)"
                            required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo3/unidad2/temas" class="btn btn-success">Anterior</a>
                    <button id="btn-siguiente" class="btn btn-success" name="submit" type="submit">Siguiente</button>
                    <!-- <a href="module3.2_eval.php" class="btn btn-success">Siguiente</a> -->
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