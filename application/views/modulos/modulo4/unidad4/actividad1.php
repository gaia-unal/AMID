<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AMID</title>
    <?php $this->load->view('initial/linkGenerico');?>


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

                <ul class="list-group-item">

                    <a href="<?php echo base_url();?>modulo4/unidad1"
                        class="list-group-item list-group-item-action bg-light">Unidad 1</a>

                    <a href="<?php echo base_url();?>modulo4/unidad2" class="list-group-item inactive">Unidad 2</a>

                    <a href="<?php echo base_url();?>modulo4/unidad3" class="list-group-item inactive">Unidad 3</a>

                    <div class="btn-group dropright">


                        <a href="<?php echo base_url();?>modulo4/unidad4" class="list-group-item inactive">Unidad 4</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo4/unidad4/temas"
                                    class="list-group-item">Temas</a>
                                <a href="<?php echo base_url();?>modulo4/unidad4/actividad1"
                                    class="list-group-item">Actividades</a>
                                <a href="<?php echo base_url();?>modulo4/unidad4/evaluacion"
                                    class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>

                </ul>

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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo4">Módulo 4</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo4/unidad4">Unidad 4</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actividad 1</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 4: Planos de cámara y ángulos, transmitiendo un mensaje</h1>
                    <?php echo form_open('modulo4/unidad4/evaluacion');$this->session->set_userdata('idAct','m4u4a1'); ?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                        <br>
                        <h4 class="subtitle">Textos mediáticos e información</h4><br>
                        <div class="contenido">
                            <p class="card-text">
                                Realice una investigación en los medios para encontrar ejemplos de textos mediáticos e
                                información que hagan eficaz el uso de uno o más planos de cámara y ángulos descritos en
                                el
                                recuadro al final de este módulo. Tome en cuenta la revisión de fotos de periódicos,
                                noticieros de televisión, clips de cine o clips de programas de televisión.
                            <ul>
                                <li>Describa el significado que se transmite a través de los “lenguajes” de la cámara
                                    que se utilizan en cada texto</li><br>
                                <textarea name="preg1" style="width: 90%;" rows="6" minlength="1" maxlength="200"
                                    onkeypress="return check(event)" required placeholder="Escriba su respuesta aquí"
                                    spellcheck="true" autofocus></textarea><br>
                            </ul>
                            </p>
                            <br><h4 class="subtitle">Imagen o fotografía</h4>
                            <p>
                                Encuentre un ejemplo de una imagen estática o una fotografía, un clip de un programa de
                                televisión o un noticiero de televisión. Examínelo detenidamente.
                            <ul>
                                <li>Describa cómo se coloca al sujeto en la foto o en el metraje</li><br>
                                <textarea name="preg2" style="width: 90%;" rows="6" minlength="1" maxlength="200"
                                    onkeypress="return check(event)" required placeholder="Escriba su respuesta aquí"
                                    spellcheck="true"></textarea><br>
                                    <br> <li>¿Cuál es la impresión que se transmite como resultado?</li><br>
                                <textarea name="preg3" style="width: 90%;" rows="6" minlength="1" maxlength="200"
                                    onkeypress="return check(event)" required placeholder="Escriba su respuesta aquí"
                                    spellcheck="true"></textarea><br>
                                    <br>  <li>Describa cuál es la posición de la audiencia en relación al sujeto.</li><br>
                                <textarea name="preg4" style="width: 90%;" rows="6" minlength="1" maxlength="200"
                                    onkeypress="return check(event)" required placeholder="Escriba su respuesta aquí"
                                    spellcheck="true"></textarea><br>
                                    <br> <li>Si usted cambiara o sustituyera un ángulo distinto de la cámara o disparo, ¿cómo
                                    cambiaría el significado que se transmite a través de la foto o del metraje?</li><br>
                                <textarea name="preg5" style="width: 90%;" rows="6" minlength="1" maxlength="200"
                                    onkeypress="return check(event)" required placeholder="Escriba su respuesta aquí"
                                    spellcheck="true"></textarea>
                            </ul>
                            </p><br>
                            <br> <h4 class="subtitle">Comunidad</h4>
                            <p>
                                Imagine que usted es un camarógrafo o un fotógrafo que está cubriendo una concentración
                                política o un festival en una comunidad o celebración.
                            <ul>
                            <br>  <li>¿Qué tipo de ángulos de cámara o qué tipos de disparos usted escogería para su
                                    cobertura y por qué? </li><br>
                                <textarea name="preg6" style="width: 90%;" rows="6" minlength="1" maxlength="200"
                                    onkeypress="return check(event)" required placeholder="Escriba su respuesta aquí"
                                    spellcheck="true"></textarea><br>
                                <li>Desarrolle una pequeña lista de tomas para cubrir este evento</li><br>
                                <textarea name="preg7" style="width: 90%;" rows="6" minlength="1" maxlength="200"
                                    onkeypress="return check(event)" required placeholder="Escriba su respuesta aquí"
                                    spellcheck="true"></textarea><br>
                                    <br>  <li>¿De qué forma este trabajo de cámara le ayudará a transmitir la información
                                    necesaria y la impresión que desea sobre el evento?</li><br>
                                <textarea name="preg8" style="width: 90%;" rows="6" minlength="1" maxlength="200"
                                    onkeypress="return check(event)" required placeholder="Escriba su respuesta aquí"
                                    spellcheck="true"></textarea>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>



            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo4/unidad4/temas" class="btn btn_navegacion">Anterior</a>
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