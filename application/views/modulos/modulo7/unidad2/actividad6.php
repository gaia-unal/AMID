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

                <a href="<?php echo base_url();?>modulo7" class="list-group-item list-group-item-action bg-light">
                    Módulo 7</a>

                <ul class="list-group-item">

                    <a href="<?php echo base_url();?>modulo7/unidad1"
                        class="list-group-item list-group-item-action bg-light">Unidad 1</a>

                    <div class="btn-group dropright">


                        <a href="<?php echo base_url();?>modulo7/unidad2" class="list-group-item">Unidad 2</a>

                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group-item">
                                <a href="<?php echo base_url();?>modulo7/unidad2/contenidos"
                                    class="list-group-item">Contenidos</a>
                                <a href="<?php echo base_url();?>modulo7/unidad2/evaluacion1"  class="list-group-item">Evaluación</a>
                            </ul>
                        </div>
                    </div>
                </ul>

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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo7">Módulo 7</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>modulo7/unidad 2">Unidad 2</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contenido</li>
                </ol>
            </nav>

            <!--fin breadcrumbs-->

            <div class="contenedor">

                <!-- contenido -->
                <center>
                    <h1 class="first_title"><br>Unidad 2: Retos y riesgos en el mundo virtual</h1>
                    <?php $this->session->set_userdata('ruta','modulo7/unidad2/actividad6'); ?>
                </center><br>
                <div class="card mt-4">
                    <div class="card-body">
                    <h4 class="subtitle">Derechos de autor</h4>
                        <div class="contenido"> 
                        <blockquote cite="http://creativecommons.org/licenses/by-nc-nd/3.0/" align="justify">
                            <p class="card-text">
                                "La violación del derecho de autor es un riesgo que está relacionado en su mayoría con
                                la conducta de los usuarios, sin tomar en cuenta
                                que el derecho de autor haya sido violado a propósito o accidentalmente, la violación se
                                le considera como un fraude y pone al violador
                                en riesgo de ser sancionado." Riesgos relacionados con el contacto en línea. Adaptado de
                                Youth Protection Roundtable Tool Kit – Stiftung
                                Digitale Chancen 2009 [1]<br>
                        </blockquote>
                        </p>
                        <p>Código Penal [2] Capitulo VIII de los delitos contra los derechos de autor</p>
                        <p class="card-text">
                            El código penal en su capítulo VIII menciona los delitos y las sanciones
                            para aquellos que violen los derechos de autor, a continuación se mencionan algunos: <br>
                            <strong>Incurrirá en prisión de dos (2) a cinco (5) años y multa de veinte (20) a doscientos
                                (200) salarios mínimos legales
                                mensuales vigentes quien:</strong>
                            <ul>
                                <li>Publique, total o parcialmente, sin autorización previa y expresa del titular del
                                    derecho, una obra inédita de carácter
                                    literario, artístico, científico, cinematográfico, audiovisual o fonograma, programa
                                    de ordenador o soporte lógico.</li>
                                <li>Inscriba en el registro de autor con nombre de persona distinta del autor verdadero,
                                    o con título cambiado o suprimido, o
                                    con el texto alterado, deformado, modificado o mutilado, o mencionando falsamente el
                                    nombre del editor o productor de una
                                    obra de carácter literario, artístico, científico, audiovisual o fonograma, programa
                                    de ordenador o soporte lógico.</li>
                            </ul>
                            <strong> Incurrirá en prisión de dos (2) a cinco (5) años y multa de veinte (20) a mil
                                (1.000) salarios mínimos legales mensuales
                                vigentes quien, salvo las excepciones previstas en la ley: </strong>
                            <ul>
                                <li>Por cualquier medio o procedimiento, sin autorización previa y expresa del titular,
                                    reproduzca una obra de carácter literario,
                                    científico, artístico o cinematográfico, fonograma, videograma, soporte lógico o
                                    programa de ordenador, o transporte, almacene,
                                    conserve, distribuya, importe, venda, ofrezca, adquiera para la venta o
                                    distribución, o suministre a cualquier título dichas reproducciones.</li>
                                <li>Represente, ejecute o exhiba públicamente obras teatrales, musicales, fonogramas,
                                    videogramas, obras cinematográficas, o cualquier otra obra de
                                    carácter literario o artístico sin autorización previa y expresa del titular de los
                                    derechos correspondientes.</li>
                            </ul>
                            <strong> Incurrirá en multa quien:</strong>
                            <ul>
                                <li>Suprima o altere la información esencial para la gestión electrónica de derechos, o
                                    importe, distribuya o comunique ejemplares con la
                                    información suprimida o alterada.</li>
                                <li>Fabrique, importe, venda, arriende o de cualquier forma distribuya al público un
                                    dispositivo o sistema que permita descifrar una señal
                                    de satélite cifrada portadora de programas, sin autorización del distribuidor
                                    legítimo de esa señal, o de cualquier forma de eludir, evadir,
                                    inutilizar o suprimir un dispositivo o sistema que permita a los titulares del
                                    derecho controlar la utilización de sus obras o producciones,
                                    o impedir o restringir cualquier uso no autorizado de éstos.</li>
                            </ul>
                        </p>

                        <h4 class="subtitle">Bibliografía:</h4>
                        [1] UNAOC, UNESCO, "Módulo 7: Oportunidades y retos en internet; unidad 2: retos y riesgos en el mundo virtual", en <em>Media Information Literacy for Teachers</em>, 2020.
                                <a href="http://unesco.mil-for-teachers.unaoc.org/modules/modulo-7-oportunidades-y-retos-en-internet/unidad-2-retos-y-riesgos-en-el-mundo-virtual/?lang=es" target="_blank" rel="noopener noreferrer">
                                http://unesco.mil-for-teachers.unaoc.org/modules/modulo-7-oportunidades-y-retos-en-internet/unidad-2-retos-y-riesgos-en-el-mundo-virtual/?lang=es</a>
                       <br> [2] Código penal Colombiano: https://www.oas.org/dil/esp/codigo_penal_colombia.pdf 

                        </div>
                    </div>
                </div>
            </div>

            <br>
            <center>
                <a href="<?php echo base_url();?>modulo7/unidad2/actividad5" class="btn btn_navegacion">Anterior</a>
                <a href="<?php echo base_url();?>modulo7/unidad2/evaluacion1" class="btn btn_navegacion">Siguiente</a>
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

<style>
.subtEv {
    font-size: 1.2em;
    font-family: 'Roboto', sans-serif;

    font-weight: 500;
}
</style>