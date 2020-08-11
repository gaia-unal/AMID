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
        <a href="<?php echo base_url();?>modulo1" class="list-group-item">Módulo 1</a>
        <a href="<?php echo base_url();?>modulo2" class="list-group-item">Módulo 2</a>
        <a href="<?php echo base_url();?>modulo3" class="list-group-item">Módulo 3</a>
        <a href="<?php echo base_url();?>modulo4" class="list-group-item">Módulo 4</a>
        <a href="<?php echo base_url();?>modulo5" class="list-group-item">Módulo 5</a>
        <a href="<?php echo base_url();?>modulo6" class="list-group-item">Módulo 6</a>
        <a href="<?php echo base_url();?>modulo7" class="list-group-item">Módulo 7</a>
        <a href="<?php echo base_url();?>modulo8" class="list-group-item">Módulo 8</a>
          <a href="#" class="list-group-item active">Módulo 9</a>
          <ul class="list-group-item">
            <a href="<?php echo base_url();?>modulo9/unidad1" class="list-group-item">Unidad 1</a>
            <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
            <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
          </ul>
          
        <a href="<?php echo base_url();?>modulo10" class="list-group-item">Módulo 10</a>
        <a href="<?php echo base_url();?>modulo11" class="list-group-item">Módulo 11</a>
        <a href="<?php echo base_url();?>modulo12" class="list-group-item">Módulo 12</a>
        </div>
        <br /><br />
      </div>
      <!-- /.col-lg-3 -->
      <div class="col-lg-9">
        <br>
        <h1>Módulo 9: Comunicación, AMI y aprendizaje</h1>
        <div class="card mt-4">
          <div class="card-body">
            <h4>Antecedentes y fundamento</h4>
            <p class="card-text">
              Da clic en la <b>flecha</b> para conocer los antecedentes y el fundamento para este módulo
              <br>
              <div class="imgF">
                <center>
                  <a href="#" onclick="opc1();">
                    <img class="animated bounceIn" src="<?php echo base_url();?>public/assets/img/flecha.png" alt="Inicio">
                  </a>
                </center>
              </div>
               <br>
              Referencias: <a
                href="http://unesco.mil-for-teachers.unaoc.org/modules/modulo-7-oportunidades-y-retos-en-internet/?lang=es">AMID</a>
            </p>
          </div>
        </div>
        <!-- /.card -->
        <br>
        <center>
            <a href="<?php echo base_url();?>modulo8/unidad3/evaluacion" class="btn btn-success">Anterior</a>
            <a href="<?php echo base_url();?>modulo9/unidad1" class="btn btn-success">Siguiente</a>
        </center>
        <?php $this->load->view('initial/paginacion');?>

        <p>Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/"> Licencia Creative Commons
            Reconocimiento Compartir igual 4.0</a></p>
        <br /><br />
      </div>
      <!-- /.col-lg-9 -->
    </div>
  </div>
  <!-- /.container -->

  <?php $this->load->view('initial/footer');?>
  <?php $this->load->view('initial/scriptGenerico');?>
  <script src="<?php echo base_url();?>public/assets/modulos/mod9/js/info.js"></script>
  
</body>

</html>