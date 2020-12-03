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


                    <div class="btn-group dropright">

                        <a href="<?php echo base_url();?>modulo5/unidad3"  class="list-group-item">Unidad 3</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo5/unidad3/temas"
                                    class="list-group-item">Temas</a>
                                <a href="<?php echo base_url();?>modulo5/unidad3/actividad1"
                                    class="list-group-item">Actividades</a>
                                <a href="<?php echo base_url();?>modulo5/unidad3/evaluacion" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>

                    <a href="#" class="list-group-item">Unidad 4</a>
                    <a href="#" class="list-group-item">Unidad 5</a>

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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo5/unidad3">Unidad 3</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actividad 1</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 3: Publicidad: El proceso creativo</h1>
                    <?php echo form_open('modulo5/unidad3/evaluacion');$this->session->set_userdata('idAct','m5u3a1'); ?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4 class="subtitle">La publicidad y el auspicio – ubicación, mensajes y audiencia</h4><br>
                        <div class="contenido">
                        <p class="card-text">
                        Haga un tour imaginario de su escuela/colegio/campus y vecindario e identifique los tipos de
                            publicidad, los anuncios de servicio público, promociones o auspicios que existan.<br><br> Explique
                            por qué los negocios e instituciones pueden escoger tener sus nombres, productos o logos
                            expuestos ahí. Explique en qué formas estos patrocinios/promociones difieren de la
                            publicidad “tradicional. <br>
                            <br>  <textarea name="preg1" style="width: 80%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" autofocus></textarea><br/>
                                <br> Haga una inspección de una colección de revistas, vea anuncios de televisión y visite un
                            número de sitos en la red de compañías importantes. Describa las estrategias de publicidad
                            que se usan en los ejemplos actuales. Elija un número de anuncios para examinar de cerca.
                            Describa la “personalidad” del producto que se presenta en cada anuncio e identifique las
                            emociones que el publicista trata de alcanzar. <br><br> ¿Qué promesas o soluciones ofrece el
                            anuncio o el ASP? ¿Cómo son de realistas? ¿Qué visiones de alegría o éxito comunican? <br>
                            <br> <textarea name="preg2" style="width: 80%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea> <br>
                                <br>Identifique la información, los mensajes y los valores que se transmiten en cada anuncio.
                            Hable sobre la necesidad de una clara distinción entre el contenido editorial y
                            publicitario. <br> ¿Qué tipo de afirmaciones se hacen en estos anuncios? ¿Quizá algún tipo
                            de información es engañosa o no es clara? Basándose en su análisis, ¿qué recomendaciones
                            haría usted a la audiencia de este anuncio? En otras palabras, ¿aceptaría usted la
                            información que se presenta en este anuncio? ¿Por qué o por qué no? ¿Haría usted algún
                            cambio para que la información o el mensaje fueran más exactos o completos? <br>
                            <br>  <textarea name="preg3" style="width: 80%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                                required placeholder="Escriba su respuesta aquí" spellcheck="true" autofocus></textarea><br/>
                                <br>  La colocación de un producto quiere decir el poner un producto comercial prominente en un
                            programa de radio o televisión en particular o en un libro, y también cada vez más en
                            Internet, sin identificarlo como publicidad, para satisfacer al fabricante del producto que
                            ha patrocinado el programa (es decir: ha pagado completamente o ha cubierto algunos de los
                            costos asociados). Algunos reguladores permiten la colocación del producto bajo la condición
                            de que los espectadores estén claramente informados acerca de la colocación del producto al
                            inicio o fin del programa. <br> <br>Elija ejemplos de colocación del producto: ¿Están
                            identificados como tal? Si en su país existen regulaciones para la colocación de productos,
                            ¿qué acciones pueden tomar los ciudadanos? ¿Cuál es el mensaje del producto que se transmite
                            en relación al contexto? ¿Qué mensajes se transmiten a través del producto en sí, así como
                            en el contexto en el que está? ¿Acaso un contexto diferente o colocación cambiaría la imagen
                            del producto y su mensaje? <br>
                            <br>   <textarea name="preg4" style="width: 80%;" rows="6" minlength="1" maxlength="300" onkeypress="return check(event)"
                            required placeholder="Escriba su respuesta aquí" spellcheck="true" autofocus></textarea><br/>
                        </p>

                        </div>
                    </div>
                </div>



            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo5/unidad3/temas" class="btn btn_navegacion">Anterior</a>
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