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
                            <a href="<?php echo base_url();?>modulo7/unidad2/actividad1" class="list-group-item">Actividades</a>
                            <a href="#" class="list-group-item active">Evaluación</a>
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
                <br>
                <h1>Unidad 2: Retos y riesgos en el mundo virtual</h1>

                <?php echo form_open('modulo7/unidad2/evaluacion2');$this->session->set_userdata('idAc','m7u21'); ?>

                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Evaluación Unidad 2</h4>
                        <p class="card-text">
                            <!-- Pregunta 1 -->
                            <h4> 1. ¿Qué es el Phishing?</h4>
                            <label class="container" id="p1-r1">
                                <input type="radio" name="preg1" id="opc1" onclick="incorrecto(1);" value = "0">
                                
                                a. Es un estafador que intenta acceder a los correos electrónicos para
                                    enviar
                                    mensajes spam.
                            </label>
                            <label class="container" id="p1-r2">
                                <input type="radio" name="preg1" id="opc2" onclick="correcto(1);" value = "0.83">
                                
                                b. Es un delito cibernético en el que intentan adquirir información
                                    confidencial
                                    como números de
                                    tarjetas de crédito, contraseñas y otros datos personales, por medio de engaños.
                                
                            </label>
                            <label class="container" id="p1-r3">
                                <input type="radio" name="preg1" id="opc3" onclick="incorrecto(1);" value = "0">
                                
                                c. Es un delito cibernético en el que un estafador vende productos
                                    engañosos.
                            </label>
                            <!-- Pregunta 2 -->
                            <h4> 2. ¿ Los delincuentes pueden hacer Phishing por mensajes de texto o llamadas?
                            </h4>
                            <label class="container" id="p2-r1">
                                <input type="radio" name="preg2" id="opc1" onclick="correcto(2);" value = "0.83">
                                
                                a. Sí, la intención de los delincuentes es robar información personal,
                                    por lo
                                    tanto, es posible que
                                    lo hagan por medio de mensajes, llamadas, correos y falsificación de páginas
                                    web.
                            </label>
                            <label class="container" id="p2-r2">
                                <input type="radio" name="preg2" id="opc2" onclick="incorrecto(2);" value = "0">
                                
                                b. No porque las personas no suelen contestar llamadas de números
                                    desconocidos.
                                
                            </label>
                            <label class="container" id="p2-r3">
                                <input type="radio" name="preg2" id="opc3" onclick="incorrecto(2);" value = "0">
                                
                                c. No, porque el Phishing solo es por internet y llega únicamente a
                                    los correos
                                    electrónicos.
                            </label>
                            <!-- Pregunta 3 -->
                            <h4> 3. Con respecto a la información médica encontrada en internet, ¿puede usted
                                reemplazar la consulta
                                con un médico si encuentra la información que está buscando?</h4>
                            <label class="container" id="p3-r1">
                                <input type="radio" name="preg3" id="opc1" onclick="incorrecto(3);" value = "0">
                                
                                a. Sí, siempre y cuando indiquen los medicamentos que debo tomar con
                                    sus dosis.
                                
                            </label>
                            <label class="container" id="p3-r2">
                                <input type="radio" name="preg3" id="opc2" onclick="incorrecto(3);" value = "0">
                                
                                b. No porque de pronto la información no está actualizada.
                            </label>
                            <label class="container" id="p3-r3">
                                <input type="radio" name="preg3" id="opc3" onclick="correcto(3);" value = "0.83">
                                
                                c. No, ninguna información debe reemplazar la consulta con un médico
                                    que lo puede
                                    asesorar de acuerdo
                                    con su situación específica.
                            </label>
                            <!-- Pregunta 4 -->
                            <h4> 4. Si un sitio web ofrece soluciones rápidas y fáciles para sus problemas de
                                salud y promete curas
                                milagrosas ¿debe confiar en ella?</h4>
                            <label class="container" id="p4-r1">
                                <input type="radio" name="preg4" id="opc1" onclick="incorrecto(4);" value = "0">
                                
                                a. Sí, siempre y cuando tenga buenas referencias y buenos comentarios
                                    de las
                                    personas.
                            </label>
                            <label class="container" id="p4-r2">
                                <input type="radio" name="preg4" id="opc2" onclick="correcto(4);" value = "0.83">
                                
                                b. No, se debe desconfiar de los sitios web que proclaman la cura a
                                    muchas
                                    enfermedades.
                            </label>
                            <label class="container" id="p4-r3">
                                <input type="radio" name="preg4" id="opc3" onclick="incorrecto(4);" value = "0">
                                
                                c. Sí porque es muy bueno encontrar tanta información en un solo
                                    lugar.
                            </label>
                            <!-- Pregunta 5 -->
                            <h4> 5. ¿Qué es la violación del derecho de autor?</h4>
                            <label class="container" id="p5-r1">
                                <input type="radio" name="preg5" id="opc1" onclick="incorrecto(5);" value = "0">
                                
                                a. Es un conjunto de normas jurídicas que plantean los derechos
                                    morales y
                                    patrimoniales que tienen
                                    los autores
                            </label>
                            <label class="container" id="p5-r2">
                                <input type="radio" name="preg5" id="opc2" onclick="incorrecto(5);" value = "0">
                                
                                b. Se da cuando una persona copia y pega un texto de otra sin cambiar
                                    absolutamente nada y no le da
                                    los créditos.
                            </label>
                            <label class="container" id="p5-r3">
                                <input type="radio" name="preg5" id="opc3" onclick="correcto(5);" value = "0.83">
                                
                                c. Es un fraude relacionado con la conducta de los usuarios que no
                                    tienen en
                                    cuenta el derecho de
                                    autor, ya sea a propósito o accidentalmente y pone al violador en riesgo de ser
                                    sancionado
                            </label>
                            <!-- Pregunta 6 -->
                            <h4> 6. ¿Cuál de las siguientes opciones <strong>NO</strong> es un delito que viola
                                los derechos de
                                autor?</h4>
                            <label class="container" id="p6-r1">
                                <input type="radio" name="preg6" id="opc1" onclick="correcto(6);" value = "0.83">
                                
                                a. Inscribir en el registro de autor el nombre del autor real, con el
                                    título
                                    adecuado y sin alterar
                                    el texto.
                            </label>
                            <label class="container" id="p6-r2">
                                <input type="radio" name="preg6" id="opc2" onclick="incorrecto(6);" value = "0">
                                
                                b. Publicar, total o parcialmente, sin autorización previa del titular
                                    del
                                    derecho, una obra inédita.
                                
                            </label>
                            <label class="container" id="p6-r3">
                                <input type="radio" name="preg6" id="opc3" onclick="incorrecto(6);" value = "0">
                                
                                c. Suprimir o alterar la información esencial para la gestión
                                    electrónica de
                                    derechos o importe,
                                    distribuya o comunique ejemplares con la información suprimida o alterada.
                            </label>
                        </p>
                        <center>
                            <a href="#" class="btn btn-outline-success" onclick="validar();">Validar</a>
                        </center>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo7/unidad2/actividad6" class="btn btn-success">Anterior</a>
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
<script src="<?php echo base_url();?>public/assets/modulos/mod7/js/u21preguntas.js"></script>
</body>

</html>