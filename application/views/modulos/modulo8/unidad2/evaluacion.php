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
				<a href="<?php echo base_url();?>modulo7" class="list-group-item">Módulo 7</a>
                <a href="<?php echo base_url();?>modulo8" class="list-group-item active">Módulo 8</a>
                    <ul class="list-group-item">
                    <a href="<?php echo base_url();?>modulo8/unidad1" class="list-group-item">Unidad 1</a>
                        <a href="<?php echo base_url();?>modulo8/unidad2" class="list-group-item active">Unidad 2</a>
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo8/unidad2/temas" class="list-group-item">Temas</a>
                            <a href="<?php echo base_url();?>modulo8/unidad2/actividad1" class="list-group-item">Actividad</a>
                            <a href="#" class="list-group-item active">Evaluación</a>
                        </ul>
                        <a href="<?php echo base_url();?>modulo8/unidad3" class="list-group-item">Unidad 3</a>
                    </ul>
                    <a href="<?php echo base_url();?>modulo9" class="list-group-item">Módulo 9</a>
				<a href="<?php echo base_url();?>modulo10" class="list-group-item">Módulo 10</a>
				<a href="<?php echo base_url();?>modulo11" class="list-group-item">Módulo 11</a>
				<a href="<?php echo base_url();?>modulo12" class="list-group-item">Módulo 12</a>
                </div>
                <br /><br />
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <h1><br>Unidad 2: Ambiente de Aprendizaje y Alfabetización Informacional</h1>

                <?php echo form_open('modulo8/unidad3');$this->session->set_userdata('idAc','m8u2'); ?>

                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Evaluación</h4>
                        <p class="card-text">
                            <ol>
                                <b><li>¿Cuál de las siguientes es una etapa del Big6?</li></b>
                                <label>
                                <input type="radio" name="preg1" id="opc1" onclick="incorrecto(1);" value = "0"> a. Alfabetización
                                informacional.
                                </label>
                                <br>
                                <label>
                                <input type="radio" name="preg1" id="opc2" onclick="correcto(1);" value = "1.67"> b. Definición de las
                                necesidad o problemas de información.
                                </label>
                                <br>
                                <label>
                                <input type="radio" name="preg1" id="opc3" onclick="incorrecto(1);" value = "0"> c. Compartir
                                información de fuentes confliables.
                                </label>
                                <br>
                                <b><li>¿En qué consiste la etapa 4 del Big6?</li></b>
                                <label>
                                <input type="radio" name="preg2" id="opc1" onclick="correcto(2);" value = "1.67"> a. Evaluación crítica
                                de la información.
                                </label>
                                <br>
                                <label>
                                <input type="radio" name="preg2" id="opc2" onclick="incorrecto(2);" value = "0"> b. Busqueda de la
                                información.
                                </label>
                                <br>
                                <label>
                                <input type="radio" name="preg2" id="opc3" onclick="incorrecto(2);" value ="0"> c. Estrategias para
                                buscar información.
                                <b><li>¿Cuál corresponde a correcta fuente de información?</li></b>
                                <label>
                                <input type="radio" name="preg3" id="opc1" onclick="incorrecto(3);" value = "0"> a. Wikipedia
                                </label>
                                <br>
                                <label>
                                <input type="radio" name="preg3" id="opc2" onclick="incorrecto(3);" value = "0"> b. Slash
                                </label>
                                <br>
                                <label>
                                <input type="radio" name="preg3" id="opc3" onclick="correcto(3);" value = "1.67"> c. Asap
                                </label>
                                <br>
                                
                            </ol>
                            <!--<center>
                                <a href="#" class="btn btn-outline-success btnSig" onclick="validar();">Validar</a>
                            </center>-->
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo8/unidad2/actividad2" class="btn btn-success">Anterior</a>
                    <button id="btn-siguiente"  class="btn btn-success" type="submit" onclick="validar();evaluacion()">Siguiente</button>                    
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