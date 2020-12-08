<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AMID</title>

    <?php $this->load->view('initial/linkGenerico'); ?>

</head>

<body>
    <?php $this->load->view('initial/nav'); ?>
    <link href="<?php echo base_url(); ?>public/assets/css/style.css" rel="stylesheet">

    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">

            <div class="list-group list-group-flush">

                <a href="<?php echo base_url(); ?>modulo1" class="list-group-item list-group-item-action bg-light"><i class="dropdown-menu"></i>Módulo 1<span class="arrow"></span></a>
                <ul class="list-group-item">
                    <div class="btn-group dropright">
                        <a href="<?php echo base_url(); ?>modulo1/unidad1" class="list-group-item list-group-item-action bg-light">Unidad 1</a>
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item ">
                                <a href="<?php echo base_url(); ?>modulo1/unidad1/contenidos" class="list-group-item">Contenidos</a>
                                <a href="#" onclick="inactivoEva()" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>


                    <a href="#" onclick="inactivo(1)" class="list-group-item list-group-item-action bg-light inactive">Unidad 2</a>
                    <a href="#" onclick="inactivo(1)" class="list-group-item list-group-item-action bg-light inactive">Unidad 3</a>
                    <a href="#" onclick="inactivo(1)" class="list-group-item list-group-item-action bg-light inactive">Unidad 4</a>
                </ul>


                <a href="<?php echo base_url(); ?>modulo2" class="list-group-item list-group-item-action bg-light">
                    Módulo 2</a>
                <a href="<?php echo base_url(); ?>modulo3" class="list-group-item list-group-item-action bg-light">
                    Módulo 3</a>
                <a href="<?php echo base_url(); ?>modulo4" class="list-group-item list-group-item-action bg-light">
                    Módulo 4</a>
                <a href="<?php echo base_url(); ?>modulo5" class="list-group-item list-group-item-action bg-light">
                    Módulo 5</a>
                <a href="<?php echo base_url(); ?>modulo6" class="list-group-item list-group-item-action bg-light">
                    Módulo 6</a>
                <a href="<?php echo base_url(); ?>modulo7" class="list-group-item list-group-item-action bg-light">
                    Módulo 7</a>
                <a href="<?php echo base_url(); ?>modulo8" class="list-group-item list-group-item-action bg-light">
                    Módulo 8</a>
                <a href="<?php echo base_url(); ?>modulo9" class="list-group-item list-group-item-action bg-light">
                    Módulo 9</a>
                <a href="<?php echo base_url(); ?>modulo10" class="list-group-item list-group-item-action bg-light">
                    Módulo 10</a>
                <a href="<?php echo base_url(); ?>modulo11" class="list-group-item list-group-item-action bg-light">
                    Módulo 11</a>
                <a href="<?php echo base_url(); ?>modulo12" class="list-group-item list-group-item-action bg-light">
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>inicio/main">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>modulo1">Módulo 1</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>modulo1/unidad1">Unidad 1</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contenido</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 1: Comprender la alfabetización mediática e informacional: Una
                        orientación</h1>
                </center>
                <br>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4 class="subtitle">Los múltiples papeles de los medios</h4><br>
                        <div class="contenido">
                            <p class="card-text">
                                Los proveedores de información juegan un papel central en los procesos de información y
                                comunicación. Son
                                una forma de comunicar la información, aunque su rol es mucho más amplio que esto. Para
                                propósitos de este
                                Curriculum AMI, los medios se definen (sin tomar en cuenta la naturaleza y las
                                tecnologías utilizadas)
                                como fuentes de información confiable y actualizada creados a través de un proceso
                                editorial determinado
                                por valores periodísticos donde la confiabilidad editorial se pueda atribuir a una
                                organización específica
                                o persona legal. Hasta el punto que los medios son una parte importante del sistema de
                                comunicación de la
                                sociedad, su representación institucional puede mezclarse con una variedad de
                                proveedores de información
                                que no pertenecen a los medios, tales como bibliotecas, museos, archivos, proveedores de
                                información de
                                Internet, otras organizaciones de información y ciudadanos que proveen su propio
                                contenido.
                                <br> <br>

                                <center>
                                    <img class="papeles_media" src="<?php echo base_url(); ?>public/assets/modulos/mod1/img/papelesMedia.png" alt="Papeles media">
                                </center>


                                <!-- <ul>
                                <li>Actúan como canales de información y conocimiento a través de los cuales los
                                    ciudadanos se comunican
                                    entre ellos y toman decisiones informadas</li>
                                <li>Facilitan debates informados entre diversos actores</li>
                                <li>Nos ofrecen mucho de lo que aprendemos sobre el mundo más allá de nuestra
                                    experiencia inmediata</li>
                                <li>Son los medios a través de los cuales la sociedad conoce acerca de si misma y
                                    construye un sentido
                                    de comunidad</li>
                                <li>Funcionan como un fiscalizador del gobierno en todas sus formas, promoviendo la
                                    transparencia en la
                                    vida pública y el escrutinio público de aquellos que están en el poder al exponer la
                                    corrupción, mala
                                    administración y mal manejo corporativo</li>
                                <li>Son facilitadores esenciales de los procesos democráticos y uno de los garantes de
                                    las elecciones
                                    libres y justas</li>
                                <li>Son un vehículo para la expresión cultural y la cohesión cultural dentro y entre
                                    naciones</li>
                                <li>Funcionan como un defensor o un actor social en su propio derecho mientras que
                                    respetan los valores
                                    pluralistas (Adaptado de los MDIs de UNESCO)</li>
                            </ul> -->
                            </p>
                        </div>
                    </div>
                </div>



            </div>

            <br>
            <center>
                <a href="<?php echo base_url(); ?>modulo1/unidad1/contenidos" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url(); ?>modulo1/unidad1/actividad2" class="btn btn_navegacion">Siguiente</a>
            </center>
            <?php $this->load->view('initial/paginacion'); ?>


            <p class="final_contenido">Obra publicada con <a href="https://creativecommons.org/licenses/by-sa/4.0/">
                    Licencia Creative
                    Commons
                    Reconocimiento Compartir igual 4.0</a></p>
            <br>
            <!-- /#page-content-wrapper -->
        </div>

    </div>


    <?php $this->load->view('initial/footer'); ?>
    <?php $this->load->view('initial/scriptGenerico'); ?>

    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>


</body>

</html>


<style>
    .papeles_media {
        width: 800px;
    }
</style>