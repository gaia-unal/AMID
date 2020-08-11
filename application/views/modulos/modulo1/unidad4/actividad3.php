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
                        <a href="<?php echo base_url();?>modulo1/unidad2" class="list-group-item ">Unidad 2</a>
                        <a href="<?php echo base_url();?>modulo1/unidad3" class="list-group-item">Unidad 3</a>
                        <a href="<?php echo base_url();?>modulo1/unidad4" class="list-group-item active">Unidad 4</a>
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo1/unidad4/temas" class="list-group-item">Temas</a>
                            <a href="<?php echo base_url();?>modulo1/unidad4/actividad1" class="list-group-item active">Actividades</a>
                            <a href="<?php echo base_url();?>modulo1/unidad4/evaluacion" class="list-group-item">Evaluación</a>
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
                <?php echo form_open('modulo1/unidad4/evaluacion');$this->session->set_userdata('idAct','m1u4a3'); ?>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Reflexión</h4>
                        <p class="card-text">
                            De los enfoques mencionados anteriormente liste 5 con los cuales se sienta más
                            familiarizados. <br>
                            <center>
                                1. <input type="text" name="e1" id="1" maxlength="40" required autofocus><br /><br />
                                2. <input type="text" name="e2" id="2" maxlength="40" required><br /><br />
                                3. <input type="text" name="e3" id="3" maxlength="40" required><br /><br />
                                4. <input type="text" name="e4" id="4" maxlength="40" required><br /><br />
                                5. <input type="text" name="e5" id="5" maxlength="40" required><br /><br />
                            </center>
                            A continuación identifique los componentes claves que hacen que la enseñanza y el
                            aprendizaje de AMI sean eficaces <br>
                            <textarea name="preg1" style="width: 100%;" rows="5" minlength="1" maxlength="200"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea><br><br>
                            Indique que actividades puede desarrollar que ilustren estas estrategias en su propio
                            trabajo <br>
                            <textarea name="preg2" style="width: 100%;" rows="5" minlength="1" maxlength="200"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo1/unidad4/actividad2" class="btn btn-success">Anterior</a>
                    <button id="btn-siguiente" class="btn btn-success" name="submit" type="submit">Siguiente</button>
                    <!-- <a href="../module1.4_eval.php" class="btn btn-success">Siguiente</a> -->
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