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

                <a href="<?php echo base_url();?>modulo6" class="list-group-item list-group-item-action bg-light">
                    Módulo 6</a>

                <ul class="list-group-item">

                <a href="<?php echo base_url();?>modulo6/unidad1"
                            class="list-group-item list-group-item-action bg-light">Unidad 1</a>

                    <div class="btn-group dropright">
                       

                        <a href="<?php echo base_url();?>modulo6/unidad2" class="list-group-item inactive">Unidad 2</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo6/unidad2/temas"
                                    class="list-group-item">Temas</a>
                                <a href="<?php echo base_url();?>modulo6/unidad2/actividad1"
                                    class="list-group-item">Actividades</a>
                                <a href="#" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>

                   
                    <a href="#" onclick="inactivo(2)" class="list-group-item inactive">Unidad 3</a>


                </ul>



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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo6">Módulo 6</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo6/unidad2">Unidad 2</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Evaluación</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                <br>
                    <h1 class="first_title">Unidad 2: Uso de las Nuevas Tecnologías Mediáticas en la Sociedad – Comunicación de Masas y Digital</h1>
                    <?php echo form_open('modulo6/unidad3/inicio');$this->session->set_userdata('idAct','m6u2a2'); ?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <br>
                        <h4 class="subtitle">Evaluación</h4>
                        <div class="contenido">
                       
                        <p class="card-text">
                            <ol>
                            <br>   <li>Haga una investigación para un estudio de caso de cómo se utilizan los medios de
                                    masas y las nuevas tecnologías para la comunicación de masas, y cómo están
                                    influyendo en la vida diaria, los valores y opiniones del público. Por ejemplo,
                                    ¿cómo la tecnología de los teléfonos móviles ha ayudado a cerrar la brecha de
                                    comunicación entre los ricos y los pobres en la sociedad?<br>
                                </li>
                                <br><textarea name="preg1" style="width: 95%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea><br>
                                <br>   <li>Explore cómo la comunicación digital está cambiando la forma en la que las personas
                                    interactúan en la sociedad, comparten el conocimiento e intercambian información.<br>
                                </li>
                                <br><textarea name="preg2" style="width: 95%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea><br>
                                <br>  <li>Desarrolle una estrategia para utilizar un sito de red social para promover la
                                    interacción sobre un tema en particular que usted quiera enseñar. ¿Cuáles son los
                                    riesgos y desafíos que los profesores podrían encontrar al usar las redes sociales
                                    para propósitos educativos? Identifique los riesgos y sugiera formas para reducir
                                    su impacto. </li><br>
                                    <br>  <textarea name="preg3" style="width: 95%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea><br>
                                <br>  <li>Utilice Internet para investigar el grado de gobierno electrónico que existe en su
                                    país. Debe elegir dos ejemplos como evidencia de que dichas actividades existen e
                                    indicar hasta qué punto ellos están involucrados o se les consulta en el proceso.
                                    ¿Se les consultó a los ciudadanos en general? Hable sobre la eficacia de estos
                                    proyectos de e-gobernanza. ¿Cuáles son los beneficios y las desventajas?</li><br>
                                    <br><textarea name="preg4" style="width: 95%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                            </ol>
                        </p>
                        </div>
                    </div>
                </div>



            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo6/unidad2/actividad1" class="btn btn_navegacion">Anterior</a>
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