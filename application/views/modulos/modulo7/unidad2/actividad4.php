<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AMID</title>
  
  <?php $this->load->view('initial/linkGenerico');?>
  <link href="<?php echo base_url();?>public/assets/modulos/mod7/css/u23estilo.css" rel="stylesheet">

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
                            <a href="<?php echo base_url();?>modulo7/unidad2/actividad1" class="list-group-item active">Actividades</a>
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
                <h1><br>Unidad 2: Retos y riesgos en el mundo virtual</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Información mediática en Internet</h4>
                        <p class="card-text">
                            <h4>Confiabilidad de la información que se encuentra en una página web sobre temas de salud
                                y medicina</h4>
                            <div id="texto">
                                En esta sección revisaremos un fragmento del artículo: "Acceso a información médica
                                actualizada en Internet: retos de la medicina actual". Haz clic en la flecha para
                                comenzar. <br>
                                <center>
                                    <a href="#" onclick="art();remove();">
                                        <img class="animated bounceIn" src="<?php echo base_url();?>public/assets/img/flecha.png"
                                            alt="Inicio">
                                    </a></center>
                            </div>
                            <div class="animated bounceIn retraso5">
                                Ahora lee el siguiente texto para guiarse antes de confiar en un sitio web y luego
                                realiza el test. Haz clic en las flechas para navegar en el contenido.
                                <div id="img1">
                                    <img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod7/img/img1.png">
                                </div>
                                <div id="img2">
                                    <img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod7/img/img2.png">
                                </div>
                                <div id="img3">
                                    <img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod7/img/img3.png">
                                </div>
                                <div id="img4">
                                    <img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod7/img/img4.png">
                                </div>
                                <div id="img5">
                                    <img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod7/img/img5.png">
                                </div>
                                <div id="img6">
                                    <img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod7/img/img6.png">
                                </div>
                                <div id="img7">
                                    <img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod7/img/img7.png">
                                </div>
                                <div id="img8">
                                    <img class="imagen" src="<?php echo base_url();?>public/assets/modulos/mod7/img/img8.png">
                                </div>
                                <div id="btnAdelante">
                                    <a href="#" onclick="avanzar();">
                                        <img class="btnF" src="<?php echo base_url();?>public/assets/img/flecha.png">
                                    </a>
                                </div>
                                <div id="btnAtras">
                                    <a href="#" onclick="volver();">
                                        <img class="btnA" src="<?php echo base_url();?>public/assets/img/flecha1.png">
                                    </a>
                                </div>
                            </div>
                            <h4>Referencias</h4>
                            César Gamboa-Peñaranda Antón Zamora-Ilarionov Edén Galán-Rodas Acta Médica Costarricense
                            vol. 56 issue 4 (2014) pp: 186-187 Published by
                            http://creativecommons.org/licenses/by-nc-nd/3.0/
                        </p>
                        
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo7/unidad2/actividad3" class="btn btn-success">Anterior</a>
                    <a href="<?php echo base_url();?>modulo7/unidad2/actividad5" class="btn btn-success">Siguiente</a>
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
<script src="<?php echo base_url();?>public/assets/modulos/mod7/js/u23info.js"></script>
</body>

</html>