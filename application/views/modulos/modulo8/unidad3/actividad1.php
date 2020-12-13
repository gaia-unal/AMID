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

                    <a href="<?php echo base_url();?>modulo8/unidad2" class="list-group-item">Unidad 2</a>

                    <div class="btn-group dropright">


                        <a href="<?php echo base_url();?>modulo8/unidad3"  class="list-group-item">Unidad 3</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo8/unidad3/contenidos"
                                    class="list-group-item">Contenidos</a>
                                <a href="#" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo8/unidad3">Unidad 3</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actividad 1</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 3: Alfabetización Informacional Digital</h1>

                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <br>
                        <h4 class="subtitle">Enfoques pedagógicos y actividades</h4><br>
                        <?php echo form_open('modulo8/unidad3/actividad2');$this->session->set_userdata('idAct','m8u3a1'); ?>
                        <div class="contenido">
                        <p class="card-text">
                        
                            Almacenamiento de la información de formato digital, permitiendo que sea accesible
                            utilizando una amplia gama de dispositivos, no como en otras formas de información
                            analógica. Este acceso flexible hace que la digitalización sea importante y también da
                            énfasis a la necesidad de aprender destrezas digitales junto con las destrezas de
                            información. Esencialmente, la alfabetización digital incluye el analizar, localizar,
                            organizar, evaluar, crear y utilizar la información utilizando la tecnología digital. Hable
                            sobre las ventajas de tener la información en un formato digital (transmisión eficaz,
                            almacenamiento, investigación, manipulación, compatibilidad, etc.) [1]
                            <ol>
                                <li>Investigue en Internet y en otros recursos en línea, tales como bases de datos y
                                    bibliotecas electrónicas y recolecte información sobre un tema específico de
                                    investigación. Reduzca las fuentes de información para que calcen en su propósito de
                                    investigación. <br> Busque palabras claves, operaciones lógicas (por Ej. “y”, “o”) y
                                    determine a continuación qué elementos trabajan mejor y por qué</li><br>
                                <textarea name="preg1" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br>
                                <li>Estudie un sitio en Internet que se utilice para dar cursos sobre educación a
                                    profesores o cualquier otro programa educativo. Revise cómo se organiza esta
                                    información y cómo se tiene acceso al sitio. <br> ¿Qué recursos de información
                                    digital se utilizan? ¿Cómo se integran los recursos digitales a los materiales del
                                    curso? Practique hacer uso de este sitio y hable sobre lo útil que puede ser para el
                                    aprendizaje y cuáles son las limitaciones. Hable sobre las ventajas y desventajas.
                                </li><br>
                                <textarea name="preg2" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                                <br>   Visite varios “blogs” y “wikis” que han sido creados por individuos o en colaboración
                                con otras personas.
                                <li>¿Qué tipo de intercambio de información se da en estos medios en línea? ¿Para qué
                                    propósito sirve la información? ¿Quién provee la información? ¿Cuáles cree usted que
                                    son las motivaciones y los motivos?</li><br>
                                <textarea name="preg3" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                                <br> <li>Escriba a continuación, desde el punto de vista de los estudiantes, acerca de ¿qué
                                    información digital debería ser preservada? ¿Cuáles son los principales criterios de
                                    selección y las soluciones técnicas disponibles, y cómo se puede asegurar la
                                    sostenibilidad? ¿Cuáles son otros aspectos de este tema de preservación?</li><br>
                                <textarea name="preg4" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                            </ol>
                        </p>
                        </div>

                        <h4 class="subtitle">Bibliografía:</h4>
                            <p>[1] UNAOC, UNESCO, "Módulo 8: Alfabetización informacional y destrezas bibliotecarias", en <em>Media Information Literacy for Teachers</em>, 2020.
                                <a href="http://unesco.mil-for-teachers.unaoc.org/modules/modulo-8-alfabetizacion-informacional-y-destrezas-bibliotecarias/unidad-3-alfabetizacion-informacional-digital/?lang=es" target="_blank" rel="noopener noreferrer">
                                http://unesco.mil-for-teachers.unaoc.org/modules/modulo-8/?lang=es</a>
                            </p>
                    </div>
                </div>



            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo8/unidad3/contenidos" class="btn btn_navegacion">Anterior</a>
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