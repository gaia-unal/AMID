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
          <a href="<?php echo base_url();?>modulo1" class="list-group-item active">Módulo 1</a>
          <ul class="list-group-item">
            <a href="<?php echo base_url();?>modulo1/unidad1" class="list-group-item">Unidad 1</a>
            <a href="<?php echo base_url();?>modulo1/unidad2" class="list-group-item">Unidad 2</a>
            <a href="<?php echo base_url();?>modulo1/unidad3" class="list-group-item">Unidad 3</a>
            <a href="<?php echo base_url();?>modulo1/unidad4" class="list-group-item active">Unidad 4</a>
            <ul class="list-group-item">
              <a href="<?php echo base_url();?>modulo1/unidad4/temas" class="list-group-item">Temas</a>
              <a href="<?php echo base_url();?>modulo1/unidad4/actividad1" class="list-group-item">Actividades</a>
              <a href="#" class="list-group-item active">Evaluación</a>
            </ul>
          </ul>
          <a href="<?php echo base_url();?>modulo2" class="list-group-item">Módulo 2</a>
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
        <h1><br>Unidad 4: AMI, enseñanza y aprendizaje</h1>

        <?php echo form_open('modulo2');$this->session->set_userdata('idAct','m1u4'); ?>

        <div class="card mt-4">
          <div class="card-body">
            <h4>Evaluación</h4>
            <p class="card-text">
              Si colocara a los estudiantes una variedad de material visual existente relacionado con la vida de una
              persona y utilizar esto como punto de partida para hacer un documental corto sobre dicha persona. <br/><br/>
              <strong>¿Qué enfoque pedagógico estaría utilizando para realizar esta actividad?</strong> <br/><br/>
              <label ><input type="radio" name="pregunta_1" id="res1" class="space" onclick="Incorrecto()" value="1" required>Enfoque de enseñanza reflexiva </label><br/>
              <label><input type="radio" name="pregunta_1" id="res2" class="space" onclick="Incorrecto()" value="1" required>Aprendizaje basado en problemas </label><br/>
              <label><input type="radio" name="pregunta_1" id="res3" class="space" onclick="Incorrecto()" value="1" required>Interrogación científica </label><br/>
              <label><input type="radio" name="pregunta_1" id="res4" class="space" onclick="Incorrecto()" value="1" required>Aprendizaje cooperativo </label><br/>
              <label><input type="radio" name="pregunta_1" id="res5" class="space" onclick="Incorrecto()" value="1" required>Estudio de caso </label><br/>
              <label><input type="radio" name="pregunta_1" id="res6" class="space" onclick="Incorrecto()" value="1" required>Análisis de texto </label><br/>
              <label><input type="radio" name="pregunta_1" id="res7" class="space" onclick="Incorrecto()" value="1" required>Análisis contextual </label><br/>
              <label><input type="radio" name="pregunta_1" id="res8" class="space" onclick="Correcto()" value="5" required>Traducciones </label><br/>
              <label><input type="radio" name="pregunta_1" id="res9" class="space" onclick="Incorrecto()" value="1" required>Simulaciones </label><br/>
            </p>
          </div>
          <br>
        </div>
        <!-- /.card -->
        <br>
        <center>
          <a href="<?php echo base_url();?>modulo1/unidad4/actividad3" class="btn btn-success">Anterior</a>
          <!-- <a href="../../modulo2/module2.php" class="btn btn-success">Siguiente</a> -->
          <button id="btn-siguiente"  class="btn btn-success" name="submit" type="submit">Siguiente</button>
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
  <script src="<?php echo base_url();?>public/assets/modulos/mod1/js/und4script.js"></script>
</body>

</html>