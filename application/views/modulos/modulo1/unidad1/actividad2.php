<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AMID</title>
  
  <?php $this->load->view('initial/linkGenerico');?>

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
                        <a href="<?php echo base_url();?>modulo1/unidad1" class="list-group-item active">Unidad 1</a>
                        <ul class="list-group-item">
                        <a href="<?php echo base_url();?>modulo1/unidad1/temas" class="list-group-item">Temas</a>
                        <a href="<?php echo base_url();?>modulo1/unidad1/actividad1" class="list-group-item active">Actividades</a>
                        <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 4</a>
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
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <h1><br>Unidad 1: Comprender la alfabetización mediática e informacional: una orientación</h1>
                <!-- /m1u1a1 -->
                <?php echo form_open('modulo1/unidad1/actividad3');$this->session->set_userdata('idAct','m1u1a1'); ?>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Comprobación de lectura</h4>
                        <p class="card-text">
                            <strong>Tema:</strong> Definición de "información" y "medios". <br><strong>Propósito de la
                                actividad:</strong> Explorar los roles en una variedad de medios de información.
                            <br>
                            <center>
                                Arrastre cada una de las siguiente proposiciones a la caja que corresponda según si son
                                o no roles de medios
                            </center>
                        </p>
                        <canvas id="lienzo" width="800" height="880"></canvas>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                    <input type="text" class="sr-only" id="pointsCanvas" name="pointsCanvas" value="1">
                    <input type="text" class="sr-only" id="pointsGood" name="pointsGood" value="0">
                <center>
                    <a href="<?php echo base_url();?>modulo1/unidad1/actividad1" class="btn btn-success">Anterior</a>
                    <!-- <a href="module1.1.3.php" class="btn btn-success">Siguiente</a> -->
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
  <script src="<?php echo base_url();?>public/assets/modulos/mod1/js/script_2.js"></script>
</body>

</html>