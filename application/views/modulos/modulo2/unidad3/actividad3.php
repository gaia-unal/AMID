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
                        <a href="<?php echo base_url();?>modulo2/unidad1" class="list-group-item">Unidad 1</a>
                        <a href="<?php echo base_url();?>modulo2/unidad2" class="list-group-item">Unidad 2</a>
                        <a href="<?php echo base_url();?>modulo2/unidad3" class="list-group-item active">Unidad 3</a>
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo2/unidad3/temas" class="list-group-item">Temas</a>
                            <a href="<?php echo base_url();?>modulo2/unidad3/actividad1" class="list-group-item active">Actividad</a>
                            <a href="<?php echo base_url();?>modulo2/unidad3/evaluacion" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(3)" class="list-group-item inactive">Unidad 4</a>
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
                <h1><br>Unidad 3: Lo que genera noticias – explorando los criterios</h1>
                <?php echo form_open('modulo2/unidad3/evaluacion');$this->session->set_userdata('idAc','m2u3a3'); ?>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Retroalimentación</h4>
                        <p class="card-text">
                            A continuación, se le presentará la noticia del paro nacional del 21 de noviembre en
                            Colombia. La noticia será expuesta por 2 organizaciones diferentes: BBC y Semana. Analice
                            detenidamente y luego responda.
                            <ul>
                                <li><a href="https://www.semana.com/nacion/articulo/paro-del-21-de-noviembre-lo-que-esta-pasando-en-el-gobierno/640884"
                                        target="_blank">El paro eleva la tensión al máximo en la Casa de Nariño</a></li>
                                <li><a href="https://www.bbc.com/mundo/noticias-america-latina-50483298"
                                        target="_blank">Paro nacional en Colombia: por qué la protesta del 21 de
                                        noviembre genera tanta tensión</a></li>
                            </ul>
                            <ol>
                                <li>¿Cuál de las dos noticias tiene más fuerza? ¿por qué?</li>
                                <textarea name="preg1" style="width: 80%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" autofocus></textarea>
                                <li>¿Cuál de las dos noticias es más informativa?</li>
                                <textarea name="preg2" style="width: 80%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                                <li>¿Cómo se podrían mejorar otros artículos noticiosos?</li>
                                <textarea name="preg3" style="width: 80%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                            </ol>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo2/unidad3/actividad2" class="btn btn-success">Anterior</a>
                    <button id="btn-siguiente" class="btn btn-success" type="submit">Siguiente</button>
                    <!-- <a href="module2.3_eval.php" class="btn btn-success">Siguiente</a> -->
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