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
				<a href="<?php echo base_url();?>modulo8" class="list-group-item">Módulo 8</a>
				<a href="<?php echo base_url();?>modulo9" class="list-group-item">Módulo 9</a>
				<a href="<?php echo base_url();?>modulo10" class="list-group-item">Módulo 10</a>
				<a href="<?php echo base_url();?>modulo11" class="list-group-item">Módulo 11</a>
                    <a href="<?php echo base_url();?>modulo12" class="list-group-item active">Módulo 12</a>
                    <ul class="list-group-item">
                    <a href="#" class="list-group-item active">Unidad 1</a>
                        <ul class="list-group-item">
                        <a href="#" class="list-group-item active">Actividad</a>
                        </ul>
                    </ul>
                </div>
                <br /><br />
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <br>
                <h1>Módulo 12: Libertad de expresión</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Retroalimentación y reflexión</h4>
                        <ol>
                            <li>¿Por qué importa la libertad de expresión?</li>
                            <textarea name="preg1" id="p1-r" cols="80" rows="5" placeholder="Escriba su respuesta aquí"
                                spellcheck="true"></textarea>
                            <li>¿Cuales son las condiciones para que prospere la libertad de expresión?</li>
                            <textarea name="preg2" id="p2-r" cols="80" rows="5" placeholder="Escriba su respuesta aquí"
                                spellcheck="true"></textarea>
                            <li>¿En qué momento se encuentra en riesgo la libertad de expresión?</li>
                            <textarea name="preg3" id="p3-r" cols="80" rows="5" placeholder="Escriba su respuesta aquí"
                                spellcheck="true"></textarea>
                            <li>¿Cual es el papel especial de los periodistas en la libertad de expresión?</li>
                            <textarea name="preg4" id="p4-r" cols="80" rows="5" placeholder="Escriba su respuesta aquí"
                                spellcheck="true"></textarea>
                            <li>¿Qué hay de la libertad de expresión en línea?</li>
                            <textarea name="preg5" id="p5-r" cols="80" rows="5" placeholder="Escriba su respuesta aquí"
                                spellcheck="true"></textarea>
                            <li>¿Qué podemos hacer?</li>
                            <textarea name="preg4" id="p4-r" cols="80" rows="5" placeholder="Escriba su respuesta aquí"
                                spellcheck="true"></textarea>
                            <li>¿Cuales son las limitaciones?</li>
                            <textarea name="preg2" id="p2-r" cols="80" rows="5" placeholder="Escriba su respuesta aquí"
                                spellcheck="true"></textarea>
                        </ol>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo11/unidad4/actividad2" class="btn btn-success">Anterior</a>
                    <a href="<?php echo base_url();?>modulo12/unidad1/actividad2" class="btn btn-success">Siguiente</a>
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