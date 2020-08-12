<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AMID</title>
  
  <?php $this->load->view('initial/linkGenerico');?>
  <link href="<?php echo base_url();?>public/assets/modulos/mod7/css/u14juego.css" rel="stylesheet">
  <link href="<?php echo base_url();?>public/assets/modulos/mod7/css/u14animacion.css" rel="stylesheet">

  

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
                            <a href="<?php echo base_url();?>modulo7/unidad1/evaluacion1" class="list-group-item">Evaluación</a>
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
                        <h4>Empareja cada palabra con su significado</h4>
                        <a href="#" onclick="validar('3')"><img id="imagen3" src="<?php echo base_url();?>public/assets/modulos/mod7/img/palabra/3.png"
                                alt="p3"></a>
                        <a href="#" onclick="validar('7')"><img id="imagen7" src="<?php echo base_url();?>public/assets/modulos/mod7/img/definicion/1.png"
                                alt="d1"></a>
                        <a href="#" onclick="validar('1')"><img id="imagen1" src="<?php echo base_url();?>public/assets/modulos/mod7/img/palabra/1.png"
                                alt="p1"></a>
                        <a href="#" onclick="validar('10')"><img id="imagen10" src="<?php echo base_url();?>public/assets/modulos/mod7/img/definicion/4.png"
                                alt="d4"></a>
                        <a href="#" onclick="validar('4')"><img id="imagen4" src="<?php echo base_url();?>public/assets/modulos/mod7/img/palabra/4.png"
                                alt="p4"></a>
                        <a href="#" onclick="validar('6')"><img id="imagen6" src="<?php echo base_url();?>public/assets/modulos/mod7/img/palabra/6.png"
                                alt="p6"></a>
                        <a href="#" onclick="validar('8')"><img id="imagen8" src="<?php echo base_url();?>public/assets/modulos/mod7/img/definicion/2.png"
                                alt="d2"></a>
                        <a href="#" onclick="validar('2')"><img id="imagen2" src="<?php echo base_url();?>public/assets/modulos/mod7/img/palabra/2.png"
                                alt="p2"></a>
                        <a href="#" onclick="validar('9')"><img id="imagen9" src="<?php echo base_url();?>public/assets/modulos/mod7/img/definicion/3.png"
                                alt="d3"></a>
                        <a href="#" onclick="validar('11')"><img id="imagen11" src="<?php echo base_url();?>public/assets/modulos/mod7/img/definicion/5.png"
                                alt="d5"></a>
                        <a href="#" onclick="validar('12')"><img id="imagen12" src="<?php echo base_url();?>public/assets/modulos/mod7/img/definicion/6.png"
                                alt="d6"></a>
                        <a href="#" onclick="validar('5')"><img id="imagen5" src="<?php echo base_url();?>public/assets/modulos/mod7/img/palabra/5.png"
                                alt="p5"></a>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo7/unidad1/actividad9" class="btn btn-success">Anterior</a>
                    <a href="<?php echo base_url();?>modulo7/unidad1/evaluacion1" class="btn btn-success btnSig Retraso5">Siguiente</a>
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
<script src="<?php echo base_url();?>public/assets/modulos/mod7/js/u14script.js"></script>
</body>

</html>