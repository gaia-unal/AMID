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



    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">

            <div class="list-group list-group-flush">

                <a href="<?php echo base_url();?>modulo1" class="list-group-item list-group-item-action bg-light"><i
                        class="dropdown-menu"></i>Módulo 1<span class="arrow"></span></a>


                <a href="<?php echo base_url();?>modulo2" class="list-group-item list-group-item-action bg-light">
                    Módulo 2</a>

                <a href="<?php echo base_url();?>modulo3" class="list-group-item list-group-item-action bg-light">
                    Módulo 3</a>

                <a href="<?php echo base_url();?>modulo4" class="list-group-item list-group-item-action bg-light">
                    Módulo 4</a>

                <a href="<?php echo base_url();?>modulo5" class="list-group-item list-group-item-action bg-light">
                    Módulo 5</a>

                <ul class="list-group-item">

                    <a href="<?php echo base_url();?>modulo5/unidad1"
                        class="list-group-item list-group-item-action bg-light">Unidad 1</a>

                    <a href="<?php echo base_url();?>modulo5/unidad2"
                        class="list-group-item list-group-item-action bg-light">Unidad 2</a>
                    
                    <a href="<?php echo base_url();?>modulo5/unidad3"  class="list-group-item">Unidad 3</a>


                    <div class="btn-group dropright">

                         <a href="<?php echo base_url();?>modulo5/unidad4"  class="list-group-item">Unidad 4</a>
                         

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo5/unidad4/actividad1"
                                    class="list-group-item">Actividades</a>
                                <a href="<?php echo base_url();?>modulo5/unidad4/evaluacion" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>

                   
                    <a href="<?php echo base_url();?>modulo5/unidad5" class="list-group-item">Unidad 5</a>

                </ul>


                <a href="<?php echo base_url();?>modulo6" class="list-group-item list-group-item-action bg-light">
                    Módulo 6</a>
                <a href="<?php echo base_url();?>modulo7" class="list-group-item list-group-item-action bg-light">
                    Módulo 7</a>
                <a href="<?php echo base_url();?>modulo8" class="list-group-item list-group-item-action bg-light">
                    Módulo 8</a>
                <a href="<?php echo base_url();?>modulo9" class="list-group-item list-group-item-action bg-light">
                    Módulo 9</a>
                <a href="<?php echo base_url();?>modulo10" class="list-group-item list-group-item-action bg-light">
                    Módulo 10</a>
                <a href="<?php echo base_url();?>modulo11" class="list-group-item list-group-item-action bg-light">
                    Módulo 11</a>
                <a href="<?php echo base_url();?>modulo12" class="list-group-item list-group-item-action bg-light">
                    Módulo 12</a>

            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom d-lg-none">
                <button class="btn " id="menu-toggle"><i class="fas fa-align-justify"></i></button>

            </nav>


            <!--breadcrumbs-->

            <nav class="bread-style" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>inicio/main">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo5">Módulo 5</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo5/unidad4">Unidad 4</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actividad 1</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 4: Publicidad y el campo político</h1>
                    <?php echo form_open('modulo5/unidad4/evaluacion');$this->session->set_userdata('idAct','m5u4a1'); ?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4 class="subtitle">La publicidad y el auspicio – ubicación, mensajes y audiencia</h4><br>
                        Por [1] se establece:
                        <div class="contenido">
                        <blockquote>
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
                        <h4 class="subtitle">Evaluación de los lineamientos para la propaganda política</h4>
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
                        <h4 class="subtitle">Evaluación de los entes reguladores para la propaganda en elecciones</h4>
                        <p class="card-text">
                            Investigue cómo estos entes regulatorios representan los intereses de los ciudadanos.
                            Examine el papel que los ciudadanos pueden tener para asegurar que la propaganda política
                            sea verdadera, justa y precisa <br>
                            Anote cualquier sugerencia que usted le haría al ente regulatorio en relación a la
                            propaganda política <br>
                            <textarea name="preg3" style="width: 80%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br/>
                        </p>
                        <h4 class="subtitle">Regulaciones aplicables a los medios durante elecciones nacionales</h4>
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
                        </blockquote>
                        </div>
                        <h4 class="subtitle">Bibliografía:</h4>
                        <p>[1] UNAOC, UNESCO, "Unidad 4: Publicidad y el campo político", en <em>Media Information Literacy for Teachers</em>, 2020.
                            <a href="http://unesco.mil-for-teachers.unaoc.org/modules/modulo-5-publicidad/unidad-4-publicidad-y-el-campo-politico/?lang=es" 
                            target="_blank" rel="noopener noreferrer">
                            http://unesco.mil-for-teachers.unaoc.org/modules/modulo-5-publicidad/unidad-4-publicidad-y-el-campo-politico/?lang=es</a>
                        </p>

                    </div>
                </div>



            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo5/unidad4/contenidos" class="btn btn_navegacion">Anterior</a>
                <button id="btn-siguiente" class="btn btn_navegacion" name="submit" type="submit">Siguiente</button>
            </center>
            <?php echo form_close(); ?>
            <?php $this->load->view('initial/paginacion');?>


            <p class="final_contenido">Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/">
                    Licencia Creative
                    Commons
                    Reconocimiento Compartir igual 4.0</a></p>
            <br>
            <!-- /#page-content-wrapper -->
        </div>

    </div>


    <?php $this->load->view('initial/footer');?>
    <?php $this->load->view('initial/scriptGenerico');?>
    <script src="<?php echo base_url();?>public/assets/modulos/mod"></script>
    
    


    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>

</html>