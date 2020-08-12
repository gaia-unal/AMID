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
                        <a href="module8.1_inicio.php" class="list-group-item">Unidad 1</a>
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo8/unidad1/temas" class="list-group-item">Temas</a>
                            <a href="<?php echo base_url();?>modulo8/unidad1/actividad1" class="list-group-item">Actividad</a>
                            <a href="<?php echo base_url();?>modulo8/unidad1/evaluacion1" class="list-group-item active">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(1)" class="list-group-item">Unidad 2</a>
                        <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
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
                <h1><br>Unidad 1: Conceptos y Aplicación de la Alfabetización Informacional</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Retroalimentación</h4>
                        <p class="card-text">
                            <ol>
                                <li>Hable sobre las actitudes culturales hacia la información. ¿Cómo se ve y se valora
                                    la información en su sociedad? </li>
                                <textarea name="preg1" id="p1-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>¿Cómo los puntos de vista de la información impresa (por Ej. de los principales
                                    periódicos) se comparan con la información generada por los medios electrónicos?
                                </li>
                                <textarea name="preg2" id="p2-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>¿Cuál es la relación entre la información y el poder y entre los medios impresos
                                    y los medios digitales? ¿Cuál es la identidad de la(s) persona(s) detrás de la
                                    información generada? </li>
                                <textarea name="preg3" id="p3-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Usando Internet o la biblioteca de la escuela/colegio o ambos, identifique un
                                    problema o un tema para investigar en una de las siguientes áreas: educación cívica,
                                    ciencias, estudios sociales, historia o geografía. Presente los resultados de su
                                    investigación en un texto escrito a continuación. </li>
                                <textarea name="preg4" id="p4-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Después del texto, reflexione sobre lo siguiente: ¿De qué forma usted seleccionó
                                    lo que quería presentar de entre una gran variedad de información disponible sobre
                                    el tema? </li>
                                <textarea name="preg5" id="p5-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>¿De qué quería usted tener más información que no pudo tener acceso, o cómo
                                    afectó esto a su presentación? </li>
                                <textarea name="preg4" id="p4-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Finalmente, ¿transformó usted la información que recopiló para aplicar su
                                    contexto particular? ¿Cómo y por qué? </li>
                                <textarea name="preg2" id="p2-r" cols="80" rows="5"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                            </ol>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo8/unidad1/actividad1" class="btn btn-success">Anterior</a>
                    <a href="<?php echo base_url();?>modulo8/unidad1/evaluacion1" class="btn btn-success">Siguiente</a>
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