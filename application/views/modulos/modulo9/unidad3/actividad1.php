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
               
                    <a href="<?php echo base_url();?>modulo9" class="list-group-item list-group-item-action bg-light">
                    Módulo 9</a>

                <ul class="list-group-item">

                    <a href="<?php echo base_url();?>modulo9/unidad1"
                        class="list-group-item list-group-item-action bg-light">Unidad 1</a>

                    <a href="<?php echo base_url();?>modulo9/unidad2" class="list-group-item">Unidad 2</a>

                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo9/unidad3" class="list-group-item">Unidad 3</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo9/unidad3/contenidos"
                                    class="list-group-item">Contenidos</a>
                                <a href="#" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>
                </ul>

               
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo9">Módulo 9</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo9/unidad3">Unidad 3</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actividad 1</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 3: Manejando el Cambio Para Fomentar un Medio Ambiente Propicio para las Escuelas AMI</h1>
                    <?php echo form_open('modulo9/unidad3/actividad2');$this->session->set_userdata('idAct','m9u3a1'); ?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <br>
                        <div class="contenido">

                        <p class="card-text">
                            Para garantizar el éxito de los cursos y programas de AMI, muchos expertos han
                            desarrollado un conjunto de recomendaciones. Varias de estas recomendaciones se enumeran a
                            continuación. Recomendaciones sugeridas: [1]
                            <ul>
                                <li>Identificar el contexto</li>
                                <li>Identificar los principales participantes y partidarios a nivel de programa y de
                                    políticas</li>
                                <li>Desarrolle un plan estratégico para la implementación/integración, etc.</li>
                                <li>Desarrolle un plan para promover AMI</li>
                                <li>Identifique las agencias/asociaciones que prestan apoyo</li>
                                <li>Identifique los recursos disponibles y los que se requieren</li>
                            </ul>
                        </p>
                        <p>1. Identifique cómo se puede aplicar esta lista dentro de su situación
                            particular. Identifique cualquier recomendación adicional que usted haría
                            para garantizar el éxito de AMI en su departamento o institución</p>
                            <textarea name="preg1" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                        <p>2. Cambiaría esta lista si uno toma en cuenta los criterios de un programa
                            exitoso para los estudiantes? Identifique aquí cualquier consideración adicional.
                        </p>
                        <textarea name="preg2" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                        <p>3. Tomando en cuenta las necesidades de su propia comunidad educativa, ¿de qué
                            manera se podría integrar AMI a los programas existentes para profesores, o desarrollarse
                            como un programa en sí? ¿Cuáles son las ventajas y desventajas de cada uno? Cite módulos
                            específicos como ejemplos</p>
                            <textarea name="preg3" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                        <br>
                        </div>
                        <br>
                        <h4 class="subtitle">Bibliografía:</h4>
                            <p>[1] UNAOC, UNESCO, "Módulo 9: Manejando el cambio para fomentar un medio ambiente propicio para las escualas AMI", en <em>Media Information Literacy for Teachers</em>, 2020.
                                <a href="http://unesco.mil-for-teachers.unaoc.org/modules/modulo-9-comunicacion-ami-y-aprendizaje-modulo-final/unidad-3-manejando-el-cambio-para-fomentar-un-medio-ambiente-propicio-para-las-escuelas-ami/?lang=es" target="_blank" rel="noopener noreferrer">
                                http://unesco.mil-for-teachers.unaoc.org/modules/modulo-9/?lang=es</a>
                            </p>
                    </div>
                </div>



            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo9/unidad3/contenidos" class="btn btn_navegacion">Anterior</a>
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