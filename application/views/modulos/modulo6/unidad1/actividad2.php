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
                        <a href="<?php echo base_url();?>modulo6/unidad1" class="list-group-item active">Unidad 1</a>
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo6/unidad1/temas" class="list-group-item">Temas</a>
                            <a href="<?php echo base_url();?>modulo6/unidad1/actividad1" class="list-group-item active">Actividad</a>
                            <a href="<?php echo base_url();?>modulo6/unidad1/evaluacion" class="list-group-item ">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(1)" class="list-group-item">Unidad 2</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
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
                <h1><br>Unidad 1: De Los Medios Tradicionales a las Nuevas Tecnologías Mediáticas</h1>
                <?php echo form_open('modulo6/unidad1/evaluacion');$this->session->set_userdata('idAct','m6u1a2'); ?>
                <div class="card mt-4">
                    <div class="card-body">
                        <p class="card-text">
                            1. Según lo leído en <strong>La breve historia de la comunicación</strong>
                            ¿Cuál considera usted que es la medida en la cual el conocimiento y la información
                            han cambiado o han permanecido iguales a medida que los nuevos medios y las nuevas
                            tecnologías mediáticas han emergido en nuestra sociedad?
                            <textarea name="preg1" style="width: 90%;" rows="8" minlength="1" maxlength="500" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" autofocus ></textarea><br/>
                            2. ¿Cómo la emergencia de los nuevos medios ha tenido impacto sobre la forma en cómo
                            las personas interactúan y cómo esto las beneficia?
                            <textarea name="preg2" style="width: 90%;" rows="8" minlength="1" maxlength="500" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br/>
                            3. Una característica de los medios tradicionales es que el contenido de los medios va a
                            través de un proceso editorial organizado, diseñado para autentificar las noticias y
                            entregarlas a una organización mediática de noticias en lugar de darlas a un individuo. El
                            periodista en línea no trabaja a través de este proceso. <br> Discuta sobre la diferencia
                            entre los temas de noticia de opinión de un bloguero individual y un reportaje noticioso que
                            aparece en la versión en línea de un periódico.
                            <textarea name="preg3" style="width: 90%;" rows="8" minlength="1" maxlength="500" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br/>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo6/unidad1/actividad1" class="btn btn-success">Anterior</a>
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