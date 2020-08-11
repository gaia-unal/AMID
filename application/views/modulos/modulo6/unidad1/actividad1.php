<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AMID</title>
  
  <?php $this->load->view('initial/linkGenerico');?>
  <link href="<?php echo base_url();?>public/assets/modulos/mod6/css/u1estilo.css" rel="stylesheet">

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
                <a href="<?php echo base_url();?>modulo6" class="list-group-item active">Módulo 6</a>
                    <ul class="list-group-item">
                        <a href="<?php echo base_url();?>modulo6/unidad1" class="list-group-item active">Unidad 1</a>
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo6/unidad1/temas" class="list-group-item">Temas</a>
                            <a href="#" class="list-group-item active">Actividad</a>
                            <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
                    </ul>
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
                <h1><br>Unidad 1: De Los Medios Tradicionales a las Nuevas Tecnologías Mediáticas</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <p class="card-text">Ha existido un importante desarrollo en el crecimiento de los medios
                            digitales lo que ha dado el paso de un modelo de comunicación tradicional centrado en “uno
                            para muchos” característico de los medios impresos y de transmisión, hacia un modelo de “par
                            en par” que facilita la colaboración creativa y el compartir los conocimientos. A medida que
                            el contenido es digitalizado, este se vuelve accesible para una multitud de dispositivos,
                            incluyendo la radio, televisión, computadores personales y quizá, lo más importante, los
                            teléfonos celulares, que están emergiendo como una plataforma dominante de entrega de
                            contenido de todo tipo. La digitalización de la voz, la imagen, el sonido y los datos –
                            conocido como convergencia – está creando nuevas oportunidades de interacción<br> Lea la
                            breve historia de los medios de comunicación y responda las preguntas de la Actividad.
                        </p>
                        <div>
                            <img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod6/img/img1.png">
                            <img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod6/img/img2.png">
                            <img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod6/img/img3.png">
                        </div>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo6/unidad1/temas" class="btn btn-success">Anterior</a>
                    <a href="<?php echo base_url();?>modulo6/unidad1/actividad2" class="btn btn-success">Siguiente</a>
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
<script src="<?php echo base_url();?>public/assets/modulos/mod"></script>
</body>

</html>