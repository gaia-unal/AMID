<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>AMID</title>
  
  <?php $this->load->view('initial/linkGenerico');?>
  <link href="<?php echo base_url();?>public/assets/modulos/mod12/css/estilo.css" rel="stylesheet">

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
				<a href="<?php echo base_url();?>modulo7" class="list-group-item">Módulo 7</a>
				<a href="<?php echo base_url();?>modulo8" class="list-group-item">Módulo 8</a>
				<a href="<?php echo base_url();?>modulo9" class="list-group-item">Módulo 9</a>
				<a href="<?php echo base_url();?>modulo10" class="list-group-item">Módulo 10</a>
				<a href="<?php echo base_url();?>modulo11" class="list-group-item">Módulo 11</a>
                    <a href="<?php echo base_url();?>modulo12" class="list-group-item active">Módulo 12</a>
                    <ul class="list-group-item">
                        <a href="<?php echo base_url();?>modulo12/unidad1/actividad1" class="list-group-item active">Actividad</a>
                    </ul>
                </div>
                <br /><br />
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <br>
                <h1>Módulo 12: Libertad de expresión</h1>

                <?php echo form_open('inicio/main');$this->session->set_userdata('idAc','m12'); ?>
                
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Actividad</h4>
                        Completa la definición de libertad de expresión escribiendo las palabras que faltan donde
                        corresponde <br><br>
                        La libertad de expresión es un <input type="text" name="opc1" id="opc1"
                            style="text-transform:lowercase;"> que todo el mundo debe
                        gozar, e incluye el <input type="text" name="opc2" id="opc2" style="text-transform:lowercase;">
                        opinión sin <input type="text" name="opc3" id="opc3" style="text-transform:lowercase;"> y a
                        buscar, <input type="text" name="opc4" id="opc4" style="text-transform:lowercase;"> y <input
                            type="text" name="opc5" id="opc5" style="text-transform:lowercase;"> información e ideas a
                        través de cualquier <input type="text" name="opc6" id="opc6" style="text-transform:lowercase;">
                        sin limitación de fronteras. <br><br>
                        <b>Las palabras son</b>
                        <ul>
                            <li>Medio de difusión</li>
                            <li>Interferencias</li>
                            <li>Derecho universal</li>
                            <li>Difundir</li>
                            <li>Mantener una</li>
                            <li>Recibir</li>
                        </ul>
                        <center>
                            <a class="btn btn-outline-success" onclick="validar();">Validar</a>
                        </center>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo12/unidad1/actividad1" class="btn btn-success">Anterior</a>
                    <button id="btn-siguiente"  class="btn btn-success" type="submit">Siguiente</button>
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
<script src="<?php echo base_url();?>public/assets/modulos/mod12/js/script.js"></script>
</body>

</html>