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
                        <a href="<?php echo base_url();?>modulo1/unidad1" class="list-group-item active">Unidad 1</a>
                        <ul class="list-group-item">
                        <a href="<?php echo base_url();?>modulo1/unidad1/temas" class="list-group-item">Temas</a>
                        <a href="<?php echo base_url();?>modulo1/unidad1/actividad1" class="list-group-item active">Actividades</a>
                        <a href="<?php echo base_url();?>modulo1/unidad1/evaluacion" class="list-group-item">Evaluación</a>
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
                <div class="card mt-4">
                    <div class="card-body">
                        <center>
                            <h4><em>La importancia que tiene AMI para los ciudadanos</em></h4>
                        </center>
                        <p class="card-text">
                            <em>
                                La Alfabetización Mediática e Informacional (AMI) une disciplinas que antes se mantenían
                                separadas y distintas. AMI se ocupa de que las personas comprendan la importancia de los
                                medios y otros proveedores de información a fin de que: <br>
                                <ol>
                                    <li value="a">Tomen decisiones informadas</li>
                                    <li>Aprendan sobre el mundo que les rodea</li>
                                    <li>Construyan un sentido de comunidad</li>
                                    <li>Mantengan un discurso público, y</li>
                                    <li>Se comprometan a aprender a lo largo de toda la vida.</li>
                                </ol>
                                Más allá, AMI debería estimular a que los ciudadanos se conviertan en productores
                                activos de información e innovadores de los medios y productos de información, así como
                                que sean pensadores críticos. AMI debería incentivar que usen los medios nuevos y
                                tradicionales para la auto-expresión, creatividad y mayor participación en la democracia
                                de sus países y en la red de información a nivel global.
                            </em>
                        </p>
                        <img class="total" src="<?php echo base_url();?>public/assets/modulos/mod1/img/importancia.png" alt="importancia">
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo1/unidad1/actividad9" class="btn btn-success">Anterior</a>
                    <a href="<?php echo base_url();?>modulo1/unidad1/evaluacion" class="btn btn-success">Siguiente</a>
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