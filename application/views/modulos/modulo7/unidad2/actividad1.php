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
                    <a href="<?php echo base_url();?>modulo5" class="list-group-item">Módulo 5</a>
                    <a href="<?php echo base_url();?>modulo6" class="list-group-item">Módulo 6</a>
                    <a href="<?php echo base_url();?>modulo7" class="list-group-item active">Módulo 7</a>
                    <ul class="list-group-item">
                        <a href="<?php echo base_url();?>modulo7/unidad1" class="list-group-item">Unidad 1</a>
                        <a href="<?php echo base_url();?>modulo7/unidad2" class="list-group-item active">Unidad 2</a>
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo7/unidad2/temas" class="list-group-item">Temas</a>
                            <a href="#" class="list-group-item active">Actividades</a>
                            <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                        </ul>
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
                <h1><br>Unidad 2: Retos y riesgos en el mundo virtual </h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Phishing</h4>
                        <h4>¿Qué es Phishing?</h4>
                        <blockquote
                            cite="http://web.icam.es/bucket/Faustino%20Gudín%20-%20Nuevos%20delitos%20informáticos.pdf"
                            align="justify"></blockquote>
                        <p class="card-text">
                            <ul class="content">
                                <a href="#" onclick="preg1();">
                                        <li><h4>¿Qué es Phishing?</h4></li>
                                    </a>
                                <a href="#" onclick="preg2();">
                                        <li><h4>Phishing tradicional</h4></li>
                                    </a>
                                <a href="#" onclick="preg3();">
                                        <li><h4>Spear phishing</h4></li>
                                    </a>
                                <a href="#" onclick="preg4();">
                                        <li><h4>Smishing (SMS)</h4></li>
                                    </a>
                                <a href="#" onclick="preg5();">
                                        <li><h4>Vishing</h4></li>
                                    </a>
                            </ul>
                            <h4>Referencias</h4>
                            Fuente: Paus,L (2015). Phishing tradicional en Paypal [Imagen]. Recuperado de:
                            https://www.welivesecurity.com/la-es/2015/05/08/5-tipos-de-phishing/f <br>
                            Fuente: Paus,L (2015). Mishing vía whatsapp [Imagen]. Recuperado de:
                            https://www.welivesecurity.com/la-es/2015/05/08/5-tipos-de-phishing/
                        </p>
                        </blockquote>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo7/unidad2/temas" class="btn btn-success">Anterior</a>
                    <a href="<?php echo base_url();?>modulo7/unidad2/actividad2" class="btn btn-success">Siguiente</a>
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
<script src="<?php echo base_url();?>public/assets/modulos/mod7/js/u22info.js"></script>
</body>

</html>