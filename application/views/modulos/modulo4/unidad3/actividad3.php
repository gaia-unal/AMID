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
                        <h4>Carteles</h4>
                        <p class="card-text">
                            Los carteles de las películas se personalizan de acuerdo a los países. A continuación se
                            presentarán los carteles y las modificaciones realizadas para estrenarse la película en los
                            diferentes paises. Al lado izquierdo se observa el cartel original, y al lado derecho el
                            cartel adaptado en los diferentes paises.
                            <ul>
                                <li>Japón</li>
                                <div><img src="<?php echo base_url();?>public/assets/modulos/mod4/img/cartel1.png" alt="wolverine" class="cartel"></div><br><br>
                                <li>México</li>
                                <div><img src="<?php echo base_url();?>public/assets/modulos/mod4/img/cartel2.png" alt="mayordomo" class="cartel"></div><br><br>
                                <li>Corea del Sur</li>
                                <div><img src="<?php echo base_url();?>public/assets/modulos/mod4/img/cartel3.png" alt="slave" class="cartel"></div><br><br>
                                <li>Australia</li>
                                <div><img src="<?php echo base_url();?>public/assets/modulos/mod4/img/cartel4.png" alt="awkward" class="cartel"></div><br><br>
                                <li>Tailandia</li>
                                <div><img src="<?php echo base_url();?>public/assets/modulos/mod4/img/cartel5.png" alt="TFIOS" class="cartel"></div><br><br>
                                <li>China</li>
                                <div><img src="<?php echo base_url();?>public/assets/modulos/mod4/img/cartel6.png" alt="amazingSpidy" class="cartel"></div><br><br>
                                <li>Francia</li>
                                <div><img src="<?php echo base_url();?>public/assets/modulos/mod4/img/cartel7.png" alt="snowpiercer" class="cartel"></div>
                            </ul>
                            En los siguientes enlaces puede encontrar más ejemplos:
                            <a href="https://www.buzzfeed.com/adambvary/14-carteles-de-peliculas-internacionales-que-son-m"
                                target="_blank">Ejemplos 1</a> &nbsp - &nbsp <a
                                href="https://www.rinconabstracto.com/2011/11/posters-de-peliculas-de-hollywood.html"
                                target="_blank">Ejemplos 2</a>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo4/unidad3/actividad2" class="btn btn-success">Anterior</a>
                    <a href="<?php echo base_url();?>modulo4/unidad3/actividad4" class="btn btn-success">Siguiente</a>
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