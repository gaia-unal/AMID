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
                    <a href="<?php echo base_url();?>modulo1" class="list-group-item active"><i class="dropdown-menu"></i>Módulo 1<span
                            class="arrow"></span></a>
                    <ul class="list-group-item">
                        <a href="<?php echo base_url();?>modulo1/unidad1" class="list-group-item">Unidad 1</a>
                        <a href="<?php echo base_url();?>modulo1/unidad2" class="list-group-item active">Unidad 2</a>
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo1/unidad2/temas" class="list-group-item ">Temas</a>
                            <a href="<?php echo base_url();?>modulo1/unidad2/actividad1" class="list-group-item">Actividades</a>
                            <a href="#" class="list-group-item active">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(2)" class="list-group-item inactive" id="unid-sgte">Unidad 3</a>
                        <a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 4</a>
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
                <h1><br>Unidad 2: AMI y la participación cívica</h1>
                
                <?php echo form_open('modulo1/unidad3/inicio');$this->session->set_userdata('idAct','m1u2'); ?>

                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Evaluación</h4>
                        <p class="card-text">
                            Considere la siguiente frase: <em>"Los lideres están en la obligación de mantener la
                                neutralidad de la información, manteniendo una mentalidad abierta con el fin de que el
                                ciudadano de bien tome buenas decisiones evitando las conveniencias particulares"</em>
                            <br> <br>
                            <strong>
                            ¿Cuál de las siguientes afirmaciones apoya en mejor medida lo expresado por la anterior frase? <br> <br>
                            </strong>
                            <label><input type="radio" name="opc1" id="op1" onclick="incorrecto()" value="1" required>
                            La información debe ser un medio a través del cual los ciudadanos deben ser influidos a actuar de una mejor manera.
                            </label>
                            <br>
                            <label><input type="radio" name="opc1" id="op2" onclick="incorrecto()" value="1" required>
                            La sociedad civil y los diferentes actores que en ella se ivolucran deben ser el parámetro para tomar decisiones según la cultura y sociedad en que viven.
                            </label>
                            <br>
                            <label><input type="radio" name="opc1" id="op3" onclick="incorrecto()" value="1" required>
                            Siempre hay una mejor decisión y es la que debe partir de la información de quien más sabe acerca de una temática en particular.
                            </label>
                            <br>
                            <label><input type="radio" name="opc1" id="op4" onclick="incorrecto()" value="1" required>
                            No me quedo con la opinión de uno, siempre analizo de forma personal las diferentes posiciones para hacer una síntesis de las ideas más importantes. 
                            </label>
                            <br>
                            <label><input type="radio" name="opc1" id="op5" onclick="correcto()" value="5" required>
                            Cuando lidero un grupo procuro poner en perspectiva las diferentes posiciones y compartir en diferentes medios los análisis de forma general sin posturas apasionadas. 
                            </label>
                            <br><br>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo1/unidad2/actividad5" class="btn btn-success">Anterior</a>
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
  <script src="<?php echo base_url();?>public/assets/modulos/mod1/js/und2script.5.js"></script>
</body>

</html>