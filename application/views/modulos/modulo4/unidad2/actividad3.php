<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AMID</title>
  
  <?php $this->load->view('initial/linkGenerico');?>
  <link href="<?php echo base_url();?>public/assets/modulos/mod4/css/estilo.css" rel="stylesheet">

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
                            <a href="<?php echo base_url();?>modulo4/unidad2/evaluacion" class="list-group-item">Evaluación</a>
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
                <?php echo form_open('modulo4/unidad2/evaluacion');$this->session->set_userdata('idAct','m4u2a3'); ?>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Noticias Actuales</h4>
                        <p class="card-text">
                            Lea el siguiente artículo y responda:
                            <div><img src="<?php echo base_url();?>public/assets/modulos/mod4/img/noti1.png" alt="Noticia 1" class="noti"></div>
                            <div><img src="<?php echo base_url();?>public/assets/modulos/mod4/img/noti2.png" alt="Noticia 2" class="noti"></div>
                            <div><img src="<?php echo base_url();?>public/assets/modulos/mod4/img/noti3.png" alt="Noticia 3" class="noti"></div>
                            <div><img src="<?php echo base_url();?>public/assets/modulos/mod4/img/noti4.png" alt="Noticia 4" class="noti"></div>
                            <div><img src="<?php echo base_url();?>public/assets/modulos/mod4/img/noti5.png" alt="Noticia 5" class="noti"></div>
                            <br>
                            Tomado de:
                            https://www.eltiempo.com/elecciones-colombia-2019/otras-ciudades/amenazas-a-dos-candidatos-a-la-alcaldia-en-la-guajira-426572
                            <br> <br>
                            <ol>
                                <li>¿Cómo los distintos medios afectan al tipo de cobertura y a la información que se
                                    puede dar?</li>
                                <textarea name="preg1" style="width: 90%;" rows="6" minlength="1" maxlength="500" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>¿Qué códigos y convenciones se utilizan en el desarrollo de cada historia?</li>
                                <textarea name="preg2" style="width: 90%;" rows="6" minlength="1" maxlength="500" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                                <li>¿De qué forma este ejercicio es un ejemplo de la frase “el medio es el mensaje”?
                                </li>
                                <textarea name="preg3" style="width: 90%;" rows="6" minlength="1" maxlength="500" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                            </ol>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo4/unidad2/actividad2" class="btn btn-success">Anterior</a>
                    <button id="btn-siguiente" class="btn btn-success" name="submit" type="submit">Siguiente</button>
                    <!-- <a href="../module4.2_eval.php" class="btn btn-success">Siguiente</a> -->
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