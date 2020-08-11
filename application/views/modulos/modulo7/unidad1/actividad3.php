<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AMID</title>
  
  <?php $this->load->view('initial/linkGenerico');?>
  <link href="<?php echo base_url();?>public/assets/modulos/mod7/css/u12estiloInternet.css" rel="stylesheet">

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
                        <h4>Internet</h4>
                        <div class="img"><img id="internet" src="<?php echo base_url();?>public/assets/modulos/mod7/img/internet.png" alt="internet"></div>
                        <center>
                            <p class="card-text">Fuente: [1]</p>
                        </center>
                        <p class="card-text">
                            Haz clic en los títulos para navegar por el contenido.
                            <ul class="content">
                                <li><a href="#" onclick="preg1();">
                                        <h4>¿Qué es?</h4>
                                    </a></li>
                                <li><a href="#" onclick="preg2();">
                                        <h4>Características</h4>
                                    </a></li>
                                <li><a href="#" onclick="preg3();">
                                        <h4>Usos</h4>
                                    </a></li>
                                <li><a href="#" onclick="preg4();">
                                        <h4>Navegadores</h4>
                                    </a></li>
                                <li><a href="#" onclick="preg5();">
                                        <h4>Estadísticas de Uso</h4>
                                    </a></li>
                                <li><a href="#" onclick="preg6();">
                                        <h4>Comportamiento</h4>
                                    </a></li>
                                <li><a href="#" onclick="preg7();">
                                        <h4>Peligros</h4>
                                    </a></li>
                            </ul>
                            <div class="img">
                                <a href="#" target="_blank">
                                    <img id="uso" src="<?php echo base_url();?>public/assets/modulos/mod7/img/estadisticas.png" alt="estadisticas">
                                </a>
                                <center>
                                    Fuente: TigoUne y Eafit
                                </center>
                            </div>
                            <h4>Referencias</h4>
                            [1]
                            https://www.valoraanalitik.com/2018/09/05/sancionados-etb-claro-movistar-y-tigoune-por-servicios-de-internet/
                            <br> [2] Autor: María Estela Raffino. Para: Concepto.de. Disponible en:
                            https://concepto.de/internet/.
                            Consultado: 14 de julio de 2019. Fuente: https://concepto.de/internet/#ixzz5tgGI0wGw
                            <br> [3]
                            https://ilifebelt.com/alerta-el-uso-del-internet-en-los-ninos-y-adolescentes/2018/11/
                            <br> [4]
                            https://www.larepublica.co/internet-economy/los-ninos-y-jovenes-colombianos-usan-internet-tres-horas-y-media-al-dia-2756640
                            <br>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo7/unidad1/actividad2" class="btn btn-success">Anterior</a>
                    <a href="<?php echo base_url();?>modulo7/unidad1/actividad4" class="btn btn-success btnSig Retraso5">Siguiente</a>
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
<script src="<?php echo base_url();?>public/assets/modulos/mod7/js/u12info.js"></script>
</body>

</html>