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
                    
                    <a href="<?php echo base_url();?>modulo5/unidad3"  class="list-group-item inactive">Unidad 3</a>


                    <div class="btn-group dropright">

                         <a href="<?php echo base_url();?>modulo5/unidad4"  class="list-group-item inactive">Unidad 4</a>
                         

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo5/unidad4/temas"
                                    class="list-group-item">Temas</a>
                                <a href="<?php echo base_url();?>modulo5/unidad4/actividad1"
                                    class="list-group-item">Actividades</a>
                                <a href="#" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>

                   
                    <a href="#" onclick="inactivo(4)" class="list-group-item inactive">Unidad 5</a>

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
                    <li class="breadcrumb-item active" aria-current="page">Evaluación</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 4: Publicidad y el campo político</h1>
                    <?php echo form_open('modulo5/unidad5/inicio');$this->session->set_userdata('idAct','m5u4a2'); ?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4 class="subtitle">Evaluación</h4><br>
                        <div class="contenido">
                        <p class="card-text">
                            <strong>Lea la siguiente publicidad política sucedida en Estados Unidos durante la campaña
                                de Donal Trump a la presidencia y luego analícelo utilizando los lineamientos de la
                                Unidad 2</strong> <br>
                            Entre los ejemplos de marketing político resulta interesante seguir con otro de los más
                            actuales. Que, precisamente, está ligado con dos de los canales más potentes del momento:
                            Facebook e Instagram.<br>
                            Se trata de la historia de cómo la campaña de Trump utilizó diferentes datos para hacer
                            anuncios personalizados en redes. De hecho, invirtió 150 millones de dólares en anuncios de
                            Facebook e Instagram en las últimas semanas de elecciones. De esta manera conseguiría
                            influenciar a los afroamericanos y las mujeres más jóvenes.<br>
                            Todo gracias a una base de datos personalizada llamada “Proyecto Álamo“. Esta base de datos
                            se creó con datos de diferentes orígenes. Tanto digitales como aportes personales y de
                            simpatizantes a la causa. Así, también, conseguiría quitar algo de esperanza a los
                            seguidores de Hillary Clinton.<br>
                            Tal y como explicó un alto cargo del partido de Trump en BusinessWeek, se pusieron en marcha
                            tres operaciones principales para esa supresión de votantes. Y las tres estaban orientadas a
                            los tres sectores en los que Clinton estaba centrándose:
                            <ul>
                                <li>Los liberales blancos.</li>
                                <li>Las mujeres jóvenes.</li>
                                <li>Los afroamericanos.</li>
                            </ul>
                            Sin embargo, los mejores ejemplos de marketing político son los que cumplen sus metas de la
                            manera menos esperada. Pero, además, haciendo uso de herramientas y recursos que están al
                            alcance de cualquiera.<br>
                            Por ejemplo, el equipo digital de Trump creó una animación del estilo de South Park de
                            Hillary Clinton con un título muy conciso: “Super depredador“. Mientras que el texto que se
                            incluía en el contenido persuadía de la siguiente manera: “Hillary piensa que los
                            afroamericanos son súper-depredadores”. <br>
                            Pero eso no fue todo. Esta imagen consiguió llegar a esos tres segmentos mediante las
                            publicaciones de páginas ocultas de Facebook.<br>
                            Tras las elecciones, Mark Zuckerberg compartió su opinión sobre este hecho. Apuntó que la
                            idea de que las “noticias falsas” de Facebook fueron las que influyeron en las elecciones
                            era una idea bastante loca. Pero lo cierto es que esta inversión en la red social tuvo una
                            gran influencia.<br>
                            A continuación, analice el ejemplo anterior según cada lineamiento:<br>
                            <ol><br>
                                <li>Concepto</li>
                                <textarea name="preg1" style="width: 95%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Estrategias</li>
                                <textarea name="preg2" style="width: 95%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Audiencia</li>
                                <textarea name="preg3" style="width: 95%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Texto</li>
                                <textarea name="preg4" style="width: 95%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Producción</li>
                                <textarea name="preg5" style="width: 95%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                                <li>Componente de la industria/negocio</li>
                                <textarea name="preg6" style="width: 95%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true"></textarea>
                            </ol>
                        </p>
                        </div>
                    </div>
                </div>



            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo5/unidad4/actividad1" class="btn btn_navegacion">Anterior</a>
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