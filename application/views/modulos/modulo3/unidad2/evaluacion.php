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
					<a href="<?php echo base_url();?>modulo3" class="list-group-item active">Módulo 3</a>
                    <ul class="list-group-item">
                        <a href="<?php echo base_url();?>modulo3/unidad1" class="list-group-item">Unidad 1</a>
                        <a href="<?php echo base_url();?>modulo3/unidad2" class="list-group-item active">Unidad 2</a>
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo3/unidad2/temas" class="list-group-item">Temas</a>
                            <a href="<?php echo base_url();?>modulo3/unidad2/actividad1" class="list-group-item">Actividad</a>
                            <a href="#" class="list-group-item active">Evaluación</a>
                        </ul>
                        <a href="<?php echo base_url();?>modulo3/unidad3" class="list-group-item">Unidad 3</a>
                        <a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 4</a>
                        <a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 5</a>
                    </ul>
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
                <h1><br>Unidad 2: Códigos de la industria sobre la diversidad y la representación</h1>
                <?php echo form_open('modulo3/unidad3');$this->session->set_userdata('idAc','m3u2'); ?>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Evaluación</h4><br />
                        <p class="card-text">
                            <strong> ¿Cuáles son las principales áreas de códigos de diversidad o ética?</strong><br /><br />
                                <label><input type="radio" name="pre1" class="space" onclick="incorrecto()" value="1" required>Únicamente en la conducta de las personas.</label> <br />
                                <label><input type="radio" name="pre1" class="space" onclick="incorrecto()" value="1" required>Animal y humana.</label><br />
                                <label><input type="radio" name="pre1" class="space" onclick="correcto()" value="5" required>Empresarial, institucional, en profesiones como la Medicina, Sistemas informáticos, Auditorías.</label><br />
                            <br>
                            <strong>¿Quién regula en primera instancia el ejercicio ético en un periodista?</strong><br /><br />
                                <label><input type="radio" name="pre2" class="space" onclick="incorrecto()" value="1" required>La ley es la encargada de observar la conducta del periodista.</label><br />
                                <label><input type="radio" name="pre2" class="space" onclick="correcto()" value="5" required>La conciencia personal del periodista.</label><br />
                                <label><input type="radio" name="pre2" class="space" onclick="incorrecto()" value="1" required>Los encargados de administrar los manuales de estilos.</label><br />
                            <br>
                            </ul>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo3/unidad2/actividad1" class="btn btn-success">Anterior</a>
                    <button id="btn-siguiente" class="btn btn-success" type="submit">Siguiente</button>
                    <!-- <a href="../modulo2.2/module2.2_inicio.php" class="btn btn-success">Siguiente</a> -->
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
