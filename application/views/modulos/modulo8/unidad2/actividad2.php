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
    <link href="<?php echo base_url();?>public/assets/css/style.css" rel="stylesheet">
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

                <a href="<?php echo base_url();?>modulo6" class="list-group-item list-group-item-action bg-light">
                    Módulo 6</a>

                <a href="<?php echo base_url();?>modulo7" class="list-group-item list-group-item-action bg-light">
                    Módulo 7</a>

                <a href="<?php echo base_url();?>modulo8" class="list-group-item list-group-item-action bg-light">
                    Módulo 8</a>

                <ul class="list-group-item">

                <a href="<?php echo base_url();?>modulo8/unidad1"
                            class="list-group-item list-group-item-action bg-light">Unidad 1</a>

                    <div class="btn-group dropright">
                       
                        <a href="<?php echo base_url();?>modulo8/unidad2" class="list-group-item">Unidad 2</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo8/unidad2/contenidos"
                                    class="list-group-item">Contenidos</a>
                                <a href="<?php echo base_url();?>modulo8/unidad2/evaluacion" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>


                    <a href="#" class="list-group-item">Unidad 3</a>
                </ul>

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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo8">Módulo 8</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo8/unidad2">Unidad 2</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actividad 2</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 2: Ambiente de Aprendizaje y Alfabetización Informacional</h1>
                    <?php echo form_open('modulo8/unidad2/evaluacion');$this->session->set_userdata('idAct','m8u2a2'); ?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <br>
                        <h4 class="subtitle">Actividad reflexión</h4><br>

                        <div class="contenido">
                        <p class="card-text">
                            <ol>
                                <li>¿Está usted de acuerdo que las seis etapas del Big6 son los elementos claves de la
                                    alfabetización informacional? Si no es así, ¿qué es lo que usted añadiría y por qué?
                                    En realidad, ¿cree usted que estas seis etapas ocurren en un orden secuencial claro
                                    como se presentan?
                                </li>
                                <textarea name="preg1" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea> <br>
                                Busque una revista impresa o en formato electrónico en la biblioteca de su
                                escuela/colegio (o la principal biblioteca en su ciudad o pueblo) sobre educación (por
                                Ej. educación de profesores, educación especial, educación comparativa, etc.). En la
                                revista, identifique un tema sobre el cual usted quiera conocer más. Haga un resumen de
                                los principales hallazgos/ temas en los artículos.
                                <li>¿Qué tan útil es la información para su práctica profesional como profesor? ¿La
                                    información es aplicable para el contexto de su país? De ser así, ¿de qué manera
                                    usted usaría esta información?</li>
                                <textarea name="preg2" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                                <li>Evalúe el ambiente de la escuela/colegio en relación a las necesidades de
                                    alfabetización informacional y escriba recomendaciones específicas que mejorarían la
                                    alfabetización informacional de los estudiantes</li>
                                <textarea name="preg3" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                                <li>El Big6 y la resolución de problemas en información: utilice los recursos de
                                    información en la biblioteca para explorar un tema o un tema de actualidad (por Ej.
                                    derecho al voto, democracia, VIH/SIDA, etc.). Aplique las etapas del Big6 para
                                    explorar este tema.</li>
                                <textarea name="preg4" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                                <li>Utilice la tecnología de las computadoras para tener acceso a la información en
                                    temas de interés y presente la información (textual o numérica) en un cuadro o en un
                                    formato gráfico. Compare la cantidad, calidad y utilidad de la información de sus
                                    recursos bibliotecarios con la información del Internet</li>
                                <textarea name="preg5" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                                <li>Escriba a continuación sobre cómo el uso de la radio y la telefonía móvil está
                                    cambiando la cara de la generación de la información y su uso en su país.</li>
                                <textarea name="preg6" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                                <li>Escriba un ensayo sobre cómo el uso de la radio y la telefonía móvil está cambiando
                                    la cara de la generación de la información y su uso en su país. Presente sus
                                    descubrimientos por medio de una presentación en Power Point.</li>
                            </ol>
                        </p>
                        </div>
                    </div>
                </div>



            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo8/unidad2/actividad1" class="btn btn_navegacion">Anterior</a>
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