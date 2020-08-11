<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AMID</title>
  
  <?php $this->load->view('initial/linkGenerico');?>
  <link href="<?php echo base_url();?>public/assets/modulos/mod3/css/u5estilo.css" rel="stylesheet">

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
					<a href="<?php echo base_url();?>modulo3" class="list-group-item active">Módulo 3</a>
                    <ul class="list-group-item">
                        <a href="<?php echo base_url();?>modulo3/unidad1" class="list-group-item">Unidad 1</a>
                        <a href="<?php echo base_url();?>modulo3/unidad2" class="list-group-item">Unidad 2</a>
                        <a href="<?php echo base_url();?>modulo3/unidad3" class="list-group-item">Unidad 3</a>
                        <a href="<?php echo base_url();?>modulo3/unidad4" class="list-group-item">Unidad 4</a>
                        <a href="<?php echo base_url();?>modulo3/unidad5" class="list-group-item active">Unidad 5</a>
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo3/unidad5/temas" class="list-group-item">Temas</a>
                            <a href="#" class="list-group-item active">Actividad</a>
                            <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                        </ul>
                    </ul>
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
                <h1><br>Unidad 5: Edición digital y retoque en computadora</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <p class="card-text">
                            “Las computadoras han hecho que el retoque y la total re-creación de las fotos sea tan
                            rápida y eficiente que ahora los técnicos en fotografía se han juntado con los ingenieros de
                            video y grabación en la fraternidad de manipuladores modernos, cada uno capaz de ensamblar
                            pedazos de la realidad para lograr cualquier efecto.” (Marshall Blonsky). <br>
                            <blockquote cite="www.saffo.com/essays/texthotnewmedium.php" align="justify">
                                “Para el final de la década, miraremos hacia atrás, a 1992 y nos preguntaremos cómo
                                un video de un policía golpeando a un ciudadano pudo haber causado una revuelta en Los
                                Ángeles. La época de la inocencia de las videograbadoras se evaporará
                                a medida que los adolescentes manipulen rutinariamente las imágenes más prosaicas a
                                ficciones vividas y convincentes. Los robos inteligentes de las imágenes de la
                                publicidad y de los videos de las noticias se convertirán en una forma de arte. Ya no
                                podremos creer lo que verán nuestros ojos cuando observen un video – realidad mediática,
                                y buscaremos indicadores externos de confiabilidad.”
                            </blockquote>
                            La manipulación de las imágenes y los videos ha tenido graves implicaciones para la
                            veracidad de la información y no es aceptable en los medios de noticias.
                            Las imágenes manipuladas no deberían ser utilizadas en las historias de noticias o en
                            ninguna situación legal que pueda servir como evidencia.

                            <h4>Lea el siguente artículo y a continuación responda las preguntas de la Actividad</h4>
                            Retoque fotográfico antes de la existencia de Photoshop
                            <div class="">
                                <img id="imagen" src="<?php echo base_url();?>public/assets/modulos/mod3/img/u5img1.png">
                                <img id="imagen" src="<?php echo base_url();?>public/assets/modulos/mod3/img/u5img2.png">
                            </div>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo3/unidad5/temas" class="btn btn-success">Anterior</a>
                    <a href="<?php echo base_url();?>modulo3/unidad5/actividad2" class="btn btn-success">Siguiente</a>
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