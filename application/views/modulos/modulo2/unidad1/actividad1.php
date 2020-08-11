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
                    <a href="<?php echo base_url();?>modulo2" class="list-group-item active">Módulo 2</a>
                    <ul class="list-group-item">
                        <a href="<?php echo base_url();?>modulo2/unidad1" class="list-group-item active">Unidad 1</a>
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo2/unidad1/temas" class="list-group-item">Temas</a>
                            <a href="#" class="list-group-item active">Actividad</a>
                            <a href="<?php echo base_url();?>modulo2/unidad1/evaluacion" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 4</a>
                    </ul>
                    <a href="<?php echo base_url();?>modulo3" class="list-group-item">Módulo 3</a>
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
                <br />
                <br />
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <h1><br>Unidad 1: Periodismo y sociedad</h1>
                <?php echo form_open('modulo2/unidad1/evaluacion');$this->session->set_userdata('idAc','m2u1a1'); ?>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Investigue</h4>
                        <p class="card-text">
                            <center>
                                <blockquote>
                                    <em>
                                        “La civilización ha producido una idea más poderosa que otra – la noción de que
                                        las personas se pueden gobernar a sí mismas. Y ha creado una teoría ampliamente
                                        articulada de la información para mantener esta idea, llamada periodismo. Las
                                        dos surgen y caen juntas.”
                                    </em> Bill Kovach and Tom Rosenstiel, The Elements of Journalism
                                </blockquote>
                            </center>
                            Libertad de expresión– a veces también conocida como libertad de palabra – por mucho tiempo
                            ha sido vista como un derecho fundamental, esencial para la realización de nuestro potencial
                            humano, la base para los otros derechos y las libertades y que apuntalen en el desarrollo
                            social y económico. Sin embargo, la libertad de expresión necesita plataformas públicas que
                            permitan el intercambio de información e ideas para que sea eficaz, de ahí el papel
                            importante de los medios para proveer estas plataformas. Sin embargo, a fin de cumplir con
                            esta función, los medios necesitan ser independientes del control del estado o del gobierno.
                            Esta libertad de la regulación a su vez implica que los periodistas tienen la obligación de
                            comportarse con ética, de ahí nace el desarrollo de los códigos profesionales que tienen que
                            ver con los estándares de los periodistas. <br><br>
                            A partir de esto, realice una investigación y un informe sobre la evolución de la “libertad
                            de palabra” y la “libertad de prensa” en su país, y responda: <br><br>
                            <ul>
                                <li>¿Cómo fue la evolución de la teoría y práctica de “libertad de palabra” y “libertad
                                    de prensa”?</li>
                                <textarea name="preg1" style="width: 100%;" rows="5" minlength="1" maxlength="300"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>¿Qué periodistas y/o agencias de los medios han hecho contribuciones específicas a
                                    la libertad de prensa y a la democracia?</li>
                                <textarea name="preg2" style="width: 100%;" rows="5" minlength="1" maxlength="200"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Investigue y describa un evento de movimientos democráticos, en Colombia, en donde
                                    los medios y los reportes de noticias han tenido un papel significante</li>
                                <textarea name="preg3" style="width: 100%;" rows="5" minlength="1" maxlength="300"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Realice una reflexión sobre los resultados de las lecturas que realizó en sus
                                    investigaciones</li>
                                <textarea name="preg4" style="width: 100%;" rows="5" minlength="1" maxlength="300"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Realice un ensayo sobre temas relacionados con los medios y la democracia, y como
                                    abordar estos temas en el aula de clase</li>
                                <textarea name="preg5" style="width: 100%;" rows="6" minlength="1" maxlength="600"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                            </ul>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo2/unidad1/temas" class="btn btn-success">Anterior</a>
                    <button id="btn-siguiente" class="btn btn-success" type="submit">Siguiente</button>
                    <!-- <a href="module2.1_eval.php" class="btn btn-success">Siguiente</a> -->
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