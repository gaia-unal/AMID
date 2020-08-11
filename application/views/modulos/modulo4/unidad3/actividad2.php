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
                        <a href="<?php echo base_url();?>modulo4/unidad2" class="list-group-item">Unidad 2</a>
                        <a href="<?php echo base_url();?>modulo4/unidad3" class="list-group-item active">Unidad 3</a>
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo4/unidad3/temas" class="list-group-item">Temas</a>
                            <a href="<?php echo base_url();?>modulo4/unidad3/actividad1" class="list-group-item active">Actividad</a>
                            <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(3)" class="list-group-item inactive">Unidad 4</a>
                        
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
                <h1><br>Unidad 3: Géneros de películas y de cuentos</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Storyboard</h4>
                        <p class="card-text">
                            <blockquote>"Un storyboard, en castellano guión gráfico, es una secuencia de imágenes o
                                ilustraciones que hacen de guía al argumento de una historia y que permiten
                                previsualizar un resultado. Es una técnica utilizada, por ejemplo, en cómics [...] La
                                utilización del storyboard en la escuela puede tener como objetivos fomentar la
                                creatividad, la animación a la lectura, la organización y secuenciación de ideas a
                                través de un guión y la utilización de las nuevas tecnologías para la creación de un
                                producto, en este caso de un cómic" (Gómez-Chacón, 2015).
                            </blockquote>
                            A continuación se listarán herramientas online que permiten la creación de storyboards:
                            <ul>
                                <li><a href="https://www.storyboardthat.com/" target="_blank">StoryboardThat</a></li>
                                <li><a href="https://www.makebeliefscomix.com/" target="_blank">Make Beliefs Comix</a>
                                </li>
                                <li><a href="https://www.pixton.com/es/" target="_blank">Pixton</a></li>
                                <li><a href="http://www.comicmaster.org.uk/" target="_blank">Comic Master</a></li>
                                <li><a href="https://storybird.com/" target="_blank">Storybird</a></li>
                                <li><a href="https://chogger.com/" target="_blank">Chogger</a></li>
                                <li><a href="http://writecomics.com/" target="_blank">Write Comics</a></li>
                                <li><a href="http://www.wittycomics.com/" target="_blank">Witty Comics</a></li>
                            </ul>
                            <strong>Nota:</strong> Algunas de las herramientas listadas se encuentran en inglés. <br>
                            <strong>Tomado de:
                            </strong>https://parapnte.educacion.navarra.es/2015/11/16/herramientas-on-line-para-crear-guiones-graficos-o-storyboards/
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo4/unidad3/actividad1" class="btn btn-success">Anterior</a>
                    <a href="<?php echo base_url();?>modulo4/unidad3/actividad3" class="btn btn-success">Siguiente</a>
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