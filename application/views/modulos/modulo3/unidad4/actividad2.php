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
                        <a href="<?php echo base_url();?>modulo3/unidad2" class="list-group-item">Unidad 2</a>
                        <a href="<?php echo base_url();?>modulo3/unidad3" class="list-group-item">Unidad 3</a>
                        <a href="<?php echo base_url();?>modulo3/unidad4" class="list-group-item active">Unidad 4</a>
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo3/unidad4/temas" class="list-group-item">Temas</a>
                            <a href="<?php echo base_url();?>modulo3/unidad4/actividad1" class="list-group-item active">Actividad</a>
                            <a href="<?php echo base_url();?>modulo3/unidad4/evaluacion" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(4)" class="list-group-item">Unidad 5</a>
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
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <h1><br>Unidad 4: Videos musicales y su representación</h1>
                <?php echo form_open('modulo3/unidad4/evaluacion');$this->session->set_userdata('idAct','m3u4a2'); ?>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Teniendo en cuenta lo leído anteriormente, responda las siguientes preguntas:</h4>
                        <p class="card-text">
                            1. Presenta el video las creencias de un grupo en particular?
                            <textarea name="preg1" style="width: 90%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                            required placeholder="Escriba su respuesta aquí" spellcheck="true" autofocus></textarea>
                            <br>2. Describa las representaciones de hombres y mujeres en el video.</h4>
                            <textarea name="preg2" style="width: 90%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                            required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                            <br>3. ¿Se usa alguna clase de estereotipo? ¿Si es así, con qué propósito?</h4>
                            <textarea name="preg3" style="width: 90%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                            required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                            <br>4. ¿Quién está en la posición de poder? ¿Quién no? ¿Quién se beneficia como
                            resultado?
                            <textarea name="preg4" style="width: 90%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                            required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                            <br>5. ¿El video excluye a algún grupo de personas o a sus creencias?</h4>
                            <textarea name="preg5" style="width: 90%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                            required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                            <br>6. ¿Qué definiciones de felicidad, éxito o moralidad están implícitas?</h4>
                            <textarea name="preg6" style="width: 90%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                            required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo3/unidad4/actividad1" class="btn btn-success">Anterior</a>
                    <button id="btn-siguiente" class="btn btn-success" name="submit" type="submit">Siguiente</button>
                    <!-- <a href="module3.4_eval.php" class="btn btn-success">Siguiente</a> -->
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