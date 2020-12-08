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

                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo5/unidad1"
                            class="list-group-item list-group-item-action bg-light">Unidad 1</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo5/unidad1/actividad1"
                                    class="list-group-item">Contenidos</a>
                                <a href="<?php echo base_url();?>modulo5/unidad1/evaluacion" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>


                    <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 2</a>
                    <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 3</a>
                    <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 4</a>
                    <a href="#" onclick="inactivo(1)" class="list-group-item inactive">Unidad 5</a>
                    
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo5/unidad1">Unidad 1</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actividad 1</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 1: Publicidad, ingresos y regulaciones</h1>
                    <?php echo form_open('modulo5/unidad1/evaluacion');$this->session->set_userdata('idAct','m5u1a1'); ?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <br>
                        <h4 class="subtitle">Examine y evalúe el objetivo y eficacia de las regulaciones en la industria de la publicidad
                        </h4><br>

                        <div class="contenido">

                        <p class="card-text">
                            Utilizando Internet o una biblioteca, investigue las regulaciones que existen en su región
                            sobre la industria de la publicidad. Identifique dónde se colocan estás regulaciones para
                            los ciudadanos que necesitan tener acceso a esta información. Identifique qué individuos o
                            grupos han creado estas regulaciones. <br><br> Identifique dónde se colocan estás regulaciones
                            para los ciudadanos que necesitan tener acceso a esta información. Identifique qué
                            individuos o grupos han creado estas regulaciones.<br>
                           <br> <textarea name="preg1" style="width: 80%;" rows="6" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" autofocus></textarea>
                        </p>
                        <h4 class="subtitle">Aplique las regulaciones existentes a los ejemplos actuales de publicidad</h4>
                        <p class="card-text">
                         <br>   Aplique las regulaciones a una variedad de anuncios que se encuentran en los medios locales.
                            En instancias en las cuales la publicidad viola las regulaciones, investigue qué recursos
                            tienen disponibles los consumidores. <br> Investigue qué recursos tienen disponibles los
                            consumidores.<br>  
                            <br> <textarea name="preg2" style="width: 90%;" rows="6" minlength="1" maxlength="200" onkeypress="return check(event)"
                            required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                        </p>
                        <h4 class="subtitle">Investigar la publicidad como una fuente importante de ingresos para la televisión</h4>
                        <p class="card-text">
                            Investigue si las necesidades de los anunciantes han afectado el tipo o la calidad de
                            programación o cobertura en los medios.
                            <ul>
                                <li>Explique cuál es la razón detrás de colocar estos anuncios durante esos programas
                                    específicos. También anote cualquier anuncio o colocación de productos que ocurra
                                    durante los programas en si. Evalúe la eficacia de las estrategias de publicidad que
                                    se utilizan en este marco de tiempo para llegar a las audiencias seleccionadas</li><br>  
                                <textarea name="preg3" style="width: 80%;" rows="6" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br>  
                                <br>     <li>¿Dado que la publicidad es la principal fuente de ingresos de los medios: se debería
                                    sacrificar la libertad de expresión, la libertad de prensa y la libertad de acceso a
                                    la información para satisfacer a los publicistas, grandes compañías o al gobierno?
                                </li><br>  
                                <textarea name="preg4" style="width: 90%;" rows="6" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                            </ul>
                        </p>
                            

                        </div>
                    </div>
                </div>



            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo5/unidad1/contenidos" class="btn btn_navegacion">Anterior</a>
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