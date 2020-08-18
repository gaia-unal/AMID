<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AMID</title>
  
  <?php $this->load->view('initial/linkGenerico');?>
  <link href="<?php echo base_url();?>public/assets/modulos/mod1/css/partes.css" rel="stylesheet">

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
                            <a href="#" class="list-group-item active">Actividad</a>
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
                <div class="card mt-4">
                    <div class="card-body">
                    <div id="parte1" style="display:block;">
                        <h4>Análisis</h4>
                        <p class="card-text">
                            <blockquote>
                                <em>
                                    “La teoría del periodismo que hemos heredado……. forma la base del periodismo en el
                                    nuevo siglo, un periodismo que hace sentido basado en la síntesis, verificación y
                                    feroz independencia.”, (Bill Kovach and Tom Rosenstiel, The Elements of Journalism).
                                </em>
                            </blockquote>
                            Los periodistas tienen que dar sentido a una gran cantidad de información y considerar como
                            organizarla de manera que destaquen los temas que son más importantes para que la audiencia,
                            que tiene diferentes niveles de comprensión sobre los temas, de manera que ésta sea capaz de
                            comprender. Los juicios que se hagan incluirán la selección de aquellas historias que se
                            consideran de valor noticioso y decidirán cómo presentar la información. Sin lugar a dudas,
                            la forma de la presentación (a veces conocida como el “enmarque”) reflejará la experiencia y
                            la perspectiva del periodista. Es importante que la audiencia entienda estos enmarques y que
                            piense de una manera crítica.
                        </p>
                    </div>

                    <div id="parte2" style="display:none;">
                        <h4>Análisis de textos</h4>
                        <p class="card-text">
                            analizar el interés periodístico de los artículos de cada primera página de los principales
                            periódicos (o su versión en línea), basado en el criterio para evaluar el valor de la
                            noticia de un artículo. Esto generalmente incluye factores como:
                            <ul>
                                <li>Oportunidad</li>
                                <li>Impacto e importancia</li>
                                <li>Prominencia</li>
                                <li>Proximidad</li>
                                <li>Conflicto</li>
                                <li>Inusual / interés humano</li>
                                <li>Ocurrencia</li>
                                <li>Necesidad </li>
                            </ul>
                            Además, también se deben analizar los artículos basados en los factores que se toman en
                            cuenta cuando se hacen juicios sobre las noticias o para dar forma. Estos son:
                            <ul>
                                <li>Veracidad: precisión (que los hechos sean correctos) y coherencia (que los hechos
                                    tengan sentido)</li>
                                <li>Dedicado al interés público</li>
                                <li>Información en lugar de manipulación al público</li>
                                <li>Que esté completo / amplitud</li>
                                <li>Diversidad (inclusión de noticias de todas las comunidades, no sólo para las
                                    audiencias escogidas). </li>
                            </ul>
                            También se debe prestar atención a cómo se ubican los artículos, los titulares y el tamaño
                            de letra utilizada, las fotografías y las leyendas que incluyen.
                        </p>
                    </div>

                    <div id="parte3" style="display:none;">
                        <h4>Análisis de contexto</h4>
                        <p class="card-text">
                            CNN y Al Jazeera (al igual que otras organizaciones de medios de elección/relevancia)
                            realizan coberturas de noticias sobre un tema en particular, un día en particular y comparan
                            y contrastan los puntos de vista (es decir, la presentación de un punto de vista o
                            perspectiva en particular) y tratamiento (es decir, información que se provee, fuentes
                            citadas, entrevistas dadas y cualquier apoyo visual de las noticias). Cada uno lo hace de
                            manera diferente y haciendo énfasis en unas cosas más que otras.
                        </p>
                    </div>

                    <div id="parte4" style="display:none;">
                        <h4>Análisis de noticias</h4>
                        <p class="card-text">
                            Aunque dos medios u organizaciones tomen una misma noticia y la transmitan, es de resaltar
                            que una puede tener más fuerza que la otra, al igual que contener más información.
                        </p>
                    </div>
                    <center>
                        <div id="btnAtras">
                            <a onclick="volver();">
                                <img width=70 src="<?php echo base_url();?>public/assets/img/arrow_l.jpg">
                            </a>
                        </div>
                        <div id="btnAdelante">
                            <a onclick="avanzar();">
                                <img width=70 src="<?php echo base_url();?>public/assets/img/arrow_r.jpg">
                            </a>
                        </div>
                    </center>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo2/unidad3/temas" class="btn btn-success">Anterior</a>
                    <a href="<?php echo base_url();?>modulo2/unidad3/actividad2" class="btn btn-success">Siguiente</a>
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
<script src="<?php echo base_url();?>public/assets/modulos/mod2/js/arrows.js"></script>
</body>

</html>