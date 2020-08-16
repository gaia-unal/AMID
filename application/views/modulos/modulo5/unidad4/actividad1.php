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
                <a href="<?php echo base_url();?>modulo5" class="list-group-item active">Módulo 5</a>
                    <ul class="list-group-item">
                        <a href="<?php echo base_url();?>modulo5/unidad1" class="list-group-item">Unidad 1</a>
                        <a href="<?php echo base_url();?>modulo5/unidad2" class="list-group-item">Unidad 2</a>
                        <a href="<?php echo base_url();?>modulo5/unidad3" class="list-group-item">Unidad 3</a>
                        <a href="<?php echo base_url();?>modulo5/unidad4" class="list-group-item active">Unidad 4</a>
                        <ul class="list-group-item">
                            <a href="<?php echo base_url();?>modulo5/unidad4/temas" class="list-group-item">Temas</a>
                            <a href="<?php echo base_url();?>modulo5/unidad4/actividad1" class="list-group-item active">Actividad</a>
                            <a href="<?php echo base_url();?>modulo5/unidad4/evaluacion" class="list-group-item">Evaluación</a>
                        </ul>
                        <a href="#" onclick="inactivo(4)" class="list-group-item inactive">Unidad 5</a>
                    </ul>
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
                <h1><br>Unidad 4: Publicidad y el campo político</h1>
                <?php echo form_open('modulo5/unidad4/evaluacion');$this->session->set_userdata('idAct','m5u4a1'); ?>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>La publicidad y el auspicio – ubicación, mensajes y audiencia</h4>
                        <p class="card-text">
                            Recolecte ejemplos de la propaganda política en su región. Si es necesario, haga una
                            investigación en la biblioteca local. Tome en consideración las razones por las que el
                            ciudadano promedio podría estar interesado en la propaganda política. Evalúe la eficacia de
                            cada anuncio, tomando en cuenta el propósito, la información y el mensaje que se transmite,
                            y la audiencia seleccionada. <br>
                            Explique cómo el diseño/forma de los anuncios se utiliza para reforzar el contenido <br>
                            <textarea name="preg1" style="width: 80%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" autofocus></textarea><br/>
                        </p>
                        <h4>Evaluación de los lineamientos para la propaganda política</h4>
                        <p class="card-text">Revise varios anuncios de la misma campaña política. Evalúe la eficacia de
                            la campaña en general en el uso de gráficos unificados, imágenes, eslóganes y mensajes.
                            Utilizando el Internet y/o recursos bibliotecarios, investigue los entes reguladores que han
                            establecido el monitoreo de la propaganda política. Examine los lineamientos establecidos
                            para monitorear la publicidad que los candidatos han utilizado durante las elecciones. <br>
                            Evalúe hasta qué punto los anuncios elegidos se adhieren a estos lineamientos y escríbalo a
                            continuación <br>
                            <textarea name="preg2" style="width: 80%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br/>
                        </p>
                        <h4>Evaluación de los entes reguladores para la propaganda en elecciones</h4>
                        <p class="card-text">
                            Investigue cómo estos entes regulatorios representan los intereses de los ciudadanos.
                            Examine el papel que los ciudadanos pueden tener para asegurar que la propaganda política
                            sea verdadera, justa y precisa <br>
                            Anote cualquier sugerencia que usted le haría al ente regulatorio en relación a la
                            propaganda política <br>
                            <textarea name="preg3" style="width: 80%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br/>
                        </p>
                        <h4>Regulaciones aplicables a los medios durante elecciones nacionales</h4>
                        <p class="card-text">
                            Haga un listado de las regulaciones mediáticas (establecidas por la comisión nacional de
                            elecciones) sobre el informe de las elecciones. Vea si existen lineamientos para informar
                            sobre las encuestas de opinión, si los medios nacionales dan tiempo-aire a los diferentes
                            partidos políticos, transmitiendo los resultados de las elecciones, etc. <br>
                            El consultor político Frank Luntz les dice a sus clientes políticos que el “80 % de nuestras
                            vidas es emoción y sólo el 20 % es intelecto. Me interesa más qué es lo que sientes que lo
                            que piensas”. <br>Examine la propaganda política a la luz de este comentario. Explique hasta
                            qué punto los anuncios políticos se basan en el recurso emocional. Examine el lenguaje que
                            se utiliza para “vender” al candidato y a sus ideas o políticas. Evalué si el lenguaje que
                            se utiliza es preciso o engañoso. <br>
                            Dado el uso del recurso emocional en la propaganda política, sugiera estrategias para
                            mantener a la ciudadanía informada <br>
                            <textarea name="preg4" style="width: 80%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br/>
                        </p>
                    </div>
                </div>
                <!-- /.card -->
                <br>
                <center>
                    <a href="<?php echo base_url();?>modulo5/unidad4/temas" class="btn btn-success">Anterior</a>
                    <button id="btn-siguiente" class="btn btn-success" name="submit" type="submit">Siguiente</button>
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