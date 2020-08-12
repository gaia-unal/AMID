<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AMID</title>
  
  <?php $this->load->view('initial/linkGenerico');?>
  <link href="<?php echo base_url();?>public/assets/modulos/mod7/css/u13estilo.css" rel="stylesheet">

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
                            <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
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
                        <h4>Web</h4>
                        <div>
                            <center>
                                <img class="bounceIn animated" id="web" src="<?php echo base_url();?>public/assets/modulos/mod7/img/web.png" alt="web">
                                <p>Fuente: https://sergioescriba.com/tipos-clasificacion-paginas-web/</p>
                            </center>
                        </div>
                        <p class="card-text">
                            <ul class="content">
                                <li><a href="#" onclick="preg1();">
                                        <h4>¿Qué es?</h4>
                                    </a></li>
                                <li><a href="#" onclick="preg2();">
                                        <h4>Web 2.0</h4>
                                    </a></li>
                                <li><a href="#" onclick="preg3();">
                                        <h4>Ventajas</h4>
                                    </a></li>
                                <li><a href="#" onclick="preg4();">
                                        <h4>Ejemplos Web 2.0</h4>
                                    </a></li>
                                <li><a href="#" onclick="preg5();">
                                        <h4>Usos</h4>
                                    </a></li>
                                <li><a href="#" onclick="preg6();">
                                        <h4>Navegadores</h4>
                                    </a></li>
                            </ul>
                            <h4>Diferencia entre Web e Internet</h4>
                            <p>Puedes dar clic a la imagen para verla más amplia</p>
                            <div class="img"><a href="<?php echo base_url();?>public/assets/modulos/mod7/img/diferencias.png" target="_blank"> <img id="diferencias"
                                        src="<?php echo base_url();?>public/assets/modulos/mod7/img/diferencias.png" alt="diferencias"></a></div>
                            <center>
                                <p>Fuente: https://www.diferenciador.com/diferencia-entre-internet-y-web/</p>
                            </center>
                            <h4>Referencias</h4>
                            [1]Autores: Julián Pérez Porto y María Merino. Publicado: 2010. Actualizado: 2013.
                            Definicion.de: Definición de web (https://definicion.de/web/) <br>[2] Autor: María Estela
                            Raffino. Para: Concepto.de. Disponible en: https://concepto.de/internet/. Consultado: 14 de
                            julio de 2019. Fuente: https://concepto.de/internet/#ixzz5tgGI0wGw <br> [3]
                            http://recursostic.educacion.es/observatorio/web/es/internet/web-20/1060-la-web-20-recursos-educativos
                            <br>[4] Fuente imagen Web 2.0: https://diferencias.eu/entre-web-1-0-y-web-2-0/
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo7/unidad1/actividad6" class="btn btn-success">Anterior</a>
                    <a href="<?php echo base_url();?>modulo7/unidad1/actividad8" class="btn btn-success btnSig Retraso5">Siguiente</a>
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
<script src="<?php echo base_url();?>public/assets/modulos/mod7/js/u13info.js"></script>
</body>

</html>