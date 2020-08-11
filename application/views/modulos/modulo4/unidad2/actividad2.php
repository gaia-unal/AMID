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
                    <a href="<?php echo base_url();?>modulo4/unidad1" class="list-group-item">Unidad 1</a>
                        <a href="<?php echo base_url();?>modulo4/unidad2" class="list-group-item active">Unidad 2</a>
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo4/unidad2/temas" class="list-group-item">Temas</a>
                            <a href="<?php echo base_url();?>modulo4/unidad2/actividad1" class="list-group-item active">Actividad</a>
                            <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 3</a>
                        <a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 4</a>
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
                <h1><br>Unidad 2: El medio y el mensaje: noticias impresas y difundidas</h1>
                <?php echo form_open('modulo4/unidad2/actividad3');$this->session->set_userdata('idAc','m4u2a2'); ?>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Información pública</h4>
                        <p class="card-text">
                            A continuación se hará la descripción de una situación sobre la cuál deberá responder las
                            preguntas<br>
                            Un gobierno está planificando cambiar la legislación que tendrá un efecto sobre la
                            protección ambiental. Un oficial del gobierno acaba de dar un discurso para justificar la
                            posición del gobierno. Un gran número de personas jóvenes se han presentado para protestar y
                            se desata una lucha entre los que protestan y la policía.
                            <ol>
                                <li>¿Cómo este evento va a ser cubierto por un periódico, una estación de radio o una
                                    estación de televisión?</li>
                                <textarea name="preg1" style="width: 90%;" rows="6" minlength="1" maxlength="500" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" autofocus></textarea>
                                <li>¿Cómo cree usted que la cobertura diferirá y por qué? </li>
                                <textarea name="preg2" style="width: 90%;" rows="6" minlength="1" maxlength="500" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                                <li>¿Cuántas de estas diferencias se basarían en las características particulares de
                                    cada medio?</li>
                                <textarea name="preg3" style="width: 90%;" rows="6" minlength="1" maxlength="500" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                            </ol>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo4/unidad2/actividad1" class="btn btn-success">Anterior</a>
                    <button id="btn-siguiente" class="btn btn-success" type="submit">Siguiente</button>
                    <!-- <a href="module4.2.3.php" class="btn btn-success">Siguiente</a> -->
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