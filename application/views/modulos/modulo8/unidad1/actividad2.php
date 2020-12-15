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

                    <div class="btn-group dropright">
                        <a href="<?php echo base_url();?>modulo8/unidad1"
                            class="list-group-item list-group-item-action bg-light">Unidad 1</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo8/unidad1/contenidos"
                                    class="list-group-item">Contenidos</a>
                                <a href="<?php echo base_url();?>modulo8/unidad1/evaluacion1" class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>

                    <a href="<?php echo base_url(); ?>modulo8/unidad2" class="list-group-item">Unidad 2</a>
                    <a href="<?php echo base_url(); ?>modulo8/unidad3" class="list-group-item">Unidad 3</a>
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo8/unidad1">Unidad 1</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actividad 2</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 1: Conceptos y Aplicación de la Alfabetización Informacional</h1>
                    <?php echo form_open('modulo8/unidad1/evaluacion1');$this->session->set_userdata('idAct','m8u1a2'); ?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                    <h4 class="subtitle">Retroalimentación</h4>
                        <br>
                        <div class="contenido">
                        <p class="card-text">
                            <ol>
                                <li>Hable sobre las actitudes culturales hacia la información. ¿Cómo se ve y se valora
                                    la información en su sociedad? </li>
                                    <textarea name="preg1" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true" autofocus></textarea>
                                <li>¿Cómo los puntos de vista de la información impresa (por Ej. de los principales
                                    periódicos) se comparan con la información generada por los medios electrónicos?
                                </li>
                                <textarea name="preg2" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                                <li>¿Cuál es la relación entre la información y el poder y entre los medios impresos
                                    y los medios digitales? ¿Cuál es la identidad de la(s) persona(s) detrás de la
                                    información generada? </li>
                                <textarea name="preg3" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                                <li>Usando Internet o la biblioteca de la escuela/colegio o ambos, identifique un
                                    problema o un tema para investigar en una de las siguientes áreas: educación cívica,
                                    ciencias, estudios sociales, historia o geografía. Presente los resultados de su
                                    investigación en un texto escrito a continuación. </li>
                                <textarea name="preg4" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                                <li>Después del texto, reflexione sobre lo siguiente: ¿De qué forma usted seleccionó
                                    lo que quería presentar de entre una gran variedad de información disponible sobre
                                    el tema? </li>
                                    <textarea name="preg5" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                                <li>¿De qué quería usted tener más información que no pudo tener acceso, o cómo
                                    afectó esto a su presentación? </li>
                                    <textarea name="preg6" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                                <li>Finalmente, ¿transformó usted la información que recopiló para aplicar su
                                    contexto particular? ¿Cómo y por qué? </li>
                                    <textarea name="preg7" style="width: 100%;" rows="5" minlength="1" maxlength="200" onkeypress="return check(event)"
                                    placeholder="Escriba su respuesta aquí" spellcheck="true" ></textarea>
                            </ol>
                        </p>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo8/unidad1/actividad1" class="btn btn_navegacion">Anterior</a>
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