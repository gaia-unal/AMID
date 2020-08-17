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
                    <a href="<?php echo base_url();?>modulo2" class="list-group-item active">Módulo 2</a>
                    <ul class="list-group-item">
                        <a href="<?php echo base_url();?>modulo2/unidad1" class="list-group-item active">Unidad 1</a>
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo2/unidad1/temas" class="list-group-item">Temas</a>
                            <a href="<?php echo base_url();?>modulo2/unidad1/actividad1" class="list-group-item">Actividad</a>
                            <a href="#" class="list-group-item active">Evaluación</a>
                        </ul>
                        <a href="<?php echo base_url();?>modulo2/unidad2" class="list-group-item">Unidad 2</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 4</a>
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
                <h1><br>Unidad 1: Periodismo y sociedad</h1>
                <?php echo form_open('modulo2/unidad2/inicio');$this->session->set_userdata('idAct','m2u1'); ?>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Evaluación</h4>
                        <p class="card-text">
                            <ul>
                                <li><strong> ¿Qué es la libertad de expresión?</strong></li>
                                
                                    <label><input type="radio" name="p1" class="space" value= 5 required>Es el derecho
                                        internacional de los derechos humanos en el Pacto Internacional de Derechos
                                        Civiles y Políticos.</label> <br />
                                    <label><input type="radio" name="p1" class="space"  value= 1 required>Es la libertad de
                                        mantener opiniones como difamación, calumnia, obscenidad, a través de cualquier
                                        medio y sin importar las fronteras.</label><br />
                                    <label><input type="radio" name="p1" class="space"  value= 1 required>Es el deber más preciado
                                        del hombre.</label><br />
                                <br>
                                <li><strong>¿Qué es la libertad de prensa?</strong></li>
                                
                                    <label><input type="radio" name="p2" class="space"  value= 1 required>Es la celebración que se
                                        realiza el día 3 de mayo en Colombia.</label><br />
                                    <label><input type="radio" name="p2" class="space" value= 5 required>Es el derecho a que toda
                                        persona pueda publicar sus ideas libremente y sin censura previa.</label><br />
                                    <label><input type="radio" name="p2" class="space"  value= 1 required>Es la propaganda crítica
                                        para mantener la base de poder político actual y suprimir cualquier intento
                                        significativo de los medios de desafiar el gobierno.</label><br />
                                <br>
                                <li><strong>¿Cuál de los siguientes titulares hacer parte de un evento de movimientos
                                    democráticos en Colombia en donde los medios y los reportes de noticias han tenido
                                    un papel significante?</strong></li>
                                
                                    <label><input type="radio" name="p3" class="space" value= 5 required>Partidos firmaron pacto
                                        político en favor de la libertad de prensa para las elecciones de octubre - El
                                        Espectador</label><br />
                                    <label><input type="radio" name="p3" class="space"  value= 1 required>Colombia Ley 130-94</label><br />
                                    <label><input type="radio" name="p3" class="space"  value= 1 required>Separación de poderes -
                                        Revista Semana</label><br />
                                
                            </ul>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo2/unidad1/actividad1" class="btn btn-success">Anterior</a>
                    <button id="btn-siguiente" class="btn btn-success" name="submit" type="submit" >Siguiente</button>
                    <!-- <a href="../modulo2.2/module2.2_inicio.php" class="btn btn-success">Siguiente</a> -->
                </center>
                <?php echo form_close(); ?>
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