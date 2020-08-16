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
                    <a href="<?php echo base_url();?>modulo4" class="list-group-item active">Módulo 4</a>
                    <ul class="list-group-item">
                        <a href="<?php echo base_url();?>modulo4/unidad1" class="list-group-item">Unidad 1</a>
                        <a href="<?php echo base_url();?>modulo4/unidad2" class="list-group-item">Unidad 2</a>
                        <a href="<?php echo base_url();?>modulo4/unidad3" class="list-group-item">Unidad 3</a>
                        <a href="<?php echo base_url();?>modulo4/unidad4" class="list-group-item active">Unidad 4</a>
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo4/unidad4/temas" class="list-group-item">Temas</a>
                            <a href="#" class="list-group-item active">Actividad</a>
                            <a href="<?php echo base_url();?>modulo4/unidad4/evaluacion" class="list-group-item">Evaluación</a>
                        </ul>
                    </ul>
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
                <h1><br>Unidad 4: Planos de cámara y ángulos, transmitiendo un mensaje</h1>
                <?php echo form_open('modulo4/unidad4/evaluacion');$this->session->set_userdata('idAct','m4u4a1'); ?>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Textos mediáticos e información</h4>
                        <p class="card-text">
                            Realice una investigación en los medios para encontrar ejemplos de textos mediáticos e
                            información que hagan eficaz el uso de uno o más planos de cámara y ángulos descritos en el
                            recuadro al final de este módulo. Tome en cuenta la revisión de fotos de periódicos,
                            noticieros de televisión, clips de cine o clips de programas de televisión.
                            <ul>
                                <li>Describa el significado que se transmite a través de los “lenguajes” de la cámara
                                    que se utilizan en cada texto</li>
                                <textarea name="preg1" style="width: 90%;" rows="6" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" autofocus></textarea>
                            </ul>
                        </p>
                        <h4>Imagen o fotografía</h4>
                        <p>
                            Encuentre un ejemplo de una imagen estática o una fotografía, un clip de un programa de
                            televisión o un noticiero de televisión. Examínelo detenidamente.
                            <ul>
                                <li>Describa cómo se coloca al sujeto en la foto o en el metraje</li>
                                <textarea name="preg2" style="width: 90%;" rows="6" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>¿Cuál es la impresión que se transmite como resultado?</li>
                                <textarea name="preg3" style="width: 90%;" rows="6" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Describa cuál es la posición de la audiencia en relación al sujeto.</li>
                                <textarea name="preg4" style="width: 90%;" rows="6" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Si usted cambiara o sustituyera un ángulo distinto de la cámara o disparo, ¿cómo
                                    cambiaría el significado que se transmite a través de la foto o del metraje?</li>
                                <textarea name="preg5" style="width: 90%;" rows="6" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                            </ul>
                        </p>
                        <h4>Comunidad</h4>
                        <p>
                            Imagine que usted es un camarógrafo o un fotógrafo que está cubriendo una concentración
                            política o un festival en una comunidad o celebración.
                            <ul>
                                <li>¿Qué tipo de ángulos de cámara o qué tipos de disparos usted escogería para su
                                    cobertura y por qué? </li>
                                <textarea name="preg6" style="width: 90%;" rows="6" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Desarrolle una pequeña lista de tomas para cubrir este evento</li>
                                <textarea name="preg7" style="width: 90%;" rows="6" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>¿De qué forma este trabajo de cámara le ayudará a transmitir la información
                                    necesaria y la impresión que desea sobre el evento?</li>
                                <textarea name="preg8" style="width: 90%;" rows="6" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                            </ul>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo4/unidad4/temas" class="btn btn-success">Anterior</a>
                    <button id="btn-siguiente" class="btn btn-success" name="submit" type="submit">Siguiente</button>
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