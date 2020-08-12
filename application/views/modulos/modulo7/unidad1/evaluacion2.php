<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AMID</title>
  
  <?php $this->load->view('initial/linkGenerico');?>
  <link href="<?php echo base_url();?>public/assets/modulos/mod7/css/u1estilos.css" rel="stylesheet">

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
                            <a href="<?php echo base_url();?>modulo7/unidad1/evaluacion1" class="list-group-item active">Evaluación</a>
                        </ul>
                        <a href="<?php echo base_url();?>modulo7/unidad2" class="list-group-item">Unidad 2</a>
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

                <?php echo form_open('modulo7/unidad2');$this->session->set_userdata('idAc','m7u12'); ?>

                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Evaluación Unidad 1</h4>
                        <p class="card-text">Frente a cada palabra, escribe la letra que corresponde a la definición
                            correcta </p>
                        <div>
                            <img class="fondo" src="<?php echo base_url();?>public/assets/modulos/mod7/img/fondo.png" alt="fondo">
                        </div>
                        </center>
                        <input class="respuesta" id="resp1" type="text" autofocus />
                        <input class="respuesta" id="resp2" type="text" autofocus />
                        <input class="respuesta" id="resp3" type="text" autofocus />
                        <input class="respuesta" id="resp4" type="text" autofocus />
                        <input class="respuesta" id="resp5" type="text" autofocus />
                        <input class="respuesta" id="resp6" type="text" autofocus />
                        <br>

                        <input type="text" name="preg" id="preg" value="" style="display: none">

                        <center>
                            <a href="#"  class="btn btn-outline-success" onclick="termino()">Validar</a>
                        </center>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo7/unidad1/evaluacion1" class="btn btn-success">Anterior</a>
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
<script src="<?php echo base_url();?>public/assets/modulos/mod7/js/u1actividad.js"></script>
</body>

</html>