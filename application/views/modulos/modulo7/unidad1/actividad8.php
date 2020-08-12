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
                            <a href="<?php echo base_url();?>modulo7/unidad1/actividad1" class="list-group-item active">Actividades</a>
                            <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
                    </ul>
                    <a href="<?php echo base_url();?>modulo8" class="list-group-item">Módulo 8</a>
				<a href="<?php echo base_url();?>modulo9" class="list-group-item">Módulo 9</a>
				<a href="<?php echo base_url();?>modulo10" class="list-group-item">Módulo 10</a>
				<a href="<?php echo base_url();?>modulo11" class="list-group-item">Módulo 11</a>
				<a href="<?php echo base_url();?>modulo12" class="list-group-item">Módulo 12</a>
                </div>
                <br /><br />
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <br>
                <h1>Unidad 1: Los jóvenes en el mundo virtual</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Web</h4>
                        <!-- Pregunta 1 -->
                        <div class="p1">
                            <h4>¿Qué es la Web?</h4>
                            <label class="container" id="p1-r1">
                                <input type="radio" name="preg1" id="opc1" onclick="correcto()" ;>
                                a. El concepto se utiliza en el ámbito tecnológico para nombrar a una red
                                    informática y, en general, a Internet.
                            </label>
                            <label class="container" id="p1-r2">
                                <input type="radio" name="preg1" id="opc2"
                                    onclick="incorrecto('Recuerda que esto hace referencia a la web 2.0; la respuesta correcta es la a');">
                                b. Concepto que permite nombrar a las aplicaciones de Internet que
                                    facilitan la interacción de los usuarios.
                            </label>
                            <label class="container" id="p1-r3">
                                <input type="radio" name="preg1" id="opc3"
                                    onclick="incorrecto('Este se refiere a un sitio web; la respuesta correcta es la a');">
                                c. Es un sitio donde todas las páginas guardan alguna relación entre sí y
                                    están enlazadas mediante vínculos
                            </label>
                            <h4>¿Qué mecanismo utilizaría para fomentar el correcto uso de la web?</h4>
                            <textarea name="preg2" id="p2-r" cols="90" rows="10" placeholder="..."></textarea>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo7/unidad1/actividad7" class="btn btn-success">Anterior</a>
                    <a href="<?php echo base_url();?>modulo7/unidad1/actividad9" class="btn btn-success btnSig Retraso5">Siguiente</a>
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
<script src="<?php echo base_url();?>public/assets/modulos/mod7/js/u13script.js"></script>
</body>

</html>