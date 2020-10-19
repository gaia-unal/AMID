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
                        <a href="<?php echo base_url();?>modulo3/unidad2" class="list-group-item list-group-item-action bg-light ">Unidad 2</a>

                    <div class="btn-group dropright">
                    <a href="<?php echo base_url();?>modulo3/unidad3" class="list-group-item list-group-item-action bg-light ">Unidad 3</a>
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo3/unidad3/temas"
                                    class="list-group-item">Temas</a>
                                <a href="<?php echo base_url();?>modulo3/unidad3/actividad1"
                                    class="list-group-item">Actividades</a>
                                <a href="<?php echo base_url();?>modulo3/unidad3/evaluacion"  class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>



                   
                    <a href="#" onclick="inactivo(3)" class="list-group-item inactive">Unidad 4</a>
                    <a href="#" onclick="inactivo(3)" class="list-group-item inactive">Unidad 5</a>
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo3/unidad3">Unidad 3</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actividad 1</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 3: Televisión, películas y publicación de libros</h1>
                    <?php echo form_open('modulo3/unidad3/evaluacion');$this->session->set_userdata('idAct','m3u3a1'); ?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        
                        <div class="contenido">
                        <p class="card-text">
                            Las películas son uno de los medios más poderosos en los últimos cien años, que convocan a
                            masas en todo el mundo. En los años recientes, la televisión e Internet también han llegado
                            a un gran número de personas en muchos lugares del mundo. Al mismo tiempo, los libros
                            continúan siendo una fuente importante de ideas e información. Los cuatro medios y los
                            proveedores de información pueden jugar un papel significante y dar forma a cómo la sociedad
                            se comprende a si misma al contar historias nacionales y promover versiones particulares de
                            la historia nacional. Una parte importante de la alfabetización mediática e informacional
                            (AMI) es entender cómo estos medios dan forma a nuestro sentido del mundo en el que
                            vivimos.
                        </p>

                        <blockquote cite="https://fundaciongabo.org/es/consultorio-etico/consulta/1744" align="justify">
                            <p class="card-text">
                                “Nuestra meta es tener una variedad de perspectivas representadas en las películas y en
                                la televisión. El aumentar los puntos de vista que están disponibles en la pantalla no
                                le quita nada a nadie: Es más, esto lleva a tener una programación más amplia y mejor,
                                nuevos puntos de vista en la pantalla”. (Joan Pennefather, primera mujer presidenta de
                                la National Film Board de Canadá, en Maclean’s 29 de marzo, 1993)
                            </p>
                        </blockquote>
                        <h4 class="subtitle">Analizar la representación de género en la publicidad</h4>
                        <p class="card-text">1. Obtenga una colección de comerciales de Internet o de los periódicos
                            locales o de
                            la televisión en su país. Trate de garantizar que estos comerciales representan tanto a los
                            hombres como a las mujeres. En pequeños grupos, discuta cómo las mujeres están representadas
                            en los anuncios con relación a los hombres. Anote algunas de sus observaciones.
                            Discuta sobre las posibles implicaciones de algunas de estas representaciones. Algunas
                            representaciones son vistas de diferente manera por algunos miembros del grupo. ¿Por qué
                            cree que esto sucede?</p>
                        <textarea name="preg1" style="width: 90%;" rows="8" minlength="1" maxlength="300" onkeypress="return check(event)"
                            required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea><br>
                        <br><h4 class="subtitle">Examinar el éxito de los programas actuales de televisión y de las películas destacadas</h4>
                        <p class="card-text">2. Haga una lista de cinco películas que tienen éxito de taquilla local o
                            internacional. Si
                            es posible vea los cortos en línea de cada una de estas películas, o seleccione una película
                            y véala completamente. Describa quién o qué se
                            representa como parte central de la historia. Explique por qué cree que esta representación
                            pueda gustar a las audiencias?
                        </p>
                        <textarea name="preg2" style="width: 90%;" rows="8" minlength="1" maxlength="300" onkeypress="return check(event)"
                            required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea><br>
                        <br><h4 class="subtitle">Una fórmula popular de película se enfoca en el mito arquetípico del “viaje del héroe”.</h4>
                        <p>
                            Los mitos representan sistemas de creencias implícitos que expresan los miedos, los deseos y las
                            aspiraciones de una cultura. En estas historias, el héroe – desconocedor de su destino – es
                            llamado a realizar una importante búsqueda. Usualmente el héroe atraviesa por una serie de
                            etapas como parte de esta búsqueda, incluyendo: su “nacimiento” o inicios, llega a ser
                            consciente de su “llamado” o destino, experimenta el romance, se enfrenta con sus
                            adversarios, recibe consejos de un anciano sabio, y finalmente regresa a casa.</p>
                        <p class="card-text">3. Cree una lista de películas que se basen en la fórmula mencionada. Haga
                            un
                            recuento, describa al héroe, explique hasta qué punto el héroe representa los deseos
                            y los valores del individuo en la sociedad.</p>
                        <!-- <br> -->
                        <textarea name="preg3" style="width: 90%;" rows="8" minlength="1" maxlength="300" onkeypress="return check(event)"
                            required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                        </div>
                    </div>
                </div>



            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo3/unidad3/temas" class="btn btn_navegacion">Anterior</a>
                <button id="btn-siguiente" class="btn btn_navegacion" name="submit"  type="submit">Siguiente</button>
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