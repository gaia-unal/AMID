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
                <a href="<?php echo base_url();?>modulo5" class="list-group-item active">Módulo 5</a>
                    <ul class="list-group-item">
                        <a href="<?php echo base_url();?>modulo5/unidad1" class="list-group-item active">Unidad 1</a>
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo5/unidad1/temas" class="list-group-item">Temas</a>
                            <a href="<?php echo base_url();?>modulo5/unidad1/actividad1" class="list-group-item">Actividad</a>
                            <a href="#" class="list-group-item active">Evaluación</a>
                        </ul>
                        <a href="<?php echo base_url();?>modulo5/unidad2" class="list-group-item">Unidad 2</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 4</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 5</a>
                    </ul>
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
                <h1><br>Unidad 1: Publicidad, ingresos y regulaciones</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Evaluación</h4>
                        <p class="card-text">
                            <ul>
                                <li>Haga un resumen de las principales ideas que cubren las regulaciones en la industria
                                    de la publicidad y explique su propósito. Explique de qué forma apoyan los intereses
                                    de los ciudadanos y consumidores. Explique el impacto potencial de estas
                                    regulaciones en la industria</li>
                                <textarea name="preg1" id="p1-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Evalúe hasta qué punto se cumplen las regulaciones. Dé ejemplos específicos de cada
                                    anuncio para sustanciar su respuesta</li>
                                <textarea name="preg2" id="p2-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Investigue la publicidad como un modelo de ingresos para un medio en particular. Por
                                    ejemplo, examine la franja horaria de televisión o programación de radio en su
                                    región. Elija una estación en especial y vea o escuche una o dos horas de su
                                    programación. Anote todos los anuncios que se transmiten durante este tiempo</li>
                                <textarea name="preg3" id="p3-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>El principal propósito de los medios y otros proveedores de información es obtener
                                    ganancias. Hable sobre esta afirmación. Dé argumentos a favor y en contra. ¿Podrían
                                    los medios y los otros proveedores de información operar sin anuncios publicitarios?
                                </li>
                                <textarea name="preg5" id="p5-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                            </ul>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo5/unidad1/actividad1" class="btn btn-success">Anterior</a>
                    <a href="<?php echo base_url();?>modulo5/unidad2" class="btn btn-success">Siguiente</a>
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