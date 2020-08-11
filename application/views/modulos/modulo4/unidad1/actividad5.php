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
                    <a href="<?php echo base_url();?>modulo3" class="list-group-item">Módulo 3</a>
                    <a href="<?php echo base_url();?>modulo4" class="list-group-item active">Módulo 4</a>
                    <ul class="list-group-item">
                        <a href="<?php echo base_url();?>modulo4/unidad1" class="list-group-item active">Unidad 1</a>
                        <ul class="list-group-item">
                        <a href="<?php echo base_url();?>modulo4/unidad1/temas" class="list-group-item">Temas</a>
                            <a href="<?php echo base_url();?>modulo4/unidad1/actividad1" class="list-group-item active">Actividad</a>
                            <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 4</a>
                    </ul>
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
                <h1><br>Unidad 1: Lectura de medios y textos de información</h1>
                <?php echo form_open('modulo4/unidad1/actividad6');$this->session->set_userdata('idAc','m4u1a5'); ?>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Refuerzo y reflexión</h4>
                        <p class="card-text">
                            Seleccione aquellos que corresponden a un elemento, formato o característica del lenguaje
                            televisivo
                            <ul>
                            <label><li><input type="checkbox" name="opc1" id="opc1">No utilizar repeticiones</li></label> <br/>
                                <label><li><input type="checkbox" name="opc2" id="opc2">Contiene grandes bloques
                                    de publicidad</li></label> <br/>
                                <label><li><input type="checkbox" name="opc3" id="opc3">Estudio</li></label> <br/>
                                <label><li><input type="checkbox" name="opc4" id="opc4">Preparación y
                                    planeación</li></label> <br/>
                                <label><li><input type="checkbox" name="opc5" id="opc5">Documental</li></label> <br/>
                                <label><li><input type="checkbox" name="opc6" id="opc6">Pocos decorados</li></label> <br/>
                                <label><li><input type="checkbox" name="opc7" id="opc7">Léxico avanzado</li></label> <br/>
                                <label><li><input type="checkbox" name="opc8" id="opc8">Poco superficial</li></label> <br/>
                                <label><li><input type="checkbox" name="opc9" id="opc9">Guión</li></label> <br/>
                                <label><li><input type="checkbox" name="opc10" id="opc10">Telenovelas</li></label>
                            </ul>
                            <center>
                                <a class="btn btn-outline-success" onclick="termino()">Validar</a>
                            </center>
                            <ol>
                                <li>¿Qué son los medios audiovisuales?</li>
                                <textarea name="preg1" style="width: 90%;" rows="6" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                                <li>¿Cómo se pueden usar los medios audiovisuales en el aula de clase?</li>
                                <textarea name="preg2" style="width: 90%;" rows="6" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                            </ol>
                            <input type="text" class="sr-only" id="pointsNota" name="pointsNota" value="1">
                            <input type="text" class="sr-only" id="pointsGood" name="pointsGood" value="0">
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo4/unidad1/actividad4" class="btn btn-success">Anterior</a>
                    <button id="btn-siguiente" class="btn btn-success" type="submit">Siguiente</button>
                    <!-- <a href="module4.1.6.php" class="btn btn-success">Siguiente</a> -->
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
<script src="<?php echo base_url();?>public/assets/modulos/mod4/js/u1script5.js"></script>
</body>

</html>