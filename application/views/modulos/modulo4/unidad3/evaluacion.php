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
                            <a href="<?php echo base_url();?>modulo4/unidad3/actividad1" class="list-group-item">Actividad</a>
                            <a href="#" class="list-group-item active">Evaluación</a>
                        </ul>
                        <a href="<?php echo base_url();?>modulo4/unidad4" class="list-group-item">Unidad 4</a>
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
                        <h4>Evaluación</h4>
                        <p class="card-text">
                            <ul>
                                <li>¿Qué análisis puede realizar a partir de la modificación de los carteles de las
                                    películas?</li>
                                <textarea name="" id="" cols="80" rows="5"
                                    placeholder="Escriba aquí su respuesta"></textarea>
                                <li>¿Considera que las películas pueden hacer parte de los medios audiovisuales usados
                                    en el aula?¿Por qué?</li>
                                <textarea name="" id="" cols="80" rows="5"
                                    placeholder="Escriba aquí su respuesta"></textarea>
                                <li>¿Cómo cree que las películas influyen en la vida de los estudiantes?</li>
                                <textarea name="" id="" cols="80" rows="5"
                                    placeholder="Escriba aquí su respuesta"></textarea>
                                <li>¿Cuáles de los siguientes no hacen parte de los géneros de las películas?</li>
                                1. <input type="checkbox" name="" id="opc1" onclick="correcto(0)"> Infantil <br>
                                2. <input type="checkbox" name="" id="opc2" onclick="incorrecto(1)"> De canciones <br>
                                3. <input type="checkbox" name="" id="opc3" onclick="incorrecto(2)"> Melancólicas <br>
                                4. <input type="checkbox" name="" id="opc4" onclick="correcto(3)"> Mudas <br>
                                5. <input type="checkbox" name="" id="opc5" onclick="correcto(4)"> Bélicas <br>
                            </ul>
                            <center><a class="btn btn-outline-success"
                                onclick="termino()">Validar</a></center>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo4/unidad3/actividad4" class="btn btn-success">Anterior</a>
                    <a href="<?php echo base_url();?>modulo4/unidad4" class="btn btn-success">Siguiente</a>
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
<script src="<?php echo base_url();?>public/assets/modulos/mod4/js/u3script.js"></script>
</body>

</html>