<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AMID</title>
  
  <?php $this->load->view('initial/linkGenerico');?>
  <link href="<?php echo base_url();?>public/assets/modulos/mod2/css/juego.css" rel="stylesheet">
  <link href="<?php echo base_url();?>public/assets/modulos/mod2/css/animacion.css" rel="stylesheet">

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
                    <a href="<?php echo base_url();?>modulo2" class="list-group-item active">Módulo 2</a>
                    <ul class="list-group-item">
                        <a href="<?php echo base_url();?>modulo2/unidad1" class="list-group-item">Unidad 1</a>
                        <a href="<?php echo base_url();?>modulo2/unidad2" class="list-group-item">Unidad 2</a>
                        <a href="<?php echo base_url();?>modulo2/unidad3" class="list-group-item active">Unidad 3</a>
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo2/unidad3/temas" class="list-group-item">Temas</a>
                            <a href="<?php echo base_url();?>modulo2/unidad3/actividad1" class="list-group-item active">Actividad</a>
                            <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(3)" class="list-group-item inactive">Unidad 4</a>
                    </ul>
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
                <h1><br>Unidad 3: Lo que genera noticias – explorando los criterios</h1>
                <?php echo form_open('modulo2/unidad3/actividad3');$this->session->set_userdata('idAc','m2u3a2'); ?>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Refuerzo</h4>
                        <p class="card-text">
                            Investigue y a continuación empareje cada palabra con su respectivo significado
                            <img id="imagen3" src="<?php echo base_url();?>public/assets/modulos/mod2/img/palabra3.png" onclick="validar('3')"alt="p3">
                            <img id="imagen7" src="<?php echo base_url();?>public/assets/modulos/mod2/img/definicion1.png" onclick="validar('7')" alt="d1">
                            <img id="imagen1" src="<?php echo base_url();?>public/assets/modulos/mod2/img/palabra1.png" onclick="validar('1')" alt="p1">
                            <img id="imagen10" src="<?php echo base_url();?>public/assets/modulos/mod2/img/definicion4.png" onclick="validar('10')" alt="d4">
                            <img id="imagen4" src="<?php echo base_url();?>public/assets/modulos/mod2/img/palabra4.png" onclick="validar('4')" alt="p4">
                            <img id="imagen6" src="<?php echo base_url();?>public/assets/modulos/mod2/img/palabra6.png" onclick="validar('6')" alt="p6">
                            <img id="imagen8" src="<?php echo base_url();?>public/assets/modulos/mod2/img/definicion2.png" onclick="validar('8')" alt="d2">
                            <img id="imagen2" src="<?php echo base_url();?>public/assets/modulos/mod2/img/palabra2.png" onclick="validar('2')" alt="p2">
                            <img id="imagen9" src="<?php echo base_url();?>public/assets/modulos/mod2/img/definicion3.png" onclick="validar('9')" alt="d3">
                            <img id="imagen11" src="<?php echo base_url();?>public/assets/modulos/mod2/img/definicion5.png" onclick="validar('11')" alt="d5">
                            <img id="imagen12" src="<?php echo base_url();?>public/assets/modulos/mod2/img/definicion6.png" onclick="validar('12')" alt="d6">
                            <img id="imagen5" src="<?php echo base_url();?>public/assets/modulos/mod2/img/palabra5.png" onclick="validar('5')" alt="p5">
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <input type="text" class="sr-only" id="pointsNota" name="pointsNota" value="1">
                <input type="text" class="sr-only" id="pointsGood" name="pointsGood" value="0">
                <center>
                    <a href="<?php echo base_url();?>modulo2/unidad3/actividad1" class="btn btn-success">Anterior</a>
                    <button id="btn-siguiente"  class="btn btn-success" type="submit">Siguiente</button>
                    <!-- <a href="module2.3_act3.php" class="btn btn-success">Siguiente</a> -->
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
<script src="<?php echo base_url();?>public/assets/modulos/mod2/js/und3script.js"></script>
</body>

</html>