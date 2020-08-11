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
                    <a href="<?php echo base_url();?>modulo4" class="list-group-item">Módulo 4</a>
                    <a href="<?php echo base_url();?>modulo5" class="list-group-item">Módulo 5</a>
                    <a href="<?php echo base_url();?>modulo6" class="list-group-item">Módulo 6</a>
                    <a href="<?php echo base_url();?>modulo7" class="list-group-item active">Módulo 7</a>
                    <ul class="list-group-item">
                        <a href="<?php echo base_url();?>modulo7/unidad1" class="list-group-item active">Unidad 1</a>
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo7/unidad1/temas" class="list-group-item">Temas</a>
                            <a href="<?php echo base_url();?>modulo7/unidad1/actividad1" class="list-group-item">Actividades</a>
                            <a href="#" class="list-group-item active">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
                    </ul>
                    <a href="<?php echo base_url();?>modulo8" class="list-group-item">Módulo 8</a>
				<a href="<?php echo base_url();?>modulo9" class="list-group-item">Módulo 9</a>
				<a href="<?php echo base_url();?>modulo10" class="list-group-item">Módulo 10</a>
				<a href="<?php echo base_url();?>modulo11" class="list-group-item">Módulo 11</a>
				<a href="<?php echo base_url();?>modulo12" class="list-group-item">Módulo 12</a>
                    <br />
                    <br />
                </div>
                <br /><br />
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <br>
                <h1>Unidad 1: Los jóvenes en el mundo virtual</h1>

                <?php echo form_open('modulo7/unidad1/evaluacion2');$this->session->set_userdata('idAc','m7u11'); ?>
                
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Evaluación Unidad 1</h4>
                        <p class="card-text">
                            <!-- Pregunta 1 -->
                            <h4> 1. ¿Cuáles son los principales intereses de los niños y adolescentes en
                                Internet?</h4>
                            <label class="container" id="p1-r1">
                                <input type="radio" name="preg1" id="opc1" onclick="incorrecto(1);" value="0">
                                a. Jugar, usar redes sociales y ver vídeos.
                            </label>
                            <label class="container" id="p1-r2">
                                <input type="radio" name="preg1" id="opc2" onclick="correcto(1);" value="0.85">
                                b. Trabajos del colegio, escuchar musica y usar redes sociales.
                            </label>
                            <label class="container" id="p1-r3">
                                <input type="radio" name="preg1" id="opc3" onclick="incorrecto(1);" value="0">
                                c. Pasar tiempo en la un mundo virtual, usar redes sociales, h
                                    trabajos del colegio.</p>
                            </label>
                            <!-- Pregunta 2 -->
                            <h4> 2. ¿Qué conductas se pueden pasar por alto en aquellos que usan Internet?</h4>
                            <label class="container" id="p2-r1">
                                <input type="radio" name="preg2" id="opc1" onclick="incorrecto(2);" value="0">
                                a. Tolerancia, diversión y buen juicio.
                            </label>
                            <label class="container" id="p2-r2">
                                <input type="radio" name="preg2" id="opc2" onclick="incorrecto(2);" value="0">
                                b. Síndrome de abstinencia, perdida de control y cambio
                                    comportamiento.</p>
                            </label>
                            <label class="container" id="p2-r3">
                                <input type="radio" name="preg2" id="opc3" onclick="correcto(2);" value="0.83">
                                c. Buen comportamiento, obediencia y acato de las normas y reglas.
                            </label>
                            <!-- Pregunta 3 -->
                            <h4> 3. ¿Qué herramientas puede utilizar para inculcar un buen comportamiento en
                                Internet?</h4>
                            <label class="container" id="p3-r1">
                                <input type="radio" name="preg3" id="opc1" onclick="incorrecto(3);" value="0">
                                a. Wikis, redes sociales y dispositivos moviles.
                            </label>
                            <label class="container" id="p3-r2">
                                <input type="radio" name="preg3" id="opc2" onclick="incorrecto(3);" value="0">
                                b. Facebook, wikis y correo electrónico.
                            </label>
                            <label class="container" id="p3-r3">
                                <input type="radio" name="preg3" id="opc3" onclick="correcto(3);" value="0.83">
                                c. Wikis.
                            </label>
                            <!--Pregunta 4-->
                            <h4> 4. ¿Cuál corresponde al lugar más usado por los jóvenes para navegar en
                                Internet?</h4>
                            <label class="container" id="p4-r1">
                                <input type="radio" name="preg4" id="opc1" onclick="correcto(4);" value="0.83">
                                a. Sala u otra habitación común.
                            </label>
                            <label class="container" id="p4-r2">
                                <input type="radio" name="preg4" id="opc2" onclick="incorrecto(4);" value="0">
                                b. Habitación privada.
                            </label>
                            <label class="container" id="p4-r3">
                                <input type="radio" name="preg4" id="opc3" onclick="incorrecto(4);" value="0">
                                c. Cualquier lugar que permita conexión a través de una plataf
                                    movil.</p>
                            </label>
                            <!-- Pregunta 5 -->
                            <h4> 5. Segun las regulaciones de privacidad, ¿Cuál es la edad mínima para navegar
                                en Redes sociales?
                            </h4>
                            <label class="container" id="p5-r1">
                                <input type="radio" name="preg5" id="opc1" onclick="incorrecto(5);" value="0">
                                a. 11 años.
                            </label>
                            <label class="container" id="p5-r2">
                                <input type="radio" name="preg5" id="opc2" onclick="incorrecto(5);" value="0">
                                b. 12 años.
                            </label>
                            <label class="container" id="p5-r3">
                                <input type="radio" name="preg5" id="opc3" onclick="correcto(5);" value="0.83">
                                c. 13 años.
                            </label>
                            <!-- Pregunta 6 -->
                            <h4> 6. ¿Cuáles son los principales riesgos que se pueden encontrar en Internet?
                            </h4>
                            <label class="container" id="p6-r1">
                                <input type="radio" name="preg6" id="opc1" onclick="incorrecto(6);" value="0">
                                a. Ciberbullying, Sexting y Grooming.
                            </label>
                            <label class="container" id="p6-r2">
                                <input type="radio" name="preg6" id="opc2" onclick="correcto(6);" value="0.83">
                                b. Sexting, Sextorsión, Ciberbullying y Grooming.
                            </label>
                            <label class="container" id="p6-r3">
                                <input type="radio" name="preg6" id="opc3" onclick="incorrecto(6);" value="0">
                                c. Sexting y Sextorsión.
                            </label>
                        </p>
                        <center>
                            <a href="#" class="btn btn-outline-success" onclick="validar();">Validar</a>
                        </center>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo7/unidad1/actividad10" class="btn btn-success">Anterior</a>
                    <button id="btn-siguiente"  class="btn btn-success" type="submit">Siguiente</button>
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
<script src="<?php echo base_url();?>public/assets/modulos/mod7/js/u1preguntas.js"></script>
</body>

</html>