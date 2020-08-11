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
          <a href="<?php echo base_url();?>modulo1/unidad1" class="list-group-item">Unidad 1</a>
            <a href="<?php echo base_url();?>modulo1/unidad2" class="list-group-item">Unidad 2</a>
            <a href="<?php echo base_url();?>modulo1/unidad3" class="list-group-item">Unidad 3</a>
            <a href="#" class="list-group-item active">Unidad 4</a>
            <ul class="list-group-item">
              <a href="<?php echo base_url();?>modulo1/unidad4/temas" class="list-group-item">Temas</a>
              <a href="<?php echo base_url();?>modulo1/unidad4/actividad1" class="list-group-item">Actividades</a>
              <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
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
        <div class="card mt-4">
          <div class="card-body">
            <h4>Objetivos de aprendizaje</h4>
            <p class="card-text">
              <ul>
                <li>Identificar las formas en como AMI puede mejorar el proceso de enseñanza y aprendizaje.</li>
                <li>Explorar los enfoques pedagógicos asociados con AMI.</li>
                <li>Desarrollar actividades particulares que utilizan estos enfoques pedagógicos.</li>
              </ul>
            </p>
          </div>
        </div>
        <!-- /.card -->
        <br>
        <center>
          <a href="<?php echo base_url();?>modulo1/unidad3/evaluacion" class="btn btn-success">Anterior</a>
          <a href="<?php echo base_url();?>modulo1/unidad4/temas" class="btn btn-success">Siguiente</a>
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
  
</body>

</html>