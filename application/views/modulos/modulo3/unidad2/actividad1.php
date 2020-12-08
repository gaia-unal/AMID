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

                <ul class="list-group-item">

                    <a href="<?php echo base_url();?>modulo3/unidad1"
                        class="list-group-item list-group-item-action bg-light">Unidad 1</a>


                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo3/unidad2" class="list-group-item list-group-item-action bg-light">Unidad 2</a>
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo3/unidad2/contenidos"
                                    class="list-group-item">Contenidos</a>
                                <a href="<?php echo base_url();?>modulo3/unidad2/evaluacion" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>



                    <a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 3</a>
                    <a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 4</a>
                    <a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 5</a>
                </ul>




                <a href="<?php echo base_url();?>modulo4" class="list-group-item list-group-item-action bg-light">
                    Módulo 4</a>
                <a href="<?php echo base_url();?>modulo5" class="list-group-item list-group-item-action bg-light">
                    Módulo 5</a>
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo3">Módulo 3</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo3/unidad2">Unidad 2</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Temas</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 2: Códigos de la industria sobre la diversidad y la
                        representación</h1>
                        <?php echo form_open('modulo3/unidad2/evaluacion');$this->session->set_userdata('idAct','m3u2a1'); ?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <br>
                        <h4 class="subtitle">Temas</h4><br>
                        <div class="contenido">
                        <p class="card-text">
                            Los códigos mediáticos y de ética son unos principios de conducta fundados en los valores
                            éticos de la profesión como base del compromiso de todos los que tienen responsabilidad en
                            el proceso de informar: empresarios, directores, editores y reporteros.</p>

                        <blockquote cite="https://fundaciongabo.org/es/consultorio-etico/consulta/1744" align="justify">
                            <p class="card-text">
                                El ejercicio ético de la profesión está regulado, primordialmente, por la conciencia
                                personal del periodista. La ética, como decisión de cada persona, convierte a cada uno
                                en legislador de sí mismo y en lector de la ley moral inscrita en su corazón. Son las
                                dos expresiones con que Kant recoge una singularidad de lo ético, que según Aristóteles
                                es “una obediencia a la propia naturaleza”. Y según la práctica: la ética es una
                                decisión libre de cada persona.
                                Los códigos de ética y los Manuales de Estilo que adoptan los medios de comunicación son
                                ayudas que permiten identificar valores, objetivos y medios institucionales o colectivos
                                que orientan propósitos éticos, pero no son la ética, ni pueden tener el carácter de
                                leyes o de reglamentos. (Laguna Agudelo, 2018)
                            </p>
                        </blockquote>
                        <p class="card-text">
                            1. Aplique el código de práctica a las representaciones en las noticias del
                            ejercicio previo. Evalúe hasta qué grado se cumplen estas regulaciones. Tomen
                            en cuenta el texto y contexto de su evaluación. De ejemplos específicos de la
                            cobertura que sustenten su respuesta. Si existen casos en los cuales los reportajes
                            violan estas regulaciones, ¿qué recurso tienen disponible los individuos? <br><br>
                            <textarea name="preg1" style="width: 90%;" rows="5" minlength="1" maxlength="500" onkeypress="return check(event)"
                            required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea> <br><br>
                            2. Examine otras áreas donde los medios están cubiertos por estos códigos
                            (por Ej. imágenes de género en la publicidad). Evalúe hasta qué punto se siguen
                            estas regulaciones. Detalle la retroalimentación que usted daría a los entes
                            reguladores y/o productores de estos textos mediáticos <br> <br>
                            <textarea name="preg2" style="width: 90%;" rows="5" minlength="1" maxlength="500" onkeypress="return check(event)"
                            required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                        </p>
                        </div>
                    </div>
                </div>



            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo3/unidad2/contenidos" class="btn btn_navegacion">Anterior</a>
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