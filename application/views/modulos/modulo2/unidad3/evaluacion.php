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
                    <a href="<?php echo base_url();?>modulo2/unidad3/actividad1" class="list-group-item ">Actividad</a>
                    <a href="#" class="list-group-item active">Evaluación</a>
                </ul>
                <a href="<?php echo base_url();?>modulo2/unidad4" class="list-group-item inactive">Unidad 4</a>
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
        <div class="card mt-4">
          <div class="card-body">
            <h4>Evaluación</h4>
            <?php echo form_open('modulo2/unidad4');$this->session->set_userdata('idAc','m2u3'); ?>
              <div class="card-body">
                <p class="card-text">
                  <strong> ¿Una oportunidad es? </strong><br> <br>
                  <input class="space" type="radio" name="pre1" id="resp1" value="1" required>
                  <label for="resp1">Idea inesperada para realizar algo de manera repentina. </label> <br>

                  <input class="space" type="radio" name="pre1" id="resp2" value="5" required>
                  <label for="resp2">Momento oportuno para realizar una acción determinada. </label> <br>

                  <input class="space" type="radio" name="pre1" id="resp3" value="1" required>
                  <label for="resp3">Acuerdo al que llegan dos personas en un momento determinado.</label> <br>

                  <strong>¿Qué es un conflicto?</strong><br> <br>
                  <label for="resp4">
                    <input class="space" type="radio" name="pre2" id="resp4" value="5" required>Posición contraria entre
                    2 o más personas.</label> <br>

                  <input class="space" type="radio" name="pre2" id="resp5" value="1" required>
                  <label for="resp5">Discusión que está basada en elementos de la misma naturaleza pero con
                    características diferentes.</label> <br>

                  <input class="space" type="radio" name="pre2" id="resp6" value="1" required>
                  <label for="resp6">Necesidad que tiene un grupo de personas de generar un ambiente de
                    bienestar.</label> <br>
                </p>
              </div>
          </div>
          <!-- /.card -->
          <br>
          <center>
            <a href="<?php echo base_url();?>modulo2/unidad3/actividad3" class="btn btn-success">Anterior</a>
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