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
                        <h4>Preguntas de opción múltiple</h4>
                        <div class="preguntas">
                            <!-- Pregunta 1 -->
                            <h4>¿Qué es wiki?</h4>
                            <label  id="p1-r1">
                                <input type="radio" name="preg1" id="opc1" onclick="correcto();">
                                a. Es una página web donde varias personas pueden editar su contenido
                            </label> <br>
                            <label  id="p1-r2">
                                <input type="radio" name="preg1" id="opc2" onclick="incorrecto('a');">
                                b. Es un término que quiere decir rapido
                            </label> <br>
                            <label  id="p1-r3">
                                <input type="radio" name="preg1" id="opc3" onclick="incorrecto('a');">
                                c. Es una estructura web sencilla de manejar
                            </label> <br>
                            <!-- Pregunta 2 -->
                            <h4>¿Qué tipos de Wikis hay?</h4>
                            <label  id="p2-r1">
                                <input type="radio" name="preg2" id="opc1" onclick="incorrecto('e');">
                                a. Publico
                            </label> <br>
                            <label  id="p2-r2">
                                <input type="radio" name="preg2" id="opc2" onclick="incorrecto('e');">
                                b. Privado y protegido
                            </label> <br>
                            <label  id="p2-r3">
                                <input type="radio" name="preg2" id="opc3" onclick="incorrecto('e');">
                                c. Publico y protegido
                            </label> <br>
                            <label  id="p2-r4">
                                <input type="radio" name="preg2" id="opc4" onclick="incorrecto('e');">
                                d. Privado
                            </label> <br>
                            <label  id="p2-r5">
                                <input type="radio" name="preg2" id="opc5" onclick="correcto();">
                                e. Todas son correctas menos la b
                            </label> <br>
                            <!-- Pregunta 3 -->
                            <h4>¿Para qué sirve?</h4>
                            <label  id="p3-r1">
                                <input type="radio" name="preg3" id="opc1" onclick="incorrecto('b');">
                                a. Permite diseñar páginas web
                            </label> <br>
                            <label  id="p3-r2">
                                <input type="radio" name="preg3" id="opc2" onclick="correcto();">
                                b. Para crear contenido en páginas web de forma sencilla, el cual puede
                                    ser compartido y modificado de forma permanente
                            </label> <br>
                            <label  id="p3-r3">
                                <input type="radio" name="preg3" id="opc3" onclick="incorrecto('b');">
                                c. Subir archivos y cambiarlos cuando se desee
                            </label> <br>
                            <!--Pregunta 4 -->
                            <h4>¿Cómo se crea el contenido?</h4>
                            <label  id="p4-r1">
                                <input type="radio" name="preg4" id="opc1" onclick="incorrecto('b');">
                                a. Con una sintaxis especial
                            </label> <br>
                            <label  id="p4-r2">
                                <input type="radio" name="preg4" id="opc2" onclick="correcto();">
                                b. Dando clic en editar dentro de la pagina que desee modificar
                            </label> <br>
                            <label  id="p4-r3">
                                <input type="radio" name="preg4" id="opc3" onclick="incorrecto('b');">
                                c. Borrando el contenido anteriormente publicado y agregando uno nuevo
                            </label> <br>
                            <!--Pregunta 5 -->
                            <h4>Teniendo en cuenta la población a la que va dirigida y la materia que dicta, ¿qué
                                contenido agregaría a la wiki?</h4>
                            <textarea name="preg5" id="p5-r" cols="90" rows="10" placeholder="..."></textarea>
                            <br>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo7/unidad1/actividad1" class="btn btn-success">Anterior</a>
                    <a href="<?php echo base_url();?>modulo7/unidad1/actividad3" class="btn btn-success btnSig Retraso5">Siguiente</a>
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
<script src="<?php echo base_url();?>public/assets/modulos/mod7/js/u11scriptWiki.js"></script>
</body>

</html>