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
                        <a href="<?php echo base_url();?>modulo2/unidad3" class="list-group-item">Unidad 3</a>
                        <a href="<?php echo base_url();?>modulo2/unidad4" class="list-group-item active">Unidad 4</a>
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo2/unidad4/temas" class="list-group-item">Temas</a>
                            <a href="<?php echo base_url();?>modulo2/unidad4/actividad1" class="list-group-item">Actividad</a>
                            <a href="#" class="list-group-item active">Evaluación</a>
                        </ul>
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
                <h1><br>Unidad 4: El proceso de desarrollo de las noticias: más allá de 5 por qués y 1 cómo (5ws y 1h en
                    inglés)</h1>
                <div class="card mt-4">
                    <div class="card-body">
                    <?php echo form_open('modulo3');$this->session->set_userdata('idAc','m2u4'); ?>
                          <div class="card-body">
                            <p class="card-text">
                              <strong>¿Qué es el registro de medios?  </strong><br> <br>
                              <input class="space" type="radio" name="pre1" id="resp1" value="5" required>
                              <label for="resp1">Es registrar los medios de comunicación para su correcto funcionamiento </label> <br>

                              <label for="resp2"><input class="space" type="radio" name="pre1" id="resp2" value="1" required>
                              Son los medios que cuentan con instalaciones, equipo, estructura organizacional y una variedad de medios de comunicación.  </label> <br>

                              <input class="space" type="radio" name="pre1" id="resp3" value="1" required>
                              <label for="resp3">Es registrar el nombre de los medios de comunicación ante una entidad superior.</label> <br>

                              <strong>¿A qué se refiere la producción?</strong><br> <br>
                              <label for="resp4">
                              <input class="space" type="radio" name="pre2" id="resp4" value="1" required>La cantidad de dinero que produce el medio de comunicación en un tiempo determinado.</label> <br>

                              <input class="space" type="radio" name="pre2" id="resp5" value="1" required>
                              <label for="resp5">Son las instalaciones propias del medio de comunicación para realizar producciones.</label> <br>

                              <label for="resp6"><input class="space" type="radio" name="pre2" id="resp6" value="5" required>
                              La producción es a lo que se dedica el medio de comunicación, por ejemplo, radio, televisión, periódico, revista, producción de documental, etc.</label> <br>
                            </p>
                        </div>
                    </div>
                     <!-- /.card -->
                     <br>
                      <center>
                          <a href="<?php echo base_url();?>modulo2/unidad4/actividad2" class="btn btn-success">Anterior</a>
                          <button id="btn-siguiente"  class="btn btn-success" type="submit">Siguiente</button>
                      </center>
                    <?php echo form_close(); ?>
                    <?php $this->load->view('initial/paginacion');?>

<br />
<p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative Commons
    Reconocimiento Compartir igual 4.0</a></p>
<br><br>
<!-- /.card -->
</div>
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